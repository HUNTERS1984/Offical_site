@extends('admin::layouts.default')

@section('content')
<section class="content-header">
  <h1>Blog</h1>
</section>
<section class="content">
	<div class="box">
		{{Form::open(array('route'=>'admin.faq.store','class'=>'formAdmin form-horizontal','files'=>true))}}
			<div class="form-margin">
				<label for="faqtype_id">FAQ Type</label>
				{{Form::select('faqtype_id',$list,'',['class'=>'form-control'])}}
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
				{{Form::submit('Save',array('class'=>'btn btn-primary'))}}
			</div>
		{{Form::close()}}
	</div>

</section>
@stop

@section('script')
	{{Html::script(env('PATH_BACKEND').'/js/ckfinder/ckfinder.js')}}
	{{Html::style('public/assets/backend/css/select.css')}}
@stop