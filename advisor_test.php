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
     <link href="css/dashboard.css" rel="stylesheet">
<style>

.imageClip{
    width:80%;
    height: 10%;
    overflow:hidden;
}


</style>
    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<style>

@import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";
.search-result .thumbnail { border-radius: 0 !important; }
.search-result:first-child { margin-top: 0 !important; }
.search-result { margin-top: 20px; }
.search-result .col-md-2 { border-right: 1px dotted #ccc; min-height: 140px; }
.search-result ul { padding-left: 0 !important; list-style: none;  }
.search-result ul li { font: 400 normal .85em "Roboto",Arial,Verdana,sans-serif;  line-height: 30px; }
.search-result ul li i { padding-right: 5px; }
.search-result .col-md-7 { position: relative; }
.search-result h3 { font: 500 normal 1.375em "Roboto",Arial,Verdana,sans-serif; margin-top: 0 !important; margin-bottom: 10px !important; }
.search-result h3 > a, .search-result i { color: #248dc1 !important; }
.search-result p { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; } 
.search-result span.plus { position: absolute; right: 0; top: 126px; }
.search-result span.plus a { background-color: #248dc1; padding: 5px 5px 3px 5px; }
.search-result span.plus a:hover { background-color: #414141; }
.search-result span.plus a i { color: #fff !important; }
.search-result span.border { display: block; width: 97%; margin: 0 15px; border-bottom: 1px dotted #ccc; }

</style>



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
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Forum</a>
                    </li>
                    <li>
                     <a href="#" style='display:none' id='logout'><button onclick='logout()' class="btn btn-default">Logged In ! Logout?</button></a>
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
                            //alert('logged out');
                            display_message("logged out!");
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


                  <!---->
                  <a  id="search_name" style='cursor: pointer;' >Search <i class="glyphicon glyphicon-circle-arrow-right" id="search_name"></i></a>
                   <a  id="reset_name" style='cursor: pointer;'> Reset <i class="glyphicon glyphicon-circle-arrow-right" id="search_name"></i> </a>
<script>
$( "#search_name" ).click(function() {


var x=document.getElementById('serach_by_name').value;
document.getElementById('results').innerHTML='';
window.str="select * from data_base WHERE name LIKE '"+x+"%' OR name LIKE '% "+x+"%' limit 10";
window.offset=0;
//alert(str);
get_results(str);       

});
  </script>


<script>
$( "#reset_name" ).click(function() {


  document.getElementById('serach_by_name').value="";
  

});
  </script>



                  <br>
                          

<?php
  require("include/connect.php");

  $result=mysql_query("SELECT * FROM tags",$connection);
  if (!$result)
  die("database query failed:".mysql_error());
  

  
  
  while ($row=mysql_fetch_array($result))
  {
   /* CATEGORY 1 */
   echo'<h4>Company</h4>';
  global $string1;
  $string1= $row['cat1'];
  $string1 = preg_replace('/\.$/', '', $string1); //Remove dot at end if exists
  $array = explode(',@!', $string1); //split string into array seperated by ', '
  echo '<ul class="nav nav-sidebar">';
  foreach($array as $value) //loop over values
  {
       echo '<li class="input checkbox"><input type="checkbox" class="search-enable" name="category[]"';
          echo  'value="1" id="'.$value.'" /><label for="expert-search-category-1">'.$value.'</label></li>';
  }
  
  echo '</ul>';
  /* CATEGORY 2 */
  echo'<h4>Institute</h4>';
  echo '<ul class="nav nav-sidebar">';
  global $string2;
  $string2= $row['cat2'];
  $string2 = preg_replace('/\.$/', '', $string2); //Remove dot at end if exists
  $array = explode(',@!', $string2); //split string into array seperated by ', '
  foreach($array as $value) //loop over values
  {
       echo '<li class="input checkbox"><input type="checkbox" class="search-enable" name="category[]"';
          echo  'value="1" id="'.$value.'" /><label for="expert-search-category-1">'.$value.'</label></li>';
  }
  echo '</ul>';
  /* CATEGORY 3 */
  echo'<h4>Function</h4>';
 echo '<ul class="nav nav-sidebar">';
  global $string3;
  $string3= $row['cat3'];
  $string3 = preg_replace('/\.$/', '', $string3); //Remove dot at end if exists
  $array = explode(',@!', $string3); //split string into array seperated by ', '
  foreach($array as $value) //loop over values
  {
        echo '<li class="input checkbox"><input type="checkbox" class="search-enable" name="category[]"';
          echo  'value="1" id="'.$value.'" /><label for="expert-search-category-1">'.$value.'</label></li>';
  



  }
  echo '</ul>';
  /* CATEGORY 4 */
  echo'<h4>Expertise In</h4>';
 echo '<ul class="nav nav-sidebar">';
  global $string4;
  $string4= $row['cat4'];
  $string4 = preg_replace('/\.$/', '', $string4); //Remove dot at end if exists
  $array = explode(',@!', $string4); //split string into array seperated by ', '
  foreach($array as $value) //loop over values
  {
        echo '<li class="input checkbox"><input type="checkbox" class="search-enable" name="category[]"';
          echo  'value="1" id="'.$value.'" /><label for="expert-search-category-1">'.$value.'</label></li>';
  }

  }
  echo '</ul>';
 mysql_close($connection);
  ?>
</div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >
          <h1 class="page-header">Search for Advisors</h1>





<div id='results'>

 <!--<article class="search-result row">
      <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/people" alt="Lorem ipsum" /></a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
          <li><i class="glyphicon glyphicon-calendar"></i> <span>02/15/2014</span></li>
          <li><i class="glyphicon glyphicon-time"></i> <span>4:28 pm</span></li>
          <li><i class="glyphicon glyphicon-tags"></i> <span>People</span></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
        <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>            
               <span class="plus">Get full bio<a href="user_bio.html" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
      </div>
      <span class="clearfix borda"></span>
    </article>










        <article class="search-result row">
      <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/food" alt="Lorem ipsum" /></a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
          <li><i class="glyphicon glyphicon-calendar"></i> <span>02/13/2014</span></li>
          <li><i class="glyphicon glyphicon-time"></i> <span>8:32 pm</span></li>
          <li><i class="glyphicon glyphicon-tags"></i> <span>Food</span></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-7">
        <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>            
                <span class="plus">Get full bio<a href="user_bio.html" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
      </div>
      <span class="clearfix borda"></span>
    </article>










    <article class="search-result row">
      <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/sports" alt="Lorem ipsum" /></a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
          <li><i class="glyphicon glyphicon-calendar"></i> <span>01/11/2014</span></li>
          <li><i class="glyphicon glyphicon-time"></i> <span>10:13 am</span></li>
          <li><i class="glyphicon glyphicon-tags"></i> <span>Sport</span></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-7">
        <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>            
                <span class="plus">Get full bio<a href="user_bio.html" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
      </div>
      <span class="clearfix border"></span>
    </article>    -->  
     

</div>

            <div class="col-md-5 col-md-offset-4">
                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="ret_more_result()">Browse More results!</button>
                <a style='cursor: pointer;' href='contact.php#contactForm'> Did not find what you are looking for? Connect with us! </a> 
            </div>








                                           
        </div>
      </div>
    </div>


     
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>



<script>


$( document ).ready(function() 
{
window.str='select* from data_base limit 10';
window.offset=0;
//alert(str);
get_results(str);       
});



$( ".search-enable" ).change(function() {
  //alert( "Handler for .change() called." );
  document.getElementById('serach_by_name').value="";
  var atLeastOneIsChecked = $('input[name="category[]"]:checked');
var i;
//alert('hello');
window.str='select* from data_base where (';
window.offset=0;
document.getElementById('results').innerHTML='';
if (atLeastOneIsChecked.length>0)
{
  //alert(atLeastOneIsChecked.length);
for ( i=0;i<atLeastOneIsChecked.length-1;i++)
{
  //alert('hi');
  console.log(atLeastOneIsChecked[i].id);
  //alert (atLeastOneIsChecked[i].id);
        window.str=window.str+atLeastOneIsChecked[i].id+'=1 || ';

}
  window.str=window.str+atLeastOneIsChecked[atLeastOneIsChecked.length-1].id+'=1) limit 10';
  //alert (str);
}
else
{
window.str='select* from data_base limit 10';
}
//alert(str);
get_results(str);
});



function ret_more_result()
{
var n = (window.str).indexOf("limit");
var res = (window.str).substring(0, n);
window.offset=window.offset+10;
res=res+'limit '+window.offset+' ,10';
window.str=res;
get_results(str);
//alert(res);
}



function get_results(str)
{
  $.ajax
  ({
    type: "POST",
    url: "ret_res.php",
    data: { string:str }
  })
  .done(function(msg2) 
  {
  //alert(msg2);
  parse_results(msg2)
  });
}

function parse_results(data)
{
//$("#results").append("<div>hello world</div>");
obj = JSON.parse(data);
var i;
 var temp_str;
//console.log(obj);
for (i=0;i<obj.length;i++)
{
//alert(obj[0]['bio']+obj[0]['user']);


new_div='<br><article class="search-result row">';
     new_div=new_div+' <div class="col-xs-12 col-sm-12 col-md-3">';
       new_div=new_div+' <img  class="img-responsive imageClip" src="images/'+obj[i]["image"]+'" alt="Lorem ipsum" />';
     new_div=new_div+'  </div>';
     new_div=new_div+'  <div class="col-xs-12 col-sm-12 col-md-2">';
       new_div=new_div+'  <ul class="meta-search">';
          new_div=new_div+' <li><i class="glyphicon glyphicon-tags"></i> <span>';

if ((obj[i]["max"]-obj[i]["curr"])>0)
   new_div=new_div+"<b>Availability:</b> <i class='glyphicon glyphicon-ok' ></i> </span></li>";
  
else
   new_div=new_div+"<b>Availability:</b> <i class='glyphicon glyphicon-remove'></i> </span></li>";

        

new_div=new_div+' <li><i class="glyphicon glyphicon-tags"></i> <span>';
new_div=new_div+"<b>Tags:</b>"+obj[i]['tags'].substring(0,obj[i]['tags'].length-1 ); +'</span></li>';

       new_div=new_div+'  </ul>';
     new_div=new_div+'  </div>';
     new_div=new_div+'  <div class="col-xs-12 col-sm-12 col-md-7">';
       new_div=new_div+'  <h3><a href="user_bio.php?id='+obj[i]["id"]+'" title="">'+obj[i]["user"]+'</a></h3>';
        new_div=new_div+' <p>'+obj[i]["summary"]+'</p>  ';  


               new_div=new_div+'  <span class="plus">Get full bio<a href="user_bio.php?id='+obj[i]["id"]+'" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>';
     new_div=new_div+'  </div>';
     new_div=new_div+' <span class="clearfix border"></span>';
    new_div=new_div+' </article>   ';  



//new_div='<a href=display_advisor.php?id='+obj[i]['id']+'>'+obj[i]['bio']+'  and '+obj[0]['user']+'</a><br>';
$('#results').append(new_div);  
}

}
</script>


</body>

</html>
