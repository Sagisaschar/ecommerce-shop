@extends('cms.cms_master')

@section('main_content')
<div id="content-wrapper">

      
    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
      </ol>

      <div class="row">
        <div class="col-12 mb-3 display-3">
          <h1>Edit Site Content</h1>
          <hr>
        </div>
        
      </div>

    <p>
      <a class="btn btn-primary btn-md" href="{{ url('cms/content/create') }}"><i class="fas fa-plus-square"></i> Add Content</a>
    </p>

          <!-- DataTables Example -->
          <div class="card mb-3 mt-5">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Existing menus</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Operations</th>
                      </tr>
                    </thead>
               <tbody>
                 @foreach ($contents as $item)
                 <tr>
                   <td>{{ $item['ctitle'] }}</td>
                   <td>
                   <a class="btn btn-outline-primary btn-sm" href="{{ url('cms/content/' . $item['id'] . '/edit')}}"><i class="far fa-edit"></i> Edit</a>
                   <a class="btn btn-outline-danger btn-sm ml-2" href="{{ url('cms/content/' . $item['id'])}}"><i class="far fa-trash-alt"></i> Delete</a>
                  </td>
                 </tr>
                 @endforeach
               </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy Batella {{ Date('Y') }}</span>
        </div>
      </div>
    </footer>

  </div>
  <!-- /.content-wrapper -->

  @endsection