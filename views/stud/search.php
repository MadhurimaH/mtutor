<?php
	
	include_once ('inc/header.php');
  	include_once ('inc/bheader.php');
  	include_once ('inc/bfooter.php');

	
	class searchTutView
	{
		private $title = "mtutor - Search";

		public function display()
		{
			 	$headpage = new header();
        		$headpage->setTitle($this->title);
           		$headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));        	
        		$headpage->display();
       			$bodyheader = new Bheader();
        		$bodyheader->display();
		   
		   $showpage = <<< PAGEDOC
	<div class="container content">
		<div class="col-md-8 col-md-offset-2" >
			<div class="panel panel-danger">
			  <div class="panel-heading">
			  	Search for Tutors
			  </div>
				<div class="panel-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="subject" class="col-md-2">Subject</label>
							<div class="col-md-10">
								<input type="text" class="form-control" id="class" name="class" placeholder="Subjects" />		
							</div>
						</div>
						<div class="form-group">
							<label for="class" class="col-md-2">Class</label>
							<div class="col-md-10">
								<input type="text" class="form-control" id="class" name="class" placeholder="Class" />
							</div>
						</div>
						<div class="form-group">
							<label for="board" class="col-xs-2">Board</label>
							<div class="col-md-10">
								<input type="text" class="form-control" id="board" name="board" placeholder="Board" />
							</div>
						</div>
						<div class="form-group">
							<label for="location" class="col-xs-2">Location</label>
							<div class="col-md-10">
								<input type="text" class="form-control" id="location" name="location" placeholder="Location" />
							</div>
						</div>
					
						<div class="col-md-10 col-md-offset-2">
							<button type="submit" class="btn btn-primary">Search</button>
				 			<button type="reset" class="btn btn-default">Reset</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</body>
</html>

PAGEDOC;
		echo $showpage;
		$footer = new BFooter();
  		$footer->display();
		}	

	}

	$obj = new searchTutView();
	$obj -> display();

?>
