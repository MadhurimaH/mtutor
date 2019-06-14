To generate pincode database from all_india_pin_code.csv
--------------------------------------------------------


Source File:
-----------
http://data.gov.in/sites/default/files/all_india_pin_code.csv


Tools required:
--------------
ubuntu, csvkit, php


Steps:
------
1. download the source file into current directory.

2. update database credentials in "pincode.php" file.

3. Just Run the bash file "pincode.sh"
//This will take the csv file, adjust columns and sort the result. Next it will call "pincode.php" to populate the db locally.


TODO:
-----
trim data before inserting into db columns
e.g. area names like 'Delhi B.O' should be changed to 'Delhi'
