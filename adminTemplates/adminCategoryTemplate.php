<?php 
	include '../adminTemplates/manageTemplate.php';
?>
	<section class="right">
	<?php
			echo '<h2>Categories</h2>

			<a class="new" href="editCategory">Add new category</a>';

			echo '<table>';
			echo '<tr>';
				echo '<th>Name</th>';
				echo '<th style="width: 5%">&nbsp;</th>';
				echo '<th style="width: 5%">&nbsp;</th>';
			echo '</tr>';

			foreach ($categories as $category) {
				echo '<tr>';
				echo '<td>' . $category['name'] . '</td>';
				echo '<td><a style="float: right" href="editcategory&id=' . $category['id'] . '">Edit</a></td>';
				echo '<td><form method="POST" action="categories">
				<input type="hidden" name="del" value="' . $category['id'] . '" />
				<input type="submit" name="delete" value="Delete" />
				</form></td>';
				echo '</tr>';
			}

			echo '</table>';

	?>
</section>
