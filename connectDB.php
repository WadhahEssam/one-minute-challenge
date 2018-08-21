<?php 

    $con = mysqli_connect("localhost","wadahesam","","ftc-question"); 
    if(mysqli_connect_errno($con)){
	    die("Fail to connect to database :".mysqli_connect_error() ); 
    }

