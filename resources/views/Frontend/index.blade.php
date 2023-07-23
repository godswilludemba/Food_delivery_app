@extends('Frontend.main_master')
@section('index')

@section('title')
Home | BrunchWell-Wine & Dine
@endsection

<section class="hero-wrap style3 bg-mine-shaft">
        <img
          src="{{asset('frontend/assets/img/hero/hero-shape-4.png')}}"
          alt="Image"
          class="hero-shape-4"
        />
        <img
          src="{{asset('frontend/assets/img/hero/hero-shape-5.png')}}"
          alt="Image"
          class="hero-shape-5"
        />
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="hero-content">
                <h1>Feeling Hungry! Order Online</h1>
                <h4>We Provide Express Home Delivery</h4>
                <p>
                  We Bring The Best Test in Our Dishes'. In All our food category, We Are Offering 20% Flat Discount. Don't miss Out!!
                </p>
              
                <div class="tab-content food-tabcontent">
                  <div
                    class="tab-pane fade show active"
                    id="tab_1"
                    role="tabpanel"
                  >
                  <div class="hero-btn">
                    <a href="shop-left-sidebar.html" class="btn style1"><i class="las la-shopping-bag"></i>Order Now</a>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hero-img-wrap">
                <img src="{{asset('frontend/assets/img/hero/hero-img-5.png')}}" alt="Image" />
              </div>
            </div>
          </div>
        </div>
      </section>


<section class="about-wrap style1 ptb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<div class="about-img-wrap">
<img src="{{asset('frontend/assets/img/about/about-shape-1.png')}}" alt="Image" class="abouut-shape-1 md-none">
<img src="{{asset('frontend/assets/img/about/about-shape-2.png')}}" alt="Image" class="abouut-shape-2 md-none">
<img src="{{asset('frontend/assets/img/about/about-shape-3.png')}}" alt="Image" class="abouut-shape-3 md-none">
<div class="about-bg-1 bg-f"></div>
<div class="about-bg-2 bg-f"></div>
</div>
</div>
<div class="col-lg-6">
<div class="about-content">
<div class="content-title style2 mb-15">
<span>
<img src="{{asset('frontend/assets/img/secion-shape-1.png')}}" alt="Image">
Our Story
<img src="{{asset('frontend/assets/img/secion-shape-2.png')}}" alt="Image">
</span>
<h2>We Provide Locally Crafted Food Service </h2>
</div>
<p>In our restaurant with people who are important to you, conversations that bring you
closer to each other and those who enjoy our dishes.
Traditional dishes with local products of highest quality. including succulent Veal
Chops Sicilian, spicy Lobster Fra Diazole, tender Chicken Contadina.</p>
<img src="{{asset('frontend/assets/img/about/author-sign.png')}}" alt="Image">
</div>
</div>
</div>
</div>
</section>


<section class="service-wrap bg-f service-bg-1 pt-100 pb-75">
<div class="overlay op-7 bg-white"></div>
<div class="container">
<div class="section-title style1 text-center mb-110">
<span>
<img src="{{asset('frontend/assets/img/secion-shape-1.png')}}" alt="Image">
Our Services
<img src="{{asset('frontend/assets/img/secion-shape-2.png')}}" alt="Image">
</span>
<h2>What We Offer</h2>
</div>
<div class="row">
<div class="col-lg-12">
<div class="service-card-wrap">
<div class="service-card style1">
<div class="service-img">
<img src="{{asset('frontend/assets/img/service/breakfast.png')}}" alt="Image">
</div>
<div class="service-info">
<h3 class="service-title"><a href="service-details.html">Breakfast</a></h3>
<p>Lorem ipsum dolor sit amet, tetur
piscing elit. Suspendisse smod
congue bibendum.</p>
</div>
</div>
<div class="service-card style1">
<div class="service-img">
<img src="{{asset('frontend/assets/img/service/lunch.png')}}" alt="Image">
</div>
<div class="service-info">
<h3 class="service-title"><a href="service-details.html">Lunch</a></h3>
<p>Lorem ipsum dolor sit amet, tetur
piscing elit. Suspendisse smod
congue bibendum.</p>
</div>
</div>
<div class="service-card style1">
<div class="service-img">
<img src="{{asset('frontend/assets/img/service/dinner.png')}}" alt="Image">
</div>
<div class="service-info">
<h3 class="service-title"><a href="service-details.html">Dinner</a></h3>
<p>Lorem ipsum dolor sit amet, tetur
piscing elit. Suspendisse smod
congue bibendum.</p>
</div>
</div>
<div class="service-card style1">
<div class="service-img">
<img src="{{asset('frontend/assets/img/service/custom.png')}}" alt="Image">
</div>
<div class="service-info">
<h3 class="service-title"><a href="service-details.html">Custom</a></h3>
<p>Lorem ipsum dolor sit amet, tetur
piscing elit. Suspendisse smod
congue bibendum.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="feature-wrap style1 pt-100 pb-70 bg-1 pos-rel">
<div class="feature-top-shape bg-f">
<img src="{{asset('frontend/assets/img/shape-1.png')}}" alt="Image" class="feature-top-shape-1 md-none">
<img src="{{asset('frontend/assets/img/shape-2.png')}}" alt="Image" class="feature-top-shape-2 md-none">
<div class="overlay op-9 bg-black"></div>
</div>
<div class="overlay op-7 bg-white"></div>
<div class="section-title style6 text-center mb-40">
<span>
<img src="{{asset('frontend/assets/img/secion-shape-1.png')}}" alt="Image">
Our Feature Items
<img src="{{asset('frontend/assets/img/secion-shape-2.png')}}" alt="Image">
</span>
<h2 class="text-white">Popular Items Of Our Restaurant</h2>
</div>
<div class="container pos-rel">
<div class="row justify-content-center">
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="feature-card style1">
<div class="feature-img">
<img src="{{asset('frontend/assets/img/feature/feature-item-1.jpg')}}" alt="Image">
</div>
<div class="feature-info">
 <h3 class="feature-title"><a href="shop-details.html">Chicken In Teriyaki</a></h3>
