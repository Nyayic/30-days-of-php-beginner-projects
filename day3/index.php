<!DOCTYPE html>
<html>
<head>
	<title>Rectangle: Area and Perimeter Calculator</title>
</head>
<body>
	<h1>Rectangle: Area and Perimeter Calculator</h1>
	<form method="post">
		<label for="length">Length:</label>
		<input type="number" name="length" id="length"><br><br>
		<label for="width">Width:</label>
		<input type="number" name="width" id="width"><br><br>
		<input type="submit" name="submit" value="Calculate">
	</form>
	
	<?php 
	if(isset($_POST['submit'])) {
		// Retrieve user input
		$length = $_POST['length'];
		$width = $_POST['width'];

		// Calculate area and perimeter
		$area = $length * $width;
		$perimeter = 2 * ($length + $width);

		// Display the results
		echo "<br>Length: " . $length;
		echo "<br>Width: " . $width;
		echo "<br>Area: " . $area;
		echo "<br>Perimeter: " . $perimeter;
	}
	?>
</body>
</html>
