<?php
	include '../adminTemplates/manageTemplate.php';
	?>
<section class="right">

			<h2>Set Updates</h2>
			<?php echo '<h3>'.$warn.'</h3>';?>

			<form action="editUpdates" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="update[id]" value="<?php if(isset($selectUpdate['id'])) echo $selectUpdate['id']; ?>" >
				<label>Title</label>
				<input type="text" name="update[title]" value="<?php if(isset($selectUpdate['title'])) echo $selectUpdate['title']; ?>" />

				<label>Description</label>
				<textarea name="update[description]" ><?php if(isset($selectUpdate['description'])) echo $selectUpdate['description']; ?></textarea>
				<?php
					if (isset($selectUpdate['id'])) {
					if (file_exists('../images/updates/' . $selectUpdate['id'] . '.jpg')) {
						echo '<img style="width: 200px; clear: both" src="../images/updates/' . $selectUpdate['id'] . '.jpg" />';
						}
					}

				?>
				<label>Image</label>
				<input type="file" name="image" />

				<input type="submit" name="add" value="Post Update" />

			</form>

</section>