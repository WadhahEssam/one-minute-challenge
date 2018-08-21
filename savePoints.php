<?php 


    include "connectDB.php" ; 
    
    $name = $_SESSION['name'];
    $id = $_GET['id'] ; 
    $points = $_GET['points'] ; 
    
    
    // $query = "SELECT * FROM users WHERE `users`.`id` =$id " ; 
    
    // $result = mysqli_query ( $con , $query ) ; 
    
    // $numResults = mysqli_num_rows ( $result ) ; 
    

    // if ( $numResults == 0 ) {

    //     echo '  <script>
    //                 window.location = "index.php?dir=enter&message= حدث خطأ حاول مرة اخرى";
    //             </script> ';
    // }
    
    // else {
        
        $query = "UPDATE  `ftc-question`.`users` SET  `points` =  '$points' WHERE  `users`.`id` =$id;" ;
        mysqli_query ( $con , $query ) ; 

        echo '  <script>
                    window.location = "distroySesstion.php";
                </script> ';
        
    // }
    
    mysqli_close($con);
    
    

    