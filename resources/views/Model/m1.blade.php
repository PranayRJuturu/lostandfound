@extends('layouts.app')
@section('content')

        <button type="button" class="btn btn-success ml-auto mr-1 float-left" data-toggle="modal" data-target="#postitem">
                Post an Item
        </button>

<div class="modal fade" id="postitem" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true"  style="width: 1200px;">
    <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 750px;">
    <form action="{{ route('m1') }}" method="post" >
       @csrf
     
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Post item</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       <div class="modal-body">
                <div class="form-group">
                    <label>Item Name:</label>
                    <input type="text" class="form-control" name="item_name" placeholder="Enter item name" />
                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <input type="textarea" class="form-control" name="description" placeholder="Enter Description..." />
                </div>
             
                <div class="form-group">
                <lable>Item Type</label>
                                <select id="role" name="role" type="text" class="select2  form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" value="{{ old('role') }}" required autofocus>
                                    <option value="">Choose..</option>
                                    <option value="lost">Lost It</option>
                                    <option value="found">Found It</option>
                                </select>
                                @if ($errors->has('role'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            
                </div>
                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" class="form-control" name="image_upload" placeholder="choose file" />
                </div>
                <div class="form-group">
                    <label>Created date</label>
                    <input type="date" class="form-control" name="date" placeholder="select date" />
                </div>
        <div class="name">
          <button type="submit" class="btn btn-success">Save </button>
          <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancle</button>
        </div>
        </div>
        </form>
      </div>
     </div>
    </div>

@endsection