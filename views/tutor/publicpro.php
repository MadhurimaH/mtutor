<?php
  
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

	
	class publicpro
	{
		private $title = "mtutor - Profile";       	 
		private $links = array();

		public function __construct() {
		   $this->links[0] = ROOT_URL.'img/pro_pic.png';
		}

		public function display()
		{		   
			 	$headpage = new header();
        		$headpage->setTitle($this->title);
           		$headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));        	
        		$headpage->display();
       			$bodyheader = new Bheader();
        		$bodyheader->display();

		   $showpage = <<<PAGEDOC
	    <body>
		
		<div class="row">							
			<div class="col-md-3 col-md-offset-2" style="margin-top:80px">
				
				<div class="col-md-10">
				<img src="{$this->links[0]}" style="width:125px;" class= "col-md-offset-2 img-thumbnail img-responsive" alt="profile photo">
				</div>
				
				<div class="col-md-8 col-md-offset-2" >Tutor's Rating:<br>
					<span class="fa fa-star"> </span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star-half-empty"></span>
					<span class="fa fa-star-o"></span><b><br><br>
				</div>						
	
	  			
	  				
	  			

	  				<div class="col-md-10 well well-sm" style="background-color:lightblue">
						<label> Name: </label>
						<textarea id="name" name="name" class="col-md-12" style="font-size:12px; background-color:lightblue; border-color:lightblue" disabled> Name of the Tutor </textarea><br>	

						<label> Gender: </label>
						<textarea id="name" name="name" class="col-md-12" style="font-size:12px; background-color:lightblue; border-color:lightblue" disabled> male/female/other </textarea>											
					</div>

					<div class="col-md-10 well well-sm" style="background-color:lightblue">
							<label> Locations: </label>
						<textarea id="name" name="name" class="col-md-12" style="font-size:12px; background-color:lightblue; border-color:lightblue" disabled> Locations he could teach(offline teaching) </textarea>											
					</div>

					<div class="col-md-10 well well-sm" style="background-color:lightblue">
							<label> Tution Type: </label>
						<textarea id="tuttype" name="tuttype" class="col-md-12" style="font-size:12px; background-color:lightblue; border-color:lightblue" disabled> institute, online, home-tution, tutor&apos;s place </textarea>											
					</div>

					<div class="col-md-10 well well-sm" style="background-color:lightblue">
							<label> Reviews: </label>
						<textarea id="name" name="name" class="col-md-12" style="height:160px; font-size:12px; background-color:lightblue; border-color:lightblue" disabled> Reviews about Tutor</textarea>											
					</div>


					<form class="form-search col-md-10 thumbnail">
	  						<textarea rows="4" cols="50" class="form-group col-md-12" placeholder="Enter your query" style="resize:vertical; height:155px"></textarea><br><br>
	  						<button type="button" class="btn btn-primary col-md-6 col-md-offset-3">Submit</button>
	  				</form>

	  			   				  										
				</div>  <!--end of column 1-->

				<div class="col-md-6">							
					
				<div class="col-md-9 well well-sm" style="margin-top:80px; background-color:lightblue">
					<div class="col-md-10">
						<label> About:</label>
				    </div>
				    <textarea id="about" name="about" class="col-md-12" style="height:80px; background-color:lightblue; font-size:12px; border-color:lightblue" disabled>About the Tutor  </textarea>
					
				</div>

									
				<div class="col-md-9 well well-sm" style="background-color:lightblue">
					<div class="col-md-10">
						<label> Address: </label>
				    </div>
				    <textarea id="address" name="address" class="col-md-12" style="font-size:12px; border-color:lightblue; background-color:lightblue;" disabled> Adress of Tutor(State, District, Pincode, City, Area)
				    </textarea>	
				</div>							
				

				<div class="col-md-9 well well-sm" style="background-color:lightblue">
					<div class="col-md-10">
						<label> Experience: </label>
				    </div>
				    <textarea id="experience" name="experience" class="col-md-12" style="font-size:12px; border-color:lightblue; background-color:lightblue" disabled> His/Her Experience </textarea>
				</div>									
													

				<div class="col-md-9 well well-sm" style="background-color:lightblue">
					<div class="col-md-10">
						<label> Educational Qualification: </label>
				    </div>
				    <textarea id="edu_qual" name="edu_qual" class="col-md-12" style="font-size:12px; border-color:lightblue; background-color:lightblue" disabled> Educational Qualification Details</textarea>
				</div>			

				<div class="col-md-9 well well-sm" style="background-color:lightblue">
					<div class="col-md-10">
						<label> Subjects &amp; Classes: </label>
				    </div>
				    <textarea id="subjects" name="subjects" class="col-md-12" style="height:50px; font-size:12px; border-color:lightblue; background-color:lightblue" disabled>Subjects:                                                                                                                     Classes/Courses:                                                                                                Board: </textarea>
				</div>			

				<div class="col-md-9 panel panel-default" style="border:1px solid; padding:1px 1px 1px 1px">		
				
					<h5 style="text-align:center"><u>Time Slots Availability of Tutor </u></h5>
				
					<div class="panel-body col-md-10 col-md-offset-1">

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
				</div>
				<form class="form-search col-md-9 thumbnail">
	  						<textarea class="form-group col-md-12" placeholder="Write Review" style="height:65px"></textarea><br><br>
	  						<button type="button" class="btn btn-warning btn-md" style="float:right;">Enter</button>

	  						<a href="#" style="font-size:12px"> Request Phone Number </a>
	  			</form>
  			</div>	
  	  	</div>
PAGEDOC;
		echo $showpage;
  		$footer = new BFooter();
  		$footer->display();
	}

}

	$obj = new publicpro();
	$obj -> display();

?>