<div class="feature-meta">
<p class="feature-price">22.35$ <span>30.50$</span></p>
<div class="ratings">
<i class="flaticon-star-1"></i>
<span>4.9</span>
</div>
</div>
<a class="btn style2" href="cart.html"><i class="flaticon-shopping-bag-1"></i>Add To Cart</a>
<div class="discount-tag">
<img src="{{asset('frontend/assets/img/feature/circle-1.png')}}" alt="Image">
<p> <span>Save</span>
30%</p>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="feature-card style1">
<div class="feature-img">
<img src="{{asset('frontend/assets/img/feature/feature-item-2.jpg')}}" alt="Image">
</div>
<div class="feature-info">
<h3 class="feature-title"><a href="shop-details.html">Hotdog With Sausage</a></h3>
<div class="feature-meta">
<p class="feature-price">30.35$ <span>40.50$</span></p>
<div class="ratings">
<i class="flaticon-star-1"></i>
<span>4.2</span>
</div>
</div>
<a class="btn style2" href="cart.html"><i class="flaticon-shopping-bag-1"></i>Add To Cart</a>
<div class="discount-tag">
<img src="{{asset('frontend/assets/img/feature/circle-1.png')}}" alt="Image">
<p> <span>Save</span>
20%</p>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="feature-card style1">
<div class="feature-img">
<img src="{{asset('frontend/assets/img/feature/feature-item-3.jpg')}}" alt="Image">
</div>
<div class="feature-info">
<h3 class="feature-title"><a href="shop-details.html">Breakfast With Sweet</a></h3>
<div class="feature-meta">
<p class="feature-price">52.35$ <span>60.50$</span></p>
<div class="ratings">
<i class="flaticon-star-1"></i>
<span>4.5</span>
</div>
</div>
<a class="btn style2" href="cart.html"><i class="flaticon-shopping-bag-1"></i>Add To Cart</a>
<div class="discount-tag">
<img src="{{asset('frontend/assets/img/feature/circle-1.png')}}" alt="Image">
<p> <span>Save</span>
25%</p>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6">
 <div class="feature-card style1">
