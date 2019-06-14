<?php

include_once ('inc/header.php');
include_once ('inc/bheader.php');
include_once ('inc/bfooter.php');

class profile_r1_view 
{
	private $title = "mtutor-profile registeration of tutor";

	function display() {
	    $headpage = new header();
	    $headpage->setTitle($this->title);
	 
	    if (config::$debug == TRUE)
	      $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome", "select2"));
	    else
	      $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min", "select2.min"));
	    $headpage->display();
	
	    $bodyheader = new Bheader();
	    $bodyheader->display();
	}
}

	$links = array();
	$links[0] = ROOT_URL.'user/getsubjectlist/';
	$links[1] = ROOT_URL.'user/getclasslist/';
	$links[2] = ROOT_URL.'tutor/register';
	$links[3] = ROOT_URL.'user/getarealist/';
	
	$obj=new profile_r1_view();
	$obj->display();
	
?>

	 <div class = "container content">
	 <div class="panel panel-default" style="border-bottom: none;">
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
			
	    	<form class="form-horizontal" action="<?php echo "{$links[2]}" ?>" method="post">
			<div class = "panel panel-default" style="border-left: 0em; border-right: 0em;">
			<div class = "panel-heading">
				PERSONAL DETAILS
			</div>
			<br>

              <div class="form-group" >
              <label for="nameField" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Name</label>
              <div class="col-md-7 col-xs-4">
                <input type="text" class = "form-control" id = "fieldName" name="fieldName" placeholder="Your name" 
                value="<?php if (Utils::multiKeyExists($viewmodel, 'fieldName')) echo $viewmodel['elems']['fieldName'] ?>">
              </div>
              </div>

			<div class="form-group">
			<label for="Phone Number" class="col-md-4 col-xs-2"style="padding-left: 2em;"> Mobile Number</label>
			<div id="textMobile" class="col-md-7 col-xs-4">
				<input type="text" class = "form-control" id = "phonenofield" placeholder="Your mobile number" name="fieldMobNumber" required maxlength="10" minlength="8" value="<?php if (Utils::multiKeyExists($viewmodel, 'fieldMobNumber')) echo $viewmodel['elems']['fieldMobNumber']?>"/>
			</div>
			</div>

			<div class="form-group">
			<label for="confirmField" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Date of Birth</label>
			<div class="col-md-7 col-xs-4">
				<input type="date" class = "form-control" id = "confirmField" placeholder="Date of birth" name="fieldBirth" value="<?php if (Utils::multiKeyExists($viewmodel, 'fieldBirth')) echo $viewmodel['elems']['fieldBirth']?>"/>
			</div>
			</div>

			<div class="form-group">
	    				
			<label for="gender" class="col-md-4 col-xs-2" style="padding-left: 2em;">Gender</label>
			 	<label class= "col-md-3 col-xs-2">   
                    Male <input class="col-md-3 col-xs-4" type="radio" value="Male" name = "gender" <?php if (Utils::multiKeyExists($viewmodel, 'gender')) {if ($viewmodel['elems']['gender'] == 'Male') echo "Checked";} ?> required />
				</label>
	    				 
			 	<label class= "col-md-3 col-xs-2">   
                  Female <input class="col-md-3 col-xs-4" type="radio" value="Female" name = "gender" <?php if (Utils::multiKeyExists($viewmodel, 'gender')) {if ($viewmodel['elems']['gender'] == 'Female') echo "Checked";} ?> required/>	
               	</label>
	    				 
			</div>

			<div class="form-group">
			<label for="address" class="col-md-4 col-xs-2" style="padding-left: 2em;">Address</label>
			<div class="col-md-7 col-xs-4">
                <input type="text" class = "form-control" id = "fieldAddress" placeholder="Your Address" name="fieldAddress" required value="<?php if (Utils::multiKeyExists($viewmodel, 'fieldAddress')) {echo $viewmodel['elems']['fieldAddress']; }?>"/>
			</div>
			</div>
	    				
			<div class="form-group">
			<label for="city" class="col-md-4 col-xs-2" style="padding-left: 2em;">City</label>
			<div class="col-md-7 col-xs-4">
                <input type="text" class = "form-control" id = "fieldCity" placeholder="Your city" name="fieldCity" required value="<?php if (Utils::multiKeyExists($viewmodel, 'fieldCity')) { echo $viewmodel['elems']['fieldCity']; } ?>"/>
			</div>
			</div>

	    	<div class="form-group">
			<label for="Pincode" class="col-md-4 col-xs-2" style="padding-left: 2em;">Pincode</label>
			<div class="col-md-7 col-xs-4">
              <select class="pincode form-control" id="fieldPincode" name="fieldPincode" placeholder="Pincode" required>
              </select>

			</div>
			</div>
	    			
