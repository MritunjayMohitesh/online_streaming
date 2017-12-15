<!DOCTYPE html>
<html>
<head>
	<title>my songs</title>
	<style type="text/css">
		.table
		{
			display: table;
			margin-left: 30px;
		}
		.row
		{
			display: table-row;
			margin-top:20px;
			
		}
		.col1
		{
			display: table-cell;
			margin-top:20px;
			padding-top: 50px;
			font-family: arial;
			font-size: 25px;
			width:60%;
			color:black;
			
		}
		.col2
		{
			display: table-cell;
			margin-top:20px;
			padding-top: 50px;
			width: 60%;
			padding-left: 40px;

			
		}

	</style>
</head>
<body bgcolor="salmon" background="scss/linkbg.jpg">
<div style="float:right"><button><a href="songs.php"><img src="scss/home.png" height="50px" width="50px"></a></button>&nbsp;&nbsp;
<button>
<a href="user_playlists.php"><img src="scss/add.png" height="50px" width="50px"></a>
</button></div>
<h1 style="font-family: arial; text-align: center;color: lawngreen; text-decoration: underline;font-size: 40px;">YOUR&nbsp;&nbsp;SONGS</h1>
<div class="table">


<?php  error_reporting(0);session_start(); $find=$_SESSION['abc'];$go=$_SESSION['ret'] ;


 mysql_connect("localhost","id279142_root","12345");
mysql_select_db("id279142_online_streaming");
if($go!=NULL)
{
$result1=mysql_query("insert into user_songs values('$find','$go')");
}
$result=mysql_query("select songs from user_songs where email_id='$find'");

while($here=mysql_fetch_array($result))
{
	echo '<div class="row">';
	$it=$here['songs'];
	echo '<div class="col1" ><a href="link.php?title='.$it.'" style="text-decoration: blink;
	    color:turquoise;">'.$it.'</a></div>';
	echo '<div class="col2"><a href="remove2.php?gif='.$it.'"><button><img src="scss/download.png" height="20px" width="20px"></a><br></button></div>';
	echo '</div>';
}

?>
</div>





</body>
</html>