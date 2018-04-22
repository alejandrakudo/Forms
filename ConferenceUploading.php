<!DOCTYPE html>
<html>
<head>
  <title>Registration Receipt</title>
  <link rel="stylesheet" type="text/css" href="PHP_Styling.css">
</head>
<body>

<?php
	$customer = $_POST['cName'];
	$phone = $_POST['phone'];
	$ps = $_POST['pCode'];
	$email = $_POST['email'];
	$profession = $_POST['Profession'];
	echo "<h1>Registration Receipt for $customer</h1>";
	echo "<p>Name: $customer<br>";
	echo "Phone: $phone<br>";
	echo "Postal Code: $ps<br>";
	echo "Email: $email<br>";
	echo "Profession: $profession</p>";

?>

<h2>Transportation Information</h2>

<?php
	$location = $_POST['location'];
	$accomodation = $_POST['yes'];
	echo "<p>Transportation Location: $location<br>";
	echo "Accomodation: $accomodation</p>";
	


	//if (is_uploaded_file($_FILES['ProfilePhoto']['tmp_name'])) {
	//	if (move_uploaded_file($_FILES['ProfilePhoto']['tmp_name'], 'PhotoFile'.$customer.'jpg')){
	//			echo "File uploaded";
	//	}
	//	else {
	//		echo "Failed to upload file";
	//	}
	//}

	//$newFile = fopen("Registrations.txt", "w"); 
	//$myFile = fopen("Registrations.txt", "r");
	//while (!feof($myFile)) {
	//	$line = fgets($myFile);
	//}
	//fclose($myFile); 

?>




	