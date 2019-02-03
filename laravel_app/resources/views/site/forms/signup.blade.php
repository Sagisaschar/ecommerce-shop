@extends('site.master')

@section('content')

        <!-- Hero Section-->
        <section class="hero hero-page gray-bg padding-small">
            <div class="container">
              <div class="row d-flex">
                <div class="col-lg-9 order-2 order-lg-1">
                  <h1>Sign up</h1>
                </div>
                <div class="col-lg-3 text-right order-1 order-lg-2">
                    {{ Breadcrumbs::render('signup') }}
                </div>
              </div>
            </div>
          </section>
          @if ($err_top && $errors->all())
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
                      <h5>New account</h5>
                    </div>
                    <div class="block-body"> 
                      <p class="lead">Not our registered customer yet?</p>
                      <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                      <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>
                      <hr>
                      <form action="" method="POST"  novalidate="novalidate">
                          @csrf
                        <div class="form-group">
                          <label for="name" class="form-label">* Name</label>
                          <input name="name" id="name" type="text" class="form-control" value="{{ old('name') }}">
                          <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group">
                          <label for="email" class="form-label">* Email</label>
                          <input name="email" id="email" type="email" class="form-control" value="{{ old('email') }}">
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group">
                          <label for="password" class="form-label">* Password</label>
                          <input name="password" id="password" type="password" class="form-control">
                          <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="confirm-password" class="form-label">* Confirm Password</label>
                            <input name="password_confirmation" id="confirm-password" type="password" class="form-control">
                          </div>
                        <div class="form-group text-center">
                          <button type="submit" class="btn btn-primary" name="submit"><i class="icon-profile"></i> Register</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

@endsection