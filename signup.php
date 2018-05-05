<?php
	include 'header.php';

	$output = '';

?>

<section class="main-wrapper">
	<div class="main-wrapper">
		<form class="signup-form" action="includes/signup-inc.php" method="POST">
			<input type="text" name="firsts" placeholder="First name">
			<input type="text" name="lasts" placeholder="Last name">
			<input type="text" name="emails" placeholder="E-mail">
			<input type="text" name="uids" placeholder="Username">
			<input type="Password" name="pwds" placeholder="Password">
			<button type="submit" name="signup-submit">Sign Up</button>
		</form>
	</div>

</section>