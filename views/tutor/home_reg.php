<?php

include_once ('inc/header.php');
include_once ('inc/bheader.php');
include_once ('inc/bfooter.php');
class home_reg
{
   public $title="mtutor-profile registeration of tutor home";

   function display1() {
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

   function display2()
   {
      $footer = new BFooter();
      $footer->display();
   }
   
}
   
   $obj=new home_reg();
   $obj->display1();


?> 


      <script src="/mtutor/js/bootstrap.js"></script> 
      <script src="/mtutor/js/jquery.sumoselect.js"></script> 
      <script type="text/javascript">
         $(document).ready(function () {
             window.asd = $('.SlectBox').SumoSelect({ csvDispCount: 3, captionFormatAllSelected: "All selected." });
            
             
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function() {
         
         
         $('td').click(function() {
         if ($(this).hasClass('HighLight'))
         { 
             $(this).removeClass('HighLight');
         }
         else{
             $(this).addClass('HighLight');
         }
         });
         
         
         });
      </script>
   </head>
   <body>
      <div class = "container">
      <div class="panel panel-default" style="border-bottom: 0em;">
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
      <br>

      <div class= "well well-sm">
          Thank you for activation. Click Next to complete your profile.
      </div>
      
      </div>
      </div>


      <?php
$obj->display2();

?>