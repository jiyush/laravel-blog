<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class mycontroller extends Controller
{
   public function index(){


   	return view('welcome')->with([
   		'fname' => 'piyush' ,
   		'lname' => 'jadav'
		] );
   }
}
