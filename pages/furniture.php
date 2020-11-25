<?php
	$name ="";

	if (isset($_POST['name'])) {
		if ($_POST['con']==null && $_POST['cat']==null) {
			$fur =$furniture->find3('name',$_POST['name']);
		}
		else
		$fur =$furniture->find2('name',$_POST['name'],'furniture_condition',$_POST['con'],'categoryId',$_POST['cat']);
	}
	else if(isset($_GET['condition']))
		$fur =$furniture->find('furniture_condition',$_GET['condition']);
	
	else if(isset($_GET['cId'])){
		$fur =$furniture->find('categoryId',$_GET['cId']);
		$c =$category->find('id',$_GET['cId']);
		$name =$c->fetch();
	}
	else
		$fur =$furniture->findAll();

	$array =[
			'fur'=>$fur,
			'categories'=>$categories,
			'images'=>$images,
			'categories1'=>$categories1,
			'name' => $name
	];

	$section =loadTemplate('../customerTemplates/furnitureTemplate.php',$array);

	?>



