<?php
	
	if (isset($_POST['delete'])) {
		if ($_POST['del']==1) 
			echo "admin can't be removed";
		else{
		$staff->delete('id',$_POST['del']);
		header ('location:staff');
	}
	
	}

	$section =loadTemplate('../adminTemplates/staffTemplate.php',['Staff'=>$Staff]);

?>