<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	{{Html::style(env('PATH_FRONTEND').'/css/bootstrap.min.css')}}
	{{Html::style(env('PATH_FRONTEND').'/css/animate.css')}}
	@yield('css')
	
	<title>@yield('title', 'Tenposs Offical')</title>
</head>

<body>
	<div class="page">
		@include('layouts.header')
			@yield('content')
		@include('layouts.footer')
	</div>
	
	{{Html::script(env('PATH_FRONTEND').'/js/jquery-1.11.2.min.js')}}
	{{Html::script(env('PATH_FRONTEND').'/js/bootstrap.min.js')}}
	@yield('script')
	{{Html::script(env('PATH_FRONTEND').'/js/common.js')}}
</body>