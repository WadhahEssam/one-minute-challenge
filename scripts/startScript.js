
///////////////////////////  start.php  //////////////////////////

var currentQuestion = 1 ; 
var points = 0 ; 


$(document).ready(function(){

        
    $(".true").click(function() { 
        points += parseInt( $("#question" + currentQuestion + "  input[name=dif]" ).val() ) ;
        console.log(points);
    });
    
    $(".option").click(function() {
        
        $("#question" + currentQuestion ).fadeOut("fast" , function () {
            currentQuestion++ ; 
            if ( currentQuestion > 25 ) 
                    window.location = "savePoints.php?points=" + points + "&id=" +  $(" input[name=id]" ).val() ;

            $("#question" + currentQuestion).fadeIn("fast");
        }) ;
        
    });


    var time = 60 ; 
    var beebSound = new Audio('/audio/beeb.wav');

    // this function will be called each second 
    var timerId = setInterval(function() {

        console.log( $(" input[name=id]" ).val()  ) ; 
        if ( time > 0 ) {
            document.getElementById("counter").innerHTML = time ; 
        } 
        else if ( time == -1 ) {
            window.location = "savePoints.php?points=" + points + "&id=" +  $(" input[name=id]" ).val() ;
        }
        
        if ( time > 10 ) {
            $("#counter-container").animate({height:'+=15px' ,width:'+=15px' ,top:'-=5px' , backgroundColor:"#5560a0" } , "500").animate({height:'-=15px' , width:'-=15px' , top:'+=5px' , backgroundColor:"rgb(60, 71, 138)" } , "500"); 
            $("#counter").animate({fontSize:'+=5px' ,top:'-=5px'} , "500").animate({ fontSize:'-=5px' ,top:'+=5px'} , "500"); 
        }
        
        if ( time <= 10 && time > 0 ) {
            $("#counter-container").animate({height:'+=15px' ,width:'+=15px' ,top:'-=5px' , backgroundColor:"rgb(124, 36, 36)" } , "500").animate({height:'-=15px' , width:'-=15px' , top:'+=5px' , backgroundColor:"rgb(165, 66, 66)" } , "500"); 
            $("#counter").animate({fontSize:'+=5px' ,top:'-=5px'} , "500").animate({ fontSize:'-=5px' ,top:'+=5px'} , "500"); 
            beebSound.play();
        }
        
        time-- ; 

        
    }, 1000);

});

