

	<?php 
	include '../adminTemplates/manageTemplate.php';
	?>


	<section class="right">

			<h2>Furniture</h2>



			<a class="new" href="editFurniture">Add new furniture</a><br><br>
			<?php echo '<h2>'.$warn.'</h2>';?>

<?php
			echo '<table>';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Name</th>';
			echo '<th style="width: 10%">Price</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '</tr>';


			foreach ($furnitureQuery as $furniture) {
				echo '<tr>';
				echo '<td>' . $furniture['name'] . '</td>';
				echo '<td>£' . $furniture['price'] . '</td>';
				echo '<td><a style="float: right" href="editFurniture&id=' . $furniture['id'] . '">Edit</a></td>';
				echo '<td><form method="post" action="adminFurniture">
				<input type="hidden" name="del" value="' . $furniture['id'] . '" />
				<input type="submit" name="delete" value="Delete" />
				</form></td>';

				echo '<td><form method="POST" action="adminFurniture">
				<input type="hidden" name="hid" value="' . $furniture['id'] . '" />
				<input type="submit" name="visibility" value="'.$furniture['visibility'].'" />
				</form></td>';
				echo '</tr>';
			}

			echo '</thead>';
			echo '</table>';


?>
</section>


		