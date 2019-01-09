<!DOCTYPE html>
<html>
<head>
<title>My Movie Database</title>
</head>
<meta charset='utf-8' />
<body>
<h2>My Movie Database</h2>
<table border="2">
	<tr bgcolor=" #54AAFF">
	<td>Name</td>
	<td>Category</td>
	<td>Description</td>
	<td>Director</td>
	<td>Release Date</td>
	</tr>
	<tbody>
	<?php
	$movies = simplexml_load_file('movieXML.xml') or die("Error loading file!");
	foreach($movies->children() as $dvd)
	{
		echo '<tr>';
		echo '<td>'.$dvd->title.'</td>';
		echo '<td>'.$dvd['category'].'</td>';
		echo '<td>'.$dvd->description.'</td>';
		echo '<td>'.$dvd->director.'</td>';
		echo '<td>'.$dvd->releaseDate.'</td>';
		echo '</tr>';
	}
	?>
	</tbody>
</table>
</body>
</html>
