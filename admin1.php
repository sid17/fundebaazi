
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Full featured example</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<script type="text/javascript" src="js/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="js/inc_tinymec.js"></script>
<script src="js/jquery-1.9.1.js"></script>
</head>
<body>
    <!--upload_bio.php-->
    <form action="upload_bio.php" method="post" enctype="multipart/form-data">
        <h1> ADD NAME </h1>
        <input type="text" name="name" placeholder="Name"><br>
        <h1> EMAIL </h1>
        <input type="text" name="email" placeholder="email"><br>
        <h1> Max_Requests </h1>
        <input type="text" name="max_requests" placeholder="email"><br>
        <h1> ADD PROFILE PHOTO </h1>
        <p>
            <label for="file">Select a file:</label> <input type="file" name="userfile" id="file"> <br />
            <p>
    <h1>ADD COMPLETE BIO</h1>
        <div>
            <textarea id="bio" name="bio" rows="15" cols="80" style="width: 80%">
                
            </textarea>
        </div>
        <!--<a href="javascript:;" onclick="alert(tinyMCE.get('bio').getContent());return false;">[Get contents]</a>-->
    <h1>ADD SUMMARY</h1>
        <div>
            <textarea id="summary" name="summary" rows="15" cols="80" style="width: 80%">
                
            </textarea>
        </div>  
    <br>
    <br>
    



    <div id='update_tags'>  
    <h3>Add  Tags</h3>
    <div id="tags">
    <p>Category</p>
    <input type="radio" id="t1" name="tags" value="category1"> Category1
    <input type="radio" id="t2" name="tags" value="category2"> Category2
    <input type="radio" id="t3" name="tags" value="category3" > Category3
    <input type="radio" id="t3" name="tags" value="category4" > Category4
    </div>
    <p>Tag Name</p>
    <input type="text" id="tag_name" placeholder="TagName"><br>
    <button type="button" onclick="update_tags()">Add Tags</button>
    </div>

    <?php
    require("include/connect.php");

    $result=mysql_query("SELECT * FROM tags",$connection);
    if (!$result)
    die("database query failed:".mysql_error());
    






    echo '<h3>Select tags</h3>';
    echo '<div id="tag_cat1" style="position:absolute;width:250px;margin-left:0%"><h3>Category1</h3>';
    
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
    echo '<div id="tag_cat2" style="position:absolute;width:250px;margin-left:27%"><h3>Category2</h3>';
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
    echo '<div id="tag_cat3" style="position:absolute;width:250px;margin-left:50%"><h3>Category3</h3>';
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
    echo '<div id="tag_cat4" style="position:absolute;width:250px;margin-left:75%"><h3>Category4</h3>';
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
    <button style="position:fixed;left:90%;top:5%">Upload information</button>

    </form>

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
