﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Enter Page Title Here</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<STYLE type=text/css>BODY {
	FONT-SIZE: 12px; FONT-FAMILY: verdana, arial, sans-serif
}
</STYLE>
<?php
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
?>
</HEAD>
<BODY>
<FIELDSET>
<LEGEND>Daily Caloric Need</LEGEND> 
<FORM method=post action='calorie_process.php'>
<P>Age: <INPUT name=age pattern="\d+" required></P>
<P>Gender: <SELECT name=gender><OPTION selected value=1>Male</OPTION><OPTION 
  value=2>Female</OPTION></SELECT></P>
<P>Weight: <INPUT placeholder=kg name=weight_kg>&nbsp;OR <INPUT placeholder=lbs 
name=weight_lbs></P>
<P>Height: <INPUT placeholder=cm name=height_cm>&nbsp;OR <SELECT 
  name=height_feet><OPTION selected value=0>feet</OPTION><OPTION 
  value=1>4</OPTION><OPTION value=2>5</OPTION><OPTION value=3>6</OPTION><OPTION 
  value=4>7</OPTION></SELECT>&nbsp;AND <SELECT name=height_inches><OPTION 
  value=1>1</OPTION><OPTION value=2>2</OPTION><OPTION value=3>3</OPTION><OPTION 
  value=4>4</OPTION><OPTION value=5>5</OPTION><OPTION value=6>6</OPTION><OPTION 
  value=7>7</OPTION><OPTION value=8>8</OPTION><OPTION value=9>9</OPTION><OPTION 
  value=10>10</OPTION><OPTION value=11>11</OPTION><OPTION selected 
  value=0>inches</OPTION></SELECT></P>
<P><INPUT type=submit value=Submit name=submit><LABEL 
for=submit></LABEL></P></FORM>
<P></P></FIELDSET> 
<?php
	echo('<p>' . $_SESSION['error_message'] . '</p>');
	echo('Your BMR is ' . $_SESSION['bmr']);
	$_SESSION['error_message'] = '';
	$_SESSION['bmr'] = '';
?>
</BODY></HTML>
