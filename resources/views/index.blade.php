<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="app, landing, corporate, Creative, Html Template, Template">
      <meta name="author" content="web-themes">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1">

      <!-- title -->
      <title>Order Up</title>

      <!-- favicon -->
      <link href="img/favicon.png" type="image/png" rel="icon">

      <!-- all css here -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/helper.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

  </head>
  <body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="loader3">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader End -->


    <!-- Header Start -->
    <header>
      <div class="header-wrapper">
        <div class="container d-flex justify-content-between align-items-center">
          <a href="#" class="header-logo">
            <img src="{{asset('assets/img/logo2.png')}}" alt="">
          </a>
            <!--menu start-->
          <div class="menu-wrap">
            <div class="menu">
              <ul>
                <li>
                    <a class="active" href="#">Home</a>
                </li>
                <li>
                    <a href="https://orderup.cc/about-us">About Us</a>
                </li>
                <li>
                  <a href="https://delivery.orderup.cc/">How it works</a>
                </li>
                <li>
                  <a href="https://orderup.cc/contact-us">Contact Us</a>
                </li>
              </ul>
              <div class="header-btn d-lg-none">
                <a href="https://orderup-web.orderup.cc" class="primary-btn black_btn transform-effect">Order Now</a>
                <a href="https://orderup.cc/store/apply" class="primary-btn transform-effect">Join Us</a>
              </div>
            </div>
          </div>
          <!-- Header BTn -->
          <div class="header-btn d-none d-lg-flex">
            <a href="https://orderup-web.orderup.cc" target="_blank" class="primary-btn black_btn transform-effect">Order Now</a>
            <a href="https://orderup.cc/store/apply" target="_blank" class="primary-btn transform-effect">Join Us</a>
          </div>
          <!-- menu toggler -->
          <div class="hamburger-menu">
            <span class="line-top"></span>
            <span class="line-center"></span>
            <span class="line-bottom"></span>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->


    <!-- Banner Section-->
    <section class="banner-sec">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="banner-content">
              <h1>Island-Wide Delivery in a Flash</h1>
              <p>Discover the ease and convenience of getting your favorite local flavors and essential items delivered right to your doorstep with Order Up. Quick, reliable, and just a tap away.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="banner-img">
              <img src="{{asset('assets/img/hero-delivery.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner Section-->


    <!-- Features Section-->
    <section class="feature-sec">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="feature-box text-center">
              <div class="feature-icon "><span class="transform-effect"><i class="fal fa-bolt"></i></span></div>
              <h3>Swift Island Delivery</h3>
              <p>Get your orders delivered quickly with Order Up. Our dedicated team ensures that your food, groceries, and goods arrive in no time.</p>
              <a href="#">Read More <span><i class="far fa-arrow-right"></i></span></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature-box text-center">
              <div class="feature-icon"><span class=" transform-effect"><i class="fal fa-mobile-alt"></i></span></div>
              <h3>Seamless Ordering Experience</h3>
              <p>Enjoy a hassle-free ordering process with the Order Up app. Intuitive design, easy navigation, and a host of features make your experience enjoyable.</p>
              <a href="#">Read More <span><i class="far fa-arrow-right"></i></span></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature-box text-center">
              <div class="feature-icon"><span class=" transform-effect"><i class="fal fa-headset"></i></span></div>
              <h3>Support Around the Clock</h3>
              <p>Our customer service team is always available to assist you with your orders and ensure you have a delightful experience with Order Up.</p>
              <a href="#">Read More <span><i class="far fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section-->


    <!-- Recommendations Section-->
    <section class="recommendation-sec">
      <div class="container-fluid">
        <div class="section-title">
          <h2>Island Favorites Delivered</h2>
          <p>From the freshest groceries to mouth-watering pizzas, and an assortment of beers and wines, discover the best of local markets and eateries with Order Up. Experience the culinary diversity of the island, delivered directly to your doorstep.</p>
        </div>
          <div class="row justify-content-center">
            <div class="col-lg-4 mb-4">
              <div class="recommendation-box">
                <div>
                  <div class="recommendation-img ">
                    <a href="#"><img src="{{asset('assets/img/img1.jpg')}}" alt=""></a>
                  </div>
                  <h3>Local Grocery Store</h3>
                  <p>Discover Local Groceries at Your Fingertips! Order Up connects you with the best of Turks and Caicos's grocery offerings. From fresh tropical fruits to everyday essentials, our app brings the convenience of island shopping directly to you. Enjoy a seamless and personalized grocery experience, all from the comfort of your home.</p>
                </div>
                <div>
                  <a href="https://orderup-web.orderup.cc" class="primary-btn">Order Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="recommendation-box">
                <div>
                  <div class="recommendation-img ">
                    <a href="#"><img src="{{asset('assets/img/img4.jpg')}}" alt=""></a>
                  </div>
                  <h3>Beers</h3>
                  <p>Explore the Best of Local Brews! With Order Up, bring the vibrant taste of Turks and Caicos right to your doorstep. From refreshing lagers to craft ales, our app connects you to the finest selections of beers. Experience convenience, variety, and the joy of local flavors—all with just a few taps!</p>
                </div>
                <div>
                  <a href="https://orderup-web.orderup.cc" class="primary-btn">Order Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="recommendation-box">
                <div>
                  <div class="recommendation-img">
                    <a href="#"><img src="{{asset('assets/img/img3.jpg')}}" alt=""></a>
                  </div>
                  <h3>Pizza from Local Restaurants</h3>
                  <p>Savor the Authentic Island Pizza! Dive into the delicious world of local pizzas with Order Up. Whether it's a classic Margherita or a tropical twist, our app brings you the best pizzas from Turks and Caicos's top restaurants. Enjoy mouth-watering flavors delivered fresh and hot to your location. Order now and taste the difference!</p>
                </div>
                <div>
                  <a href="https://orderup-web.orderup.cc" class="primary-btn">Order Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="recommendation-box">
                <div>
                  <div class="recommendation-img">
                    <a href="#"><img src="{{asset('assets/img/img2.jpg')}}" alt=""></a>
                  </div>
                  <h3>Wine and Champagne</h3>
                  <p>Elevate Your Evenings with Exquisite Wines and Champagne. Order Up offers an exclusive selection of premium wines and champagne from the best local stores in Turks and Caicos. Whether you're celebrating a special occasion or enjoying a quiet night in, our app ensures you have the perfect bottle at hand. Indulge in luxury at your convenience!</p>
                </div>
                <div>
                  <a href="https://orderup-web.orderup.cc" class="primary-btn">Order Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="recommendation-box">
                <div>
                  <div class="recommendation-img">
                    <a href="#"><img src="{{asset('assets/img/img5.jpg')}}" alt=""></a>
                  </div>
                  <h3>Conch Fritters from Local Beach Vendor</h3>
                  <p>Taste the Essence of the Beach with Conch Fritters! Experience Turks and Caicos's beloved beach snack through Order Up. Our app connects you with the finest local vendors serving authentic conch fritters. Fresh, flavorful, and just a click away—bring the taste of the islands to your home with ease.</p>
                </div>
                <div>
                  <a href="https://orderup-web.orderup.cc" class="primary-btn">Order Now</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- Recommendations Section-->



    <!-- Get App Section-->
    <section class="get-app-sec">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="get-app-img">
              <img src="{{asset('assets/img/iphone.png')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="get-app-content">
              <div class="section-title text-left">
                <h2>Tap, Order, Savor</h2>
                <p>Dive into a world of gastronomic delights with Order Up. Choose from a vast array of restaurants and stores - satisfaction is just an order away.</p>
              </div>

              <ul>
                <li>
                  <span class="number">01</span>
                  <div>
                    <span>Stay Updated Every Step of the Way</span>
                    <p>Keep track of your order with real-time updates. From preparation to delivery, we keep you informed.</p>
                  </div>
                </li>
                <li>
                  <span class="number">02</span>
                  <div>
                    <span>From Any Corner of the Island</span>
                    <p>No matter where you are in Turks and Caicos, Order Up connects you with local businesses ready to serve you.</p>
                  </div>
                </li>
                <li>
                  <span class="number">03</span>
                  <div>
                    <span>Never Miss Out</span>
                    <p>Be the first to know about new vendors, special promotions, and exclusive deals with Order Up's notifications.</p>
                  </div>
                </li>
              </ul>
              <div class="d-flex  get-app-btn">
                <a href="https://apps.apple.com/us/app/order-up-order-food-grocery/id1611004930" class="transform-effect"><img src="{{asset('assets/img/app-store.png')}}" alt=""></a>
                <a href="https://play.google.com/store/apps/details?id=com.customer.orderup&hl=en&gl=US" class="transform-effect"><img src="{{asset('assets/img/google-play.png')}}" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Get App Section-->


    <!-- Take Order Section-->
    <section class="take-order-sec">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="take-order-content section-title text-left mb-5 mb-lg-0">
              <h2>Relax, We've Got This</h2>
              <p>Place your order and sit back. We ensure your items are handled with care and delivered to you promptly.</p>
              <a href="https://orderup-web.orderup.cc" class="primary-btn transform-effect">Order Now</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="take-order-img">
              <img src="{{asset('assets/img/take-order.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Take Order Section-->



    <!-- Footer Section-->
    <section class="footer-sec">
      <div class="container">
        <div class="footer-top">
          <div class="row">
            <div class="col-lg-4">
              <div class="footer-logo">
                <img src="{{asset('assets/img/logo2.png')}}" alt="">
                <p>Order Up: Your go-to app for the best of Turks and Caicos. We deliver local delights, unique goods, groceries, pharmacy needs, and much more right to your doorstep!</p>

                <div class="footer-contact mb-4">
                  <span><span class="footer-icon"><i class="fas fa-map-marker"></i></span>
                  <a>Providenciales, Turks and Caicos Islands</a> </span>
                </div>
                <div class="footer-contact mb-4">
                  <span>
                    <span class="footer-icon"><i class="fas fa-phone-volume"></i></span>
                    <a href="tel:+6492462939"> (649)246-2939</a>
                  </span>
                </div>

              </div>
            </div>

            <div class="col-lg-2 col-sm-6">
              <div class="footer-link">
                <h2>Quick Link</h2>
                <ul>
                  <li><a href="https://orderup.cc/about-us">About Us</a></li>
                  <li><a href="https://orderup.cc/store/apply">Become A Partner</a></li>
                  <li><a href="https://orderup-web.orderup.cc">Order Now</a></li>
                  <li><a href="https://orderup.cc/contact-us">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="footer-link">
                <h2>Useful Link</h2>
                <ul>
                  <li><a href="https://orderup.cc/privacy-policy">Privacy Policy</a></li>
                  <li><a href="https://orderup.cc/terms-and-conditions">Terms & Conditions</a></li>
                  <li><a href="https://orderup.cc/refund">Refund Policy</a></li>
                  <li><a href="https://orderup.cc/cancelation">Cancelation Policy</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6">
              <div class="footer-link">
                <h2>Download The App</h2>
                <div class="download-link">
                  <a href="https://apps.apple.com/us/app/order-up-order-food-grocery/id1611004930"><span><i class="fab fa-apple"></i></span></a>
                  <a href="https://play.google.com/store/apps/details?id=com.customer.orderup&hl=en&gl=US"><span><i class="fab fa-google-play"></i></span></a>
                </div>

                <div class="footer-contact mb-5">
                  <span><span class="footer-icon"><i class="fas fa-clock"></i></span> <a>
                    Available 24 /7 to answer your queries</a> </span>
                </div>

                <img src="{{asset('assets/img/payment.png')}}" class="payment_img" alt="">
              </div>
            </div>

          </div>
        </div>
        <div class="footer-bottom text-center">
          <p class="copyright-text"> © Copyright  2024 | All Rights Reserved</p>
          <ul class="social-icon">
              <li><a href="https://www.facebook.com/Orderupturks" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://www.instagram.com/orderupturks/" target="_blank"><i class="fab fa-instagram"></i></a></li>
           </ul>
        </div>
      </div>
    </section>
    <!-- Footer Section-->


    <!-- back to top -->
    <a href="#" class="back-to-top"><i class="fal fa-angle-up"></i></a>

    <!-- all js here -->
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

  </body>
</html>
