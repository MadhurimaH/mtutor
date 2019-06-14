<?php 
	include_once ('inc/header.php');
  	include_once ('inc/bheader.php');
  	include_once ('inc/bfooter.php');

	class Dashboard {
		private  $title = "mTutor-Dashboard";
		public function display() {
			$headpage = new header();
			$headpage->setTitle($this->title);
			
			if (config::$debug == TRUE)
			  $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));
			else
			  $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min"));
			$headpage->display();

			$bodyheader = new Bheader();
			$bodyheader->display();
			$showPage = <<<PAGEDOC
	<div class="container content">
		<div class="row">
			<div class="col-md-2 " >				
				<ul class="nav nav-pills nav-stacked thumbnail" style="margin-top:50px">
					<li class="active"><a data-toggle="pill" href="#" >Messages</a></li>
					<li><a data-toggle="pill" href="#" >Reviews</a></li>
					<li><a data-toggle="pill" href="#" >My Students</a></li>
					<li><a data-toggle="pill" href="#" >Notifications</a></li>
				</ul>

				
				<div class="panel panel-default" style="margin-top:40px">
					<div class="panel-heading">
						<div style="text-align:center"><b>Upcoming Sessions</b> <br> Date: 28-6-16 </div>
					</div>

					<div class="panel-body">
						
						<div class="well well-sm">
							3:30pm-4:30pm
							Student: Oliver
						</div>
						
						<div class="well well-sm">
							6:30pm-7:30pm
							Student: Jake
						</div>
								
						<div class="well well-sm">
							8:30pm-9:30pm
							Student: Lucifer
						</div>
					</div>
						
					<div class="panel-footer">
						<button type="button" class="btn btn-default col-md-offset-1" style="margin-left:20px"> <a href="upcoming_sessions.html" style="text-color:white">View Details </a></button>
					</div>

				</div> 
			</div>               <!--end of column:1 -->


			<div class="col-md-7 col-md-offset-1" style="margin-top:50px">
					
					<div class="chart col-md-3" style="border: 2px solid gray; border-radius:100%; height: 150px;
					  width: 180px">
					   	<h1 style="text-align:center; margin-top:45px"> 3.5 </h1>
						<h4 style="text-align: center; margin-top: 80px">Rating </h4>
					</div>

					<div class="chart col-md-3 col-md-offset-1" style="border:2px solid gray; border-radius:100%; height:150px; width:180px">
						<h1 style="text-align:center; margin-top:45px"> Online </h1>		
						<h4 style="text-align:center; margin-top:80px">Tuition Type</h4>				
					</div>

					<div class="chart col-md-3 col-md-offset-1" style="border: 2px solid gray; border-radius:100%; height: 150px; width: 180px">
						<h1 style="text-align:center; margin-top:45px"> 6 </h1>
						<h4 style="text-align:center; margin-top:80px">Occupied time slots</h4>
					</div>
					
			</div>   

			<div class="col-md-7 col-md-offset-1" style="margin-top: 100px">
				<div class="panel panel-default">
					
					<div class="panel-heading">
						<h4> Student Queries </h4>
					</div>

					<div class="panel-body">
						<table class="table table-hover table-bordered table-responsive">
							<tr>
								<th>Name</th>
								<th>Board</th>
								<th>Class</th>
								<th>Subject</th>
								<th>Query</th> 
							</tr>

							<tr>
								<td>Harry</td>
								<td>CBSE</td>
								<td>10 <sup>th</sup> </td>
								<td>Physics</td>
								<td>Thermodynamics</td>
							</tr>

							<tr>
								<td>Barry</td>
								<td>CBSE</td>
								<td>11 <sup>th</sup> </td>
								<td>Chemistry</td>
								<td>Biomolecules</td>
							</tr>

							<tr>
								<td>Robin</td>
								<td>ICSE</td>
								<td>12 <sup>th</sup> </td>
								<td>Maths</td>
								<td>Vectors</td>
							</tr>
						</table>
					</div>
					<div class="panel-footer" style="height: 50px">
						<a href="#" class="btn btn-primary btn-sm" style="float: right;">Read More</a>
					</div>
				</div>

			</div>
	</div>
</div>	
PAGEDOC;
	echo $showPage;
	$footer = new BFooter();
	$footer->display();
	}
}
$obj = new Dashboard();
$obj->display();
?>

