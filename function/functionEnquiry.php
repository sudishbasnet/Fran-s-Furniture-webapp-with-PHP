<?php
function testEnquiry($row){
	$valid = true;
	if($row['name'] == '')
		$valid = false;
	if($row['mail'] == '')
		$valid = false;
	if($row['contact'] == '')
		$valid = false;
	if($row['enquiry'] == '')
		$valid = false;

	return $valid;
}

