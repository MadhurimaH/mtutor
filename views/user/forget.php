<?php
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

class frgtpview
	{
		private $title = "mTutor - Forgot Password";
		private $links = array();

		public function __construct() {
		  $this->links[0] = ROOT_URL.'user/login';
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

		   $showpage = <<< PAGEDOC
<!-- Start main content -->
<div class="container" style="padding-top:60px;">
	<h3 style="font-size: 30px; text-align: center;" class="col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 ">Forgot Password</h3>
	<div class=" col-md-6 col-md-offset-3 col-xs-12 col-sm-12">
	  <div style="padding: 40px 40px 40px 40px">		
		<form class="form-horizontal" action="do_4gotpswd.php" method="post" >

			<div class="panel panel-default">				

				<div class="panel-heading " >
					<p> Forgot your password? Enter the e-mail address of your account to reset your password, otherwise you can <a href="{$this->links[0]}"> Try again </a> </p>
				</div>

PAGEDOC;
		echo $showpage;
		Messages::display();
		$showpage2 = <<< PAGEDOC2
				<div class="panel-body">
						<div class="form-group" >
						    <br>
							<label for="email" class="col-md-2 col-md-offset-1"> <h4>Email:</h4> </label>
							<div class="col-md-8">
								<input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required />
							</div>
						</div>
				</div>

				<div class="panel-footer" style="height:60px">
				  <span class="col-md-3">
					<button type="submit" class="btn btn-primary">Submit</button>					
				  </span>
				</div>
			</div>
	    </form>
	</div>
</div>	
</div>
PAGEDOC2;

			echo $showpage2;
			$footer = new BFooter();
			$footer->display();
		}
	}

	$obj = new frgtpview();
	$obj -> display();

?>

