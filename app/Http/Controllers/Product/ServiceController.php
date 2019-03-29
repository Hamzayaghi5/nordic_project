<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Category;
use App\ServiceImage;
use Redirect;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::get_all();
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::get_all();
        return view('admin.service.create',compact('categories'));
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
        $service=Service::service_insert($category_id,$title,$description);

                    if($request->hasFile('img_name')){
            foreach ($request->file('img_name') as $file) {                    
            $imagename=$file->getClientOriginalName();
            $path_img=$file->storeAs('public/',$imagename);
             $img_name=str_replace('public/', '', $path_img);
             serviceImage::services_image_insert($service->id,$img_name);
            
             }
             return redirect('/admin/services/index');
        }
    return Redirect::back()->withErrors('The image input must not be empty');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id=$request['id'];
        $service=Service::get($id);
        return view('main_site.service_single',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id,service $service)
    {
        $categories=Category::get_all();
        $service=Service::get($id);
        return view('admin.service.update',compact('service','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
             $data=$request->all();
             $id=$request['id'];
        $category_id=$request['category_id'];
        $title=$request['title'];
        $description=$request['description'];
        $service=Service::service_update($id,$category_id,$title,$description);
                    if($request->hasFile('img_name')){
            foreach ($request->file('img_name') as $file) {                 
            $imagename=$file->getClientOriginalName();
            $path_img=$file->storeAs('public/',$imagename);
             $img_name=str_replace('public/', '', $path_img);
             serviceImage::services_image_insert($service->id,$img_name);
            
             }
             return redirect('/admin/services/index');
        }
    else
    {
        $service=Service::get($id);
        Service::service_update($id,$category_id,$title,$description);
    }

       
         return redirect('/admin/services/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        //
    }

        public function delete(Request $request)
    {
        $id=$request['id'];
        Service::service_delete($id);
        return redirect('/admin/services/index');
    }
}
