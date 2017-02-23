<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<title>Verkefni 4</title>
</head>
<body>
<?php 
	include "connection.php";
	include "query.php";
?>
<table border="1">	
<tr>
	<th>nafn</th>
	<th>myndir</th>
	</tr>
	<?php 
		
		foreach ($images as $entry) {
			echo '<tr><td>'.$entry[0].'</td><td>'.$entry[1].'</td></tr>';
		}
	 ?>
</table>
</body>
</html>