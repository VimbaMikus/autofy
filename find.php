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
            <a href="#information">About Us</a>
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
                            <select class="selectBox" name="brand" action="dati.php">
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
                            <select class="selectBox">
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
                            <select class="selectBox">
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
                            <select class="selectBox">
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
                            <select class="selectBox">
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
                            <select class="selectBox">
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
                            <tbody id="data"></tbody>
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
                            <div class="copyright">
                                <p>© 2019 Autofy</p>
                            </div>
                        </div>
                    </div>
                </div>					

<script src="autofyFunctions.js"></script>
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
                          html+="<img src='/autofy/images/Audi_A4_2019_black_sedan.png'>";
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
                          if (data[a].brand === 'Audi'){
                          html+="<img src='/autofy/images/Audi_A4_2019_black_sedan.png'>";
                          }
                          if(data[a].brand === 'BMW') {
                          html+="<img src='/autofy/images/bmw_330_2019_white_wagon.png'>";	
                          }
                          if(data[a].brand === 'Lexus')
                          {
                          html+="<img src='/autofy/images/Lexus_NX_2019_white_offroad.png'>";
                          }
                          if(data[a].brand === 'Mercedes-Benz')
                          {
                          html+="<img src='/autofy/images/Mercedes-Benz_AMG-GT_2019_grey_coupe.png'>";
                          }
                          if(data[a].brand === 'Toyota')
                          {
                          html+="<img src='/autofy/images/Toyota_Corolla_2019_beige_sedan.png'>";
                          }
                          if(data[a].brand === 'Volkswagen')
                          {
                          html+="<img src='/autofy/images/Volkswagen_GTI_2019_black_Hatchback.png'>";
                          }
                          if(data[a].brand === 'Volvo')
                          {
                          html+="<img src='/autofy/images/Volvo_S90_2019_white_sedan.png'>";
                          }
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
      
          document.getElementById("data").innerHTML += html;
      }
      
  };
}
</script>
    </body>
    
</html>


           
