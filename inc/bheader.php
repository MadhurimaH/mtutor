<?php 
  	//include_once ('./config.php'); 

	class BHeader {
    private $links = array('Login', '/user/login', 'Register', '/user/register');
    private $dropdownlinks = array();
    private $dropdownnames = array();

    public function __construct() {
      $this->links[1] = ROOT_URL.'user/login';
      $this->links[3] = ROOT_URL.'user/register';
      $this->links[4] = ROOT_URL.'home/about';
      $this->links[5] = ROOT_URL.'home/index';
      $this->links[6] = ROOT_URL.'home/contact';
      $this->links[7] = ROOT_URL.'user/logout';

      // set dropdown menu links
      $this->dropdownlinks[0] = ROOT_URL.'user/activate';
      $this->dropdownlinks[1] = ROOT_URL.'user/changepwd';
      $this->dropdownlinks[2] = ROOT_URL.'user/forget';
      $this->dropdownlinks[3] = ROOT_URL.'home/landing';
      $this->dropdownlinks[4] = ROOT_URL.'tutor/register';
      $this->dropdownlinks[5] = ROOT_URL.'tutor/profile';
      $this->dropdownlinks[6] = ROOT_URL.'tutor/search';
      $this->dropdownlinks[7] = ROOT_URL.'tutor/dashboard';
      $this->dropdownlinks[8] = ROOT_URL.'tutor/sendmessage';
      $this->dropdownlinks[9] = ROOT_URL.'tutor/showmessages';
      $this->dropdownlinks[10] = ROOT_URL.'tutor/publicpro';
      $this->dropdownlinks[11] = ROOT_URL.'stud/register';
      $this->dropdownlinks[12] = ROOT_URL.'stud/profile';
      $this->dropdownlinks[13] = ROOT_URL.'stud/search';
      $this->dropdownlinks[14] = ROOT_URL.'stud/dashboard';
      $this->dropdownlinks[15] = ROOT_URL.'stud/showmessages';
      $this->dropdownlinks[16] = ROOT_URL.'stud/sendmessage';
      $this->dropdownlinks[17] = ROOT_URL.'modt/dashboard';
      $this->dropdownlinks[18] = ROOT_URL.'modt/reports';
      $this->dropdownlinks[19] = ROOT_URL.'modt/logs';

      // set dropdown menu links
      $this->dropdownnames[0] = 'user activate';
      $this->dropdownnames[1] = 'user changepwd';
      $this->dropdownnames[2] = 'user forget passwrd';
      $this->dropdownnames[3] = 'home landing';
      $this->dropdownnames[4] = 'tutor register';
      $this->dropdownnames[5] = 'tutor profile';
      $this->dropdownnames[6] = 'tutor search';
      $this->dropdownnames[7] = 'tutor dashboard';
      $this->dropdownnames[8] = 'tutor sendmessage';
      $this->dropdownnames[9] = 'tutor showmessages';
      $this->dropdownnames[10] = 'tutor pubprofile';
      $this->dropdownnames[11] = 'stud register';
      $this->dropdownnames[12] = 'stud profile';
      $this->dropdownnames[13] = 'stud search';
      $this->dropdownnames[14] = 'stud dashboard';
      $this->dropdownnames[15] = 'stud sendmessage';
      $this->dropdownnames[16] = 'stud showmessages';
      $this->dropdownnames[17] = 'modt dashboard';
      $this->dropdownnames[18] = 'modt reports';
      $this->dropdownnames[19] = 'modt logs';
    }

    function displaymenu() {
      for ($i = 0; $i <= 19; $i++) {
        $str = '<li><a href="'.$this->dropdownlinks[$i].'">'.$this->dropdownnames[$i].'</a></li>';   
        echo $str;
        if ($i == 3 || $i == 10 || $i == 16)
          echo '<li class="divider"></li>';
      }
    }

		function display() {
			$showPage = <<<PAGECONTENT
<body>
  <!--- start header -->
  <header>
    <!-- Fixed navbar -->
    <div class="navbar navbar-fixed-top" role="navigation">
      <div class="navbar-inner">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">mTutor Project</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{$this->links[5]}">Home</a></li>
              <li><a href="{$this->links[4]}">About</a></li>
              <li><a href="{$this->links[6]}">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
PAGECONTENT;
      echo $showPage;
      $this->displaymenu();
      $showPage = '</ul></li></ul><ul class="nav navbar-nav navbar-right">';
      if(isset($_SESSION['is_logged_in'])) {
        $showPage .= '<li><a href="'.$this->links[7].'">Log Out</a></li>';
      } else {
        $showPage .= '<li><a href="'.$this->links[1].'">Login</a></li>'.'<li><a href="'.$this->links[3].'">Register</a></li>'; 
      }
      $showPage .= '</ul></div><!--/.nav-collapse --></div></div></div></header>';
		echo $showPage;
		}
	}
	
/** unit test ***	
	$page = new Bheader();
	$page->display();
***/
?>