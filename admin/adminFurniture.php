<?php
	
	if (isset($_POST['delete'])) {
		$furniture->delete('id',$_POST['del']);
		$images->delete('furniture_id',$_POST['del']);
		header('location:adminFurniture');
	}
	if (isset($_POST['visibility'])) {
		$check =$furniture->find('id',$_POST['hid']);
		$fetch =$check->fetch();
		if ($fetch['visibility']=='visible') 
			$action ='hided';
		else
			$action ='visible';
	
		$criteria=[
			'visibility' => $action,
			'id' => $_POST['hid']
		];

		$furniture->update($criteria,'id');
		header ('location:adminFurniture');
	}
	if (isset($_GET['msg']))
		$warn =$_GET['msg'];

	$section =loadTemplate('../adminTemplates/adminFurnitureTemplate.php',['furnitureQuery'=>$furnitureQuery,'warn'=>$warn]);

?>
	