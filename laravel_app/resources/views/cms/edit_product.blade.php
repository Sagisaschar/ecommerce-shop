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
          <h1>Edit Product</h1>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="col-8 mb-4">
            <form action="{{ url('cms/products/' . $product_item['id'] ) }}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
              @method('PUT')
                @csrf
                <input type="hidden" name="item_id" value="{{ $product_item['id'] }}">
            <div class="form-group mb-5">
                <label for="categorie-id"><span class="text-danger">*</span> Category:</label>
                <select name="categorie_id" id="categorie-id" class="form-control">
                  @foreach ($categories as $item)
                   <option @if($product_item['categorie_id'] == $item['id']) selected="selected" @endif value="{{ $item['id'] }}">{{ $item['title'] }}</option>
                  @endforeach
                </select>
              <span class="text-danger">{{ $errors->first('categorie_id') }}</span>
              </div>
            <div class="form-group mb-5">
              <label for="title"><span class="text-danger">*</span> Title:</label>
              <input type="text" name="ptitle" id="title" class="form-control field-input-cms original-text" value="{{ $product_item['ptitle'] }}" placeholder="e.g. Prestige Diamond">
              <small class="text-muted">The Title, min 2 chars max 255</small><br>
            <span class="text-danger">{{ $errors->first('ptitle') }}</span>
            </div>
            <div class="form-group">
              <label for="url"><span class="text-danger">*</span> Product Url:</label>
              <input type="text" name="purl" id="url" class="form-control field-input-cms target-text" value="{{ $product_item['purl'] }}" placeholder="e.g. prestige-diamond">
              <small class="text-muted">The Product Url, Must have only small letters, - , numbers</small><br>
            <span class="text-danger">{{ $errors->first('purl') }}</span>
            </div>
            <div class="form-group">
                <label for="price"><span class="text-danger">*</span> Product Price:</label>
                <input type="text" name="price" id="price" class="form-control field-input-cms" value="{{ $product_item['price'] }}" placeholder="e.g. 2300">
                <small class="text-muted">The Product Price, Must have only numbers</small><br>
              <span class="text-danger">{{ $errors->first('price') }}</span>
              </div>
            <div class="form-group mb-5">
                <label for="article"><span class="text-danger">*</span> Article:</label>
            <textarea name="article" id="article" class="form-control">{{ $product_item['article'] }}</textarea>
                <small class="text-muted">The Article, min 2 chars</small><br>
              <span class="text-danger">{{ $errors->first('article') }}</span>
              </div>
              <div class="form-group">
              <img src="{{ asset('images/' . $product_item['pimage']) }}" width="80">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                  <input name="pimage" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Change Product Image</label>
                </div>
              </div>
              <div class="form-group">
                  <small class="text-muted">The image must be: jpg, jpeg, png, gif, with max size: 5mb</small><br>
                <span class="text-danger">{{ $errors->first('pimage') }}</span>
              </div>
          <a href="{{ url('cms/products') }}" class="btn btn-outline-danger">Cancel</a>
            <input name="submit" class="btn btn-outline-primary" type="submit" value="Update Product">
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