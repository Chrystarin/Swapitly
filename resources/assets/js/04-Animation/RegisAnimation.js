
$(document).ready(function(){
    // Animation for the module 
    $("#Module_close").on("click", () => {
        var inputs =  $("#SignUp_Form .input");
        inputs.val("");
        for(x = 0; x < inputs.length; x++){
            $(inputs[x]).closest(".Validation").css("border-color","#807F7F");
        }
        if($("#FormPart1").css("display") == "none"){
            $("#FormPart1").css("display","block");
            $("#FormPart2").css("display","none");
        }
        $("#Module-Registration").css("display","none");
    });


    $("#error-close").click(function(){
        $(this).closest("#error").fadeOut();
    });

    $("#error").fadeOut(1);

    $Clicked = false;
    $("#Password_eye img").on("click",function(e){ 
        e.stopImmediatePropagation();
        if($Clicked == false){
            $("#Password-Input").attr("type","text");
            $(this).addClass("Password_eye_Ani");
            $(this).on("animationend",function(){
                $(this).css({"width":"75%","opacity":"1"});
                $(this).removeClass();
            });
            $Clicked = true;
        }else{
            $("#Password-Input").attr("type", "password");
            $(this).addClass("Password_eye_Ani_rev");
            $(this).on("animationend",function(){
                $(this).css({"width":"50%","opacity":".6"});
                $(this).removeClass();
            });
            $Clicked = false;
        }  
    });

    $("#Form-Registration input , #Form-Registration select").focusin(function(){
        $(this).closest(".Validation").css("border-color","#35BADC" );
    });
    $("#Form-Registration input , #Form-Registration select").focusout(function(){
        $(this).closest(".Validation").css("border-color","#807F7F" );
    });
    $("#Signup").on("click",function(){
        $("#Module-Registration").fadeIn();
    });
    // End of animations
});