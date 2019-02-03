@php
 $menu = App\Menu::all()->toArray();   
@endphp

@extends('site.master')

@section('content')

<section class="hero hero-page gray-bg padding-small">
        <div class="container">
          <h1>Page not found</h1>
        </div>
      </section>
      <!-- text page-->
      <section class="padding-small">
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-10">
              <h2 class="text-superbig">404</h2>
              <p class="lead">We don't know what happened but that <strong>page is not here</strong>.</p>
              <p class="lead">Please <a href="#" class="search text-bold">use search</a> or <a href="{{ url('') }}" class="text-bold">start from the homepage</a>.</p>
            </div>
          </div>
        </div>
      </section>

@endsection