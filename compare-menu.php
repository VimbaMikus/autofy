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
            <a class ="active" href="compare-menu.php">Compare</a>
            <a href="history.php">History</a>
            <a href="about-us.html">About Us</a>
            <a href="signin.html" class="rightSide"><i class="fas fa-user-circle"></i> Account</a>
            <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                <i class="fa fa-bars"></i>
              </a>
            </div>
        </div>






        <div class="container" id="container">
                <div class="content">
                    <div class="hero">
                        <img src="images/hero3.png" class="heroFind"/> 
                    </div> 
                    <table class="compareBlock">
                        <tr>
                            <td>
                    <div class="compareMenu">
                    <h2>Choose criteria</h2>
                      <div class="compareCriteria">
                          <p>Brand</p>
                            <select class="selectBoxCompare">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="Audi">Audi</option>
                                    <option value="Volkswagen">Volkswagen</option>
                                    <option value="Opel">Opel</option>
                                    <option value="BMW">BMW</option>
                            </select>
                            <p>Year</p>
                            <select class="selectBoxCompare">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                            </select>
                            <p>Body Style</p>
                            <select class="selectBoxCompare">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="Cabriolet">Cabriolet</option>
                                    <option value="Coupe">Coupe</option>
                                    <option value="EstateCar">Estate Car</option>
                                    <option value="SUV">SUV</option>
                                    <option value="Saloon">Saloon</option>
                                    <option value="Van">Van</option>
                                    <option value="SmallCar">Small Car</option>
                            </select>
                            <p>Fuel Type</p>
                            <select class="selectBoxCompare">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="Petrol">Petrol</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="LPG">LPG</option>
                                    <option value="Hybrid">Hybrid</option>
                                    <option value="Electric">Electric</option>
                            </select>
                            <p>Transmission</p>
                            <select class="selectBoxCompare">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="Manual">Manual gearbox</option>
                                    <option value="Automatic">Automatic transmission</option>
                            </select>
                            <p>Color</p>
                            <select class="selectBoxCompare">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="Red">Red</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Black">Black</option>
                            </select>
                    </div>  
                    <div class="buttonBlockCompare">
                        <button type="button" class="saveCriteria" onclick="window.location.href='compare.php'">Compare</button>
                        <button type="button" class="addCar" onclick="window.location.href='compare-my-car.php'">Add your car</button>
                    </div>
    </td>
                    <tr>
    </table>

                </div>
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
            <div class="copyright"><p>© 2019 Autofy</p>
        </div>
            </div>
    </div>
    </div>
    <script src="autofyFunctions.js"></script>
    </body>
    
</html>


           
