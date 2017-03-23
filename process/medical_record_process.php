<?php
	session_start();

	require_once("../sqlconf.php");
	$tbl_name = "user_medical_record";

	//get values from the medical_record_form.php
	$syonptom = $_POST['syonptom'];
	$stdate = $_POST['stdate'];
	$endate = $_POST['endate'];
	$doctor = $_POST['doctor'];
	$drug = $_POST['drug'];
	$diagnose = $_POST['diagnose'];

	//get session id
	$id = $_SESSION['id'];


	//prevent the sql injection
//	$heigh = stripcslashes($heigh);
//	$weigth = stripcslashes($weigth);
//	$heigh = mysql_real_escape_string($heigh);
//	$weigth = mysql_real_escape_string($weigth);

	//insert values into database
	$eddate = date("Y-m-d");
	$sql = "insert into $tbl_name (recordId,id,syonptom,startdate,enddate,doctor,diagnose,drug,editdate) values('$recordId','$id','$syonptom','$stdate','$endate','$doctor','$diagnose','$drug','$eddate')";
	mysql_query($sql) or die("cannot insert record!");

	header("Location:../views/medical_record_form.php");

?>
