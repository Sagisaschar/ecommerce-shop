@extends('site.master')

@section('content')
<section data-parallax="scroll" data-image-src="{{ asset('lib/distribution/img/diamond-home-1.jpg') }}" class="parallax text-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 mx-auto">
                <h1 class="text-shadow mt-2 mb-5 h1-home">BATELLA</h1>
                <p> <a href="{{ url('shop') }}" class="btn px-3 btn-light"> <i class="icon-bag mr-2"></i>SHOP NOW</a></p>
            </div>
        </div>
    </div>
</section>
<section data-parallax="scroll" data-image-src="{{ asset('lib/distribution/img/diamond-home-2.jpg') }}" class="parallax text-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 mx-auto">
                <h1 class="text-shadow">Beauty is you</h1>
                <p class="lead text-shadow mb-4">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.</p>
                <p> <a href="{{ url('shop') }}" class="btn px-3 btn-light"> <i class="icon-bag mr-2"></i>LEARN MORE</a></p>
            </div>
        </div>
    </div>
</section>
<section data-parallax="scroll" data-image-src="{{ asset('lib/distribution/img/diamond-home-3.jpg') }}" class="parallax text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 mx-auto">
                <h1 class="text-shadow">BATELLA BRACELETS</h1>
                <p class="lead text-shadow mb-4">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.</p>
                <p> <a href="{{ url('shop') }}" class="btn px-3 btn-dark"> <i class="icon-bag mr-2"></i>Shop Now</a></p>
            </div>
        </div>
    </div>
</section>
<section data-parallax="scroll" data-image-src="{{ asset('lib/distribution/img/diamond-home-4.jpg') }}" class="parallax text-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 mx-auto">
                <h1 class="text-shadow">LIfestyle collection</h1>
                <p class="lead text-shadow mb-4">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                <p> <a href="{{ url('shop') }}" class="btn px-3 btn-light"> <i class="icon-bag mr-2"></i>See this offer</a></p>
            </div>
        </div>
    </div>
</section>
<section data-parallax="scroll" data-image-src="{{ asset('lib/distribution/img/diamond-home-5.jpg') }}" class="parallax text-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 mx-auto">
                <h1 class="text-shadow">CUSTOMIZE YOUR RING</h1>
                <p class="lead text-shadow mb-4">He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before.</p>
                <p> <a href="{{ url('shop') }}" class="btn px-3 btn-light"> <i class="icon-bag mr-2"></i>START NOW</a></p>
            </div>
        </div>
    </div>
</section>
<div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>
@endsection