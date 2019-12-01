<?php
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbName = "autofy";

$conn =  mysqli_connect($servername, $username, $password, $dbName);
		
$result = mysqli_query($conn, "SELECT brand, model, caryear,bodysytle,fueltype,transmission FROM cars");

$data = array();
while ($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;
}

echo json_encode($data);

										
											$sql = "SELECT iamge from cars";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) 
											{
												$images = array();
												while($row = $result->fetch_assoc()){ 
													$images[] =  '<img src="data:images/jpg;base64,' . base64_encode($row['iamge']) . '" width=250 height=130/>';
												}
											}
											
							?>

