<?php 
	include '../adminTemplates/manageTemplate.php';
	?>
	<section class="right">
			<?php 
			if (isset($Furniture['id'])) 
			echo '<h2>Edit Furniture</h2>';
			else
			echo '<h2>Add Furniture</h2>';
			echo '<h2>'.$warn.'</h2>';

		?>
				<form action="editFurniture" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php if(isset($Furniture['id'])) echo $Furniture['id']; ?>" />
				<input type="hidden" name="furniture[id]" value="<?php if(isset($Furniture['id'])) echo $Furniture['id']; ?>" />
				<label>Name</label>
				<input type="text" name="furniture[name]" value="<?php if(isset($Furniture['name']))echo $Furniture['name']; ?>" />

				<label>Description</label>
				<textarea name="furniture[description]"><?php if(isset($Furniture['description'])) echo $Furniture['description']; ?></textarea>

				<label>Price</label>
				<input type="text" name="furniture[price]" value="<?php if(isset($Furniture['price'])) echo $Furniture['price']; ?>" />

				<label>Category</label>

				<select name="furniture[categoryId]">
				<?php
					
					foreach ($categories as $row) {
						if(isset($Furniture['id'])){
						if ($Furniture['categoryId'] == $row['id']) 
							echo '<option selected="selected" value="' . $row['id'] . '">' . $row['name'] . '</option>';
						else 
							echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
						}
						
						else 
							echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
					}
				

				?>

				</select>

				<label>
				<?php
				if (isset($Furniture['id'])) {
				$images =new Database('images');
				$findImg =$images->find('furniture_id',$Furniture['id']);
				echo '<div style="display:flex;flex-direction:row">';
				foreach ($findImg as $key ) {
				if (file_exists('../images/furniture/' . $key['name'] )) {
					echo '<a href="editFurniture&id='.$Furniture['id'].'&idel='.$key['id'].'">X</a>
							<a href="../images/furniture/' . $key['name'] . '"><img style="height:100px;width:100px;margin:5px" src="../images/furniture/' . $key['name'] . '"/></a>';
				}
			}
				}
				echo '</div>';

				?>
				</label>
				<label>Product image</label>

				<input type="file" name="imgName[]" multiple />
				<label>Condition</label>
				<select name="furniture[furniture_condition]">
					<?php
					if(isset($Furniture['id'])){
						if ($Furniture['furniture_condition'] == 'new') 
							echo '<option selected="selected" value="new">New</option>';
						else if ($Furniture['furniture_condition'] == 'second hand')  
							echo '<option selected="selected" value="second hand">Second Hand</option>';
						
					}
						echo '<option value="second hand">Second Hand</option><option value="new">New</option>';
					?>
					
				</select>

				<input type="submit" name="submit" value="Save Product" />

			</form>




</section>
	
	