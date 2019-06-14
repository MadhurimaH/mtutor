<?php
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

  class dashboard
  	{
      private $title = "mTutor - Dashboard";

  	  public function display()
  	  {
       
        $headpage = new header();
        $headpage->setTitle($this->title);        
        $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));        
        $headpage->display();
        $bodyheader = new Bheader();
        $bodyheader->display();

        $showpage = <<<PAGECONTENT
	<div class="container-fluid" style="margin-top:100px">
		<div class="row">
			<div class="col-md-2 sidebar" >
				<ul class="nav nav-sidebar">
					<li class="active"><a href = "#">Summary</a></li>
					<li><a href = "#">Reports</a></li>
					<li><a href = "#">Analytics</a></li>
					<li><a href = "#">Manage Accounts</a></li>
					<li><a href = "#">Broadcast</a></li>
				</ul>
			</div>
			<div class="col-md-7 col-md-offset-1">
				<div class="chart col-md-3" style="border: 2px solid gray; border-radius: 100%;height: 200px; width: 200px"><h4 style="text-align: center;margin-top: 200px">Label 1</h4>
				</div>
				<div class="chart col-md-3 col-md-offset-1" style="border: 2px solid gray; border-radius: 100%; height: 200px; width: 200px;">	<h4 style="text-align: center;margin-top: 200px">Label 2</h4>				
				</div>
				<div class="chart col-md-3 col-md-offset-1" style="border: 2px solid gray; border-radius: 100%; height: 200px; width: 200px; "><h4 style="text-align: center;margin-top: 200px">Label 3</h4>
				</div>
			</div>
			<div class="col-md-7 col-md-offset-3" style="margin-top: 50px">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Report Summary</b>
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<tr>
								<td></td>
								<td>Tutors</td>
								<td>Students</td>
							</tr>
							<tr>
								<td>New Accounts</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>Active Accounts</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>Idle Accounts</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>New Enquiries</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>New Connections</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>Pending Connections</td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
					<div class="panel-footer" style="height: 50px">
						<a href="#" class="btn btn-primary btn-sm" style="float: right;">Read More</a>
					</div>
				</div>

			</div>
			<div class="col-md-3 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>New Enquiries</b>
					</div>
					<div class="panel-body">
						<table class="table">
							<tr>
								<td>1.Lorem ipsum donor sit amet</td>
							</tr>
							<tr>
								<td>2.Lorem ipsum donor sit amet</td>
							</tr>
							<tr>
								<td>3.Lorem ipsum donor sit amet</td>
							</tr>
						</table>
					</div>
					<div class="panel-footer" style="height: 50px">
						<a href="#" class="btn btn-primary btn-sm" style="float: right;">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>New Messages</b>
					</div>
					<div class="panel-body">
						<table class="table">
							<tr>
								<td>1.Lorem ipsum donor sit amet</td>
							</tr>
							<tr>
								<td>2.Lorem ipsum donor sit amet</td>
							</tr>
							<tr>
								<td>3.Lorem ipsum donor sit amet</td>
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
	

    
PAGECONTENT;
		echo $showpage;
  		$footer = new BFooter();
  		$footer->display();
	}

}

	$obj = new dashboard();
	$obj -> display();


?>