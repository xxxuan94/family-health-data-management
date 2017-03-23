<!DOCTYPE html>
<?php
	session_start();
	echo "Hi, ".$_SESSION['username'].".Edit your medical form! ";
?>
<html>
<head>
	<title>Medical records</title>
	<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
	<div id='frm1'>
		<a href="homepage.php">Return</a>
		<form action='../process/medical_record_process.php' method='POST'>
			<p>
				<label>Syonptom </label><br>
				<input type='text' id='syonptom' name='syonptom' />
			</p>
			<p>
				<label>Start date </label><br>
				<input type='date' id='stdate' name='stdate' />
			</p>
			<p>
				<label>End date </label><br>
				<input type='date' id='endate' name='endate' />
			</p>
			<p>
				<label>Doctor </label><br>
				<input type='text' id='doctor' name='doctor' />
			</p>
			<p>
				<label>Drug </label><br>
				<input type='text' id='drug' name='drug' />
			</p>
			<p>
				<label>Diagnose </label><br>
				<input type='text' id='diagnose' name='diagnose' />
			</p>
			<p>
				<input type='submit' id='btn1' value='Save' />
			</p>
		</form>
			<?php include "../process/view_medical_record.php" ?>
			
	</div>

</body>
</html>
