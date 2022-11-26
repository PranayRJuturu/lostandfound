<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postitem;
use App\Models\Mypostitem;
use DB;
use Auth;

class MypostController extends Controller
{

    public function getitem()
    { 
        $data = PostItem::latest()->where('u_id', Auth::user()->id)->paginate(5);
        return view('Mypost.my_item', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function destroy($id) 
    {
        DB::delete('delete from post_items where id = ?',[$id]);
        return redirect('my_item');
     }

     public function edit($id)
     {
        $Postitem = Postitem::find($id);
        return view('Mypost.edit' , compact('Postitem'));
     }

     public function update(Request $request, $id)
     {
        $Postitem = Postitem::find($id);
        $Postitem->item_name = $request->input('item_name');
        $Postitem->description = $request->input('description');
        $Postitem->role = $request->input('role');
        $Postitem->update();
        return redirect("my_item")->with(['message' => 'Your record updated succefully!!']);
     }
}
