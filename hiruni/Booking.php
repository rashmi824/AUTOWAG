<?php
    include_once("link.php");
?>

<?php
    if (isset($_POST['submit']))
	{
		$customername = "";
		$phonenumber = "";
		$email = "";
        $vehicletype = ""; 
		$ac = "";
        $needdriver = "";
		$plocation = "";
		$dlocation = "";
		$startdate  = "";
		$stime  = "";
		$enddate  = "";
		$etime = "";
		$spoints = "";
	
	
	
		$customername = input_verify($_POST['customername']);
		$phonenumber = input_verify($_POST['phonenumber']);
		$email = input_verify($_POST['email']);
		$vehicletype = input_verify($_POST['vehicletype']);
		$ac = input_verify($_POST['ac']);
		$needdriver = input_verify($_POST['needdriver']);
		$plocation = input_verify($_POST['plocation']);
		$dlocation = input_verify($_POST['dlocation']);
		$startdate = input_verify($_POST['startdate']);
		$stime = input_verify($_POST['stime']);
		$enddate = input_verify($_POST['enddate']);
		$etime = input_verify($_POST['etime']);
		$spoints = input_verify($_POST['spoints']);
		
		
		$sql  = "INSERT INTO booking(name,phone_number,email,vehicle_type,air_condition,need_driver,pickup_location,drop_location,pickup_date,pickup_time,returnDate,returnTime,stop_points)VALUE('$customername','$phonenumber','$email','$vehicletype','$ac','$needdriver','$plocation','$dlocation','$startdate','$stime','$enddate','$etime','$spoints')";
		
		$result = mysqli_query($link,$sql);
		
		if($result)
		{
			echo "Booking submit successfully";
		}
		else
		{
			echo mysqli_error($link);
		}
	
	}
	
	function input_verify($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		
		return $data ;
		
	}
	
?>

