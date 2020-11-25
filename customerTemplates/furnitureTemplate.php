<section class="left">
		<ul>
		<li>
			<h4>Filter Category</h4>
			<form action="furniture" method="POST">
			<input type="text" name="name" placeholder="furniture name">
			<select name="con" >
				<option value="new">New</option>
				<option value="second hand">Second Hand</option>
				<option value="">All</option>
			</select>
			<select name="cat">
			<?php 
			foreach ($categories1 as $row)
					echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
			?>		<option value="">All</option>
			</select>
	</form>
		</li>
		<?php 
			foreach ($categories as $key) { 
				echo '<li><a href="../public_html/index.php?page=furniture&cId='.$key['id'].'"> '.$key['name'].' </a></li>';
		}
	?>
		<li><a href="../public_html/index.php?page=furniture&condition=new">New </li>
		<li><a href="../public_html/index.php?page=furniture&condition=second hand">Second Hand </li>
	</ul>
	
</section>

<section class="right">
	<?php
	if (isset($_GET['cId'])) 
		echo '<h1>'.$name['name'].'</h1>';
	else
		echo '<h1>Furniture</h1>';
	?>

	<ul class="furniture">
	<?php
	foreach ($fur as $furniture) {
	if ($furniture['visibility']=='visible') {
				echo '<li>';
				echo '<div class="details">';

				
				$findImg =$images->find('furniture_id',$furniture['id']);
				echo '<div style="display:flex;flex-direction:row;">';
				foreach ($findImg as $key ) {
				if (file_exists('../images/furniture/' . $key['name'] )) {
					echo '<a href="../images/furniture/' . $key['name'] . '"><img style="height:150px;width:150px;margin:10px;box-shadow: 0 7px 10px 5px rgba(20, 30, 20, 20);;" src="../images/furniture/' . $key['name'] . '"/></a>';
				}

				}
				echo '</div>';

				echo '<h2>' . $furniture['name'] . '  ('.$furniture['furniture_condition'].'  )</h2>';
				
				echo '<h3>£' . $furniture['price'] . '</h3>';
				echo '<p>' . $furniture['description'] . '</p>';

				echo '</div>';
				echo '</li>';
			}
		}
			
	?>

	</ul>
</section>