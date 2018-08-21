<?php

    session_start();
    
    $name = $_GET['name'] ; 
    $id = $_GET['id'] ; 
    
    
    include  'connectDB.php' ; 
    
    $query = "SELECT * FROM users WHERE id = '$id' " ; 
    
    $result = mysqli_query ( $con , $query ) ; 
    
    $numResults = mysqli_num_rows ( $result ) ; 
    
    if ( strlen($name) == 0 ) {
        
        echo '  <script>
                    window.location = "index.php?dir=enter&message=الرجاء ادخال اسم الطالب";
                </script> ';
    }
    
    else if ( strlen($id) != 9 ) {
        
        echo '  <script>
                    window.location = "index.php?dir=enter&message=الرقم الجامعي للطالب يجب ان يتكون من 9 ارقام " ;
                </script> ';
    }

    else if ( $numResults >= 1 ) {

        echo '  <script>
                    window.location = "index.php?dir=enter&message= يمكن للطالب المحاولة لمرة واحدة فقط";
                </script> ';
    }
    
    else {
        
        include  'connectDB.php' ; 

        $query = " INSERT INTO `ftc-question`.`users` (`id`, `name`, `points`) VALUES ('$id', '$name', '0') " ;
        
        mysqli_query($con, $query);
        
        $_SESSION['name'] = $name ; 
        $_SESSION['id'] = $id ; 
        
        header("start.php?name=$name&id=$id");
        
        
        echo '  <script>
                    window.location = "start.php"
                </script> ';
    }
    
    
    mysqli_close($con);



?>
