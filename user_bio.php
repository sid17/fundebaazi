<?php
require("include/connect.php");
?>
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
    }, 3000); // <-- time in milliseconds  
}
</script>
<?php
if (isset($_GET['query']))
{
    if ($_GET['query']==1)
        echo"<script>display_message('Request posted , we will connect to you in few days');</script>";
   else
     echo"<script>display_message('Request failed , please try again later');</script>";
}
?>

<!DOCTYPE html>
<script src="js/jquery-1.10.2.js"></script>
 <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
<style type="text/css">

.imageClip{
    width:55%;
    height: 10%;
    overflow:hidden;
}
</style>

<style>
.input-group-addon.primary {
    color: rgb(255, 255, 255);
    background-color: rgb(50, 118, 177);
    border-color: rgb(40, 94, 142);
}
.input-group-addon.success {
    color: rgb(255, 255, 255);
    background-color: rgb(92, 184, 92);
    border-color: rgb(76, 174, 76);
}
.input-group-addon.info {
    color: rgb(255, 255, 255);
    background-color: rgb(57, 179, 215);
    border-color: rgb(38, 154, 188);
}
.input-group-addon.warning {
    color: rgb(255, 255, 255);
    background-color: rgb(240, 173, 78);
    border-color: rgb(238, 162, 54);
}
.input-group-addon.danger {
    color: rgb(255, 255, 255);
    background-color: rgb(217, 83, 79);
    border-color: rgb(212, 63, 58);
}
</style>
 
   



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

    <title>Fundebaazi:Real People,Real Advice</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/logo-nav.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
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
        <!-- col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6-->
        <div class="col-md-12">
         <div class="profile">
            <div class="col-sm-12">



<?php
    if (isset($_GET['id']))
    {
    
$str='select * from data_base where id='.$_GET['id'];
    $result=mysql_query($str,$connection);
    if (!$result)
        die("database query failed:".mysql_error());
    
while($row = mysql_fetch_array($result))     
    {

global $username;
$username=$row['name'];
if (($row['max_requests']-$row['curr_requests'])>0)
{
    $av="available";
    echo "<script> $(document).ready(function() { $('#book').removeAttr('disabled');document.getElementById('book_text').innerHTML='Book Time with Expert'; });</script>";


}
else
{
    $av="maximum requests reached .Not available";
    echo "<script> $(document).ready(function() { $('#book').attr('disabled','disabled');document.getElementById('book_text').innerHTML='Unavailable'; });</script>";
    
}
echo '<div class="col-xs-12 col-sm-8">';
echo '<h2>'.$row['name'].'</h2>';

echo '<p><strong>Availability: </strong> '.$av. '</p>';
echo '<p><strong>About: </strong>  </p>';
echo '<p>'.$row['bio'].'</p>';
                        
echo '</div> ' ;           
echo '<div class="col-xs-12 col-sm-4 text-center">';
echo '<figure>';
echo '<img style="margin-top:12%" src="images/'.$row['image'].'" alt="" class="img-circle img-responsive imageClip"><br>';
}
    
    
    
 
    
        
    }
    
?>



                                


                
        <div class="col-md-4 col-md-offset-0">
        <button id='book' class="btn btn-success btn-large" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="fa fa-plus-circle"></span> <span id="book_text">Book Consultation</span> </button>




<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id='modal'>
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="update_1">
     
<?php
                          




$x=$x. '<div class="modal-header">';
$x=$x.'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
$x=$x. '</div>';

$x=$x. '<div class="container" >';
$x=$x.'<div class="row">';
$x=$x.'<div class="col-sm-offset-2 col-sm-4">';


$x=$x.'<form action="submit_consult.php" method="post" enctype="multipart/form-data" id="requests_modal" >';
$x=$x.' <br><div class="form-group">';
$x=$x.'<label for="firstname">Name</label>';
$x=$x.'<div class="input-group">';
$x=$x.'<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Name" required>';
$x=$x.'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
$x=$x.'</div>';
$x=$x.'</div>';
//$x=$x.'<div class="form-group">';
//$x=$x. '<label for="lastname">Last Name</label>';
//$x=$x.'<div class="input-group">';
//$x=$x.   '<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Optional">';
//$x=$x.  '<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>';
//$x=$x. '</div>';
//$x=$x.'</div>';
$x=$x.'<div style="display:none" class="form-group">';
$x=$x. '<label for="id">Id</label>';
$x=$x.'<div class="input-group">';
$x=$x.   '<input type="text" class="form-control" name="id" id="id" value="'.$_GET['id'].'">';
$x=$x.  '<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>';
$x=$x. '</div>';
$x=$x.'</div>';


