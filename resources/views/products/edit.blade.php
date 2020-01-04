@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Item</div>
                <div class="panel-body">
                    {!! Form::open(['action' => ['ProductsController@update', $prod->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    <div class="row form-group">
                        <div class="{{$errors->has('item_name') ? ' has-error' : ''}}">
                            {{Form::label('title', 'Item Name',['class' => 'col-md-2 control-label'])}}
                            <div class="col-md-8">
                                {{Form::text('item_name', $prod->item_name, ['class' => 'form-control', 'placeholder' => 'Item name'])}}

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
                                    @foreach ($categs as $categ)
                                        @if ($categ == $prod->category)
                                            <option selected="true" value="{{$categ}}">{{$categ}}</option>
                                        @else
                                            <option value="{{$categ}}">{{$categ}}</option>
                                        @endif
                                    @endforeach
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
                                    @foreach ($quals as $qual)
                                        @if ($qual == $prod->quality)
                                            <option selected="true" value="{{$qual}}">{{$qual}}</option>
                                        @else
                                            <option value="{{$qual}}">{{$qual}}</option>
                                        @endif
                                    @endforeach
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
                                {{Form::text('quantity', $prod->quantity, ['class' => 'form-control', 'placeholder' => '0'])}}
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
                                {{Form::text('location', $prod->location, ['class' => 'form-control', 'placeholder' => 'Ex. San Mateo Rizal'])}}

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
                                {{Form::textarea('description', $prod->description, ['class' => 'form-control', 'placeholder' => 'ex. brand, model, specs and etc.'])}}

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
                                {{Form::textarea('reason_for_trading', $prod->reason_for_trading, ['class' => 'form-control', 'placeholder' => 'ex. change of hobby, moving into a new home, focusing on work, etc.'])}}

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
                                    @foreach ($categs as $categ)
                                        @if ($categ == $prod->desired_item)
                                            <option selected="true" value="{{$categ}}">{{$categ}}</option>
                                        @else
                                            <option value="{{$categ}}">{{$categ}}</option>
                                        @endif
                                    @endforeach
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
                                {{Form::text('tags', $prod->tags, ['class' => 'form-control', 'placeholder' => 'Additional tags: ex. toys, sports, console'])}}
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

                    <div class="form-group btn-toolbar">
                        <div class="col-md-5">
                            {{Form::hidden('_method', 'PUT')}}
                            {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
        </div>
    </div>
</div>
@endsection