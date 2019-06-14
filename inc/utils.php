<?php
require ('third_party/PHPMailer/PHPMailerAutoload.php');

	class Utils {
		static function isMailIdValid($mailid){
			$v = "/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+.[A-Za-z]{2,4}$/";
			if(preg_match($v, $mailid)){
				return true;
			}
			return true;				
		}

		static function getUserType($val) {
			$userType = STUDENT;
			$str = trim(strtolower($val));
			switch ($str){
				case 'tutor': 
				case 't':
					$userType =  TUTOR;
					break;
				case 'student':
				case 's':
					$userType =  STUDENT;
					break;
			}
			return $userType;
		}
		
		static function sendMail($from, $to, $sub, $body, $altbody) {
			$mail = new PHPMailer;
			
			//$mail->SMTPDebug = 3;                               // Enable verbose debug output			
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';						  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'tutor.rohini';	                  // SMTP username
			$mail->Password = 'hmbpihtr';                         // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to
			
			$mail->setFrom($from, 'Mailer');
			//$mail->addAddress('joe@example.net', 'Joe User');    // Add a recipient
			$mail->addAddress($to);               // Name is optional
			$mail->addReplyTo($from);
			//$mail->addCC($to);
			//$mail->addBCC($to);
			//$mail->addAttachment('file_path');         			// Add attachments
			//$mail->addAttachment('file_path', 'optional_name');   // Optional name
			
			$mail->isHTML(true);                                    // Set email format to HTML
			
			$mail->Subject = $sub;
			$mail->Body    = $body;
			$mail->AltBody = $altbody;
			
			if(!$mail->send()) {
				return false;
			} else {
				return true;
			}
			
		}

	// findkey, ref: http://stackoverflow.com/questions/19420715/check-if-specific-array-key-exists-in-multidimensional-array-php
	static function multiKeyExists(array $arr, $key) {
	    // is in base array?
	    if (array_key_exists($key, $arr)) {
	        return true;
	    }

	    // check arrays contained in this array
	    foreach ($arr as $element) {
	        if (is_array($element)) {
	            if (self::multiKeyExists($element, $key)) {
	                return true;
	            }
	        }
	    }
	    return false;
	}

	static function struuid($entropy)
	{
	    $s=uniqid("",$entropy);
	    $num= hexdec(str_replace(".","",(string)$s));
	    $index = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $base= strlen($index);
	    $out = '';
	        for($t = floor(log10($num) / log10($base)); $t >= 0; $t--) {
	            $a = floor($num / pow($base,$t));
	            $out = $out.substr($index,$a,1);
	            $num = $num-($a*pow($base,$t));
	        }
	    return $out;
	}

	//echo struuid(false); //Return sample: F4518NTQTQ
	//echo struuid(true);  //Return sample: F451FAHSUCD90N6YNRBQHLZ9E1W

	static function stringIsNullOrWhitespace($text){
	    return ctype_space($text) || $text === "" || $text === null;
	}
}
?>