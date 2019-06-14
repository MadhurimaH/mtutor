<?php
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

	class tnc_view
	{
    private $title = "mTutor - Faq";
		
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
<div class="container content">
  <h1>Terms and Conditions</h1>
<hr style="border-width: 0.3em;" />
  <br>
<div class = "panel panel-info" >
        <div class = "panel-heading" style="font-size: 1.8em;">
          General
        </div>
        <br>
        <ul type="disc">
          <li> First Terms............</li>
          <li> Second Terms............</li>
          <li> Third Terms............</li>


        </ul>
   </div>   
    <br>
<div class = "panel panel-info" >
        <div class = "panel-heading" style="font-size: 1.8em;">
          For Parent/Student
        </div>
        <br>
        <ul type="disc" >
          <li> First Terms............</li>
          <li> Second Terms............</li>
          <li> Third Terms............</li>
        </ul>
   </div>   
    <br>
<div class = "panel panel-info" >
        <div class = "panel-heading" style="font-size: 1.8em;">
          For Tutor
        </div>
        <br>
        <ul type="disc">
          <li> First Terms............</li>
          <li> Second Terms............</li>
          <li> Third Terms............</li>
        </ul>
   </div>   
</div>
PAGEDOC;
		echo $showpage;
    $footer = new BFooter();
    $footer->display();

		}
	}
	$obj= new tnc_view();
	$obj->display();
?>	

