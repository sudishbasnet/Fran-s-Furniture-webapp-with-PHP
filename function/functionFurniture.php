<?php
function testFurniture($row){
	$valid = true;
	if($row['name'] == '')
		$valid = false;
	if($row['description'] == '')
		$valid = false;
	if($row['price'] == '')
		$valid = false;
	if($row['categoryId'] == '')
		$valid = false;

	if($row['furniture_condition'] == '')
		$valid = false;

	return $valid;
}



