<!doctype html>

<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title> Min Challenge - FTC</title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css" >
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
        <script src="scripts/script.js"></script>
        <link rel="shortcut icon"  href="images/chlogo.png">
        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">       
        
        <script>
            document.addEventListener('contextmenu', event => event.preventDefault());
        </script>
    </head>
    
    <body>
        <img id="logo"  style="position:relative;top:13px" width=180 src="images/chlogo.png">
        
        
<!----------------------------------------------------------------------------------------------------------->

        <?php
            // if ( isset($_GET['dir'] ) ) 
                echo '  <div id="main-menu" class="main-container" style="display:none;"> ' ;
            // else 
            //     echo '  <div id="main-menu" class="main-container"> '  ; 
        ?>
            
            <div class="main-botton" id="start" ><h2>دخول المسابقة</h2></div>
            <div class="main-botton" id="add-questions" ><h2 >اضافة اسئلة</h2></div>
            <div class="main-botton" id="leaderboard" ><h2 >المراكز</h2></div>

            
            <h3>هذه المسابقة برعاية</h3>
            <h4>نادي تقنية المستقبل</h4>
            <img id="ftc-logo" height=170 style="margin-top:5px" src="images/ftc-logo.png"></img>
            
            
        </div>
        
<!----------------------------------------------------------------------------------------------------------->
        
            
        <?php
            if ( isset($_GET['dir'] ) ) {
                if ( $_GET['dir'] == "enter") 
                    echo ' <div dir="rtl" id="enter-menu" class="main-container"> ' ;
                else 
                    echo ' <div dir="rtl" id="enter-menu" class="main-container" style="display:none;"> '  ; 
            }
            else 
                echo ' <div dir="rtl" id="enter-menu" class="main-container" style="display:none;"> '  ; 
        ?>
            
            <h1> شروط المسابقة :</h1>
            <h3>1 - أدخل بياناتك بشكل صحيح</h3>
            <h3>2 - لديك دقيقة واحدة للإجابة عن اكبر قدر من الاسئلة</h3>
            <h3>3 - يحق لك المشاركة لمرة واحدة فقط</h3>
            <br>
            
            <div id="enter-home-botton" class="home-botton"><img width=30 src="images/home.png"></img></div>

            <h1>التسجيل </h1>
            <form id="register-form" action="register.php" method="get" style="margin:5px 0px;">
                <label style="margin-left:5px">اسم الطالب / الطالبة</label><input type="text" name="name"/><br>
                <label style="margin-left:36px;position:relative;right:20px;">الرقم الجامعي</label><input type="number" size=6 name="id"/>

                <br>
                <input type="submit" value="ابدأ"/>
            </form>
            
        </div>
        
        
<!----------------------------------------------------------------------------------------------------------->
        
        <?php
            if ( isset($_GET['dir'] ) ) {
                if ( $_GET['dir'] == "addQuestion")
                    echo ' <div dir="rtl" id="add-questions-menu" class="main-container"> ' ;
              else 
                    echo ' <div dir="rtl" id="add-questions-menu" class="main-container" style="display:none;"> '  ; 
                    
            }    
            else 
                echo ' <div dir="rtl" id="add-questions-menu" class="main-container" style="display:none;"> '  ; 
        ?>
            
            <div id="add-questions-home-botton" class="home-botton"><img width=30 src="images/home.png"></img></div>

            <h1>اضافة سؤال </h1>
            <br>
            <h3>السؤال :</h3>
            <form id="add-question-form" style = "margin:5px 0px;" action = "addQuestion.php" method="post" enctype="multipart/form-data">
                <textarea name="question"></textarea> <br>
                <label style="margin-left:5px">الخيار 1</label><input type="text" name="option1"/><br>
                <label style="margin-left:5px">الخيار 2</label><input type="text" name="option2"/><br>
                <label style="margin-left:5px">الخيار 3</label><input type="text" name="option3"/><br>
                <label style="margin-left:5px">الخيار 4</label><input type="text" name="option4"/><br>
                <label id="browse-label" for="uploadfile" >رفع صورة </label><input type="file" value="file" name="image" id="uploadfile" accept="image/*"> </br>

                <div id="options" style="margin-top:15px">
                    <label style="margin-left:5px;">الاجابة :</label>
                    <select name="answer">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                    <!--<br>-->
                    
                    <label style="margin-left:5px;margin-right:10px">صعوبة السؤال :</label>
                    <select name="question-dif">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                
                <br>
                <input type="submit" value="اضاقة" style="margin-top:0px;"/>
            </form>
            
        </div>
        
        
<!----------------------------------------------------------------------------------------------------------->

        <?php
            if ( isset($_GET['dir'] ) ) {  
                if ( $_GET['dir'] == "leaderboard") 
                    echo ' <div dir="rtl" id="leaderboard-menu" class="main-container"> ' ;
                else 
                    echo ' <div dir="rtl" id="leaderboard-menu" class="main-container" style="display:none;"> '  ;
            }
            else 
                echo ' <div dir="rtl" id="leaderboard-menu" class="main-container" style="display:none;"> '  ; 
        ?>    
            
            
        <div id="leaderboard-home-botton" class="home-botton"><img width=30 src="images/home.png"></img></div>
        <div id="refresh-botton" class="refresh-botton"><img width=30 src="images/refresh.png"></img></div>
    
            <h1>  المراكز :</h1>
            
            <div id="leaderboard-table">
                <table>
                    
                    <thead>
                        <tr>
                            <th>المركز</th>
                            <th>الاسم</th>
                            <th>الرقم الجامعي</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        

                    </tbody>
                
                </table>
            </div>
            
        </div>    
        
        <div id="info">
            <a href="https://www.facebook.com/Wadah.Esam">
               Copyright FTC &copy; Wadah.Esam
            </a>
        </div>
                

        <?php
            if ( isset($_GET['message']) )
            echo '
                <div id="message">
                    <p>'.$_GET['message'].'</p>
                </div>
            
            ';
        ?>
        
 
        
    </body>
    
</html>