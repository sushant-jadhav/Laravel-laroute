<?php 
namespace App\Impl\Repo\User;

use App\Impl\Repo\User\UserRepo;
use App\Impl\Model\User;

/**
 * User Repository
 */
 class DbUser implements UserRepo
 {
 	public function getAll(){

 		$users = User::all();

 		return $users;

 	}

    public function find($id){

    	$user = User::find($id);

 		return $user;

    }

    public function delete($id){

    	$user = User::destroy($id);

    	return $user;
    }
 } 