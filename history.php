		<?php
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbName = "autofy";

		$conn =  mysqli_connect($servername, $username, $password, $dbName);
		?>
 <!DOCTYPE html>
<html>
    <head>
        <title>Autofy</title>
        <meta charset="UTF-8">
        <meta name="description" content="Car comparison tool">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="autofy_styles.css">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600&display=swap" rel="stylesheet">
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/4b81e03c47.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="nav_bar" id="topNav">
            <div class="container">
            <img src="images/autofylogo.png" class="logo" />
            <a class ="firstElement" href="autofy.html">Home</a>
            <a href="find.php">Find</a>
            <a href="compare-menu.php">Compare</a>
            <a class ="active" href="history.php">History</a>
            <a href="about-us.html">About Us</a>
            <a href="signin.html" class="rightSide"><i class="fas fa-user-circle"></i> Account</a>
            <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                <i class="fa fa-bars"></i>
              </a>
            </div>
        </div>






        <div class="containerHistory">
                <div class="contentHistory">
                    <div class="hero">
                        <img src="images/hero4.png" class="heroFind"/>
                    
                    </div>                   
 
                <table class="carboxesHistory">
                        <tr>
                            <td width="100%">
                         <div class="carboxHistory">

                        <table>
                            <tr>
                            <td>
                            <div class="carPictureHistory" id="carPicture">
                            <img src="images/audi_a4_2019.png" />
                                            <?php
                                            			
											/*$sql = "SELECT iamge from cars where brand = 'Audi'";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) 
											{
												while($row = $result->fetch_assoc()){ 
													echo '<img src="data:images/jpg;base64,' . base64_encode($row['iamge']) . '" width=250 height=130/>';
												}
											}
                                            */      
											?>
                            </div>
                            </td>          
                        
                            <td>
                            <div class="carCriteriaHistory" id="carCriteria">
                                    <table  class="comparePageCriteria">										
                                    <tr height="20px">
                                        <td width="40%">
                                                <div class="title"><p>Brand</p></div>
                                        </td>
                                        <td width="35%">
                                            <div class="title"><p>Model</p></div>
                                        </td>
                                        <td width="35%">
                                                <div class="title"><p>Year</p></div>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td>
                                            <div class="brand" id="brand">
                                                <p>		Audi									
                                                    <?php			
                                                    /*$sql = "SELECT brand from cars where brand = 'Audi'";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) 
                                                    {
                                                        while($row = $result->fetch_assoc()){ 
                                                            echo $row["brand"];
                                                        }
                                                    }

                                                    */?>
                                                    </p>
                                            </div>
                                        </td>
                                        <td>
                                                <div class="model" id="model">
                                                    <p>	A4										
                                                    <?php			
                                                    /*$sql = "SELECT model from cars where brand = 'Audi'";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) 
                                                    {
                                                        while($row = $result->fetch_assoc()){ 
                                                            echo $row["model"];
                                                        }
                                                    }

                                                    */?>
                                                    </p>
                                                </div>
                                        </td>
                                        <td>
                                                <div class="year" id="year">
                                                    <p>2018
                                                    <?php			
                                                    /*$sql = "SELECT caryear from cars where brand = 'Audi'";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) 
                                                    {
                                                        while($row = $result->fetch_assoc()){ 
                                                            echo $row["caryear"];
                                                        }
                                                    }

                                                    */?></p>
                                                </div>
                                            </td>
                                    </tr>

                                    

                                    <tr>
                                            <td>
                                                <div class="title"><p>Body Style</p></div>
                                            </td>
                                            <td>
                                                <div class="title"><p>Fuel Type</p></div>
                                            </td>
                                            <td>
                                                <div class="title"><p>Transmission</p></div>
                                            </td>
                                    </tr>
                                    <tr>
                                            <td>
                                                    <div class="bodyStyle" id="bodyStyle">
                                                        <p>Sedan
                                                    <?php			
                                                    /*$sql = "SELECT bodysytle from cars where brand = 'Audi'";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) 
                                                    {
                                                        while($row = $result->fetch_assoc()){ 
                                                            echo $row["bodysytle"];
                                                        }
                                                    }

                                                    */?>
                                                    </p>
                                                    </div>
                                            </td>
                                            <td>
                                                <div class="fuelType" id="fuelType">
                                                    <p>Petrol
                                                    <?php			
                                                    /*$sql = "SELECT fueltype from cars where brand = 'Audi'";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) 
                                                    {
                                                        while($row = $result->fetch_assoc()){ 
                                                            echo $row["fueltype"];
                                                        }
                                                    }

                                                    */?></p>
                                                </div>
                                            </td>
                                            <td>
                                                    <div class="transmission" id="transmission">
                                                        <p>Manual
                                                    <?php			
                                                    /*$sql = "SELECT transmission from cars where brand = 'Audi'";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) 
                                                    {
                                                        while($row = $result->fetch_assoc()){ 
                                                            echo $row["transmission"];
                                                        }
                                                    }

                                                    */?></p>
                                                    </div>
                                            
                                            </td>
                                    </tr>
                                    </table>
                            </div>
                                                </td>
                            </tr>
                        
                        
                        </table>

                        
                            <div class="buttonsBlockHistory">
                            <button type="button" class="detailsHistory">Details</button>
                            <button type="button" class="deleteHistory">Delete</button>
                            </div>

                        </div>
                        </td>
                    </tr>    
                </table>
                

                </div>
            </div>











    <div class="footer">
        <div class="insideContainer">
            <div class="contentContainer">
            <div class="textboxes">
                <div class="textbox">
                    <p class="box"><b>Title</b></p>
                    <p class="box">Nullam in commodo dolor, at dapibus urnaccccxxxx. Phasellus eleifend at odio eu ornare. Mauris egetNullam in commodo dolor, at dapibus urna. Phasellus eleifend at odio eu ornare. Mauris eget</p>
                </div>
                <div class="textbox">
                        <p class="box"><b>Title</b></p>
                        <p class="box">Nullam in commodo dolor, at dapibus urna. Phasellus eleifend at odio eu ornare. Mauris egetNullam in commodo dolor, at dapibus urna. Phasellus eleifend at odio eu ornare. Mauris eget</p>
                </div>
                <div class="textbox">
                            <p class="box"><b>Title</b></p>
                            <p class="box">Nullam in commodo dolor, at dapibus urna. Phasellus eleifend at odio eu ornare. Mauris egetNullam in commodo dolor, at dapibus urna. Phasellus eleifend at odio eu ornare. Mauris eget</p>
                </div>
            </div>
            <div class="advertisingContainer">
            <div class="advertisingboxes">
                <div class="advertisingbox">
                    <img src="images/adv_banner1.png" width="100%" />
                </div>
                <div class="advertisingbox">
                    <img src="images/adv_banner2.png" width="100%"/>
                </div>             
            </div>
        </div>
            <div class="footerlinks">
                    <a class="disabled">© 2019 Autofy</a>
                    <a href="#terms-of-use">Terms of use</a>
                    <a href="#privacy-and-cookies">Privacy & Cookie Policy</a>
                    <a href="#advertise">Advertise With Us</a>
            </div>
            <div class="copyright"><p>© 2019 Autofy</p></div>
            </div>
        </div>
    </div>
    <script src="autofyFunctions.js"></script>
    </body>
    
</html>


           
