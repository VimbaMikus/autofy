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
                <div class="content" id="Colorbg">
                    <div class="hero">
                        <img src="images/hero3.png" class="heroFind"/>                   
                    </div>


                    <table class="carboxesCompare" id="carboxesCompare">
                       
<tr>
	<tbody id="data"></tbody>
    <td colspan="2"><button type="button" class="CompareButton" onclick="window.location.href='compare-result.php'">Compare</button></td>
    <td></td>
</tr>

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
            <div class="copyright"><p>© 2019 Autofy</p></div>
            </div>
        </div>
    </div>
    <script src="autofyFunctions.js"></script>
	<script>
	var Brand = localStorage.getItem("brand");
	var Model = localStorage.getItem("model");
	var Year = localStorage.getItem("year");
	var Style = localStorage.getItem("style");
	var Type = localStorage.getItem("type");
	var Trans = localStorage.getItem("trans");
   
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "dati.php", true);
  ajax.send();

  ajax.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          var data = JSON.parse(this.responseText);
          console.log(data);

          var html = "";
		  var count = 0;
		  var columnCount = 1;
          for(var a = 0; a < data.length; a++) {
              var brand = data[a].brand;
              var model = data[a].model;
              var caryear = data[a].caryear;
              var bodysytle = data[a].bodysytle;
              var fueltype = data[a].fueltype;
              var transmission = data[a].transmission;
			  var image = data[a].image;

			
			       if ((count%2 === 0) 
					&& (Brand === "" || data[a].brand === Brand )
					&& (Model === "" || data[a].model === Model )
					&& (Year === "" || data[a].caryear === Year )
					&& (Style === "" || data[a].bodysytle === Style )
					&& (Type === "" || data[a].fueltype === Type )
					&& (Trans === "" || data[a].transmission === Trans )){ 
					
					count = count +1;
							html+="<tr>";
                            html+="<td width='50%'>";
							html+="<div class='carboxCompare'>";
                            html+="<div class='carPicture' id='carPicture'>";
                            html+=image;

                            html+="</div>";
                            html+="<div class='carCriteriaCompare' id='carCriteria'>";
                            html+="<table  class='comparePageCriteria'>";									
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
                                        html+="<p>";
										html+=columnCount; html+=1;
										html+="</p>";
                                    html+="</div>";
                                html+="</td>";
                                html+="<td>";
                                        html+="<div class='model' id='model'>";
                                            html+="<p>";
											html+=model;
											
											html+="</p>";
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
                                            html+="<p>";
											html+=caryear;
											html+="</p>";
                                        html+="</div>";
                                    html+="</td>";
                                    html+="<td>";
                                            html+="<div class='bodyStyle' id='bodyStyle'>";
                                                html+="<p>";
												html+=bodysytle;
												html+="</p>";
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
                                            html+="<p>";
											html+=fueltype;
											html+="</p>";
                                        html+="</div>";
                                    html+="</td>";
                                    html+="<td>";
                                            html+="<div class='transmission' id='transmission'>";
                                                html+="<p>";
												html+=transmission;
											html+="</p>";
                                            html+="</div>";
                                    html+="</td>";
                            html+="</tr>";
                            html+="</table>";
                            html+="</div>";
                            html+="<div class='buttonsBlock'>";
                                html+="<button type='submit' class='choose' id='choose"; html+=columnCount; html+=1; html+="' onclick='chooseButton1(this)'>Choose</button>";
                            html+="</div>";
                        html+="</div>";
                        html+="</td>";
						columnCount = columnCount +1;



                 } else if ((Brand === "" || data[a].brand === Brand)
					&& (Model === "" || data[a].model === Model )
					&& (Year === "" || data[a].caryear === Year )
					&& (Style === "" || data[a].bodysytle === Style )
					&& (Type === "" || data[a].fueltype === Type )
					&& (Trans === "" || data[a].transmission === Trans )){
                      
					  count = count +1;
					  
					  

<!--NEW CAR COLUMN-->
                       html+=" <td width='50%'>";
                         html+="<div class='carboxCompare'>";
                            html+="<div class='carPicture' id='carPicture'>";
                                html+=image;
											

                            html+="</div>";
                            html+="<div class='carCriteriaCompare' id='carCriteria'>";
                            html+="<table  class='comparePageCriteria'>";										
                            html+="<tr height='20px'>";
                                html+="<td width='50%'>";
                                       html+=" <div class='title'><p>Brand</p></div>";
                                html+="</td>";
                                html+="<td width='50%'>";
                                   html+="<div class='title'><p>Model</p></div>";
                                html+="</td>";
                            html+="</tr>";
                            html+="<tr >";
                                html+="<td>";
                                    html+="<div class='brand' id='brand'>";
                                        html+="<p>";
											html+=columnCount-1; html+=2;
											
											html+="</p>";
                                    html+="</div>";
                                html+="</td>";
                                html+="<td>";
                                        html+="<div class='model' id='model'>";
                                            html+="<p>";
											html+=model;											
											
											html+="</p>";
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
                                            html+="<p>";
											html+=caryear;
											html+="</p>";
                                        html+="</div>";
                                    html+="</td>";
                                    html+="<td>";
                                            html+="<div class='bodyStyle' id='bodyStyle'>";
                                                html+="<p>";
												html+=bodysytle;
											
											html+="</p>";
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
                                            html+="<p>";
											html+=fueltype;
											html+="</p>";
                                        html+="</div>";
                                    html+="</td>";
                                    html+="<td>";
                                            html+="<div class='transmission' id='transmission'>";
                                                html+="<p>";
												html+=transmission;
											html+="</p>";
                                            html+="</div>";
                                    html+="</td>";
                            html+="</tr>";
                            html+="</table>";
                            html+="</div>";
                            html+="<div class='buttonsBlock'>";
                                html+="<button type='button' class='choose' id='choose"; html+=columnCount-1; html+=2;
								html+="' onclick='chooseButton2(this)'>Choose</button>";
                            html+="</div>";
                        html+="</div>";
                        html+="</td>";

html+="</tr>";
					
          }
         
      }
      
        //iztiiram vecos datus
		var Table = document.getElementById("data");
		Table.innerHTML = "";
		
        document.getElementById("data").innerHTML += html;
      }
      
  };
		  
  

</script>
    </body>
    
</html>


           
