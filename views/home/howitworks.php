<?php
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

class howit_works {
  private $title = "mTutor - How it Works";
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

    <h1 style="text-align:center; font-family: Comic Sans MS; padding-top:40px"> How It Works </h1>
    <br><p style="text-align:center; font-size:18px"> This online hub is made up of hundreds of teachers, academics and university students.</p>
    
    <div>
        <table class="col-md-offset-1" border=0 cellspacing="1" cellpadding="1" width=90%>
            
            <tr>
                <td id="bignum"> ❶ </td>
                <td id="arrow"> ➪ </td>
                <td id="bignum"> ❷ </td>
                <td id="arrow"> ➪ </td>
                <td id="bignum"> ❸ </td>
                <td id="arrow"> ➪ </td>
                <td id="bignum"> ❹ </td>
                <td id="arrow"> ➪ </td>
                <td id="bignum"> ❺ </td>
            </tr>

            <tr>
                <td> First register as <br>tutor and make your profile</td>
                <td> </td>
                <td> login to your personal account</td>
                <td> </td>
                <td> search for queries that suit you</td>
                <td> </td>
                <td> select students you would like to teach</td>
                <td> </td>
                <td> edit your profile accordingly</td>
            </tr>

            <tr>
                <td > <hr></td>           
                <td > </td>
                <td > <hr></td>
                <td > </td>
                <td > <hr></td>
                <td > </td>
                <td > <hr></td>
                <td > </td>
                <td > <hr></td>
            </tr>  


            <tr>
                <td id="bignum"> ❶ </td>
                <td id="arrow"> ➪ </td>
                <td id="bignum"> ❷ </td>
                <td id="arrow"> ➪ </td>
                <td id="bignum"> ❸ </td>
                <td id="arrow"> ➪ </td>
                <td id="bignum"> ❹ </td>
                <td id="arrow"> ➪ </td>
                <td id="bignum"> ❺ </td>
            </tr>

            <tr>
                <td> Register as student<br> and make your profile</td>
                <td> </td>
                <td> Login to your account</td>
                <td> </td>
                <td> Enter your queries</td>
                <td> </td>
                <td> Search for tutors that suit you</td>
                <td> </td>
                <td> Send requests to selected tutors</td>
            </tr>

        </table>
    </div>

PAGECONTENT;
    echo $showPage;

    $footer = new BFooter();
    $footer->display();
  }
}

  config::setdebugflag();
  $page = new howit_works();
  $page->display();
?>