@extends('layouts.default')

@section('title','FAQ')

@section('css')
	{{Html::style(env('PATH_FRONTEND').'/css/faq.css')}}
@stop

@section('script')
	{{Html::script(env('PATH_FRONTEND').'/js/jquery.viewportchecker.min.js')}}
	<script>
	$(document).ready(function(){

		$('.wrap-each').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated fadeInUp',
			offset : 150,
		})
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
								<li class="active"><a href="#">よくあるご質問</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="page-banner" id="faq">
					<div class="is-table-cell">
						<h1 class="title-page">FAQ</h1>
						<p class="sub-title-page">-　よくあるご質問　-</p>
					</div>
				</div>
			</div>
			<!-- END STATIC BANNER -->

			<div class="section faq-section">
				<div class="content-section">
					<div class="container">
						<div class="each-faq">
							<h3 class="title-each">“導入前”に関するご質問</h3>
							<div class="wrap-each">
								<div class="question">
									<span class="left">Q.</span>
									<span class="text">tenpossとは？</span>
								</div>
								<div class="answer">
									<span class="left">A.</span>
									<span class="text">お客様のオリジナルアプリを簡単に作成できます。プログラミングの知識は一切不要でリッチなアプリを簡単に作ることが 出来ます。また更新管理もPC・スマホから手軽に出来ます。詳しくは 概要 をご覧ください。</span>
								</div>
							</div>
							<div class="wrap-each">
								<div class="question">
									<span class="left">Q.</span>
									<span class="text">tenpossとは？</span>
								</div>
								<div class="answer">
									<span class="left">A.</span>
									<span class="text">お客様のオリジナルアプリを簡単に作成できます。プログラミングの知識は一切不要でリッチなアプリを簡単に作ることが 出来ます。また更新管理もPC・スマホから手軽に出来ます。詳しくは 概要 をご覧ください。</span>
								</div>
							</div>
							<div class="wrap-each last">
								<div class="question">
									<span class="left">Q.</span>
									<span class="text">tenpossとは？</span>
								</div>
								<div class="answer">
									<span class="left">A.</span>
									<span class="text">お客様のオリジナルアプリを簡単に作成できます。プログラミングの知識は一切不要でリッチなアプリを簡単に作ることが 出来ます。また更新管理もPC・スマホから手軽に出来ます。詳しくは 概要 をご覧ください。</span>
								</div>
							</div>
						</div>

						<div class="each-faq">
							<h3 class="title-each">“導入前”に関するご質問</h3>
							<div class="wrap-each last">
								<div class="question">
									<span class="left">Q.</span>
									<span class="text">tenpossとは？</span>
								</div>
								<div class="answer">
									<span class="left">A.</span>
									<span class="text">お客様のオリジナルアプリを簡単に作成できます。プログラミングの知識は一切不要でリッチなアプリを簡単に作ることが 出来ます。また更新管理もPC・スマホから手軽に出来ます。詳しくは 概要 をご覧ください。</span>
								</div>
							</div>
						</div>

					</div>
				</div>	<!-- end content section -->
			</div>
			<!-- END CONTACT -->

			@include('layouts.contact-section')
		</div>
		<!-- END MIDDLE -->
@stop