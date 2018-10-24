<!DOCTYPE html>
<html>
<head>
	<title>Read Data From Text File</title>
</head>
<body>
	<br>
	<h3>Read Data From Text File</h3>
	<br>
	<?php 
		
		$read = file('mydata.txt');

		foreach ($read as $value) {
			echo trim($value)."<br>";
		}	
 	?>
</body>
</html>