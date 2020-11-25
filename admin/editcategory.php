<?php
	if (isset($_GET['id'])) {
		$Category =$category->Find('id',$_GET['id']);
		$filterCategory =$Category->fetch();
	}
	else
		$filterCategory =[];
	
	if (isset($_POST['submit'])) {
		if ($_POST['name']=='') 
			$warn = "Invalid Input";
		else{
		$criteria =[
			'name' => $_POST['name'],
			'id' =>$_POST['eid']
		];
		$category->save($criteria,'id');
		header ('location:categories');
		}
	}

	

	$section =loadTemplate('../adminTemplates/adminEditCategory.php',['filterCategory'=>$filterCategory,'warn'=>$warn]);
?>
	