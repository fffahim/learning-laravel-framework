<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $req){
    	return view('home.index',['username'=> $req->session()->get('username')]);
    }
}
