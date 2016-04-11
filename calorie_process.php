<?PHP

calculate();

function calculate()
{	
	$age = $_POST['age'];
	$height_cm = $_POST['height_cm'];
	$height = 0;
	$weight_kg = $_POST['weight_cm'];
	$weight = 0;
	inputCheck();		
	
	if($_POST['gender'] == 1){
		
	}
	else{
		echo('female');
	}
}

function inputCheck()
{
	$message = 'Errors were found. ';
	$check = false;
	
	//user ignored height
	if($_POST['height_cm'] == 'cm' && $_POST['height_feet'] == 0 && $_POST['height_inches'] == 0){
		$check = true;
		$message = $message . 'Invalid height. ';
	}
	
	//user tries to mess with height inches
	if(($_POST['height_cm'] != 'cm' && ($_POST['height_feet'] != 0 && $_POST['height_inches'] == 0))){
		$check = true;
		$message = $message . 'Mismatching height formats. ';
	}
	
	//user tries to mess with height feet
	if(($_POST['height_cm'] != 'cm' && ($_POST['height_feet'] == 0 && $_POST['height_inches'] != 0))){
		$check = true;
		$message = $message . 'Mismatching height formats. ';
	}
	
	//user ignored weight
	if($_POST['weight_kg'] == 'kg' && $_POST['weight_lbs'] == 'lbs'){
		$check = true;
		$message = $message . 'Invalid weight. ';
	}
	
	
	if($check == true){
		echo($message);	
		//header('Location: daily_calorie_needs.php');
	}
}

function checkWeightFormat()
{
	if($_POST['weight_kg'] == 'cm' || $_POST['weight_kg'] < 1&& ($_POST['weight_cm'] != 'lbs' && $_POST['weight_cm'] > 0)){		
		//we know the user uses lbs
		//unit conversion
		return convertLbs();		
	}
}

function convertLbs()
{
	return ($_POST['weight_lbs'] * 2.2);
}

function checkHeightFormat()
{
	if(($_POST['height_cm'] == 'cm' || $_POST['height_cm'] < 1) && ($_POST['height_feet'] != 'feet')){		
		//we know the user uses feet and inches
		//unit conversion
		return convertFeetAndInches();		
	}
}

function convertFeetAndInches()
{
	return (($_POST['height_feet'] * 12) + $_POST['height_inches']) * 2.5;
}


?>