<div class="feature-img">
<img src="{{asset('frontend/assets/img/feature/feature-item-4.jpg')}}" alt="Image">
</div>
<div class="feature-info">
<h3 class="feature-title"><a href="shop-details.html">Grilled Chicken Stick</a></h3>
<div class="feature-meta">
<p class="feature-price">25.35$ <span>30.50$</span></p>
<div class="ratings">
<i class="flaticon-star-1"></i>
<span>4.8</span>
</div>
</div>
<a class="btn style2" href="cart.html"><i class="flaticon-shopping-bag-1"></i>Add To Cart</a>
<div class="discount-tag">
<img src="{{asset('frontend/assets/img/feature/circle-1.png')}}" alt="Image">
<p> <span>Save</span>
30%</p>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="feature-card style1">
<div class="feature-img">
<img src="{{asset('frontend/assets/img/feature/feature-item-5.jpg')}}" alt="Image">
</div>
<div class="feature-info">
<h3 class="feature-title"><a href="shop-details.html">Chicken Barista platter</a></h3>
<div class="feature-meta">
<p class="feature-price">32.35$ <span>45.50$</span></p>
<div class="ratings">
<i class="flaticon-star-1"></i>
<span>4.9</span>
</div>
</div>
<a class="btn style2" href="cart.html"><i class="flaticon-shopping-bag-1"></i>Add To Cart</a>
<div class="discount-tag">
<img src="{{asset('frontend/assets/img/feature/circle-1.png')}}" alt="Image">
<p> <span>Save</span>
40%</p>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="feature-card style1">
<div class="feature-img">
<img src="{{asset('frontend/assets/img/feature/feature-item-6.jpg')}}" alt="Image">
</div>
<div class="feature-info">
<h3 class="feature-title"><a href="shop-details.html">French Fries Pack</a></h3>
<div class="feature-meta">
<p class="feature-price">15.35$ <span>20.50$</span></p>
<div class="ratings">
<i class="flaticon-star-1"></i>
<span>4.4</span>
</div>
</div>
<a class="btn style2" href="cart.html"><i class="flaticon-shopping-bag-1"></i>Add To Cart</a>
<div class="discount-tag">
<img src="{{asset('frontend/assets/img/feature/circle-1.png')}}" alt="Image">
<p> <span>Save</span>
15%</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="delivery-wrap ptb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<div class="delivery-content">
<div class="content-title style2 text-left mb-20">
<span class="">
<img src="{{asset('frontend/assets/img/secion-shape-1.png')}}" alt="Image">
Quick Delivery
<img src="{{asset('frontend/assets/img/secion-shape-2.png')}}" alt="Image">
</span>
<h2>Free Food Delivery Everyday At Your Convenience</h2>
</div>
<p>In our restaurant with people who are important to you, conversations that bring you to
closer to each other and those who enjoy our dishes. Quisque pretium dolor turpis, quis
blandit turpis semper ut. Nam malesuada eros nec luctus laoreet. Fusce sodales consequat
velit eget dictum. Integer ornare magna.</p>
<div class="row align-items-end gx-5">
<div class="col-md-8">
<div class="contact-item-wrap">
<div class="contact-item">
<span><i class="flaticon-phone-call"></i></span>
<a href="tel:49260573180">+49260-5731-80</a>
</div>
<div class="contact-item">
<div class="contact-item">
<span> <i class="lar la-clock"></i></span>
<p>Everyday From 8:00 to 12:00</p>
</div>
</div>
</div>
<form class="deilvery-address" action="#">
<input type="text" placeholder="Enter Your Area ZIP Code">
<button type="submit"><i class="flaticon-right-arrow-2"></i></button>
</form>
</div>
<div class="col-md-4 sm-none">
<div class="del-img">
<img src="{{asset('frontend/assets/img/fruit-1.png')}}" alt="Image">
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="delivery-van-img">
<img src="{{asset('frontend/assets/img/delivery/car.png')}}" alt="Image">
</div>
</div>
</div>
</div>
</section>


