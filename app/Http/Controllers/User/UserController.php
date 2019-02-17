<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User as user;

class UserController extends Controller
{
    

       public function get_all()
    {
       $users=user::get_all();

       return View('admin.user.index',compact('users'));
    }
}
