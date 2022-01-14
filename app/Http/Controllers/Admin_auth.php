<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_auth extends Controller
{
   	function login(Request $request){
   		$data = $request;
    	 $email = $request->input('email');
    	 $password = $request->input('password');

    	 $result=DB::table('admin')
    	 		->where('email',$email)
    	 		->where('password',$password)
    	 		->get();

    	// echo "<pre>";
    	// print_r($result); 

    	if(isset($result[0]->id)){
    		$request->session()->put('Admin_logged_in',$result[0]->name);
    		return redirect('home');

    		// another method of making session
    		// $request->session()->put('admin',$data['email']);
    		// echo session('admin');
    		// OR display in other views	 <h1>{{session('admin')}}</h1>
    	}
    	else{
    		$request->session()->flash('resp','Invalid Credentials');
    		return redirect('/');
    	} 		
    }
}
