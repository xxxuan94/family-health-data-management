<?php
	require_once("../sqlconf.php");

	session_start();
	$id = $_SESSION['id'];
	$username = $_SESSION['username'];

        $tbl_name = 'user_static_info';

	//get value from database
	$get_info = "SELECT * from $tbl_name WHERE id=$id";
	$result = mysql_query($get_info) or die("cannot query the database");

	$row = mysql_fetch_array($result);
	$id = $row['id'];
	$sex = $row['sex'];
	$birthday = $row['birthday'];
	$phone = $row['phone'];
	$email = $row['email'];
//	$address = $row['address'];

	echo "ID :       ".$id."<br>";
	echo "Name :     ".$username."<br>";
	echo "Sex :      ".$sex."<br>";
	echo "Birthday : ".$birthday."<br>";
	echo "Phone :    ".$phone."<br>";
	echo "Email :    ".$email."<br>";
//	echo "Address: ".$address."<br>";

?>

