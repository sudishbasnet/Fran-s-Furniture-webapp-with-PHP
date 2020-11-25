<?php
	
	$saveImage =new database('images');	
    $dir = "../images/furniture/";

	if(isset($_GET['id']) || (isset($_GET['id']) && isset($_GET['idel']))){
		if (isset($_GET['idel'])) {
			$delete =$images->delete('id',$_GET['idel']);
		}
		$Furniture1 =$furniture->Find('id',$_GET['id']);
		$Furniture =$Furniture1->fetch();
	}
	else
		$Furniture =[];

	
	if (isset($_POST['submit'])) {
		$valid =testFurniture($_POST['furniture']);
		if($valid){
			$furniture->save($_POST['furniture'],'id');


			if(!empty(array_filter($_FILES['imgName']['name']))){
	    	global $p;
			$fId = $p->lastInsertId();
	        foreach($_FILES['imgName']['name'] as $key=>$val){
	            $fileName = basename($_FILES['imgName']['name'][$key]);
	            $imgDir = $dir . $fileName;
	            $format = pathinfo($imgDir,PATHINFO_EXTENSION);
	                if(move_uploaded_file($_FILES["imgName"]["tmp_name"][$key], $imgDir)){
	                	if ($_POST['id']==null) {
	                		$criteria1 =[
			            		'name' =>$fileName,
			            		'furniture_id' =>$fId   
			            	];
	                	}
	                	else{
	                		$criteria1 =[
			            		'name' =>$fileName,
			            		'furniture_id' =>$_POST['id']   
			            	];
	                	}

	               	    	
			           		$insert = $saveImage->insert($criteria1);
			           	
			           }
	            
	        }
	      	  
	    }
	    $warn ="Furniture Saved";
	    header ('location:adminFurniture&msg='.$warn.'');	
		}
		else
			$warn = '<h3> Please Enter Right Input</h3>';
				

	    		
	}

	$section =loadTemplate("../adminTemplates/adminEditFurniture.php",['Furniture'=>$Furniture,'categories'=>$categories,'warn'=>$warn]);
?>


	
