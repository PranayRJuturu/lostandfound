@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Edit items</b></div>
		</div>
	</div>
    <div class="card-body">
        <form action="{{ url('update-data/'.$Postitem->id) }}" method="POST">
        @csrf
        @method('PUT')
     
            <div class="form-group">
                <label for="item_name"><b>Item Name</b></label>
                <input type="text" class="form-control" name="item_name" value="{{ $Postitem->item_name }}" />
            </div>
            <div class="form-group">
                <label for="Description"><b>Description</b></label>
                <input type="text" class="form-control" name="description" value="{{ $Postitem->description }}" />
            </div>
            <div class="form-group">
                <label for="Role"><b>Role</b></label>
                <input type="text" class="form-control" name="role" value="{{ $Postitem->role }}"  />
            </div>
            <center><button type="submit" class="btn btn-success">Update Details</button></center>
            
        </form>
    </div>
     </div>
</div>
@endsection