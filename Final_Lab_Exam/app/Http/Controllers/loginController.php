<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class loginController extends Controller
{
    public function index()
    {
    	return view('login.index');
    }
    public function verify(Request $req)
    {
    	$user = DB::table('user')
                    ->where('username', $req->username)
                    ->where('password', $req->password)
                    ->get();
        $admin=DB::table('admin')
                    ->where('username', $req->username)
                    ->where('password', $req->password)
                    ->get();
    	if(count($user)>0)
    	{
            $req->session()->put('username', $req->username);
    		return redirect('/home');
    	}
        else if(count($admin)>0)
        {
            $req->session()->put('username', $req->username);
            return redirect('/adminhome');
            
        }
        else
        {
            return redirect('/login');
        }
    }
}
