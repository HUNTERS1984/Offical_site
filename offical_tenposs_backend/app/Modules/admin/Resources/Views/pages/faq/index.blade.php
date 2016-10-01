@extends('admin::layouts.default')

@section('content')
	<section class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="header">FAQ</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="box-action pull-right">
						<button type="button" class="btn-info btn btn-sm" data-toggle="modal" data-target="#faqModal">FAQ Category</button>
						<a href="{!!route('admin.faq.create')!!}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i> Add New</a>
						<!-- <button type="button" class="btn btn-danger btn-sm" data-method="remove" id="btn-remove"><i class="glyphicon glyphicon-remove"></i> Remove</button> -->
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<table class="table table-hover" id="users-table">
					        <thead>
					            <tr>
					                <th>Id</th>
					                <th>No.</th>
					                <th>Question</th>
					                <th>Status</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					        	@if(!$data->isEmpty())
					        		@foreach($data as $item)
									<tr>
										<td>{{$item->id}}</td>
										<td>{{$item->order}}</td>
										<td>{{$item->question}}</td>
										<td>
											<div class="wrap-checkbox">
												<input type="checkbox" id="checkbox-10-{{$item->id}}" class="checkbox-form" {{$item->status=='1' ? 'checked' : '' }} data-id="{{$item->id}}"/>
												<label for="checkbox-10-{{$item->id}}"></label>
											</div>
										</td>
										<td>
											<a href="{{route('admin.faq.edit',$item->id)}}" class="btn btn-sm btn-info inline">Edit</a>
											{{Form::open(['route'=>['admin.faq.destroy',$item->id],'method'=>'DELETE','class'=>'inline'])}}
												<button class="btn btn-sm btn-danger " type="button" onclick="confirm_remove(this)">Delete</button>
											{{Form::close()}}
										</td>
									</tr>
									@endforeach
					        	@else
									<tr>
										<td colspan="4">No data</td>
									</tr>
					        	@endif
					        </tbody>
					    </table>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Modal -->
<div class="modal fade" id="faqModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">FAQ Category</h4>
			</div>
			<div class="modal-body">
				<div class="wrap-modal top-body">
					<h3 class="title-modal">Add more FAQ Category</h3>
					{{Form::open(['route'=>'admin.faq.add_type'])}}
						<div class="form-group">
							<div class="container-fluid">
								<div class="row">
									<div class="col-sm-9">
										{{Form::text('title',old('title'),array('class'=>'form-control') )}}
									</div>
									<div class="col-sm-3">
										{{Form::submit('Save',['class'=>'btn btn-info'])}}
									</div>
								</div>
							</div>
						</div>
					{{Form::close()}}
				</div>
				<div class="wrap-modal bottom-body">
					<h3 class="title-modal">FAQ Category</h3>
					<div class="wrap-table">
						@if(!$type->isEmpty())
							@foreach($type as $item_type)
							<div class="form-group">
								{{Form::model($item_type,['route'=>['admin.faq.edit_type',$item_type->id]])}}
									<div class="container-fluid">
										<div class="row">
											<div class="col-sm-8">
												{{Form::text('title',old('title'), ['class'=>'form-control'])}}
											</div>
											<div class="col-sm-4">
												{{Form::submit('Save',['class'=>'btn btn-sm btn-info'])}}
												<a href="{{route('admin.faq.delete_type',$item_type->id)}}" class="btn btn-sm btn-danger">Remove</a>
											</div>
										</div>
									</div>
								{{Form::close()}}
							</div>
							@endforeach
						@endif
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>


@stop

@section('script')
<script>
$(function() {
	{!!Notification::showSuccess('alertify.success(":message");') !!}
	{!!Notification::showError('alertify.error(":message");') !!}


	var table = $("#users-table").DataTable({
		'bLengthChange':false,
		"paging":true,
		'pageLength':15,
		 aoColumnDefs: [
            { "aTargets": [ 0 ], "bSortable": false, "visible": false, "searchable": false},
            { "aTargets": [ 2 ], "bSortable": false },
            { "aTargets": [ 3 ], "bSortable": false },
            { "aTargets": [ 4 ], "bSortable": false },
        ],
        'columns':[
        	null,
        	{"width":"10%"},
        	null,
        	{"width":"10%"},
        	{"width":"20%"},
        ],

	});

    $("#users-table tbody").on('click','tr',function(){
    	$(this).toggleClass('selected');
    });

    $("#btn-remove").click(function(){
    	console.log(table.row('.selected').data().length)
    })


    $(document).ready(function(){
    	var token = $('meta[name="csrf-token"]').attr('content');
    	$('input[type="checkbox"]').change(function(){
    		var status;
    		var id = $(this).data('id');
    		if(this.checked){
    			status = 1;
    		}else{
    			status = 0;
    		}
    		$.ajax({
				'url':'{{route("admin.faq.status")}}',
				'type':'POST',
				'data': {id: id, status: status, _token:token },
				beforeSend:function(){
					$('.wrap-loading').fadeIn();
				},
				success:function(data){
					$('.wrap-loading').fadeOut();
				}

			})
    	});
    })
});

function confirm_remove(a){
	alertify.confirm('You can not undo this action. Are you sure ?', function(e){
		if(e){
			a.parentElement.submit();
		}
	});
}

</script>
@stop