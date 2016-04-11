<?PHP
session_start();
$_SESSION['error_message'] = '';
$_SESSION['bmr'] = '';
$_SESSION['gender'] = '';
calculate();

function calculate()
{	
	$age = $_POST['age'];
	$height = $_POST['height'];	
	$weight = $_POST['weight'];	
	$bmr = 0;		
	
	//echo($weight . ' ' . $height . ' ' . $age);	
	if($_POST['gender'] == 1){
		//male
		$bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
	}
	else{
		//female
		$bmr = 655 + (9.6 * $weight) + (1.7 * $height) - (4.7 * $age);
	}		
	
	$_SESSION['bmr'] = round($bmr);
	$_SESSION['gender'] = $_POST['gender'];
	header('Location: daily_calorie_needs.php');
	//echo($bmr);
}

function convertLbs()
{	
	return ($_POST['weight_lbs'] * 2.2);
}


function convertFeetAndInches()
{
	return (($_POST['height_feet'] * 12) + $_POST['height_inches']) * 2.5;
}


?>