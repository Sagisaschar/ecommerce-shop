@extends('site.master')

@section('content')

        <!-- Hero Section-->
        <section class="hero hero-page gray-bg padding-small">
            <div class="container">
              <div class="row d-flex">
                <div class="col-lg-9 order-2 order-lg-1">
                  <h1>Sign in</h1>
                </div>
                <div class="col-lg-3 text-right order-1 order-lg-2">
                    {{ Breadcrumbs::render('signin') }}
                </div>
              </div>
            </div>
          </section>
          @if ($err_top && $errors->any())
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
    
@endif
          <!-- text page-->
          <section class="padding-small">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="block">
                    <div class="block-header">
                      <h5>Login</h5>
                    </div>
                    <div class="block-body"> 
                      <p class="lead">Already our customer?</p>
                      <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                      <hr>
                      <form action="" method="POST" novalidate="novalidate">
                        @csrf
                        <div class="form-group">
                          <label for="email" class="form-label">* Email</label>
                        <input value="{{ old('email') }}" id="email" type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                          <label for="password" class="form-label">* Password</label>
                          <input id="password" type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group text-center">
                          <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-sign-in"></i> Log in</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

@endsection