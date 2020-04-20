<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Website Icon --}}
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <!-- Styles -->
    <link href="css/compile.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/try1.js"></script>
    
</head>
<body>
    <header>
		@include('inc.nav')
    </header>
    
    <div id="app">
        @yield('content')
    </div>
	@include('auth.register')
    
</body>
</html>
