<?php
	session_start();
	$_SESSION['calorie'] = null;
	$_SESSION['bmr'] = null;
	header('Location: daily_calorie_needs.php');
?>