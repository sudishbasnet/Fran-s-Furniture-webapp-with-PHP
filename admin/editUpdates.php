<?php
	if (isset($_GET['id'])){
		$Upd =$updates->find('id',$_GET['id']);
		$selectUpdate =$Upd->fetch();
	}
	else
		$selectUpdate =[];

	if (isset($_POST['add'])) {
		$valid = testUpdate($_POST['update']);

		if($valid){
		$updates->save($_POST['update'],'id');
		if ($_FILES['image']['error'] == 0) {
			global $p;
			$fileName = $p->lastInsertId() . '.jpg';
			move_uploaded_file($_FILES['image']['tmp_name'], '../images/updates/' . $fileName);
		}
		header('location:updates');
		}
		else
			$warn = '<h3> Please Enter Right Input</h3>';

	}

	$section =loadTemplate('../adminTemplates/addUpdatesTemplate.php',['selectUpdate'=>$selectUpdate,'warn'=>$warn]);

?>