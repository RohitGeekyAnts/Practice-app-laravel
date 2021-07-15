<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    function dbOperations()
    {
        return DB::table('members')
            ->insert(
                [
                    'name' => 'rohit',
                    'address' => 'muz'
                ]
            );
    }
}
