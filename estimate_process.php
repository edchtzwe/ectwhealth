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
		$calorie = $bmr * 1.2;
	}
	else if($bod == 1){
		$calorie = $bmr * 1.3;
	}
	else if($bod == 2){
		$calorie = $bmr * 1.4;
	}
	$_SESSION['calorie'] = round($calorie);
	header('Location: daily_calorie_needs.php');
}
?>