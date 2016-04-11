<?PHP
$_use_cm = true;
$_use_kg = true;
session_start();
$_SESSION['error_message'] = '';
$_SESSION['bmr'] = '';
$_SESSION['gender'] = '';
calculate();

function calculate()
{	
	$age = $_POST['age'];
	$height_cm = $_POST['height_cm'];
	$height = 0;
	$weight_kg = $_POST['weight_kg'];
	$weight = 0;
	$bmr = 0;
	global $_use_cm, $_use_kg;
	inputCheck();
	checkFormats();
	
	if($_use_cm == true){
		$height = $height_cm;
	}
	else{		
		$height = convertFeetAndInches();	
	}
	
	if($_use_kg == true){
		$weight = $weight_kg;
	}
	else{
		$weight = convertLbs();
	}
	//echo($weight . ' ' . $height . ' ' . $age);	
	if($_POST['gender'] == 1){
		//male
		$bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
	}
	else{
		//female		
	}		
	
	$_SESSION['bmr'] = round($bmr);
	$_SESSION['gender'] = $_POST['gender'];
	header('Location: daily_calorie_needs.php');
	//echo($bmr);
}

function inputCheck()
{
	$message = '';
	$_SESSION['error_message'] = '';
	$check = false;
	
	//user ignored height
	if($_POST['height_cm'] == '' && $_POST['height_feet'] == 0 && $_POST['height_inches'] == 0){
		$check = true;
		$message = $message . 'Invalid height. ';
	}
	
	//user tries to mess with height inches
	if(($_POST['height_cm'] != '' && ($_POST['height_feet'] != 0 && $_POST['height_inches'] == 0))){
		$check = true;
		$message = $message . 'Mismatching height formats. ';
	}
	
	//user tries to mess with height feet
	if(($_POST['height_cm'] != '' && ($_POST['height_feet'] == 0 && $_POST['height_inches'] != 0))){
		$check = true;
		$message = $message . 'Mismatching height formats. ';
	}
	
	//user ignored weight
	if($_POST['weight_kg'] == '' && $_POST['weight_lbs'] == ''){
		$check = true;
		$message = $message . 'Invalid weight. ';
	}
	
	
	if($check == true){
		$_SESSION['error_message'] = 'Errors were found. ' . $message;		
		echo($message);
		//add button to go back
	}	
}

function checkFormats()
{
	global $_use_cm, $_use_kg;

	if($_POST['height_cm'] != '' && $_POST['height_cm'] > 0){
		$_use_cm = true;
	}
	else{
		$_use_cm = false;
	}
	
	if($_POST['weight_kg'] != '' && $_POST['weight_kg'] > 0){
		$_use_kg = true;
	}
	else{
		$_use_kg = false;	
	}	
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