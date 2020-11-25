<?php

	if(isset($_SESSION['loggedin']) == null){
	
	echo '<h2>Log in</h2>';

	echo	'<form action="login" method="POST">
			<label>Enter Username</label>
			<input type="text" name="uName">
			<label>Enter Password</label>
			<input type="password" name="pswd">

			<input type="submit" name="submit" value="Log In" />
		</form>';
	echo '<h1>'.$warn.'</h1>';
	}

	else{
		echo '<section class="left">';
				require 'manageTemplate.php';
		echo '</section>';

		echo '<section class="right">
							<br><h2 style="text-align:center">You are now logged in</h2><br><br>
						</section>';
		}
	?>
