<?php
  
  include_once ('inc/header.php');
  include_once ('inc/bheader.php');
  include_once ('inc/bfooter.php');

  
  class searchres
  {
    private $title = "mtutor - Search Results";
    public function display()
    {      
            $headpage = new header();
            $headpage->setTitle($this->title);
            $headpage->setstyles(array("bootstrap", "mtutor", "font-awesome"));         
            $headpage->display();
            $bodyheader = new bheader();
            $bodyheader->display();

       $showpage = <<<PAGEDOC
<body>
    <h2 class="text-center page-header" style="margin-top:15px">Search results :</h2>
  <div class="col-md-2 col-sm-3 col-xs-4 col-sm-4" style="border-right: solid gray">
  <h4>Filter Your Choices:</h4>
    <ul class="list-group">
      <li class="list-group-item"><h4 style="text-decoration: underline">Subjects</h4>
        <form role="form" id="subs" name="subchoice">
            <div class="checkbox">
                <input type="checkbox" name="math">Mathematics
            </div>
            <div class="checkbox">
                <input type="checkbox" name="eng">English
            </div>  
            <div class="checkbox">
                <input type="checkbox" name="csc">Computer Science
            </div>    
            <div class="checkbox">
                <input type="checkbox" name="ip">Information Practices
            </div>  
            <div class="checkbox">
                <input type="checkbox" name="hindi">Hindi
            </div>
                <label>Science</label>
                <div id="sc" >
                <div class="checkbox">
                  <input type="checkbox" name="chem">Chemistry
              </div>
              <div class="checkbox">
                  <input type="checkbox" name="physics">Physics
              </div>
              <div class="checkbox">
                  <input type="checkbox" name="bio">Biology
              </div>
              </div><br>
              <label>Social Science</label>
                <div id="ssc" >
                <div class="checkbox">
                  <input type="checkbox" name="history">History
              </div>
              <div class="checkbox">
                  <input type="checkbox" name="civics">Civics(Pol. Sc.)
              </div>
              <div class="checkbox">
                  <input type="checkbox" name="geo">Geography
              </div>
              </div>
              <label>Commerce</label>
              <div id="comm">
                <div class="checkbox">
                  <input type="checkbox" name="acc">Accountancy
              </div>
              <div class="checkbox">
                  <input type="checkbox" name="eco">Economics
              </div>
              <div class="checkbox">
                  <input type="checkbox" name="bst">Business Studies
              </div>
              </div>
          </form></li>
      <li class="list-group-item dropdown"><h4 style="text-decoration: underline">Classes</h4>
        
      <select>
        <option value="12" name="12"> Class 12</option>
        <option value="11" name="11"> Class 11</option>
        <option value="10" name="10"> Class 10</option>
        <option value="9" name="9"> Class 9</option>
        <option value="8" name="8"> Class 8</option>
        <option value="7" name="7"> Class 7</option>
        <option value="6" name="6"> Class 6</option>
        <option value="5" name="5"> Class 5</option>
      </select>

      </li>
      <li class="list-group-item"><h4 style="text-decoration: underline">Location</h4>
        <form role="form" id="loc" >
            <div class="checkbox">
                <input type="checkbox">East Delhi
            </div>
            <div class="checkbox">
                <input type="checkbox">West Delhi
            </div>  
            <div class="checkbox">
                <input type="checkbox">North Delhi
            </div>    
            <div class="checkbox">
                <input type="checkbox">South Delhi
            </form>     
      </li>
      <li class="list-group-item"><h4 style="text-decoration: underline">Board</h4>>
        <form role="form" id="brd" >
            <div class="checkbox">
                <input type="checkbox" name="cbse">CBSE
            </div>
            <div class="checkbox">
                <input type="checkbox" name="icse">ICSE
            </div>
            <div class="checkbox">
                <input type="checkbox" name="">B3
            </div>
            <div class="checkbox">
                <input type="checkbox" name="">B4
            </div>
            </form> 
        </li>       
    </ul> 
    <button type="button" class="btn btn-info">Apply Filter</button>
  </div>

  <div>
  <div class="col-md-6 col-md-offset-1 col-xs-6" style=" padding-top: 50px" >
    <div class="media" style="box-shadow: 10px 10px 5px #888888;">
      <a class="pull-left" href="#"><img class="media-object" src="/mtutor/ui/sherlock1.jpg" style="height: 150px;width: 100px"></a>
      <div class="media-body">
        <h4 class="media-heading">Sherlock Holmes</h4>
        <p>Lorem ipsum dolor sit amet, consectetur ...</p>
        <button type="button" class="btn btn-default" style="float: right; margin-right: 10px">Details</button>
      </div>
    </div>    
  </div>
  <div class="col-md-6 col-md-offset-1 col-xs-6" style=" padding-top: 50px" >
    <div class="media" style="box-shadow: 10px 10px 5px #888888;">
      <a class="pull-left" href="#"><img class="media-object" src="/mtutor/ui/sherlock1.jpg" style="height: 150px;width: 100px"></a>
      <div class="media-body">
        <h4 class="media-heading">Sherlock Holmes</h4>
        <p>Lorem ipsum dolor sit amet, consectetur ...</p>
        <button type="button" class="btn btn-default" style="float: right; margin-right: 10px">Details</button>
      </div>
    </div>    
  </div>
  <div class="col-md-6 col-md-offset-1 col-xs-6" style=" padding-top: 50px" >
    <div class="media" style="box-shadow: 10px 10px 5px #888888;">
      <a class="pull-left" href="#"><img class="media-object" src="/mtutor/ui/sherlock1.jpg" style="height: 150px;width: 100px"></a>
      <div class="media-body">
        <h4 class="media-heading">Sherlock Holmes</h4>
        <p>Lorem ipsum dolor sit amet, consectetur ...</p>
        <button type="button" class="btn btn-default" style="float: right; margin-right: 10px">Details</button>
      </div>
    </div>    
  </div>
</div>

<div class="col-md-2 col-md-offset-1" style="border-left: 2px solid gray; height:300px">
</div>


  <div class="container" style="margin-bottom: 30px;">
    <div class="col-md-4 col-md-offset-3">
      <br><br><br><br>
      <ul class = "pagination">
        <li><a href="#"> &lt;&lt; </a></li>
        <li><a href="#"> &lt; </a></li>
        <li><a href="#"> 1 </a></li>
        <li><a href="#"> 2 </a></li>
        <li><a href="#"> 3 </a></li>
        <li><a href="#"> &gt; </a></li>
        <li><a href="#"> &gt;&gt; </a></li>
      </ul>
    </div>
  </div>

</body>

PAGEDOC;
    echo $showpage;
      $footer = new BFooter();
      $footer->display();
  }

}

  $obj = new searchres();
  $obj -> display();

?>