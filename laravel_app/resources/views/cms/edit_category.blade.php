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
          <h1>Edit Category</h1>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="col-8 mb-4">
            <form action="{{ url('cms/categories/' . $category_item['id'] ) }}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
              @method('PUT')
                @csrf
            <input type="hidden" name="item_id" value="{{ $category_item['id'] }}">
            <div class="form-group mb-5">
              <label for="title"><span class="text-danger">*</span> Title:</label>
              <input type="text" name="title" id="title" class="form-control field-input-cms original-text" value="{{ $category_item['title'] }}" placeholder="e.g. Gallery Diamonds">
              <small class="text-muted">The Title, min 2 chars max 255</small><br>
            <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="form-group">
              <label for="url"><span class="text-danger">*</span> Category Url:</label>
              <input type="text" name="url" id="url" class="form-control field-input-cms target-text" value="{{ $category_item['url'] }}" placeholder="e.g. gallery-diamonds">
              <small class="text-muted">The Category Url, Must have only small letters, - , numbers</small><br>
            <span class="text-danger">{{ $errors->first('url') }}</span>
            </div>
            <div class="form-group mb-5">
                <label for="article"><span class="text-danger">*</span> Description:</label>
            <textarea name="description" id="article" class="form-control">{{ $category_item['description'] }}</textarea>
                <small class="text-muted">The Description, min 2 chars</small><br>
              <span class="text-danger">{{ $errors->first('description') }}</span>
              </div>
              <div class="form-group">
              <img src="{{ asset('images/' . $category_item['image'] ) }}" width="80">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                  <input name="image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Change Category Image</label>
                </div>
              </div>
              <div class="form-group">
                  <small class="text-muted">The image must be: jpg, jpeg, png, gif, with max size: 5mb</small><br>
                <span class="text-danger">{{ $errors->first('image') }}</span>
              </div>
          <a href="{{ url('cms/categories') }}" class="btn btn-outline-danger">Cancel</a>
            <input name="submit" class="btn btn-outline-primary" type="submit" value="Update Category">
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