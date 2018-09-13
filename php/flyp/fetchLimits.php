<?php
include('Flyp.php');
$data               = file_get_contents("php://input");
$dataJsonDecode     = json_decode($data);
$flypFrom           = $dataJsonDecode->altcoin;
$flypTo             = "BTC";

$flypme = new FlypMe\FlypMe();
$limits = $flypme->orderLimits($flypFrom, $flypTo);
//Check order uuid exists
if(isset($limits)){
	print(json_encode($limits));
}