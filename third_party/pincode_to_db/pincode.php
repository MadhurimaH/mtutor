<?php
	$server = "localhost";
	$username = "<your_db_user_name>";
	$password = "<your_db_pwd>";
	$db = "<db>";

	//connect to mysql
	$conn = mysql_connect($server, $username, $password);

	if($conn) {
		//select db
		$db_selected = mysql_select_db($db, $conn);
		if (!$db_selected) {
			//$sql = "CREATE DATABASE IF NOT EXISTS $db";
			//if (mysql_query($sql, $link)) {
			//	echo "Database created successfully\n";
			//	if(!mysql_select_db($db, $conn)) {
			//		echo "Error conecting to database\n";
			//		return;
			//	}
			//}
			
			echo 'Error in db connection ' . mysql_error() . "\n";
			return;
		}
	
		echo "Connected to database\n";

		$sql = "CREATE TABLE IF NOT EXISTS pincode (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), pincode INT(6), area VARCHAR(32), district VARCHAR(32), state VARCHAR(32))";
		if(!mysql_query($sql, $conn)) {
			echo "Error creating table\n";
			return;
		}
		
		populate_db($conn);
		mysql_close($conn);
	} else {
		echo 'Error in db connection ' . mysql_error() . "\n";
	}


	function populate_db($conn){
		$file = fopen("pincodes.csv", "r");
		if($file) {
			echo 'Inserting values...';
			while(!feof($file)) {
				$line = fgets($file);
				$words = explode(",", $line);
				$pincode = $words[0];
				$area = $words[1];
				$district = $words[2];
				$state = $words[3];
				$sql = "INSERT INTO pincode (pincode, area, district, state) VALUES ('$pincode', '$area', '$district', '$state')";
				mysql_query($sql, $conn);
				mysql_error($conn);
			}
			fclose($file);
		} else {
			echo 'Error in opening csv file';
		}
	}

?>
