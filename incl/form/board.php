<form action="app/actions/addboard.php" method="post">
	<fieldset>
	<ul id="teamlist">
		<p>Board state is formed as a 100 character string using the characters 'S', 'H', 'O', 'X'</p>
		<li>
			Board State:<br/>
			<input type="text" name="state">
		</li>
		<li>
			Match ID:<br/>
			<input type="number" name="match_id">
		</li>
		<li>
			<input type="submit" value="Add Board">
		</li>
	</ul>
	</fieldset>
</form>