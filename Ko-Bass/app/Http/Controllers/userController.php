<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller{
    public function index(){
        return view('users');
    }

    public function storeData(Request $request){
        return $request -> all();
    }
}

