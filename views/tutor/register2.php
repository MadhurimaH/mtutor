<?php

include_once ('inc/header.php');
include_once ('inc/bheader.php');
include_once ('inc/bfooter.php');

class profile_r2_view 
{
	private $title = "mtutor-profile registeration of tutor page 2";
	private $links = array();

	public function __construct() {
	  $this->links[0] = ROOT_URL.'tutor/register2';
	}

	function display() {
	    $headpage = new header();
	    $headpage->setTitle($this->title);
	 
	    if (config::$debug == TRUE)
	      $headpage->setstyles(array("bootstrap", "mtutor", "timeslot_css", "font-awesome", "bootstrap-select"));
	    else
	      $headpage->setstyles(array("bootstrap.min", "mtutor.min", "timeslot_css.min", "font-awesome.min", "bootstrap-select.min"));
	    $headpage->display();
	
	    $bodyheader = new Bheader();
	    $bodyheader->display();

	    $showpage = <<< PAGEDOC

	 <div class = "container content">
	 <div class="panel panel-default" style="border-bottom: none;">
	 <div class="panel panel-primary">
	 <div class="panel-heading ">Complete your profile</div>
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

      <form class="form-horizontal" action="{$this->links[0]}" method="post">
         <div class = "panel panel-default" style="border-right: 0em; border-left: 0em;" >
            <div class = "panel-heading">
               Qualifications & Personal Information
            </div>
            <br>


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
				<input type="text" class = "form-control" id = "otherField" placeholder="Any specific specialisation" name="fieldOther"/>
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
				<textarea class="form-control" rows="5" cols="50" placeholder="Please enter your subjects here"></textarea>
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
				<input type="text" class = "form-control" id = "otherField" placeholder="Any specific specialisation" name="fieldOther" />
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
				<textarea class="form-control" rows="5" cols="50" placeholder="Please enter your subjects here"></textarea>
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
				<textarea class="form-control" rows="5" cols="50" placeholder="Please enter your subjects here"></textarea>
			</div>
			</div>	    			
	    			
	    	<div class="form-group"> 
	    	<label for="user" class="col-md-4 col-xs-2 col-md-offset-2"> Are you in a job? </label>
                <label class= "col-md-3 col-xs-2">  
	    			Yes <input class="col-md-3 col-xs-4" type="radio" value="Yes" name = "fieldWorking"/>
			 	</label> 

	    		<label class= "col-md-3 col-xs-2">  
	    			No <input class="col-md-3 col-xs-4" type="radio" value="No" name = "fieldWorking">
			 	</label>
			 </div>

	    	<div class="form-group"> 
	    	<label for="user1" class="col-md-4 col-xs-2 col-md-offset-2"> Are you a teacher in a school? </label>
                <label class= "col-md-3 col-xs-2">  
	    			Yes <input class="col-md-2 col-xs-4" type="radio" value="Yes" name = "fieldTeacher"/>
			 	</label> 

	    		<label class= "col-md-3 col-xs-2">  
	    			No <input class="col-md-2 col-xs-4" type="radio" value="No" name = "fieldTeacher">
			 	</label>
			 </div>
	    			
			<div class="form-group">
			<label for="JobField" class="col-md-3 col-xs-2 col-md-offset-2">Job Details</label>
			<div class="col-md-5 col-xs-10">
				<input type="text" class = "form-control" id = "JobField" name="fieldJob" required />
			</div>
			</div>

			<div class="form-group">
	    	<label class="col-md-3 col-xs-2 col-md-offset-2" for="lang">Languages Known </label>
			<div class="checkbox" name = "lang">
				<div class="col-md-6">
			 	<label class= "col-md-3 col-xs-2">   
			 		English <input class="col-md-6 col-xs-4" type="checkbox" value="English" name = "lang1" />
			 	</label>
					    				
			 	<label class= "col-md-3 col-xs-2">   
			 		Hindi <input class="col-md-9 col-xs-4" type="checkbox" value="Hindi" name = "lang2">
			 	</label>

			 	<label class= "col-md-3 col-xs-2">   
			 		German <input class="col-md-6 col-xs-4" type="checkbox" value="German" name = "lang3">
			 	</label>
			 	</div>

			 	<div class="col-md-6 col-md-offset-5">
			 	<label class= "col-md-3 col-xs-2">   
			 		French <input class="col-md-6 col-xs-4" type="checkbox" value="French" name = "lang4">
			 	</label>

			 	<label class= "col-md-3 col-xs-2">   
			 		Spanish <input class="col-md-6 col-xs-4" type="checkbox" value="Spanish" name = "lang5">
			 	</label>

			 	<label class= "col-md-3 col-xs-2">   
			 		Other <input class="col-md-8 col-xs-4" type="checkbox" value="Other" name = "lang6"><br>
			 		<input class="col-md-20 col-xs-10 form-control" type="text" name = "lang6" placeholder="Please specify"/>
	    			</label>
			 	</div>

			 </div>
			</div>

			<div class="form-group">
			<label for="professional" class="col-md-3 col-xs-2 col-md-offset-2">Professional Qualifications</label>
			<div class="col-md-5 col-xs-10">
				<textarea class="form-control" rows="5" cols="50" name="fieldProQual" placeholder="Please enter your expertise qualifications here"></textarea>
			</div>
			</div>

			<div class="form-group">
			<label for="about" class="col-md-3 col-xs-2 col-md-offset-2">About Yourself</label>
			<div class="col-md-5 col-xs-10">
				<textarea class="form-control" rows="5" cols="50" name="fieldAbout" placeholder="Describe yourself in few words here"></textarea>
			</div>
			</div>
      		
      		
      		<div class="form-group">
	    		<label for="vehicle" class="col-md-3 col-xs-2 col-md-offset-2">Do you own a vehicle?</label>
			 	<label class= "col-md-3 col-xs-2">   
			 		Yes <input class="col-md-3 col-xs-4" type="radio" value="yes" name = "fieldVehicle"/>
			 	</label>
	    				 
			 	<label class= "col-md-3 col-xs-2">   
			 		No <input class="col-md-3 col-xs-4" type="radio" value="no" name = "fieldVehicle">
			 	</label>
			</div>
      		
            <div class="form-group">
               <label for="tuition" class="col-md-3 col-xs-2 col-md-offset-2">Tution  Options</label>
               <span class="col-md-7 col-xs-3" name = "tuition">
                  <label class="checkbox-inline">
                  <input type="checkbox" value="Tutor's home" name="o1">Tutor's home
                  </label>
                  <label class="checkbox-inline">
                  <input type="checkbox" value="Tutee's home" name="o2">Tutee's home
                  </label>
                  <label class="checkbox-inline">
                  <input type="checkbox" value="Online" name="o3">Online
                  </label>
                  <label class="checkbox-inline">
                  <input type="checkbox" value="Institute" name="o4">Institute
                  </label>
               </span>
               </div>

               <div class="form-group">
                  <label for="Rate" class="col-md-3 col-xs-2 col-md-offset-2">Rate</label>
                  <div class="col-md-7 col-xs-4">
                     <div class="col-md-7 col-xs-4">
                        <span class="col-sm-6">
                        <input type="text" class = "form-control" id = "RateMin" placeholder="" name="fieldRateMin" required />
                        </span>
			<b>to</b>
                        <span class="col-sm-6">
                        <input type="text" class = "form-control" id = "RateMax" placeholder="" name="fieldRateMax" required style="margin-top:-19px; margin-left: 10px" />
                        </span>
                     </div>
                  </div>
                  </div>
      
      
      <div class="form-group">
      <label for="Schedule" class="col-md-3 col-xs-2 col-md-offset-2">Time Slot</label>
      <div class="col-md-7 col-xs-4">
      </div>
      <table width="30%" class="tbl">
      <div id="head_nav" class="t1">
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
      <div > 
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
      </table>
      </div>
      <br>
      
	<div class="panel-footer">
		<button type = "submit" class="btn btn-primary btn-sm" onsubmit="return validateall()">Save & Continue</button> 
		<button type = "submit" name="submit" value="submit" class="btn btn-primary btn-sm" onclick="validateall()">Submit </button>
	</div>
	</div>
	</form>
	</div>		
	</div>
PAGEDOC;
	    echo $showpage;
	    
	    $footer = new BFooter();
	    $script = '<script type="text/javascript" src="/mtutor/js/bootstrap-select.js"></script>
	      <script type="text/javascript">
	         $(document).ready(function() {         
         
		         $(\'td\').click(function() {
		         if ($(this).hasClass(\'HighLight\'))
		         { 
		             $(this).removeClass(\'HighLight\');
		         }
		         else{
		             $(this).addClass(\'HighLight\');
		         }
		         });

	         });
	      </script>';
            $footer->addscript($script);		    			
	    $footer->display();
	}

}
	
   $obj=new profile_r2_view();
   $obj->display();

?>