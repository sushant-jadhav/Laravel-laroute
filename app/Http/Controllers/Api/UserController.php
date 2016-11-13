<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Impl\Repo\User\UserRepo;

class UserController extends Controller
{
    
    public function __construct(UserRepo $user){
    	
    	$this->userRepo = $user;

    }

    public function getUser(){

    	$users = $this->userRepo->getAll();

    	return response()->json($users);

    }

    public function getUserById($id){

    	$user = $this->userRepo->find($id);

    	return response()->json($user);

    }
}
