@extends('site.master')

@section('content')

  <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Shop</h1><p class="lead text-muted">WELCOME TO BATELLA.COM</p>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            
              {{ Breadcrumbs::render('shop') }}
             
           
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
                  <li><a href="{{ url('shop/' . $category['url']) }}" class="d-flex justify-content-between align-items-center"><span>{{ $category['title'] }}</span></a></li>
                    @endforeach
                
                  <li class="active"><a href="#" class="d-flex justify-content-between align-items-center"><span>More</span><small>120</small></a>
                    <ul class="list-unstyled">
                      <li> <a href="#">Diamond Watches</a></li>
                      <li> <a href="#">Bracelets</a></li>
                      <li> <a href="#">Errings</a></li>
                      <li> <a href="#">Jewelry</a></li>
                    </ul>
                  </li>
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
            <header class="d-flex justify-content-between align-items-start"><span class="visible-items">Showing <strong>1-15 </strong>of <strong>158 </strong>results</span>
              <select id="sorting" class="bs-select">
                <option value="newest">Newest</option>
                <option value="oldest">Oldest</option>
                <option value="lowest-price">Low Price</option>
                <option value="heigh-price">High Price</option>
              </select>
            </header>
            <div class="row">
              <!-- item-->
              @if (!empty($categories))
              @foreach($categories as $category)

              <div class="item col-xl-3 col-lg-4 col-md-6">
                  <div class="product is-gray">
                    <div class="image d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/' . $category['image']) }}" alt="product" class="img-fluid">
                      <div class="hover-overlay d-flex align-items-center justify-content-center">
                        <div class="CTA d-flex align-items-center justify-content-center"><a href="{{ url('shop/' . $category['url']) }}" class="visit-product active"><i class="icon-search"></i>View Products</a></div>
                      </div>
                    </div>
                    <div class="title">
                      <a href="{{ url('shop/' . $category['url']) }}">
                        <h3 class="h6 text-uppercase no-margin-bottom">{{ $category['title'] }}</h3></a><span class="price text-muted">{!! str_limit($category['description'], 20) !!}</span>
                      </div>
                  </div>
                </div>
              @endforeach
              @else
         
            <div style="background-image: url('{{asset('lib/distribution/img/cat_4.jpg')}}');" class="coming-full-screen dark-overlay"> 
                <div class="text-center text-white text-shadow overlay-content py-5">
                  <p class="social mb-5"><a href="#" target="_blank" title="twitter" class="text-white text-hover-primary"><i class="fa fa-twitter mx-2">       </i></a><a href="#" target="_blank" title="facebook" class="text-white text-hover-primary"><i class="fa fa-facebook mx-2">       </i></a><a href="#" target="_blank" title="instagram" class="text-white text-hover-primary"><i class="fa fa-instagram mx-2">       </i></a><a href="#" target="_blank" title="pinterest" class="text-white text-hover-primary"><i class="fa fa-pinterest mx-2">       </i></a><a href="#" target="_blank" title="vimeo" class="text-white text-hover-primary"><i class="fa fa-vimeo mx-2">       </i></a>
                  </p>
                  <h1 class="mb-5">Batella store is coming soon.</h1>
                  <h3 class="mb-5">We are still tweaking few details, stay tuned!</h3>
                  <!-- countdown-->
                  <div id="countdown" class="row mb-5 py-4"></div>
                  <div class="mailing-list mb-5">
                    <h5 class="font-weight-light mb-4">Join our mailing list and we will let you know all the news.</h5>
                    <form action="#" class="form-inline justify-content-center">
                      <div class="form-group">
                        <label for="email" class="sr-only"></label>
                        <input type="email" placeholder="jane.doe@example.com" id="email" class="form-control bg-white">
                        <button class="btn btn-primary ml-2">subscribe</button>
                      </div>
                    </form>
                  </div>
                  <p>&copy;2018 Batella store.</p>
                </div>
              </div>
        
              @endif

             <div class="item col-xl-3 col-lg-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                      <div class="ribbon ribbon-primary text-uppercase">Sale</div><img src="{{ asset('lib/distribution/img/cat_2.jpg') }}" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Men Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a></div>
                </div>
              </div>
              <div class="item col-xl-3 col-lg-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                      <img src="{{ asset('lib/distribution/img/cat_3.jpg') }}" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Men Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a></div>
                </div>
              </div>
              <div class="item col-xl-3 col-lg-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                      <img src="{{ asset('lib/distribution/img/cat_4.jpg') }}" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Men Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a></div>
                </div>
              </div>
              <div class="item col-xl-3 col-lg-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                      <div class="ribbon ribbon-primary text-uppercase">Sale</div><img src="{{ asset('lib/distribution/img/cat_5.jpg') }}" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Men Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a></div>
                </div>
              </div>
              <div class="item col-xl-3 col-lg-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                      <img src="{{ asset('lib/distribution/img/cat_6.jpg') }}" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Men Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a></div>
                </div>
              </div>
              <div class="item col-xl-3 col-lg-4 col-md-6">
                <div class="product is-gray">
                    <div class="image d-flex align-items-center justify-content-center"><img src="{{ asset('lib/distribution/img/cat_7.jpg') }}" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Men Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Blue</h3></a></div>
                </div>
              </div>
              <div class="item col-xl-3 col-lg-4 col-md-6">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                      <div class="ribbon ribbon-success text-uppercase">New</div><img src="{{ asset('lib/distribution/img/cat_8.jpg') }}" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                  </div>
                  <div class="title"><small class="text-muted">Men Wear</small><a href="detail.html">
                      <h3 class="h6 text-uppercase no-margin-bottom">Elegant Black</h3></a></div>
                </div>
              </div>

            </div>
            <nav aria-label="page navigation example" class="d-flex justify-content-center">
              <ul class="pagination pagination-custom">
                <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">Prev</span><span class="sr-only">Previous</span></a></li>
                <li class="page-item"><a href="#" class="page-link active">1       </a></li>
                <li class="page-item"><a href="#" class="page-link">2       </a></li>
                <li class="page-item"><a href="#" class="page-link">3       </a></li>
                <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">Next</span><span class="sr-only">Next     </span></a></li>
              </ul>
            </nav>
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
              <div class="image col-lg-5"><img src="lib/distribution/img/shirt.png" alt="..." class="img-fluid d-block"></div>
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
              <div style="background-image: url({{ asset('lib/distribution/img/cat_6.jpg') }});" class="item d-flex align-items-end">
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
          <h2 class="text-uppercase"><small>Customers Choice</small>Diamonds Collection</h2>
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

@endsection