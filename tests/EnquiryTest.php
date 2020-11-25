<?php
require 'function/functionEnquiry.php';
class EnquiryTest extends \PHPUnit_Framework_TestCase{

	function testInvalidData(){
		
		$row = [
			'name' => '',
			'mail' => '',
			'contact' => '',
			'enquiry'=>''
		];
		$valid = testEnquiry($row);
		$this->assertFalse($valid);
	}

	function testInvalidName(){
		
		$row = [
			'name' => '',
			'mail' => 'abcd@gmail.com',
			'contact' => '123456789',
			'enquiry'=>'i got problem'
		];
		$valid = testEnquiry($row);
		$this->assertFalse($valid);
	}

	function testInvalidMail(){
		
		$row = [
			'name' => 'abcd',
			'mail' => '',
			'contact' => '123456789',
			'enquiry'=>'i got problem'
		];
		$valid = testEnquiry($row);
		$this->assertFalse($valid);
	}


	function testInvalidContact(){
		
		$row = [
			'name' => 'abcd',
			'mail' => 'abcd@gmail.com',
			'contact' => '',
			'enquiry'=>'i got problem'
		];
		$valid = testEnquiry($row);
		$this->assertFalse($valid);
	}

	function testInvalidEnquiry(){
		
		$row = [
			'name' => 'abcd',
			'mail' => 'abcd@gmail.com',
			'contact' => '123456789',
			'enquiry'=>''
		];
		$valid = testEnquiry($row);
		$this->assertFalse($valid);
	}

}
