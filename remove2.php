<!DOCTYPE html>
<html>
<head>
	<title>remove 2</title>
</head>
<body>

<?php



$me=$_GET['gif'];
mysql_connect("localhost","id279142_root","12345");
mysql_select_db("id279142_online_streaming");
$result=mysql_query("delete from user_songs where songs='$me'");
header("location:mysongs.php");



?>


</body>
</html>