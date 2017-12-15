<!DOCTYPE html>
<html>
<head>
	<title>Songs</title>
	<meta charset="UTF-8">
	<link href="css\other.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
<style type="text/css">
  
a.link:link
{
   text-decoration: none;
}



</style>

<?php error_reporting(0);session_start();$find=$_SESSION['abc'];
mysql_connect("localhost","id279142_root","12345");
mysql_select_db("id279142_online_streaming")or die("bdj");
$qsl=mysql_query("select first_name from user_record where email_id='$find'");
$sql=mysql_fetch_array($qsl);
 echo '<div style="font-size:20px;font-family:arial;color:lawngreen;">Welcome '.$sql['first_name'].'</div>'; ?>

</head>

<body background='scss/songsbg.jpg'>
<h1 class="heading">ONLINEGo!!</h1>
  <form action="many.php" method="POST">
  <input type="text" name="search" id="search" class="search" placeholder="Music,Album,Singer" />
 <span class="arrow"> <input type="button" class="button" value="Search"></span>
</form>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Profile</a>
    <div class="dropdown-content">
      <a href="mysongs.php">My songs</a>
      <?php 
      
      
       
      echo '<a href="user_playlists.php">My Playlists</a>'; ?>
      <a href="logoff.php">Log out</a>
    </div>
  </li >
  <li class="dropdown">
   <a href="#" class="dropbtn">Contact Us</a>
   	<div class="dropdown-content">
  		<a href="mailto:mritunjaymohitesh@gmail.com">E-mail</a>
  		<a href="+919540092315" > Call</a>
  		</div>
  </li>

</ul>
<hr>



<div class="pl">
<div id="content">
    <div id="body">
      <div class="box" id="news">
        <div class="box-t">
          <div class="box-r">
            <div class="box-b">
              <div class="box-l">
                <div class="box-tr">
                  <div class="box-br">
                    <div class="box-bl">
                      <div class="box-tl">
                        <h2>OUR SELECTIONS</h2>
                        
                        <ul class="navl">
                          <?php
                            $find=$_GET['title'];
                            echo '<br>';



                              $play=mysql_query("select distinct playlist from playlist_songs") or die("failed");
                            for($t=0;$t<8;$t++)
                                { 
                                  $go=mysql_fetch_array($play);
                                  echo '<a  href="playlists.php?title='.$go['playlist'].'" style="text-decoration: none;font-family:arial;font-weight:bold;font-size:30px;">'.$go['playlist'].'<br><br></a>';
                                 }
                                 echo '<a href="allplaylists.php"style="font-size:20px;font-family:arial;color:black;">All Playlists</a>';
                            ?>
                        </ul>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box" id="hits">
        <div class="box-t">
          <div class="box-r">
            <div class="box-b">
              <div class="box-l">
                <div class="box-tr">
                  <div class="box-br">
                    <div class="box-bl">
                      <div class="box-tl">
                        <h2>TRENDING NOW</h2>
                        
                        <ul class="navl">
                          <?php
                         

                            $t=0;
                            $ago=mysql_query("select title ,counter from songs_record order by counter desc , title asc") or die("failed");
                            while($go=mysql_fetch_array($ago))
                                {
                                  if($t<50)
                                  {
                                  echo '<a  href="link.php?title='.$go['title'].'" style="text-decoration: none;font-family:arial">'.$go['title'].'<br><br></a>';
                                  $t++;
                                }
                                 }
                            ?>
                        </ul>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="box" id="hits">
              <div class="box-t">
          <div class="box-r">
            <div class="box-b">
              <div class="box-l">
                <div class="box-tr">
                  <div class="box-br">
                    <div class="box-bl">
                      <div class="box-tl">
                        <h2>MOODS</h2>
                        
                        <ul class="navl">
                          <?php
                            $find=$_GET['title'];
                            echo '<br>';



                              $play=mysql_query("select distinct mood from moods") or die("failed");
                            for($j=0;$j<8;$j++)
                                {
                                  $goa=mysql_fetch_array($play);
                                  echo '<a  href="moods.php?title='.$goa['mood'].'"  style="text-decoration: none;font-family:arial;font-weight:bold;font-size:30px;">'.$goa['mood'].'<br><br></a>';
                                 }
                                 echo '<a href="allmoods.php"style="font-size:20px;font-family:arial;color:black;">All Moods</a>';
                            ?>
                        </ul>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</div></div>
<div>
</div>
<footer>
  <?php
include(footer.php);
  ?>
</footer>

</body>


</html>
