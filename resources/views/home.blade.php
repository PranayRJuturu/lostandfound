@extends('layouts.app')
@section('content')
<div class="container">

     <h2> Welcome {{ Auth::user()->name }} </h2>

<br>
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>View items</b></div>

		</div>
	</div>
	<div class="card-body">
     @foreach($data as $key => $data)
		<table class="table table-bordered">
			<tr>
				<th>Sr No.</th>
				<th>Item Name</th>
				<th>Description</th>
				<th>Role</th>
				<th>created_at</th>
			</tr>
					<tr>
						<td>{{$key+1}}</td>
						<td>{{ $data->item_name }}</td>
                        <td>{{ $data->description }}</td>
						<td>{{ $data->role }}</td>
						<td>{{ $data->created_at }}</td>
						<td>
					@csrf
					@method('POST')
					
								<a  href= 'claim_item/{{ $data->id }}' class="btn btn-info btn-sm">Claim Item</a>
					</td>
				</tr>
		</table>
          @endforeach
	</div>
</div>
</div>

@endsection

