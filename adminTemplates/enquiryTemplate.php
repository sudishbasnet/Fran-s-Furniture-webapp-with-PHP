<?php 
	include '../adminTemplates/manageTemplate.php';
	?>
<section class="right" style="width: 90%;">

			<h2>Customer Enquiries</h2>

	<?php
			echo '<table>';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Customer Name</th>';
			echo '<th>Mail</th>';
			echo '<th>Contact</th>';
			echo '<th style="width:30%">Enquiry</th>';
			echo '<th>Performer</th>';
			echo '<th>Status</th>';
			echo '<th>Action</th>';
			echo '</tr>';


			foreach ($listEnquiry as $enquiry) {
				echo '<tr>';
				echo '<td>' . $enquiry['name'] . '</td>';
				echo '<td>' . $enquiry['mail'] . '</td>';
				echo '<td>' . $enquiry['contact'] . '</td>';
				echo '<td>' . $enquiry['enquiry'] . '</td>';
				echo '<td>' . $enquiry['performer']. '</td>';
				echo '<td><form method="POST" action="enquiry">
				<input type="hidden" name="id" value="' . $enquiry['id'] . '" />
				<input type="submit" name="complete" value="'.$enquiry['status'].'" />
				</form></td>';
				echo '<td><a href="enquiry&del='.$enquiry['id'].'">Delete</a>';
				echo '</tr>';
			}

			echo '</thead>';
			echo '</table>';


?>
</section>


		