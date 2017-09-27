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
	<!-- javascript -->
	<script src="js/material.min.js"></script>
</body>
</html>



<?php
session_start();

function RunOnLoad(){
	if (isset($_POST['user']))
	{
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$user1="admin";
		$pass1="admin";
		if($user==$user1&&$pass==$pass1)
		{
			PrintCorrect();
		}
		else
		{
			PrintWrong();
		}
	}
	else
	{
		PrintInvalid();
		exit();
	}
}

function PrintCorrect()
{
print <<<END
<div class="container">
		<!-- TextFields -->
		<h3>Salary Calculator</h3>
		<form method="GET" action="payroll.php">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="names" name="names">
				<label class="mdl-textfield__label" for="names">Name</label>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="salary" name="salary">
				<label class="mdl-textfield__label" for="salary">Salary</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="workhrs" name="workhrs">
				<label class="mdl-textfield__label" for="workhrs">Hours Worked</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="lut" name="lut">
				<label class="mdl-textfield__label" for="lut">Absences/Lates</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
			<br>
			<br>
			<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit" name="submit" id="submit" value="Submit">
				Calculate
			</button>
		</form>
		<form method="GET" action="index.php">
			<button class="mdl-button mdl-js-button mdl-button--primary" onclick="location.href='http://www.index.php';"">
					Logout
			</button>
		</form>
END;
}
function PrintWrong()
{
print <<<END
<div class="container">
		<h4>Invalid Login... Try <a href=index.php> Again</a></h4>
</div>
END;
}
function PrintInvalid()
{
print <<<END
<div class="container">
		Sorry you cannot view this page!!!, Please try <a href=index.php> Again</a>
</div>
END;
}

RunOnLoad();
?>
