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
          <h1>Edit Menu Link</h1>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="col-8">
        <form action="{{ url('cms/menu/' . $menu_item['id'] ) }}" method="POST" novalidate="novalidate">
          @method('PUT')
            @csrf
        <input type="hidden" name="item_id" value="{{ $menu_item['id'] }}">
          <div class="form-group">
              <label for="link"><span class="text-danger">*</span> Link:</label>
          <input type="text" name="link" id="link" class="form-control field-input-cms original-text" value="{{ $menu_item['link'] }}" placeholder="e.g. Gallery Diamonds">
              <small class="text-muted">The Menu Link, min 2 chars max 50</small><br>
            <span class="text-danger">{{ $errors->first('link') }}</span>
            </div>
            <div class="form-group">
              <label for="url"><span class="text-danger">*</span> Url Menu:</label>
              <input type="text" name="url" id="url" class="form-control field-input-cms target-text" value="{{ $menu_item['url'] }}" placeholder="e.g. gallery-diamonds">
              <small class="text-muted">The Url Menu, Must have only small letters, - , numbers</small><br>
            <span class="text-danger">{{ $errors->first('url') }}</span>
            </div>
            <div class="form-group mb-5">
              <label for="title"><span class="text-danger">*</span> Page Title:</label>
              <input type="text" name="title" id="title" class="form-control field-input-cms" value="{{ $menu_item['title'] }}" placeholder="e.g. Gallery Diamonds">
              <small class="text-muted">The Page Title, min 2 chars max 100</small><br>
            <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
          <a href="{{ url('cms/menu') }}" class="btn btn-outline-danger">Cancel</a>
            <input name="submit" class="btn btn-outline-primary" type="submit" value="Update Menu">
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