//$x=$x.'<div class="form-group">';
//$x=$x. '<label for="email">Email</label>';
//$x=$x.'<div class="input-group" data-validate="email">';
//$x=$x.'<input type="text" class="form-control" name="email" id="email" placeholder="Email" value="" disabled>';
//$x=$x.'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
//$x=$x.'</div>';
//$x=$x.'</div>';





$x=$x.'<div class="form-group">';
$x=$x. '<label for="email">Email</label>';
$x=$x.'<div class="input-group">';
$x=$x.'<input type="text" class="form-control" name="email" id="email" placeholder="Email" disabled="true">';
$x=$x.'<span class="input-group-addon success"><span class="glyphicon glyphicon-ok"></span></span>';
$x=$x.'</div>';
$x=$x.'</div>';


$x=$x.' <div class="form-group">';
$x=$x.'<label for="validate-phone">Phone Number (10 digits)</label>';
$x=$x.'  <div class="input-group" data-validate="phone">';
$x=$x.'<input type="text" class="form-control" name="phone" id="validate-phone" placeholder="9876543210" required>';
$x=$x.'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
$x=$x.'</div>';
$x=$x.'</div>';
$x=$x.'<div class="form-group">';
$x=$x.'<label for="validate-select">Select Service</label>';
$x=$x.'<div class="input-group">';
$x=$x.'<select class="form-control" name="select" id="select" placeholder="Validate Select" required>';
$x=$x.'<option value="">Select an item</option>';
$x=$x.'<option value="1">Resume Review</option>';
$x=$x.'<option value="2">Exam Preparation Guidance</option>';
$x=$x.'<option value="3">Career Conversation</option>';
$x=$x.'</select>';
$x=$x.'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
$x=$x.'</div>';
$x=$x.'</div>';


$x=$x.' <div class="form-group">';
$x=$x.'<label for="message">Message</label>';
$x=$x.'  <div class="input-group" >';
$x=$x.'<textarea class="form-control" rows="3" col="50" name="message" id="message"></textarea>';
$x=$x.'</div>';
$x=$x.'</div>';


$x=$x.'<div class="form-group">';
$x=$x.'<div class="input-group">';
$x=$x.'<label for="file">Select a file:(pdf,doc,docx,png,jpg,gif : upto 0.5MB)</label> <input class="btn btn-primary" type="file" name="userfile" id="file"> <br />';
$x=$x.'</div>';
 $x=$x.'</div>';
$x=$x.'<button type="submit" id="consult_form_submit" onclick="abra()" class="btn btn-primary col-xs-12" disabled>Submit</button>';
$x=$x.'<br>';
$x=$x.'<br><br>';
$x=$x.'</form>';




$x=$x.'<form  class="form-signin" role="form" id="signin_modal">';

$x=$x.'<br><br><br><input id="user" type="user" class="form-control" placeholder="Email address"  name required autofocus >';
$x=$x.'<input id="pass" type="password" class="form-control" placeholder="Password" required>';
$x=$x.'<button class="btn btn-lg btn-primary btn-block" type="button" id="try_s1">Sign in</button>';
$x=$x.'<a href="register.php">Not registered?</a><br>';
$x=$x.'<a href="forgot.php">Forgot Password?</a><br><br><br>';
$x=$x.'</form>';


$x=$x.'</div>';
$x=$x.'</div>';
echo $x;





if (isset($_SESSION['user_id']))
{
echo"<script>document.getElementById('signin_modal').style.display='none';document.getElementById('requests_modal').style.display='block';</script>";
}
else
{
echo"<script>document.getElementById('signin_modal').style.display='block';document.getElementById('requests_modal').style.display='none';</script>";
}

?>



    </div>
  </div>
</div>





















        </div>
            

                       
                    </figure>
                </div>
            </div>            
            
         </div>                 
        </div>
    </div>
<br><br>

<div class="row" id="user_review">
                <div class="col-lg-12">
                    <div class="col-md-7 col-md-offset-0">
              <div class="well">
                    <h4>Give a Review:</h4>
                    <form role="form" id="review_form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" id="my_review"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

