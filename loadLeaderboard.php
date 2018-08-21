<?php 

    include 'connectDB.php' ; 
    
    $num = 1 ; 
    
    $query = " SELECT * FROM  `users` ORDER BY  `users`.`points` DESC "; 
    
    $res = mysqli_query($con,$query);
    
    
    echo '     <table>
        
                    <thead>
                        <tr>
                            <th>المركز</th>
                            <th>الاسم</th>
                            <th>الرقم الجامعي</th>
                            <th>النقاط</th>
                        </tr>
                    </thead>
                    
                    <tbody> ' ; 
                    
                    
    if ( mysqli_num_rows($res)>0 ) {
        while($row= mysqli_fetch_array($res)){ 
            

                        
            echo '      <tr>
                            <td>'.$num.'</td>
                            <td>'.$row[1].'</td>
                            <td>'.$row[0].'</td>
                            <td>'.$row[2].'</td>
                        </tr>
            ' ;
            
            $num++ ;           

        }
        
            echo '
                    </tbody>
                
                        </table>
                ' ; 
            
        
    } else {
        echo '  <script>
            window.location = "index.php?dir=leaderboard&message=there are no users";
        </script> ';
    }
    
    