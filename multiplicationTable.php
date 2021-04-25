<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$rows = 100;
$cols = 100;

for($row = 1; $row <= $rows; $row++){

	echo('<tr>');
	
	for($col = 1; $col <= $cols; $col++){

		echo('<td>' .$col*$row. '</td>');

	}
	echo('</tr>');

}

?>
