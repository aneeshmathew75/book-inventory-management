<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CodePen - Day 001 Login Form</title>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
	<link rel="stylesheet" href="./css/signup.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<form action="include/login.inc.php" method="post">
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
				<div class="login-form">
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">Email_ID</label>
							<input id="user" type="text" class="input" name="email" required>
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" name="password" required data-type="password">
						</div>

						<div class="group">
							<input type="submit" class="button" name="submit" value="Sign In">
						</div>
						<?php
						if (isset($_GET['error']))
							echo $_GET['error'];
						?>
						<div class="hr"></div>
					</div>
	</form>
	<!--SignUP .......-->
	<form action="include/signup.inc.php" method="POST">
		<div class="sign-up-htm">
			<div class="group">
				<label for="user" class="label">StoreName</label>
				<input id="user" type="text" class="input" name="storename" required>
			</div>
			<div class="group">
				<label for="pass" class="label">Email Address</label>
				<input id="pass" type="text" class="input" name="email" required>
			</div>

			<div class="group">
				<label for="pass" class="label">GST Number</label>
				<input id="pass" type="text" class="input" data-type="text" name="gstnumber" required>
			</div>
			<div class="group">
				<label for="pass" class="label">Password</label>
				<input id="pass" type="password" class="input" data-type="password" name="password" required>
			</div>
			<div class="group">
				<input id="check" type="checkbox" class="check" checked required>
				<label for="check"><span class="icon"></span> Term & Condtions</label>
			</div>
			<div class="group">
				<input type="submit" class="button" value="Sign Up">
			</div>
			<div class="hr"></div>
			<div class="foot-lnk">
				<label for="tab-1">Already Member?</a>
			</div>
		</div>
		</div>
		</div>
		</div>
	</form>
	<!-- partial -->

</body>

</html>