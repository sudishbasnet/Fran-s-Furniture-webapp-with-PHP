<?php
	
	if (isset($_POST['delete'])) {
		$updates->delete('id',$_POST['del']);
		header('location:updates');
	}

	$section =loadTemplate('../adminTemplates/adminUpdatesTemplate.php',['findUpdates'=>$findUpdates]);