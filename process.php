<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<?php 
session_start();
$eid=$_POST['eid'];
$pass=$_POST['pass'];
$eid=stripcslashes($eid);
$pass=stripcslashes($pass);
$eid=mysql_real_escape_string($eid);
$pass=mysql_real_escape_string($pass);

mysql_connect("localhost","id279142_root","12345");
mysql_select_db("id279142_online_streaming");

$result=mysql_query("select first_name ,email_id, password from user_record where email_id='$eid' and password='$pass'") or die("failed");
$row=mysql_fetch_array($result);
if ($row['email_id']==$eid && $row['password']==$pass) 
{
	$_SESSION['abc']=$eid;
	header("Location:songs.php");
}
 else {
	echo "<strong>Wrong details!!!!<br>Please login again..</strong>";
}
?>




</body>
</html>