<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<?php
		if (is_logged_in()) {
			echo "<li><a href='play.php'>Play</a></li>";
		}
		?>
		<li><a href="admin.php">Admin</a></li>
	</ul>
</nav>