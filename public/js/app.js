/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(9);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');


__webpack_require__(2);
__webpack_require__(3);
__webpack_require__(4);
__webpack_require__(6);

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });

/***/ }),
/* 2 */
/***/ (function(module, exports) {


//  /* ========
// Debugger plugin, simple demo plugin to console.log some of callbacks
// ======== */
// var myPlugin = {
//     name: 'debugger',
//     params: {
//         debugger: false,
//     },
//     on: {
//         init: function () {
//         if (!this.params.debugger) return;
//         console.log('init');
//         },
//         click: function (e) {
//         if (!this.params.debugger) return;
//         console.log('click');
//         },
//         tap: function (e) {
//         if (!this.params.debugger) return;
//         console.log('tap');
//         },
//         doubleTap: function (e) {
//         if (!this.params.debugger) return;
//         console.log('doubleTap');
//         },
//         sliderMove: function (e) {
//         if (!this.params.debugger) return;
//         console.log('sliderMove');
//         },
//         slideChange: function () {
//         if (!this.params.debugger) return;
//         console.log('slideChange', this.previousIndex, '->', this.activeIndex);
//         },
//         slideChangeTransitionStart: function () {
//         if (!this.params.debugger) return;
//         console.log('slideChangeTransitionStart');
//         },
//         slideChangeTransitionEnd: function () {
//         if (!this.params.debugger) return;
//         console.log('slideChangeTransitionEnd');
//         },
//         transitionStart: function () {
//         if (!this.params.debugger) return;
//         console.log('transitionStart');
//         },
//         transitionEnd: function () {
//         if (!this.params.debugger) return;
//         console.log('transitionEnd');
//         },
//         fromEdge: function () {
//         if (!this.params.debugger) return;
//         console.log('fromEdge');
//         },
//         reachBeginning: function () {
//         if (!this.params.debugger) return;
//         console.log('reachBeginning');
//         },
//         reachEnd: function () {
//         if (!this.params.debugger) return;
//         console.log('reachEnd');
//         },
//     },
//     };


// Swiper.use(myPlugin);

// // Init Swiper
// var swiper = new Swiper('.swiper-container', {
// pagination: {
//     el: '.swiper-pagination',
//     clickable: true,
// },
// navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
// },
// // Enable debugger
// debugger: true,
// });

/***/ }),
/* 3 */
/***/ (function(module, exports) {



/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(5);

/***/ }),
/* 5 */
/***/ (function(module, exports) {

$(document).ready(function () {
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
    function NullValidation(UserInput) {
        if (UserInput == "") {
            return "You didn't fill the input box";
        } else {
            for (var i = 0; i < UserInput.length; i++) {
                // check if the letter has a letter
                if (UserInput.charAt(i) != " ") {
                    break;
                }
                // check the last letter if it is a letter or a just a blank
                if (i == UserInput.length - 1) {
                    if (UserInput.charAt(i) == " ") {
                        return "You didn't fill the input box";
                    }
                }
            }
            return "Pass";
        }
    }
    // Checking if there is an string on the input
    function NumberChecker(UserInput) {
        if (isNaN(UserInput)) {
            return "You Input a letter";
        }
        return "Pass";
    }
    // Checking if input reach the max and min of the input 
    function charlimit(UserInput, Max, Min) {
        if (UserInput.length > Max) {
            return "Your input is greater than the expect characters";
        }
        if (UserInput.length < Min) {
            return "Your input is less than the expect characters";
        }
        return "Pass";
    }

    function Email(UserInput) {
        if (UserInput.includes("@")) {
            if (UserInput[UserInput.indexOf("@") + 1] == ".") {
                return "(.)is used in a wrong position";
            }
            return "Pass";
        } else {
            return "Missing @ charater in your email";
        }
    }
    function PasswordMeterStatus(UserInput) {
        if (PasswordMeter(UserInput) == "Bad") {
            return "Your Password meter is not Good enough";
        }
        return "Pass";
        // Missplaced error border
    }
    function Match(UserInput) {
        if (UserInput != $("#Password-Input").val()) {
            return "Password Mismatched";
        } else {
            return "Pass";
        }
    }
    // --- End of validations


    function validation(input, checker) {
        var checkerCharacter, val_check;
        // Loop for every input
        for (var i_Input = 0; i_Input < input.length; i_Input++) {
            // getting the input val
            val_check = $(input[i_Input]).val();

            // Loop for every character of the Checker array 
            for (var i_Character = 0; i_Character < checker[i_Input].length; i_Character++) {
                checkerCharacter = checker[i_Input].charAt(i_Character);
                if (checkerCharacter == "1") {
                    //validation 1
                    $message = NullValidation(val_check);
                    display($(input[i_Input]).closest(".Validation"), $message);
                    if ($message != "Pass") {
                        break;
                    }
                }
                if (checkerCharacter == "2") {
                    //validation 2
                    $message = NumberChecker(val_check);
                    display($(input[i_Input]).closest(".Validation"), $message);
                    if ($message != "Pass") {
                        break;
                    }
                }
                if (checkerCharacter == "3") {
                    //validation 3
                    $message = charlimit(val_check, 10, 10);
                    display($(input[i_Input]).closest(".Validation"), $message);
                    if ($message != "Pass") {
                        break;
                    }
                }
                if (checkerCharacter == "4") {
                    //validation  
                    // Edit this part
                    $message = Email(val_check);
                    // Don't change 
                    display($(input[i_Input]), $message);
                    if ($message != "Pass") {
                        break;
                    }
                }
                // for UserName
                if (checkerCharacter == "5") {
                    //validation 3
                    $message = charlimit(val_check, 8, 2);
                    display($(input[i_Input]).closest(".Validation"), $message);
                    if ($message != "Pass") {
                        break;
                    }
                }
                if (checkerCharacter == "6") {
                    //validation  
                    // Edit this part
                    $message = PasswordMeterStatus(val_check);
                    // Don't change 
                    display($(input[i_Input]), $message);
                    if ($message != "Pass") {
                        break;
                    }
                }
                if (checkerCharacter == "7") {
                    //validation  
                    // Edit this part
                    $message = Match(val_check);
                    // Don't change 
                    display($(input[i_Input]), $message);
                    if ($message != "Pass") {
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
            if ($message != "Pass") {
                break;
            }
            if (i_Input == input.length - 1) {
                return true;
            }
        }
    }

    // displaying and checking if the input has error
    function display(Elmt, message) {
        if (message != "Pass") {
            $("#error").fadeIn();
            $("#error-message").html(message);
            Elmt.closest(".Validation").css("border-color", "red");
            return "stop";
        } else {
            Elmt.closest(".Validation").css("border-color", "#807F7F");
            $("#error").fadeOut(1);
        }
    }
    $("#next").on("click", function (e) {
        // STOP TWICE OF TRIGGERING OF BUTTON
        e.stopImmediatePropagation();
        // * Start of inputs validation
        var inputs = $("#FormPart1 .input");

        // Step #3
        var checker = ["1", "1", "1", "1", "123", "1"];
        if (validation(inputs, checker) == true) {
            $("#FormPart1").css("display", "none");
            $("#FormPart2").css("display", "block");
        }
    });

    $("#finish").on("click", function (e) {

        // STOP TWICE OF TRIGGERING OF BUTTON
        e.stopImmediatePropagation();
        // * Start of inputs validation
        var inputs = $("#FormPart2 input");
        // Step #3 
        var checker = ["14", "15", "16", "17"];
        if (validation(inputs, checker) == true) {
            $("#SignUp_Form").submit();
        }
    });

    // Password Meter for checking the strength of the password
    $("#Password-Input").keyup(function () {
        PasswordMeter($(this).val());
    });

    function PasswordMeter(UserInput) {
        if ($("#Password-Input").val() == "") {
            $("#Password-Meter").css("display", "none");
        } else {
            $("#Password-Meter").css("display", "block");
            var check,
                Score = 0,
                pattern = /^[A-Za-z0-9 '.-]+$/;

            for (var x = 0; x < UserInput.length; x++) {

                check = UserInput[x];

                if (!pattern.test(check)) {
                    // for special char
                    Score = Score + 20;
                } else if (check == " ") {
                    // for white space
                    Score = Score + 5;
                } else if (!isNaN(check)) {
                    // for a number
                    Score = Score + 12;
                } else if (check == check.toUpperCase()) {
                    //For uppercase
                    Score = Score + 15;
                } else if (check == check.toLowerCase()) {
                    //For lowercase
                    Score = Score + 10;
                }
            }

            if (Score <= 80) {
                $("#Password-Meter").html("Bad");
                $("#Password-Meter").css("color", "#e63232");
                return "Bad";
            } else if (Score <= 105) {
                $("#Password-Meter").html("Good");
                $("#Password-Meter").css("color", "#ffc107");
                return "Good";
            } else {
                $("#Password-Meter").html("Strong");
                $("#Password-Meter").css("color", "#6ed472");
                return "Strong";
            }
        }
    }
    // End of Password meter
});

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(7);
__webpack_require__(8);

/***/ }),
/* 7 */
/***/ (function(module, exports) {


$(document).ready(function () {
    $("#Notification").click(function () {
        close();
        if ($("#Notification-DropDown").css("display") == "none") {
            $("#Notification-DropDown").slideToggle();
        }
    });
    $("#menu").click(function () {
        close();
        if ($("#menuDropDown").css("display") == "none") {
            $("#menuDropDown").slideToggle();
        }
    });
    function close() {
        $("#Notification-DropDown").slideUp();
        $("#menuDropDown").slideUp();
    }
    $("#Content_Holder").click(function () {
        close();
    });
});

/***/ }),
/* 8 */
/***/ (function(module, exports) {


$(document).ready(function () {
    // Animation for the module 
    $("#Module_close").on("click", function () {
        var inputs = $("#SignUp_Form .input");
        inputs.val("");
        for (x = 0; x < inputs.length; x++) {
            $(inputs[x]).closest(".Validation").css("border-color", "#807F7F");
        }
        if ($("#FormPart1").css("display") == "none") {
            $("#FormPart1").css("display", "block");
            $("#FormPart2").css("display", "none");
        }
        $("#Module-Registration").css("display", "none");
    });

    $("#error-close").click(function () {
        $(this).closest("#error").fadeOut();
    });

    $("#error").fadeOut(1);

    $Clicked = false;
    $("#Password_eye img").on("click", function (e) {
        e.stopImmediatePropagation();
        if ($Clicked == false) {
            $("#Password-Input").attr("type", "text");
            $(this).addClass("Password_eye_Ani");
            $(this).on("animationend", function () {
                $(this).css({ "width": "75%", "opacity": "1" });
                $(this).removeClass();
            });
            $Clicked = true;
        } else {
            $("#Password-Input").attr("type", "password");
            $(this).addClass("Password_eye_Ani_rev");
            $(this).on("animationend", function () {
                $(this).css({ "width": "50%", "opacity": ".6" });
                $(this).removeClass();
            });
            $Clicked = false;
        }
    });

    $("#Form-Registration input , #Form-Registration select").focusin(function () {
        $(this).closest(".Validation").css("border-color", "#35BADC");
    });
    $("#Form-Registration input , #Form-Registration select").focusout(function () {
        $(this).closest(".Validation").css("border-color", "#807F7F");
    });
    $("#Signup").on("click", function () {
        $("#Module-Registration").fadeIn();
    });
    // End of animations
});

/***/ }),
/* 9 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);