<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use app\test;
class postcontroller extends Controller
{
   public function index()
   {
   	return view('postview');

  }
  public function insert(Request $req){

  	$enroll = $req->input('enroll');
   		$name = $req->input('name');

   		$data = array(
   		'enroll' => $enroll,
   		'name' => $name

   		);

   		DB::table('test')->insert($data);
   		
   		return redirect('post/show');
  }
   public function show()
   {
   		$t = DB::table('test')->get();
   		return view('demo')->with('t',$t);

   }
   public function edit(Request $req){

   	echo $id;
   }
}
