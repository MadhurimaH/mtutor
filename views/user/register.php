<?php

  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

	/**
	* 
	*/
	class registerView
	{
		private $title = "mTutor - register new account";
		private $links = array();

		public function __construct() {
		  $this->links[0] = ROOT_URL.'user/register';
		}


		public function display()
		{
			$headpage = new header();
			$headpage->setTitle($this->title);
			
			if (config::$debug == TRUE)
			  $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));
			else
			  $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min"));
			$headpage->display();

			$bodyheader = new Bheader();
			$bodyheader->display();
			# code...
			$showPage = '<div class="container content"><div class="row">';
			echo $showPage;
			Messages::display();
			$showpage = <<< PAGEDOC
					    		<div class="col-md-5 col-xs-4 col-md-offset-7">
							    	<form class="form-horizontal" action="{$this->links[0]}" method="post">
					    			<div class = "panel panel-default">
					    				<div class = "panel-heading">
					    					REGISTER
					    				</div>
					    				<div class="panel-body">
							    			<div class="form-group">
							    				<label for="nameField" class="col-md-4 col-xs-2">Name</label>
							    				<div class="col-md-7 col-xs-4">
							    					<input type="text" class = "form-control" id = "nameField" placeholder="Your name" name="fieldName" required maxlength = "32" pattern = "[A-Z a-z]*"/>
							    				</div>
							    			</div>

							    			<div class="form-group">
							    				<label for="emailField" class="col-md-4 col-xs-2">Email-id</label>
							    				<div class="col-md-7 col-xs-4">
							    					<input type="email" class = "form-control" id = "emailField" placeholder="Your email-id" name="fieldEmail" required pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
							    				</div>
							    			</div>

							    			<div class="form-group">
							    				<label for="passwordField" class="col-md-4 col-xs-2">Password</label>
							    				<div class="col-md-7 col-xs-4">
							    					<input type="password" class = "form-control" id = "passwordField" placeholder="Your password" name="fieldPassword" required maxlength="20" minlength="8"/>
							    				</div>
							    			</div>

							    			<div class="form-group">
							    				<label for="confirmField" class="col-md-4 col-xs-2">Confirm Password</label>
							    				<div class="col-md-7 col-xs-4">
							    					<input type="password" class = "form-control" id = "confirmField" placeholder="Confirm your password" name="fieldConfirm" required maxlength="20" minlength="8" />
							    				</div>
							    			</div>

							    			<div class="form-group">
							    				<label for="user" class="col-md-4 col-xs-2">Register As:</label>
								    			<div class="col-xs-4 col-md-7">
								    			 	<label for="user">   
								    			 		<input type="radio" value="Tutor" name = "user"/> Tutor	</label>								    			 
								    			 	<label for="user">   
								    			 		<input type="radio" value="Student" name = "user">Student </label>
								    			 </div>
							    			</div>

							    			<div class="form-group">
							    				<label for="captchaField" class="col-md-4 col-xs-2">Captcha</label>
							    				<div class="col-md-7 col-xs-4">
							    					<input type="text" class = "form-control" id = "captchaField" placeholder="Captcha" name="fieldCaptcha" required />
							    				</div>
							    			</div>
							    		</div>
							    		<div class="panel-footer">
							    			<button type = "submit" name="submit" value="submit" class="btn btn-primary btn-sm" onclick="validateall()">Register </button> 
							    			<a href = "#" class="pull-right">Login </a>
							    		</div>
					    			</div>
					    			</form>
					    		</div>
					    	</div>
					    </div>
PAGEDOC;
			echo $showpage;
			$footer = new BFooter();
			$script = '<script type="text/javascript">
					    	function validateall()
					    	{
						    	var x = document.getElementById("confirmField").value;
						    	var y = document.getElementById("passwordField").value;
						    	if (x != y)
						    	{
						    		document.getElementById("confirmField").setCustomValidity("Passwords Don\'t Match");
						    		return false;
						    	}
						    	else
						    	{
						    		document.getElementById("confirmField").setCustomValidity("");
						    		return true;
						    	}						    	
					    	}
					    </script>';
			$footer->addscript($script);		    			
    		$footer->display();
		}
	}

		$obj = new registerView();
		$obj->display();
	
?>


