@extends('layouts.default')

@section('title','FEE')

@section('css')
	{{Html::style(env('PATH_FRONTEND').'/css/fee.css')}}
@stop

@section('script')
	{{Html::script(env('PATH_FRONTEND').'/js/jquery.viewportchecker.min.js')}}
	{{Html::script(env('PATH_FRONTEND').'/js/jquery.matchHeight-min.js')}}
	<script>
	$(document).ready(function(){

		$('.table-fee').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated slideInRight',
			offset : 150,
		})

		$('.table-fee').matchHeight();
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
						<li class="active"><a href="#">価格</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="page-banner" id="fee">
			<div class="is-table-cell">
				<h1 class="title-page">Fee</h1>
				<p class="sub-title-page">-　価格　-</p>
			</div>
		</div>
	</div>
	<!-- END STATIC BANNER -->

	<div class="section fee-section">
	<h2 class="title-section">価格表</h2>
		<div class="content-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<table class="table-fee fee1" border="0" cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th colspan="2">お試しプラン</th>
								</tr>
							</thead>
							<tbody>
							<tr>
								<td class="wrap-td">
									<table width="100%" cellpadding="0" cellspacing="0" border="0" class="tb-wrap">
										<tr>
											<td width="35%">
												<p class="title">価格</p>
											</td>
											<td width="65%">
												<p class="content">
													0円
												</p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="title">月額</p>
											</td>
											<td>
												<p class="content">0円</p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="title">納期</p>
											</td>
											<td>
												<p class="content">着手日より３営業日〜</p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="title">支給データ</p>
											</td>
											<td>
												<p class="content">ロゴデータ （ai形式）</p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="title">納品物</p>
											</td>
											<td>
												<p class="content">
													<ul>
														<li>スマホサイト （操作方法・各機能確認用）</li>
														<li>デモアプリ</li>
													</ul>
												</p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
								
							</tbody>
						</table>
					</div>

					<div class="col-md-4">
						<table class="table-fee fee2" border="0" cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th colspan="2">スマホプラン</th>
								</tr>
							</thead>
							<tbody>
							<tr>
								<td class="wrap-td">
									<table width="100%" cellpadding="0" cellspacing="0" border="0" class="tb-wrap">
										<tr>
											<td width="35%">
												<p class="title">価格</p>
											</td>
											<td width="65%">
												<p class="content">
													80,000円<small>（税別）</small> 
												</p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="title">8,000円 <small>（税別）</small></p>
											</td>
											<td>
												<p class="content">着手日より３営業日〜</p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="title">納期</p>
											</td>
											<td>
												<p class="content">ロゴデータ（ai形式）</p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="title">支給データ</p>
											</td>
											<td>
												<p class="content">ロゴデータ （ai形式）</p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="title">納品物</p>
											</td>
											<td>
												<p class="content">
													<ul>
														<li>スマホサイト</li>
														<li>アプリ（iOS・Android）</li>
													</ul>
												</p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
								
							</tbody>
						</table>
					</div>

					<div class="col-md-4">
						<table class="table-fee fee3" border="0" cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th colspan="2">レスポンシブプラン</th>
								</tr>
							</thead>
							<tbody>
							<tr>
								<td class="wrap-td">
									<table width="100%" cellpadding="0" cellspacing="0" border="0" class="tb-wrap">
										<tr>
											<td width="35%">
												<p class="title">価格</p>
											</td>
											<td width="65%">
												<p class="content">
													100,000円 <small>（税別）</small>
												</p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="title">月額</p>
											</td>
											<td>
												<p class="content">10,000円 <small>（税別）</small></p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="title">納期</p>
											</td>
											<td>
												<p class="content">着手日より３営業日〜</p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="title">支給データ</p>
											</td>
											<td>
												<p class="content">ロゴデータ （ai形式）</p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="title">納品物</p>
											</td>
											<td>
												<p class="content">
													<ul>
														<li>スマホサイト</li>
														<li>レスポンシブサイト</li>
														<li>アプリ（iOS・Android）</li>
													</ul>
												</p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
								
							</tbody>
						</table>
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
