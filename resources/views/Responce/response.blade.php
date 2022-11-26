@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>My Responses</b></div>
		</div>
	</div>
	<div class="card-body">
     @foreach($data1 as $data)
		
                <div class="card">
                <div class="card-body">
                  Item Id -:  {{ $data->id }}
                  <br>
                  Item Name -:  {{ $data->item_name }}
                  <br>
                  Description -: {{ $data->description }}
                  <br>
                  Created_at -: {{ $data->created_at }}
                  
                  <br>
                  Where is item? -: <button class="btn btn-success btn-sm">{{ $data->claim_item }}</button>
                  <br>
                   Mobile No -: <button class="btn btn-primary btn-sm">{{ $data->mob_no }}</button>
                </div>
                
            </div>
          @endforeach
		</div>
	</div>
</div>
@endsection


