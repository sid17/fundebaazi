<?php
require("include/connect.php");
?>
<!DOCTYPE html>
<script src="js/jquery-1.10.2.js"></script>
 <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>



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

    <title>Modern Business - Start Bootstrap Template</title>

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
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.jpg" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="blog-post.html">Blog</a>
                    </li>
                    <li>
                        <a href="#">Forum</a>
                    </li>

<li>
                     <a href="#" style='display:none' id='logout'><button onclick='logout()'>Logged In ! Logout?</button></a>
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
                         
                var x='';
                x=x+ '<div class="modal-header">';
                x=x+'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
                x=x+ '<h4 class="modal-title">Not signed in! Sign in now!</h4>';
                x=x+ '</div>';
                x=x+ '<div class="container">';
                x=x+'<div class="row">';
                x=x+'<div class="col-sm-offset-2 col-sm-4">';
                x=x+ '<br>';
                x=x+  '<br><br>';
                x=x+' <h2> Sign in Now!</h2>';
                x=x+'<form  id="signin_form" class="form-signin" role="form">';
                x=x+'<input id="user" type="user" class="form-control" placeholder="Username" name required autofocus>';
                x=x+'<input id="pass" type="password" class="form-control" placeholder="Password" required>';
                x=x+'<button class="btn btn-lg btn-primary btn-block" type="button" id="try_s1">Sign in</button>';
                x=x+'<a href="register.php">Not registered?</a>';
                x=x+'</form>';
                x=x+'</div>';
                x=x+'</div><br><br><br><br><br><br>';
                document.getElementById('update_1').innerHTML= x;
                







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
     alert("hello");
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


                var x='';
                
x=x+ '<div class="modal-header">';
x=x+'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
x=x+ '<h2 class="modal-title">Book A Consultation </h2>';
x=x+ '</div>';
x=x+ '<div class="container">';
x=x+'<div class="row">';
x=x+'<div class="col-sm-offset-2 col-sm-4">';


x=x+'<form method="post" enctype="multipart/form-data">';




x=x+' <div class="form-group">';
x=x+'<label for="firstname">Firstname</label>';
x=x+'<div class="input-group">';
x=x+'<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname" required>';
x=x+'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
x=x+'</div>';
x=x+'</div>';

x=x+'<div class="form-group">';
x=x+ '<label for="lastname">Last Name</label>';
x=x+'<div class="input-group">';
x=x+   '<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Optional">';
x=x+  '<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>';
x=x+ '</div>';
x=x+'</div>';


x=x+'<div class="form-group">';
x=x+ '<label for="email">Email</label>';
x=x+'<div class="input-group" data-validate="email">';
x=x+'<input type="text" class="form-control" name="email" id="email" placeholder="Email" required>';
x=x+'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
x=x+'</div>';
x=x+'</div>';


x=x+' <div class="form-group">';
x=x+'<label for="validate-phone">Validate Phone</label>';
x=x+'  <div class="input-group" data-validate="phone">';
x=x+'<input type="text" class="form-control" name="validate-phone" id="validate-phone" placeholder="(814) 555-1234" required>';
x=x+'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
x=x+'</div>';
x=x+'</div>';


x=x+'<div class="form-group">';
x=x+'<label for="validate-select">Validate Select</label>';
x=x+'<div class="input-group">';
x=x+'<select class="form-control" name="validate-select" id="validate-select" placeholder="Validate Select" required>';
x=x+'<option value="">Select an item</option>';
x=x+'<option value="item_1">Item 1</option>';
x=x+'<option value="item_2">Item 2</option>';
x=x+'<option value="item_3">Item 3</option>';
x=x+'</select>';
x=x+'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
x=x+'</div>';
x=x+'</div>';
x=x+'<div class="form-group">';
x=x+'<div class="input-group">';
x=x+'<label for="file">Select a file:</label> <input type="file" name="userfile" id="file"> <br />';
x=x+'</div>';
 x=x+'</div>';


x=x+'<button type="submit" class="btn btn-primary col-xs-12" disabled>Submit</button>';
x=x+'<br>';
x=x+'<br><br>';
x=x+'</form>';
x=x+'</div>';
x=x+'</div>';
                document.getElementById('update_1').innerHTML= x;
                
                            alert('logged in');



