<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User as user;

class UserController extends Controller
{
    

       public function get_users()
    {
       $users=user::get_users();

       return View('admin.user.index',compact('users'));
    }
}
