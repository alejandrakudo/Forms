<?php
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $fullname = $fname." ".$lname;
   setcookie("name", $fullname);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome Screen</title>
</head>
<body>
    <h1>Welcome to CISC 282!</h1>
    <p>Your <a href="schedule.php">schedule</a> has been posted.</p>
</body>
</html>

