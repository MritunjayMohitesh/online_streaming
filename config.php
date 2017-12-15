<!DOCTYPE html>
<html>
<body>
<?php
 $link = mysqli_connect("localhost", "id279142_root", "12345", "id279142_online_streaming");
$a=mysql_query('select path from songs_record where song_id=1');
$b=mysql_fetch_array($a);
?>
<audio controls loop src="<?php echo $b['path']?>">
    Your browser does not support the video tag.
</audio>
</body>