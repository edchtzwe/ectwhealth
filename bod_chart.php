<?php
session_start();
if($_SESSION['gender'] == 1){
	include_once('male_chart.php');
}
else{
	include_once('female_chart.php');
}
?>