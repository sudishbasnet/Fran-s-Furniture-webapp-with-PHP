<section class="left">
		<ul>
			<li><a href="categories">Categories</a></li>
			<li><a href="adminFurniture">Furnitures</a></li>
			<?php 
			if ($_SESSION['loggedin']==1) { ?>
			<li><a href="staff">Staff</a></li>
			<?php }  ?>
			<li><a href="enquiry">Enquiry</a></li>
			<li><a href="updates">Post Updates</a></li>

		</ul>
</section>
