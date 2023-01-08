


<?php
    include "database.php";
    if(isset($_POST['login'])){
        
            $username = $_POST['username'];
            $password = ($_POST['password']);
            $qry = $conn->query("SELECT username,password FROM logintable");
            if($qry->num_rows == 0){
                echo "sorry no user is registered";
            }
            else{
                while($row = $qry->fetch_assoc()){
                    if(($row['username'] == $username) && ($row['password']==$password)){
					
							echo "Login successfully,<h1><center>WELCOME TO AUTOWAG!</center></h1><br><br>";
                            echo '<br><br><br><br><center><a href="../../rashmi/index.php"><h2>Logout<h2></center> </a></center></h1> ';
							break;
                    }
                    else{
                        echo "Incorrect username or password. <br>";
						break;
                    }
                }  
            }
        }
    else{
        echo "Error";
    }

?>

