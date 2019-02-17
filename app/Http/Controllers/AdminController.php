<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AdminController extends Controller
{
    


       public static function admin_index()
    {


       return view('admin.index');
    }

    public function get_users()
    {

    	// $user= new User();
       $users=User::get_users();

       return View('admin.user.index',compact('users'));
    }


}
