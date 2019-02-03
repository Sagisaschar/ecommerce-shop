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
          <h1>Edit Content</h1>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="col-8 mb-4">
        <form action="{{ url('cms/content/' . $content_item['id'] ) }}" method="POST" novalidate="novalidate">
          @method('PUT')
            @csrf
            <div class="form-group mb-5">
                <label for="menu-id"><span class="text-danger">*</span> Menu link:</label>
                <select name="menu_id" id="menu-id" class="form-control">
                  @foreach ($menu as $item)
                   <option @if( $content_item['menu_id'] == $item['id'] ) selected="selected" @endif value="{{ $item['id'] }}">{{ $item['link'] }}</option>
                  @endforeach
                </select>
              <span class="text-danger">{{ $errors->first('menu_id') }}</span>
              </div>
            <div class="form-group mb-5">
              <label for="title"><span class="text-danger">*</span> Title:</label>
              <input type="text" name="ctitle" id="title" class="form-control field-input-cms" value="{{ $content_item['ctitle'] }}" placeholder="e.g. Gallery Diamonds">
              <small class="text-muted">The Title, min 2 chars max 255</small><br>
            <span class="text-danger">{{ $errors->first('ctitle') }}</span>
            </div>
            <div class="form-group mb-5">
                <label for="article"><span class="text-danger">*</span> Article:</label>
            <textarea name="article" id="article" class="form-control">{{ $content_item['article'] }}</textarea>
                <small class="text-muted">The Article, min 2 chars</small><br>
              <span class="text-danger">{{ $errors->first('article') }}</span>
              </div>
          <a href="{{ url('cms/content') }}" class="btn btn-outline-danger">Cancel</a>
            <input name="submit" class="btn btn-outline-primary" type="submit" value="Update Content">
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