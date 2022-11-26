@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Details For the Lost And Found Items!!!!</b></div>
		</div>
	</div>
    <div class="card-body">
        <form action="{{ url('update-data-claimitem/'.$claimitem->id) }}" id="ordersubmitform" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                  Item Id -:  {{ $claimitem->id }}  
                  <br>
                  Item Name -:  {{ $claimitem->item_name }}
                 <br>
                  Description -: {{ $claimitem->description }}
                  <br>
                  Created_at -: {{ $claimitem->created_at }}
                </div>
                
            </div>
            <br>
            <div class="form-group">
                <label for="Role"><b>Role</b></label>
                <input type="text" class="form-control" name="role" value="{{ $claimitem->role }}"  />
            </div>
            <div class="form-group">
                <label for="mob_no"><b>Please provide your contact No.</b></label>
                <input type="text" class="form-control" maxlength="10" id="mob_no" name="mob_no"></textarea>
            </div>
            <div class="form-group">
                <label for="claim_item"><b>Where is the item?</b></label>
                <textarea id="claim_item" name="claim_item" rows="4" cols="130"></textarea>
            </div>
            <center><button type="submit"  id="btn-submit" class="btn btn-danger" >Claim Now</button></center>
        </div>
        </form>
        </div>
     </div>
</div>
@endsection

