@extends('site.master')

@section('content')

@if( !empty($products) )

  <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-8 order-2 order-lg-1">
            <h1>{{ $products[0]->title }}</h1><p class="lead text-muted">Choose your favorite diamonds</p>
          </div>
          <div class="col-lg-4 text-right order-1 order-lg-2">
          
              {{ Breadcrumbs::render('products', $curl) }}
            
          </div>
        </div>
      </div>
    </section>
    <main>
      <div class="container">
        <div class="row">
                    <!-- Sidebar-->
                    <div class="sidebar col-xl-3 col-lg-4 sidebar">
                        <div class="block">
                          <h6 class="text-uppercase">Product Categories</h6>
                          <ul class="list-unstyled">
                              @foreach($categories as $category)
                              <li @if ( $products[0]->title == $category['title'] ) class="active" @endif ><a href="{{ url('shop/' . $category['url']) }}" class="d-flex justify-content-between align-items-center"><span>{{ $category['title'] }}</span></a></li>
                                @endforeach
                          </ul>
                        </div>
                        <div class="block">
                          <h6 class="text-uppercase">Brands </h6>
                          <form action="#">
                            <div class="form-group mb-1">
                              <input id="brand0" type="checkbox" name="clothes-brand" checked class="checkbox-template">
                              <label for="brand0">Batella <small>(18)</small></label>
                            </div>
                            <div class="form-group mb-1">
                              <input id="brand1" type="checkbox" name="clothes-brand" checked class="checkbox-template">
                              <label for="brand1">Batella vintage <small>(30)</small></label>
                            </div>
                            <div class="form-group mb-1">
                              <input id="brand2" type="checkbox" name="clothes-brand" class="checkbox-template">
                              <label for="brand2">Batella & Co. <small>(120)</small></label>
                            </div>
                          </form>
                        </div>
                        <div class="block"> 
                          <h6 class="text-uppercase">Size </h6>
                          <form action="#">  
                            <div class="form-group mb-1">
                              <input id="size0" type="radio" name="size" checked class="radio-template">
                              <label for="size0">50 carat</label>
                            </div>
                            <div class="form-group mb-1">
                              <input id="size1" type="radio" name="size" class="radio-template">
                              <label for="size1">75 carat</label>
                            </div>
                            <div class="form-group mb-1">
                              <input id="size2" type="radio" name="size" class="radio-template">
                              <label for="size2">1 carat</label>
                            </div>
                            <div class="form-group mb-1">
                              <input id="size3" type="radio" name="size" class="radio-template">
                              <label for="size3">1.5 carat</label>
                            </div>
                          </form>
                        </div>
                      </div>
                      <!-- /Sidebar end-->
          <!-- Grid -->
          <div class="products-grid col-xl-9 col-lg-8 sidebar-left">
          <header class="d-flex justify-content-between align-items-start"><span class="visible-items">Total <strong>{{ $total_count }} </strong>products founds.</span>
          
              <a href="{{ url('shop/' . $curl . '?orderBy=asc') }}" class="btn btn-template-outlined btn-sm ml-auto">Low Price</a>
              <a href="{{ url('shop/' . $curl . '?orderBy=desc') }}" class="btn btn-template-outlined btn-sm ml-1">High Price</a>

            </header>
    
            <div class="row">
              <!-- item-->
             
              @foreach($products as $product)
              <div class="item col-xl-3 col-lg-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                      <img src="{{ asset('images/' . $product->pimage) }}" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                    <div class="CTA d-flex align-items-center justify-content-center">
                      @if (Cart::get($product->id))
                      <button disabled="disabled" type="button" class="btn btn-template add-to-cart-btn btn-item-pro">in cart <i class="fa fa-shopping-cart"></i></button>
                      @else
                      <button data-id="{{ $product->id }}" type="button" class="btn btn-template add-to-cart-btn"><i class="fa fa-shopping-cart"></i></button>
                      @endif
                      <a href="{{ url('shop/' . $product->url . '/' . $product->purl) }}" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">{{ $product->ptitle }}</h3></a><span class="price text-muted">{!! str_limit($product->article, 30) !!}</span>
                      <ul class="price list-inline no-margin">
                      <li class="list-inline-item current"><strong>Price on site: </strong>${{ $product->price }}</li>
                        </ul>
                    </div>
                </div>
 
              </div>
              @endforeach

           
          </div>
          <div class="row">
              <div class="col-sm-12 d-flex justify-content-center">
                @if(!empty($sort))
                {{ $products->appends(['orderBy' => $sort])->links() }}
                @else
                {{ $products->links() }}
                @endif

                

         
          </div>
          </div>
          <!-- / Grid End-->
        </div>
      </div>
    </main>
    <!-- Overview Popup    -->
    <div id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade overview">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="icon-close"></i></span></button>
          <div class="modal-body"> 
            <div class="ribbon-primary text-uppercase">Sale</div>
            <div class="row d-flex align-items-center">
              <div class="image col-lg-5"><img src="{{ asset('images/pd_1.jpg') }}" alt="..." class="img-fluid d-block"></div>
              <div class="details col-lg-7">
                <h2>Lose Oversized Shirt</h2>
                <ul class="price list-inline">
                  <li class="list-inline-item current">$65.00</li>
                  <li class="list-inline-item original">$90.00</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                <div class="d-flex align-items-center">
                  <div class="quantity d-flex align-items-center">
                    <div class="dec-btn">-</div>
                    <input type="text" value="1" class="quantity-no">
                    <div class="inc-btn">+</div>
                  </div>
                  <select id="size" class="bs-select">
                    <option value="small">Small</option>
                    <option value="meduim">Medium</option>
                    <option value="large">Large</option>
                    <option value="x-large">X-Large</option>
                  </select>
                </div>
                <ul class="CTAs list-inline">
                  <li class="list-inline-item"><a href="#" class="btn btn-template wide"> <i class="fa fa-shopping-cart"></i>Add to Cart</a></li>
                  <li class="list-inline-item"><a href="#" class="visit-product active btn btn-template-outlined wide"> <i class="icon-heart"></i>Add to wishlist</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <section class="categories">
      <div class="container">
        <header class="text-center">
          <h2 class="text-uppercase"><small>Top for this month</small>Our Featured Picks</h2>
        </header>
        <div class="row text-left">
          <div class="col-lg-4"><a href="#">
              <div style="background-image: url({{ asset('lib/distribution/img/cat_5.jpg') }});" class="item d-flex align-items-end">
                <div class="content">
                  <h3 class="h5">Men's</h3><span>New Collection</span>
                </div>
              </div></a></div>
          <div class="col-lg-4"><a href="#">
              <div style="background-image: url({{ asset('lib/distribution/img/cat_2.jpg') }});" class="item d-flex align-items-end">
                <div class="content">
                  <h3 class="h5">Women's</h3><span>New Collection</span>
                </div>
              </div></a></div>
          <div class="col-lg-4"><a href="#">
              <div style="background-image: url({{ asset('lib/distribution/img/cat_8.jpg') }});" class="item d-flex align-items-end">
                <div class="content">
                  <h3 class="h5">Accessories</h3><span>Sale of 20%</span>
                </div>
              </div></a></div>
        </div>
      </div>
    </section>
    <!-- Men's Collection -->
    <section class="men-collection gray-bg">
      <div class="container">
        <header class="text-center">
          <h2 class="text-uppercase"><small>Customers Choice</small>Diamond Collection</h2>
        </header>
        <!-- Products Slider-->
        <div class="owl-carousel owl-theme products-slider">
          <!-- item-->
          <div class="item">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="{{ asset('lib/distribution/img/cat_3.jpg') }}" alt="product" class="img-fluid">
                <div class="hover-overlay d-flex align-items-center justify-content-center">
                  <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                </div>
              </div>
              <div class="title"><a href="detail.html">
                  <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a><span class="price text-muted">$40.00</span></div>
            </div>
          </div>
          <div class="item">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="{{ asset('lib/distribution/img/cat_4.jpg') }}" alt="product" class="img-fluid">
                <div class="hover-overlay d-flex align-items-center justify-content-center">
                  <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                </div>
              </div>
              <div class="title"><a href="detail.html">
                  <h3 class="h6 text-uppercase no-margin-bottom">Elegant Blue</h3></a><span class="price text-muted">$40.00</span></div>
            </div>
          </div>
          <div class="item">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="{{ asset('lib/distribution/img/cat_6.jpg') }}" alt="product" class="img-fluid">
                <div class="hover-overlay d-flex align-items-center justify-content-center">
                  <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                </div>
              </div>
              <div class="title"><a href="detail.html">
                  <h3 class="h6 text-uppercase no-margin-bottom">Elegant Black</h3></a><span class="price text-muted">$40.00</span></div>
            </div>
          </div>
          <div class="item">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="{{ asset('lib/distribution/img/cat_8.jpg') }}" alt="product" class="img-fluid">
                <div class="hover-overlay d-flex align-items-center justify-content-center">
                  <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                </div>
              </div>
              <div class="title"><a href="detail.html">
                  <h3 class="h6 text-uppercase no-margin-bottom">Elegant Gray</h3></a><span class="price text-muted">$40.00</span></div>
            </div>
          </div>
          <div class="item">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="{{ asset('lib/distribution/img/cat_7.jpg') }}" alt="product" class="img-fluid">
                <div class="hover-overlay d-flex align-items-center justify-content-center">
                  <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                </div>
              </div>
              <div class="title"><a href="detail.html">
                  <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a><span class="price text-muted">$40.00</span></div>
            </div>
          </div>
          <div class="item">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="{{ asset('lib/distribution/img/cat_5.jpg') }}" alt="product" class="img-fluid">
                <div class="hover-overlay d-flex align-items-center justify-content-center">
                  <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                </div>
              </div>
              <div class="title"><a href="detail.html">
                  <h3 class="h6 text-uppercase no-margin-bottom">Elegant Blue</h3></a><span class="price text-muted">$40.00</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endif
{{-- @if(isset($details))
  <h1>{{ $query }}</h1>
  @elseif(isset($message))
  <h1>{{ $message }}</h1>
@endif --}}
@endsection