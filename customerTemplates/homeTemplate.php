<section style="padding: 5em;">
<h3>Welcome to Fran's Furniture. We're a family run furniture shop based in Northampton. We stock a wide variety of modern and antique furniture including laps, bookcases, beds and sofas.</h3><br><br>
<section class="update">
<?php
	foreach ($findUpdates as $key) {
		if (file_exists('../images/updates/' . $key['id'] . '.jpg')) {
			echo '<a href="../images/updates/' . $key['id'] . '.jpg"><img src="../images/updates/' . $key['id'] . '.jpg" style ="width:50%;" /></a>';
		}
		echo '<h2>'.$key['title'].' </h2>';
		echo '<h3> '.$key['description']. '</h3><br>';
		echo  '<h5> '.$key['date'] . '</h5><br><br><br>';
	}
?>
</section>
</section>
