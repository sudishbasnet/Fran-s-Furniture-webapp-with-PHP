<?php
	require '../link/link.php';
	
	if(isset($_GET['page'])){
		require '../pages/' . $_GET['page'] . '.php';
	}
	else if(isset($_GET['admin'])){
		if (isset($_SESSION['loggedin'])) {
			require '../admin/' . $_GET['admin'] . '.php';
		}
		else
			require '../admin/login.php';
		
	}
	else
		require '../pages/home.php';

	$temp =[
		'section' => $section
	];
	echo loadTemplate('../customerTemplates/layout.php',$temp);

?>


