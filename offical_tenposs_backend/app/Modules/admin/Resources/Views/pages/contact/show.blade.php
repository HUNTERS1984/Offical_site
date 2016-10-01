@extends('admin::layouts.default')

@section('content')
<section class="content-header">
  <h1>Blog</h1>
</section>
<section class="content">
	<div class="box box-display">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">Company</div>
				<div class="col-sm-9">{{$data->company}}</div>
			</div>
			<div class="row">
				<div class="col-sm-3">Bussiness</div>
				<div class="col-sm-9">{{$data->bussiness}}</div>
			</div>
			<div class="row">
				<div class="col-sm-3">Fullname</div>
				<div class="col-sm-9">{{$data->fullname}}</div>
			</div>
			<div class="row">
				<div class="col-sm-3">Nickname</div>
				<div class="col-sm-9">{{$data->nickname}}</div>
			</div>
			<div class="row">
				<div class="col-sm-3">Phone</div>
				<div class="col-sm-9">{{$data->phone}}</div>
			</div>
			<div class="row">
				<div class="col-sm-3">Email</div>
				<div class="col-sm-9">{{$data->email}}</div>
			</div>
			<div class="row">
				<div class="col-sm-3">Reason choose TENPOSS</div>
				<div class="col-sm-9">{{$data->reason}}</div>
			</div>
			<div class="row">
				<div class="col-sm-3">Message</div>
				<div class="col-sm-9">{{$data->message}}</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					{{Form::open(['route'=>['admin.contact.destroy',$data->id],'method'=>'DELETE','class'=>'inline'])}}
						<button class="btn btn-sm btn-danger " type="button" onclick="confirm_remove(this)">Delete</button>
					{{Form::close()}}
				</div>
			</div>
		</div>
	</div>
</section>
@stop

@section('script')
	{{Html::script(env('PATH_BACKEND').'/js/ckfinder/ckfinder.js')}}
	<!-- ICHECK -->
	<script>
		$(document).ready(function(){
	    	$('input[type="checkbox"]').change(function(){
	    	});
	    })

	    function confirm_remove(a){
			alertify.confirm('You can not undo this action. Are you sure ?', function(e){
				if(e){
					a.parentElement.submit();
				}
			});
		}
	</script>
@stop