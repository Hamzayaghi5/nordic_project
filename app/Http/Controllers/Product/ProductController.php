<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\ProductImage;
use Redirect;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::get_all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::get_all();
        return view('admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function store(Request $request)
    {   
             $data=$request->all();
                    $category_id=$data['category_id'];
        $title=$data['title'];
        $description=$data['description'];
 
      if($request->file('img_name')!= null){

            $path;
            if(request()->file('img_name')->isValid()){
                $path = $request->file('img_name')->storeAs('public', time().'.jpg');
                $img_name=str_replace('public/', '', $path);
                if(empty($path)){
                    return response()->json([],400);
                }

            }
        Product::product_insert($category_id,$title,$description,$img_name);
         return redirect('/admin/products/index');
    }
    return Redirect::back()->withErrors('The image input must not be empty');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Product $product)
    {
        $categories=Category::get_all();
        $product=Product::get($id);
        return view('admin.product.update',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
             $data=$request->all();
             $id=$request['id'];
        $category_id=$request['category_id'];
        $title=$request['title'];
        $description=$request['description'];
 
      if($request->file('img_name')!= null){

            $path;
            if(request()->file('img_name')->isValid()){
                $path = $request->file('img_name')->storeAs('public', time().'.jpg');
                $img_name=str_replace('public/', '', $path);
                if(empty($path)){
                    return response()->json([],400);
                }

            }
     Product::product_update($id,$category_id,$title,$description,$img_name);
    }
    else
    {
        $product=Product::get($id);
        Product::product_update($id,$category_id,$title,$description,$product->image);
    }

       
         return redirect('/admin/products/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

        public function delete(Request $request)
    {
        $id=$request['id'];
        Product::product_delete($id);
        return redirect('/admin/products/index');
    }
}
