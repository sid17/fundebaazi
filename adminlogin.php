<script src="js/jquery-1.10.2.js"></script>
<?php
session_start();
if (!(isset($_SESSION['admin_id'])&&($_SESSION['admin_id']=='admin@fundebaazi')))
{
echo("<script> $(document).ready(function() { document.getElementById('logout').style.display='none'; });</script>");

}
else
{
echo("<script> $(document).ready(function() { document.getElementById('logout').style.display='block'; });</script>");
}

?>

<html lang="en">
<!-- images 1900X 1080 -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fundebaazi,Real People , Real Advice</title>
    <script src="js/jquery-1.10.2.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/logo-nav.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="js/inc_tinymec.js"></script>
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
                        <a href="adminlogin.php">Login</a>
                    </li>

                     <li>
                        <a href="admin.php">Add profile</a>
                    </li>
                    <li>
                        <a href="admin_edit.php">Edit Profile</a>
                    </li>
                    <li>
                        <a href="view_review.php">Confirm Reviews</a>
                    </li>
                    <li>
                        <a href="check_message.php">Check messages</a>
                    </li>
                    <li>
                        <a href="all_requests.php">Check requests</a>
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
                            alert(msg2);
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
        <h2>Administrator LogIn</h2>
    </div>
    
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
            <form action="adminprocess.php" method="post">
            

        


                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group" >
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                        <span class="input-group-addon success"><span class="glyphicon glyphicon-ok"></span></span>
                    </div>
                </div>

       
                
                <div class="form-group">
                    <label for="Password">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required></input>
                        <span class="input-group-addon success"><span class="glyphicon glyphicon-ok"></span></span>
                    </div>
                </div>
               
                
                
                <button type="submit" class="btn btn-primary col-xs-12" >Submit</button>
            </form>
        </div>
  </body>
</html>
