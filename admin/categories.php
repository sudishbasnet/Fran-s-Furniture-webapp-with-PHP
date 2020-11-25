<?php 
	if(isset($_POST['delete'])){
		$category->delete('id',$_POST['del']);
		header ('location:categories');
	}

	$section =loadTemplate('../adminTemplates/adminCategoryTemplate.php',['categories'=>$categories]);

?>



