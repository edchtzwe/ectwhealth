<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Daily Caloric Needs</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<link id="styles" title="cur_style" rel="stylesheet" type="text/css" href="style.css"/>
</HEAD>
<BODY>
<ASIDE CLASS='filler'></ASIDE>
<SECTION>
<FIELDSET>
<LEGEND>Daily Caloric Need</LEGEND> 
<FORM method=post action='calorie_process.php'>
<INPUT class=details name=age placeholder=age pattern="\d+" required>
<SELECT class=details id=gender name=gender>
<OPTION selected value=1>Male</OPTION>
<OPTION value=2>Female</OPTION></SELECT>
<P>
<INPUT class=details placeholder=kg name=weight_kg>
<INPUT class=details placeholder=cm name=height_cm>
</P>
<P><INPUT type=submit value=Submit name=submit><LABEL 
for=submit></LABEL></P></FORM>
<P></P></FIELDSET> 
</SECTION>
<ASIDE CLASS='filler'></ASIDE>
</BODY></HTML>