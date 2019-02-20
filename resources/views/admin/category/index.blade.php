    @extends('layouts.admin_layout')

    @section('content')
    <div id="content-wrapper">
      
      <a style="margin:1%" href="/admin/categories/create" class="btn btn-success"><i style="color: white" class="fa fa-plus" aria-hidden="true"></i> Add New Category</a>  
      
      

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category Image</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                  <tr>
                    <td>{{$category->id }}</td>
                    <td>{{$category->name }}</td>
                    <td><img class="img-responsive col-xs-12 col-sm-3" src="{{env('image_storage') }}/{{$category->image}}"></td>
                    <td><div  class="row"><a style="margin-left:5px;color:rgba(204, 0, 0, 1);;" href="/admin/categories/update/{{$category->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a  style="margin-left:5px;color:rgba(204, 0, 0, 1);" onclick="return confirm('Are you sure you want to delete this category')" href="/admin/categories/delete/{{$category->id}}"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                    <div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
    @endsection