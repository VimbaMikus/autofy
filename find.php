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
            <a href="autofy.html">Home</a>
            <a class ="active firstElement" href="find.php">Find</a>
            <a href="compare-menu.php">Compare</a>
            <a href="history.php">History</a>
            <a href="#information">About Us</a>
            <a href="#login" class="rightSide"><i class="fas fa-user-circle"></i> Account</a>
            <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                <i class="fa fa-bars"></i>
              </a>
            </div>
        </div>






        <div class="container" id="container">

                <div class="content" id="Colorbg">
                    <div class="hero">
                        <img src="images/hero2.png" class="heroFind"/>
                    </div>
					
                    <div class="filter" id="Colorbg2">
					
                            <p>Brand</p>
							<form action="" method="post">
                            <select class="selectBox" name="brand" action="dati.php">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="Audi">Audi</option>
                                    <option value="Volkswagen">Volkswagen</option>
                                    <option value="Opel">Opel</option>
                                    <option value="BMW">BMW</option>
									
							
                            </select>
							</form>
                            <p>Year</p>
                            <select class="selectBox">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                            </select>
                            <p>Body Style</p>
                            <select class="selectBox">
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
                            <select class="selectBox">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="Petrol">Petrol</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="LPG">LPG</option>
                                    <option value="Hybrid">Hybrid</option>
                                    <option value="Electric">Electric</option>
                            </select>
                            <p>Transmission</p>
                            <select class="selectBox">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="Manual">Manual gearbox</option>
                                    <option value="Automatic">Automatic transmission</option>
                            </select>
                            <p>Color</p>
                            <select class="selectBox">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="Red">Red</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Black">Black</option>
                            </select>
                           <input type="submit" class="ApplyButton" name="insert" value="Apply" onclick="ApllyClick()"/>
					</form>		
							





     
                         
                    </div>
					
						<table class="carboxes" id="Colorbg3">
					<tbody id="data"></tbody>
                    </table>
					
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

                </div>
            </div>

