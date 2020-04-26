<div id="Module-Registration">
    <div id="Container-Registration">
        <img src="/storage/images/png/Close.png" id="Module_close" alt="">
        <!-- LEFT SIDE -->
        <div id="PreView-Registration"></div>
        <!-- RIGHT SIDE -->
         <div id="Form-Registration">
            <h2>Create an Account</h2>
            <p>It's quick and easy</p>
            <div id="error">
                <img  src="/storage/public/images/png/Error.png" alt="">
                <p id="error-message">You didn't fill the input box</p>
                <div id="error-close">
                    <div>
                        <img src="/storage/images/png/Close.png"alt="X">
                    </div>
                    
                </div>
            </div>
            <form id="SignUp_Form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                {{ csrf_field() }}   
                <div id="FormPart1">
                    <div id="Name-FormPart1-Registration" >
                        <div id="FirstName-FormPart1-Registration">
                            <h6 class="Desc">First Name :</h6>
                            <input id="FirstName-Input" type="text" class="Validation input" name="first_name" value="{{ old('first_name') }}">
                        </div>
                        <div id="LastName-FormPart1-Registration">
                            <h6 class="Desc">Last Name :</h6>
                            <input id="LastName-Input" type="text" class="Validation input" name="last_name" value="{{ old('last_name') }}">
                        </div>
                    </div>
                    <div id="Gender-Bday-FormPart1-Registration">
                        <div id="Birthday-FormPart1-Registration">
                            <h6 class="Desc">Birthday :</h6>
                            <input id="Birthday-Input" type="date"  class="Validation input" name="birthday" value="{{ old('birthday') }}">
                        </div>
                        <div id="Gender-FormPart1-Registration">
                            <h6 class="Desc">Gender :</h6>
                            <select  id="Gender-Input" class="Validation input" aria-placeholder="Male" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>    
                    <div id="ContactNumber-FormPart1-Registration">
                        <h6 class="Desc">Contact Number :</h6>
                        <div  class="Validation">
                            <p>+63</p>
                            <input type="text" id="ContactNumber-Input" placeholder="9156666147" class="input" name="mobile_number" value="{{ old('mobile_number') }}">	
                        </div>
                    </div>
                    <div id="Address-FormPart1-Registration">
                        <h6 class="Desc">Address (Subdivision / Street / Barangay / City) : </h6>
                        <input type="text" id="Address-Input"  class="Validation input" name="address" value="{{ old('address') }}" >	
                    </div>
                    <a id="next" data-Next="FormPart2">Next</a>
                </div>			
                <div id="FormPart2">
                    <div id="Email-FormPart2-Registration">
                        <h6 class="Desc">Email :</h6>
                        <input id="Email-Input" type="email" class="Validation" name="email" value="{{ old('email') }}" >
                    </div>
                    <div id="Username-FormPart2-Registration">
                        <h6 class="Desc">Username (5 - 8 Characters) :</h6>
                        <input id="Username-Input" type="text" class="Validation" name="username" value="{{ old('username') }}">
                    </div>

                    <div id="Password-FormPart2-Registration">
                        <h6 class="Desc">Password :</h6>
                        <div class="Validation">
                            <input id="Password-Input" type="password" name="password">
                            <div id="Password_eye">
                                <img data-status="false" src="image/png/Eye.png">
                            </div>
                        </div>
                        <span id="Password-Meter"></span>
                    </div>
                    <div id="Confirm-FormPart2-Registration" >
                        <h6 class="Desc">Confirm Password :</h6>
                        <input id="Confirm-Input" type="password" class="Validation" name="password_confirmation">
                    </div>
                    <button type="submit" id="finish">Finish</button>
                </div>

            </form> 
            <!-- NOTE * ID for every inputs
                First Name : #FirstName-Input
                Last Name : #LastName-Input
                Birthday : #Birthday-Input
                Contact Number: #ContactNumber-Input
                Address : #Address-Input
                
                Email : #Email-Input
                Username : #Username-Input
                Password : #Password-Input
                Confirm Password : #Confirm-Input
            -->               
        
        
        <!-- Get Startet -->
        
    </div>
</div>
