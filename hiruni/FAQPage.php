<!DOCTYPE html>
<html>
	<head>
		 <meta charset="UTF-8">
		 <link href="Images/logo.png" rel="icon" type="image/png">
		 <title>Let's Place Your Booking..</title>
		 <link href="Hiruni.css" rel="stylesheet" type="text/css"/>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body>

	<script>
       alert("FAQ page is loading");   
    </script>
	
	<!--  Body of the FAQ page -->
	<body id="bodycss" >
	
	<!---- header----->
		<div id="one1">
			 <div class="wrapper"> 
					 <img src="Images/logo.png"  class="logo"/>
					 <nav>
					 <a href="#">Home</a>
					 <a href="about.html">About Us</a>
					 <a href="Booking.php">Vehicle Fleet</a>
					 <a href="#">Contact Us</a>
					 <a href="FAQPage.html">FAQ</a>
					 <a href="register.html" border="2px solid white" >Register</a>
					 <a href="#">Login</a>
					 </nav>
			 </div>
		</div>
		<br>
	<!----/ header----->
	
	<!-- FAQ page inner container -->
		<div id="fullcontainer">	
			<div class="container1">
				<div class="bookingformdiv">
					<div class = "heading">
						<h2 id="h2">Frequently Asked Questions</h2>
					</div>
					<button class="accordion">What do I need to pickup my vehicle?</button>
					<div class="panel">
					  <p>To pickup your rental you will need a reservation voucher from Autowag. A reservation voucher has specific information needed by Autowag at time of pickup.Reservation vouchers will be emailed to you once payment is applied to the reservation.</p>
					</div>

					<button class="accordion">For how many days can I reserve a rental vehicle?</button>
					<div class="panel">
					  <p>Autowag accept reservation for a rental period of one month at most.</p>
					</div>

					<button class="accordion">Can I cancel my reservation?</button>
					<div class="panel">
					  <p>Yes, reservations can be cancelled.Go to the reservation page to cancel reservation and there reservation confirmation number is required to cancel the reservation.</p>
					</div>

					<button class="accordion">Can I make changes to my reservation?</button>
					<div class="panel">
					  <p>Yes, reservation confirmation number is required to make changes to your reservation.</p>
					</div>

					<button class="accordion">Is there a fee for changing or cancelling my reservation?</button>
					<div class="panel">
					  <p>Cancel your reservation until 48 hours before your sheduled pickup time.</p>
					</div>

					<button class="accordion">How is the rental fee calculated?</button>
					<div class="panel">
					  <p>The rental fee is determined according to the model of the vehicle, rental period.If customer has requested any additional packages, the cost will be added to the rental fee.</p>
					</div>

					<button class="accordion">Are there any restrictions on mileage when using a rental car?</button>
					<div class="panel">
					  <p>No, there are no mileage restrictions or additional fees.</p>
					</div>

					<button class="accordion">Are all vehicles equipped with a GPS navigation?</button>
					<div class="panel">
					  <p>No, some vehicles do not have a GPS system.</p>
					</div>

					<button class="accordion">What should I do if I damage the vehicle?</button>
					<div class="panel">
					  <p>In the trip that the customer causes an accident the customers should be required to pay a charge for the loss and repairs.</p>
					</div>

					<button class="accordion">Do I need to get the safety package?</button>
					<div class="panel">
					  <p>No, subscribing this package is not compulsory.It can be selected when making the reservation or when picking up the vehicle.</p>
					</div>							
					
				</div>		
			</div>			
		</div>

	<!--/ FAQ page inner container -->
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
	<!--/  Footer of the FAQ page -->	
				
		 
	 
	<!--/  Body of the FAQ page -->
	

<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.maxHeight) {
		  panel.style.maxHeight = null;
		} else {
		  panel.style.maxHeight = panel.scrollHeight + "px";
		} 
	  });
}
</script>



















</body>

</html>