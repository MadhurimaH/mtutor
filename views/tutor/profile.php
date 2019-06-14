<?php
  
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

	
class private_prof
{
	 private $title = "mtutor - Private Profile";
	 private $links = array();
	 private $pk;
		 	
	 public function __construct() {
	   $this->links[0] = ROOT_URL.'img/pro_pic.png';
	   $this->links[1] = ROOT_URL.'views/tutor/doprofile.php';
		   
	   //TODO.. get pk from tutor table
	   $this->pk='t1234';
	 }
       	 

	function display() {
		$headpage = new header();
		$headpage->setTitle($this->title);
		if (config::$debug == TRUE)
		  $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome", "timeslot_css", "bootstrap-editable"));
		else
		  $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min", "timeslot_css.min", "bootstrap-editable.min"));
        		
		$headpage->display();
		$bodyheader = new Bheader();
		$bodyheader->display();

                $showpage = <<<PAGEDOC

	<div class="container content">
	 <div class="panel panel-default" style="border-bottom: none;">
	 <div class="panel panel-primary">
	 <div class="panel-heading ">Your profile</div>
	 </div>
		<div class="row">							
			<div class="col-md-3 col-md-offset-2" style="margin-top:80px">
					<div class="col-md-10">
						<img src="\mtutor\ui\pro_pic.jpeg" class="col-md-offset-2 img-thumbnail img-responsive" alt="profile photo">
						<a href="#"> </a>
					</div>

					<div class="col-md-8 col-md-offset-2" >Your Rating:<br>
						<span class="fa fa-star"> </span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-empty"></span>
						<span class="fa fa-star-o"></span><b><br><br>
					</div>						
				
					<div class="col-md-10 thumbnail">
						  	<p style="text-align:center">Profile Completed </p>
		   	 				<div class="progress" >
		  						<div class="progress-bar  progress-bar-success progress-bar-striped active"
		  					 	role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">80%</div>
							</div>
					</div>

					<!-- progress-->


					<div class="col-md-10 well well-sm">
						
						<p><label for="address"> Email: </label>
						<a href="#" id="email" data-type="text" data-rows="2" data-title="Enter email">abc@smthing.com</a></p> 

						<p><label for="address"> Address: </label>
						<a href="#" id="address" data-name="address" data-type="textarea" data-url="{$this->links[1]}" data-rows="2" data-title="Enter address" data-pk="{$this->pk}">D Block Janakpuri</a></p> 
						
						<p><label for="gender">Pincode:</label>
						<a href="#" id="pincode" data-name="pincode" data-type="text" data-url="{$this->links[1]}" data-rows="2" data-title="Enter pincode" data-pk="{$this->pk}">111111</a> </p>

						<p><label for="city"> City: </label>
						<a href="#" id="city" data-name="city" data-type="textarea" data-url="{$this->links[1]}" data-rows="2" data-title="Enter city" data-pk="{$this->pk}">New Delhi</a> </p>
						
						<p><label for="state">State:</label>
						<a href="#"  id="state" data-name="state" data-type="text" data-url="{$this->links[1]}" data-rows="2" data-title="Enter state">Delhi</a> </p>

						<p><label for="gender">Country:</label>
						<a href="#"  id="country" data-type="text" data-url="{$this->links[1]}" data-rows="2" data-title="Enter country">India</a> </p>

					</div>

					<div class="col-md-10 thumbnail">
	                	<ul class="nav nav-pills nav-stacked">    												

	    					<li ><a data-toggle="pill" href="#reviews" > 
	    					<span class="glyphicon glyphicon-user"></span> Reviews</a></li>
	 												    
	 				    	<li><a data-toggle="pill" href="#find_students">
	    					<span class="glyphicon glyphicon-search"> </span> Find Queries  </a></li>
	    					
	    					<li><a data-toggle="pill" href="#payment_collection">
	    					<span class="glyphicon glyphicon-usd"> </span> Payment Collection </a></li>										
	  				    </ul>
	  				</div> 
	  			
	  			 	<div class="col-md-10 thumbnail" >
	  			 	Mobile Number : <a href="#" id="m_no" data-name="mob_number" data-type="text" data-url="{$this->links[1]}" data-rows="2" data-title="Change Number" data-pk="{$this->pk}"> +91 2937465839 </a> <br><br>

					Landline Number : <a href="#" id="l_no" data-name="land_number" data-type="text" data-url="{$this->links[1]}" data-rows="2" data-title="Change Number" data-pk="{$this->pk}"> +011 25500000 </a> 
					</div>		
	  				
	  			
					<div class="col-md-10 well well-sm">

						<p><label for="job_det"> Job Details: </label>
						<a href="#" id="job_det" data-type="text" data-url="{$this->links[1]}" data-rows="2" data-title="Enter Job Details" data-pk="{$this->pk}">your job details<br><br></a></p>

						<p><label for="lang"> Languages Known: </label>
						<a href="#" id="lang" data-type="textarea" data-url="{$this->links[1]}" data-rows="2" data-title="Languages you know" data-pk="{$this->pk}"> English German Hindi <br><br></a></p> 
						
						<p><label for="prof_quali">Professional Qualification:</label>
						<a href="#"  id="prof_quali" data-type="text" data-url="{$this->links[1]}" data-rows="2" data-title="Enter pincode" data-pk="{$this->pk}">your professional qualification<br><br></a></p>
	  				</div>
	  			   				  										
				</div>  <!--end of column 1-->

			

				<div class="col-md-6">												
					
					<div class="col-md-9 well well-sm">
						<p><label for="name">Name:</label>
						<a href="#" id="tname" data-type="text" data-title="Enter username"> Your Name</a></p>
						
						<p><label for="gender">Gender:</label>
						<a href="#"  id="gender" data-name="gender" data-type="select" data-url="{$this->links[1]}" data-title="Enter gender" data-pk="{$this->pk}">Male</a></p>
						
						<p><label for="dob">D.O.B.:</label>
						<a href="#"  id="dob" data-name="dob" data-type="text" data-url="{$this->links[1]}" data-title="Enter date of birth" data-pk="{$this->pk}">2016-10-20</a></p>

					</div>
									
					<div class="col-md-9 well well-sm">
						<label for="about"> About: </label>
					    <a href="#" id="about" data-inputclass="maxlength:160;" data-name="about" data-type="textarea" data-rows="3" data-pk="{$this->pk}" data-url="{$this->links[1]}">Write About Yourself<br><br><br></a>
					</div>											

					<div class="col-md-9 well well-sm">
						<label for="experience"> Experience: </label>
					    <a href="#" id="experience" data-inputclass="maxlength:80;" data-type="textarea" data-rows="6" data-pk="{$this->pk}" data-url="{$this->links[1]}">About Your Experience <br><br></a>		
					</div>									

				
				<div class="panel panel-default col-md-9">
				    
				   
				    <div class="panel-heading"> 
						<h4 style="text-align:center; font-weight:bold" >Professional Preference</h4>
					</div>

					<div class=" panel-body">
												
						<div class="thumbnail">
							<label for="subjects"> Subjects:</label>					   
						    <a href="#" id="subject" data-inputclass="maxlength:100;" data-type="textarea" data-rows="3" data-pk="{$this->pk}" data-url="{$this->links[1]}"> Mathematics Accounts<br></a>

						    <label for="board"> Board: </label>					   
						    <a href="#" id="board" data-inputclass="maxlength:20;" data-type="text" data-rows="1" data-pk="{$this->pk}" data-url="{$this->links[1]}">
						    CBSE ICSE<br></a> 

						    <label for="class"> Class:</label>					   
						    <a href="#" id="class" data-inputclass="maxlength:20;" data-type="text" data-rows="2" data-pk="{$this->pk}" data-url="{$this->links[1]}">IX XI<br></a> 

						    <label for="tuition"> Tuition Option:</label>					   
						    <a href="#" id="tuition" data-inputclass="maxlength:25;" data-type="text" data-rows="2" data-pk="{$this->pk}" data-url="{$this->links[1]}">Tutor's Home<br></a> 

						    <label for="p_area"> Preferred Areas:</label>					   
						    <a href="#" id="p_area" data-inputclass="maxlength:25;" data-type="textarea" data-rows="2" data-pk="{$this->pk}" data-url="{$this->links[1]}">Janakpuri Vikaspuri<br></a> 

						    <label for="a_pin"> Area Pincode:</label>					   
						    <a href="#" id="a_pin" data-inputclass="maxlength:25;" data-type="text" data-rows="2" data-pk="{$this->pk}" data-url="{$this->links[1]}">110058</a> 
						</div>

						Your Time Slots:
						<table class="tbl">    
	    				
		    				<div id="head_nav" class="t1" >
		    					<tr>
		   					        <th class="th1">Time</th>
							        <th class="th1">Mon</th>
							        <th class="th1">Tue</th>
							        <th class="th1">Wed</th>
							        <th class="th1">Thr</th>
							        <th class="th1">Fri</th>
							        <th class="th1">Sat</th>
							        <th class="th1">Sun</th>
							    </tr>
							</div>  

							<div>
							    <tr>
							        <th class="th1">Morning</th>
							        <div class="td1">
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            </div>					        
							    </tr>

							    <tr>
							        <th class="th1">Noon</th>
							        <div class="td1">
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							        </div>
							    </tr>

							    <tr>
							        <th class="th1">Evening</th>
							        <div class="td1">
							             <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							        </div>
							    </tr>

							    <tr>
							        <th class="th1">Night</th>
							        <div class="td1">
							             <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							        </div>
							    </tr>
							</div>

						</table>
				  	</div>	
				</div>			<!-- section end-->

  	  	
  
	  	  		<div class="col-md-9">
	  	  		
	  	  			<!-- Nav tabs -->
					<ul class="nav nav-tabs">
					<h3>Qualification</h3>
					<li class="active"><a href="#postgrad" data-toggle="tab">Post Graduate</a></li>
					<li><a href="#graduation" data-toggle="tab">Graduate</a></li>
					<li><a href="#school" data-toggle="tab">Schooling</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content col-md-offset-1" >
						<div class="tab-pane active" id="postgrad">

						<br>
							<p><label for="post_grad">Post Graduate:</label>					   
						    <a href="#" id="post_grad" data-inputclass="maxlength:100;" data-name="qid:pg_deg" data-type="text" data-rows="1" data-pk="{$this->pk}" data-url="{$this->links[1]}"> MSc MBA</a></p>

						    <p><label for="post_specialist">Specialist:</label>					   
						    <a href="#" id="post_specialist" data-inputclass="maxlength:100;" data-name="qid:pg_spec" data-type="text" data-rows="2" data-pk="{$this->pk}" data-url="{$this->links[1]}"> Computer Applications</a></p>

						    <p><label for="post_univ">University:</label>					   
						    <a href="#" id="post_univ" data-inputclass="maxlength:100;" data-name="qid:pg_univ" data-type="text" data-rows="2" data-pk="{$this->pk}" data-url="{$this->links[1]}"> Delhi University</a></p>

						    <p><label for="post_year_pass">Year of Passing:</label>					   
						    <a href="#" id="post_year_pass" data-inputclass="maxlength:100;" data-name="qid:pg_year" data-type="text" data-rows="1" data-pk="{$this->pk}" data-url="{$this->links[1]}"> 2015</a></p>

						    <p><label for="post_sub_studied">Subjects:</label>					   
						    <a href="#" id="post_sub_studied" data-inputclass="maxlength:100;" data-name="qid:pg_sub" data-type="text" data-rows="3" data-pk="{$this->pk}" data-url="{$this->links[1]}"> subjects</a> </p>
						</div>
					
						
						<div class="tab-pane" id="graduation">
							<br>
							<p><label for="grad">Graduate:</label>					   
						    <a href="#" id="grad" data-inputclass="maxlength:100;" data-name="qid:g_deg" data-type="text" data-rows="1" data-pk="{$this->pk}" data-url="{$this->links[1]}"> BBA</a></p>

						    <p><label for="g_specialist">Specialist:</label>					   
						    <a href="#" id="g_specialist" data-inputclass="maxlength:100;" data-name="qid:g_spec" data-type="text" data-rows="2" data-pk="{$this->pk}" data-url="{$this->links[1]}"> Computer Applications</a></p>

						    <p><label for="g_univ">University:</label>					   
						    <a href="#" id="g_univ" data-inputclass="maxlength:100;" data-name="qid:g_univ" data-type="text" data-rows="2" data-pk="{$this->pk}" data-url="{$this->links[1]}"> Delhi University</a></p>

						    <p><label for="g_year_pass">Year of Passing:</label>					   
						    <a href="#" id="g_year_pass" data-inputclass="maxlength:100;" data-name="qid:g_year" data-type="text" data-rows="1" data-pk="{$this->pk}" data-url="{$this->links[1]}"> 2012</a></p>

						    <p><label for="g_sub_studied">Subjects:</label>					   
						    <a href="#" id="g_sub_studied" data-inputclass="maxlength:100;" data-name="qid:sub" data-type="text" data-rows="3" data-pk="{$this->pk}" data-url="{$this->links[1]}"> subjects</a> </p>
						</div>
					
						<div class="tab-pane" id="school">
							<br>
							<p><label for="school">School Name:</label>					   
						    <a href="#" id="school" data-inputclass="maxlength:100;" data-name="qid:s_name" data-type="text" data-rows="1" data-pk="{$this->pk}" data-url="{$this->links[1]}">Sumermal Jain School</a></p>

						    <p><label for="bname">Board Name:</label>					   
						    <a href="#" id="bname" data-inputclass="maxlength:100;" data-name="qid:s_board" data-type="text" data-rows="2" data-pk="{$this->pk}" data-url="{$this->links[1]}"> CBSE</a></p>
	
							<p><label for="s_year_pass">Year of Passing:</label>					   
						    <a href="#" id="s_year_pass" data-inputclass="maxlength:100;" data-name="qid:s_year" data-type="text" data-rows="1" data-pk="{$this->pk}" data-url="{$this->links[1]}">2009 </a></p>

						    <p><label for="s_sub_studied">Subjects:</label>					   
						    <a href="#" id="s_sub_studied" data-inputclass="maxlength:100;" data-name="qid:s_sub" data-type="text" data-rows="3" data-pk="{$this->pk}" data-url="{$this->links[1]}"> subjects</a> </p>
						</div>
					</div>	
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
			//$('#tname').editable();
			$('#gender').editable({
				value: 1,    
				source: [
				    {value: 1, text: 'Male'},
				    {value: 2, text: 'Female'},
				]				
			});
			$('#dob').editable();
			$('#about').editable();
			$('#experience').editable();
			$('#edu_qual').editable();
			$('#subject').editable();
			$('#board').editable();
			$('#class').editable();
			$('#tuition').editable();
			$('#p_area').editable();
			$('#a_pin').editable();
			//$('#email').editable();
			$('#address').editable();
			$('#pincode').editable();
			$('#city').editable();
			//$('#state').editable();
			//$('#country').editable();
			$('#m_no').editable();
			$('#l_no').editable();
			$('#post_grad').editable();
			$('#post_specialist').editable();
			$('#post_univ').editable();
			$('#post_year_pass').editable();
			$('#post_sub_studied').editable();
			$('#grad').editable();
			$('#g_specialist').editable();
			$('#g_univ').editable();
			$('#g_year_pass').editable();
			$('#g_sub_studied').editable();
			$('#school').editable();
			$('#bname').editable();
			$('#s_year_pass').editable();
			$('#s_sub_studied').editable();
			$('#job_det').editable();
			$('#lang').editable();
			$('#prof_quali').editable();
			//$('#about').editable({
			//	tpl: '<textarea maxlength="150"></textarea>'
			//});

    		$(".nav-tabs a").click(function(){
       			$(this).tab('show');
       		});



   			$('td').click(function() 
				{
    			    if ($(this).hasClass('HighLight'))
        			{ 
            			$(this).removeClass('HighLight');
        			}
        			else
        			{
            			$(this).addClass('HighLight');
        			}
    			});

				$('[data-toggle="popover"]').popover();
           });

	</script>
SCRIPTDOC;
  		$footer->addScript($script);
  		$footer->display();
	}

}

	$obj = new private_prof();
	$obj -> display();

?>

