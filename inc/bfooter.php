<?php 
 // 	include_once ('./config.php'); 

	class BFooter {
    private $links = array();
    private $jScripts = array();

    public function __construct() {
      $this->links[0] = ROOT_URL.'home/faq';
      $this->links[1] = ROOT_URL.'home/contact';
      $this->links[2] = ROOT_URL.'home/terms';
      $this->links[3] = ROOT_URL.'home/privpolicy';
    }

    public function addScript($script) {
      $this->jScripts[] = $script;
    }

		function display() {
			$showPage = <<<PAGECONTENT
  <!-- START Footer -->
  <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <h4><span class="glyphicon glyphicon-star"></span> Products</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="product.html">Product1</a></li>
                <li><a href="product.html">Product2</a></li>
                <li><a href="product.html">Product3</a></li>
                <li><a href="all_products.html">All products</a></li>
              </ul>
            </nav>
            <h4><span class="glyphicon glyphicon-cog"></span> Services</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="service.html">Service1</a></li>
                <li><a href="service.html">Service2</a></li>
                <li><a href="service.html">Service3</a></li>
                <li><a href="all_services.html">All services</a></li>              
              </ul>
            </nav>
          </div>
          <div class="col-md-2">
            <h4><span class="glyphicon glyphicon-star"></span> About</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="our_works.html">Our works</a></li>
                <li><a href="patnerships.html">Patnerships</a></li>
                <li><a href="leadership.html">Leadership</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="blog.html">Blog</a></li>
              <ul>
            </nav>          
          </div>
          <div class="col-md-2">
            <h4><span class="glyphicon glyphicon-star"></span> Support</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="{$this->links[0]}">FAQ</a></li>
                <li><a href="{$this->links[1]}">Contact us</a></li>            
              </ul>
            </nav>
            <h4><span class="glyphicon glyphicon-star"></span> Legal</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="#">License</a></li>
                <li><a href="{$this->links[2]}">Terms of Use</a></li>
                <li><a href="{$this->links[3]}">Privacy Policy</a></li>
                <li><a href="#">Security</a></li>      
              </ul>
            </nav>            
          </div>
          <div class="col-md-3">
            <h4>Get in touch</h4>
            <div class="social-icons-row">
              <a href="#"><i class="fa fa-2x fa-twitter"></i></a>
              <a href="#"><i class="fa fa-2x fa-facebook"></i></a>
              <a href="#"><i class="fa fa-2x fa-linkedin"></i></a>                                         
            </div>
            <div class="social-icons-row">
              <a href="#"><i class="fa fa-2x fa-google-plus"></i></a>              
              <a href="#"><i class="fa fa-2x fa-github"></i></a>
              <a href="mailto:info@mtutor.com"><i class="fa fa-2x fa-envelope"></i></a>        
            </div>
            <div class="social-icons-row">
              <i class="fa fa-phone fa-2x"></i> +9198123456780
            </div>
          </div>      
          <div class="col-md-3">
            <h4>Subscribe Newsletter</h4>
            <form>
              <input type="text" name="email" placeholder="Email address">
              <input type="submit" class="btn btn-primary" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
      <hr class="footer-divider">
      <div class="container">
        <p>
          &copy; 2016-2018 mTutor. All Rights Reserved.
        </p>
      </div>    
  </footer>
  <!-- End Footer -->
  <script src="/mtutor/js/jquery.js"></script>
  <script src="/mtutor/js/bootstrap.js"></script> 
PAGECONTENT;

    echo $showPage;
    foreach ($this->jScripts as $val){
      echo $val;
    }
    $showPage = "</body></html>"; 
		echo $showPage;
		}
	}
	
/** unit test ***
	$page = new BFooter();
	$page->display();
***/
?>
