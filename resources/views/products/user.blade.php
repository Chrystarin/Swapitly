@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <div class='page-header'>
        <div class='btn-toolbar pull-right'>
            <div class='btn-group'>
                <a href="\products\create" class='btn btn-primary'>Add Product</a>
            </div>
        </div>
        <h2>Products</h2>
    </div>
    @if (count($prods) > 0)
        @foreach($prods as $prod)
            <a href="/products/{{$prod->id}}" style="text-decoration: none; color: inherit;">
                <div class="row">
                    @foreach ($prod->productFiles as $file)
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <img class="img-responsive" src="/storage/item_images/{{$file->media_file}}" alt="Image">
                        </div>
                    @endforeach
                </div>
                <div class="well">
                    <h3>{{$prod->item_name}}</h3>
                    <p>{{$prod->description}}</p>
                </div>
            </a>
        @endforeach
    @else
        <div>NO PRODUCTS</div>
    @endif
</div>
@endsection
