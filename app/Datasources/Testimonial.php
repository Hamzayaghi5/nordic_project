<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    
     protected $fillable = [
        'name', 'description','image'
    ];

    public static function get_all()
    {
    	$testimonials=Testimonial::all();
    	return $testimonials;
    }

    public static function get($id)
    {
    	$testimonial=Testimonial::find($id);
    	return $testimonial
    }

    public static function testimonial_insert($name,$description,$image)
    {
    	$testimonial=new Testimonial();
    	$testimonial->name=$name;
    	$testimonial->description=$description;
    	$testimonial->image=$image;
    	$testimonial->save();
    	return $testimonial;
    }

       public static function testimonial_update($id,$name,$description,$image)
    {
    	$testimonial=Testimonial::find($id);
    	$testimonial->name=$name;
    	$testimonial->description=$description;
    	$testimonial->image=$image;
    	$testimonial->save();
    	return $testimonial;
    }

       public static function testimonial_delete($id)
    {
    	$testimonial=Testimonial::find($id);
    	$testimonial::delete();
    }


}
