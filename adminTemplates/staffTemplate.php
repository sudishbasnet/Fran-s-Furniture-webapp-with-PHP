

	<?php 
	include '../adminTemplates/manageTemplate.php';
	?>


	<section class="right">

			<h2>Staff Details</h2>

			<a class="new" href="editStaff">Add new Staff</a>

<?php
			echo '<table>';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Username</th>';
			echo '<th style="width: 10%">Name</th>';
			echo '<th>Contact</th>';
			echo '<th>Mail</th>';
			echo '<th>Address</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '</tr>';


			foreach ($Staff as $row) {
				echo '<tr>';
				echo '<td>' . $row['username'] . '</td>';
				echo '<td>' . $row['name'] . '</td>';
				echo '<td>' . $row['contact'] . '</td>';
				echo '<td>' . $row['mail'] . '</td>';
				echo '<td>' . $row['address'] . '</td>';
				echo '<td><a style="float: right" href="editStaff&id=' . $row['id'] . '">Update</a></td>';
				echo '<td><form method="post" action="?admin=staff">
				<input type="hidden" name="del" value="' . $row['id'] . '" />
				<input type="submit" name="delete" value="Delete" />
				</form></td>';
				echo '</tr>';
			}

			echo '</thead>';
			echo '</table>';


?>
</section>


		