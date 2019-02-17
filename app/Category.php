<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        protected $fillable = [
        'name',
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

    public function insert($name)
    {
    	$category=new Category();
    	$category->name=$name;
    	return $category;
    }
    public function update($id,$name)
    {
    	$category=Category::find($id);
    	$category->name=$name;
    	$category->save();
    	return $category;
    }

    public function delete($id)
    {
    	$category=Category::find($id);
    	$category->delete();
    }
}
