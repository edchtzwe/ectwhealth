﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Enter Page Title Here</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<link id="styles" title="cur_style" rel="stylesheet" type="text/css" href="style.css"/>
</HEAD>
<BODY>
<FIELDSET>
<LEGEND>Select Goals</LEGEND>
<FORM method=post action='estimate_process.php'>
<P>
<P>
<INPUT type=radio value=0 id='a' name=bod>
<LABEL FOR='a'> Less than 80 Push Ups, Less than 40 Aussie Pullups </LABEL>
</P>
<P>
<INPUT type=radio id='b' value=1 name=bod>
<LABEL FOR='b'> More than 80 Push Ups, More than 40 Aussie Pullups </LABEL>
</P>
<p>
<INPUT type=radio value=2 id='c' name=bod>
<LABEL FOR='c'> More than 130 Push Ups, More than 50 Aussie Pullups </LABEL>
</P>
</P>

<P><INPUT type=submit value=Estimate name=Estimate></FORM></FIELDSET>

<?php
//code to handle calorie display	
	echo('<p>' . 'Your estimated daily caloric allowance is ' . $_SESSION['calorie'] . '</p>');	
?>

</BODY></HTML>
