@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Item Registration</div>
                <div class="panel-body">
                    {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    <div class="row form-group">
                        <div class="{{$errors->has('item_name') ? ' has-error' : ''}}">
                            {{Form::label('title', 'Item Name',['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-8">
                                {{Form::text('item_name', '', ['class' => 'form-control', 'placeholder' => 'Item name'])}}

                                @if ($errors->has('item_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-2 control-label">Category</label>
                            <div class="col-md-2">
                                <select id="category" class="form-control" name="category" >  
                                    <option value = "Accessories">Accessories</option>
                                    <option value = "Appliances">Appliances</option>
                                    <option value = "Electronics">Electronics</option>
                                    <option value = "Entertainment">Entertainment</option>
                                    <option value = "Fashion">Fashion</option>
                                    <option value = "Gadgets">Gadgets</option>
                                    <option value = "Hobbies">Hobbies</option>
                                    <option value = "Stationary">Stationary</option>
                                    <option value = "Others">Others</option>
                                </select>
                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="{{ $errors->has('quality') ? ' has-error' : '' }}">
                            <label for="quality" class="col-md-1 control-label">Quality</label>
                            <div class="col-md-2">
                                <select id="quality" class="form-control" name="quality" >  
                                    <option value = "Brand New">Brand New</option>
                                    <option value = "Used">Used</option>
                                    <option value = "Others">Others</option>
                                </select>
                                @if ($errors->has('quality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quality') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <label for="quantity" class="col-md-1 control-label">Quantity</label>
                            <div class="col-md-2">
                                {{Form::text('quantity', '', ['class' => 'form-control', 'placeholder' => '0'])}}
                                @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="form-group{{$errors->has('location') ? ' has-error' : ''}}">
                            {{Form::label('title', 'Location',['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-8">
                                {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Ex. San Mateo Rizal'])}}

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="form-group{{$errors->has('description') ? ' has-error' : ''}}">
                            {{Form::label('description', 'Description & Specification', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-8">
                                {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'ex. brand, model, specs and etc.'])}}

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="form-group{{$errors->has('reason_for_trading') ? ' has-error' : ''}}">
                            {{Form::label('reason_for_trading', 'Reason for Trading', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-8">
                                {{Form::textarea('reason_for_trading', '', ['class' => 'form-control', 'placeholder' => 'ex. change of hobby, moving into a new home, focusing on work, etc.'])}}

                                @if ($errors->has('reason_for_trading'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reason_for_trading') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                       
                    
                    <div class="row form-group">
                        <div class="{{ $errors->has('desired_item') ? ' has-error' : '' }}">
                            <label for="desired_item" class="col-md-2 control-label">Desired Item</label>
                            <div class="col-md-2">
                                <select id="desired_item" class="form-control" name="desired_item" >  
                                    <option value = "Accessories">Accessories</option>
                                    <option value = "Appliances">Appliances</option>
                                    <option value = "Electronics">Electronics</option>
                                    <option value = "Entertainment">Entertainment</option>
                                    <option value = "Fashion">Fashion</option>
                                    <option value = "Gadgets">Gadgets</option>
                                    <option value = "Hobbies">Hobbies</option>
                                    <option value = "Stationary">Stationary</option>
                                    <option value = "Others">Others</option>
                                </select>
                                @if ($errors->has('desired_item'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('desired_item') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="{{ $errors->has('tags') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                {{Form::text('tags', '', ['class' => 'form-control', 'placeholder' => 'Additional tags: ex. toys, sports, console'])}}
                                @if ($errors->has('tags'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tags') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="form-group{{$errors->has('media_file') ? ' has-error' : ''}}">
                            {{Form::label('media_file', 'Media File', ['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-8">

                                {{Form::file('media_file[]', ['class' => 'form-control', 'multiple' => 'true'])}}

                                @if ($errors->has('media_file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('media_file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <hr>

                    <h1>Mode of Transaction</h1>

                    <div class="row form-group">
                        <div class="{{$errors->has('mode_of_trading') ? ' has-error' : ''}}">
                            <div class="row col-md-5 form-group">
                                <label>{{Form::checkbox('pickup', 'Pickup')}}Pickup</label>
                            </div>

                            <div class="row col-md-8 form-group">
                                <label>{{Form::checkbox('delivery', 'Delivery')}}Delivery</label>
                                
                            </div>

                            <div class="row col-md-8 form-group">
                                <label>{{Form::checkbox('meetup', 'Meetup')}}Meetup</label>
                                
                            </div>

                            <div class="row col-md-8 form-group">
                                <label>{{Form::checkbox('terms_and_condition', 'Terms and Condition')}}I have read and accept the Terms and Condition</label>
                                
                            </div>
                        </div>
                    </div>

                    <div class="form-group btn-toolbar pull-right">
                        <div class="col-md-5">
                            {{Form::submit('Register', ['class' => 'btn btn-primary'])}}
                        </div>
                    </div>
                        
                    {!! Form::close() !!}
                </div>
        </div>
    </div>
</div>
@endsection