<section class="contact-wrap style1 bg-f contact-bg-1 pt-100 pb-70 pos-rel">
<div class="overlay bg-black op-85"></div>
<img src="{{asset('frontend/assets/img/shape-1.png')}}" alt="Iamge" class="contact-shape-1 lg-none">
<img src="{{asset('frontend/assets/img/shape-2.png')}}" alt="Iamge" class="contact-shape-2 lg-none">
<div class="section-title style6 text-center mb-40">
<span class="text-sunshade">
<img src="{{asset('frontend/assets/img/secion-shape-1.png')}}" alt="Image">
Contact Us
<img src="{{asset('frontend/assets/img/secion-shape-2.png')}}" alt="Image">
</span>
<h2 class="text-white">Not Sure What To Order? <br> Contact Us Now</h2>
</div>
<div class="container pos-rel">
<div class="row">
<div class="col-xl-10 offset-xl-1">
<div class="contact-box-wrap">
<div class="contact-box-icon">
<i class="flaticon-phone-call"></i>
</div>
<div class="contact-box">
<h5>Make A Call</h5>
<a href="tel:880123654223">880-123-654</a>
</div>
<div class="contact-box">
<h5>Mail Us</h5>
<a href="mainto:hello@caban.com"><span class="__cf_email__" data-cfemail="eb838e878784ab888a898a85c5888486">[email&#160;protected]</span></a>
<img src="{{asset('frontend/assets/img/contact/contact-img-1.png')}}" alt="Image">
</div>
</div>
</div>
</div>
</div>
</section>


<section class="testimonial-wrap bg-f testimonial-bg-1 pt-100 pb-100 pos-rel">
<div class="overlay bg-white op-7"></div>
<div class="section-title style1 text-center mb-40">
<span>
<img src="{{asset('frontend/assets/img/secion-shape-1.png')}}" alt="Image">
Testimonials
<img src="{{asset('frontend/assets/img/secion-shape-2.png')}}" alt="Image">
</span>
<h2>Our Happy Customers</h2>
</div>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="testimonial-slider-one swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="testimonial-item style1">
<div class="client-img">
<img src="{asset('frontend/assets/img/testimonial/client-1.jpg')}}" alt="Image">
</div>
<div class="client-info">
<h4>Lisa Ann</h4>
<span>CEO, IUBAT</span>
</div>
<div class="client-quote">
<p>The food is really very tasty – the wagyu sushi on the dinner menu is
especially delicious and not to be missed for a long time!</p>
</div>
<div class="client-rating-wrap">
<ul class="ratings list-style">
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
</ul>
<div class="quote-icon">
<i class="flaticon-right-quote-sign"></i>
</div>
 </div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonial-item style1">
<div class="client-img">
<img src="{{asset('frontend/assets/img/testimonial/client-2.jpg')}}" alt="Image">
</div>
<div class="client-info">
<h4>Angelina Miller</h4>
<span>Food Bloger</span>
</div>
<div class="client-quote">
<p>The food is really very tasty – the wagyu sushi on the dinner menu is
especially delicious and not to be missed for a long time!</p>
</div>
<div class="client-rating-wrap">
<ul class="ratings list-style">
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
</ul>
<div class="quote-icon">
<i class="flaticon-right-quote-sign"></i>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonial-item style1">
<div class="client-img">
<img src="{{asset('frontend/assets/img/testimonial/client-3.jpg')}}" alt="Image">
</div>
<div class="client-info">
<h4>Tony Stark</h4>
<span>Traveler</span>
</div>
<div class="client-quote">
<p>The food is really very tasty – the wagyu sushi on the dinner menu is
especially delicious and not to be missed for a long time!</p>
</div>
<div class="client-rating-wrap">
<ul class="ratings list-style">
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
</ul>
<div class="quote-icon">
<i class="flaticon-right-quote-sign"></i>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
 <div class="testimonial-item style1">
<div class="client-img">
<img src="{{asset('frontend/assets/img/testimonial/client-4.jpg')}}" alt="Image">
</div>
<div class="client-info">
<h4>Henry Orton</h4>
<span>Content Creator & Blogger</span>
</div>
<div class="client-quote">
<p>The food is really very tasty – the wagyu sushi on the dinner menu is
especially delicious and not to be missed for a long time!</p>
</div>
<div class="client-rating-wrap">
<ul class="ratings list-style">
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
<li><i class="flaticon-star-1"></i></li>
</ul>
<div class="quote-icon">
<i class="flaticon-right-quote-sign"></i>
</div>
</div>
</div>
</div>
</div>
<div class="testimonial-one-pagination"></div>
</div>
</div>
</div>
</div>
</section>


<section class="app-wrap style1 ptb-100 bg-f app-bg-1">
<div class="overlay op-95 bg-black"></div>
<img src="{{asset('frontend/assets/img/shape-1.png')}}" alt="Image" class="app-shape-1 lg-none">
<img src="{{asset('frontend/assets/img/shape-2.png')}}" alt="Image" class="app-shape-2 lg-none">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<div class="app-content">
<div class="content-title style3 text-left mb-30">
<span>
<img src="{{asset('frontend/assets/img/secion-shape-1.png')}}" alt="Image">
Our App
<img src="{{asset('frontend/assets/img/secion-shape-2.png')}}" alt="Image">
</span>
<h2 class="text-white">Order With Our Application</h2>
</div>
<div class="pr-wrap style1">
<div class="pr-item">
<h4><i class="flaticon-check-box-with-check-sign"></i>Order And
Pay In A Few
Minutes</h4>
<p>Сhoose food and pay for the order in a couple of clicks online also
choose you current location using GPS</p>
</div>
<div class="pr-item">
<h4><i class="flaticon-check-box-with-check-sign"></i>Check
Delivery Status</h4>
<p>Follow the status of your order in real time and also track the delivery path
 until you get it.</p>
</div>
</div>
<div class="download-app-btn">
<a href="app.html"><img src="{{asset('frontend/assets/img/app/google-playstore.png')}}" alt="Image"></a>
<a href="app.html"><img src="{{asset('frontend/assets/img/app/apple-playstore.png')}}" alt="Image"></a>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="app-img">
<img src="{{asset('frontend/assets/img/app/app-img-1.png')}}" alt="Image" class="app-top-img md-none">
<img src="{{asset('frontend/assets/img/app/app-showcase.png')}}" alt="Image">
</div>
</div>
</div>
</div>
</section>


<section class="newsletter-wrap bg-f newsletter-bg-1 ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
<div class="section-title style1 text-center mb-40">
<h2>Newsletter Subscribe</h2>
<p>Drop us your mail address. We love to hear from you and are happy to answer any
questions immediately.</p>
</div>
<form action="#" class="newsletter-form">
<div class="form-group">
<input type="email" placeholder="Enter Your Email Address">
<button type="submit"><i class="flaticon-direct"></i></button>
</div>
</form>
</div>
</div>
</div>
</section>

@endsection
