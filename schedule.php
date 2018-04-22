<?php 
   print_r($_COOKIE);
   $name = $_COOKIE["name"];
   echo "<h1>Schedule for $name</h1>";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Schedule</title>
</head>
<body>
    <table>
      <tr><td>CISC 282</td><td>Monday 10:30</td>
      <tr><td>CISC 260</td><td>Monday 11:30</td>
    </table>
</body>
</html>