@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit My Profile</div>
                    <div class="panel-body">
                        {!! Form::open(['action' => ['ProfilesController@update', Auth::user()->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        
                        {{-- <div class="form-group">
                            {{Form::label('profile_image', 'Profile Image')}}
                            {{Form::file('profile_image')}}
                        </div>

                        <div class="form-group">
                            {{Form::label('cover_image', 'Cover Image')}}
                            {{Form::file('cover_image')}}
                        </div> --}}

                        <div class="form-group">
                            {{Form::label('email', 'Email')}}
                            {{Form::text('email', Auth::user()->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('password', 'password')}}
                            {{Form::text('password', Auth::user()->password, ['class' => 'form-control', 'placeholder' => 'password'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('first_name', 'First Name')}}
                            {{Form::text('first_name', Auth::user()->first_name, ['class' => 'form-control', 'placeholder' => 'first_name'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('last_name', 'Last Name')}}
                            {{Form::text('last_name', Auth::user()->last_name, ['class' => 'form-control', 'placeholder' => 'last_name'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('username', 'Username')}}
                            {{Form::text('username', Auth::user()->username, ['class' => 'form-control', 'placeholder' => 'username'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('birthday', 'Birthday')}}
                            {{Form::date('birthday', Auth::user()->birthday, ['class' => 'form-control', 'placeholder' => 'birthday'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('gender', 'Gender')}}
                            {{Form::select('gender', ['Male' => 'Male', 'Female' => 'Female', 'Others' => 'Others'], Auth::user()->gender, ['class' => 'form-control', 'placeholder' => 'gender'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('mobile_number', 'Mobile Number')}}
                            {{Form::text('mobile_number', Auth::user()->mobile_number, ['class' => 'form-control', 'placeholder' => 'mobile_number'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('address', 'Address')}}
                            {{Form::text('address', Auth::user()->address, ['class' => 'form-control', 'placeholder' => 'address'])}}
                        </div>
                        
                        <div class="form-group">
                            {{Form::label('description', 'Description')}}
                            {{Form::textarea('description', Auth::user()->description, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Enter text'])}}
                        </div>

                        

                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
