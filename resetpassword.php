<!DOCTYPE html>
<script src="js/jquery-1.10.2.js"></script>



<style>
.messageBox {  
width:250px;  
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







<?php
if (isset($_GET['success']))
{
    if ($_GET['success']==1)
        echo"<script>display_message('Password Reset successfully');</script>";
    else
    	 echo"<script>display_message('Error reseting password');</script>";
   
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

   <title>Fundebaazi,Real People ,Real Advice</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
 
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

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
        }else{
            $form.find('[type="submit"]').prop('disabled', true);
        }
    });
    
    $('.input-group input[required], .input-group textarea[required], .input-group select[required]').trigger('change');
    
    
});

</script>


</head>
  <body>      
    

<?php
require("include/navbar.php");
?>





    
 <div class="container">
    <div class="row">
        <h2>Forgot Password</h2>
    </div>
    
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
            <form action="reset.php" method="post">
            

		


                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group" data-validate="email">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                    </div>
                </div>


                <div class="form-group">
                    <label for="email">Confirmation String</label>
                    <div class="input-group" >
                        <input type="password" class="form-control" name="confstr" id="confstr" placeholder="Confirmation String" required>
                        <span class="input-group-addon success"><span class="glyphicon glyphicon-ok"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">New Password</label>
                    <div class="input-group" >
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="New Password" required>
                        <span class="input-group-addon success"><span class="glyphicon glyphicon-ok"></span></span>
                    </div>
                </div>

		
               
                
                
                <button type="submit" class="btn btn-primary col-xs-12" disabled>Submit</button>
            </form>
        </div>
  </body>
</html>


