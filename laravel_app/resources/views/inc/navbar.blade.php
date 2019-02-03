            <!-- Tob Bar-->
            <div class="top-bar">
                    <div class="container-fluid">
                        

                        <div class="row d-flex align-items-center">
                                <div class="col-lg-8 hidden-lg-down text-col">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="icon-telephone"></i>020-800-456-747</li>
                                        <li class="list-inline-item">Free shipping &amp; return</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-lg-2">
                                        <form action="{{ URL::to('/search') }}" method="POST" role="search" autocomplete="off">
                                            @csrf
                                    <div class="input-group-sm">
                                            <input size="5" type="text" name="q" class="search form-control" id="search" placeholder="Search Batella.com...">
                                            <button type="submit" class="submit d-none"></button>
                                    </div>
                                   
                                        </form>
                                        
                                </div>
                                <div class="col-6 col-lg-2 d-flex justify-content-end sm-6">
                                    <!-- Language Dropdown-->
                                    <div class="dropdown show"><a id="langsDropdown" href="https://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><img src="{{ asset('lib/distribution/img/united-kingdom.svg') }}" alt="english"></a>
                                        <div aria-labelledby="langsDropdown" class="dropdown-menu"><a href="{{ url('') }}" class="dropdown-item"><img src="{{ asset('lib/distribution/img/germany.svg') }}" alt="german">German</a><a href="#" class="dropdown-item"> <img src="{{ asset('lib/distribution/img/france.svg') }}" alt="french">French</a></div>
                                    </div>
                                    <!-- Currency Dropdown-->
                                    <div class="dropdown show"><a id="currencyDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">USD</a>
                                        <div aria-labelledby="currencyDropdown" class="dropdown-menu"><a href="#" class="dropdown-item">EUR</a><a href="#" class="dropdown-item"> GBP</a></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg">

                    <div class="container-fluid">  
                        <!-- Navbar Header  --><a href="{{ url('') }}" class="navbar-brand"><img width="120" src="{{ asset('lib/distribution/img/logo.png') }}" alt="..."></a>
                        <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                        <!-- Navbar Collapse -->
                        <div id="navbarCollapse" class="collapse navbar-collapse">
                            <ul class="navbar-nav mx-auto">
                                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                                @if ( !empty($menu) )
                                    @foreach ($menu as $item)
                                    <li class="nav-item"><a href="{{ url($item['url']) }}" class="nav-link">{{ $item['link'] }}</a></li>
                                    @endforeach
                                @endif
                               
                                <li class="nav-item"><a href="{{ url('shop') }}" class="nav-link">Shop</a></li>
                                
                            </ul>
                            <div class="right-col d-flex align-items-lg-center flex-column flex-lg-row">
                                
                                @if (Session::has('user_id'))
                                <div class="user"><a href="{{ url('user/profile') }}" class="nav-link">Hello, {{ Session::get('user_name') }}</a></div>
                                <div class="cart dropdown show"><a id="cartdetails" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="icon-profile"></i></a>
                                <div aria-labelledby="cartdetails" class="dropdown-menu">
                                    <!-- cart item-->
                                    <div class="dropdown-item cart-product">
                                        <div class="d-flex align-items-center">
                                            <div class="img"><img src="{{ asset('lib/distribution/img/person-1.jpg') }}" alt="..." class="img-fluid"></div>
                                            <div class="details d-flex justify-content-between">
                                                <div class="text"> <a href="#"><strong>{{ Session::get('user_name') }} - Profile</strong></a><small>loyalty customer </small></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- call to actions-->
                                    <div class="dropdown-item CTA d-flex">@if (Session::has('is_admin'))<a href="{{ url('cms/dashboard') }}" class="btn btn-template" target="_blank">Admin Panel</a>@endif<a href="{{ url('user/logout') }}" class="btn btn-template">Log Out</a></div>
                                </div>
                            </div>
                                @else
                                <div class="user"><a href="{{ url('user/signin') }}" class="nav-link">Sign in</a></div>
                                <div class="user"><a href="{{ url('user/signup') }}" class="nav-link">Sign up</a></div>
                                    
                                @endif
                                {{-- <div class="user"> <a id="userdetails" href="customer-login.html" class="user-link"><i class="icon-profile"></i></a></div> --}}
    
                                <!-- Cart Dropdown-->
                                <div class="cart dropdown show"><a id="cartdetails" href="https://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="icon-cart"></i>
                                        @if (! Cart::isEmpty()) <div class="cart-no">{{ Cart::getTotalQuantity() }}</div> @endif</a><a href="{{ url('shop/checkout') }}" class="text-primary view-cart">View Cart</a>
                                    <div aria-labelledby="cartdetails" class="dropdown-menu">
                                        <!-- cart item-->
                                        <div class="dropdown-item cart-product">
                                            <div class="d-flex align-items-center">
                                                <div class="img"><img src="{{ asset('lib/distribution/img/pd_1.jpg') }}" alt="..." class="img-fluid"></div>
                                                <div class="details d-flex justify-content-between">
                                                    <div class="text"> <a href="#"><strong>Vinatge diamond</strong></a><small>Quantity: 1 </small><span class="price">$2500.00 </span></div><a href="#" class="delete"><i class="fa fa-trash-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- total price-->
                                        <div class="dropdown-item total-price d-flex justify-content-between"><span>Total</span><strong class="text-primary">{{Cart::getTotalQuantity()}} @if( Cart::getTotalQuantity() > 1)  Items @else Item @endif </strong></div>
                                        <!-- call to actions-->
                                        <div class="dropdown-item CTA d-flex"><a href="{{ url('shop/checkout') }}" class="btn btn-template wide">View Cart</a><a href="{{ url('shop/checkout') }}" class="btn btn-template wide">Checkout</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>