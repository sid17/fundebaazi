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

    <title>Fundebaazi</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
<link href="css/dashboard.css" rel="stylesheet">
 <link href="css/logo-nav.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    

<?php
require("include/navbar.php");
?>



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
<h3>Real People. Real Advice</h3>

<p>

<p>Fundebaazi is web based solution which makes it easier for people to access career advice. Over the years, we have felt that it is often difficult to access ‘right’ advice which results in a lot of capable people not being able to avail the best opportunities. That is where we come in. We provide not only access but guarantee the quality of advice being offered here. Every ‘expert’ on this forum is whetted by the Fundebaazi team.

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
                <img class="img-responsive" src="images/thareja.jpg">
                <h3>Aditya Thareja
                    <small>Co-Founder</small>
                </h3>
                <p>Aditya studies business at Darden and brings a strong work experience from Exxon, ITC, SELCO and CAG. </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="https://www.facebook.com/aditya.thareja.9" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="https://www.linkedin.com/profile/view?id=32624486" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="https://plus.google.com/116432825102259429401/" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="images/dopa.jpg">
                <h3>Mayank Agrawal
                    <small>Co-Founder</small>
                </h3>
                <p>Mayank is pursuing MBA from Kellogg and has worked at McKinsey, ITC and with the Government(s) in India. </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="https://www.facebook.com/agmayank" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social linkedin-link"><a href="https://www.linkedin.com/profile/view?id=7811453" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social twitter-link"><a href="https://twitter.com/212agmayank" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="https://plus.google.com/u/0/101723589805428529959/" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="images/manocha.jpg">
                <h3>Siddhant Manocha
                    <small>CTO</small>
                </h3>
                <p>Siddhant is studying computer science from IIT Kanpur and he is the one who brings our ideas to life.</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="https://www.facebook.com/siddhant.manocha.5" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="https://plus.google.com/u/0/111970193561485113183/" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>

<!--
            <div class="col-sm-4">
                <img class="img-responsive" src="images/manocha.jpg">
                <h3>Siddhant Manocha
                    <small>CTO</small>
                </h3>
                <p>Siddhant is a pursuing a bachelors in computer science from IIT Kanpur and brings our ideas to life.</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li class="tooltip-social facebook-link"><a href="https://www.facebook.com/siddhant.manocha.5" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="tooltip-social google-plus-link"><a href="https://plus.google.com/u/0/111970193561485113183/" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
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
