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
function RunOnLoad(){
if (isset($_GET['submit']))
{
$names = $_GET['names'];
$salary = $_GET['salary'];
$hrswork = $_GET['workhrs'];
$lates  = $_GET['lut'];
$gross=$salary*$hrswork;
$sss=500;
$pagibig=200;
$philhealth=100;
$tax=$gross*.20;
$totabs=$lates*$salary;
$totdeduc=$sss+$pagibig+$philhealth+$tax+$totabs;
$netpay=$gross-$totdeduc;

print <<<END
<div class="container">
<h4>
END;

print "<h4>Welcome $names!</h4>";

print "<br/>Gross Salary = <b>" .$gross . "</b>";
print "<br/><br/>Deduction:";
print "<br/>SSS = <b>" .$sss . "</b>";
print "<br/>Pagibig = <b>" .$pagibig . "</b>";
print "<br/>Philhealth = <b>" .$philhealth . "</b>";
print "<br/>Tax = <b>" .$tax . "</b>";
print "<br/>Total Absences/Lates = <b>" .$totabs . "</b>";
print "<br/>Total Deduction = <b>" .$totdeduc . "</b>";
print "<br/><br/>Your Netpay is <b>" .$netpay . "</b><br/><br/>";

print <<<END
<form method="GET" action="index.php">
	<button class="mdl-button mdl-js-button mdl-button--primary" onclick="location.href='http://www.index.php';"">
			Logout
	</button>
</form>
</h4>
</div>
END;
}
}

RunOnLoad();
?>