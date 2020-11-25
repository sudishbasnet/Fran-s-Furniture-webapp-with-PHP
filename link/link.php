<?php
	session_start();
	require '../db/dbConnect.php';
	require '../function/loadTemplate.php';
	require '../function/functionFurniture.php';
	require '../function/functionStaff.php';
	require '../function/functionEnquiry.php';
	require '../function/functionUpdate.php';
	require '../class/database.php';
	
	
	// Calling all the database tables
	$furniture = new Database('furniture');
	$category =new Database('category');
	$updates =new Database('updates'); 
	$staff = new Database('staff');	
	$enquiry =new Database('enquiries');
	$images =new Database('images');

	//Selecting all the columns from database table
	$categories =$category->findAll();
	$categories1 =$category->findAll();
	$listEnquiry =$enquiry->findAll();
	$furnitureQuery =$furniture->findAll();
	$findUpdates =$updates->findAll();
	$Staff =$staff->findAll();

	//for warnings of invalid inputs
	$warn =null;

?>


