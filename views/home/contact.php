<?php
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

class ContactView {
    private $links;
    private $title = "mTutor - Contact Us";
    public function __construct() {
        $this->links = ROOT_URL.'home/contact';
    }


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
  <!-- start main content -->
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
PAGECONTENT;

    echo $showPage;
    Messages::display();

    $showPage = <<<PAGECONTENT1
<div class="col-md-8">
            <div class="well well-sm">
                <form action="$this->links" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                Name</label>
                                <input type="text" name="pname" class="form-control" id="name" placeholder="Enter name" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">
                                Subject</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">Choose One:</option>
                                    <option value="service">General Customer Service</option>
                                    <option value="suggestions">Suggestions</option>
                                    <option value="product">Product Support</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                Message</label>
                                <textarea name="message" name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                    placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                <address>
                    <strong>MTutor Solutions</strong><br>
                    G-8 R G Complex-1<br>
                    Prashant Vihar, Delhi<br>
                    <abbr title="Phone">
                    P:</abbr>
                    (91) 12456-7890
                </address>
                <address>
                    <strong>Full Name</strong><br>
                    <a href="mailto:#">first.last@example.com</a>
                </address>
            </form>
        </div>
    </div>
</div>
  <!-- end main content -->
PAGECONTENT1;
    echo $showPage;

    $footer = new BFooter();
    $footer->display();
	}
}

  config::setdebugflag();
  $page = new ContactView();
  $page->display();
?>