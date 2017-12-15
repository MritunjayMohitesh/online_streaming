<!DOCTYPE html>
<html>
<head>
	<title>Song Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css\link.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<style type="text/css">
    #main {
        width: 20%;
        height: 100%;
        padding: 20px;
        font-size: 14px;
        font-weight: bold;
        float: right;
    }

    #enclosePopUp {
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        position: fixed;
        opacity: 1;
        filter: alpha(opacity = 100);
        display: none;
        z-index: 2;
    }

    #popup {
        position: absolute;
        _position: absolute; /* hack for internet explorer 6 */
        height: 45px;
        width: 295px;
        background: snow;
        left: 500px;
        top: 250px;
        text-align: center;
        border: 2px solid #BDBDBD;
        text-decoration: none;
        font-family: cambria math;
        padding: 15px;
        font-size: 15px;
        -moz-box-shadow: 0 0 5px #D8D8D8;
        -webkit-box-shadow: 0 0 5px #D8D8D8;
        box-shadow: 0 0 5px #D8D8D8;
        overflow: auto;
    }

    #disabledLink {
        display: none;
    }
    .table
    {
        display: table;
        width: 100%;
    }
    .col1
    {
        display: table-cell;
        width:25%;
        vertical-align: top;
        padding-top: 200px;
    }
    .col2
    {
        display: table-cell;
        width: 90%;
        vertical-align: top;
        margin-left:0px;
        padding-left:0px;
    }
    </style>
       <script type="text/javascript">
    function loadPopUp() {
        $('#enclosePopUp').fadeIn("slow", function() {
            $("#main").css({
                "opacity" : "0.3",
                "z-index" : "1"
            });
            $("#disabledLink").show();
        });

    }
    function unLoadPopUp() {
        $('#enclosePopUp').fadeOut("slow", function() {
            $("#main").css({
                "opacity" : "1"
            });
            $("#disabledLink").hide();
        });
    }
</script>

</head>
<?php 
session_start();
$find=  $_GET['title'];
$email=$_SESSION['abc'];
mysql_connect("localhost","id279142_root","12345");
mysql_select_db("id279142_online_streaming");
$result=mysql_query("select counter,title,soundtrack,peak_pos,album_title ,path from songs_record where title='$find'") or die("failed");
$there=mysql_fetch_array($result);
$rand=$there['album_title'];
$see=mysql_query("select album_artist ,genre from album where album_title='$rand' ") ;
$see1=mysql_fetch_array($see);
if($there['title']==$find)
{
echo '<h1 class="head">'.$there['title'].'</h1>';?>


<ul>
  <li><a class="active" href="songs.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Profile</a>
    <div class="dropdown-content">
      <a href="mysongs.php">My songs</a>
      <a href="user_playlists.php">My Playlists</a>
       <a href="logoff.php">Log out</a>
    </div>
  </li >
  <li class="dropdown">
   <a href="#" class="dropbtn">Contact Us</a>
    <div class="dropdown-content">
        <a href="mailto:mritunjaymohitesh@gmail.com">E-mail</a>
        <a href="" > Call</a>
        </div>
  </li>

</ul>








<?php
$west=mysql_query("update songs_record set counter=counter+1 where title='$find'");
}
else 
{
	echo "failed";
}
$qw=$there['title'];
$_SESSION['ret']=$qw;
?>
<body background="scss/linkbg.jpg">

<hr>
<div class="table">
<div class="col1"><img src="scss/<?php echo $there['title'].'.jpg';?>" width="500px" height="500px"></div>
<div class="col2">
<h2 class="head">Artist:<br> <?php echo '<div class="artist" style="font-family:arial;    color: turquoise;">'.$see1['album_artist']; ?></h2>

<h2 class="head">Genre:<br> <?php echo '<div class="artist" style="font-family:arial;    color: turquoise;">'.$see1['genre']; ?></h2>

<h3 class="head">Album: <?php echo '<div class="artist" style="font-family:arial;    color: turquoise;">'.$there['album_title']; ?></h3>

<h3 class="head">Billboard peak position: <?php echo '<div class="artist" style="font-family:arial;    color: turquoise;">'.$there['peak_pos']; ?></h3><br><br>
<?php
echo '<div class="artist" style=" color: turquoise;">PLAY SONG<br><audio src="music/'.$there['path'].'" controls ></audio>';
?>
<p class="info" style="font-family: arial;">ALBUM INFO<?php echo '<a class="hi" href="descp.php?title='.$there['album_title'].'" target="_blank">click here</a>';?></p>

 
<div id="main">
    <a href="mysongs.php" target="_blank" style="text-decoration:none;font-family: arial; "><img src="scss/star.png" width="40px" height="40px"></a> &nbsp; &nbsp; &nbsp; &nbsp;
        <a href="#" onclick="return loadPopUp();"><img src="scss/add1.png" width="40px" height="40px"></a>
        <br> <a id="disabledLink" href="http://www.google.com">Google.com</a>
    </div>
    <div id='enclosePopUp'>
        <div id="popup">
        <?php
        	$tab=mysql_query("select playlists from user_playlists where email_id='$email'");
        	while($tab1=mysql_fetch_array($tab))
        	{
        		$sdf=$tab1['playlists'];
            echo '<a href="playlist_songs.php?title='.$sdf.'&gift='.$qw.'" target="_blank" >'.$sdf.'</a><br>';
             }
             echo '<a href="#"
                onclick="return unLoadPopUp();" style=" text-decoration: none;font-family:cambria math;color:lawngreen;">Close</a>';
                ?>

        </div>
    </div>
    </div>
    </div>
    


</body>
</html>