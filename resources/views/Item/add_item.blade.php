@extends('layouts.app')
@section('content')
<div class="card"> 
        <div class="card-header">Registered user list.</div>
        <div class="card-body">
          <table class="table table-bordered">
                   <tr><TH>ID</TH></tr>    
                   @foreach($list as $itempost)
                        <td>{{$itempost->item_name }}</td> 
                    </tr>
                     @endforeach
            </table>
        </div>
    </div>
@endsection