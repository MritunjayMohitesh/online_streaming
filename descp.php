<!DOCTYPE html>
<html>
<head>
	<title>Descp</title>
	<meta charset="utf-8">
	
</head>
<style type="text/css">
.title
{
	font-family: arial;
	text-align: center;
	font-size: 40px;
	font-weight: bold;
}	
.descp
{
	font-family: arial;
	width: 60%;
	margin:auto;
	text-align: center;
}


</style>


<?php 
$find=$_GET['title'];

mysql_connect("localhost","id279142_root","12345");
mysql_select_db("id279142_online_streaming");
$result=mysql_query("select*from album where album_title='$find'");
$me=mysql_fetch_array($result);
if($me['album_title']==$find)
{
echo "<div class='title'>".$me['album_title']."<hr></div>";
}
else 
{
	echo "failed";
}
?>
<body background='<?php echo "images/".$me['album_title'].".jpg"; ?>'  >
<div class="descp"><?php echo $me['album_descp'] ?></div>


</body>
</html>