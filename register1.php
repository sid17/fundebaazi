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
  <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="leaderboard">
        <h1 ><span style="color:rgb(100,100,100);font-family:sans-serif">SIGN UP TO MY IMPRESS</span></h1>
        
      </div>
    </div>


    <div class="container" style="margin-top:10px;">
      <form action="registerprocess.php" method="POST" class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="firstname"><b>Firstname</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text" name="firstname" id="firstname" placeholder="First Name">
	<?php
	if(isset($_GET['efirst']))
{
  if($_GET['efirst']==1)
  {
   echo("<span style='color:red' >field cant be blank</span>"); 
  }
  else if($_GET['efirst']==2)
  {
    echo("<span style='color:red' >only alphabets allowed</span>");
  }
}
	?>
    </div>
  </div><form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="last name"><b>Lastname</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text" name="lastname" id="lastname" placeholder="Last Name">
	<?php
	if(isset($_GET['elast']))
{
  if($_GET['elast']==1)
  {
    echo("<span style='color:red' >field cant be blank</span>");
  }
  else if($_GET['elast']==2)
  {
    echo("<span style='color:red' >Only alphabets allowed</span>");
  }
}
	?>
    </div>
  </div>

<form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="username"><b>username</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text" name="username" id="username" placeholder="Username">
	<?php
	if(isset($_GET['euser']))
{
  if($_GET['euser']==1)
  {
    echo("<span style='color:red' >field cant be blank</span>");
  }
  else if($_GET['euser']==2)
  {
    echo("<span style='color:red' >only alphabets numbers and underscore allowed</span>");
  }
  else if ($_GET['euser']==3)
  {
    echo("<span style='color:red' >username exists . choose a different name</span>");
  }
}
	?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail"><b>email</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text"  name="email" id="inputEmail" placeholder="Email">
	<?php
	if(isset($_GET['eemail']))
{
  if($_GET['eemail']==1)
  {
    echo("<span style='color:red' >field cant be blank</span>");
  }
  else if($_GET['eemail']==2)
  {
    echo("<span style='color:red' >enter a valid email</span>");
  }
}
	?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label " for="inputPassword"><b>Password</b></label>
    <div class="controls">
      <input type="password" class="input-xlarge btn-large" name="password" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label " for="inputcPassword"><b>confirm password</b></label>
    <div class="controls">
      <input type="password" class="input-xlarge btn-large" name="cpassword" id="inputcPassword" placeholder="confirmPassword">
    <?php
	if(isset($_GET['epass']))
{
  if($_GET['epass']==1)
  {
   echo("<span style='color:red' >Passwords dont match </span>") ;
  }
  
}
?>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox" name="check">I agree the terms of use<br>
	<?php
	if(isset($_GET['echeck']))
{
  if($_GET['echeck']==1)
  {
   echo("<span style='color:red' >Accept the terms and conditions</span>") ;
  }
  
}
	?>
      </label>
      <button type="submit" class="btn btn-large">Sign in</button>
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
