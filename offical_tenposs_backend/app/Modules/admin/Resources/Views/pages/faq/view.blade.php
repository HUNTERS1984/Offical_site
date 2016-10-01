@extends('admin::layouts.default')

@section('content')
<section class="content-header">
  <h1>Blog</h1>
</section>
<section class="content">
	<div class="box">
		{{Form::model($data,array('route'=>array('admin.faq.update',$data->id),'method'=>'PUT' ,'class'=>'formAdmin form-horizontal','files'=>true))}}
			<div class="form-margin">
				<label for="faqtype_id">FAQ Type</label>
				{{Form::select('faqtype_id',$list,$data->faqtype_id,['class'=>'form-control'])}}
			</div>
			<div class="form-margin">
				<label for="name">Question</label>
				{{Form::text('question',old('question'),array('class'=>'form-control'))}}
			</div>

			<div class="form-margin">
				<label for="description">Answer</label>
				{{Form::textarea('answer',old('answer'),array('class'=>'form-control ckeditor'))}}
			</div>
			<div class="form-margin">
				<label for="order">Order</label>
				{{Form::text('order',old('order'),array('class'=>'form-control'))}}
			</div>
			<div class="form-margin">
				<div class="wrap-checkbox">
					<input type="checkbox" name="status" id="checkbox-10-{{$data->id}}" class="checkbox-form" value="{{$data->status}}" data-id="{{$data->id}}" {{$data->status=='1' ? 'checked' : '' }}  />
					<label for="checkbox-10-{{$data->id}}"></label>
				</div>
			</div>
			<div class="form-margin">
				{{Form::submit('Save',array('class'=>'btn btn-primary'))}}
			</div>
		{{Form::close()}}
	</div>
</section>
@stop

@section('script')
	{{Html::script(env('PATH_BACKEND').'/js/ckfinder/ckfinder.js')}}
	<!-- ICHECK -->
	<script>
		$(document).ready(function(){
	    	$('input[type="checkbox"]').change(function(){
	    		// var status;
	    		// if(this.checked){
	    		// 	$(this).attr('value',1);
	    		// }else{
	    		// 	$(this).attr('value',0);
	    		// }
	    	});
	    })
	</script>
@stop