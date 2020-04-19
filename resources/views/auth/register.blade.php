<div id="Module-Registration">
    <div id="Container-Registration">
        <img src="/storage/images/png/Close.png" id="Module_close" alt="X">
        <!-- LEFT SIDE -->
        <div id="PreView-Registration"></div>
        <!-- RIGHT SIDE -->
        <div id="Form-Registration">
            <h2>Create an Account</h2>
            <p>It's quick and easy</p>
            <div id="error">
                <img  src="/storage/images/png/Heart.png" alt="">
                <p id="error-message">You didn't fill the input box</p>
                <div id="error-close">
                    <div>
                        <img src="/storage/images/png/Close.png"alt="X">
                    </div>
                </div>
            </div>
            <form  id="SignUp_Form"  method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                {{ csrf_field() }}  
                <div id="FormPart1">
                    <div id="Name-FormPart1-Registration" >
                        <div id="FirstName-FormPart1-Registration">
                            <h6 class="Desc">First Name :</h6>
                            <input id="FirstName-Input" type="text" placeholder="ex. Dianne Chrystalin"  class="Validation" name="first_name" value="{{ old('first_name') }}" autofocus>
                        </div> 
                        <div id="LastName-FormPart1-Registration">
                            <h6 class="Desc">Last Name :</h6>
                            <input id="LastName-Input" type="text" placeholder="ex. Brandez"  class="Validation" name="last_name" value="{{ old('last_name') }}" autofocus>
                        </div>
                        </div>
                        <div id="Birthday-FormPart1-Registration">
                            <h6 class="Desc">Birthday :</h6>
                            <input id="Birthday-Input" type="date"  class="Validation" name="birthday" value="{{ old('birthday') }}">
                        </div>
                        <div id="ContactNumber-FormPart1-Registration">
                            <h6 class="Desc">Contact Number :</h6>
                            <div  class="Validation">
                                <p>+63</p>
                                <input type="text" name="" id="ContactNumber-Input" placeholder="9156666147" name="mobile_number" value="{{ old('mobile_number') }}" >	
                            </div>
                        </div>
                        <div id="Address-FormPart1-Registration">
                            <h6 class="Desc">Address (Subdivision / Street / Barangay / City) : </h6>
                        <div>
                            <input type="text" name="" id="Address-Input"  class="Validation" name="address" value="{{ old('address') }}">	
                        </div>
                        
                        <a id="next" data-Next="FormPart2">Next</a>
                    </div>		
                </div>			
                <div id="FormPart2">	
                    <div id="Email-FormPart2-Registration">
                        <h6 class="Desc">Email :</h6>
                        <input id="Email-Input" type="email" class="Validation"  name="email" value="{{ old('email') }}">
                    </div>
                    <div id="Username-FormPart2-Registration">
                        <h6 class="Desc">Username (5 - 8 Characters) :</h6>
                        <input id="Username-Input" type="text" class="Validation">
                    </div>
                    <div id="Password-FormPart2-Registration">
                        <h6 class="Desc">Password :</h6>
                        <div class="Validation">
                            <input id="Password-Input" type="password" name="password">
                            <div id="Password_eye">
                                <img data-status="false" src="/storage/images/png/Eye.png" alt="">
                            </div>
                        </div>
                        <span id="Password-Meter"></span>
                    </div>
                    <div id="Confirm-FormPart2-Registration" >
                        <h6 class="Desc">Confirm Password :</h6>
                        <input id="Confirm-Input" type="password" class="Validation" name="password_confirmation">
                    </div>
                    <a id="finish">Finish</a>
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
        </div>
        <!-- Get Startet -->
    </div>
</div>















{{-- 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">Birthday</label>

                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" value="{{ old('birthday') }}" required autofocus>

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <select id="gender" class="form-control" name="gender" >  
                                    <option value = "Male">Male</option>
                                    <option value = "Female">Female</option>
                                    <option value = "Others">Others</option>
                                </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                            <label for="mobile_number" class="col-md-4 control-label">Mobile Number</label>

                            <div class="col-md-6">
                                <input id="mobile_number" type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}" required autofocus>

                                @if ($errors->has('mobile_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 --}}
