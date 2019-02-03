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
        <div class="col-12 mb-3">
          <h3>Are you sure you want to delete this item?</h3>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="col-8">
        <form action="{{ url('cms/categories/' . $item_id)}}" method="POST">
          @method('DELETE')
            @csrf
          <a href="{{ url('cms/categories') }}" class="btn btn-secondary">Cancel</a>
            <input name="submit" class="btn btn-danger" type="submit" value="Delete">
          </form>
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