$('.input-group input[required], .input-group textarea[required], .input-group select[required]').on('keyup change', function() {
        var $form = $(this).closest('form'),
            $group = $(this).closest('.input-group'),
            $addon = $group.find('.input-group-addon'),
            $icon = $addon.find('span'),
            state = false;
            
        if (!$group.data('validate')) {
            state = $(this).val() ? true : false;
        }else if ($group.data('validate') == "email") {
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
    
    



    }
    else
    {
        alert("Error! Logging in , Incorrect username or password");
    
    }
    });

    


    });


































                            alert('logged out');
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
    echo "<script> $(document).ready(function() { $('#book').removeAttr('disabled');document.getElementById('book_text').innerHTML='Book Consultation'; });</script>";


}
else
{
    $av="maximum requests reached .Not available";
    echo "<script> $(document).ready(function() { $('#book').attr('disabled','disabled');document.getElementById('book_text').innerHTML='Unavailable'; });</script>";
    
}
echo '<div class="col-xs-12 col-sm-8">';
echo '<h2>'.$row['name'].'</h2>';
echo '<p><strong>About: </strong>  </p>';
echo '<p><strong>Availability: </strong> '.$av. '</p>';
echo '<p><strong>Skills: </strong>';
echo '<p>'.$row['bio'].'</p>';
                        
echo '</div> ' ;           
echo '<div class="col-xs-12 col-sm-4 text-center">';
echo '<figure>';
echo '<img src="images/'.$row['image'].'" alt="" class="img-circle img-responsive"><br>';
}
    
    
    
 
    
        
    }
    
?>



                                


                
        <div class="col-md-4 col-md-offset-1">
        <button id='book' class="btn btn-success btn-large" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="fa fa-plus-circle"></span> <span id="book_text">Book Consultation</span> </button>




<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id='modal'>
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="update_1">
     
<?php
                          