<script>
function ApllyClick() {
     var ajax = new XMLHttpRequest();
    ajax.open("GET", "dati.php", true);
    ajax.send();

    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);

            var html = "";
            for(var a = 0; a < data.length; a++) {
                var brand = data[a].brand;
				var model = data[a].model;
				var caryear = data[a].caryear;
				var bodysytle = data[a].bodysytle;
				var fueltype = data[a].fueltype;
				var transmission = data[a].transmission;
             		
					if (a%2 === 0) { 
					html+="<tr>";
                            html+="<td width='40%'>";
                         html+="<div class='carbox'>";
                            html+="<div class='carPicture' id='carPicture'>";
							html+="<img src='audi_a4_2019.png'>";

                            html+="</div>";
                            html+="<div class='carCriteria' id='carCriteria'>";
                            html+="<table  class='criteria'>";										
                            html+="<tr height='20px'>";
                                html+="<td width='50%'>";
                                        html+="<div class='title'><p>Brand</p></div>";
                                html+="</td>";
                                html+="<td width='50%'>";
                                    html+="<div class='title'><p>Model</p></div>";
                                html+="</td>";
                            html+="</tr>";
                            html+="<tr >";
                                html+="<td>";
                                    html+="<div class='brand' id='brand'>";
                                        html+="<p>"+ brand + "</p>";
                                    html+="</div>";
                                html+="</td>";
                                html+="<td>";
                                        html+="<div class='model' id='model'>";
                                            html+="<p>" + model + "</p>";
                                        html+="</div>";
                                html+="</td>";
								 html+="</tr>";
                            html+="<tr>";
                                    html+="<td>";
                                        html+="<div class='title'><p>Year</p></div>";
                                    html+="</td>";
                                    html+="<td>";
                                        html+="<div class='title'><p>Body Style</p></div>";
                                    html+="</td>";
                            html+="</tr>";
                            html+="<tr>";
                                    html+="<td>";
                                        html+="<div class='year' id='year'>";
                                            html+="<p>"+ caryear+ "</p>";
                                        html+="</div>";
                                    html+="</td>";
                                    html+="<td>";
                                            html+="<div class='bodyStyle' id='bodyStyle'>";
                                                html+="<p>" + bodysytle + "</p>";
                                            html+="</div>";
                                    html+="</td>";
                            html+="</tr>";
                            html+="<tr>";
                                    html+="<td>";
                                        html+="<div class='title'><p>Fuel Type</p></div>";
                                    html+="</td>";
                                    html+="<td>";
                                        html+="<div class='title'><p>Transmission</p></div>";
                                    html+="</td>";
                            html+="</tr>";
                            html+="<tr>";
                                    html+="<td>";
                                        html+="<div class='fuelType' id='fuelType'>";
                                            html+="<p>" + fueltype + "</p>";
                                        html+="</div>";
                                    html+="</td>";
                                    html+="<td>";
                                            html+="<div class='transmission' id='transmission'>";
                                                html+="<p>"+ transmission + "</p>";
                                            html+="</div>";
                                    html+="</td>";
                            html+="</tr>";
							           html+="</table>";
                           html+="</div>";
                            html+="<div class='buttonsBlock'>";
                                html+="<button type='button' class='details'>Details</button>";
                            html+="</div>";
                        html+="</div>";
                        html+="</td>";
					} else {
						
						html +="<td width='40%'>";
                         html +="<div class='carbox'>";
                            html +="<div class='carPicture' id='carPicture'>";
							html+="<img src='audi_a4_2019.png'>";
							html +="</div>";
                            html +="<div class='carCriteria' id='carCriteria'>";
                            html +="<table  class='criteria'>";										
                            html +="<tr height='20px'>";
                                html +="<td width='50%'>";
                                        html +="<div class='title'><p>Brand</p></div>";
                                html +="</td>";
                                html +="<td width='50%'>";
                                    html +="<div class='title'><p>Model</p></div>";
                                html +="</td>";
                            html +="</tr>";
                            html +="<tr>";
                                html +="<td>";
                                    html +="<div class='brand' id='brand'>";
                                        html +="<p>"+ brand + "</p>";
                                    html +="</div>";
                                html +="</td>";
                                html +="<td>";
                                        html +="<div class='model' id='model'>";
                                            html +="<p>"+ model + "</p>";
                                        html +="</div>";
                                html +="</td>";
								 html +="</tr>"; 
                            html +="<tr>"; 
                                    html +="<td>"; 
                                        html +="<div class='title'><p>Year</p></div>"; 
                                    html +="</td>"; 
                                    html +="<td>"; 
                                        html +="<div class='title'><p>Body Style</p></div>"; 
                                    html +="</td>"; 
                            html +="</tr>"; 
                            html +="<tr>"; 
                                    html +="<td>"; 
                                        html +="<div class='year' id='year'>"; 
                                            html +="<p>"+ caryear + "</p>"; 
                                        html +="</div>"; 
                                    html +="</td>"; 
                                    html +="<td>"; 
                                            html +="<div class='bodyStyle' id='bodyStyle'>"; 
                                                html +="<p>" + bodysytle + "</p>"; 
                                            html +="</div>"; 
                                    html +="</td>"; 
                            html +="</tr>"; 
                            html +="<tr>"; 
                                    html +="<td>"; 
                                        html +="<div class='title'><p>Fuel Type</p></div>"; 
                                    html +="</td>"; 
                                    html +="<td>"; 
                                        html +="<div class='title'><p>Transmission</p></div>"; 
                                    html +="</td>"; 
                            html +="</tr>"; 
                            html +="<tr>"; 
                                    html +="<td>"; 
                                        html +="<div class='fuelType' id='fuelType'>"; 
                                            html +="<p>"+ fueltype + "</p>"; 
                                        html +="</div>"; 
                                    html +="</td>"; 
                                    html +="<td>"; 
                                            html +="<div class='transmission' id='transmission'>"; 
                                                html +="<p>" + transmission + "</p>"; 
                                            html +="</div>"; 
                                    html +="</td>"; 
								 html +="</tr>";
                            html +="</table>";
                            html +="</div>";
                            html +="<div class='buttonsBlock'>"; 
                                html +="<button type='button' class='details'>Details</button>";
                            html +="</div>";
                        html +="</div>";
                        html +="</td>";

						 
					}
					
                                
            }
            document.getElementById("data").innerHTML += html;
        }
		
    };
}
</script>

    <script src="autofyFunctions.js"></script>
    </body>
    
</html>


           
