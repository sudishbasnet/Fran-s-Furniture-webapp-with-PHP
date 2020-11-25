<?php
require 'function/functionFurniture.php';
class FurnitureTest extends \PHPUnit_Framework_TestCase{

	function testInvalidData(){
		$row = [
			'name' => '',
			'description' => '',
			'price' => '',
			'categoryId'=>'',
			'furniture_condition' =>''
		];
		$valid = testFurniture($row);
		$this->assertFalse($valid);
	}


	function testInvalidName(){
		$row = [
			'name' => '',
			'description' => 'Wellfurnished bed',
			'price' => '2000',
			'categoryId'=>'1',
			'furniture_condition' =>'1'
		];
		$valid = testFurniture($row);
		$this->assertFalse($valid);
	}


	function testInvalidDescription(){
		$row = [
			'name' => 'Wardrobes',
			'description' => '',
			'price' => '2000',
			'categoryId'=>'1',
			'furniture_condition' =>'new'
		];
		$valid = testFurniture($row);
		$this->assertFalse($valid);
	}
	function testInvalidPrice(){
		$row = [
			'name' => 'Wardrobes',
			'description' => 'Wellfurnished bed',
			'price' => '',
			'categoryId'=>'1',
			'furniture_condition' =>'new'
		];
		$valid = testFurniture($row);
		$this->assertFalse($valid);
	}
	function testValidCategory(){
		$row = [
			'name' => 'Wardrobes',
			'description' => 'Wellfurnished bed',
			'price' => '2000',
			'categoryId'=>'',
			'furniture_condition' =>'new'
		];
		$valid = testFurniture($row);
		$this->assertFalse($valid);
	}

	function testValidCondition(){
		$row = [
			'name' => 'Wardrobes',
			'description' => 'Wellfurnished bed',
			'price' => '2000',
			'categoryId'=>'1',
			'furniture_condition' =>''
		];
		$valid = testFurniture($row);
		$this->assertFalse($valid);
	}
}