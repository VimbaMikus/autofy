<?php
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbName = "autofy";

$conn =  mysqli_connect($servername, $username, $password, $dbName);


		
$result = mysqli_query($conn, "select * from cars join history his on his.pk_cars = cars.pk_cars");

$data = array();
while ($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;
}

echo json_encode($data);

?>