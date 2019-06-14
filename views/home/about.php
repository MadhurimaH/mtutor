<?php
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

class AboutView {
  private $title = "mTutor - About Us";
	function display() {
    $headpage = new header();
    $headpage->setTitle($this->title);
    if (config::$debug == TRUE)
      $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));
    else
      $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min"));
    $headpage->display();

    $bodyheader = new Bheader();
    $bodyheader->display();

    $showPage = <<<PAGECONTENT
  <!-- start main content -->
  <div class="container content"> 
    <div style="height:180px;">
      <p style="text-align:center; font-size:48px; font-family:'Comic Sans MS';"><b> ABOUT US </b></p><br>
      <h4 style="text-align:center;"> <i> No signficant learning can occur without a significant relationship. </i> </h4>
    </div>

    <div class="col-md-5 col-md-offset-1">
      <div style="height:180px; text-align:center;">
      <h2> Welocome to mTutor </h2><br>
      <p> Thanks for visiting us!
      You can register to our website for free to get the best of our services. Also you can subscribe to our newsletter to receive updates about our services.                                                    
      </p>  
      </div>  
    </div>

    <div class="col-md-5">
      <div style="height:180px; text-align:center;"> 
        <h2> Current  Status </h2><br>
        <p style="font-size:18px"> <b>999</b> Questions Published<br>
                      <b>666</b> Registered Students<br>
                                  <b>666</b> Registered Tutors         
          </p>    
      </div>
    </div>                             

    <div class="col-md-6 col-md-offset-3">
      <div style="height:220px; text-align:center;">
        <h2> Getting the right tutor </h2>
        <p> We believe that learning should be accessible to all. Nowadays, its hard to find a right tutor. Here you can find the right tutor according to your requirements. You can filter your searches by the time-slots, type of tuition and various other options. We strive to help you to find the most convenient education.   
        </p>
      </div>  
    </div>
  </div>
  <!-- end main content -->
PAGECONTENT;
		echo $showPage;
    $footer = new BFooter();
    $footer->display();
	}
}

  config::setdebugflag();
  $page = new AboutView();
  $page->display();
?>