<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


/**
 * 
 */
class testController extends Controller
{
	
	function __construct()
	{
		# code...
	}

	   public function admin()
    {
        return view('admin.index');
    }
}