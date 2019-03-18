<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
        $title=$data['title'];
        $gallery=Gallery::gallery_insert($title);

                    if($request->hasFile('image')){
            foreach ($request->file('image') as $file) {                    
            $imagename=$file->getClientOriginalName();
            $path_img=$file->storeAs('public/',$imagename);
             $img_name=str_replace('public/', '', $path_img);
             GalleryImage::gallery_image_insert($gallery->id,$img_name);
            
             }
             return redirect('/admin/galleries/index');
        }
    return Redirect::back()->withErrors('The image input must not be empty');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id=$request['id'];
        $product=Product::get($id);
        $categories=Category::get_all();
        return view('main_site.product_single',compact('product','categories'));
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
        return view('admin.gallery.update',compact('product','categories'));
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
        $title=$request['title'];
        $gallery=Gallery::gallery_update($id,$title);
                    if($request->hasFile('image')){
            foreach ($request->file('image') as $file) {                 
            $imagename=$file->getClientOriginalName();
            $path_img=$file->storeAs('public/',$imagename);
             $img_name=str_replace('public/', '', $path_img);
             GalleryImage::gallery_image_update($gallery->id,$img_name);
            
             }
             return redirect('/admin/products/index');
        }
    else
    {
        $gallery=Gallery::get($id);
        $gallery=Gallery::gallery_update($id,$title);
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
