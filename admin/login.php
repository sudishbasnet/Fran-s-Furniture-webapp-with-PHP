<?php

	if (isset($_POST['submit'])) {
		$loginStaff =$staff->Find('username',$_POST['uName']);
		$fStaff =$loginStaff->fetch();
	
		if ($_POST['pswd'] == $fStaff['password'] || password_verify($_POST['pswd'], $fStaff['password'])){
			$_SESSION['loggedin'] = $fStaff['id'];
		}
		
		else
			echo '<script>alert("Incorrect Username or Password")</script>';

		if($_POST['pswd']=='' || $_POST['uName']=='')
			$warn = "Invalid Input";
		
	}


	$section =loadTemplate('../adminTemplates/loginTemplate.php',['warn'=>$warn]);

?>
