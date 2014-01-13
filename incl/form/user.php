<form action="app/actions/adduser.php" method="post">
	<fieldset>
	<ul id="userlist">
		<li>
			Username:<br/>
			<input type="text" name="username">
		</li>
		<li>
			Password:<br/>
			<input type="password" name="password">
		</li>
		<li>
			Email:<br/>
			<input type="email" name="email">
		</li>
		<li>
			First Name:<br/>
			<input type="text" name="firstname">
		</li>
		<li>
			Last Name:<br/>
			<input type="text" name="username">
		</li>
		<li>
			Team:<br/>
			<select>

<?php
	$teams = get_team_names();
	for ($i = 0; $i < count($teams); $i++) {
		echo "<option value='" . $i . "'>" . $teams[$i] . "</option>";
	}

?>
			
			</select>
		</li>
		<li>
			<input type="submit" value="Add User">
		</li>
	</ul>
	</fieldset>
</form>