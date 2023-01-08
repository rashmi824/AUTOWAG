<?php

//Dtabase connection
	
	$servername = "localhost";
    $username = "root";
    $password = "";
	$db = "autowag" ; //database
	
// Create connection

    $link = mysqli_connect($servername, $username, $password , $db);
	
// Check connection

    if (!$link) {
        die("Connection failed!!: " . mysqli_error($link));
    }
	else
	{
        //echo "Connected successfully!!!";
	}
	?>