<!DOCTYPE html>
<html>
<head>
	<title>user songs</title>
	<style type="text/css">
.table{
	display:table;
}
.row{
	display: table-row;
}
.col1{
	display: table-cell;
	width:50%;
	vertical-align: top;
}
.col2{
	display: table-cell;
	width:50%;
	vertical-align: top;
	padding-left: 145px;
	color: #2B2B2B;
}
h3.adc
{
	margin: 10px;
	font-family: serif;

}
a:link
{
	text-decoration: none;
	font-family: arial;
	font-size: 35px;

}
a:hover
{
	color: yellow;
	text-decoration: underline;
}
.poo
{
	    display: block;
    margin-top: 0em;
    margin-bottom: 0em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
    border-color: teal;
}

	</style>
</head>
<body bgcolor="#7D1935">
<?php
session_start();
$it=$_SESSION['abc'];
error_reporting(0);
 mysql_connect("localhost","id279142_root","12345");
mysql_select_db("id279142_online_streaming");
$result=mysql_query("select first_name from user_record where email_id='$it'");
$sql=mysql_fetch_array($result);
echo '<div style="color:lawngreen;font-size:25px;font-family:cambria math;">Welcome '.$sql['first_name'].'<br></div>';
$me=$_GET['title'];
echo '<div style="text-align:center;font-size:45px;color:">'.$me.'<br></div><hr class="poo"><br><br><br>';
$hii=$_GET['gift'];
$sit=mysql_query("select image from user_playlists where playlists='$me'");
$roh=mysql_fetch_array($sit);
$shi=$roh['image'];
if($shi=='hgd')
{
	$find='scss/mind booster.jpg';
}
else
{
	$find=$shi;
}
?>




<div class="table">
<div class="row">
	<div class="col1">
		<div class="my"><img src="<?php  echo $find; ?>" height="500px" width="500px"></div>
	</div>
	<div class="col2">
	<?php
if($hii!=null)
{ 

	$gff=mysql_query("insert into user_playlist_songs values('','$it','$me' ,'$hii')");
	$result1=mysql_query("select distinct song from user_playlist_songs where playlist='$me' and email_id='$it'");

while($he=mysql_fetch_array($result1))
{
	$gem=$he['song'];
	echo '<h3 class="adc"><a href="link.php?title='.$gem.'" target="_blank">'.$gem.'<br></a></h3>' ;
}
}
if($hii==null)
$result1=mysql_query("select distinct song from user_playlist_songs where playlist='$me' and email_id='$it'");

while($he=mysql_fetch_array($result1))
{ 
	if($he==null)
	{
		echo 'We are sorry!!! Please add songs';
		break;
	}
	$gem=$he['song'];
	echo '<h2><a href="link.php?title='.$gem.'" target="_blank" style="color:wheat;">'.$gem.'</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="remove3.php?gif='.$gem.'"><img src="scss/download.png" width="20px" height="20px"></a></h2>' ;
}?>
</div>

</div>

</body>
</html>


</body>
</html>