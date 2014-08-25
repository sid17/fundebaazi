<!DOCTYPE html>

<script src="http://code.jquery.com/jquery-latest.js"></script>  

<?php
require("include/fb.php");
?>


<style>
.messageBox {  
width:20px;  
padding:15px;  
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






 <script src="js/jquery-1.10.2.js"></script>
<?php
if (isset($_GET['register']))
{
    if ($_GET['register']==1)
        echo"<script>display_message('successfully registered');</script>";
    else
        echo"<script>display_message('registration cannot be completed at the moment');</script>";
}
?>

<?php
session_start();
if (isset($_SESSION['user_id']))
    echo("<script> $(document).ready(function() { document.getElementById('logout').style.display='block';});</script>");
       
       
else
     echo("<script> $(document).ready(function() { document.getElementById('logout').style.display='none';});</script>");
?>

<html lang="en">
<!-- images 1900X 1080 -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fundebaazi</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
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
                     <a href="#" style='display:none'  id='logout'><button onclick='logout()' class="btn btn-default">You are now logged in !</button></a>
                 </li>
                </ul>
            </div>
            
            <!-- /.navbar-collapse -->
        </div>
    </nav>


<div class="carousel-caption">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-md-offset-10">
                                 <form  action="#" id="searchForm" class="form-signin" role="form">
                                <h4 class="form-signin-heading">Sign in</h4>
                                <input id='user' type="user" class="form-control" placeholder="Email address" name required autofocus>
                                <input id='pass' type="password" class="form-control" placeholder="Password" required>
                                
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                                <a href="register.php">Not registered?</a>
                              </form>
                            </div>
                        </div>
                </div>

    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/l1.jpg');"></div>
                
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/l2.jpg');"></div>
                
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/l3.jpg');"></div>
                
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/l4.jpg');"></div>
                
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/l5.jpg');"></div>
                
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>

<div class="text-center" style="margin-top:3%">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-4 col-md-offset-4">
                <a type="button" class="btn btn-primary btn-lg btn-block" href='advisors.php' style="padding:5px"> <h2><b> List of Experts </b></h2> </a>
            </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

 

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-4">



                     

                    <h3><a href="about.php" style="text-decoration:none;color:black"> What brought us here!</a></h3>
                    <p>
We believe in the empowering effect of a right advice given at a right time.  All too often dreams are forgotten just because of lack of access to the right people. We hope to change that forever.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><a href="services.php" style="text-decoration:none;color:black">Services offered</a></h3>
                    <p>
Fundebaazi is web based solution which makes it easier for people to access career advice. Our value proposition is simple -- Real people. Real advice.  </p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><a href="blog.php" style="text-decoration:none;color:black">Go to our blog! </a></h3>
                    <p>
Have a look at what our advisors have to say!</p>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

   
   

    <div >

        <div class="container">







<div class="row">
    <div class="col-md-6">





 <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img class="img-responsive" src="images/seo3.jpg">
                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">
                    <h3>Search for Experts</h3>
                    <ul>
                        <li>Browse through our list and check out who matches your profile or like we say connect to someone who has been there and done that!</li>
                        <li>Search based on Function, Industry and Academic background </li>
                       
                    </ul>
                </div>
                
            </div>




<div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img class="img-responsive" src="images/seo3.jpg">
                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">
                    <h3>Select the Expert</h3>
                    <ul>
                        <li>Select the expert whom you would like to connect with based on profile</li>
                        <li>Checkout the services offered  and availability</li>
                       
                    </ul>
                </div>
                
            </div>




            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">
                    <img class="img-responsive" src="images/seo3.jpg">
                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">
                    <h3>Connect with the Expert</h3>
                    <ul>
                        <li>Select the services which you wish to avail</li>
                        <li>We promise we will get back to you within 48hrs </li>
                       
                    </ul>
                </div>
                
            </div>

            

            <!-- /.row -->





    </div>
    <div class="col-md-6">


       <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-md-offset-4" style="background-color:#3399FF;padding:30px;text-align:center;border-radius:10px;color:white" >
                    
                    Sign in and browse through the lists of experts available
                    
                </div>
                
            </div>


            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-md-offset-6" style="padding:30px;text-align:center;border-left:thick solid #000000;" >
                    
                </div>
                
            </div>



             <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-md-offset-4" style="background-color:#3399FF;padding:30px;text-align:center;border-radius:10px;color:white" >
                    
                    Select the expert you want to reach out to
                    
                </div>
                
            </div>


             <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-md-offset-6" style="padding:30px;text-align:center;border-left:thick solid #000000;" >
                    
                   
                    
                </div>
                
            </div>


             <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-md-offset-4" style="background-color:#3399FF;padding:30px;text-align:center;border-radius:10px;color:white" >
                    
                    We reach out to you within 24 hours with the response from the advisors
                    
                </div>
                
            </div>




    </div>












           
        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

    

        <div class="container">

     

            <!-- /.row -->

        </div>
        <!-- /.container -->

    
    <!-- /.section -->

   

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

    <script>
    // Attach a submit handler to the form
    $( "#searchForm" ).submit(function( event ) {
     
      // Stop form from submitting normally
      event.preventDefault();
     
      // Get some values from elements on the page:
      var $form = $( this ),
        email = $('#user').val();
        
        password=$('#pass').val(),
     //alert("hello");
      // Send the data using post
     //alert(email);
     //alert(password);
$.ajax
    ({
        type: "POST",
        url: "confirmlogin.php",
        data: { username:email,password:password }
    })
    .done(function(msg2) 
    {
    //alert(msg2);
    if (msg2==1)
    {

        document.getElementById('logout').style.display='block';
        document.getElementById('user').value="";
         document.getElementById('pass').value="";
         display_message("Successfully logged in!");

    }
    else
    {
        display_message("Error! Logging in , Incorrect username or password");
    
    }
    });

    


    });


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
        display_message('logged out');
    }
    });



    }
    </script>

</body>

</html>