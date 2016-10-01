<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{!! csrf_token() !!}">
	<meta name="keywords" content="">
	<meta name="description" content="">

	{{Html::style(asset('assets/frontend').'/css/bootstrap.min.css')}}
	{{Html::style(asset('assets/frontend').'/css/animate.css')}}
	@yield('css')
	
	<title>@yield('title', 'Tenposs Offical')</title>
</head>

<body>
	<div class="page">
		@include('layouts.header')
			@yield('content')
		@include('layouts.footer')
	</div>
	
	{{Html::script(asset('assets/frontend').'/js/jquery-1.11.2.min.js')}}
	{{Html::script(asset('assets/frontend').'/js/bootstrap.min.js')}}
	@yield('script')
	{{Html::script(asset('assets/frontend').'/js/common.js')}}
</body>