<!DOCTYPE html>
<html>
	<!--  Head of the booking page -->
	<head>
		 <meta charset="UTF-8">
		 <link href="Images/Logo.png" rel="icon" type="images/png">
		 <title>Let's Place Your Booking..</title>
		 <link href="Hiruni.css" rel="stylesheet" type="text/css"/>
	</head>
	<!--/  Head of the booking page -->
	
	
	<script>
       alert("Booking form is loading");
    </script>
	
	<!--  Body of the booking page -->
	<body id="bodycss" >
	
	<!---- header----->
		<div id="one1">
			 <div class="wrapper"> 
					 <img src="Images/logo.png"  class="logo"/>
					 <nav>
					 <a href="../rashmi/index.php">Home</a>
					 <a href="../Miulesi/about.html">About Us</a>
					 <a href="../imash/categoryindex.html">Vehicle Fleet</a>
					 <a href="../thushan/contact/contactus.html">Contact Us</a>
					 <a href="FAQPage.html">FAQ</a>
					 <a href="../thushan/LoginAsandRegisterAS/RegisterAs.html" border="2px solid white" >Register</a>
					 <a href="../thushan/LoginAsandRegisterAS/loginAs.html">Login</a>
					 </nav>
			 </div>
		</div>
		<br>
	<!----/ header----->
	
	<!-- booking page inner container -->
		<div id="fullcontainer">
		
			<div class="container1">
			
				<div class="bookingformdiv">
				
					<div class = "heading">
						<h2 id="h2">Vehicle Reservation</h2>
					</div>
					
					<!-- form -->
					<form action="Booking.php" method = "POST">	 
						<div>
						
							  <fieldset class="sectioncss">
							  
								  <legend><b>Customer Details</b></legend>
								  
								  <label>Customer Name</label> 
								  <input type ="text" name="customername" placeholder="Your name" required>   
								  
								  <label> Customer Phone Number</label> 
								  <input type ="text" name="phonenumber" placeholder="contact number" required>
								 
								  <label>Email</label> 
								  <input type= "email" name = "email"  placeholder="Your email" required>
								  
							  </fieldset>
							  
						</div>
						
						<br><br>
						
						<div>
						
							 <fieldset class="sectioncss">
							 
									<legend><b>Vehicle Details</b></legend>
									
									<label>Vehicle type</label> 
									<input type= "text" name = "vehicletype"  placeholder="Car,Van,Bus,Lorry,Motorbike,Tuk Tuk" required>
										
									<label> Air Condition </label>		
								    <input type= "text" name = "ac"  placeholder="yes/no" required>
									    											
										
									<label>Need a driver </label> 
									<input type= "text" name = "needdriver"  placeholder="yes/no" required>
									
											
							 </fieldset>
							 
						</div>
						
						<br><br>
						
						<div>
							  <fieldset  class="sectioncss">
							  
								  <legend> <b> Trip Details </b> </legend>
								  
								  <label> Pickup Location </label> 
								  <input type ="text" name="plocation" placeholder="Pickup Location" required>   
								  
								  <label> Drop Location </label> 
								  <input type ="text" name="dlocation" placeholder="Dropping Location" required>
								  
								  <label>Pickup Date</label> 
								  <input type = "date" name = "startdate" id = "starting_date" required>	
								  
								  <label>Pickup time </label> 
								  <input type = "time" name = "stime" required>
								  
								  <label>Return Date</label> 
								  <input type = "date" name = "enddate" id = "ending_date" required>	
								  
								  <label>Return time</label> 
								  <input type = "time" name = "etime" required>						 
								  
								  <label>Stop points</label>
								  <input type = "text" name = "spoints" placeholder="Enter your stop points" required>		
											  
							  </fieldset>
							  
						</div>				
										
						<!-- Submit button -->							
						<button class="butn" type= "submit" name="submit">Submit</button>
					</form>
					
				</div>	
						
			</div>			
		</div>

	<!--/ booking page inner container -->
				<!----footer----> 	 
		<div id="one4">
					 <div id="one5">
						 <footer class="footer">
							 <div class="container">
								  <div class="row">
									 <div class="footer-col">
										<h4>SERVICES</h4>
										 <ul>
											 <li><a href="about.html">About Us</a></li>
											 <li><a href="#">Vehicle Fleet</a></li>
											 <li><a href="#">Contact Us</a></li>
											 <li><a href="#">FAQ</a></li>
											 <li><a href="login.html">Admin Login</a></li>
											 <li><a href="purchasehistory.php">My bookings</a></li>
										 </ul>
									 </div>
									 <div class="footer-col">
										 <h4>VEHICLE FLEET</h4>
										 <ul>
											 <li><a href="#">Cars</a></li>
											 <li><a href="#">SUVs</a></li>
											 <li><a href="#">Vans & Busses</a></li>
											 <li><a href="#">Utility vehicles & Lorries</a></li>
											 <li><a href="#">Motobikes</a></li>
											 <li><a href="#">Tuk Tuks</a></li>
										 </ul>
									 </div>
									<div class="footer-col">
										 <h4>CONTACT US</h4>
										 <ul>
											 <li><a href="#">Galle road,Colombo,SriLanka.</li>
											 <li><a href="#">+94 11 4178526</li>
											 <li><a href="#">+94 78 9873024</li>
											 <li><a href="#">info@AUTOWAG.com</a></li>
										 </ul>
									 </div>
									 <div class="footer-col">
										 <h4>FOLLOW US</h4>
										 <div class="social-links">
											 <a href="#"><i class="fab fa-facebook-f"></i>f</a>
											 <a href="#"><i class="fab fa-twitter"></i>t</a>
											 <a href="#"><i class="fab fa-instagram"></i>i</a>
											 <a href="#"><i class="fab fa-linkedin-in">li</i></a>			
										 </div>
									 </div>
								 </div>
							</div>
						</footer>
					 </div>
		</div>
	<!--/  Footer of the booking page -->	
				
		 
	 
	<!--/  Body of the booking page -->
	

	</body>
</html>