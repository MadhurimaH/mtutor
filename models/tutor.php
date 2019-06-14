<?php

class TutorModel extends Model{

	private function getclassNames($classArray) {
		$classStr = '"'.implode('","', $classArray).'"';
		$sql = "SELECT * FROM class_master where cl_id in ({$classStr})";
		$this->query($sql);
		$rows = $this->resultSet();
		return $rows;
	}
	
	private function getSubjectDetails($subjArray) {
		//$count = count($subjArray);
		//$subjStr = array_map( 'mysql_real_escape_string', $subjArray);
		$subjStr = '"'.implode('","', $subjArray).'"';
		$sql = "SELECT * FROM sub_master where sub_id in ({$subjStr})";
		$this->query($sql);
		$rows = $this->resultSet();
		return $rows;
	}

	public function register(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		//echo "<pre>";print_r($post);echo "</pre>";
		$errMsg =  "";
		$error = array();
		$elems = array();
		$dataModel = array();
		$elems['fieldName'] = $_SESSION['user_data']['name'];

		if($post['submit']) {
			//print_r($post);
			if ($post['fieldMobNumber'] == '') {
				$error['fieldMobNumber'] = 'Name can\'t be empty';
			}
			if ($post['gender'] == '') {
				$error['gender'] = 'Gender can\'t be empty';
			}
			if ($post['fieldPincode'] == '') {
				$error['fieldPincode'] = 'Pincode can\'t be empty';
			}
			if ($post['fieldAddress'] == '') {
				$error['fieldAddress'] = 'Address can\'t be empty';
			}

			$classList = $this->getclassNames($post['fieldClass']);
			if (empty($classList)) {
				$elems['fieldClass'] = $post['fieldClass'];
				$error['fieldClass'] = 'Class Names Not Registered';
			} else {
				$elems['fieldClass'] = $classList;
			}
			
			$subjectList = $this->getSubjectDetails($post['fieldSubject']);
			if (empty($subjectList)) {
				$elems['fieldSubject'] = $post['fieldSubject'];
				$error['fieldSubject'] = 'Subject Names Not Registered';
			} else {
				$elems['fieldSubject'] = $subjectList;
			}

			$elems['fieldName'] = $post['fieldName'];
			$elems['fieldMobNumber'] = $post['fieldMobNumber'];
			$elems['gender'] = $post['gender'];
			$elems['fieldAddress'] = $post['fieldAddress'];
			$elems['fieldCity'] = $post['fieldCity'];
			$elems['fieldPincode'] = $post['fieldPincode'];
			$elems['fieldBirth'] = $post['fieldBirth'];
				
			if (empty($error)) {
				$tid = $_SESSION['user_data']['uid'];
				//save the profile and open dashboard
				$sql = "INSERT INTO tutor(tid,name,address,city,pincode_id,mob_number,gender,dob,class_ids,sub_ids) VALUES (:tid,:name,:address,:city,:pincode_id,:mob_number,:gender,:dob,:class_ids,:sub_ids)";
				$this->query($sql);
				$this->bind(':tid', $tid);
				$this->bind(':name', $elems['fieldName']);
				$this->bind(':address', $elems['fieldAddress']);
				$this->bind(':city', $elems['fieldCity']);
				$this->bind(':pincode_id', $elems['fieldPincode']);
				$this->bind(':mob_number', $elems['fieldMobNumber']);
				$this->bind(':gender', $elems['gender']);
				$this->bind(':dob', $elems['fieldBirth']);
				$this->bind(':class_ids', implode(',', $post['fieldClass']));
				$this->bind(':sub_ids', implode(',', $post['fieldSubject']));

				//echo $sql."<br>";
				$res = $this->execute();
				//echo "result=".$res;
				if ($res){
					// update status field and redirect to dashboard;
					$this->query('Update users SET status = 2 WHERE u_id = :uid');
					$this->bind(':uid', $tid);
					$rows = $this->single();
					$loc = "Location: ".ROOT_URL."/tutor/dashboard";
					header($loc);
				}
			}
			$dataModel = array("errors" => $error);	
			//print_r($dataModel);
		}
		$dataModel['elems'] =  $elems;
		return $dataModel;
	}
	
	public function register2(){
		return;		
	}
	
	
	public function sendMessage() {
		return;
	}

	public function dashboard(){
		return;
	}

	public function search(){
		return;
	}

	public static function doprofileupdate($pk, $name, $value){
		if(strpos($name,'qid:') === false) {
			$this->query('UPDATE tutor SET '.$name.'= :value WHERE tid= :pk');
			
			$this->bind(':pk', trim($pk));
			$this->bind(':value', trim($value));

			$row = $this->single();			
			if ($row){
				return true;
			}
	
			return false;
		} else {
			$pos = strpos($name,':');
			$col_name = substr($name, 0, $pos-1);
			$xml_attr_name = substr($name, $pos+1);
			
			//get the xml file path			
			$this->query('SELECT xml_filepath FROM tut_qual_detail WHERE '.$col_name.' IN (SELECT '.$col_name.' from tutor WHERE tid= :pk)');
			$this->bind(':pk', trim($pk));
			
			$row = $this->single();
			if ($row){
				return true;
			}
	
			return false;
			
			//TODO.. update xml file for attribute($xml_attr_name) as value($value)

		}
	}
	
	public function publicpro(){
		return;
	}
}
?>