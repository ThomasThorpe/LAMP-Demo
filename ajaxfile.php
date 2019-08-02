<?php

include "config.php";

$return_arr = array();

$query = "SELECT * FROM employees";
$result = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($result)){
	$id = $row['id'];
	$name = $row['name'];
	$address = $row['address'];
	$salary	= $row['salary'];

	$return_arr[] = array("id" => $id,
			"name" => $name,
			"address" => $address,
			"salary" => $salary);
}
echo json_encode($return_arr);
?>
