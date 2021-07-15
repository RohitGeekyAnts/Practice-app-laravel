<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
    function show()
    {
        $data = User::all();
        return view('list', ["members" => $data]);
    }
    function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('list');
    }
    function showData($id)
    {
        $data = User::find($id);
        return view('edit', ['data' => $data]);
    }
    function update(Request $req)
    {
        $data = User::find($req->id);
        $data->name = $req->name;
        $data->address = $req->address;
        $data->save();
        return redirect("list");
    }

    // function addData(Request $req)
    // {
    //     $member = new User;
    //     $member->name = $req->name;
    //     // $member->email = $req->email;
    //     $member->address = $req->address;
    //     $member->save();
    //     return redirect('add');
    // }
}