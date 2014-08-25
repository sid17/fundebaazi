<html lang="en">
<!-- images 1900X 1080 -->
<?php
if (isset($_GET['valid']))
{
    if ($_GET['valid']==1)
    {
echo ("<script>alert('updated');</script>");
    }
    else
    {
    echo ("<script>alert('not updated');</script>");

    }
}
?>
<script src="js/jquery-1.10.2.js"></script>
<?php
require_once("include/session.php");
?>
<?php
confirm_logged_in();
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
                            url: "logout1.php",
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


<div class="container-fluid">
<div class="row">
<div class="col-sm-3 col-md-2 sidebar">
     <input type="serach" class="form-control" id="serach_by_name" placeholder="Search By Name">
<a  id="search_name" style='cursor: pointer;' >Search <i class="glyphicon glyphicon-circle-arrow-right" id="search_name"></i></a>
<script>
$( "#search_name" ).click(function() {
var x=document.getElementById('serach_by_name').value;
document.getElementById('results').innerHTML='';
window.str="select * from data_base WHERE name LIKE '"+x+"%' OR name LIKE '% "+x+"%' limit 10";
window.offset=0;
alert(str);
get_results(str);       

});
</script>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >
<h1 class="page-header">Search for Profiles</h1>
<div id='results'>
</div>
<div class="col-md-5 col-md-offset-4">
<button type="button" class="btn btn-primary btn-lg btn-block" onclick="ret_more_result()">Browse More results!</button>
</div>
</div>
</div>
</div>


<script src="js/bootstrap.js"></script>
<script src="js/modern-business.js"></script>



<script>
function ret_more_result()
{
var n = (window.str).indexOf("limit");
var res = (window.str).substring(0, n);
window.offset=window.offset+10;
res=res+'limit '+window.offset+' ,10';
window.str=res;
get_results(str);
alert(res);
}

function get_results(str)
{
  $.ajax
  ({
    type: "POST",
    url: "ret_res_edit.php",
    data: { string:str }
  })
  .done(function(msg2) 
  {
  alert(msg2);
  parse_results(msg2)
  });
}
function parse_results(data)
{
//$("#results").append("<div>hello world</div>");
obj = JSON.parse(data);
var i;
 var temp_str;

for (i=0;i<obj.length;i++)
{
new_div='<br><article class="search-result row">';
     new_div=new_div+' <div class="col-xs-12 col-sm-12 col-md-3">';
       new_div=new_div+' <img  class="img-responsive imageClip" src="images/'+obj[i]["image"]+'" alt="Lorem ipsum" />';
     new_div=new_div+'  </div>';
     new_div=new_div+'  <div class="col-xs-12 col-sm-12 col-md-2">';
       new_div=new_div+'  <ul class="meta-search">';
        new_div=new_div+'  </ul>';
     new_div=new_div+'  </div>';
     new_div=new_div+'  <div class="col-xs-12 col-sm-12 col-md-7">';
       new_div=new_div+'  <h3><a href="edit_view.php?id='+obj[i]["id"]+'" title="">'+obj[i]["user"]+'</a></h3>';
        new_div=new_div+' <p>'+obj[i]["email"]+'</p>  ';          
              new_div=new_div+'  </div>';
     new_div=new_div+' <span class="clearfix border"></span>';
    new_div=new_div+' </article>   ';  

$('#results').append(new_div);  
}

}
</script>


</body>

</html>
   
 







</body>
</html>
  