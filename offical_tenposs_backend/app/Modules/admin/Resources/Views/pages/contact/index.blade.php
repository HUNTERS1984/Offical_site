@extends('admin::layouts.default')

@section('content')
	<section class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="header">Contact</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="box-action pull-right">
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
					                <th>Fullname</th>
					                <th>Company</th>
					                <th>Phone</th>
					                <th>View</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					        	@if(! $data->isEmpty())
					        		@foreach($data as $item)
									<tr>
										<td>{{$item->id}}</td>
										<td>{{$item->fullname}}</td>
										<td>{{$item->company}}</td>
										<td>{{$item->phone}}</td>
										<td>
											<div class="wrap-checkbox">
												<input type="checkbox" id="checkbox-10-{{$item->id}}" class="checkbox-form" {{$item->viewed=='0' ? 'checked' : '' }} data-id="{{$item->id}}"/>
												<label for="checkbox-10-{{$item->id}}"></label>
											</div>
										</td>
										<td>
											<a href="{{route('admin.contact.show',$item->id)}}" class="btn btn-sm btn-info inline">Show</a>
											{{Form::open(['route'=>['admin.contact.destroy',$item->id],'method'=>'DELETE','class'=>'inline'])}}
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
            { "aTargets": [ 5 ], "bSortable": false },
        ],
        'columns':[
        	null,
        	{"width":"20%"},
        	{"width":"20%"},
        	{"width":"10%"},
        	{"width":"20%"},
        	{"width":"10%"},
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
    		var viewed;
    		var id = $(this).data('id');
    		if(this.checked){
    			viewed = 1;
    		}else{
    			viewed = 0;
    		}
    		$.ajax({
				'url':'{{route("admin.contact.status")}}',
				'type':'POST',
				'data': {id: id, viewed: viewed, _token:token },
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