$(document).ready(function(){
    function Notif(){
        // var list = $(".Notif-Lists");
        // if(button == "Request"){
        //     list.forEach(element => {
        //       alert();  
        //     });
        // }
        alert();
    }
    $("#Notification").click(function(){
        close();
        if($("#Notification-DropDown").css("display") == "none"){
            $("#Notification-DropDown").slideToggle();
        }
        
    });
    
    $("#menu").click(function(){
        close();
        if($("#menuDropDown").css("display") == "none"){
            $("#menuDropDown").slideToggle();
        }
    });

    function close(){
        $("#Notification-DropDown").slideUp();
        $("#menuDropDown").slideUp()
    }
    $("section").click(function(){
        close();
    });
});