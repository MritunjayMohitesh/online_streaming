<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width">
    <title>s</title>
    
    <!-- Insert to your webpage before the </head> -->
    <script src="audioplayerengine/jquery.js"></script>
    <script src="audioplayerengine/amazingaudioplayer.js"></script>
    <link rel="stylesheet" type="text/css" href="audioplayerengine/initaudioplayer-1.css">
    <script src="audioplayerengine/initaudioplayer-1.js"></script>
    <!-- End of head section HTML codes -->
<?php
$find=  $_GET['title'];
$mri=$find;
?>
	<title>playlists</title>
	<link rel="stylesheet" type="text/css" href="css/playlists1.css">
	<style type="text/css">
		.my
		{

	 display: inline-block;
    width: 500px;
    height: 500px;
    margin: 50px;
    border: 3px ; 
   
}
hr { 
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
<body background="scss/userbg.jpg">

<?php
//echo '<body background="scss/'.$find.'.jpg">';  
echo '<div style="font-family: cambria math;text-align: center;font-weight: bold;text-decoration:underline;color: black;font-size=40px;"><h1>'.$find.'<br><br></div></h1>';

mysql_connect("localhost","id279142_root","12345");
mysql_select_db("id279142_online_streaming")or die("failed");
?>
</h1><div style="float: right;margin-bottom: 0px;">
<button>
<a href="user_playlists.php"><img src="scss/add.png" height="30px" width="30px"></a></button>&nbsp;&nbsp;
<button><a href="mysongs.php"><img src="scss/star.png" height="30px" width="30px"></a></button>&nbsp;&nbsp;
<button><a href="songs.php"><img src="scss/home.png" height="30px" width="30px"></a></button></div><br><br>
<div class="table">

	<div class="col1">
		<div class="my"><img src="scss/<?php echo $find;?>.jpg" height="400px" width="400px"></div>
	</div>
	<div class="col2">
<?php
$play=mysql_query("select distinct songs from playlist_songs where playlist='$find' order by songs asc") or die("failed again");$_SESSION['next']=$find;
while($go=mysql_fetch_array($play))
{
   
  echo '<h2 class="adc"><a href="link.php?title='.$go['songs'].'" target="_blank">'.$go['songs'].'</a></h2><hr>';
}
?>
</ul>
</div>
</div>
</div>
</body>
<div class="row">

</html>