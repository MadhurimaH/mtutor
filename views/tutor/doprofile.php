<?php

//include_once ('../../models/tutor.php');

	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	
	$pk = $_POST['pk'];
	$name = $_POST['name'];
	$value = $_POST['value'];
	/*
	 Check submitted value
	 */	
	
	if(!empty($value)) {
		/*
		 If value is correct you process it (for example, save to db).
		 In case of success your script should not return anything, standard HTTP response '200 OK' is enough.
	
		 for example:
		 $result = mysql_query('update users set '.mysql_escape_string($name).'="'.mysql_escape_string($value).'" where user_id = "'.mysql_escape_string($pk).'"');
		 */

		
		//TODO: call TutorModel api here ?
/* 		try {
	 		if(TutorModel::doprofileupdate($pk, $name, $value)) {
				//Record updated
			} else {
				//DB error
			}
		}catch(Exception $e) {
			//Error Handling
		}
		*/
		
				
		$dbh = new PDO("mysql:host=localhost;dbname=mtutor", "root", "");
		$query;
				
		if(strpos($name,'qid:') === false) {
			$query = 'UPDATE tutor SET '.$name.'= :value WHERE tid= :pk';

			$stmt = $dbh->prepare($query);
			$stmt->bindValue(':pk', trim($pk));
			$stmt->bindValue(':value', trim($value));
			$stmt->execute();

		} else {
			$pos = strpos($name,':');
			$col_name = substr($name, 0, $pos-1);
			$xml_attr_name = substr($name, $pos+1);
			
			//get the xml file path			
			$query = 'SELECT xml_filepath FROM tut_qual_detail WHERE '.$col_name.' IN (SELECT '.$col_name.' from tutor WHERE tid= :pk)';

			$stmt = $dbh->prepare($query);
			$stmt->bindValue(':pk', trim($pk));
			$stmt->execute();
			
			//$result = $stmt->fetch();
						
			//TODO.. update xml file for attribute($xml_attr_name) as value($value)

		}
	}else {
		header('HTTP/1.0 400 Bad Request', true, 400);
		echo "This data is invalid!";
		
		echo "<pre>";
		print_r('record NOT updated');
		echo "</pre>";
		
	}

?>