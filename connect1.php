<?php
	require("include/connect.php");
?>
<?php
$result = mysql_query("SHOW COLUMNS FROM data_base");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_assoc($result)) {
       echo($row['Field']);
    }
}
?>