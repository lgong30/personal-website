<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Long Gong's Personal Page">
    <meta name="author" content="Long Gong">
    <meta name="keywords" content="Long Gong, Long Gong GaTech, Long Gong's Personal Page, Jim Xu, Zuqing Zhu">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Long Gong - CS PhD @GT </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    


    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <!-- <link href="assets/css/glyphicons.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bib-publication-list.css" rel="stylesheet"> -->

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Josefin+Slab" />

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>
    <script src="assets/js/jump.js"></script>
    
    <?php include_once("social_schema.php") ?>
    <?php include_once("analyticstracking.php") ?>

  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Home</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li><a id="about" href="javascript:void(0);" >About</a></li>
              <!-- <li><a id="proj" href="javascript:void(0);">Projects</a></li> -->
			        <!-- <li><a id="pub" href="javascript:void(0);" >Publication</a></li> -->
              <li><a id="google-pub" href="https://scholar.google.com/citations?user=qtAikfAAAAAJ&hl=en">Publications</a></li>
              <li><a id="github" href="https://github.com/lgong30">Github</a></li>
              <li><a id="blog" href="http://xlong88.github.io/posts/">Blog</a></li>
               <!-- <li><a id="reading" href="javascript:void(0);" >Reading</a></li> -->
			         <!-- <li><a id="about" href="javascript:void(0);" >About</a></li> -->
                <!-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Readings <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#/list">Home Appliance</a></li>
                        <li><a href="#/list">Daily Necessity</a></li>
                        <li><a href="#/list">Electrics</a></li>
                        <li><a href="#/list">Gifts & Toys</a></li>
                        <li><a href="#/list">Sports</a></li>
                        <li><a href="#/list">Fashion & Arts</a></li>
                        <li><a href="#/list">Auto & Accessories</a></li>
                        <li><a href="#/list">Others</a></li>
                        <li role="separator" class="divider"></li>
                        
                        <li><a href="#/list">Full Store Directory</a></li>
                        
                    </ul>
                </li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <!-- hidden form -->
    <div style="display: none;">
    <form id="proj-ctl" action="./" method="post">
       <input type="hidden" name="proj" value="project"/>
       <input type="submit">
    </form>
    <form id="pub-ctl" action="./" method="post">
       <input  type="hidden" name="pub" value="publication"/>
       <input type="submit">
    </form>
    <form id="reading-ctl" action="./" method="post">
       <input  type="hidden" name="reading" value="reading"/>
       <input type="submit">
    </form>
    <form id="about-ctl" action="./" method="post">
       <input type="hidden" name="about" value="about"/>
       <input type="submit">
    </form>
  </div>

	<!-- +++++ Welcome Section +++++ -->
	<?php 
if (!empty($_POST))
{
    // Array of post values for each different form on your page.
    $postNameArr = array('proj', 'pub', 'about', 'reading');        

    // Find all of the post identifiers within $_POST
    $postIdentifierArr = array();
        
    foreach ($postNameArr as $postName)
    {
        if (array_key_exists($postName, $_POST))
        {
             $postIdentifierArr[] = $postName;
        }
    }

    // Only one form should be submitted at a time so we should have one
    // post identifier.  The die statements here are pretty harsh you may consider
    // a warning rather than this. 
    if (count($postIdentifierArr) != 1)
    {
        count($postIdentifierArr) < 1 or
            die("\$_POST contained more than one post identifier: " .
               implode(" ", $postIdentifierArr));

        // We have not died yet so we must have less than one.
        die("\$_POST did not contain a known post identifier.");
    }
         
    switch ($postIdentifierArr[0])
    {
    case 'proj':
       //echo "Perform actual code for F1_Submit.";
       include 'project.php';
       break;

    case 'pub':
       //echo "Perform actual code for F2_Submit.";
       include 'publication.php';
       break;
 
    case 'reading':
       //echo "Perform actual code for F2_Submit.";
       include 'reading.php';
       break;

    case 'about':
       //echo "Perform actual code for F3_Submit.";
       include 'about.php';
       break;
    }
	}
	else // $_POST is empty.
	{
	    //echo "Perform code for page without POST data. ";
	    include 'home.php';
	}
	?>
	
	

	
	
	<!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>My Address</h4>
					<p>
						Klaus Advanced Computing Building (KACB)<br/>
						266 Ferst Dr, Atlanta<br/>
						GA 30332, United States<br/>
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>My Links</h4>
					<p>
						<a href="http://xlong88.github.io/posts/">Blog</a><br/>
						<a href="https://github.com/logng30">Github</a><br/>
            <a href="https://scholar.google.com/citations?user=qtAikfAAAAAJ&hl=en">Google Scholar Profile</a><br/>
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>About This Template</h4>
					<p>This cute theme was modified from <a href="http://blacktie.co/2014/01/stanley-freelancer-theme/">stanley-freelancer-theme</a>.</p>
				</div><!-- /col-lg-4 -->
			
			</div>
		
		</div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <?php
    if(!empty($_POST) && (array_key_exists('pub',$_POST)))
    {
      include 'pub_inc_foot.php';
    } 
    if (!empty($_POST) && (array_key_exists('reading',$_POST)))
    {
      include 'read_inc_foot.php'; 
    }
    ?>
  </body>
</html>
