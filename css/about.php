<!DOCTYPE html>
 <script src="js/jquery-1.10.2.js"></script>



<?php
require("include/fb.php");
?>


<style>
.messageBox {  
width:250px;  
padding:10px;  
border:1px solid #666; 
background-color: white;
color:black; 
position:fixed; rightright:2%;  
top:2%;  
z-index:100000;  
-webkit-border-radius: 6px; -moz-border-radius: 6px;}  
</style>

<div class="messageBox" id='msg_1' style="position:fixed;left:40%;top:5%;display:none;">Here we say something very important!</div>  
 <script>  
 function display_message(my_message)
{
    document.getElementById('msg_1').innerHTML=my_message;
    $('#msg_1').show();
    setTimeout(function() {  
    $('.messageBox').fadeOut('fast');  
    }, 1000); // <-- time in milliseconds  
}
</script>

<?php
session_start();
if (isset($_SESSION['user_id']))
    echo("<script> $(document).ready(function() { document.getElementById('logout').style.display='block';});</script>");
       
       
else
     echo("<script> $(document).ready(function() { document.getElementById('logout').style.display='none';});</script>");
?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fundebaazi:Real People , Real Advice</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
<link href="css/dashboard.css" rel="stylesheet">
 <link href="css/logo-nav.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.jpg" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                     <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Forum</a>
                    </li>

<li>
                     <a href="#" style='display:none' id='logout'><button onclick='logout()' class="btn btn-default">Logged In ! Logout?</button></a>
                 </li>
                    <script>
                    function logout()
                        {

                    $.ajax
                        ({
                            type: "POST",
                            url: "logout.php",
                            data: {}
                        })
                        .done(function(msg2) 
                        {
                        //alert(msg2);
                        if (msg2==1)
                        {
                            document.getElementById('logout').style.display='none';
                            display_message("logged out!");
                            //alert('logged out');
                        }
                        });



                        }

                    </script>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">About
                    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <img class="img-responsive" src="images/about.jpg">
            </div>
            <div class="col-md-6">
                <h2>Welcome to Fundebaazi.com</h2>
<p>
<h3>Real People. Real Advice. </h3>



<p>Fundebaazi is web based solution which makes it easier for people to access career advice. Over the years, we have felt that it is often difficult to access ‘right’ advice which results in a lot of capable people not being able to avail the best opportunities.  I am sure you have encountered situations when your personal network is unable to reach out to someone in your dream company or dream school. Or maybe, you want another opinion. That is where we come in. We provide not only access but guarantee the quality of advice being offered here. Every ‘expert’ on this forum is whetted by the Fundebaazi team.

When it is complete, Fundebaazi will facilitate access to the right advice no matter which career you are contemplating. But as everything has to begin somewhere, we are currently focusing on opportunities available to engineers. 

Fundebaazi was founded in IIT Kanpur in 2014 with a group of enthusiastic people who not only wish but want to make this world more meritocratic and less about connections. </p>

                </div>

        </div>

        <!-- Team Member Profiles -->

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="http://placehold.it/750x450">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member do? Keep it short! This is also a great spot for social links!</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="#linkedin-profile" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="#google-plus-profile" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="http://placehold.it/750x450">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member do? Keep it short! This is also a great spot for social links!</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="#linkedin-profile" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="#google-plus-profile" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="http://placehold.it/750x450">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member do? Keep it short! This is also a great spot for social links!</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="#linkedin-profile" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="#google-plus-profile" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
<!--
            <div class="col-sm-4">
                <img class="img-responsive" src="http://placehold.it/750x450">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member do? Keep it short! This is also a great spot for social links!</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="#linkedin-profile" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="#google-plus-profile" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="http://placehold.it/750x450">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member do? Keep it short! This is also a great spot for social links!</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="#linkedin-profile" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="#google-plus-profile" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="http://placehold.it/750x450">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
                <p>What does this team member do? Keep it short! This is also a great spot for social links!</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="#linkedin-profile" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="#google-plus-profile" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

        </div>-->

        <!-- Our Customers -->

       <!-- <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header">Our Customers</h2>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive img-customer" src="http://placehold.it/500x300">
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive img-customer" src="http://placehold.it/500x300">
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive img-customer" src="http://placehold.it/500x300">
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive img-customer" src="http://placehold.it/500x300">
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive img-customer" src="http://placehold.it/500x300">
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive img-customer" src="http://placehold.it/500x300">
            </div>

        </div>

    </div>-->
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Fundebaazi,in</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
   
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

</body>

</html>
