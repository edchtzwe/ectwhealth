<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Enter Page Title Here</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<link id="styles" title="cur_style" rel="stylesheet" type="text/css" href="style.css"/>
</HEAD>
<BODY>
<FIELDSET>
<LEGEND>Male Body Chart</LEGEND>
<FORM method=post action='estimate_process.php'>
<P>
<INPUT type=radio value=0 id='a' name=bod>
<LABEL FOR='a'> <img class='bodpic' src="men-fat.jpg"/> </LABEL>
<INPUT type=radio id='b' value=1 name=bod>
<LABEL FOR='b'> <img class='bodpic' src="men-regular.jpg"/> </LABEL>
<INPUT type=radio value=2 id='c' name=bod>
<LABEL FOR='c'> <img class='bodpic' src="men-fit.jpg"/> </LABEL>
</P>

<P><INPUT type=submit value=Estimate name=Estimate></FORM></FIELDSET>

<?php
//code to handle calorie display	
	echo('<p>' . 'Your estimated daily caloric allowance is ' . $_SESSION['calorie'] . '</p>');	
?>

</BODY></HTML>
