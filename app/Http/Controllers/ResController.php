<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Postitem;
use App\Models\Mypostitem;
use DB;
use Auth;


class ResController extends Controller
{
    public function my_response()
    {
        $data1 = PostItem::latest()->where('u_id', Auth::user()->id)->paginate(5);
        return view('Responce.response', compact('data1'))->with('i', (request()->input('page', 1) - 1) * 5);
 
    }
}
