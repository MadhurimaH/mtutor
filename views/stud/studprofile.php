<?php
  
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

	
class stud_profile
{
	 private $title = "mtutor - Student Profile";
	 private $links = array();
	 private $pk;
		 	
	 public function __construct() {
	   $this->links[0] = ROOT_URL.'img/arjun.jpg';
	   $this->links[1] = ROOT_URL.'views/stud/doprofile.php';
		   
	   //TODO.. get pk from tutor table
	   $this->pk='t1234';
	 }
       	 

	function display() {
		$headpage = new header();
		$headpage->setTitle($this->title);
		if (config::$debug == TRUE)
		  $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome", "bootstrap-editable"));
		else
		  $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min", "bootstrap-editable.min"));
        		
		$headpage->display();
		$bodyheader = new Bheader();
		$bodyheader->display();

                $showpage = <<<PAGEDOC

<h1 class="text-center" style="padding-top: 20px; font-family:'Comic Sans MS';"> Your Profile </h1><br>
    <div class="container">
    	<div class="row">
    		<div class="col-md-3 col-md-offset-1">
    			<div class="panel panel-default">
		    		<div class="panel-heading">
		    			< class="img-responsive img-thumbnail center-block"><br>
		    			<p class="text-center">Arjun Handa<br>
		    			Silver Member</p>
		    		</div>

		 			<div class="panel-body">
		 				<ul class="nav nav-pills nav-stacked">    
		 				<li><a href="#"><span class="glyphicon glyphicon-th-list"> Dashboard</span></a></li>    
		 				<li class="active"><a href="#"><span class="glyphicon glyphicon-user"> Profile</span></a></li>    
		 				<li><a href="#"><span class="glyphicon glyphicon-envelope"> Invite For Reviews</span></a></li> 
		 				<li><a href="#"><span class="glyphicon glyphicon-star"> Courses</span></a></li>
		 				<li><a href="#"><span class="glyphicon glyphicon-refresh"> Find a Tutor</span></a></li>
		 				<li><a href="#"><span class="glyphicon glyphicon-cog"> Account</span></a></li>
		 				</ul>
		 			</div>

		 			<div class="panel-footer">
		 				<button type = "submit" class="btn btn-primary btn-sm">Sign Out </button>
		 			</div>
		    	</div>
		    </div>
    		
    		<div class="col-md-7">
    			

    					<p class="well well-sm"><label for="name"> Name: </label>
						<a href="#" id="name" data-type="textarea" data-rows="1" data-title="Enter Name"> Arjun</a>
						</p> 

    					<p class="well well-sm" ><label for="sname"> School Name: </label>
						<a href="#" id="sname" data-name="sname" data-type="textarea" data-url="{$this->links[1]}" data-rows="2" data-title="Enter school name" data-pk="{$this->pk}">DPS Dwarka</a></p>

						<p class="well well-sm"><label for="class"> Class: </label>
						<a href="#" id="class" data-name="class" data-type="textarea" data-url="{$this->links[1]}" data-rows="2" data-title="Enter your class" data-pk="{$this->pk}">9 <sup>th</sup> standard</a></p>
						
						<p class="well well-sm"><label for="address"> Your address: </label>
						<a href="#" id="address" data-name="address" data-type="textarea" data-url="{$this->links[1]}" data-rows="2" data-title="" data-pk="{$this->pk}">3398, Mahindra Park, Pitampura - 110034</a></p>

						<p class="well well-sm"><label for="contact"> Contact Number: </label>
						<a href="#" id="contact" data-name="contact" data-type="textarea" data-url="{$this->links[1]}" data-rows="2" data-title="Enter school name" data-pk="{$this->pk}"> 9844523876</a></p>

						<p class="well well-sm"><label for="subjects"> Registered Subjects: </label>
						<a href="#" id="subjects" data-name="subjects" data-type="textarea" data-url="{$this->links[1]}" data-rows="2" data-title="" data-pk="{$this->pk}"> Physics and Maths </a></p>

						<p class="well well-sm"><label for="city"> City: </label>
						<a href="#" id="city" data-name="city" data-type="textarea" data-url="{$this->links[1]}" data-rows="2" data-title="Enter your city" data-pk="{$this->pk}"> Delhi</a></p>

						<p class="well well-sm"><label for="pincode"> Pincode: </label>
						<a href="#" id="pincode" data-name="pincode" data-type="textarea" data-url="{$this->links[1]}" data-rows="2" data-title="Enter pincode" data-pk="{$this->pk}"> 110034</a></p>
  				
    		</div>
    	</div>
    </div>

PAGEDOC;
		echo $showpage;
  		$footer = new BFooter();

		if (config::$debug == TRUE)
		  $footer->addScript('<script src="/mtutor/js/bootstrap-editable.js"></script>');
		else
		  $footer->addScript('<script src="/mtutor/js/bootstrap-editable.min.js"></script>');



$script = <<<SCRIPTDOC

<script>
		$(document).ready(function(){
			$.fn.editable.defaults.mode = 'inline';

			//$('#name').editable();
			$('#sname').editable();
			$('#class').editable();
			$('#address').editable();
			$('#contact').editable();
			$('#subject').editable();
			//$('#city').editable();
			$('#pincode').editable();
			

    		$(".nav-tabs a").click(function(){
       			$(this).tab('show');
       		});
       	});	
</script>


SCRIPTDOC;
  		$footer->addScript($script);
  		$footer->display();
	}

}

	$obj = new stud_profile();
	$obj -> display();

?>