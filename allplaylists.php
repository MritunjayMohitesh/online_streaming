<!DOCTYPE html>
<html>
<head>
	<title>all playlists</title>
	<style type="text/css">
		div.part
		{
			display: inline-block;
			width: 25%;
			margin-left: 50px;
			margin-top: 50px;
			margin-bottom: 30px;
		}
	</style>
</head>
<body background="scss/playbg.jpg">
<h1 style="color: brown;font-family: cambria math; text-align: center;">OUR   &nbsp;&nbsp;SELECTIONS</h1><div style="float: right;margin-bottom: 0px;">
<button>
<a href="user_playlists.php"><img src="scss/add.png" height="30px" width="30px"></a></button>&nbsp;&nbsp;
<button><a href="mysongs.php"><img src="scss/star.png" height="30px" width="30px"></a></button>&nbsp;&nbsp;
<button><a href="songs.php"><img src="scss/home.png" height="30px" width="30px"></a></button></div><br><br><br>
<?php
 mysql_connect("localhost","id279142_root","12345");
mysql_select_db("id279142_online_streaming");
$result=mysql_query("select distinct playlist from playlist_songs");

while($go=mysql_fetch_array($result))
{
	echo '<div class="part">';
	$raft=$go['playlist'];
	echo '<img src="scss/'.$raft.'.jpg" width="200px" height="200px"><br><br>';
	echo '<a href="playlists.php?title='.$raft.'" style="text-decoration:none;font-family:arial;">'.$raft.'</a></div>';
}


?>
</body>
</html>