@extends('layouts.default')

@section('title','Blog')

@section('css')
	{{Html::style(env('PATH_FRONTEND').'/css/blog.css')}}
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
								<li class="active"><a href="#">ブログ</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="page-banner" id="blog">
					<div class="is-table-cell">
						<h1 class="title-page">Blog</h1>
						<p class="sub-title-page">-　ブログ　-</p>
					</div>
				</div>
			</div>
			<!-- END STATIC BANNER -->

			<div class="section blog-section">
				<div class="section-content">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="wrap-main-blog">
									@foreach($data as $item)
									<div class="each-blog {{$item == $data->last() ? 'last' : ''}}">
										<p class="time">{{date_format($item->created_at,'Y.m.d')}}</p>

										<a href="{{route('blog.detail',$item->id)}}" class="name-blog">{{$item->title}}</a>
										<a href="{{route('blog.detail',$item->id)}}"><img src="{{asset($item->img_url)}}" class="img-responsive" alt=""></a>
										<p>{{Str::words($item->content,30)}}</p>
									</div>
									@endforeach
								</div>
								<div class="wrap-pagination text-center">
									{{$data->links()}}
								</div>
							</div>
							<div class="col-md-4">
								<div class="wrap-sidebar-blog">
									<div class="box-blog">
										<h4 class="title-box">
											プレスルーム
										</h4>
										<ul class="list-box">
											@if(!$random->isEmpty())
												@foreach($random as $item_ran)
												<li><a href="{{route('blog.detail',$item->id)}}">{{$item_ran->title}}</a></li>
												@endforeach
											@endif
										</ul>
									</div>
									<div class="box-blog">
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