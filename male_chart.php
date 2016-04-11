<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Enter Page Title Here</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>

<STYLE type=text/css>BODY {
	FONT-SIZE: 12px; FONT-FAMILY: verdana, arial, sans-serif
}
</STYLE>
</HEAD>
<BODY>
<FIELDSET>
<LEGEND>Male Body Chart</LEGEND>
<FORM method=post action='estimate_process.php'>
<P><IMG border=0 alt="" src="12-19m.jpg"><IMG border=0 alt="" 
src="skinny.jpg"><IMG border=0 alt="" src="25+m.jpg"></P>
<P><INPUT type=radio value=0 name=bod><INPUT 
type=radio value=1 name=bod><INPUT type=radio 
value=2 name=bod></P>
<P><INPUT type=submit value=Estimate name=Estimate></FORM></FIELDSET>

<?php
//code to handle calorie display	
	echo('<p>' . 'Your estimated daily caloric allowance is ' . $_SESSION['calorie'] . '</p>');	
?>

</BODY></HTML>
