<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagecontroller extends Controller
{
   public function getabout()
   {
   		return view('pages.about');
   }
   public function getcontact()
   {
   		return view('pages.contact');
   }
}
