<?php 

$location = array(
		"Charbagh" => 0,
		"Indira Nagar" => 10,
		"BBD" => 30,
		"Barabanki" => 60,
		"Faizabad" => 100,
		"Basti" => 150,
		"Gorakhpur" => 210
	);

$pickup = $_REQUEST['pickup'];
$drop = $_REQUEST['drop'];
$c_type = $_REQUEST['cab_type'];
$luggage = $_REQUEST['luggage'] == '' ? 0 : $_REQUEST['luggage'];

$fare = 0;
$distance = abs($location[$drop] - $location[$pickup]);

switch($c_type) {
	case 1: 
		$fare = 50;
		if($distance <= 10) {
			$fare += $distance * 13.50;
		} else if($distance > 10 && $distance <= 50) {
			$fare += 10 * 13.50;
			$fare += ($distance - 10) * 12.00;
		} else if($distance > 50 && $distance <= 100) {
			$fare += 10 * 13.50;
			$fare += 50 * 12.00;
			$fare += ($distance - 50 - 10) * 10.20;
		} else {
			$fare += 10 * 13.50;
			$fare += 50 * 12.00;
			$fare += 100 * 10.20;
			$fare += ($distance - 100 - 50 - 10) * 10.20;
		}
	; 
	break;
	case 2: 
		$fare = 150;
		if($distance <= 10) {
			$fare += $distance * 14.50;
		} else if($distance > 10 && $distance <= 50) {
			$fare += 10 * 14.50;
			$fare += ($distance - 10) * 13.00;
		} else if($distance > 50 && $distance <= 100) {
			$fare += 10 * 14.50;
			$fare += 50 * 13.00;
			$fare += ($distance - 50 - 10) * 11.20;
		} else {
			$fare += 10 * 14.50;
			$fare += 50 * 13.00;
			$fare += 100 * 11.20;
			$fare += ($distance - 100 - 50 - 10) * 9.50;
		}

		if($luggage < 10) {
			$fare += 50;
		} else if ($luggage > 10 && $luggage <= 20) {
			$fare += 100;
		} else {
			$fare += 200;
		}
	; 
	break;
	case 3: 
		$fare = 200;
		if($distance <= 10) {
			$fare += $distance * 15.50;
		} else if($distance > 10 && $distance <= 50) {
			$fare += 10 * 15.50;
			$fare += ($distance - 10) * 14.00;
		} else if($distance > 50 && $distance <= 100) {
			$fare += 10 * 15.50;
			$fare += 50 * 14.00;
			$fare += ($distance - 50 - 10) * 12.20;
		} else {
			$fare += 10 * 15.50;
			$fare += 50 * 14.00;
			$fare += 100 * 12.20;
			$fare += ($distance - 100 - 50 - 10) * 10.50;
		}

		if($luggage < 10) {
			$fare += 50;
		} else if ($luggage > 10 && $luggage <= 20) {
			$fare += 100;
		} else {
			$fare += 200;
		}
	; 
	break;
	case 4: 
		$fare = 250;
		if($distance <= 10) {
			$fare += $distance * 16.50;
		} else if($distance > 10 && $distance <= 50) {
			$fare += 10 * 16.50;
			$fare += ($distance - 10) * 15.00;
		} else if($distance > 50 && $distance <= 100) {
			$fare += 10 * 16.50;
			$fare += 50 * 15.00;
			$fare += ($distance - 50 - 10) * 13.20;
		} else {
			$fare += 10 * 16.50;
			$fare += 50 * 15.00;
			$fare += 100 * 13.20;
			$fare += ($distance - 100 - 50 - 10) * 11.50;
		}

		if($luggage < 10) {
			$fare += 50 * 2;
		} else if ($luggage > 10 && $luggage <= 20) {
			$fare += 100 * 2;
		} else {
			$fare += 200 * 2;
		}
	; 
	break;
}

echo 'Total Fare : <strong>Rs. '.$fare.'/-</strong>';


?>