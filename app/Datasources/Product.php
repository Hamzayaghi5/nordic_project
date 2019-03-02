<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Product extends Model
{
   protected $fillable = [
        'category_id','title','description','image'
    ];


        public function images()
    {
        return $this->HasMany('App\ProductImage');
    }

    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }

     public static function get_all()
    {
        $products = Product::with('category','images')->get();
        return $products;
    }

      public static function get($id)
    {
        $product = Product::where('id',$id)->with('category','images')->first();
        return $product;
    }


       public static function product_insert($category_id,$title,$description,$image)
    {
        $product = new Product;
        $product->category_id=$category_id;
        $product->title=$title;
        $product->description=$description;
        $product->image=env('image_storage')."/".$image;
        $product->save();
        return $product;
    }

         public static function product_update($id,$category_id,$title,$description,$image)
    {

         $product = Product::find($id);
            $product->category_id=$category_id;
            $product->title=$title;
            $product->description=$description;
            $product->image=$product->image;
            $product->save();
        return $product;
    }

      public static function product_delete($id)
    {
    	$product=Product::find($id);
    	$product->delete();
    }
}
