<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

class newcontroller extends Controller
{
    public function index()
    {
    	$test = DB::table('test')->get();
    	echo $test->all();
    	
    }
}
