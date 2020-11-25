<?php 
	include '../adminTemplates/manageTemplate.php';
	?>
<section class="right">

			<h2>Update Staff Information</h2>
			<?php echo '<h3>'.$warn.'</h3>';?>

				<form action="editStaff" method="POST" enctype="multipart/form-data">

				<input type="hidden" name="staff[id]" value="<?php if(isset($fetchStaff['id']))  echo $fetchStaff['id']; ?>" />
				<label>User Name</label>
				<input type="text" name="staff[username]" value="<?php if(isset($fetchStaff['id'])) echo $fetchStaff['username']; ?>" />

				<label>Name</label>
				<input type="text" name="staff[name]" value="<?php if(isset($fetchStaff['id'])) echo $fetchStaff['name']; ?>" />

				<label>Contact</label>
				<input type="text" name="staff[contact]" value="<?php if(isset($fetchStaff['id'])) echo $fetchStaff['contact']; ?>" />

				<label>Mail</label>
				<input type="text" name="staff[mail]" value="<?php if(isset($fetchStaff['id'])) echo $fetchStaff['mail']; ?>" />

				<label>Address</label>
				<input type="text" name="staff[address]" value="<?php if(isset($fetchStaff['id'])) echo $fetchStaff['address']; ?>" />

				<label>Password</label>
				<input type="text" name="staff[password]" value="<?php if(isset($fetchStaff['id'])) echo $fetchStaff['password']; ?>" />

				<input type="submit" name="submit" value="Save User" />

			</form>


</section>
	
	