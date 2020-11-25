<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../css/styles.css"/>
		<title>Fran's Furniture - Home</title>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: 10:00-16:00</p>
			</aside>
			<h1>Fran's Furniture</h1>

		</section>
	</header>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="furniture">Our Furniture</a></li>
			<li><a href="about">About Us</a></li>
			<?php if (!isset($_SESSION['loggedin']))
			echo '<li><a href="contact">Contact us</a></li>';
			?>
			<li><a href="faq">FAQs</a></li>
			<?php
				if (!empty($_SESSION['loggedin']) == null){
						echo '<li><a href="login">Login</a></li>';
						}
				else{
					echo '<li><a href="enquiry">Manage</a></li>';
					echo '<li><a href ="../function/logout.php">Logout</a></li>';
				}
			?>	
		</ul>

	</nav>
<img src="../images/randombanner.php"/>
<main class="admin">
<?php
		echo $section;
?>
</main>
		


	<footer>
		&copy; Fran's Furniture <?php echo date("Y"); ?>
	</footer>
</body>
</html>