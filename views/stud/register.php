
<?php
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');
/**
* 
*/
class student_reg_view
{
	public $title="mtutor-profile registeration of student";
  public function display()
  {
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
	$obj=new student_reg_view();
  $obj->display();
?>	

<div class="container content">
<br>
 
<div class = "panel panel-primary" style="width: 60%; margin: auto;">
<div class = "panel-heading" style="font-size: 1.5em;">
          COMPLETE YOUR PROFILE
        </div>
  <br>
      <form class="form-horizontal" action="<?php echo ROOT_URL."stud/register" ?>" method="post">
              <div class="form-group" >
              <label for="nameField" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Name</label>
              <div class="col-md-5 col-xs-4">
                <input type="text" class = "form-control" id = "fieldName" name="fieldName" placeholder="Your name" 
                value="<?php if (Utils::multiKeyExists($viewmodel, 'fieldName')) echo $viewmodel['elems']['fieldName'] ?>"> 
              </div>
              </div>
              <div class="form-group">              
              <label for="gender" class="col-md-4 col-xs-2" id = "gender"style="padding-left: 2em;">Gender</label>
                <label class= "col-md-3 col-xs-2">   
                  Male <input class="col-md-3 col-xs-4" type="radio" value="Male" name = "gender" <?php if (Utils::multiKeyExists($viewmodel, 'gender')) {if ($viewmodel['elems']['gender'] == 'Male') echo "Checked";} ?> required />
                </label>
               
                <label class= "col-md-3 col-xs-2">   
                  Female <input class="col-md-3 col-xs-4" type="radio" value="Female" name = "gender" <?php if (Utils::multiKeyExists($viewmodel, 'gender')) {if ($viewmodel['elems']['gender'] == 'Female') echo "Checked";} ?> required/>
                </label>               
              </div>

              <div class="form-group" >
              <label for="fieldSchool" class="col-md-4 col-xs-2" style="padding-left: 2em;"> School Name</label>
              <div class="col-md-5 col-xs-4">
                <input type="text" class = "form-control" id = "fieldSchool" placeholder="Your school name" name="fieldSchool" value="<?php if (Utils::multiKeyExists($viewmodel, 'fieldSchool')) {echo $viewmodel['elems']['fieldSchool'];}?>" />
              </div>
              </div>
              <div class="form-group">
              <label for="fieldClass" class="col-md-4 col-xs-2" style="padding-left: 2em;">Class</label>
              <div class="col-md-5 col-xs-4">
              <select class="classname form-control" id="fieldClass" name="fieldClass" placeholder="Class" required >
              <?php 
                if (Utils::multiKeyExists($viewmodel, 'fieldClass'))
                    echo "<option value=\"".$viewmodel['elems']['fieldClass']['classId']."\" selected=\"selected\">".$viewmodel['elems']['fieldClass']['className']."</option>"; 
                    //echo "<option value=\"3620194\" selected=\"selected\">select2</option>";
              ?>                
              </select>
              </div>
              
              </div>
              <div class="form-group">
                <label for="fieldSubject" class="col-md-4 col-xs-2 "style="padding-left: 2em;">Subjects</label>
                <div class="col-md-7 col-xs-4">
                  <select multiple="multiple" placeholder="Subjects" id="fieldSubject" name="fieldSubject[]" class="subjectname form-control" required>
              <?php 
                if (Utils::multiKeyExists($viewmodel, 'fieldSubject')){
                  $Subjects = $viewmodel['elems']['fieldSubject'];
                  for ($i = 0; $i < count($Subjects); ++$i) {
                    echo "<option value=\"".$Subjects[$i]['sub_id']."\" selected=\"selected\">".$Subjects[$i]['sub_name']."</option>";
                  }
                } 
                    //echo "<option value=\"3620194\" selected=\"selected\">select2</option>";
              ?>                
                    <!--option value="3620194" selected="selected">select2/select2</option>
                    <option value="317757" selected="selected">Modernizr/Modernizr</option-->
                  </select>
                </div>
              </div>
            <div class="form-group" >
              <label for="fieldPhone" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Phone Number</label>
              <div class="col-md-5 col-xs-4">
                <input type="text" class = "form-control" id="fieldPhone" placeholder="Your Phone number" name="fieldPhone" required  value="<?php if (Utils::multiKeyExists($viewmodel, 'fieldPhone')) {echo $viewmodel['elems']['fieldPhone']; } ?>"/>
              </div>
              </div>
            <div class="form-group" >
              <label for="Address" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Address</label>
              <div class="col-md-5 col-xs-4">
                <input type="text" class = "form-control" id = "fieldAddress" placeholder="Your Address" name="fieldAddress" required value="<?php if (Utils::multiKeyExists($viewmodel, 'fieldAddress')) {echo $viewmodel['elems']['fieldAddress']; }?>"/>
              </div>
              </div>
              <div class="form-group" >
              <label for="cityField" class="col-md-4 col-xs-2" style="padding-left: 2em;"> City</label>
              <div class="col-md-5 col-xs-4">
                <input type="text" class = "form-control" id = "fieldCity" placeholder="Your city" name="fieldCity" required value="<?php if (Utils::multiKeyExists($viewmodel, 'fieldCity')) { echo $viewmodel['elems']['fieldCity']; } ?>"/>
              </div>
              </div>
              <div class="form-group" >
              <label for="pincode" class="col-md-4 col-xs-2" style="padding-left: 2em;"> Pincode</label>
              <div class="col-md-5 col-xs-4">
                <input type="text" class = "form-control" id = "fieldPincode" placeholder="Pincode" name="fieldPincode" required  value="<?php if (Utils::multiKeyExists($viewmodel, 'fieldPincode')) { echo $viewmodel['elems']['fieldPincode'];} ?>"/>
              </div>
              </div>
      <div class="panel-footer">            
            <button type = "submit" name="submit" value="submit" class="btn btn-primary btn-sm" onsubmit="return validateall()" style="width: 10em;">Submit </button>          
      </div>

    </form>
  </div>
</div>
<?php
    $footer = new BFooter();
    $footer->addScript('<script src="/mtutor/js/select2.js"></script>');
    //$footer->addScript('<script src="/mtutor/js/jquery.sumoselect.js"></script>');
    //$footer->addScript('<script type="text/javascript">
    //    $(document).ready(function () {
    //        window.asd = $(\'.SlectBox\').SumoSelect({ csvDispCount: 3, captionFormatAllSelected: "All selected." 
    //      });          
    //    });</script>');

$script = <<<SCRDOC
<script>
    $("document").ready(function(){
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
