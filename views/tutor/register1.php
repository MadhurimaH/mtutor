<?php

include_once ('inc/header.php');
include_once ('inc/bheader.php');
include_once ('inc/bfooter.php');

/**
* 
*/
class profile_r2_view
{
	public $title="mtutor-profile registeration of tutor page 2";

	function display1() {
    $headpage = new header();
    $headpage->setTitle($this->title);
 
    if (config::$debug == TRUE)
      $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));
    else
      $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min"));
    $headpage->display();

    $bodyheader = new Bheader();
    $bodyheader->display();
    
	}

	function display2()
	{
		$footer = new BFooter();
    	$footer->display();
	}
	
}
	
	$obj=new profile_r2_view();
	$obj->display1();


?>	

			    
			    <h3 class="text-center"> Qualifications </h3>
			    <div class="container">
			    	<div class="row">
			    		<form class="form-horizontal" action="doQualification.php" method="post">
			    			<div class = "panel panel-default">
			    				<div class = "panel-heading">
			    					Tell your Qualifications
			    				</div>
			    				<div class="row">

						<div class="board">
							<ul class="nav nav-tabs">
								<div class="liner" style="margin: auto;"></div>
								<li class="active" style="width:20%;"><a style="width:70px; height:70px;margin:auto;" href="#"><span class="round-tabs"><i class="glyphicon glyphicon-home"></i></span></a></li>
								<li class="disabled" style="width:20%;"><a style="width:70px; height:70px;margin:auto;" href="#"><span class="round-tabs"><i class="glyphicon glyphicon-user"></i></span></a></li>
								<li class="disabled" style="width:20%;"><a style="width:70px; height:70px;margin:auto;" href="#"><span class="round-tabs"><i class="glyphicon glyphicon-gift"></i></span></a></li>
								<li class="disabled" style="width:20%;"><a style="width:70px; height:70px;margin:auto;" href="#"><span class="round-tabs"><i class="glyphicon glyphicon-comment"></i></span></a></li>
								<li class="disabled" style="width:20%;"><a style="width:70px; height:70px;margin:auto;" href="#"><span class="round-tabs"><i class="glyphicon glyphicon-ok"></i></span></a></li>
							</ul>
						</div>
						</div>
			    			
			    				<div class="panel-body">
			    						<div class="form-group">
					    				<label for="PostGraduateField" class="col-md-3 col-xs-2 col-md-offset-2">Post Graduate</label>
					    				<div class="col-md-5 col-xs-10">
					    					<select>
					    						<option>Mca</option>
					    						<option>Mtech</option>
					    						<option>MSc</option>
					    					</select>
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<label for="SpecialistField" class="col-md-3 col-xs-2 col-md-offset-2">Specialist</label>
					    				<div class="col-md-7 col-xs-10">
					    					<select>
					    						<option>Computer Science</option>
					    						<option>Information Technology</option>
					    						<option>Physics</option>
					    						<option>Mathematics</option>
					    					</select>
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<label for="otherField" class="col-md-3 col-xs-2 col-md-offset-2">Others</label>
					    				<div class="col-md-5 col-xs-10">
					    					<input type="text" class = "form-control" id = "otherField" placeholder="Any specific specialisation" name="fieldOther" required />
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<label for="uniField" class="col-md-3 col-xs-2 col-md-offset-2">University</label>
					    				<div class="col-md-5 col-xs-10">
					    					<input type="text" class = "form-control" id = "uniField" placeholder="" name="fieldUni" required />
					    				</div>

					    				</div>
					    				<div class="form-group">
					    				<label for="yopField" class="col-md-3 col-xs-2 col-md-offset-2">Year Of Passing</label>
					    				<div class="col-md-5 col-xs-10">
					    					<input type="number" class = "form-control" id = "yopField" name="fieldYOP" required />
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<label for="percentage" class="col-md-3 col-xs-2 col-md-offset-2">Percentage</label>
					    				<div class="col-md-5 col-xs-10">
					    					<input type="number" class = "form-control" id = "percentage" name="fieldPerc" required />
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<label for="subjects" class="col-md-3 col-xs-2 col-md-offset-2">Subjects</label>
					    				<div class="col-md-5 col-xs-10">
					    					<textarea rows="5" cols="50">Please enter your subjects here</textarea>
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<label for="GraduateField" class="col-md-3 col-xs-2 col-md-offset-2">Graduate</label>
					    				<div class="col-md-5 col-xs-10">
					    					<select>
					    						<option>Bca</option>
					    						<option>Btech</option>
					    						<option>BSc</option>
					    					</select>
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<label for="SpecialistField" class="col-md-3 col-xs-2 col-md-offset-2">Specialist</label>
					    				<div class="col-md-5 col-xs-10">
					    					<select>
					    						<option>Computer Science</option>
					    						<option>Information Technology</option>
					    						<option>Physics</option>
					    						<option>Mathematics</option>
					    					</select>
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<label for="otherField" class="col-md-3 col-xs-2 col-md-offset-2">Others</label>
					    				<div class="col-md-5 col-xs-10">
					    					<input type="text" class = "form-control" id = "otherField" placeholder="Any specific specialisation" name="fieldOther" required />
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<label for="uniField" class="col-md-3 col-xs-2 col-md-offset-2">University</label>
					    				<div class="col-md-5 col-xs-10">
					    					<input type="text" class = "form-control" id = "uniField" placeholder="" name="fieldUni" required />
					    				</div>

					    				</div>
					    				<div class="form-group">
					    				<label for="year of passing" class="col-md-3 col-xs-2 col-md-offset-2">Year Of Passing</label>
					    				<div class="col-md-5 col-xs-10">
					    					<input type="number" class = "form-control" id = "yopField" name="fieldYOP" required />
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<label for="percentage" class="col-md-3 col-xs-2 col-md-offset-2">Percentage</label>
					    				<div class="col-md-5 col-xs-10">
					    					<input type="number" class = "form-control" id = "yopField" name="fieldYOP" required />
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<label for="subjects" class="col-md-3 col-xs-2 col-md-offset-2">Subjects</label>
					    				<div class="col-md-5 col-xs-10">
					    					<textarea rows="5" cols="50">Please enter your subjects here</textarea>
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<h4 class="col-md-3 col-xs-2 col-md-offset-2">Schooling</h4>
					    				</div>

					    				<div class="form-group">
					    				<label for="schoolNameField" class="col-md-3 col-xs-2 col-md-offset-2">School Name</label>
					    				<div class="col-md-5 col-xs-4">
					    					<input type="text" class = "form-control" id = "nameField" placeholder="Your school name" name="fieldSName" required />
					    				</div>
					    				</div>


					    				<div class="form-group">
					    				<label for="boardNameField" class="col-md-3 col-xs-2 col-md-offset-2">Board Name</label>
					    				<div class="col-md-5 col-xs-10">
					    					<select>
					    						<option>CBSE Board</option>
					    						<option>ICSE Board</option>
					    					</select>
					    				</div>
					    				</div>

					    				
					    				<div class="form-group">
					    				<label for="year of passing" class="col-md-3 col-xs-2 col-md-offset-2">Year Of Passing</label>
					    				<div class="col-md-5 col-xs-10">
					    					<input type="number" class = "form-control" id = "yopField" name="fieldYOP" required />
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<label for="subjects" class="col-md-3 col-xs-2 col-md-offset-2">Subjects</label>
					    				<div class="col-md-5 col-xs-10">
					    					<textarea rows="5" cols="50">Please enter your subjects here</textarea>
					    				</div>
					    				</div>


					    				<div>
					    				<div class="form-group"> <label for="user" class="col-md-3 col-xs-2 col-md-offset-2"> Are you in a job? </label>
					    				<span class="radio">
					    				 	<label class= "col-md-2 col-xs-2">   
					    				 		Yes <input class="col-md-2 col-xs-4" type="radio" value="Yes" name = "user"/>
					    				 	</label> 
					    				
					    				 	<label class= "col-md-2 col-xs-2">   
					    				 		No <input class="col-md-2 col-xs-4" type="radio" value="No" name = "user">
					    				 	</label>
					    				 </span>
					    				 </div>
					    				
					    				

					    				<div class="form-group"> <label for="user1" class="col-md-3 col-xs-2 col-md-offset-2"> Are you a teacher in a school? </label>
					    				<span class="radio">
					    				 	<label class= "col-md-2 col-xs-2">   
					    				 		Yes <input class="col-md-2 col-xs-4" type="radio" value="Yes" name = "user1"/>
					    				 	</label>
					    				
					    				 	<label class= "col-md-2 col-xs-2">   
					    				 		No <input class="col-md-2 col-xs-4" type="radio" value="No" name = "user1">
					    				 	</label>
					    				 </span>
					    				</div>

					    				
					    				<div class="form-group">

					    				<label for="JobField" class="col-md-3 col-xs-2 col-md-offset-2">Job Details</label>
					    				<div class="col-md-5 col-xs-10">
					    					<input type="text" class = "form-control" id = "JobField" name="fieldJob" required />
					    				</div>
					    				</div>

					    				<div class="form-group"> <label class="col-md-3 col-xs-2 col-md-offset-2" for="lang">Languages Known </label>
					    				<div class="checkbox" name = "lang">
					    					<div class="col-md-6">
					    				 	<label class= "col-md-2 col-xs-2">   
					    				 		English <input class="col-md-2 col-xs-4" type="checkbox" value="English" name = "lang1" />
					    				 	</label>
					    				
					    				 	<label class= "col-md-2 col-xs-2">   
					    				 		Hindi <input class="col-md-2 col-xs-4" type="checkbox" value="Hindi" name = "lang2">
					    				 	</label>

					    				 	<label class= "col-md-2 col-xs-2">   
					    				 		German <input class="col-md-2 col-xs-4" type="checkbox" value="German" name = "lang3">
					    				 	</label>
					    				 	</div>
					    				 	<div class="col-md-6 col-md-offset-5">
					    				 	<label class= "col-md-2 col-xs-2">   
					    				 		French <input class="col-md-2 col-xs-4" type="checkbox" value="French" name = "lang4">
					    				 	</label>

					    				 	<label class= "col-md-2 col-xs-2">   
					    				 		Spanish <input class="col-md-2 col-xs-4" type="checkbox" value="Spanish" name = "lang5">
					    				 	</label>

					    				 	<label class= "col-md-5 col-xs-2">   
					    				 		Other <input class="col-md-2 col-xs-4" type="checkbox" value="Other" name = "lang5"><br>
					    				 		<input class="col-md-5 col-xs-4" type="text" name = "lang5">
					    				 	</label>
					    				 	</div>

					    				 </div>
					    				</div>

					    				<div class="form-group">
					    				<label for="professional" class="col-md-3 col-xs-2 col-md-offset-2">Professional Qualifications</label>
					    				<div class="col-md-5 col-xs-10">
					    					<textarea rows="5" cols="50">Please enter your expertise qualifications here</textarea>
					    				</div>
					    				</div>

					    				<div class="form-group">
					    				<label for="about" class="col-md-3 col-xs-2 col-md-offset-2">About Yourself</label>
					    				<div class="col-md-5 col-xs-10">
					    					<textarea rows="5" cols="50">Describe yourself in few words here</textarea>
					    				</div>
					    				</div>
					    				</div>

					    		</div> 


					    		<div class="panel-footer">
				    			<button type = "submit" class="btn btn-primary btn-sm" onsubmit="return validateall()">Save</button> 
				    			<button type = "submit" class="btn btn-primary btn-sm" onsubmit="return validateall()">Submit </button>
				    			
				    		
								</div>
					    	</div>
			    		</form>
			<?php
$obj->display2();

?>

