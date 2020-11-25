<?php
	
function testStaff($row){
	$valid = true;
	if($row['username'] == '')
		$valid = false;
	if($row['name'] == '')
		$valid = false;
	if($row['contact'] == '')
		$valid =false;
	if($row['mail'] == '')
		$valid = false;
	if($row['address'] == '')
		$valid = false;

	if($row['password'] == '')
		$valid = false;

	return $valid;
}

?>