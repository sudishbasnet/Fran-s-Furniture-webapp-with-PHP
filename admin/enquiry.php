<?php
	if (isset($_POST['complete'])) {
		$status = 'Completed';
		$pk =$_SESSION['loggedin'];
		$performer =$staff->find('id',$pk);
		$name =$performer->fetch();

		$criteria =[
			'status' =>$status,
			'performer' =>$name['name'],
			'id' =>$_POST['id']

		];
		$enquiry->update($criteria,'id');
		header('location:enquiry');
		}
	if (isset($_GET['del'])) {
		$delete =$enquiry->delete('id',$_GET['del']);
		header('location:enquiry');
	}

	$section =loadTemplate('../adminTemplates/enquiryTemplate.php',['listEnquiry'=>$listEnquiry]);

?>