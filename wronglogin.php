
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example of Fixed Layout with Twitter Bootstrap version 2.0 from w3resource.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Example of Fixed Layout with Twitter Bootstrap version 2.0 from w3resource.com">
    <meta name="author" content="">

    <!-- Le styles -->
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
          <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">	<link href="twitter-bootstrap-v2/docs/assets/css/example-fixed-layout.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="twitter-bootstrap-v2/docs/examples/images/favicon.ico">
    <link rel="apple-touch-icon" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon-114x114.png">
  </head>

  <body>
<div style="color:red">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div style="height:70px" class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          
          <div class="nav-collapse">
            <ul style="margin-top:30px"class="nav">
              <li class="active"><a href="homepage.php"><span style="font-size:30px"><b>HOME</b></span></a></li>
              <li><a href="about.php"><span style="font-size:30px"><b>ABOUT</b></span></a></li>
              <li><a href="contact.php"><span style="font-size:30px"><b>CONTACT</b></span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	</div>


    
    <div class="container" style="margin-top:200px;">
<form action="confirmlogin.php" method="POST" class="form-horizontal">
  <?php
  if(isset($_GET['logout'])&& $_GET['logout']==1)
  {
    global $chlogout;
    $chlogout=1;
    echo ("<h3 style=\"margin-left:150px;\">you are logged out</h3>");
  }
  ?>
  <div class="control-group">
    <label class="control-label" for="username"><b>username</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text" id="username" name="username"  placeholder="Username">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label " for="inputPassword"><b>Password</b></label>
    <div class="controls">
      <input type="password"  name="password" class="input-xlarge btn-large" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <?php
  if(!(isset($chlogout)&& $chlogout==1))
  {
  echo("<p style=\"color:red ;margin-left:180px\" > either the username or password was incorrect</p>");
  }
  ?>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Remember me
      </label>
      <span><button type="submit" class="btn btn-large"><span style="margin-left:25px;margin-right:25px">Log In</span></button><span class="pull-right" >Not Registered <a href="register.php" class="btn">Sign Up</a></span></span>
       
    </div>
  </div>
</form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="jquery/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="/js/jquery.js"></script>  
<script src="bootstrap/js/bootstrap-transition.js"></script>  
<script src="bootstrap/js/bootstrap-alert.js"></script>  
<script src="bootstrap/js/bootstrap-modal.js"></script>  
<script src="bootstrap/js/bootstrap-dropdown.js"></script>  
<script src="bootstrap/js/bootstrap-scrollspy.js"></script>  
<script src="bootstrap/js/bootstrap-tab.js"></script>  
<script src="bootstrap/js/bootstrap-tooltip.js"></script>  
<script src="bootstrap/js/bootstrap-popover.js"></script>  
<script src="bootstrap/js/bootstrap-button.js"></script>  
<script src="bootstrap/js/bootstrap-collapse.js"></script>  
<script src="bootstrap/js/bootstrap-carousel.js"></script>  
<script src="bootstrap/js/bootstrap-typeahead.js"></script>  


  </body>
</html>
