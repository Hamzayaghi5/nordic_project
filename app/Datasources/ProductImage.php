<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{

	    protected $fillable = [
      'product_id','image'
    ];
       public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }


         public static function get_all()
    {
        $products_images = ProductImage::with('product')->get();
        return $products_images;
    }

      public static function get($id)
    {
        $products_image = ProductImage::where('id',$id)->with('product')->first();
        return $product;
    }


       public static function products_image_insert($product_id,$image)
    {
        $products_image = new ProductImage;
        $products_image->product_id=$product_id;
        $products_image->image=$image;
        $products_image->save();
        return $products_image;
    }


          public static function products_image_update($id,$product_id,$image)
    {
        $products_image = ProductImage::find($id);
        $products_image->product_id=$product_id;
        $products_image->image=$image;
        $products_image->save();
        return $products_image;
    }
}
