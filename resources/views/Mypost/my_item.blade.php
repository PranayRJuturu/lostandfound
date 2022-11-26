@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>My Added items</b></div>
		</div>
	</div>
	<div class="card-body">
	@if(session()->has('message'))
                <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                   {{ session('message') }}
                    </div>
    @endif

     @foreach($data as $data)
		<table class="table table-bordered">
			<tr>
				<th>Item Name</th>
				<th>Description</th>
				<th>Role</th>
				<th>created_at</th>
			</tr>
					<tr>
						<td>{{ $data->item_name }}</td>
                        <td>{{ $data->description }}</td>
						<td>{{ $data->role }}</td>
						<td>{{ $data->created_at }}</td>
					</tr>
                    <td>
								@csrf
								@method('POST')
								<a  href= 'edit/{{ $data->id }}' class="btn btn-info btn-sm"> Edit</a>
								<a href = 'delete/{{ $data->id }}' class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>		
                    </td>
			</table>
          @endforeach
		</div>
	</div>
</div>
@endsection


