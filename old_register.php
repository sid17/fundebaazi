
<!DOCTYPE html>
<script src="js/jquery-1.10.2.js"></script>
<?php
if (isset($_GET['invalid']))
{
    if ($_GET['invalid']==1)
        echo"<script>alert('email already taken take a different email');</script>";
   
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

    <title>Modern Business - Start Bootstrap Template</title>

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
                        <a href="blog-post.php">Blog</a>
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
        <h2>Register</h2>
    </div>
    
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
            <form action="registerprocess.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Optional">
                        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>


<div class="form-group">
                    <label for="lastname">Last Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Optional">
                        <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>


                
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group" data-validate="email">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="Password">Password</label>
                    <div class="input-group" data-validate="length" data-length="5">
                        <input type="text" class="form-control" name="password" id="password" placeholder="Password" required></input>
                        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                    </div>
                </div>
               
                
                
                <button type="submit" class="btn btn-primary col-xs-12" disabled>Submit</button>
            </form>
        </div>
  </body>
</html>
