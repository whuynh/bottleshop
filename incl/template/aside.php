<aside>
	<?php
	if (is_logged_in()) {
		if (basename($_SERVER['PHP_SELF'], ".php") == "index") {
			include 'incl/menu/logout.php';
		} else if (basename($_SERVER['PHP_SELF'], ".php") == "play") {
			include 'incl/menu/player.php';
		} else {
			include 'incl/menu/logout.php';
		}
	} else {
		include 'incl/menu/login.php';
	}
	?>
</aside>