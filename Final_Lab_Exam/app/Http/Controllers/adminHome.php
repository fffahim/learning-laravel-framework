<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\infoCheck;
class adminHome extends Controller
{
    public function index(Request $req){

        return view('admin.index', ['username'=> $req->session()->get('username')]);
    	
    }
    public function userlist(){
    	$user = DB::table('user')
                    ->get();   
                    
           return view('admin.userlist')->with('userlist', $user);           
    }
    public function edit($id){
    	
        $data = DB::table('user')->where('id',$id)->get();
        $user = [
        	'fullname'=> $data[0]->fullname,
        	'company'=>$data[0]->company,
        	'contact'=>$data[0]->contact,
        	'username'=>$data[0]->username
        ];
    	return view('admin.edit', $user);
    }
    public function update($id,infoCheck $info)
    {
    	$affected = DB::table('user')
              ->where('id', $id)
              ->update(['fullname' => $info->fullname , 'company'=> $info->company, 'contact'=> $info->contact,'username'=> $info->username]);
        return redirect()->route('admin.userlist');
    }
}
