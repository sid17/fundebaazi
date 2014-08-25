<?php
// step 1: find a session
session_start();
//step 2. unset all the session variables
$_SESSION=array();
//step3 . Destroy the session cookie
if (isset($_COOKIE[session_name()]))
{
setcookie(session_name(),'',time()-42000,'/');
//unset the cookie variables causing the cookie to last sometime back in the past
}
//step4 . destroy the session
session_destroy();

?>
<!DOCTYPE html>
 <script src="js/jquery-1.10.2.js"></script>
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


<div class="container">

<div class="row">
		<div class="col-md-4 col-md-offset-4">
 				<form  id="searchForm" class="form-signin" role="form">
                                <h4 class="form-signin-heading">Sign in</h4>
                                <input id='user' type="user" class="form-control" placeholder="Email address" name required autofocus>
                                <input id='pass' type="password" class="form-control" placeholder="Password" required>
                                
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                                
                                  </form>



<form  action="proceedclose.php" id="close" method="post" class="form-signin" role="form" style="display:none">
<button class="btn btn-lg btn-primary btn-block" type="submit">Click here to confirm completion of your query</button>
</form>

</div>
</div>

</div>

        <!-- /.container -->

    <!-- JavaScript -->
   


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

        checkvalidconversation(<?php echo $_SESSION['userid']; ?>);



    }
    else
    {

	document.getElementById('user').value="";
        document.getElementById('pass').value="";
        display_message("Error! Logging in , Incorrect username or password");
    
    }
    });

    


    });

function checkvalidconversation(name)
{

//alert(<?php echo $_GET['id']; ?> );
name=document.getElementById('user').value;
$.ajax
    ({
        type: "POST",
        url: "validconver.php",
        data: { username:name,id:<?php echo $_GET['id']; ?> }
    })
    .done(function(msg2) 
    {
//alert("message2");



	//alert("c1");
	if (msg2!=0)
{
	//alert(msg2);
    
   // document.getElementById('mailto').value=<?php echo $_GET['id']?>;
    //document.getElementById('mailto').value=$('#user').val();
    //document.getElementById('mailto_id').value=<?php echo $_GET['id']?>;
	document.getElementById('searchForm').style.display="none";
	document.getElementById('close').style.display="block";
        display_message("Successfully logged in!");
}

else
{
//alert("c2");
 display_message("U cannot participate in the given conversation!");
}




if (msg2!=0)
return msg2;
else
return 0;
    //alert(msg2);
    });

}










$( "#close" ).submit(function( event ) {
     
     
      event.preventDefault();
      var $form = $( this ),
      email = $('#user').val();
      id=<?php echo $_GET['id'];?>;
     
$.ajax
    ({
        type: "POST",
        url: "confirmclose.php",
        data: { username:email,id:id }
    })
    .done(function(msg2) 
    {
    //alert(msg2);
    if (msg2==1)
    {

   //alert(msg2);
   //document.write(msg2);
   //console.log(msg2);
      display_message("Closed Successfully"); 
      document.getElementById('searchForm').style.display="block";
    document.getElementById('close').style.display="none";
    }
    else
    {
//alert(msg2);
//console.log(msg2);
     display_message("Cannot close now , please try again later");
     document.getElementById('searchForm').style.display="block";
    document.getElementById('close').style.display="none";  
    
    }
    });

    


    });



















</script>

    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

</body>

</html>
