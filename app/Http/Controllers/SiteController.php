<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Gallery;
use App\GalleryImage;
use App\Slider;
use App\Testimonial;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::get_all();
        $categories=Category::get_all();
        $testimonials=Testimonial::get_all();
        return view('main_site.index',compact('sliders','testimonials','categories'));
    }


    public function about()
    {
        return view('main_site.about');
    }

    public function single()
    {
        return view('main_site.product_single');
    }


    public function contact()
    {
      return view('main_site.contact');
    }


    public function services()
    {
        $categories=Category::get_all();
     return view('main_site.services',compact('categories'));
    }

    public function products_by_category(Request $request)
    {
        $category_id=$request['category_id'];
        $products=Product::get_by_category($category_id);
        return view('main_site.products',compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function gallery(Request $request)
    {
        $gallery_id=$request['gallery_id'];
        $gallery=Gallery::get($gallery_id);
       return view('main_site.gallery',compact('gallery'));
    }


      public function galleries(Request $request)
    {
        $galleries=Gallery::get_all();
       return view('main_site.galleries',compact('galleries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
