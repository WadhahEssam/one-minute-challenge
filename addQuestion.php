<?php 
    session_start();
    
    include 'connectDB.php' ;
    
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $questionDif = $_POST['question-dif'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];
    
    $name = $_FILES['image']['name'] ; 
    $temp = $_FILES['image']['tmp_name'];

    $path ='images/questionImages/'. rand(0,10000) .  rand(0,10000) .'.jpg'; 

    
    if (!$_FILES["image"]["size"]) {
        $path = "No Image" ; 
    }

    
    move_uploaded_file( $temp , $path ) ; 
    
    

    $query = "INSERT INTO `ftc-question`.`questions` (`question_id`, `question`, `first`, `second`, `third`, `forth`, `question_image`, `answer`, `question_dif`) VALUES (NULL, '$question', '$option1', '$option2', '$option3', '$option4', '$path', '$answer', '$questionDif')" ; 
    $result = mysqli_query($con,$query) ; 

    mysqli_close($con);
?>



<script>
        window.location = "index.php?dir=addQuestion&message=تمت اضافة السؤال"
</script>