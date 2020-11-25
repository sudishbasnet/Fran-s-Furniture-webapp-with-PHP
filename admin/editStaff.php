<?php	

	if (isset($_GET['id'])) {
		$Staff =$staff->find('id',$_GET['id']);
		$fetchStaff =$Staff->fetch();
	}
	else
		$fetchStaff =[];

	if (isset($_POST['submit'])) {
		$valid =testStaff($_POST['staff']);
		if ($valid) {
			$staff->save($_POST['staff'],'id');
			header ('location:staff');
		}
		else
			$warn = '<h3> Please Enter Right Input</h3>';
		
	}



	$section =loadTemplate('../adminTemplates/adminEditStaff.php',['fetchStaff'=>$fetchStaff,'warn'=>$warn]);





?>