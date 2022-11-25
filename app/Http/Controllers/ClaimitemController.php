<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postitem;
use App\Models\Mypostitem;
use App\Models\claimItem;
use DB;

class ClaimitemController extends Controller
{

    public function edit($id)
    {
       $claimitem = Postitem::find($id);
       return view('Claimitem.claim_item' , compact('claimitem'));
    }

    public function update(Request $request, $id)
    {
       $claimitem = Postitem::find($id);
       $claimitem->claim_item = $request->input('claim_item');
       $claimitem->role = $request->input('role');
       $claimitem->mob_no = $request->input('mob_no');
       $claimitem->update();
       return redirect('home');
    }
}
