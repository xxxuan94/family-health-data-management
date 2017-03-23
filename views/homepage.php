<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
        <link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
	<center>Home page</center>
	<div id='frm1'>
		<h1>Basic information</h1>

		<?php include "../process/homepage_process.php";?>

		<p><?php
			echo '<a href="static_info_form.php">Complete your personal infos</a>';
		?></p>

		<br><br>
                <h1>Health And Medical</h1>
                <?php
                        echo '<p><a href="dynamic_info_form.php">Fill in & view your health records</a></p>
			<p><a href="medical_record_form.php">Fill in & view your medical records</a></p>'
                ?>

	</div>
</body>
</html>
