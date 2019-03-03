@extends('layouts.main_layout')
@section('content')
	 <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-wthreelayouts py-lg-5  py-3">
                <h2 class="tittle text-center mb-lg-5 mb-3">
                   {{$product->title}}</h2>
                <div class="row mt-lg-5 mt-md-4 mt-4">
                    <!--left-->

                    <div class="col-lg-8 left-blog-info text-left">
                        <div class="card">

                             <div class="card-body">
                               
                                <h5 class="card-title ">
                                    <a href="single.html">{{$product->title}}</a>
                                </h5>
                                <p class="card-text">{{$product->description}} </p>

                            </div>

                             <ul class="blog-icons my-4">
                                    <li>
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i>{{$product->created_at}}</a>
                                    </li>

                                </ul>

                                @foreach ($product->images as $image1)
                                       <a style="margin:1%" href="single.html">
                                <img src="{{env('image_storage') }}/{{$image1->image}}" class="img-fluid" alt="">
                            </a>

                                @endforeach
                         


                        </div>



                    </div>
                    <!--//left-->
                    <!--right-->
                    <aside class="col-lg-4 right-blog-con text-left">
                        <div class="right-blog-info text-left">
                            <div class="tech-btm">
                                <h4>Categories</h4>
                                <ul class="list-group single">
                                    @foreach ($categories as $category)
                                        {{-- expr --}}
                              
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="category/{{$category->id}}">{{$category->name}}</a>
                                        <span class="badge badge-primary badge-pill">{{$category->count()}}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <!--//right-->

                </div>
            </div>
        </div>
    </section>

    
@endsection
