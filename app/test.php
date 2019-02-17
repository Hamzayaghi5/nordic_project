<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class test extends Model
{

	public static function admin()
	{
		$users = User::all();
		return $users;
	}
    
}