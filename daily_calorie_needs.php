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
<LEGEND>Daily Caloric Need</LEGEND> 
<FORM method=post action='calorie_process.php'>
<P>Age: <INPUT name=age pattern="\d+" required></P>
<P>Gender: <SELECT name=gender><OPTION selected value=1>Male</OPTION><OPTION 
  value=2>Female</OPTION></SELECT></P>
<P>Weight: <INPUT value=kg name=weight_kg onfocus="this.value='';" >&nbsp;OR <INPUT value=lbs 
name=weight_lbs onfocus="this.value='';" ></P>
<P>Height: <INPUT value=cm name=height_cm onfocus="this.value='';" >&nbsp;OR <SELECT 
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
<P></P></FIELDSET> </BODY></HTML>
