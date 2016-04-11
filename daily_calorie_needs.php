<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Daily Caloric Needs</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<STYLE type=text/css>BODY {
	FONT-SIZE: 12px; FONT-FAMILY: verdana, arial, sans-serif
}
</STYLE>
<?php
session_start();
?>
</HEAD>
<BODY>
<FIELDSET>
<LEGEND>Daily Caloric Need</LEGEND> 
<FORM method=post action='calorie_process.php'>
<P>Age: <INPUT name=age pattern="\d+" required></P>
<P>Gender: <SELECT name=gender><OPTION selected value=1>Male</OPTION><OPTION 
  value=2>Female</OPTION></SELECT></P>
<P>Weight: <INPUT placeholder=kg name=weight_kg>
<P>Height: <INPUT placeholder=cm name=height_cm></P>
<P><INPUT type=submit value=Submit name=submit><LABEL 
for=submit></LABEL></P></FORM>
<P></P></FIELDSET> 

<?php
//code to handle bmr display
	echo('<p>' . $_SESSION['error_message'] . '</p>');
	if($_SESSION['error_message'] == ''){
		echo('<p>' . 'Your BMR is ' . $_SESSION['bmr'] . '</p>');
	}
	$_SESSION['error_message'] = '';
?>

<?php
//display bod chart based on selected gender
	if($_SESSION['gender'] == 1){
		//male
		include_once('male_chart.php');
	}
	else if($_SESSION['gender'] == 2){
		//female
		include_once('female_chart.php');
	}
?>
</BODY></HTML>
