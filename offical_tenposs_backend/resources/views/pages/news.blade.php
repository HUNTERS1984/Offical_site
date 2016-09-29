@extends('layouts.default')

@section('title','NEWS')

@section('css')
	{{Html::style(env('PATH_FRONTEND').'/css/news.css')}}
@stop

@section('script')
	{{Html::script(env('PATH_FRONTEND').'/js/jquery.viewportchecker.min.js')}}
@stop

@section('content')
	<div class="middle page">
		<div class="static-banner">
			<div class="breadcrum">
				<div class="container">
					<div class="row">
						<ul class="breadcrum-me">
							<li><a href="javascript:avoid()">Top</a></li>
							<li class="active"><a href="#">ニュース</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="page-banner" id="news">
				<div class="is-table-cell">
					<h1 class="title-page">NEWS</h1>
					<p class="sub-title-page">-　ニュース　-</p>
				</div>
			</div>
		</div>
		<!-- END STATIC BANNER -->

		<div class="section news-section">
			<div class="section-content">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="wrap-main-news">
								<h3 class="title-news">プレスリリース</h3>
								<?php
									$total = $data->count();
									$flag = 1;
								 ?>
								@foreach($data as $item)
								<div class="each-news {{$item == $data->last() ? 'last' : ''}}">
									<p class="time">{{date_format($item->created_at,'Y.m.d')}}</p>
									<a href="#" class="name-news">{{$item->title}}</a>
								</div>
								<?php $flag++ ?>
								@endforeach
							</div>
							<div class="wrap-pagination text-center">
								{{$data->links()}}
							</div>
						</div>
						<div class="col-md-4">
							<div class="wrap-sidebar-news">
								<div class="box-news">
									<h4 class="title-box">
										プレスルーム
									</h4>
									<ul class="list-box">
										<li><a href="#">プレスリリース</a></li>
										<li><a href="#">調査リリース</a></li>
										<li><a href="#">メディア掲載</a></li>
										<li><a href="#">登壇情報</a></li>
										<li><a href="#">その他</a></li>
									</ul>
								</div>
								<div class="box-news">
									<h4 class="title-box">
										プレスルーム
									</h4>
									<ul class="list-box">
										<li><a href="#">プレスリリース</a></li>
										<li><a href="#">調査リリース</a></li>
										<li><a href="#">メディア掲載</a></li>
										<li><a href="#">登壇情報</a></li>
										<li><a href="#">その他</a></li>
									</ul>
								</div>
							</div>
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