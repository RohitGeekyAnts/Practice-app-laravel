<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function auth(Request $req)
    {
        // $data =  $req->input('user');

        return $req->file('doc')->store('img');
        // return redirect('login');
    }
}