<?php

session_start();
$_SESSION['calorie'] = '';
calculate();

function calculate()
{
	$bmr = $_SESSION['bmr'];
	$bod = $_POST['bod'];
	$calorie = 0;
	
	if($bod == 0){
		$calorie = $bmr * 1.4;
	}
	else if($bod == 1){
		$calorie = $bmr * 1.6;
	}
	else if($bod == 2){
		$calorie = $bmr * 1.3;
	}
	$_SESSION['calorie'] = $calorie;
	header('Location: daily_calorie_needs.php');
}
?>