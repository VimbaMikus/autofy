		<?php
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbName = "autofy";

		$conn =  mysqli_connect($servername, $username, $password, $dbName);
		
		//Šis priekš listboxiem
		$sqlbrand=mysqli_query($conn, "select distinct brand from cars");
		$sqlmodel=mysqli_query($conn, "select distinct model from cars");
		$sqlbodystyle=mysqli_query($conn, "select distinct bodysytle from cars");
		$sqlfueltype=mysqli_query($conn, "select distinct fueltype from cars");
		$sqltrans=mysqli_query($conn, "select distinct transmission from cars");
		$sqlyear=mysqli_query($conn, "select distinct caryear from cars");
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
						  <form method="post" action="datiComp.php">
                            <select class="selectBoxCompare" name="brand" id = "brand">
                                    <option disabled selected value="">Choose your option</option>
									<?php
									while($row=mysqli_fetch_array($sqlbrand))
									{
									?>
				
                                    <option value="<?=$row["brand"];?>"><?=$row["brand"];?></option>
									<?php
									}
									?>
                            </select>
							</form>
                            <p>Year</p>
                            <select class="selectBoxCompare" id = "year">
									<option disabled selected value="">Choose your option</option>
									<?php
									while($row=mysqli_fetch_array($sqlyear))
									{
									?>
				
                                    <option value="<?=$row["caryear"];?>"><?=$row["caryear"];?></option>
									<?php
									}
									?>
                            </select>
                            <p>Body Style</p>
                            <select class="selectBoxCompare" id = "style">
									<option disabled selected value="">Choose your option</option>
									<?php
									while($row=mysqli_fetch_array($sqlbodystyle))
									{
									?>
				
                                    <option value="<?=$row["bodysytle"];?>"><?=$row["bodysytle"];?></option>
									<?php
									}
									?>
                            </select>
                            <p>Fuel Type</p>
                            <select class="selectBoxCompare" id = "type">
									<option disabled selected value="">Choose your option</option>
									<?php
									while($row=mysqli_fetch_array($sqlfueltype))
									{
									?>
				
                                    <option value="<?=$row["fueltype"];?>"><?=$row["fueltype"];?></option>
									<?php
									}
									?>
                            </select>
                            <p>Transmission</p>
                            <select class="selectBoxCompare" id = "trans">
									<option disabled selected value="">Choose your option</option>
									<?php
									while($row=mysqli_fetch_array($sqltrans))
									{
									?>
				
                                    <option value="<?=$row["transmission"];?>"><?=$row["transmission"];?></option>
									<?php
									}
									?>
                            </select>
                            <p>Model</p>
                            <select class="selectBoxCompare" id = "model">
                                     <option disabled selected value="">Choose your option</option>
									<?php
									while($row=mysqli_fetch_array($sqlmodel))
									{
									?>
				
                                    <option value="<?=$row["model"];?>"><?=$row["model"];?></option>
									<?php
									}
									?>
                            </select>
                    </div>  
                    <div class="buttonBlockCompare">
                        <input type="submit" class="saveCriteria" name="insert" value="Compare" onclick="ApllyClick()"/>
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
                    <p class="box"><b>Our Project</b></p>
                    <p class="box"><a href="find.php">Find a car that suits you best</a><br />
                    <a href="compare-menu.php">Car comparison tool</a><br />
                    <a href="about-us.html">Information</a></p>
                </div>
                <div class="textbox">
                        <p class="box"><b>Our Partners</b></p>
                    <p class="box"><a href="https://www.audi.com/en.html">Audi.com</a><br />
                    <a href="https://www.volkswagen.lv/lv.html">Volkswagen.com</a><br />
                    <a href="https://www.mercedes-benz.com/en/">Mercedes-benz.com</a></p>
                        </div>
                <div class="textbox">
                            <p class="box"><b>Leasing Companies</b></p>
                    <p class="box">We cooperate with the largest insurance companies to find the best offer. Find it out:<br />
                    <a href="https://www.mogo.lv/">Mogo.lv</a></p>
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
	<script>
function ApllyClick() {
if (document.getElementById("brand").value !== "") {
localStorage.setItem("brand", document.getElementById("brand").value);
} else { localStorage.setItem("brand",""); }
if (document.getElementById("model").value !== "") {
localStorage.setItem("model", document.getElementById("model").value);
} else { localStorage.setItem("model",""); }
if (document.getElementById("year").value !== "") {
localStorage.setItem("year", document.getElementById("year").value);
} else { localStorage.setItem("year",""); }
if (document.getElementById("style").value !== "") {
localStorage.setItem("style", document.getElementById("style").value);
} else { localStorage.setItem("style",""); }
if (document.getElementById("type").value !== "") {
localStorage.setItem("type", document.getElementById("type").value);
} else { localStorage.setItem("type",""); }
if (document.getElementById("trans").value !== "") {
localStorage.setItem("trans", document.getElementById("trans").value);
} else { localStorage.setItem("trans",""); }

if ((localStorage.getItem("brand") === "" )
	&& (localStorage.getItem("model") === "")
	&& (localStorage.getItem("year") === "")
	&& (localStorage.getItem("style") === "")
	&& (localStorage.getItem("type") === "")
	&& (localStorage.getItem("trans") === "")) {
		window.alert("Insert at least 1 filter value!");
} else { window.location.href='compare.php'}
}
	</script>
    </body>
    
</html>


           
