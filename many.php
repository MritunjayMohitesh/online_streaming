<!DOCTYPE html>
<html>
<head>
<title>Search Page</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css\many.css">
</head>
<body>
<br><br><br>
<div clas="go">
<?php 
$find=$_POST['search'];

mysql_connect("localhost","id279142_root","12345");
mysql_select_db("id279142_online_streaming");
$result=mysql_query("select title from songs_record where title like '%$find%'");
$counter=0;

if(!$result)
{
	die('could not get data:'.mysqlerror());
}
echo '<div class="up">Search list.........<br><br>';
while($here=mysql_fetch_array($result))
{
 
 echo '<a class="hi" href="link.php?title='.$here['title'].'">'.$here['title'].'<br></a>';
 $counter++;
 
}
/*$ggo=mysql_query("select album_title from album where title like '%$find%'");
if(!ggo)
{
	die('could not get data:'.mysqlerror());
}
while($herey=mysql_fetch_array($result))
{
 
 echo '<a class="hi" href="link.php?title='.$herey['title'].'">'.$herey['title'].'<br></a>';
 $counter++;
 
}*/



if($counter==0)
echo "<br>OOPS! No result found";

?>

</div>
 </body>
</html>