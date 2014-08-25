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
                             window.location="http://www.fundebaazi.in/adminlogin.php";
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
        <h2>Add profile</h2>
    </div>
    
    <div class="row">
        <div class="col-sm-offset-1 col-sm-11">
            <form action="upload_bio.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" id="username" placeholder="name" required>
                        <span class="input-group-addon success"><span class="glyphicon glyphicon-ok"></span></span>
                    </div>
                </div>

             <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group" >
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                        <span class="input-group-addon success"><span class="glyphicon glyphicon-ok"></span></span>
                    </div>
                </div>

               

            <div class="form-group">
                    <label for="max_requests">max_requests</label>
                    <div class="input-group"  data-length="1">
                        <input type="text" class="form-control" name="max_requests" id="max_requests" placeholder="max_requests" required></input>
                        <span class="input-group-addon success"><span class="glyphicon glyphicon-ok"></span></span>
                    </div>
                </div>


 <div class="form-group">

<label for="file">Select a profile photo</label> <input type="file" name="userfile" id="file"> <br />

 </div>


    
                
                
                <div class="form-group">
                    <label for="bio">Bio</label>
          <div class="input-group"  data-length="1">          
<textarea id="bio" name="bio" rows="15" cols="80" style="width: 80%" type="text" required>
                
            </textarea>
            </div>
                </div>



                <div class="form-group">
                    <label for="bio">Summary</label>
         <div class="input-group"  data-length="1" type="text">             
        <textarea id="summary" name="summary" rows="15" cols="80" style="width: 80%" required>
                
            </textarea>
              </div>
                </div>








 <div class="row">
<!--<label for="tag">Select tags</label>-->
<?php
    require("include/connect.php");

    $result=mysql_query("SELECT * FROM tags",$connection);
    if (!$result)
    die("database query failed:".mysql_error());
    






    
    echo '<div id="tag_cat1" class="col-md-3">Company';
    
    while ($row=mysql_fetch_array($result))
    {
     /* CATEGORY 1 */
   
    global $string1;
    $string1= $row['cat1'];
    $string1 = preg_replace('/\.$/', '', $string1); //Remove dot at end if exists
    $array = explode(',@!', $string1); //split string into array seperated by ', '
    foreach($array as $value) //loop over values
    {
            echo '<li class="input checkbox"><input type="checkbox" class="search-enable" name="'.$value.'"';
            echo  'value="1" id="expert-search-category-1" /><label for="expert-search-category-1">'.$value.'</label></li>';
    }
    
    echo '</div>';
    /* CATEGORY 2 */
   echo '<div id="tag_cat2" class="col-md-3">Institute';
    global $string2;
    $string2= $row['cat2'];
    $string2 = preg_replace('/\.$/', '', $string2); //Remove dot at end if exists
    $array = explode(',@!', $string2); //split string into array seperated by ', '
    foreach($array as $value) //loop over values
    {
            echo '<li class="input checkbox"><input type="checkbox" class="search-enable" name="'.$value.'"';
            echo  'value="1" id="expert-search-category-1" /><label for="expert-search-category-1">'.$value.'</label></li>';
    }
    echo '</div>';
    /* CATEGORY 3 */
   echo '<div id="tag_cat3" class="col-md-3">Function';
    global $string3;
    $string3= $row['cat3'];
    $string3 = preg_replace('/\.$/', '', $string3); //Remove dot at end if exists
    $array = explode(',@!', $string3); //split string into array seperated by ', '
    foreach($array as $value) //loop over values
    {
            echo '<li class="input checkbox"><input type="checkbox" class="search-enable" name="'.$value.'"';
            echo  'value="1" id="expert-search-category-1" /><label for="expert-search-category-1">'.$value.'</label></li>';
    }
    echo '</div>';
    /* CATEGORY 4 */
   echo '<div id="tag_cat4" class="col-md-3">Expertise In';
    global $string4;
    $string4= $row['cat4'];
    $string4 = preg_replace('/\.$/', '', $string4); //Remove dot at end if exists
    $array = explode(',@!', $string4); //split string into array seperated by ', '
    foreach($array as $value) //loop over values
    {
            echo '<li class="input checkbox"><input type="checkbox" class="search-enable" name="'.$value.'"';
            echo  'value="1" id="expert-search-category-1" /><label for="expert-search-category-1">'.$value.'</label></li>';
    }

    }
    echo '</div>';

    mysql_close($connection);
    ?>

</div>



<div id='update_tags' class="col-sm-offset-0 col-sm-12">  
    <h3>Add  Tags(Dont use _(underscore) in tag names)</h3>
    <div id="tags">
    <p>Category</p>
    <input type="radio" id="t1" name="tags" value="category1"> Company
    <input type="radio" id="t2" name="tags" value="category2"> Institute
    <input type="radio" id="t3" name="tags" value="category3" > Function
    <input type="radio" id="t3" name="tags" value="category4" > Expertise In
    </div>
    <p>Tag Name</p>
    <input type="text" id="tag_name" placeholder="TagName"><br>
    <br>
    <button type="button" class="btn btn-primary"onclick="update_tags()">Add Tags</button>
    <br><br>
    <br><br>
</div>




                
                <button type="submit" class="btn btn-primary col-xs-12" >Submit</button>
            </form>
        </div>













        <script>
function update_tags()
{
    var tag =  get_radio_value();
    var name=document.getElementById('tag_name').value;
        var data=tag+',!@'+name;
if (tag=='category1')
{
    var x="<?php echo $string1; ?>"+',@!'+name;
    var query="UPDATE `tags` SET `cat1`='"+x+"' WHERE 1";
    alert(query);
    console.log(query);
}
else if (tag=='category2')
{
    var x="<?php echo $string2; ?>"+',@!'+name;
    var query="UPDATE `tags` SET `cat2`='"+x+"' WHERE 1";
    alert(query);
}
else if (tag=='category3')
{
    var x="<?php echo $string3; ?>"+',@!'+name;
    var query="UPDATE `tags` SET `cat3`='"+x+"' WHERE 1";
    alert(query);
}
else if (tag=='category4')
{
    var x="<?php echo $string4; ?>"+',@!'+name;
    var query="UPDATE `tags` SET `cat4`='"+x+"' WHERE 1";
    alert(query);
}
    
    $.ajax
    ({
        type: "POST",
        url: "add_tag.php",
        data: { data:query,column:name }
    })
    .done(function(msg2) 
    {
    alert(msg2);
    new_div='<li class="input checkbox"><input type="checkbox" class="search-enable" name="'+name+'"value="1" id="expert-search-category-1" /><label for="expert-search-category-1">'+name+'</label></li>';
    if (tag=='category1')
    {
        $('#tag_cat1').append(new_div); 
    }
    else if (tag=='category2')
    {
        $('#tag_cat2').append(new_div); 
    }
    else if (tag=='category3')
    {
        $('#tag_cat3').append(new_div); 
    }
    else if (tag=='category4')
    {
        $('#tag_cat4').append(new_div); 
    }
    
    });
}

function get_radio_value() {
            var inputs = document.getElementsByName("tags");
            for (var i = 0; i < inputs.length; i++) {
              if (inputs[i].checked) {
                return inputs[i].value;
              }
            }
          }
</script>








</body>
</html>
  