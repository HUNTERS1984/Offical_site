@extends('layouts.default')

@section('title','INTRODUCTION CASE')

@section('css')
	{{Html::style(env('PATH_FRONTEND').'/css/introcase.css')}}
@stop

@section('script')
	{{Html::script(env('PATH_FRONTEND').'/js/jquery.viewportchecker.min.js')}}
	{{Html::script(env('PATH_FRONTEND').'/js/jquery.matchHeight-min.js')}}

	<script>
	$(document).ready(function(){
		$('.each-introcase').matchHeight();
	})
	</script>
@stop

@section('content')
	<div class="middle page">
		<div class="static-banner">
			<div class="breadcrum">
				<div class="container">
					<div class="row">
						<ul class="breadcrum-me">
							<li><a href="javascript:avoid()">Top</a></li>
							<li ><a href="#">お客様ストーリー・導入事例</a></li>
							<li class="active"><a href="#">店名が入ります</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="page-banner" id="introcase">
				<div class="is-table-cell">
					<h1 class="title-page">Introduction Case</h1>
					<p class="sub-title-page">-　導入事例　-</p>
				</div>
			</div>
		</div>
		<!-- END STATIC BANNER -->

		<div class="section introcase-section">
			<h2 class="title-section">あなたの会社に近い業種を選択して下さい。</h2>
			<div class="content-section">
				<div class="container">
					<select name="test" id="choseCase">
						<option value="">け・レ</option>
						<option value="">Case 02</option>
					</select>
					<div class="row">
						<div class="col-md-4">
							<div class="each-introcase">
								<a href="#"><img src="{{env('PATH_FRONTEND')}}/img/introduction/img-troduction.jpg" class="img-responsive"  alt=""></a>
								<h3 class="title-each-introcase"><a href="#">店名が入ります</a></h3>
								<p class="content"><a href="#">テキストが入りますテキストが入ります テキストが入りますテキストが入ります</a></p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="each-introcase">
								<a href="#"><img src="{{env('PATH_FRONTEND')}}/img/introduction/img-troduction.jpg" class="img-responsive"  alt=""></a>
								<h3 class="title-each-introcase"><a href="#">店名が入ります</a></h3>
								<p class="content"><a href="#">テキストが入りますテキストが入ります テキストが入りますテキストが入ります</a></p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="each-introcase">
								<a href="#"><img src="{{env('PATH_FRONTEND')}}/img/introduction/img-troduction.jpg" class="img-responsive"  alt=""></a>
								<h3 class="title-each-introcase"><a href="#">店名が入ります</a></h3>
								<p class="content"><a href="#">テキストが入りますテキストが入ります テキストが入りますテキストが入ります</a></p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="each-introcase">
								<a href="#"><img src="{{env('PATH_FRONTEND')}}/img/introduction/img-troduction.jpg" class="img-responsive"  alt=""></a>
								<h3 class="title-each-introcase"><a href="#">店名が入ります</a></h3>
								<p class="content"><a href="#">テキストが入りますテキストが入ります テキストが入りますテキストが入ります</a></p>
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="wrap-pagination text-center">
							<ul class = "pagination">
							   <li><a href = "#">1</a></li>
							   <li><a href = "#">2</a></li>
							   <li><a href = "#">3</a></li>
							   <li><a href = "#">&#62;</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END SEARCH -->

		@include('layouts.contact-section')
	</div>
	<!-- END MIDDLE -->
@stop