if (isset($_SESSION['user_id']))
{
$x='';
$x=$x. '<div class="modal-header">';
$x=$x.'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
$x=$x. '<h2 class="modal-title">Book A Consultation </h2>';
$x=$x. '</div>';
$x=$x. '<div class="container">';
$x=$x.'<div class="row">';
$x=$x.'<div class="col-sm-offset-2 col-sm-4">';


$x=$x.'<form action="submit_consult.php" id="consult_form" method="post" enctype="multipart/form-data">';




$x=$x.' <div class="form-group">';
$x=$x.'<label for="firstname">Firstname</label>';
$x=$x.'<div class="input-group">';
$x=$x.'<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname" required>';
$x=$x.'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
$x=$x.'</div>';
$x=$x.'</div>';

$x=$x.'<div class="form-group">';
$x=$x. '<label for="lastname">Last Name</label>';
$x=$x.'<div class="input-group">';
$x=$x.   '<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Optional">';
$x=$x.  '<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>';
$x=$x. '</div>';
$x=$x.'</div>';

$x=$x.'<div style="display:none" class="form-group">';
$x=$x. '<label for="id">Id</label>';
$x=$x.'<div class="input-group">';
$x=$x.   '<input type="text" class="form-control" name="id" id="id" value="'.$_GET['id'].'">';
$x=$x.  '<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>';
$x=$x. '</div>';
$x=$x.'</div>';


$x=$x.'<div class="form-group">';
$x=$x. '<label for="email">Email</label>';
$x=$x.'<div class="input-group" data-validate="email">';
$x=$x.'<input type="text" class="form-control" name="email" id="email" placeholder="Email" required>';
$x=$x.'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
$x=$x.'</div>';
$x=$x.'</div>';


$x=$x.' <div class="form-group">';
$x=$x.'<label for="validate-phone">Validate Phone</label>';
$x=$x.'  <div class="input-group" data-validate="phone">';
$x=$x.'<input type="text" class="form-control" name="phone" id="validate-phone" placeholder="(814) 555-1234" required>';
$x=$x.'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
$x=$x.'</div>';
$x=$x.'</div>';


$x=$x.'<div class="form-group">';
$x=$x.'<label for="validate-select">Validate Select</label>';
$x=$x.'<div class="input-group">';
$x=$x.'<select class="form-control" name="select" id="select" placeholder="Validate Select" required>';
$x=$x.'<option value="">Select an item</option>';
$x=$x.'<option value="1">Item 1</option>';
$x=$x.'<option value="2">Item 2</option>';
$x=$x.'<option value="3">Item 3</option>';
$x=$x.'</select>';
$x=$x.'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
$x=$x.'</div>';
$x=$x.'</div>';
$x=$x.'<div class="form-group">';
$x=$x.'<div class="input-group">';
$x=$x.'<label for="file">Select a file:</label> <input class="btn btn-primary" type="file" name="userfile" id="file"> <br />';
$x=$x.'</div>';
 $x=$x.'</div>';


$x=$x.'<button type="submit" id="consult_form_submit" class="btn btn-primary col-xs-12" disabled>Submit</button>';
$x=$x.'<br>';
$x=$x.'<br><br>';
$x=$x.'</form>';
$x=$x.'</div>';
$x=$x.'</div>';
echo $x;
}
else
{
$x='';
$x=$x. '<div class="modal-header">';
$x=$x.'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
$x=$x. '<h4 class="modal-title">Not signed in! Sign in now!</h4>';
$x=$x. '</div>';
$x=$x. '<div class="container">';
$x=$x.'<div class="row">';
$x=$x.'<div class="col-sm-offset-2 col-sm-4">';
$x=$x. '<br>';
$x=$x.  '<br><br>';
$x=$x.' <h2> Sign in Now!</h2>';


 
                                
$x=$x.'<form  id="signin_form" class="form-signin" role="form">';
$x=$x.'<input id="user" type="user" class="form-control" placeholder="Username" name required autofocus>';
$x=$x.'<input id="pass" type="password" class="form-control" placeholder="Password" required>';
$x=$x.'<button class="btn btn-lg btn-primary btn-block" type="button" id="try_s1">Sign in</button>';
$x=$x.'<a href="register.php">Not registered?</a>';
$x=$x.'</form>';
$x=$x.'</div>';
$x=$x.'</div><br><br><br><br><br><br>';
echo $x;
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

<div class="row">
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
        alert("Review successfully posted");


    }
    else
    {
        alert("Error posting the review");
    
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
     alert("hello");
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


                var x='';
                
x=x+ '<div class="modal-header">';
x=x+'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
x=x+ '<h2 class="modal-title">Book A Consultation </h2>';
x=x+ '</div>';
x=x+ '<div class="container">';
x=x+'<div class="row">';
x=x+'<div class="col-sm-offset-2 col-sm-4">';


x=x+'<form action="submit_consult.php" id="consult_form" method="post" enctype="multipart/form-data">';




x=x+' <div class="form-group">';
x=x+'<label for="firstname">Firstname</label>';
x=x+'<div class="input-group">';
x=x+'<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname" required>';
x=x+'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
x=x+'</div>';
x=x+'</div>';

x=x+'<div class="form-group">';
x=x+ '<label for="lastname">Last Name</label>';
x=x+'<div class="input-group">';
x=x+   '<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Optional">';
x=x+  '<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>';
x=x+ '</div>';
x=x+'</div>';


x=x+'<div class="form-group">';
x=x+ '<label for="email">Email</label>';
x=x+'<div class="input-group" data-validate="email">';
x=x+'<input type="text" class="form-control" name="email" id="email" placeholder="Email" required>';
x=x+'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
x=x+'</div>';
x=x+'</div>';


x=x+' <div class="form-group">';
x=x+'<label for="validate-phone">Validate Phone</label>';
x=x+'  <div class="input-group" data-validate="phone">';
x=x+'<input type="text" class="form-control" name="validate-phone" id="validate-phone" placeholder="(814) 555-1234" required>';
x=x+'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
x=x+'</div>';
x=x+'</div>';


x=x+'<div class="form-group">';
x=x+'<label for="validate-select">Validate Select</label>';
x=x+'<div class="input-group">';
x=x+'<select class="form-control" name="validate-select" id="validate-select" placeholder="Validate Select" required>';
x=x+'<option value="">Select an item</option>';
x=x+'<option value="item_1">Item 1</option>';
x=x+'<option value="item_2">Item 2</option>';
x=x+'<option value="item_3">Item 3</option>';
x=x+'</select>';
x=x+'<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>';
x=x+'</div>';
x=x+'</div>';
x=x+'<div class="form-group">';
x=x+'<div class="input-group">';
x=x+'<label for="file">Select a file:</label> <input type="file" name="userfile" id="file"> <br />';
x=x+'</div>';
 x=x+'</div>';


x=x+'<button type="submit" id="consult_form_submit" class="btn btn-primary col-xs-12" disabled>Submit</button>';
x=x+'<br>';
x=x+'<br><br>';
x=x+'</form>';
x=x+'</div>';
x=x+'</div>';
                document.getElementById('update_1').innerHTML= x;
                
                            alert('logged in');



$('.input-group input[required], .input-group textarea[required], .input-group select[required]').on('keyup change', function() {
        var $form = $(this).closest('form'),
            $group = $(this).closest('.input-group'),
            $addon = $group.find('.input-group-addon'),
            $icon = $addon.find('span'),
            state = false;
            
        if (!$group.data('validate')) {
            state = $(this).val() ? true : false;
        }else if ($group.data('validate') == "email") {
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
            //$form.find('[type="submit"]').prop('disabled', false);
            $('#consult_form_submit').prop('disabled', false);
        }else{
            //$form.find('[type="submit"]').prop('disabled', true);
            $('#consult_form_submit').prop('disabled', true);
        }
    });
    
    $('.input-group input[required], .input-group textarea[required], .input-group select[required]').trigger('change');
    
    



    }
    else
    {
        alert("Error! Logging in , Incorrect username or password");
    
    }
    });

    


    });


    </script>



    










    <script>


/*$("#consult_form_submit").click(function(e) 
{

        //var formData = new FormData($("#consult_form")[0]);
        var postData = $("#consult_form").serializeArray();
        console.log(postData);
});
*/

    </script>











</body>

</html>
