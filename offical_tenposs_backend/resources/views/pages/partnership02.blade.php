@extends('layouts.default')

@section('title','PARTNERSHIP')

@section('css')
	{{Html::style(env('PATH_FRONTEND').'/css/partnership.css')}}
@stop

@section('script')
	{{Html::script(env('PATH_FRONTEND').'/js/jquery.viewportchecker.min.js')}}
	{{Html::script(env('PATH_FRONTEND').'/js/jquery.matchHeight-min.js')}}
	<script>
		$('.each-partner').matchHeight();
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
								<li class="active"><a href="#">公認パートナー</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="page-banner" id="partnership">
					<div class="is-table-cell">
						<h1 class="title-page">Partner Ship</h1>
						<p class="sub-title-page">-　公認パートナー　-</p>
					</div>
				</div>
			</div>
			<!-- END STATIC BANNER -->

			<div class="section parnert01-section">

				<div class="content-section">
					<div class="container">
						<p class="content-partner">私たちは、お客様に最高の体験をしていただくために、優れた技術的スキルや深い製品知識もつ 世界中のパートナーとチームを組んでいます。コンサルティング、技術的サポート、カスタム開発をはじめ、tenpossでのあらゆるサービスに関して、豊富な知識を持ったtenposs公認パートナーへご相談ください。</p>
						<div class="row">
							@foreach($data as $item)
							<div class="col-md-4">
								<div class="each-partner">
									<a href="#"><img src="{{env('PATH_FRONTEND')}}/img/partnership/tenposs-partnership-02-02.jpg" class="img-responsive" height="160" width="160" alt=""></a>
									<h3 class="title-each-partner">{{$item->title}}</h3>
									<p class="content">{{Str::words($item->content,30)}}</p>
								</div>
							</div>
							@endforeach
						</div>
						<div class="row">
							<div class="wrap-pagination text-center">
								{{$data->links()}}
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