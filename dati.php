<?php
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbName = "autofy";

$conn =  mysqli_connect($servername, $username, $password, $dbName);


		
$result = mysqli_query($conn, "SELECT * FROM cars");

$data = array();
while ($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;
}

echo json_encode($data);

?>