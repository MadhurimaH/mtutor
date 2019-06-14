#!/usr/bin/env bash

# Simple script to generate static API for IndiaPost Pincodes
# This script requires csvkit, jq
# Make sure you did 'pip install csvkit' before running this script.
# Installation of jq is fairly simple, 'brew install jq' will do in Mac

# Get CSV dataset from
# https://data.gov.in/catalog/all-india-pincode-directory

# Declaring Variables
base=api/v01
version=1.0.1

# Here we create a folder, Just for Keeping things tidy
#mkdir -p $base/{csv,json,html,tsv,xml,all}
mkdir -p out

# Now we try to fetcht the lastes CSV from data.gov.in website
#wget http://data.gov.in/sites/default/files/all_india_pin_code.csv

# Now we download an essential PHP scrtip fo json2xml conversion
#wget --no-check-certificate https://raw.githubusercontent.com/nishad/json2xml/master/json2xml.php

# We make sure that nasty Excel created file going to be UTF-8 to avoid futher headaches
# //IGNORE ignores all sort of unwanted charectors, iconv is a unix native tool.
iconv -f ascii -t utf8//IGNORE all_india_pin_code.csv > all_india_pin_code_utf8.csv

# Cleaning UP CSV to move forward (Just to make sure it is structured, and well formatted)
csvclean all_india_pin_code_utf8.csv

# Now we will move the pincode towards first column, It'll improve sorting time.
csvcut -c 2,1,3,4,5,6,7,8,9,10 all_india_pin_code_utf8_out.csv > pincode_raw.csv

# Now we sort things, to make all coumns organinzed.
csvsort pincode_raw.csv > pincodes.csv

# We cut out only pincodes, to make a pin index
#csvcut pincodes.csv -c pincode  > pin_index.txt

# remove the header line to make it only a list of pincodes, that'll eliminate errors
# sed is a unix native tool (1d -> line 1 delete, -i dont make copy)
#sed -i '' 1d pin_index.txt

sed -i '' 1d pincodes.csv

# Now we sort and create a unique pin_list.txt
# sort is a unix native tool, we dont need to sort it again, but I just liked it that way
# -u is to make unique, actually we can use uniq command as well.
#sort -u pin_index.txt > pin_list.txt

# #### From here csvkit methode (Just to show it's simple) #####
#
#while read pin; do
# csvgrep -c 2 -m $pin pincodes.csv > api/$pin.csv
#	csvjson csv/$pin.csv > json/$pin.json
#done <pin_list.txt
#
# #### We won't use this since it is terribily slow ##### 

# We outsource the Job to sqlite, a humbly tiny db manager
# With csvkit we load the csv to an sql database
csvsql --db sqlite:///pincodes.db --insert pincodes.csv

while read pin; do
	sqlite3 -header -csv pincodes.db "select * from pincodes where pincode is $pin;" > $base/csv/$pin.csv
	csvclean $base/csv/$pin.csv
	rm $base/csv/$pin.csv
	mv $base/csv/${pin}_out.csv $base/csv/$pin.csv
	git add $base/csv/$pin.csv
	git commit -m "CSV for $pin version $version"
	csvjson $base/csv/$pin.csv | jq . > $base/json/$pin.json
	git add $base/json/$pin.json
	git commit -m "JSON for $pin version $version"
	csvformat -T $base/csv/$pin.csv > $base/tsv/$pin.tsv
	git add $base/tsv/$pin.tsv
	git commit -m "TSV for $pin version $version"
	sqlite3 -header -html pincodes.db "select * from pincodes where pincode is $pin;" | tidy --show-body-only yes > $base/html/$pin.html
	git add $base/html/$pin.html
	git commit -m "HTML for $pin version $version"
	echo "$pin generated"
	echo $pin >> completed.txt
done <pin_list.txt

# Generate & Move Mamoth datasets

# A MySQL version for the hungry people
# csvsql -i mysql > pincodes.sql
# mv pincodes.sql all

mv pincodes.csv $base/all
git add $base/all/picodes.csv
git commit -m "All Pincodes CSV for version $version"
mv pincodes.db $base/all
git add $base/all/picodes.db
git commit -m "All Pincodes SQLite for version $version"
mv pin_list.txt $base/all/pinlist.txt
git add $base/all/pinlist.txt
git commit -m "Pincodes list for version $version"

# Housekeeping
rm all_india_pin_code_utf8.csv
rm all_india_pin_code_utf8_out.csv
rm all_india_pin_code.csv
rm pincode_raw.csv
rm pin_index.txt
