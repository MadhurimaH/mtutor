<?php 
  	//include_once ('./config.php'); 

	class header {
		private $title;
		private $stylesheets = array();

		function setstyles(array $styles_list) {
			$this->stylesheets = $styles_list;
		}

		function setTitle($title){
			$this->title = $title;
		}

		function display() {
			//phpinfo();
			$showPage = "Hello";
			$tempStr = "";
			$showPage = <<<PAGECONTENT
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>$this->title</title>
PAGECONTENT;
		
		foreach ($this->stylesheets as $val){
			$tempStr= '<link rel="stylesheet" type="text/css" href="/mtutor/css/'.$val.'.css">';
			$showPage.= $tempStr;
		}
  	$tempStr = <<<PAGECONTENT1
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
PAGECONTENT1;
		$showPage.= $tempStr;
		echo $showPage;
		}

	}
/** unit test ***	
	$page = new header();
	$page->setTitle("Title Page");
	$page->setstyles(array("bootstrap", "mtutor", "font-awesome.min"));
	$page->display();
***/
?>