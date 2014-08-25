<?php
session_start();
function confirm_logged_in ()
{

if (!(isset($_SESSION['admin_id'])&&($_SESSION['admin_id']=='admin@fundebaazi')))
{
header("Location: adminlogin.php");
echo("<script> $(document).ready(function() { document.getElementById('logout').style.display='none'; });</script>");

}
else
{
echo("<script> $(document).ready(function() { document.getElementById('logout').style.display='block'; });</script>");
}
    
}
?>
