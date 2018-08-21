$(document).ready(function(){
    
    
    if(  $("#enter-menu").is(":visible") != true &&  $("#add-questions-menu").is(":visible") != true  && $("#leaderboard-menu").is(":visible") != true )
    {  
        $("#main-menu").slideDown("slow" , function () {
            $("#start").animate( { opacity : 1  } , 500 ) ; 
            $("#add-questions").animate( { opacity : 1  } , 500 ) ; 
            $("#leaderboard").animate( { opacity : 1  } , 500 ) ; 
            $("#info").animate( { opacity : 8  } , 500 ) ; 
        });     
    } else {
            $("#start").animate( { opacity : 1  } , 500 ) ; 
            $("#add-questions").animate( { opacity : 1  } , 500 ) ; 
            $("#leaderboard").animate( { opacity : 1  } , 500 ) ; 
            $("#info").animate( { opacity : 8 } , 500 ) ; 
    }

    
    $("#refresh-botton").click(function(){
        $("#leaderboard-table").load("loadLeaderboard.php");
    });
    
    $("#start").click(function(){
        $("#main-menu").fadeOut("fast" , function () {
            $("#enter-menu").fadeIn("fast");
        });
        $("#info").fadeOut("fast" , function () {
            $("#info").fadeIn("fast");
        }) ; 
        $("#message").fadeOut("fast");
    });
    
    $("#add-questions").click(function() {
        $("#main-menu").fadeOut("fast" , function () {
            $("#add-questions-menu").fadeIn("fast");
        }) ;
        $("#info").fadeOut("fast" , function () {
            $("#info").fadeIn("fast");
        }) ; 
        $("#message").fadeOut("fast");
    });    
    
    $("#leaderboard").click(function() {
        $("#main-menu").fadeOut("fast" , function () {
            $("#leaderboard-menu").fadeIn("fast");
        }) ;
        $("#info").fadeOut("fast" , function () {
            $("#info").fadeIn("fast");
        }) ; 
        $("#message").fadeOut("fast");
        $("#leaderboard-table").load("loadLeaderboard.php");
    });
    
    $("#enter-home-botton").click(function(){
        $("#enter-menu").fadeOut("fast" , function () {
            $("#main-menu").fadeIn("fast");
        });
        $("#info").fadeOut("fast" , function () {
            $("#info").fadeIn("fast");
        }) ; 
        $("#message").fadeOut("fast");
    });
    
    $("#add-questions-home-botton").click(function(){
        $("#add-questions-menu").fadeOut("fast" , function () {
            $("#main-menu").fadeIn("fast");
        });
        $("#info").fadeOut("fast" , function () {
            $("#info").fadeIn("fast");
        }) ; 
        $("#message").fadeOut("fast");
    });
    
    $("#leaderboard-home-botton").click(function(){
        $("#leaderboard-menu").fadeOut("fast" , function () {
            $("#main-menu").fadeIn("fast");
        });
        $("#info").fadeOut("fast" , function () {
            $("#info").fadeIn("fast");
        }) ; 
        $("#message").fadeOut("fast");
    });
});


