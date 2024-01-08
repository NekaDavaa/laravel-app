<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   
   public function index(Request $request){
    var_dump($request->name);
    echo $this->user();
   }
   public function user () {
    return 'asd';
   }
}
