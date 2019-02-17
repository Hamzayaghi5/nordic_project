<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = [
        'category_id','title','description','image'
    ];

     public static function get_all()
    {
        $products = Product::all();
        return $products;
    }

      public static function get($id)
    {
        $product = Product::find($id);
        return $product;
    }


       public static function insert($category_id,$title,$description,$image)
    {
        $product = new Product;
        $product->category_id=$category_id;
        $product->title=$title;
        $product->description=$description;
        $product->image=$image;
        $product->save;
        return $product;
    }

         public static function update($id,$category_id,$title,$description,$image)
    {
        $product = Product::find($id);
        $product->category_id=$category_id;
        $product->title=$title;
        $product->description=$description;
        $product->image=$image;
        $product->save;
        return $product;
    }

      public function delete($id)
    {
    	$product=Product::find($id);
    	$product->delete();
    }
}
