<?php
  	include_once ('inc/header.php');
  	include_once ('inc/bheader.php');
  	include_once ('inc/bfooter.php');

	class StudDashboard {

		private $title ="mTutor- Student Dashboard";
		private $links = array();
		private $pk;
		
		public function __construct() {
		  $this->links[0] = ROOT_URL.'img/pro_pic.png';
		  $this->links[1] = ROOT_URL.'stud/update';
		  $this->links[2] = ROOT_URL.'user/getsubjectlist/';
		  $this->links[3] = ROOT_URL.'user/getclasslist/';
		   
		  //TODO.. get pk from student table
		  $this->pk='s1234';
		}

		public function display(&$data){
			$headpage = new header();
			$headpage->setTitle($this->title);
			if (config::$debug == TRUE)
			  $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome", "bootstrap-editable", "select2", "select2-bootstrap"));
			else
			  $headpage->setstyles(array("bootstrap.min", "mtutor.min", "font-awesome.min", "bootstrap-editable.min", "selec2.min", "select2-bootstrap"));
			$headpage->display();

			$bodyheader = new Bheader();
			$bodyheader->display();
			//$this->prepareSubjectOptions($data['subjects'], );
			// prepare subject id option html string
			$subjOpStr = '';
			if (Utils::multiKeyExists($data, 'subjects')){
               $Subjects = $data['subjects'];
               for ($i = 0; $i < count($Subjects); ++$i) {
                  $subjOpStr.= "<option value=\"".$Subjects[$i]['sub_id']."\" selected=\"selected\">".$Subjects[$i]['sub_name']."</option>";
               }
			} 


			$showpage = <<< PAGEDOC
			    <div class="container content">
			    	<h2 class="text-center"> DASHBOARD - STUDENT </h2>
				    <div class="row">
					    <div class="col-md-3">
					    	<div class="panel panel-default">
					    		<div class="panel-heading">
					    			<img src="/mtutor/img/pro_pic.png" class="img-responsive img-thumbnail center-block"><br>
					    			<p class="text-center">{$data['name']}<br>
					    			Silver Member</p>
					    		</div>

					 			<div class="panel-body">
					 				<ul class="nav nav-pills nav-stacked">    
					 				<li><a href="#dashboard"><span class="glyphicon glyphicon-th-list"> Dashboard</span></a></li>    
					 				<li><a href="#profile"><span class="glyphicon glyphicon-user"> Profile</span></a></li>    
					 				<li><a href="#reviews"><span class="glyphicon glyphicon-envelope"> Invite For Reviews</span></a></li> 
					 				<li><a href="#courses"><span class="glyphicon glyphicon-star"> Courses</span></a></li>
					 				<li><a href="#tutor"><span class="glyphicon glyphicon-refresh"> Find a Tutor</span></a></li>
					 				<li><a href="#account"><span class="glyphicon glyphicon-cog"> Account</span></a></li>
					 				</ul>
					 			</div>

					 			<div class="panel-footer">
					 				<button type = "submit" class="btn btn-primary btn-sm">Sign Out </button>
					 			</div>
					    	</div>
					    </div>
					    <div class="col-md-9">
					    	<div class="row tab-pane fade in active" id = "profile">
					    		<!--add profile-->
					    		<div class="col-md-10 well well-sm">					    			
					    			<p><label for="address"> Email: </label>
					    			<a href="#" id="email" data-type="text" data-title="Enter email">{$data['email']}</a></p> 
					    			<p><label for="address"> Address: </label>
					    			<a href="#" id="address" data-name="address" data-type="textarea" data-url="{$this->links[1]}" data-rows="2" data-title="Enter address" data-pk="{$this->pk}">{$data['address']}</a></p> 				
					    			<p><label for="gender">Pincode:</label>
					    			<a href="#" id="pincode" data-type="text" data-url="{$this->links[1]}" data-title="Enter pincode" data-pk="{$this->pk}">{$data['pincode']}</a> </p>
					    			<p><label for="city"> City: </label>
					    			<a href="#" id="city" data-name="city" data-type="text" data-url="{$this->links[1]}"  data-title="Enter city" data-pk="{$this->pk}">{$data['city']}</a> </p>					    			
					    			<p><label for="state">State:</label>
					    			<a href="#"  id="state" data-name="state" data-type="text" data-url="{$this->links[1]}" data-pk="{$this->pk}" data-title="Enter state">{$data['state']}</a> </p>
					    			<p><label for="gender">Gender:</label>
					    			<a href="#"  id="gender" data-type="select" data-url="{$this->links[1]}" data-pk="{$this->pk}" data-title="Enter Gender"></a></p>
					    			<p><label for="school">School Name:</label>
					    			<a href="#"  id="school" data-type="text" data-url="{$this->links[1]}" data-pk="{$this->pk}" data-title="Enter School">{$data['school']}</a> </p>
					    			<p><label for="class">Class:</label>
					    			<a href="#"  id="class" data-type="select2" data-url="{$this->links[1]}" data-pk="{$this->pk}" data-rows="2" data-value="{$data['class']}"  data-title="Enter School"></a> </p>
					    			<form id="subjectForm" class="form-horizontal" action="doprofile.php" method="post">
										<input type="hidden" name="pk" value="{$this->pk}">
										<input type="hidden" name="name" value="subjects">
					    			  	<div class="form-group">
						    			  <label for="fieldSubject" class="col-md-2 col-xs-2 "style="padding-left: 1em;">Subjects: </label>
						    			  <div class="col-md-7 col-xs-4">
						    			    <select multiple="multiple" placeholder="Subjects" id="fieldSubject" name="value[]" class="subjectname form-control" disabled>
							    			    {$subjOpStr}
						    			    </select>
						    			  </div>
						    			  <button id="btnSubmit" type = "submit" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-ok"></i></button>
						    			  <button id="btnCancel" type = "reset" class="btn btn-sm"><i class="glyphicon glyphicon-remove"></i></button>
						    			  <button id="btnEdit" class="btn btn-sm"><i class="glyphicon glyphicon-pencil"></i></button>						    			  
					    			  	</div>
					    			 </form>
					    		</div>
					    		<!--end profile-->
					    	</div>
					    <div class="row">
					                <div class="col-sm-12">
					                    <div class="bs-calltoaction bs-calltoaction-default">
					                        <div class="row">
					                            <div class="col-md-9 cta-contents">
					                                <h1 class="cta-title">Its a Call To Action</h1>
					                                <div class="cta-desc">
					                                    <p>Describe the action here.</p>
					                                    <p>Describe the action here.</p>
					                                    <p>Describe the action here.</p>
					                                </div>
					                            </div>
					                            <div class="col-md-3 cta-button">
					                                <a href="#" class="btn btn-lg btn-block btn-default">Go for It!</a>
					                            </div>
					                         </div>
					                    </div>

					                    <div class="bs-calltoaction bs-calltoaction-primary">
					                        <div class="row">
					                            <div class="col-md-9 cta-contents">
					                                <h1 class="cta-title">Its a Call To Action</h1>
					                                <div class="cta-desc">
					                                    <p>Describe the action here.</p>
					                                    <p>Describe the action here.</p>
					                                    <p>Describe the action here.</p>
					                                </div>
					                            </div>
					                            <div class="col-md-3 cta-button">
					                                <a href="#" class="btn btn-lg btn-block btn-primary">Go for It!</a>
					                            </div>
					                         </div>
					                    </div>

					                    <div class="bs-calltoaction bs-calltoaction-info">
					                        <div class="row">
					                            <div class="col-md-9 cta-contents">
					                                <h1 class="cta-title">Its a Call To Action</h1>
					                                <div class="cta-desc">
					                                    <p>Describe the action here.</p>
					                                    <p>Describe the action here.</p>
					                                    <p>Describe the action here.</p>
					                                </div>
					                            </div>
					                            <div class="col-md-3 cta-button">
					                                <a href="#" class="btn btn-lg btn-block btn-info">Go for It!</a>
					                            </div>
					                         </div>
					                    </div>

					                    <div class="bs-calltoaction bs-calltoaction-success">
					                        <div class="row">
					                            <div class="col-md-9 cta-contents">
					                                <h1 class="cta-title">Its a Call To Action</h1>
					                                <div class="cta-desc">
					                                    <p>Describe the action here.</p>
					                                    <p>Describe the action here.</p>
					                                    <p>Describe the action here.</p>
					                                </div>
					                            </div>
					                            <div class="col-md-3 cta-button">
					                                <a href="#" class="btn btn-lg btn-block btn-success">Go for It!</a>
					                            </div>
					                         </div>
					                    </div>

					                    <div class="bs-calltoaction bs-calltoaction-warning">
					                        <div class="row">
					                            <div class="col-md-9 cta-contents">
					                                <h1 class="cta-title">Its a Call To Action</h1>
					                                <div class="cta-desc">
					                                    <p>Describe the action here.</p>
					                                    <p>Describe the action here.</p>
					                                    <p>Describe the action here.</p>
					                                </div>
					                            </div>
					                            <div class="col-md-3 cta-button">
					                                <a href="#" class="btn btn-lg btn-block btn-warning">Go for It!</a>
					                            </div>
					                         </div>
					                    </div>

					                    <div class="bs-calltoaction bs-calltoaction-danger">
					                        <div class="row">
					                            <div class="col-md-9 cta-contents">
					                                <h1 class="cta-title">Its a Call To Action</h1>
					                                <div class="cta-desc">
					                                    <p>Describe the action here.</p>
					                                    <p>Describe the action here.</p>
					                                    <p>Describe the action here.</p>
					                                </div>
					                            </div>
					                            <div class="col-md-3 cta-button">
					                                <a href="#" class="btn btn-lg btn-block btn-danger">Go for It!</a>
					                            </div>
					                         </div>
					                    </div>

					                </div>
						</div> <!-- End of Row-->
				    </div>
			    </div>
PAGEDOC;
			echo $showpage;
			$footer = new BFooter();
			if (config::$debug == TRUE)
				$footer->addScript('<script src="/mtutor/js/bootstrap-editable.js"></script>');
			else
				$footer->addScript('<script src="/mtutor/js/bootstrap-editable.min.js"></script>');
			if (config::$debug == TRUE)
				$footer->addScript('<script src="/mtutor/js/select2.full.js"></script>');
			else
				$footer->addScript('<script src="/mtutor/js/select2.full.min.js"></script>');

			$script = <<<SCRIPTDOC
<script>
			$(document).ready(function(){
				$.fn.editable.defaults.mode = 'inline';
				$('#gender').editable({
					value: '{$data['gender']}',    
					source: [
						{value: 'M', text: 'Male'},
						{value: 'F', text: 'Female'},
					]				
				});

				var data = [
				      { id: 0, text: 'enhancement' }, 
				      { id: 1, text: 'bug' }, 
				      { id: 2, text: 'duplicate' }, 
				      { id: 3, text: 'invalid' }, 
				      { id: 4, text: 'wontfix' }
				];

				$('#subjects').editable({
					inputclass: 'input-large',
					select2: {
						data: data,
						multiple: true
					}
				});

				$('#class').editable({
					source: [
			            {"id":"c012","text":"Class 12"},
			            {"id":"c011","text":"Class 11"},
			            {"id":"c010","text":"Class 10"},
			            {"id":"c009","text":"Class 9"},
			            {"id":"c008","text":"Class 8"},
			            {"id":"c007","text":"Class 7"},
			            {"id":"c004","text":"Class 4"},
			            {"id":"c003","text":"Class 3"},
			            {"id":"c002","text":"Class 2"},
			            {"id":"c001","text":"Class 1"}],
					select2: {
						placeholder: 'Select Class',
						minimumInputLength: 2
					}
				});

				$('#country').editable({
				    source: [
				          {id: 'gb', text: 'Great Britain'},
				          {id: 'us', text: 'United States'},
				          {id: 'ru', text: 'Russia'}
				       ],
				    select2: {
				       multiple: true
				    }
				});


				$('#address').editable();
				$('#pincode').editable();
				$('#city').editable();
				$('#state').editable();
				$('#school').editable();

				$( ".subjectname" ).select2({        
				    ajax: {
				        url: function (params) {
				          //console.log(params.term);
				          return "{$this->links[2]}" + params.term;
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


				$('#btnSubmit').hide();
				$('#btnCancel').hide();
				
				var oldSubjectList = 0;

				$('#btnEdit').click(function(){
					$("#fieldSubject").attr('disabled', !$("#fieldSubject").attr('disabled'));
					$('#btnEdit').hide();
					$('#btnSubmit').show();
					$('#btnCancel').show();
					oldSubjectList = $("#fieldSubject option");
            		return false;
				});
				
				$('#btnCancel').click(function(){
					$('#btnEdit').show();
					$('#btnSubmit').hide();
					$('#btnCancel').hide();
					$('#fieldSubject').empty();
					var item = data[0];
				    // Create the DOM option that is pre-selected by default
				    //var option = new Option(item.text, item.id, true, true);
					//$('#fieldSubject').append(option);
					$.each(oldSubjectList, function(index, item){
						//console.log(item.text);
						//console.log(item.value);
						$('#fieldSubject').append(new Option(item.text, item.value, true, true));
					});
					//$('#fieldSubject').append(oldSubjectList);
					$('#fieldSubject').trigger('change');
					$("#fieldSubject").attr('disabled', !$("#fieldSubject").attr('disabled'));
					//console.log('triggering...' + JSON.stringify(oldSubjectList));
					return false;
				});

				$('#btnSubmit').click(function(){
					SubjectList = $("#fieldSubject option");
					//var formData = {name:"subjects", pk:"1234" , value : "1" };
					var formData = $('#subjectForm').serialize();
					//formData.append("pk", "1234");
					//formData.append("name", "subjects");
					console.log(formData);
					$.ajax({
						url: "http://localhost/mtutor/stud/update",
						type: "POST",
						data: formData,
						success: function(data, textStatus, jqXHR){
							console.log(textStatus);
							$('#btnEdit').show();
							$('#btnSubmit').hide();
							$('#btnCancel').hide();
							$("#fieldSubject").attr('disabled', !$("#fieldSubject").attr('disabled'));
						},
						error : function(jqXHR, textStatus, errorThrown){
							console.log(textStatus);
						}
					});
					return false;
				});


			 });

</script>
SCRIPTDOC;
			$footer->addScript($script);
			$footer->display();
		}
	} 
	$page = new StudDashboard();
	$page->display($viewmodel);
?>