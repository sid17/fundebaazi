





<html lang="en">
<!-- images 1900X 1080 -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Modern Business - Start Bootstrap Template</title>
    <script src="js/jquery-1.10.2.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/logo-nav.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="js/inc_tinymec.js"></script>

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
                        <a href="advisor_login.php">Check requests</a>
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



<br>
<br>  <br>

<?php
require("include/connect.php");
?>
<?php
$id=$_POST['id'];
#echo $id;
echo "<div class='container'><div class='row'>";
$sql ="select * from requests where for_user='$id'";
#echo $sql;
        echo "<div class='col-md-2'>";
        echo "<h3>First Name</h3>";
        echo "</div>";
        echo "<div class='col-md-2'>";
        echo "<h3>Last Name</h3>";
        echo "</div>";
        echo "<div class='col-md-4'>";
        echo "<h3>Email</h3>";
        echo "</div>";
        echo "<div class='col-md-1'>";
        echo "<h3>Phone</h3>";
        echo "</div>";
        echo "<div class='col-md-1'>";
        echo "<h3>Type</h3>";
        echo "</div>";
        echo "<div class='col-md-2'>";
        echo "<h3>File</h3>";
        echo "</div>";

$retval = mysql_query( $sql, $connection );
if ($retval)
   {
	while($row = mysql_fetch_array($retval))     
    {


 echo "<div class='col-md-2'>";
       echo $row['first_name'];
        echo "</div>";
        echo "<div class='col-md-2'>";
        echo $row['last_name'];
        echo "</div>";
        echo "<div class='col-md-4'>";
        echo $row['email'];
        echo "</div>";
        echo "<div class='col-md-1'>";
        echo $row['num'];
        echo "</div>";
        echo "<div class='col-md-1'>";
        echo $row['type'];
        echo "</div>";
        echo "<div class='col-md-2'>";
        echo "<a href='files/".$row['file']."'>link to file</a>";
        echo "</div>";

    	
    }

   }
    


mysql_close($connection);
?>




