<?php
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

  	class loginview
  	{
      private $title = "mTutor - Login";
      private $links = array();
      public function __construct() {
        $this->links[0] = ROOT_URL.'user/register';
        $this->links[1] = ROOT_URL.'user/forgot';
        $this->links[2] = ROOT_URL.'user/login';        
      }


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

        $showPage = '<div class="container content">';
        echo $showPage;
        Messages::display();

        $showPage = <<<PAGECONTENT
  <div class="col-md-4 col-md-offset-8 col-xs-12 col-sm-12">
    <div style="padding: 10px 30px 30px 30px">
    <form class="form-horizontal" action="{$this->links[2]}" method="post">
      <div class="panel panel-default">
        <div class="panel-heading">
          LOGIN
        </div>
        <div class="panel-body">
            <div class="form-group">
              <label for="emailField" class="col-xs-3 col-md-3">Email</label>
                <div class="col-xs-10 col-md-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" maxlength ="32" minlength="8" required />
                </div>
            </div>
            <div class="form-group">            
              <label for="password" class="col-xs-3 col-md-3">Password</label>
                <div class="col-xs-10 col-md-10">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" maxlength ="20" minlength="8" required/>
                </div>
            </div>          
        </div>
        <div class="panel-footer">
          <span><button type="submit" name="submit" value="login" class="btn btn-info btn-sm " style="float: left; padding-left: 5px; ">Login</button>
          <a href="{$this->links[0]}" style="margin-right: 0px; float: right;">Register New User</a></span>
          <br><a href="{$this->links[1]}" style="float: right;">Forgot Password?</a><br>
        </div>
      </div>
      </form>
    </div>    
  </div>
 </div>
  <hr>
<!-- end container -->
PAGECONTENT;
  echo $showPage;
  $footer = new BFooter();
  $footer->display();
  }
}

  $page = new loginview();
  $page->display();  

?>

