@extends('layouts.admin_layout')
@section('content')
	<div class="col-6">
<form  class="container" action='/admin/products/update/{{$product->id}}' method="POST" enctype="multipart/form-data">
	@csrf

			<div class="form-group">
		<label for="exampleInputEmail1">Product Title</label>
		<input value="{{$product->title}}" name="title" class="form-control"  id="comment" required>
		
	</div>

				<div class="form-group">
		<label for="exampleInputEmail1">Product Description</label>
		<textarea name="description" class="form-control" rows="5" id="comment" required>{{$product->description }}</textarea>
		
	</div>


	<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="category_id">
  	@foreach($categories as $category)
  	@if($category->id==$product->category_id)
  	  <option value="{{$category->id}}" selected>{{$category->name}}</option>
  	  @else
  	    <option value="{{$category->id}}">{{$category->name}}</option>
  	    @endif
  	@endforeach
  </select>
</div>
	<label for="exampleInputEmail1">Image</label>
	<input class="active" type="file" name="img_name" enctype="multipart/form-data">
	<br><br>
	<button  type="submit" class="btn btn-success"><i style="color: white" class="fa fa-plus" aria-hidden="true"></i> Edit Agent</button>
</form>
	</div>
@endsection