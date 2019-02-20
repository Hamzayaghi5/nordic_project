@extends('layouts.admin_layout')
@section('content')
	<div class="col-6">
<form  class="container" action='/admin/categories/update/{{$category->id}}' method="POST" enctype="multipart/form-data">
	@csrf


			<div class="form-group">
		<label for="exampleInputEmail1">Category Name</label>
		<input name="name" class="form-control" rows="5" value="{{$category->name}}" id="comment" required>
		
	</div>
	<label for="exampleInputEmail1">Image</label>
	<input class="active" type="file" name="img" enctype="multipart/form-data" required>
	<br><br>
	<button  type="submit" class="btn btn-success"><i style="color: white" class="fa fa-plus" aria-hidden="true"></i> Add Agent</button>
</form>
	</div>
@endsection