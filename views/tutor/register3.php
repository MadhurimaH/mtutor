<?php
require "message1.php";
require "header.php";
require "bheader.php";
require "bfooter.php";
/**
* 
*/
class profile_r3_view 
{
	public $title="mtutor-profile registeration of tutor page 3";

	
}
	
	$obj=new profile_r3_view();


?>	
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title><?php echo $obj->title;?></title>
      <link rel="stylesheet" type="text/css" href="/mtutor/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="/mtutor/css/mtutor.css">
      <link href="/mtutor/css/sumoselect.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="/mtutor/css/timeslot_css.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script src="/mtutor/js/jquery.js"></script>
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
      <form class="form-horizontal" action="profile_r3_php.php" method="post">
         <div class = "panel panel-default" style="border-right: 0em; border-left: 0em;" >
            <div class = "panel-heading">
               PROFESSIONAL PREFERENCE
            </div>
            <br>
            <div class="form-group">
               <label for="Area" class="col-md-4 col-xs-2"style="padding-left: 2em;"> Area/pincode</label>
               <span class="col-md-4">
                  <select multiple="multiple" placeholder="Areas Prefered" class="SlectBox" required>
                     <option value="Shalimar">Shalimar Bagh</option>
                     <option value="Pitam">Pitam Pura</option>
                     <option value="Rohini">Rohini</option>
                     <option value="Pashchim">Pashchim Vihar</option>
                     <option value="Janakpuri">Janakpuri</option>
                  </select>
               </span>
               <span class="col-md-4">
                  <select multiple="multiple" placeholder="Pincodes" class="SlectBox" required>
                     <option value="110088">110088</option>
                     <option value="110052">110052</option>
                     <option value="110085">110085</option>
                     <option value="110006">110006</option>
                     <option value="110004">110004</option>
                  </select>
               </span>
            </div>
            <div class="form-group">
               <label for="subject" class="col-md-4 col-xs-2 "style="padding-left: 2em;"> Subjects Preferred</label>
               <div class="col-md-7 col-xs-4">
                  <select multiple="multiple" placeholder="Subjects Prefered" class="SlectBox" required>
                     <option value="Physics">Physics</option>
                     <option value="History">History</option>
                     <option value="English">English</option>
                     <option value="Maths">Mathematics</option>
                     <option value="Chemistry">Chemistry</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label for="class" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Classes Preferred</label>
               <div class="col-md-7 col-xs-4">
                  <select multiple="multiple" placeholder="Classes Prefered" class="SlectBox" required>
                     <option value="12th">XII</option>
                     <option value="11th">XI</option>
                     <option value="10th">X</option>
                     <option value="9th">IX</option>
                     <option value="8th">VIII</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label for="tuition" class="col-md-4 col-xs-2" style="padding-left: 2em;">Tution  Options</label>
               <span class="col-md-7 col-xs-3" name = "tuition">
                  <label class="checkbox-inline">
                  <input type="checkbox" value="Tutor's home" name="o1">Tutor's home
                  </label>
                  <label class="checkbox-inline">
                  <input type="checkbox" value="Tutee's home" name="o2">Tutee's home
                  </label>
                  <label class="checkbox-inline">
                  <input type="checkbox" value="Online" name="o3">Online
                  </label>
                  <label class="checkbox-inline">
                  <input type="checkbox" value="Institute" name="o4">Institute
                  </label>
               </span>
               </div>

               <div class="form-group">
                  <label for="Rate" class="col-md-4 col-xs-2"style="padding-left: 2em;"> Rate</label>
                  <div class="col-md-7 col-xs-4">
                     <div class="col-md-7 col-xs-4">
                        <span class="col-sm-6">
                        <input type="text" class = "form-control" id = "Rate" placeholder="" name="fieldRate" required />
                        </span><b>to</b>
                        <span class="col-sm-6">
                        <input type="text" class = "form-control" id = "pinField" placeholder="" name="fieldPin" required style="margin-top:-19px; margin-left: 10px" />
                        </span>
                     </div>
                  </div>
                  </div>
      
      
      <div class="form-group">
      <label for="Rate" class="col-md-4 col-xs-2"style="padding-left: 2em;">Time Slot</label>
      <div class="col-md-7 col-xs-4">
      </div>
      <table width="30%" class="tbl">
      <div id="head_nav" class="t1">
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
      <div > 
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
      </table>
      </div>
      <br>
      </form>
      
      <div class="panel-footer">
      <button type = "submit" class="btn btn-primary btn-sm" onsubmit="return validateall()">Save & Continue </button> 
      <button type = "submit" class="btn btn-primary btn-sm" onsubmit="return validateall()">Submit </button>
      </div>
      </form>
      </div>
      </div>
      <br><br>
      </table>
      </div>
      <hr>
   </body>
</html>