</div>




<div class="row">
                <div class="col-lg-12">
                    <div class="col-md-10 col-md-offset-0">
                         <h4>Reviews</h4>
              <div class="well">
                   
                    <?php

$str='select review from verified_review where id='.$_GET['id'];
    $result=mysql_query($str,$connection);
    if ($result)
       {

while($row = mysql_fetch_array($result))     
    {
        echo "<p>".$row['review']."</p><hr>";
    }

       }
    


   mysql_close($connection);

                    ?>
                    
                </div>

</div>



            </div>
                </div>
            </div>


 <!-- JavaScript -->
    
   


<script>
    // Attach a submit handler to the form
    $( "#review_form" ).submit(function( event ) {
     
      // Stop form from submitting normally
      event.preventDefault();
     
      // Get some values from elements on the page:
      var $form = $( this ),
      review = $('#my_review').val();
      document.getElementById('my_review').value="";
    name=<?php echo '"'.$username.'";';?>
    id=<?php echo '"'.$_GET["id"].'";';?>
$.ajax
    ({
        type: "POST",
        url: "submit_review.php",
        data: { review:review,name:name,id:id }
    })
    .done(function(msg2) 
    {
    //alert(msg2);
    if (msg2==1)
    {
        //alert("Review successfully posted");
          display_message("Review successfully posted!");


    }
    else
    {
        //alert("Error posting the review");
        display_message("Error posting the review");
    
    }
    });
});
    </script>



<script>
    // Attach a submit handler to the form
    $( "#try_s1" ).click(function( event ) {
     
      // Stop form from submitting normally
      //event.preventDefault();
     
      // Get some values from elements on the page:
      var $form = $( this ),
        email = $('#user').val();
        $('#modal').modal('toggle');
        password=$('#pass').val(),
     //alert("hello");
      // Send the data using post
     //alert(email);
     //alert(password);
     //alert("hello");
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

        document.getElementById('email').value=document.getElementById('user').value;
        document.getElementById('logout').style.display='block';
        document.getElementById('user').value="";
         document.getElementById('pass').value="";


         document.getElementById('signin_modal').style.display='none';
         document.getElementById('requests_modal').style.display='block';

display_message("logged in successfully");

              


    }
    else
    {
        //alert("Error! Logging in , Incorrect username or password");
    display_message("Error! Logging in , Incorrect username or password");
    }
    });

    


    });


    </script>



    










    <script>

$(document).ready(function() {
    $('.input-group input[required], .input-group textarea[required], .input-group select[required]').on('keyup change', function() {
        var $form = $(this).closest('form'),
            $group = $(this).closest('.input-group'),
            $addon = $group.find('.input-group-addon'),
            $icon = $addon.find('span'),
            state = false;
            
        if (!$group.data('validate')) {
            state = $(this).val() ? true : false;
        }else if ($group.data('validate') == "email") {
           // state = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test("sam@gmail.com")
            state = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($(this).val())
        }else if($group.data('validate') == 'phone') {
            state = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/.test($(this).val())
        }else if ($group.data('validate') == "length") {
            state = $(this).val().length >= $group.data('length') ? true : false;
        }else if ($group.data('validate') == "number") {
            state = !isNaN(parseFloat($(this).val())) && isFinite($(this).val());
        }

        if (state) {
                $addon.removeClass('danger');
                $addon.addClass('success');
                $icon.attr('class', 'glyphicon glyphicon-ok');
        }else{
                $addon.removeClass('success');
                $addon.addClass('danger');
                $icon.attr('class', 'glyphicon glyphicon-remove');
        }
        
        if ($form.find('.input-group-addon.danger').length == 0) {
            $form.find('[type="submit"]').prop('disabled', false);
            //$('#consult_form_submit').prop('disabled', false);
        }else{
            $form.find('[type="submit"]').prop('disabled', true);
            //$('#consult_form_submit').prop('disabled', true);
        }
    });
    
    $('.input-group input[required], .input-group textarea[required], .input-group select[required]').trigger('change');
    
    
});

</script>

<?php

if (isset($_SESSION['user_id']))
{
echo '<script>document.getElementById("email").value="'.$_SESSION["user_id"].'"</script>';
}

?>

<script>
    function abra()
    {

    //alert(document.getElementById('email').value);
}
</script>



</body>

</html>
