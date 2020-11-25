<?php
require 'function/functionStaff.php';
class StaffTest extends \PHPUnit_Framework_TestCase{

	function testInvalidData(){
		$row = [
			'username' => '',
			'name' => '',
			'contact' => '',
			'mail'=>'',
			'address' =>'',
			'password' =>''
		];
		$valid = testStaff($row);
		$this->assertFalse($valid);
	}


	function testInvalidUsername(){
		$row = [
			'username' => '',
			'name' => 'abcd',
			'contact' => '123456789',
			'mail'=>'abcd@gmail.com',
			'address' =>'sankhamul/kathmandu',
			'password' =>'abcd'
		];
		$valid = testStaff($row);
		$this->assertFalse($valid);
	}

	function testInvalidName(){
		$row = [
			'username' => 'abcd',
			'name' => '',
			'contact' => '123456789',
			'mail'=>'abcd@gmail.com',
			'address' =>'sankhamul/kathmandu',
			'password' =>'abcd'
		];
		$valid = testStaff($row);
		$this->assertFalse($valid);
	}

	function testInvalidContact(){
		$row = [
			'username' => 'abcd',
			'name' => 'abcd',
			'contact' => '',
			'mail'=>'abcd@gmail.com',
			'address' =>'sankhamul/kathmandu',
			'password' =>'abcd'
		];
		$valid = testStaff($row);
		$this->assertFalse($valid);
	}


	function testInvalidMail(){
		$row = [
			'username' => 'abcd',
			'name' => 'abcd',
			'contact' => '123456789',
			'mail'=>'',
			'address' =>'sankhamul/kathmandu',
			'password' =>'abcd'
		];
		$valid = testStaff($row);
		$this->assertFalse($valid);
	}

	function testInvalidAddress(){
		$row = [
			'username' => 'abcd',
			'name' => 'abcd',
			'contact' => '123456789',
			'mail'=>'abcd@gmail.com',
			'address' =>'',
			'password' =>'abcd'
		];
		$valid = testStaff($row);
		$this->assertFalse($valid);
	}

	function testInvalidPassword(){
		$row = [
			'username' => 'abcd',
			'name' => 'abcd',
			'contact' => '123456789',
			'mail'=>'abcd@gmail.com',
			'address' =>'sankhamul/kathmandu',
			'password' =>''
		];
		$valid = testStaff($row);
		$this->assertFalse($valid);
	}




}