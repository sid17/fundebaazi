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
          <h1 class="page-header">Contact <small>We'd Love to Hear From You!</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Contact</li>
          </ol>
        </div>
        
        <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=26.5114,80.2349&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Let's Get In Touch!</h3>
          <p>We hope that you enjoyed browsing through the website. Let us know what you think! 
</p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>













            <form role="form" method="POST"  id ='contactForm' class="form-signin" >
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Name</label>
	                <input type="text" id="contact_name" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email Address</label>
	                <input type="email" id="contact_email" name="contact_email" class="form-control" id="input2" name required >
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Phone Number</label>
	                <input type="phone" id="contact_phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Message</label>
	                <textarea name="contact_message"  id="contact_message" class="form-control" rows="6" id="input4" required></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">Submit</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Fundebaazi.com</h3>
          <h4>Real People , Real Advice</h4>
          <p>
            Kanpur<br>
            Uttar Pradesh<br>
          </p>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: 7752894588/p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:siddhantmanocha1994@gmail.com">siddhantmanocha1994@gmail.com</a></p>
          
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
          </ul>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Fundebaazi.in</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- JavaScript -->
   


<script>
    // Attach a submit handler to the form
    $( "#contactForm" ).submit(function( event ) {
      
      event.preventDefault();
     
      
     


        var email = $('#contact_email').val();
        var name=$('#contact_name').val();
        var msg=$('#contact_message').val();
        var ph=$('#contact_phone').val();
     


$.ajax
    ({
        type: "POST",
        url: "contact_form_submission.php",
        data: { name:name,email:email,phone:ph,msg:msg }
    })
    .done(function(msg2) 
    {
    //alert(msg2);
    if (msg2==1)
    {
        //alert("we will connect with u in a few days");
         display_message("we will connect with u in a few days!");
        
         document.getElementById('contact_email').value='';
         document.getElementById('contact_name').value='';
         document.getElementById('contact_message').value='';
         document.getElementById('contact_phone').value='';
        

    }
    else
    {
      //alert(msg2);

        //alert("Error! could not post message");
        display_message("Error! could not post message!");
         document.getElementById('contact_email').value='';
         document.getElementById('contact_name').value='';
         document.getElementById('contact_message').value='';
         document.getElementById('contact_phone').value='';
    
    }
    });

    


    });
</script>

    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

  </body>
</html>
