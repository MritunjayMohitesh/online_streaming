<!DOCTYPE html>
<html>
<head>
	<title>hfj</title>
</head>
<body>
<?php
session_start();
$def=$_SESSION['abc'];
$go=$_POST['playlist'];
mysql_connect("localhost","id279142_root","12345");
mysql_select_db("id279142_online_streaming");

$result=mysql_query("insert into user_playlists values(null,'$def','$go','hgd')") or die("hgvsdgs");

header("Location:user_playlists.php");
?>
</body>
</html>