<?php
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbName = "autofy";

$conn =  mysqli_connect($servername, $username, $password, $dbName);


		
$brand = filter_input(INPUT_POST, 'brand');
$model = filter_input(INPUT_POST, 'model');
$caryear = filter_input(INPUT_POST, 'year');
$bodystyle = filter_input(INPUT_POST, 'style');
$type = filter_input(INPUT_POST, 'type');
$transmission = filter_input(INPUT_POST, 'transmision');
$sql = "INSERT INTO cars (brand, caryear, bodysytle, fueltype, transmission, model)
values ('$brand','$caryear', '$bodystyle' , '$type' , '$transmission' , '$model')";

if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}

?>