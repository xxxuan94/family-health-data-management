<?php
	session_start();

	require_once("../sqlconf.php");
	$tbl_name = "user_auth_info";

	//get value form the index(login).php file
	$username = $_POST['user'];
	$password = $_POST['pass'];

	//set session to use it on the subsequent page
	$_SESSION['username'] = $username;

	//prevent the sql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

        //get value of id and set session
        $slt = "SELECT id FROM $tbl_name WHERE username='$username'";
        $id = mysql_query($slt) or die("cannot get the user id");

	//get id and set session
	$idrow = mysql_fetch_array($id);
        $_SESSION['id'] = $idrow['id'];

	//query the database for user
	$sql = "SELECT * FROM $tbl_name WHERE username='$username' and password='$password' ";
	$result = mysql_query($sql) or die("cannot query the database!");

	$row = mysql_fetch_array($result);
	if ($row['username']==$username && $row['password']==$password){
		//echo "login success!!!welcome ".$row['username'];
		header("Location:../views/homepage.php");
	}else{
		echo "invalid username or password!";
	}

?>
