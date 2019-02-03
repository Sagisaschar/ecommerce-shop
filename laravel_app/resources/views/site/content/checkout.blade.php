@extends('site.master')

@section('content')
@if ($cart)

<!-- Hero Section-->
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
      <div class="row d-flex">
        <div class="col-lg-8 order-2 order-lg-1">

          @if ($items = Cart::getTotalQuantity())

          <h1>Shopping cart</h1><p class="lead text-muted">You currently have {{ Cart::getTotalQuantity() }} item<span>@if(Cart::getTotalQuantity() > 1) s  @endif</span> in your shopping cart</p>
          
          @else

          <h1>Shopping cart</h1><p class="lead text-muted">You currently have 0 items in your shopping cart</p>
              
          @endif

        </div>
        <div class="col-lg-4 text-right order-1 order-lg-2">
            {{ Breadcrumbs::render('checkout') }}
        </div>
      </div>
    </div>
  </section>
  <!-- Shopping Cart Section-->
  <section class="shopping-cart">
    <div class="container">
      <div class="basket">
        <div class="basket-holder">
          <div class="basket-header">
            <div class="row">
              <div class="col-5">Product</div>
              <div class="col-2">Price</div>
              <div class="col-2">Quantity</div>
              <div class="col-2">Total</div>
              <div class="col-1 text-center">Remove</div>
            </div>
          </div>
          <div class="basket-body">
            <!-- Product-->

            @foreach ($cart as $item)

            <div class="item">
              <div class="row d-flex align-items-center">
                <div class="col-5">
                  <div class="d-flex align-items-center">{{-- <img src="img/shirt.png" alt="..." class="img-fluid"> --}}
                    <div class="title"><a href="detail.html">
                    <h5>{{ $item['name'] }}</h5></a></div>
                  </div>
                </div>
                <div class="col-2"><span>${{ $item['price'] }}</span></div>
                <div class="col-2">
                  <div class="d-flex align-items-center">
                    <div class="quantity d-flex align-items-center">
                    <div class="dec-btn update-cart-btn"><a href="{{ url('shop/update-cart?pid=' . $item['id']) . '&op=minus' }}">-</a></div>
                    <input type="text" value="{{ $item['quantity'] }}" class="quantity-no">
                    <div class="inc-btn update-cart-btn"><a href="{{ url('shop/update-cart?pid=' . $item['id']) . '&op=plus' }}">+</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-2"><span>${{ $item['price'] * $item['quantity'] }}</span></div>
              <div class="col-1 text-center"><a href="{{ url('shop/remove-item?pid=' . $item['id']) }}"><i class="delete fa fa-trash"></i></a></div>
              </div>
            </div>
                
            @endforeach

          </div>
        </div>
      </div>
    </div>
    <div class="container">
    <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row"><a href="{{ url('shop') }}" class="btn btn-template wide">Continue Shopping</a><a href="{{ url('shop/clear-cart') }}" class="btn btn-template-outlined">Clear cart</a></div>
    </div>
  </section>
  <!-- Order Details Section-->
  <section class="order-details no-padding-top"> 
    <div class="container">
      <div class="row">                         
        <div class="col-lg-6">
          <div class="block">
            <div class="block-header">
              <h6 class="text-uppercase">Coupon Code</h6>
            </div>
            <div class="block-body">
              <p>If you have a coupon code, please enter it in the box below</p>
              <form action="#">
                <div class="form-group d-flex">
                  <input type="text" name="coupon">
                  <button type="submit" class="cart-black-button">Apply coupon</button>
                </div>
              </form>
            </div>
          </div>
          <div class="block">
            <div class="block-header">
              <h6 class="text-uppercase">Instructions for seller</h6>
            </div>
            <div class="block-body">
              <p>If you have some information for the seller you can leave them in the box below</p>
              <form action="#">
                <textarea name="instructions"></textarea>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="block">
            <div class="block-header">
              <h6 class="text-uppercase">Order Summary</h6>
            </div>
            <div class="block-body">
              <p>Shipping and additional costs are calculated based on values you have entered.</p>
              <ul class="order-menu list-unstyled">
                <li class="d-flex justify-content-between"><span>Order Subtotal </span><strong>${{ Cart::getTotal() }}</strong></li>
                @if (Cart::getTotal())

                <li class="d-flex justify-content-between"><span>Shipping and handling</span><strong>$10.00</strong></li>
                    
                @endif
                <li class="d-flex justify-content-between"><span>Tax</span><strong>$0.00</strong></li>
                <li class="d-flex justify-content-between"><span>Total</span><strong class="text-primary price-total">${{ Cart::getTotal() + 10 }}</strong></li>
              </ul>
            </div>
          </div>
        </div>
      <div class="col-lg-12 text-center CTAs"><a href="{{ url('shop/order-now') }}" class="btn btn-template btn-lg wide">Proceed to checkout<i class="fa fa-long-arrow-right"></i></a></div>
      </div>
    </div>
  </section>
    
@else
    
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
      <div class="row d-flex">
        <div class="col-lg-8 order-2 order-lg-1">
         
          <h1>Shopping cart</h1><p class="lead text-muted">You currently have 0 items in your shopping cart</p>
             

        </div>
        <div class="col-lg-4 text-right order-1 order-lg-2">
            {{ Breadcrumbs::render('checkout') }}
        </div>
      </div>
    </div>
    <div class="container">
        <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row"><a href="{{ url('shop') }}" class="btn btn-template wide">Continue Shopping</a></div>
        </div>
  </section>

  <section class="padding-small">
      <div class="container">
        <header>
          <p class="lead text-muted">
            As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am
            he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.                     
          </p>
        </header>
        <div class="py-4">
          <h2 class="mb-5 text-secondary">Shopping</h2>
          <div class="row">
            <div class="col-md-6">
              <h5>What shipping method does GearBest use?</h5>
              <p class="text-muted mb-4">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.</p>
              <h5>What countries do you to?</h5>
              <p class="text-muted mb-4">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.</p>
            </div>
            <div class="col-md-6">
              <h5>One of my items is missing</h5>
              <p class="text-muted mb-4">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
              <h5>Remote areas - delivery</h5>
              <p class="text-muted mb-4">He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before.</p>
            </div>
          </div>
        </div>
        <hr>
        <div class="py-4">
          <h2 class="mb-5 text-secondary">Payment</h2>
          <div class="row">
            <div class="col-md-6">
              <h5>Can I pay COD - cash on delivery?</h5>
              <p class="text-muted mb-4">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections</p>
              <h5>Payment methods accepted</h5>
              <p class="text-muted mb-4">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.</p>
            </div>
            <div class="col-md-6">
              <h5>What is Paypal?</h5>
              <p class="text-muted mb-4">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.</p>
              <h5>How do the conversion rates work</h5>
              <p class="text-muted mb-4">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
            </div>
          </div>
        </div>
        <hr>
        <div class="py-4">
          <h2 class="mb-5 text-secondary">Warranty and return</h2>
          <div class="row">
            <div class="col-md-6">
              <h5>My product has a problem what should I do?</h5>
              <p class="text-muted mb-4">He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before.</p>
              <h5>What if the product is broken?</h5>
              <p class="text-muted mb-4">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections</p>
            </div>
            <div class="col-md-6">
              <h5>Why should I buy insurance at the checkout?</h5>
              <p class="text-muted mb-4">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

@endif
@endsection