<?php 
	include '../adminTemplates/manageTemplate.php';
?>
	<section class="right">
	<?php
			echo '<h2>Updates</h2>

			<a class="new" href="editUpdates">Add new Update</a>';

			echo '<table>';
			echo '<tr>';
				echo '<th>Title</th>';
				echo '<th>Description</th>';
				echo '<th>Date </th>';
				echo '<th style="width: 5%">&nbsp;</th>';
				echo '<th style="width: 5%">&nbsp;</th>';
			echo '</tr>';

			foreach ($findUpdates as $row) {
				echo '<tr>';
				echo '<td>' . $row['title'] . '</td>';
				echo '<td>' . $row['description'] . '</td>';
				echo '<td>' . $row['date'] . '</td>';
				echo '<td><a style="float: right" href="editUpdates&id=' . $row['id'] . '">Edit</a></td>';
				echo '<td><form method="POST" action="updates">
				<input type="hidden" name="del" value="' . $row['id'] . '" />
				<input type="submit" name="delete" value="Delete" />
				</form></td>';
				echo '</tr>';
			}

			echo '</table>';

	?>
</section>
