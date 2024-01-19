<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

   public function index(Request $request){
   if ($request->hasAny(['name', 'email'])) {
    return $this->user();
}
else {
    return 'Not matched';
}
   }

    public function user() {
        return 'OK From User';
    }

}