<!-- //TODO..
	    	   <div class="form-group">
               <label for="Area" class="col-md-4 col-xs-2"style="padding-left: 2em;"> Area/pincode</label>
               <span class="col-md-4">
	    	   <select id="id_areas" class="selectpicker" title="Areas Prefered" data-live-search="true" data-size="5" data-selected-text-format="count > 2" multiple="multiple" required>
                     <option value="Shalimar">Shalimar Bagh</option>
                     <option value="Pitam">Pitam Pura</option>
                     <option value="Rohini">Rohini</option>
                     <option value="Pashchim">Pashchim Vihar</option>
                     <option value="Janakpuri">Janakpuri</option>
                  </select>
               </span>
               <span class="col-md-4">
	    	   <select id="id_pincodes" class="selectpicker" title="Pincodes" data-live-search="true" data-selected-text-format="count > 2" multiple="multiple" required>
                     <option value="110088">110088</option>
                     <option value="110052">110052</option>
                     <option value="110085">110085</option>
                     <option value="110006">110006</option>
                     <option value="110004">110004</option>
                  </select>
               </span>
            </div>
-->

      		<div class="form-group">
               <label for="class" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Classes Preferred</label>
               <div class="col-md-7 col-xs-4">
              <select multiple="multiple" title="Class" id="fieldClass" name="fieldClass[]" class="classname form-control" required>
              <?php 
                if (Utils::multiKeyExists($viewmodel, 'fieldClass')) {
                    //echo "<option value=\"".$viewmodel['elems']['fieldClass']['classId']."\" selected=\"selected\">".$viewmodel['elems']['fieldClass']['className']."</option>"; 
                  $classes = $viewmodel['elems']['fieldClass'];
                  for ($i = 0; $i < count($classes); ++$i) {
                    echo "<option value=\"".$classes[$i]['cl_id']."\" selected=\"selected\">".$classes[$i]['class_name']."</option>";
                  }
                } 
                ?>
              </select>
               </div>
            </div>
	    	
	    		<div class="form-group">
               <label for="subject" class="col-md-4 col-xs-2 "style="padding-left: 2em;"> Subjects Preferred</label>
               <div class="col-md-7 col-xs-4">

               <select multiple="multiple" placeholder="Subjects" id="fieldSubject" name="fieldSubject[]" class="subjectname form-control" required>
               <?php 
                if (Utils::multiKeyExists($viewmodel, 'fieldSubject')){
                  $Subjects = $viewmodel['elems']['fieldSubject'];
                  for ($i = 0; $i < count($Subjects); ++$i) {
                    echo "<option value=\"".$Subjects[$i]['sub_id']."\" selected=\"selected\">".$Subjects[$i]['sub_name']."</option>";
                  }
                } 
              ?>
			   </select>
               </div>
            </div>

		<div class="panel-footer">
		<button type = "submit" class="btn btn-primary btn-sm" onsubmit="return validateall()">Save & Continue</button> 
		<button type = "submit" name="submit" value="submit" class="btn btn-primary btn-sm" onclick="validateall()">Submit </button>
		</div>
	</div>
	</form>
	</div>		
	</div>

<?php
	    $footer = new BFooter();
	    $footer->addScript('<script src="/mtutor/js/select2.js"></script>');
	    
$script = <<<SCRDOC
<script>
    $("document").ready(function(){
      $("#textMobile").on("keypress", function(e){
 		 var charCode = (e.which) ? e.which : event.keyCode;
		 return !(charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57));
	  });
	    		
      $( ".classname" ).select2({        
          ajax: {
              url: function (params) {
                console.log(params.term);
                return "{$links[1]}" + params.term;
              },
              dataType: 'json',
              delay: 250,
              data: function (params) {
                  return;
              },
              processResults: function (data) {
                  // parse the results into the format expected by Select2.
                  // since we are using custom formatting functions we do not need to
                  // alter the remote JSON data
                  return {
                      results: data
                  };
              },
              cache: true
          },
          minimumInputLength: 2,
      }); 

      $( ".subjectname" ).select2({        
          ajax: {
              url: function (params) {
                console.log(params.term);
                return "{$links[0]}" + params.term;
              },
              dataType: 'json',
              delay: 250,
              data: function (params) {
                  return;
              },
              processResults: function (data) {
                  // parse the results into the format expected by Select2.
                  // since we are using custom formatting functions we do not need to
                  // alter the remote JSON data
                  return {
                      results: data
                  };
              },
              cache: true
          },
          minimumInputLength: 2,
          maximumSelectionLength: 4,
      }); 
                
      $( ".pincode" ).select2({        
          ajax: {
              url: function (params) {
                console.log(params.term);
                return "{$links[3]}" + params.term;
              },
              dataType: 'json',
              delay: 250,
              data: function (params) {
                  return;
              },
              processResults: function (data) {
                  // parse the results into the format expected by Select2.
                  // since we are using custom formatting functions we do not need to
                  // alter the remote JSON data
                  return {
                      results: data
                  };
              },
              cache: true
          },
          minimumInputLength: 6	,
      });
SCRDOC;
      $str = 'var errList= [';
      if (array_key_exists("errors",$viewmodel)) {
        foreach ($viewmodel['errors'] as $key => $value) {
          $str .= '{"#'.$key.'" : "'. $value . '"},';
        }
      }
      $str .= '{"#dummy" : "dummy"}];';
      $script .= $str;
$script .= <<<SCRDOC1
      $.each(errList, function(){
        $.each(this, function(key, val){
          //console.log(key);
          $('<span style="font-size:10px;color:red;">' + val + '</span>').insertAfter($(key));
        });
      });
    });
  </script>
SCRDOC1;
$footer->addScript($script);
$footer->display();
?>