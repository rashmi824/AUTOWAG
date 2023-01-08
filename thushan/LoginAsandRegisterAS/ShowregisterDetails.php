<?php

	//open databaseConnection

		$con = new mysqli("localhost","root","","registeration");
		
			if($con->connect_error){
				
				die("Connection failed:".$con->connect_error);
			}
			else
			{
				echo "conected";
			}
			
?>

<!DOCTYPE html>
<html>
	<body> 
	
		<h1><center>User Register details</center></h1>
		
		
		<h1>SIMPLE LOGIN</h1>
		<form method="POST">
		Username<input type="text" name="username" class="text" required>
		<br>
		Password<input type="password" name="password" class="text" required>
		<br>
		<input type="Submit" name="submit" id="sub"> 
		
	</form>
		
		<br><br>

<?php
	echo "<center>";
	$sql= "SELECT * FROM registeration";
	if($result=$con->query($sql)){
		if($result->num_rows > 0){
			
			echo ("<table border='1' ");
			
			echo ("<tr>");
			echo("<th>"."ID"."</th>");
			echo("<th>"."firstname"."</th>");
			echo("<th>"."Lastname"."</th>");
			echo("<th>"."DOB"."</th>");
			echo("<th>"."Gender"."</th>");
			echo("<th>"."Phone"."</th>");
			echo("<th>"."Email"."</th>");
			echo("<th>"."password"."</th>");
			echo ("</tr>");
			
			while($row = $result->fetch_assoc()){
			
			
			
			
			echo ("<tr>");
			echo ("<td>". $row['ID']. "</td>");
			echo ("<td>". $row['firstname']. "</td>");
			echo ("<td>" . $row['lastname'] . "</td>");
			echo ("<td>" . $row['birthday'] . "</td>");
			echo ("<td>" . $row['Gender'] . "</td>");
			echo ("<td>". $row['phonenumber']. "</td>");
			echo ("<td>" . $row['email'] . "</td>");
			echo ("<td>" . $row['password'] . "</td>");
			echo ("</tr>");
			}
			echo ("</table>");
		}else{
			echo "no results";
			}
		}
		else{
			echo "Error:". $con->error;
		}
		
		echo "</center>";

	if(isset($_POST['submit'])){
		
		$name = $_POST['username'];
		$password = $_POST['password'];
		
		if($name=="test" &&  $password=="1234"){
			echo "dsfsdf";
			header("location:registaration form.html");
		}
	}
?>


	</body>
</html>