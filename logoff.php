<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
</head>
<body>
<?php
session_destroy();
header("location:index.php");
?>
</body>
</html>