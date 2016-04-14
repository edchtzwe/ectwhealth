<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Daily Caloric Needs</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<link id="styles" title="cur_style" rel="stylesheet" type="text/css" href="style.css"/>
<?php
session_start();
?>
</HEAD>
<BODY>
<FIELDSET>
<LEGEND>Daily Caloric Need</LEGEND> 
<FORM method=post action='calorie_process.php'>
<INPUT class=details name=age placeholder=age pattern="\d+" required>
<SELECT class=details id=gender name=gender>
<OPTION selected value=1>Male</OPTION>
<OPTION value=2>Female</OPTION></SELECT>
<P>
<INPUT class=details pattern="\d+" placeholder=kg name=weight required>
<INPUT class=details pattern="\d+" placeholder=cm name=height required>
</P>
<P><INPUT type=submit value=Next name=submit><LABEL 
for=submit></LABEL></P></FORM>
<P></P></FIELDSET> 

<?php
	if($_SESSION['bmr'] != null)
	include_once('goals.php');
?>
</BODY></HTML>
