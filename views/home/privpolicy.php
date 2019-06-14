<?php
	include_once ('inc/header.php');
	include_once ('inc/bheader.php');
	include_once ('inc/bfooter.php');
	/**
	* 
	*/
	class privacy_view
	{
		private $title = "mTutor - Privacy Policy"; 		
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
			$showpage=<<< PAGEDOC
			<!DOCTYPE html>
	<div class="container content">
	<br>
  	<h2 style="font-size: 4em; font-family: lato;">Privacy Policy</h2>
	<hr style="border-width: 0.3em;" />
  	<br>
        <ul type="disc">
          <li> First Terms............</li>
          <li> Second Terms............</li>
          <li> Third Terms............</li>
          <li> First Terms............</li>
          <li> Second Terms............</li>
          <li> Third Terms............</li>
          <li> First Terms............</li>
          <li> Second Terms............</li>
          <li> Third Terms............</li>
        </ul>
   </div>
PAGEDOC;
		echo $showpage;
		$footer = new BFooter();
		$footer->display();
		}
	}
	$obj= new privacy_view();
	$obj->display();
?>	