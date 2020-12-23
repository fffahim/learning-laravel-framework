<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminHome extends Controller
{
    public function index(Request $req){

        return view('admin.index', ['username'=> $req->session()->get('username')]);
    	
    }
}
