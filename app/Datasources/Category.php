<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        protected $fillable = [
        'name','image'
    ];

    public function products()
    {
        return $this->HasMany('App\Product');
    }

    public static function get_all()
    {
    	$categories=Category::all();
    	return $categories;
    }

     public static function get($id)
    {
    	$category=Category::find($id);
    	return $category;
    }

    public static function category_insert($name,$image)
    {


    	$category=new Category();
    	$category->name=$name;
        $category->image=$image;
        $category->save();
    	return $category;
    }
    public static function category_update($id,$name,$image)
    {

    
        $category=Category::find($id);
        $category->name=$name;
        $category->image=$category->image;
        $category->save();

    	return $category;
    }

    public static function category_delete($id)
    {
    	$category=Category::find($id);
    	$category->delete();
    }
}
