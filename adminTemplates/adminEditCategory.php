<?php 
	include '../adminTemplates/manageTemplate.php';
?>

	<section class="right">


	
		<?php
			if (isset($filterCategory)) 
			echo '<h2>Edit Category</h2>';
			else
				echo '<h1>Add Category</h1>';
			echo '<h3>'.$warn.'</h3>';
			?>

			<form action="editcategory" method="POST">

				<input type="hidden" name="eid" value="<?php if(isset($filterCategory['id'])) echo $filterCategory['id']; ?>" >
				<label>Name</label>
				<input type="text" name="name" value="<?php if(isset($filterCategory['name'])) echo $filterCategory['name']; ?>" >
				<input type="submit" name="submit" value="Save Category" />

			</form>


</section>
	

