<?php
	include_once ('inc/header.php');
  	include_once ('inc/bheader.php');
  	include_once ('inc/bfooter.php');

/**
* 
*/
class message_module_view
{
	public $title="mtutor-message handler";
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
	}	
}
	
	$obj=new message_module_view();
	$obj->display();
?>	
    <div class="jumbotron">
    <h1 class="text-center"> Messaging Module </h1>
    	<div class="container">
    		<div class="row">
    			<div class="panel panel-default">
    				<div class="panel-heading">
    					<div class="row">
			    			<div class="col-md-6">
			    				<a class="btn btn-success">Previous</a>
			    			</div>
			    			<div class="col-md-6">
			    				<a class="btn btn-success pull-right">Next</a>
			    			</div>
		    			</div>
	    			</div>
	    			<div class="panel-body">
	    				<div class="well text-center" style="padding-top: 50px; padding-bottom: 50px; background-color: LightGreen;">Thanks for contacting me. I am having 10 years of teaching experience.<br>
	    				We can have further tutorials.</div><br>  <br>
	    				<div><input type="checkbox" velue = "contact" name = "contact">Do you want to share your contact number?</div>
	    			</div>
	    			<div class="panel-footer">
	    				<div class="row">
		    				<div class="col-md-6">
			    				<button class="btn btn-success">Customise your Message</button>
			    			</div>
			    			<div class="col-md-6">
			    				<button class="btn btn-primary pull-right">Reply</button>
			    			</div>
		    			</div>
	    			</div>
    			</div>
    			<div class="panel panel-default">
    				<div class="panel-body">
    					<div class="well">
    						<form>
    						<div class="form-group">
		    				
		    				<div>
		    					<textarea rows="5" cols="50" name="message">Please enter your messages here</textarea>
		    				</div>
		    				</div>
		    				</form>
    					</div> <br> <br>
    					<div><input type="checkbox" velue = "save" name = "save">Do you want to save this message for future reference?</div>
    				</div>
    			
    			<div class="panel-footer">
    				<div class="row">
	    				<div class="col-md-12">
	    					<button class="btn btn-primary pull-right">Reply</button>
	    				</div>
    				</div>
    			</div>
    			</div>
    		</div>
    	</div>
    </div>
<?php
	$footer = new BFooter();
	$footer->display();
?>