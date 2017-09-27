<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payroll</title>

	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form method="POST" action="main.php">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="user" name="user">
				<label class="mdl-textfield__label" for="user">Name</label>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="password" id="pass" name="pass">
				<label class="mdl-textfield__label" for="emp">Password</label>
			</div>
			<br>
			<br>
			<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit" name="submit" id="submit" value="Submit">
				Login
			</button>
			<button class="mdl-button mdl-js-button mdl-button--primary" type="reset" value="Clear">
				Clear
			</button>
		</form>
	</div>

	<!-- javascript -->
	<script src="js/material.min.js"></script>
</body>
</html>