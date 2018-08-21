<!doctype html>

<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title>Minute Challenge - FTC</title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css" >
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
        <script src="scripts/script.js"></script>
        <script src="scripts/jquery.color.js"></script>
        <script src="scripts/startScript.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">       
    </head>
    
    <body>
        <img id="logo" style="position:relative;top:13px;margin-bottom:15px" width=180 src="images/chlogo.png">
        
        <div id="counter-container"></div>
        <h1 id="counter">60</h1>
        
        <?php
        
            session_start();

            include "connectDB.php" ; 
            
            $name = $_SESSION['name'];
            $id = $_SESSION['id'] ; 
            $questionCounter = 1 ; 
            
            
            $query = " SELECT * FROM questions  ORDER BY rand()   LIMIT 25"; 
            
            $res = mysqli_query($con,$query);
            
            if ( mysqli_num_rows($res)>0 ) {
                while($row= mysqli_fetch_array($res)){
                //each loop will poost 1 row of data
                    
                    
                    $question = $row[1];
                    $answer = $row[7];
                    $questionDif = $row[8];
                    $option1 = $row[2];
                    $option2 = $row[3];
                    $option3 =$row[4];
                    $option4 = $row[5];
                    $questionImage = $row[6];
                    
                    echo '        <input style="display: none" name="id" type="hidden" value="'.$id.'" />  ';

                    
                    if ( $questionCounter == 1 ) 
                        echo '  <div dir="ltr" id="question'.$questionCounter.'" class="quesion-container + main-container" >' ; 
                    else 
                        echo '  <div dir="ltr" id="question'.$questionCounter.'" class="quesion-container + main-container" style="display:none;" >  ' ; 
             
                    echo '        <input style="display: none" name="dif" type="hidden" value="'.$questionDif.'" />  ';
                    echo '         <div class="question"> ';
                    echo '             <h2 class="question-text">'.$question.'</h2>  ' ; 
                    
                    if ( $questionImage != "No Image")
                        echo '            <img width=100 class="question-image" src="'.$questionImage.'"></img> ' ; 
                        
                    echo '        </div> ' ; 
                            
                                        
                    echo '         <table class="answers"> ' ;
                    echo '             <tr> ' ;
                    if ( $answer == 1 )
                        echo '                <td class="option1 + option + true"><h4>'.$option1.'</h4></td> ' ; 
                    else
                        echo '                <td class="option1 + option"><h4>'.$option1.'</h4></td> ' ; 
                        
                    if ( $answer == 2 )
                        echo '                <td class="option2 + option + true"><h4>'.$option2.'</h4></td> ' ; 
                    else
                        echo '                <td class="option2 + option"><h4>'.$option2.'</h4></td> ' ; 

                    echo '             </tr> ' ; 
                               
                    echo '             <tr> ';
                    
                    if ( $answer == 3 )
                        echo '                <td class="option3 + option + true"><h4>'.$option3.'</h4></td> ' ; 
                    else
                        echo '                <td class="option3 + option"><h4>'.$option3.'</h4></td> ' ; 
                       
                    if ( $answer == 4 )
                        echo '                <td class="option4 + option + true"><h4>'.$option4.'</h4></td> ' ; 
                    else
                        echo '                <td class="option4 + option"><h4>'.$option4.'</h4></td> ' ; 
                        
                       
                    echo '             </tr> ' ;
                    echo '         </table> ' ;
                            
                    echo '         <br> ' ; 
                
                    echo '    </div> ' ; 
                    
                    
                    
                    $questionCounter++ ; 
                    

                    
                }
                
                mysqli_close($con);

            }
        
        ?>
        
        <?php
        
            if ( isset($_GET['message']) )
            echo '
                <div id="message">
                    <p>'.$_GET['message'].'</p>
                </div>
            
            '

        ?>
        
    </body>
    
</html>




<!--<!doctype html>-->

<!--<html lang="en">-->
    
<!--    <head>-->
<!--        <meta charset="UTF-8">-->
<!--        <title>Minute Challenge - FTC</title>-->
<!--        <link rel="stylesheet" type="text/css" href="css/stylesheet.css" >-->
<!--        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>-->
<!--        <script src="scripts/script.js"></script>-->
<!--        <script src="scripts/jquery.color.js"></script>-->
<!--        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">-->
<!--        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">       -->
<!--    </head>-->
    
<!--    <body>-->
<!--        <img style="position:relative;top:13px;margin-bottom:15px" width=180 src="images/chlogo.png">-->
        
<!--        <div id="counter-container"><h1 id="counter">60</h1></div>-->
        

<!--         <div dir="ltr" id="question1" class="quesion-container + main-container" >  -->
         
<!--            <input style="display: none" name="dif" type="hidden" value="2" />-->
<!--            <div class="question">-->
<!--                <h2 class="question-text">What does this picture belong to you have to know the answer for this</h2>-->
<!--                <img width=100 class="question-image" src="/images/questionImages/89158974.jpg"></img>-->
<!--            </div>-->
            
                        
<!--            <table class="answers">-->
<!--                <tr>-->
<!--                    <td class="option1 + option + true"><h3>pathon</h3></td>-->
<!--                    <td class="option2 + option"><h3>Java</h3></td>-->
<!--                </tr>-->
                
<!--                <tr>-->
<!--                    <td class="option3 + option"><h3>C#</h3></td>-->
<!--                    <td class="option4 + option "><h3>rupy</h3></td>-->
<!--                </tr>-->
<!--            </table>-->
            
<!--            <br>-->

<!--        </div>-->

<!--        <div dir="ltr" id="question2" class="quesion-container + main-container" style="display:none">   -->
<!--            <input style="display: none" name="dif" type="hidden" value="3" />-->

<!--            <div class="question">-->
<!--                <h2 class="question-text">Can you tell which company is this</h2>-->
<!--                <img width=100 class="question-image" src="/images/questionImages/141632.jpg"></img>-->
<!--            </div>-->
            
                        
<!--            <table class="answers">-->
<!--                <tr>-->
<!--                    <td class="option1 + option"><h3>pathon</h3></td>-->
<!--                    <td class="option2 + option"><h3>Java</h3></td>-->
<!--                </tr>-->
                
<!--                <tr>-->
<!--                    <td class="option3 + option"><h3>C#</h3></td>-->
<!--                    <td class="option4 + option + true"><h3>rupy</h3></td>-->
<!--                </tr>-->
<!--            </table>-->
            
<!--            <br>-->

<!--        </div>-->
        
<!--        <?php-->
        
<!--            if ( isset($_GET['message']) )-->
<!--            echo '-->
<!--                <div id="message">-->
<!--                    <p>'.$_GET['message'].'</p>-->
<!--                </div>-->
            
<!--            '-->

<!--        ?>-->
        
<!--    </body>-->
    
<!--</html>-->