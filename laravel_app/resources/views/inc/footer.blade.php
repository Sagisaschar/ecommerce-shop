            <!-- Service Block-->
            <div class="services-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 d-flex justify-content-center justify-content-lg-start">
                                <div class="item d-flex align-items-center">
                                    <div class="icon"><i class="icon-truck"></i></div>
                                    <div class="text">
                                        <h6 class="no-margin text-uppercase">Free shipping &amp; return</h6><span>Free Shipping over $300</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex justify-content-center">
                                <div class="item d-flex align-items-center">
                                    <div class="icon"><i class="icon-coin"></i></div>
                                    <div class="text">
                                        <h6 class="no-margin text-uppercase">Money back guarantee</h6><span>30 Days Money Back Guarantee</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex justify-content-center">
                                <div class="item d-flex align-items-center">
                                    <div class="icon"><i class="icon-headphones"></i></div>
                                    <div class="text">
                                        <h6 class="no-margin text-uppercase">020-800-456-747</h6><span>24/7 Available Support</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main Block -->
                <div class="main-block">
                    <div class="container">
                        <div class="row">
                            <div class="info col-lg-4">
                                <div class="logo"><img width="100" src="{{ asset('lib/distribution/img/logo-footer.jpg') }}" alt="..."></div>
                                <p>Batella | Follow us on Social Media.</p>
                                <ul class="social-menu list-inline">
                                    <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.facebook.com/WWW.BATELLA.CO.IL/" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/batelladiamond/" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.youtube.com/user/batellavideo" target="_blank" title="vimeo"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="site-links col-lg-2 col-md-6">
                                <h5 class="text-uppercase">Shop</h5>
                                <ul class="list-unstyled">
                                        @if (!empty($categories))
                                        @foreach($categories as $category)
                                        <li> <a href="{{ url('shop/' . $category['url']) }}">{{ $category['title'] }}</a></li>
                                        @endforeach
                                        @endif
                                </ul>
                            </div>
                            <div class="site-links col-lg-2 col-md-6">
                                <h5 class="text-uppercase">Company</h5>
                                <ul class="list-unstyled">
                                    @if (Session::has('user_id'))
                                    <li> <a href="{{ url('user/profile') }}">Profile</a></li>
                                    <li> <a href="#">Wishlist</a></li>
                                    @else
                                    <li> <a href="{{ url('user/signin') }}">Login</a></li>
                                    <li> <a href="{{ url('user/signup') }}">Register</a></li>
                                    @endif
                                    <li> <a href="{{ url('shop') }}">Our Products</a></li>
                                    <li> <a href="{{ url('shop/checkout') }}">Checkouts</a></li>
                                </ul>
                            </div>
                            <div class="newsletter col-lg-4">
                                <h5 class="text-uppercase">Daily Offers & Discounts</h5>
                                <p> Here you can sign in for our daily offers and stay up to date with our new discount, new designs and much more.</p>
                                <form action="#" id="newsletter-form">
                                    <div class="form-group">
                                        <input type="email" name="subscribermail" placeholder="Your Email Address">
                                        <button type="submit">SIGN UP <i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyrights">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="text col-md-6">
                            <p>&copy; {{ date('Y') }}<a href="https://ondrejsvestka.cz" target="_blank" class="ml-2">Sagi Isaschar </a> All rights reserved.</p>
                            </div>
                            <div class="payment col-md-6 clearfix">
                                <ul class="payment-list list-inline-item pull-right">
                                    <li class="list-inline-item"><img src="{{ asset('lib/distribution/img/visa.svg') }}" alt="..."></li>
                                    <li class="list-inline-item"><img src="{{ asset('lib/distribution/img/mastercard.svg') }}" alt="..."></li>
                                    <li class="list-inline-item"><img src="{{ asset('lib/distribution/img/paypal.svg') }}" alt="..."></li>
                                    <li class="list-inline-item"><img src="{{ asset('lib/distribution/img/western-union.svg') }}" alt="..."></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>