<!DOCTYPE html>
<html>
<head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<?php session_start(); $find=$_SESSION['abc']; ?>
	<title><?php echo $find.'playlists' ?></title>
	<style type="text/css">
.table{
	display:table;
	margin-left: 30px;
	margin-top: 60px;
}
.row{
	display: table-row;
	padding-top:40px;
	padding-bottom: 40px;
}
.col1{
	display: table-cell;
	width:10%;
	vertical-align: top;
}
.col2{
	display: table-cell;

	width:40%;
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
	font-family: cambria math;
}
a:hover
{
	text-decoration: underline;
	text-decoration-line: red;
}
</style>



	

<script type="text/javascript">
$(document).ready(function()
{
	$(".trigger").click(function(){
		$(this).next().slideToggle('slow');
	});
});
</script>
	</head>

	<body background="scss/userbg.jpg" >
	<h1 style="color: brown;font-family: cambria math; text-align: center;">YOUR&nbsp;&nbsp;PLAYLISTS</h1>
	<div style="float: right;">
	
<button class="trigger"><img src="scss/add.png" height="50 px" width="50px" alt="add plaaylist"  ></button>&nbsp;&nbsp;
<form method="POST" action="play.php" style="display: none;">
<textarea rows="3" cols="10" name="playlist" value="playlist"></textarea>
<input type="submit" value="submit" name="submit">
</form>
<button><a href="mysongs.php"><img src="scss/star.png" height="50px" width="50px"></a></button>&nbsp;&nbsp;
<button><a href="songs.php"><img src="scss/home.png" height="50px" width="50px"></a></button>

</form>
</div>​</div><br>
<?php


 mysql_connect("localhost","id279142_root","12345") or die('failed');
mysql_select_db("id279142_online_streaming");



$result=mysql_query("select playlists from user_playlists where email_id='$find'");
?>
<div class="table">
	

<?php
while($here=mysql_fetch_array($result))
{
	echo '<div class="row">';
	echo '<div class="col1">';
	$it=$here['playlists'];
	$sit=mysql_query("select image from user_playlists where playlists='$it'");
	$roh=mysql_fetch_array($sit);
	$shi=$roh['image'];

	if($shi=='hgd')
{
	echo '<img src="scss/mind booster.jpg" style="width:100px; height:100px;" alt="min booster">';
}
else
{
	echo '<img src="'.$shi.'" style="width:100px; height:100px;" alt="rty">';
}
	echo '</div>';
	echo '<div class="col2">';
	echo '<a href="playlist_songs.php?title='.$it.'" style="font-family:calisto MT;font-size:25px;color:navy;" class="poo" target="_blank"></div>'.$it.'<div class="col3"><a href="remove1.php?gif='.$it.'"><img src="scss/download.png" height="20px" width="20px"></a></div><br>';
	echo '<form action="upload.php?fgh='.$it.'"method="post" enctype="multipart/form-data">';
	 echo ' 
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Playlist cover"  name="submit">
</form>';
echo '<br><br><hr style="font-size:10px;"></div>';
	}

?>
</div>
</body>
</html>
