@extends('layouts.main_layout')

@section('content')
     <section class="gallery py-md-5 py-4">
        <div class="gallery-inner py-md-5 py-4">
            <h2 class="tittle text-center mb-md-5 mb-4">Art Gallery</h2>
            <ul class="portfolio-area clearfix">
                @foreach ($products as $key => $product)
                    {{-- expr --}}
             
                <li style="margin: 1%" class="portfolio-item2" data-id="id-{{$key}}" data-type="cat-item-{{$key+1}}">
                    <span class="image-block img-hover">
                        <a class="" href="/product single/{{$product->id}}">
                            <img src="{{env('image_storage')}}/{{$product->images[0]->image}}" class="img-fluid" alt="">
                        </a>
                    </span>
                </li>
                   @endforeach
            </ul>
            <!--end portfolio-area -->
        </div>
        <!-- //gallery container -->
    </section>
@endsection
