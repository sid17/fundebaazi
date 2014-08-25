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

    <?php
require("include/navbar.php");
?>

    <!-- Page Content -->

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Services
                    <small>What We Do</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Services</li>
                </ol>
            </div>

        </div>
        <!-- /.row -->

        
        <!-- Service Tabs -->

        <div class="row">

            <div class="col-lg-12">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#service-one" data-toggle="tab">Resume Review</a>
                    </li>
                    <li><a href="#service-two" data-toggle="tab">Exam Preparation Guidance</a>
                    </li>
                    <li><a href="#service-three" data-toggle="tab">Career Conversation</a>
                    </li>
                    <li><a href="#service-four" data-toggle="tab">Service Four</a>
                    </li>
                    <li><a href="#service-five" data-toggle="tab">Service Five</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="service-one">
                        <img class="img-responsive" src="images/resume_review.jpg">
                        <h3>Resume Review</h3>
                        <p>Resume Review means blah blah blah blah....</p>
                        <p>Resume Review means blah blah blah blah.....</p>
                       
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <img class="img-responsive" src="images/exam_preparation.jpg">
                        <h3>Exam Preparation Guidance</h3>
                        <p>Exam Preparation Guidance means Nam fringilla quis enim in eleifend. .....</p>
                        <p>xyz</p>
                    </div>
                    <div class="tab-pane fade" id="service-three">
                        <img class="img-responsive" src="images/career_conversation.jpg">
                        <h3>Career Conversation</h3>
                        <p>Career Conversation means ek do teen chaar panch.....</p>
                        <p>lo kar lo baat</p>
                    </div>
                    <div class="tab-pane fade" id="service-four">
                        <img class="img-responsive" src="http://placehold.it/1200x250">
                        <h3>Service Four</h3>
                        <p>Service Four means Service Four Service Four Service Four Service Four....</p>
                        <p>salaam namaste me priety kaafi hot thi</p>
                    </div>
                    <div class="tab-pane fade" id="service-five">
                         <img class="img-responsive" src="http://placehold.it/1200x250">
                        <h3>Service Five</h3>
                        <p>Service Five means Service Five Service Five Service Five Service Five....</p>
                        <p>lekin katrina is hot in everything.... ;) </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Service Paragraphs -->

        <div class="row">

            <div class="col-md-8">
                <h2 class="page-header">Why use Fundebaazi.com</h2>


<p>Fundeebazi offers you access to people who have been there done that. Suffice to say these guys know what they are talking about. What is more, they are offering their time at no cost or at very low cost to you. You ask why, I say why not!
                </p>
            </div>

            <div class="col-md-4">
                <h2 class="page-header">Explore further!</h2>
                <p>Do not take our word for it - search for the right advisors, reach out and see what happens!</p>
                <a class="btn btn-success btn-lg" href="advisors.php">Search for Advisors!</a>
            </div>

        </div>
        <!-- /.row -->

        <!-- /.row -->

        <!-- Service Images -->

       <!-- <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header">Service Images</h2>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="http://placehold.it/750x450">
                <h3>Resume Review</h3>
                <p>Resume Review means blah blah blah blah...</p>
                <a class="btn btn-link btn-sm pull-right">More <i class="fa fa-angle-right"></i></a>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="http://placehold.it/750x450">
                <h3>Exam Preparation Guidance</h3>
                <p>Exam Preparation Guidance means blah blah blah blah....</p>
                <a class="btn btn-link btn-sm pull-right">More <i class="fa fa-angle-right"></i></a>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive" src="http://placehold.it/750x450">
                <h3>Career Conversation</h3>
                <p>Career Conversation means alpha alpha alpha alpha....</p>
                <a class="btn btn-link btn-sm pull-right">More <i class="fa fa-angle-right"></i></a>
            </div>

        </div>-->
        <!-- /.row -->

    <!--</div>-->
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Fundebaazi.in</p>
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
