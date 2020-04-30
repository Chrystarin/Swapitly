
$(document).ready(function(){
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
    $("#Content_Holder").click(function(){
        close();
    });
});