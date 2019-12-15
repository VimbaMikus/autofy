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
            <a class ="firstElement"href="autofy.html">Home</a>
            <a class ="active" href="find.php">Find</a>
            <a href="compare-menu.php">Compare</a>
            <a href="history.php">History</a>
            <a href="about-us.html">About Us</a>
            <a href="signin.html" class="rightSide"><i class="fas fa-user-circle"></i> Account</a>
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
                            <select class="selectBox" id="brand">
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
                            <select class="selectBox" id="year">
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
                            <select class="selectBox" id = "style" >
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
                            <select class="selectBox" id = "type">
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
                            <select class="selectBox" id = "trans">
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
                            <select class="selectBox" id = "model">
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
                           <input type="submit" class="ApplyButton" name="insert" value="Apply" onclick="ApllyClick()"/>
					</form>								   
                    </div>
					
					<table class="carboxes" id="Colorbg3">
                            <thead>
                            <tr>
                                <td class="filterBoxDrop">
                            <select class="filterBox" id = "sort" onChange = "ApllyClick()">
                                     <option disabled selected value="">Sort by year</option>
                                     <option value="A-Z">A-Z</option>
									 <option value="Z-A">Z-A</option>
                            </select>
                                </td>
                                </tr>
                            </thead>
                            <tbody id="data"></tbody>
                    </table>
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
                            <div class="copyright">
                                <p>© 2019 Autofy</p>
                            </div>
                        </div>
                    </div>
                </div>					

<script src="autofyFunctions.js"></script>
<script>
function ApllyClick() {
var SelectedBrand = document.getElementById("brand").value;
var SelectedModel = document.getElementById("model").value;
var SelectedYear = document.getElementById("year").value;
var SelectedStyle = document.getElementById("style").value;
var SelectedType = document.getElementById("type").value;
var SelectedTrans = document.getElementById("trans").value;
var Sort = document.getElementById("sort").value;

if ((SelectedBrand === "" )
	&& (SelectedModel === "")
	&& (SelectedYear === "")
	&& (SelectedStyle === "")
	&& (SelectedType === "")
	&& (SelectedTrans === "")) {
		window.alert("Insert at least 1 filter value!");
	} else {


var count = 0;
   
   var ajax = new XMLHttpRequest();
  ajax.open("GET", "dati.php", true);
  ajax.send();

  ajax.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          var data = JSON.parse(this.responseText);
          console.log(data);

          var html = "";
		  document.getElementById("data").innerHTML += html;
		  
		  if (Sort === "A-Z") {
		  data.sort(function(a, b) {
				return parseFloat(a.caryear) -  parseFloat(b.caryear);
				
			});
		  }
		  
		  if (Sort === "Z-A") {
		  data.sort(function(a, b) {
				return parseFloat(b.caryear) -  parseFloat(a.caryear);
				
			});
		  }
		  
          for(var a = 0; a < data.length; a++) {
              var brand = data[a].brand;
              var model = data[a].model;
              var caryear = data[a].caryear;
              var bodysytle = data[a].bodysytle;
              var fueltype = data[a].fueltype;
              var transmission = data[a].transmission;
			  var image = data[a].image;
			                   
                  if ((count%2 === 0) 
					&& (SelectedBrand === "" || data[a].brand === SelectedBrand )
					&& (SelectedModel === "" || data[a].model === SelectedModel )
					&& (SelectedYear === "" || data[a].caryear === SelectedYear )
					&& (SelectedStyle === "" || data[a].bodysytle === SelectedStyle )
					&& (SelectedType === "" || data[a].fueltype === SelectedType )
					&& (SelectedTrans === "" || data[a].transmission === SelectedTrans )){ 
				  count = count +1;
                  html+="<tr>";
                          html+="<td width='50%'>";
                       html+="<div class='carbox'>";
                          html+="<div class='carPicture' id='carPicture'>";
                          html+=image;
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

                  } else if ((SelectedBrand === "" || data[a].brand === SelectedBrand)
					&& (SelectedModel === "" || data[a].model === SelectedModel )
					&& (SelectedYear === "" || data[a].caryear === SelectedYear )
					&& (SelectedStyle === "" || data[a].bodysytle === SelectedStyle )
					&& (SelectedType === "" || data[a].fueltype === SelectedType )
					&& (SelectedTrans === "" || data[a].transmission === SelectedTrans )){
                      
					  count = count +1;
                      html +="<td width='50%'>";
                       html +="<div class='carbox'>";
                          html +="<div class='carPicture' id='carPicture'>";
                          html+=image;
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
                      html +="</tr>";
  
                              
          }
         
      }
					//iztiiram vecos datus
		var Table = document.getElementById("data");
		Table.innerHTML = "";
		
        document.getElementById("data").innerHTML += html;
      }
      
  };
	}
}
</script>
    </body>
    
</html>


           
