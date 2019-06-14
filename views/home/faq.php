<?php
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

class FaqView {
  private $title = "mTutor - Faq";
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
         <h1>FAQs</h1>
         <hr style="width: ;">
         </hr>
         <br>
         <div class="text-primary">
            <h3>Parent's/Student's FAQS  </h3>
         </div>
         <br>
         <div class="panel-group" id="accordion">
            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="faq-ques"><i class="glyphicon glyphicon-plus" style="padding-right: 0.6em;"></i>What is ....??</a>
                  </h4>
               </div>
               <div id="collapse1" class="panel-collapse collapse ">
                  <div class="panel-body">we provide you a platform to test the tutor and his/her ability.</div>
               </div>
            </div>
            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="faq-ques"><i class="glyphicon glyphicon-plus" style="padding-right: 0.6em;"></i>How is tutor evaluated?</a>
                  </h4>
               </div>
               <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </div>
               </div>
            </div>
            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="faq-ques"><i class="glyphicon glyphicon-plus" style="padding-right: 1em;"></i>Why .....?</a>
                  </h4>
               </div>
               <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="text-primary">
            <h3>Tutor's FAQS  </h3>
         </div>
         <br>
         <div class="panel-group" id="accordion">
            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="faq-ques"><i class="glyphicon glyphicon-plus" style="padding-right: 0.6em;"></i>How can I register??</a>
                  </h4>
               </div>
               <div id="collapse4" class="panel-collapse collapse">
                  <div class="panel-body">we provide you a platform to test the tutor and his/her ability.</div>
               </div>
            </div>
            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="faq-ques"><i class="glyphicon glyphicon-plus" style="padding-right: 0.6em;"></i>How is tutor evaluated?</a>
                  </h4>
               </div>
               <div id="collapse5" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </div>
               </div>
            </div>
            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="faq-ques"><i class="glyphicon glyphicon-plus" style="padding-right: 1em;"></i>How payment is done?</a>
                  </h4>
               </div>
               <div id="collapse6" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </div>
               </div>
            </div>
         </div>
  </div>
  <!-- end main content -->
PAGECONTENT;
		echo $showPage;
    $footer = new BFooter();
    $script = '<script type="text/javascript">  
        $(document).ready(function(){$(".faq-ques").click(function(){
          var iselect=$(this).children();
          if(iselect.hasClass("glyphicon glyphicon-plus"))
          {
            iselect.removeClass("glyphicon glyphicon-plus");
            iselect.addClass("glyphicon glyphicon-minus");
          }
          else
          {
            iselect.removeClass("glyphicon glyphicon-minus");
            iselect.addClass("glyphicon glyphicon-plus");
          }
        });
      });
</script>';
    $footer->addScript($script);
    $footer->display();
	}
}

  config::setdebugflag();
  $page = new FaqView();
  $page->display();
?>