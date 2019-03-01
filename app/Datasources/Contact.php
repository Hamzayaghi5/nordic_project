<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
         protected $fillable = [
        'phone', 'address','email','facebook','twiiter','youtube'
    ];


    public function get()
    {
    	$Contact=Contact::first();
    	return $Contact;
    }

    public function contact_create($phone,$address,$email,$facebook,$twiiter,$youtube)
    {
    	$Contact=new Contact();
    	$Contact->phone=$phone;
    	$Contact->address=$address;
    	$Contact->email=$email;
    	$Contact->facebook=$facebook;
    	$Contact->twiiter=$twiiter;
    	$Contact->youtube=$youtube;
    	$Contact->save();
    	return $Contact;
    }

     public function contact_create($id,$phone,$address,$email,$facebook,$twiiter,$youtube)
    {
    	$Contact=Contact::find($id);
    	$Contact->phone=$phone;
    	$Contact->address=$address;
    	$Contact->email=$email;
    	$Contact->facebook=$facebook;
    	$Contact->twiiter=$twiiter;
    	$Contact->youtube=$youtube;
    	$Contact->save();
    	return $Contact;
    }
}
