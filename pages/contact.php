<?php
	if (isset($_POST['submitEnquiry'])) {
		$valid = testEnquiry($_POST['enquiry']);
		if($valid){
			$enquiry->insert($_POST['enquiry']);
			$warn = 'Enquiry completed wait for the response by the staff';
		}
		else
			$warn = 'Enquiry failed ';


	}

	$section =loadTemplate('../customerTemplates/contactTemplate.php',['warn'=>$warn]);


?>





