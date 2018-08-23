<?php

namespace App\Http\Controllers\Intranet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index(){

    	$data = User::first();

    	return view('/intranet/profile/profile', ['user' => $data]);

    }



    public function edit($user){
    	
    	$data = User::find($user);

    	return view('/intranet/profile/edit-profile', ['user' => $data]);
    }
}
