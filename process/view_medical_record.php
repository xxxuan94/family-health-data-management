<?php
	session_start();
	$id = $_SESSION['id'];

        require_once("../sqlconf.php");
        $tbl_name = "user_medical_record";

	// sending query
	$result = mysql_query("SELECT * FROM $tbl_name where id=$id")
	or die("Query to show fields from table failed");


	$fields_num = mysql_num_fields($result);

	echo "<table border='1'><tr>";
	// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{
		$field = mysql_fetch_field($result);
		echo "<td>{$field->name}</td>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
		echo "<tr>";

		// $row is array... foreach( .. ) puts every element
		// of $row to $cell variable
		foreach($row as $cell)
			echo "<td>$cell</td>";

		echo "</tr>\n";
	}
	mysql_free_result($result);




	//set var of syonptom patterns of Diabetes 
	$dia_syonptom1 = "frequent\s*urination";
	$dia_syonptom2 = "increased\s*thirst";
	$dia_syonptom3 = "increased\s*hunger";
	$dia_syonptom4 = "weight\s*loss";

	//analyze the medical record
	$syonptom_col = mysql_query("SELECT syonptom,diagnose FROM $tbl_name where id=$id");
	$each_syonptom = mysql_fetch_array($syonptom_col);

	if ($each_syonptom->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "syonptom: " . $row["syonptom"]. " - diagnose: " . $row["diagnose"]. "<br>";
		}
	} else {
		echo "0 results";
	}


?>
