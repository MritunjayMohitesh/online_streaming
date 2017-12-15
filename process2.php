<!DOCTYPE html>
<html>
<head>
    <title>SIGNUP PAGE</title>
</head>
<body>


<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    session_start();

    $link = mysqli_connect("localhost", "id279142_root", "12345", "id279142_online_streaming");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $fname= mysqli_real_escape_string($link, $_POST['fname']);
    $lname= mysqli_real_escape_string($link, $_POST['lname']);
    $eid= mysqli_real_escape_string($link, $_POST['eid']);
    $pass= mysqli_real_escape_string($link, $_POST['pass']);
    $_SESSION['abc']=$eid;
    //$_SESSION['pse']=$pass;
  

    // attempt insert query execution
    $sql = "INSERT INTO user_record(first_name,last_name,email_id,password) VALUES ('$fname','$lname','$eid','$pass')";

    if(mysqli_query($link, $sql)){
        header("Location:songs.php");
    } else{
        echo "User Already Exists!!! ";
    }

    // close connection
    mysqli_close($link);
?>



</body>
</html>