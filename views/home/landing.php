<?php
  
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

	
	class landing
	{
		 private $title = "mtutor - Landing Page(Student)";       	 

		public function display()
		{		   
			 	$headpage = new header();
        		$headpage->setTitle($this->title);
           		$headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));        	
        		$headpage->display();
       			$bodyheader = new Bheader();
        		$bodyheader->display();

		   $showpage = <<<PAGEDOC
		   <body>
  <div class="container" style="display: table;height: 100%; width: 100%; position: relative;background: url(../img/pixi.jpg) no-repeat center center fixed; background-size: cover">
	<div class="container" style="background-image:url(../img/kbpen.png); width: 100%; padding: 50px 50px 50px 50px; z-index: 1">
		<h1 style="font-family: Berlin Sans FB; text-align: center; font-size: 100px ">mTutor</h1>
		<h3 style="text-align: center; font-size: 30px">Catering to your education needs</h3><br>
		<div class="row text-center">
			<button type="button" name="login" class="btn btn-default" style="float: left; margin-left: 500px">Login</button>
			<button type="button" name="register" class="btn btn-default" style="float: right; margin-right: 500px">Register</button>
		</div>
	</div>
	<div class="container" style="z-index: 1">
		<div class="row" style="height: 50px; width: 100%; ">
			
		</div>
	</div>
	<div class="container" style="background-image:url(../img/bg3.jpg);background-size: cover;width: 100%; z-index: 1">
		<div class="row" style=" width: 100%;color: white">
			<h2 style="text-align: center;font-size: 50px;color: black">Find Tutors The Easy Way</h2>
			<div class="col-md-2 col-md-offset-2" style="border-radius: 100px; width: 160px; height: 160px;background-color: skyblue;padding: 40px 30px 30px 40px ">
				<span class="glyphicon glyphicon-flash " style="font-size: 80px; "></span>				
			</div>	
			<div class="col-md-2 col-md-offset-2" style="border-radius: 100px; width: 160px; height: 160px;background-color: skyblue;padding: 40px 30px 30px 40px ">
				<span class="glyphicon glyphicon-thumbs-up" style="font-size: 80px;"></span>				
			</div>	
			<div class="col-md-2 col-md-offset-2" style="border-radius: 100px; width: 160px; height: 160px;background-color: skyblue;padding: 40px 30px 30px 40px ">
				<span class="glyphicon glyphicon-shopping-cart" style="font-size: 80px;"></span>				
			</div>		
		</div>
		<div class="row" >
			<div class="col-md-2 col-md-offset-2 " style="font-size: 40px">
				Contact Faster
			</div>
			<div class="col-md-2 col-md-offset-1" style="font-size: 40px">
				The Right Tutors
			</div>
			<div class="col-md-3 col-md-offset-1 text-center" style="font-size: 40px">
				Affordable Options
			</div>
		</div>
		<div class="row" style="background-image: url(../img/learn.png); height: 350px; background-size: cover; padding: 20px 20px 20px 20px 20px; font-size: 20px; color: white; ">		
		<div class="col-md-4 col-md-offset-7" >
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		</div>
	</div>

	<div class="container" style="z-index: 1">
		<div class="row" style="height: 50px; width: 100%; ">
			
		</div>
	</div>

	<div class="container" style="background-image: url(../img/bg3.jpg); background-size: cover; width: 100%; z-index: 1">
		<h2 style="text-align: center;font-size: 50px;">Customised Search</h2>
		<div class="row" style="width: 100%; color: white">
			<div class="col-md-2 col-md-offset-3" style="border-radius: 100px; width: 160px; height: 160px;background-color: skyblue;padding: 35px 30px 30px 40px ">
				<span class="glyphicon glyphicon-sort-by-attributes-alt" style="font-size: 80px"></span>
			</div>
			<div class="col-md-2 col-md-offset-3" style="border-radius: 100px; width: 160px; height: 160px;background-color: skyblue;padding: 38px 30px 30px 40px ">
				<span class="glyphicon glyphicon-time" style="font-size: 80px"></span>
			</div>
		</div>
		<div class="row" style="color: black">
			<div class="col-md-3 col-md-offset-2 text-center " style="font-size: 30px;">
				Filter by class/board
			</div>
			<div class="col-md-3 col-md-offset-2 text-center" style="font-size: 30px;">
				Sort by time slots
			</div>
		</div>
		<div class="col-md-7">
		<img src="srchimg.png" style="width:60%; height: 300px">
		</div>
		<div class="col-md-4" style="font-size: 20px">
		<br><br>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</div>
	</div>
	<div class="container" style="z-index: 1">
		<div class="row" style="height: 50px; width: 100%; ">
			
		</div>
	</div>

	<div class="container" style="background-image: url(../img/bg3.jpg);background-size: cover; width: 100%; z-index: 1; padding: 10px 10px 30px 10px">
		<h2 style="text-align: center;font-size: 50px;">Direct Route</h2>
		<div class="col-md-2 col-md-offset-1" style="border-radius: 100px; width: 160px; height: 160px;background-color: skyblue;padding: 50px 30px 30px 50px ">
			<span class="glyphicon glyphicon-resize-small" style="font-size:60px; color: white" ></span><br>
		</div>
		<div class="col-md-3" style="font-size: 15px"><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</div>
		<img src="dirarrow.jpg" style="height: 200px; width:50%; float: right; vertical-align: middle; margin-right: 20px;">

	</div>

	<div class="container">
		<div class="row" style="height: 50px; width: 100%; ">
			
		</div>
	</div>

	<div class="container" style="background-image:url(../img/bg3.jpg); background-size: cover;width: 100%; z-index: 1">
		<div class="row" style=" width: 100%; color: black; font-size: 20px; text-align: center;">
			<h2 style="text-align: center;font-size: 50px;color: black">We Care About Your Trust Issues</h2>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
			<div class="col-md-2 col-md-offset-2" style="border-radius: 100px; width: 160px; height: 160px;background-color: skyblue;padding: 40px 30px 30px 40px; color: white ">
				<span class="glyphicon glyphicon-pencil " style="font-size: 80px; "></span>				
			</div>	
			<div class="col-md-2 col-md-offset-2" style="border-radius: 100px; width: 160px; height: 160px;background-color: skyblue;padding: 40px 30px 30px 40px; color: white ">
				<span class="glyphicon glyphicon-ok" style="font-size: 80px;"></span>				
			</div>	
			<div class="col-md-2 col-md-offset-2" style="border-radius: 100px; width: 160px; height: 160px;background-color: skyblue;padding: 40px 30px 30px 40px; color: white ">
				<span class="glyphicon glyphicon-star-empty" style="font-size: 80px;"></span>				
			</div>		
		</div>
		<div class="row" >
			<div class="col-md-2 col-md-offset-2 " style="font-size: 40px">
				Tested Tutors
			</div>
			<div class="col-md-2 col-md-offset-1" style="font-size: 40px">
				Verified Credentials
			</div>
			<div class="col-md-3 col-md-offset-1 text-center" style="font-size: 40px">
				Rating System
			</div>
		</div>
		<img src="tutor2.jpg" style="height: auto;width: auto; margin-left: 400px ;">
	</div>  

  <div class="container">
		<div class="row" style="height: 50px; width: 100%; ">
			
		</div>
  </div>

  <div class="container" style="background-image:url(../img/image5.png); background-size: cover;width: 100%; height: 500px; z-index: 1; padding: 20px 20px 20px 20px">
        <form class="col-md-3 form" >
        	<h3>Contact Us</h3><br>
        	<input type="text" class="form-control" placeholder="Name"></input>
        	<input type="text" class="form-control" placeholder="Email"></input>
        	<input type="text" class="form-control" placeholder="Message"></input><br>
        	<button type="submit" value="Submit" class="btn btn-primary">Submit</button>        	
        </form>
  </div>
</div>


PAGEDOC;
		echo $showpage;
  		$footer = new BFooter();
  		$footer->display();
	}

}

	$obj = new landing();
	$obj -> display();

?>
