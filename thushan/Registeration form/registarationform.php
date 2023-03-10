<?php
		// link config file 
		require 'config.php'; 
?>

<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="REGIcss.css">
      <script src="/js/proj.js"></script>
      <title>Registeration Form</title>
    </head>

    <body class="RegisterationForm">
		
        <center>
            <h1><br>User Registration Form</h1>
        </center> 
        
		<script>
		
		function myfun(){
		
			var a = document.getElementById("password").value;
			var b = document.getElementById("ConformPassword").value;
			
			if(a==""){
			
				document.getElementById("massages").innerHTML=" **Please enter your new password ";
				return false;
			}
			
			if(a.length<5){
			
				document.getElementById("massages").innerHTML="**Password must have at least 5 characters";
				return false;
			}
			if(b==""){
			
				document.getElementById("massages").innerHTML=" **Please conform your password ";
				return false;
			}
			else if(a!=b){
			
				document.getElementById("massages").innerHTML=" **Password does not match check and re-enter ";
				return false;
			}
		}
		
		
		</script>
		
	
        <div class="form">
        <form  onsubmit="return myfun()"  class="regform" id="regform" method="post" >
          <h3>Register to continue with AUTOWAG</h3><br>
        <!--First Name-->
        <input type="text" name="firstname" class="firstname" id="firstname" onclick="loadData('btn1')" placeholder="First name" required><br/>
        <p id="result"></p><br>
        
        <!--Last Name--> 
        <input type="text" name="lastname" class="lastname" id="lastname" placeholder="Last name" required><br/><br/>
         <br>
        <!--Date of Birth-->
        <label class="Date_of_Birth">Date of birth</label><br/><br/>
        <input type="date" name="birthday" class="birthday" placeholder="Last name" id="birthday"required><br/><br/>
         
        <!--Gender-->
        <label class="Gender">Gender</label><br/><br/>
         
		<input type="radio" class="radiob" id="radio" name="Gender" value="Male" required></input>
        <label class="Gender">Male</label><br/>
        <input type="radio" class="radiob" id="radio" name="Gender" value="Female" required></input>
        <label class="Gender">Female</label><br/><br/>
		
        <!--Phone Number-->
        <input type="number" name="phonenumber" class="phonenumber" id="phonenumber"  placeholder="Phone Number" required><br/><br/>
  
        <!--Email-->
        <input type="email" name="email" class="email" id="email" placeholder="Email" required><br/><br/>
  
        <!--Create Password----------------------------------------------------------------------------------------------------------->
        <input type= "password" name="password" class="password" id="password" placeholder=  "Create password" ><br/><br/>
		
        <!--Conform Password-->
        <input type= "password" name="ConformPassword" id="ConformPassword" class="ConformPassword" placeholder=  "Conform password" ><span style="color:#FF0000"  id="massagess" > </span><br><br>
        
		<h4><span style="color:red" id="massages" > </span><br><br></h4>

	
        <!--Cancel------------------------------------------------------------------------------------------------------------------------------------------------>
        <input type="reset" class="cancel" value="Cancel">
  
        <!--Submit-->
		<input  type="submit"  class="submit" id="submit" name='btnSubmit' value="Submit">
        </div>
        </form>   
		<?php
		// link config file 
		require 'REGIphp.php'; 
?>

    </body>
  
    <!--Footter-->
    <footer class="footer">
      <div class="container">
         <div class="row">
            <div class="footer-col">
               <h4>SERVICES</h4>
                <ul>
                  <li><a href="#">About Us</a></li><br>
                  <li><a href="#">Vehicle Fleet</a></li><br>
                  <li><a href="#">Contact Us</a></li><br>
                  <li><a href="#">FAQ</a></li><br>
                  <li><a href="login.html">Admin Login</a></li><br>
				  <li><a href="login.html">Admin Login</a></li>
                </ul>
              </div>
             <div class="footer-col">
               <h4>VEHICLE FLEET</h4>
                <ul>
                 <li><a href="#">Cars</a></li><br>
                 <li><a href="#">SUVs</a></li><br>
                 <li><a href="#">Vans & Busses</a></li><br>
                 <li><a href="#">Utility vehicles & Lorries</a></li><br>
                 <li><a href="#">Motobikes</a></li><br>
                 <li><a href="#">Tuk Tuks</a></li><br>
                </ul>
            </div>
            <div class="footer-col">
               <h4>CONTACT US</h4>
                <ul>
                  <li style="color:darkgrey;">Galle road,<br>Colombo,<br>SriLanka.</li><br>
                  <li  style="color: darkgrey;">+94 11 4178526</li><br>
                  <li style="color: darkgrey;">+94 78 9873024</li>
                  <li style="color: darkgrey;"><a href="#">info@AUTOWAG.com</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>FOLLOW US</h4>
                  <div class="social-links">
                   <a href="#"><i class="fab fa-facebook-f"></i></a>
                   <a href="#"><i class="fab fa-twitter"></i></a>
                   <a href="#"><i class="fab fa-instagram"></i></a>
                   <a href="#"><i class="fab fa-linkedin-in"></i></a>
                          
              </div>
             </div>
           </div>
       </div>
   </footer>
</html>    