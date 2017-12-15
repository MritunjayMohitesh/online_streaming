<!DOCTYPE html>
<html>
<head>
	<title>remove</title>
</head>
<body>

<?php
$me=$_GET['gif'];
mysql_connect("localhost","id279142_root","12345");
mysql_select_db("id279142_online_streaming");
$result=mysql_query("delete from user_playlists where playlists='$me'");
header("location:user_playlists.php")



?>

</body>
</html>