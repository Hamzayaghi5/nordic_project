<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test as test;

/**
 * 
 */
class testController extends Controller
{
	
	function __construct()
	{
		# code...
	}

	   public static function admin()
    {
       $test= new test();
       $data=$test::admin();

       return view('admin.index',$data);
    }
}