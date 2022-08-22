<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
// use App\Models\Fruit;

class One2oneController extends Controller
{
    function list(){
        return Member::all();
        // return Fruit::all();
        // return DB::table('members')->get();
        // return DB::connection('mysql2')-> table('fruits')->get();
    }
}