<?php

function testUpdate($row){
	$valid = true;
	if($row['title'] == '')
		$valid = false;
	if($row['description'] == '')
		$valid = false;

	return $valid;

}