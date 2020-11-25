<?php
require 'function/functionUpdate.php';
class UpdateTest extends \PHPUnit_Framework_TestCase{

	function testInvalidData(){
		$row = [
			'title' => '',
			'description' => ''
		];
		$valid = testUpdate($row);
		$this->assertFalse($valid);
	}

	function testInvalidTitle(){
		$row = [
			'title' => '',
			'description' => 'Happy Holiday'
		];
		$valid = testUpdate($row);
		$this->assertFalse($valid);
	}

	function testInvalidDescription(){
		$row = [
			'title' => 'Holiday Update',
			'description' => ''
		];
		$valid = testUpdate($row);
		$this->assertFalse($valid);
	}

}