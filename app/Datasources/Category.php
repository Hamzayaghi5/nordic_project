<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        protected $fillable = [
        'name','image'
    ];

    public function get_all()
    {
    	$categories=Category::all();
    	return $categories
    }

     public function get($id)
    {
    	$category=Category::find($id);
    	return $category
    }

    public function insert($name,$image)
    {
    	$category=new Category();
    	$category->name=$name;
        $category->image=$image;
    	return $category;
    }
    public function update($id,$name,$image)
    {
    	$category=Category::find($id);
    	$category->name=$name;
        $category->image=$image;
    	$category->save();
    	return $category;
    }

    public function delete($id)
    {
    	$category=Category::find($id);
    	$category->delete();
    }
}
