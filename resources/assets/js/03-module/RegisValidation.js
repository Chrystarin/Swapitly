$(document).ready(function(){
    /*
        Module Validation by Harold James Castillo 

        *Steps on adding another Validation 

        Step #1 
            - Create a function for the new validation 
        Step #2 
            - add a if statement for the new validation. take note change things has *  
        Step #3 
            - Add the number that you assign on the step 2 on array checker. The index
            0 of the array checker represent the first Input if the Form
    */
   
    // ---- Validations ---
    // Step #1
    // Checking if the input is null or not
    function NullValidation(UserInput){
        if(UserInput == ""){
            return "You didn't fill the input box";
        }else{
            for(let i = 0;i < UserInput.length; i++){
                // check if the letter has a letter
                if(UserInput.charAt(i) != " "){
                    break;
                    
                }
                // check the last letter if it is a letter or a just a blank
                if(i == UserInput.length -1){
                    if(UserInput.charAt(i) == " "){
                        return "You didn't fill the input box";  
                    }
                }
            }
            return "Pass";
        }
    }
    // Checking if there is an string on the input
    function NumberChecker(UserInput){
        if(isNaN(UserInput)){   
            return "You Input a letter"
        }       
        return "Pass"
    }
    // Checking if input reach the max and min of the input 
    function charlimit(UserInput,Max,Min){
        if(UserInput.length > Max){
            return "Your input is greater than the expect characters";
        }
        if(UserInput.length < Min){
            return "Your input is less than the expect characters";
        }
        return "Pass";
    }

    function Email(UserInput){
        if(UserInput.includes("@")){
            if(UserInput[UserInput.indexOf("@")+1] == "."){
                return "(.)is used in a wrong position"
            }
            return "Pass"
        }else{
            return "Missing @ charater in your email"
        }
    }
    function PasswordMeterStatus(UserInput){
         if(PasswordMeter(UserInput) == "Bad"){
             return "Your Password meter is not Good enough"
         }
         return "Pass"
    // Missplaced error border
    }
    function Match(UserInput){
        if(UserInput != $("#Password-Input").val()){
            return "Password Mismatched"
        }else {return "Pass"}
    }
    // --- End of validations


    function validation(input,checker){
        var  checkerCharacter,val_check;
        // Loop for every input
        for(let i_Input = 0; i_Input < input.length; i_Input++){
            // getting the input val
            val_check = $(input[i_Input]).val();
                
            // Loop for every character of the Checker array 
            for(let i_Character = 0; i_Character < checker[i_Input].length;i_Character++){
                checkerCharacter =  checker[i_Input].charAt(i_Character);
                if(checkerCharacter == "1"){
                    //validation 1
                    $message = NullValidation(val_check);
                    display($(input[i_Input]).closest(".Validation"),$message);
                    if($message != "Pass"){
                        break;
                    }
                } 
                if(checkerCharacter == "2"){
                    //validation 2
                    $message = NumberChecker(val_check);
                    display($(input[i_Input]).closest(".Validation"),$message);
                    if($message != "Pass"){
                        break;
                    } 
                }
                if(checkerCharacter == "3"){
                    //validation 3
                    $message = charlimit(val_check,10,10);
                    display($(input[i_Input]).closest(".Validation"),$message);
                    if($message != "Pass"){
                        break;
                    }  
                }
                if(checkerCharacter == "4"){
                    //validation  
                    // Edit this part
                        $message = Email(val_check);
                    // Don't change 
                    display( $(input[i_Input]),$message);
                    if($message != "Pass"){
                        break;
                    }  
                }
                // for UserName
                if(checkerCharacter == "5"){
                    //validation 3
                    $message = charlimit(val_check,8,2);
                    display($(input[i_Input]).closest(".Validation"),$message);
                    if($message != "Pass"){
                        break;
                    }  
                }
                if(checkerCharacter == "6"){
                    //validation  
                    // Edit this part
                        $message = PasswordMeterStatus(val_check);
                    // Don't change 
                    display( $(input[i_Input]),$message);
                    if($message != "Pass"){
                        break;
                    }  
                }
                if(checkerCharacter == "7"){
                    //validation  
                    // Edit this part
                        $message = Match(val_check);
                    // Don't change 
                    display( $(input[i_Input]),$message);
                    if($message != "Pass"){
                        break;
                    }  
                }
                /* Step #2 
                    example
                    if(checkerCharacter == "*NextNumber"){
                        //validation  
                        // Edit this part
                            $message = *NameOfTheValidation(val_check);
                        // Don't change 
                        display( $(input[i_Input]),$message);
                        if($message != "Pass"){
                            break;
                        }  
                    }
                */
            }
            if($message != "Pass"){
                break;
            }
            if(i_Input == (input.length-1)){
                return true;
            }
        }
    }
  

    // displaying and checking if the input has error
    function display(Elmt,message){
        if(message != "Pass"){
            $("#error").fadeIn();
            $("#error-message").html(message);
            Elmt.closest(".Validation").css("border-color","red");
            return "stop";
        }
        else{
            Elmt.closest(".Validation").css("border-color","#807F7F");
            $("#error").fadeOut(1);
        }
    }
    $("#next").on("click", function(e){
        // STOP TWICE OF TRIGGERING OF BUTTON
        e.stopImmediatePropagation();
        // * Start of inputs validation
        var inputs = $("#FormPart1 .input");

        // Step #3
        var checker = ["1","1","1","1","123","1"];
        if( validation(inputs,checker) == true){
            $("#FormPart1").css("display","none");
            $("#FormPart2").css("display","block");
        }
    });

    $("#finish").on("click", function(e){

        // STOP TWICE OF TRIGGERING OF BUTTON
        e.stopImmediatePropagation();
        // * Start of inputs validation
        var inputs = $("#FormPart2 input");
        // Step #3 
        var checker = ["14","15","16","17"];
        if( validation(inputs,checker) == true){
            $("#SignUp_Form").submit();
        }
    });


    
    // Password Meter for checking the strength of the password
    $("#Password-Input").keyup(function(){
        PasswordMeter($(this).val());
    });
    
    function PasswordMeter(UserInput){
        if($("#Password-Input").val() == ""){
            $("#Password-Meter").css("display","none");
        }else{
            $("#Password-Meter").css("display","block");
            var check,Score = 0, pattern = /^[A-Za-z0-9 '.-]+$/;
    
            for(let x = 0 ; x < UserInput.length; x++){
            
                check = UserInput[x];
                
                if(!pattern.test(check))
                {
                // for special char
                Score = Score + 20;
                }
                else if(check == " "){
                    // for white space
                    Score = Score  + 5;
                }
                else if(!isNaN(check)){
                    // for a number
                    Score = Score + 12;
                }
                else if(check == check.toUpperCase()){
                    //For uppercase
                    Score = Score + 15;
                }
                else if(check == check.toLowerCase()){
                    //For lowercase
                    Score = Score + 10;
                }		
            }

            if(Score<=80){
                $("#Password-Meter").html("Bad");
                $("#Password-Meter").css("color","#e63232");
                return "Bad"
            }
            else if(Score<=105){
                $("#Password-Meter").html("Good");
                $("#Password-Meter").css("color","#ffc107");
                return "Good"
            }
            else{
                $("#Password-Meter").html("Strong");
                $("#Password-Meter").css("color","#6ed472");
                return "Strong"
            }
        }
        
    }
    // End of Password meter
});