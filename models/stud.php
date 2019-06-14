<?php
	class StudModel extends Model {

		private function isValidPinCode($pin) {
			if (strlen($pin) == 6) {
				$this->query('SELECT DISTINCT pincode FROM pincode WHERE pincode=:pin');
				$this->bind(':pin', $pin);
				$row = $this->single();
				if ($row) {
					if ($row['pincode'] == $pin)
						return TRUE;
				}
			}
			return FALSE;
		}

		private function getclassName($classId) {
			$this->query('SELECT class_name from class_master WHERE cl_id = :classId');
			$this->bind(':classId', trim($classId));
			$row = $this->single();
			if ($row){
				return $row['class_name'];
			}
			return "";
		}

		private function getSubjectDetails($subjArray, $isArray = TRUE) {
			//$count = count($subjArray);
			//$subjStr = array_map( 'mysql_real_escape_string', $subjArray);
			if ($isArray) 
				$subjStr = '"'.implode('","', $subjArray).'"';
			else {
				$strArray = explode(',', $subjArray);
				$subjStr = '"'.implode('","', $strArray).'"';
			}
			$sql = "SELECT * FROM sub_master where sub_id in ({$subjStr})";
			$this->logger->LogInfo('getSubjectDetails SQl='.$sql);
			$this->query($sql);
			$rows = $this->resultSet();
			return $rows;
		}

		public function register(){
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$errMsg =  "";
			$error = array();
			$elems = array();
			$dataModel = array();
			$elems['fieldName'] = $_SESSION['user_data']['name'];
			if($post['submit']) {
				//print_r($post);
				if ($post['fieldName'] == '') {
					$error['fieldName'] = 'Name can\'t be empty';
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

				$className = $this->getclassName($post['fieldClass']);
				if ($className == '') {
					$error['fieldClass'] = 'Invalid Class Name';					
				} else {
					$elems['fieldClass'] = array("classId" => $post['fieldClass'], "className" => $className);	
					//$elems['fieldClass'] = $post['fieldClass'];
				}

				$subjectList = $this->getSubjectDetails($post['fieldSubject']);
				if (empty($subjectList)) {
					$elems['fieldSubject'] = $post['fieldSubject'];
					$error['fieldSubject'] = 'Subject Names Not Registered';
				} else {
					$elems['fieldSubject'] = $subjectList;
				}

				$elems['fieldName'] = $post['fieldName'];
				$elems['gender'] = $post['gender'];
				$elems['fieldPincode'] = $post['fieldPincode'];
				$elems['fieldAddress'] = $post['fieldAddress'];
				$elems['fieldCity'] = $post['fieldCity'];
				$elems['fieldPhone'] = $post['fieldPhone'];
				$elems['fieldSchool'] = $post['fieldSchool'];												
				if (empty($error)) {
					$sid = $_SESSION['user_data']['uid'];
					//save the profile and open dashboard
					$sql = "INSERT INTO student(sid,name,address,gender,image_path,city,pincode,mob_number,mod_reqd,class_id, sub_ids, school) VALUES (:sid,:name,:address,:gender,:image_path,:city,:pincode,:mob_number, 1, :class_id, :sub_ids, :school)";
					$this->query($sql);
					$this->bind(':sid', $sid);
					$this->bind(':name', $elems['fieldName']);
					$this->bind(':address', $elems['fieldAddress']);
					$this->bind(':gender', $elems['gender']);
					$this->bind(':image_path', "prof_pic");
					$this->bind(':city', $elems['fieldCity']);
					$this->bind(':pincode', $elems['fieldPincode']);
					$this->bind(':mob_number', $elems['fieldPhone']);
					$this->bind(':class_id', $post['fieldClass']);
					$this->bind(':sub_ids', implode(',', $post['fieldSubject']));
					$this->bind(':school', $elems['fieldSchool']);
					//echo $sql."<br>";
					$res = $this->execute();
					//echo "result=".$res;
					if ($res){
						// update status field and redirect to dashboard;
						$this->query('Update users SET status = 2 WHERE u_id = :uid');
						$this->bind(':uid', $sid);
						$rows = $this->single();
						$loc = "Location: ".ROOT_URL."/stud/dashboard";
						header($loc);
					}
				}
				$dataModel = array("errors" => $error);	
				//print_r($dataModel);
			}
			$dataModel['elems'] =  $elems;
			return $dataModel;
		}

		public function dashboard(){
			$sid = 'S000003';
			$uname = 'Madhurima';
			$email = 'm@mail.com';
			//fetch details from student table
			$this->query("SELECT sid, name, address, gender, city, pincode, school, class_id, sub_ids FROM student WHERE sid = :sid");
			$this->bind(':sid', $sid);
			$row = $this->single();
			$dataModel = array();
			if ($row)
			{
				$dataModel['uid'] = $sid;
				$dataModel['name'] = $row['name'];
				$dataModel['gender'] = $row['gender'];
				$dataModel['email'] = $email;
				$dataModel['address'] = $row['address'];
				$dataModel['city'] = $row['city'];
				$dataModel['state'] = 'Delhi';
				$dataModel['pincode'] = $row['pincode'];
				$dataModel['class'] = $row['class_id'];
				$dataModel['school'] = $row['school'];
				$subjectNames = $this->getSubjectDetails($row['sub_ids'], FALSE);
				$dataModel['subjects'] = $subjectNames;
			}
			return $dataModel;
		}

		public function search(){
			return;
		}

		public function update() {
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$data = array();
			$error = "";
			$errCode = 0;
			$action = strtolower(trim($post['name']));
			$value = $post['value'];
			$pk = $post['pk'];
			$sql = "";
			$uid = 'S000003';
			//$this->logger->LogInfo('Stud->update() params (name, value):'. implode(",", $post));
			//print_r($post);

			if (Utils::stringIsNullOrWhitespace($value)) {
				$error = $action. " cannot be empty";
				$errCode = 1;
			} else if (empty($value)) {
				$error = $action. " cannot be empty";
				$errCode = 1;
			} else {
				switch($action) {
					case "name":
						$sql = 'Update student SET name = :value WHERE sid = :uid';
						break;
					case "gender":
						if ($value == 'F' || $value == 'M') {
							$sql = 'Update student SET gender = :value WHERE sid = :uid';
						} else {
							$errCode = 2;
							$error = "Invalid gender value";
						}
						break;
					case "pincode":
						if ($this->isValidPinCode($value) == TRUE) {
							$sql = 'Update student SET pincode = :value WHERE sid = :uid';
						} else{
							$this->logger->LogInfo('Invalid pincode'.$value);
							$errCode = 3;
							$error = "Invalid Pincode";
						}	
						break;

					case "address":
						$sql = 'Update student SET address = :value WHERE sid = :uid';
						break;
					case "city":
						$sql = 'Update student SET city = :value WHERE sid = :uid';
						break;

					case "state":
						$sql = 'Update student SET state = :value WHERE sid = :uid';
						break;
					case "school":
						$sql = 'Update student SET school = :value WHERE sid = :uid';
						break;
					case "class":
						$sql = 'Update student SET class = :value WHERE sid = :uid';
						break;
					case "subjects":
						$sql = 'Update student SET sub_ids = :value WHERE sid = :uid';
						$value =  implode(',', $value);
						break;
				} 
			}
			if ($errCode == 0) {
				$this->query($sql);
				$this->bind(':value', $value);
				$this->bind(':uid', $uid);
				$this->logger->LogInfo($sql);
				$this->execute();
			} 
			$data['errCode'] = $errCode;
			$data['error'] = $error;
			return $data;
		}
	}
?>