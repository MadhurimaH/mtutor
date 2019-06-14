#!/usr/bin/env bash

#mkdir -p out

# Now we try to fetcht the lastes CSV from data.gov.in website
#wget http://data.gov.in/sites/default/files/all_india_pin_code.csv

# Now we download an essential PHP scrtip fo json2xml conversion
#wget --no-check-certificate https://raw.githubusercontent.com/nishad/json2xml/master/json2xml.php

# We make sure that nasty Excel created file going to be UTF-8 to avoid futher headaches
# //IGNORE ignores all sort of unwanted charectors, iconv is a unix native tool.
iconv -f ascii -t utf8//IGNORE all_india_pin_code.csv > all_india_pin_code_utf8.csv

#Additional options for csv commands (e.g. increase csv field_size_limit (-z 524288000) //500 * 1024 * 1024)

# Cleaning UP CSV to move forward (Just to make sure it is structured, and well formatted)
#csvclean all_india_pin_code_utf8.csv > all_india_pin_code_utf8_out.csv

# Now we will move the pincode towards first column, It'll improve sorting time.
#csvcut -c 2,1,3,4,5,6,7,8,9,10 all_india_pin_code_utf8.csv > pincode_raw.csv
#Column names original => officename,pincode,officeType,Deliverystatus,divisionname,regionname,circlename,Taluk,Districtname,statename
#Column names we need  => pincode,officename,Districtname,statename
csvcut -c 2,1,9,10 all_india_pin_code_utf8.csv > pincode_raw.csv

# Now we sort things, to make all coumns organinzed.
csvsort pincode_raw.csv > pincodes.csv

# remove the header line to make it only a list of records, that'll eliminate errors
sed -i '1d' pincodes.csv

#remove tempfiles
rm all_india_pin_code_utf8.csv
#rm all_india_pin_code_utf8_out.csv
rm all_india_pin_code.csv
rm pincode_raw.csv

# populate db
# option1: populate db using csvsql
#csvsql --db sqlite:///pincodes.db --insert pincodes.csv

# option2: populate db using php
php test.php

