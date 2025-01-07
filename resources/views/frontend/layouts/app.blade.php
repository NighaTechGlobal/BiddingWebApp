<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>getbid.in - Tender & Auction Portal</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{asset('/')}}/logo.png" rel="icon">
    <link href="{{asset('/')}}/logo.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('/frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/frontend')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('/frontend')}}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('/frontend')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('/frontend')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('/frontend')}}/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: FlexStart
    * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
    * Updated: Nov 01 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{asset('/')}}/logo.png" alt="">
            {{--            <h1 class="sitename"></h1>--}}
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home<br></a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#recent-posts">Tenders</a></li>
                <li><a href="#auction-posts">Auctions</a></li>
                {{--                <li><a href="#portfolio">Portfolio</a></li>--}}
                {{--                <li><a href="#team">Team</a></li>--}}
                {{--                <li><a href="blog.html">Blog</a></li>--}}
                {{--                <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>--}}
                {{--                    <ul>--}}
                {{--                        <li><a href="#">Dropdown 1</a></li>--}}
                {{--                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>--}}
                {{--                            <ul>--}}
                {{--                                <li><a href="#">Deep Dropdown 1</a></li>--}}
                {{--                                <li><a href="#">Deep Dropdown 2</a></li>--}}
                {{--                                <li><a href="#">Deep Dropdown 3</a></li>--}}
                {{--                                <li><a href="#">Deep Dropdown 4</a></li>--}}
                {{--                                <li><a href="#">Deep Dropdown 5</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li><a href="#">Dropdown 2</a></li>--}}
                {{--                        <li><a href="#">Dropdown 3</a></li>--}}
                {{--                        <li><a href="#">Dropdown 4</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--                <li class="listing-dropdown"><a href="#"><span>Listing Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>--}}
                {{--                    <ul>--}}
                {{--                        <li>--}}
                {{--                            <a href="#">Column 1 link 1</a>--}}
                {{--                            <a href="#">Column 1 link 2</a>--}}
                {{--                            <a href="#">Column 1 link 3</a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#">Column 2 link 1</a>--}}
                {{--                            <a href="#">Column 2 link 2</a>--}}
                {{--                            <a href="#">Column 3 link 3</a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#">Column 3 link 1</a>--}}
                {{--                            <a href="#">Column 3 link 2</a>--}}
                {{--                            <a href="#">Column 3 link 3</a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#">Column 4 link 1</a>--}}
                {{--                            <a href="#">Column 4 link 2</a>--}}
                {{--                            <a href="#">Column 4 link 3</a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#">Column 5 link 1</a>--}}
                {{--                            <a href="#">Column 5 link 2</a>--}}
                {{--                            <a href="#">Column 5 link 3</a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        @if(!empty(auth()->user()))
            <a class="btn-getstarted flex-md-shrink-0" href="{{route('home')}}">Dashboard</a>
        @else
            <a class="btn-getstarted flex-md-shrink-0" href="{{route('login')}}">Login</a>
        @endif

    </div>
</header>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Discover Exciting Opportunities: Bid, Win, and Own!</h1>
                    <p data-aos="fade-up" data-aos-delay="100">India’s Best Private Tender And Auction Plateform</p>
                    <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                        <a href="#about" class="btn-get-started">Get Started <i class="bi bi-arrow-right"></i></a>
                        <a
{{--                            href="https://www.youtube.com/watch?v=Y7f98aduVJ8"--}}
                            href="https://www.youtube.com/watch?v=VPCyY344Tks&pp=ygURYmlkZGluZyBpbiB0ZWx1Z3U%3D"
                           class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{asset('/frontend')}}/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Who We Are</h3>
                        <h2>Get Bid - Tenders & Auctions</h2>
                        <p>
                            Welcome to getbid, where buying and selling meet innovation. We bring you a platform to bid on your favorite items, discover rare finds, and connect with buyers and sellers across India. Trusted, secure, and efficient – we make auctions accessible to everyone.
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="#"
                               class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('/frontend')}}/assets/img/about.jpg" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section><!-- /About Section -->

    <!-- Values Section -->
{{--    <section id="values" class="values section">--}}

{{--        <!-- Section Title -->--}}
{{--        <div class="container section-title" data-aos="fade-up">--}}
{{--            <h2>Tenders</h2>--}}
{{--            <p>Top Tenders<br></p>--}}
{{--        </div><!-- End Section Title -->--}}

{{--        <div class="container">--}}

{{--            <div class="row gy-4">--}}

{{--                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <div class="card">--}}
{{--                        <img src="{{asset('/frontend')}}/assets/img/values-1.png" class="img-fluid" alt="">--}}
{{--                        <h3>Ad cupiditate sed est odio</h3>--}}
{{--                        <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>--}}
{{--                    </div>--}}
{{--                </div><!-- End Card Item -->--}}

{{--                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <div class="card">--}}
{{--                        <img src="{{asset('/frontend')}}/assets/img/values-2.png" class="img-fluid" alt="">--}}
{{--                        <h3>Voluptatem voluptatum alias</h3>--}}
{{--                        <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>--}}
{{--                    </div>--}}
{{--                </div><!-- End Card Item -->--}}

{{--                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">--}}
{{--                    <div class="card">--}}
{{--                        <img src="{{asset('/frontend')}}/assets/img/values-3.png" class="img-fluid" alt="">--}}
{{--                        <h3>Fugit cupiditate alias nobis.</h3>--}}
{{--                        <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>--}}
{{--                    </div>--}}
{{--                </div><!-- End Card Item -->--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </section>--}}
<!-- /Values Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p>Awards</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-journal-richtext color-orange flex-shrink-0" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p>Tenders</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-headset color-green flex-shrink-0" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p>Auctions</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-people color-pink flex-shrink-0" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p>User's</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Features</h2>
            <p>Our Advacedd Features<br></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

                <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{asset('/frontend')}}/assets/img/features.png" class="img-fluid" alt="">
                </div>

                <div class="col-xl-6 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Wide Range of Categories</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Real-Time Bidding</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Secure Payments</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Easy Listings</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        {{--                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">--}}
                        {{--                            <div class="feature-box d-flex align-items-center">--}}
                        {{--                                <i class="bi bi-check"></i>--}}
                        {{--                                <h3>Alias possimus</h3>--}}
                        {{--                            </div>--}}
                        {{--                        </div><!-- End Feature Item -->--}}

                        {{--                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">--}}
                        {{--                            <div class="feature-box d-flex align-items-center">--}}
                        {{--                                <i class="bi bi-check"></i>--}}
                        {{--                                <h3>Repellendus molli</h3>--}}
                        {{--                            </div>--}}
                        {{--                        </div><!-- End Feature Item -->--}}

                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Alt Features Section -->
    <section id="alt-features" class="alt-features section">

        <div class="container">

            <div class="row gy-5">

                <div class="col-xl-7 d-flex order-2 order-xl-1" data-aos="fade-up" data-aos-delay="200">

                    <div class="row align-self-center gy-5">

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-award"></i>
                            <div>
                                <h4>Wide Range of Categories</h4>
                                <p>From electronics to antiques, find it all.</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <div>
                                <h4>Real-Time Bidding</h4>
                                <p>Compete with others in live auctions.</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-dribbble"></i>
                            <div>
                                <h4>Secure Payments</h4>
                                <p>Guaranteed safe and reliable transactions.</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-filter-circle"></i>
                            <div>
                                <h4>Easy Listings</h4>
                                <p>Sell your items with just a few clicks.</p>
                            </div>
                        </div><!-- End Feature Item -->

                        {{--                        <div class="col-md-6 icon-box">--}}
                        {{--                            <i class="bi bi-lightning-charge"></i>--}}
                        {{--                            <div>--}}
                        {{--                                <h4>Molestiae dolor</h4>--}}
                        {{--                                <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>--}}
                        {{--                            </div>--}}
                        {{--                        </div><!-- End Feature Item -->--}}

                        {{--                        <div class="col-md-6 icon-box">--}}
                        {{--                            <i class="bi bi-patch-check"></i>--}}
                        {{--                            <div>--}}
                        {{--                                <h4>Explicabo consectetur</h4>--}}
                        {{--                                <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>--}}
                        {{--                            </div>--}}
                        {{--                        </div><!-- End Feature Item -->--}}

                    </div>

                </div>

                <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up"
                     data-aos-delay="100">
                    <img src="{{asset('/frontend')}}/assets/img/alt-features.png" class="img-fluid" alt="">
                </div>

            </div>

        </div>

    </section><!-- /Alt Features Section -->

    <!-- Services Section -->
{{--    <section id="services" class="services section">--}}

{{--        <!-- Section Title -->--}}
{{--        <div class="container section-title" data-aos="fade-up">--}}
{{--            <h2>Tenders</h2>--}}
{{--            <p>Top Tenders<br></p>--}}
{{--        </div><!-- End Section Title -->--}}

{{--        <div class="container">--}}

{{--            <div class="row gy-4">--}}

{{--                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <div class="service-item item-cyan position-relative">--}}
{{--                        <i class="bi bi-activity icon"></i>--}}
{{--                        <h3>Nesciunt Mete</h3>--}}
{{--                        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>--}}
{{--                        <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div><!-- End Service Item -->--}}

{{--                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <div class="service-item item-orange position-relative">--}}
{{--                        <i class="bi bi-broadcast icon"></i>--}}
{{--                        <h3>Eosle Commodi</h3>--}}
{{--                        <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>--}}
{{--                        <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div><!-- End Service Item -->--}}

{{--                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">--}}
{{--                    <div class="service-item item-teal position-relative">--}}
{{--                        <i class="bi bi-easel icon"></i>--}}
{{--                        <h3>Ledo Markt</h3>--}}
{{--                        <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>--}}
{{--                        <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div><!-- End Service Item -->--}}

{{--                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">--}}
{{--                    <div class="service-item item-red position-relative">--}}
{{--                        <i class="bi bi-bounding-box-circles icon"></i>--}}
{{--                        <h3>Asperiores Commodi</h3>--}}
{{--                        <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>--}}
{{--                        <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div><!-- End Service Item -->--}}

{{--                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">--}}
{{--                    <div class="service-item item-indigo position-relative">--}}
{{--                        <i class="bi bi-calendar4-week icon"></i>--}}
{{--                        <h3>Velit Doloremque.</h3>--}}
{{--                        <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>--}}
{{--                        <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div><!-- End Service Item -->--}}

{{--                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">--}}
{{--                    <div class="service-item item-pink position-relative">--}}
{{--                        <i class="bi bi-chat-square-text icon"></i>--}}
{{--                        <h3>Dolori Architecto</h3>--}}
{{--                        <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>--}}
{{--                        <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div><!-- End Service Item -->--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </section>--}}
<!-- /Services Section -->

    <!-- Pricing Section -->
{{--    <section id="pricing" class="pricing section">--}}

{{--        <!-- Section Title -->--}}
{{--        <div class="container section-title" data-aos="fade-up">--}}
{{--            <h2>Pricing</h2>--}}
{{--            <p>Check Our Affordable Pricing<br></p>--}}
{{--        </div><!-- End Section Title -->--}}

{{--        <div class="container">--}}

{{--            <div class="row gy-4">--}}

{{--                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">--}}
{{--                    <div class="pricing-tem">--}}
{{--                        <h3 style="color: #20c997;">Free Plan</h3>--}}
{{--                        <div class="price"><sup>$</sup>0<span> / mo</span></div>--}}
{{--                        <div class="icon">--}}
{{--                            <i class="bi bi-box" style="color: #20c997;"></i>--}}
{{--                        </div>--}}
{{--                        <ul>--}}
{{--                            <li>Aida dere</li>--}}
{{--                            <li>Nec feugiat nisl</li>--}}
{{--                            <li>Nulla at volutpat dola</li>--}}
{{--                            <li class="na">Pharetra massa</li>--}}
{{--                            <li class="na">Massa ultricies mi</li>--}}
{{--                        </ul>--}}
{{--                        <a href="#" class="btn-buy">Buy Now</a>--}}
{{--                    </div>--}}
{{--                </div><!-- End Pricing Item -->--}}

{{--                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">--}}
{{--                    <div class="pricing-tem">--}}
{{--                        <span class="featured">Featured</span>--}}
{{--                        <h3 style="color: #0dcaf0;">Starter Plan</h3>--}}
{{--                        <div class="price"><sup>$</sup>19<span> / mo</span></div>--}}
{{--                        <div class="icon">--}}
{{--                            <i class="bi bi-send" style="color: #0dcaf0;"></i>--}}
{{--                        </div>--}}
{{--                        <ul>--}}
{{--                            <li>Aida dere</li>--}}
{{--                            <li>Nec feugiat nisl</li>--}}
{{--                            <li>Nulla at volutpat dola</li>--}}
{{--                            <li>Pharetra massa</li>--}}
{{--                            <li class="na">Massa ultricies mi</li>--}}
{{--                        </ul>--}}
{{--                        <a href="#" class="btn-buy">Buy Now</a>--}}
{{--                    </div>--}}
{{--                </div><!-- End Pricing Item -->--}}

{{--                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">--}}
{{--                    <div class="pricing-tem">--}}
{{--                        <h3 style="color: #fd7e14;">Business Plan</h3>--}}
{{--                        <div class="price"><sup>$</sup>29<span> / mo</span></div>--}}
{{--                        <div class="icon">--}}
{{--                            <i class="bi bi-airplane" style="color: #fd7e14;"></i>--}}
{{--                        </div>--}}
{{--                        <ul>--}}
{{--                            <li>Aida dere</li>--}}
{{--                            <li>Nec feugiat nisl</li>--}}
{{--                            <li>Nulla at volutpat dola</li>--}}
{{--                            <li>Pharetra massa</li>--}}
{{--                            <li>Massa ultricies mi</li>--}}
{{--                        </ul>--}}
{{--                        <a href="#" class="btn-buy">Buy Now</a>--}}
{{--                    </div>--}}
{{--                </div><!-- End Pricing Item -->--}}

{{--                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">--}}
{{--                    <div class="pricing-tem">--}}
{{--                        <h3 style="color: #0d6efd;">Ultimate Plan</h3>--}}
{{--                        <div class="price"><sup>$</sup>49<span> / mo</span></div>--}}
{{--                        <div class="icon">--}}
{{--                            <i class="bi bi-rocket" style="color: #0d6efd;"></i>--}}
{{--                        </div>--}}
{{--                        <ul>--}}
{{--                            <li>Aida dere</li>--}}
{{--                            <li>Nec feugiat nisl</li>--}}
{{--                            <li>Nulla at volutpat dola</li>--}}
{{--                            <li>Pharetra massa</li>--}}
{{--                            <li>Massa ultricies mi</li>--}}
{{--                        </ul>--}}
{{--                        <a href="#" class="btn-buy">Buy Now</a>--}}
{{--                    </div>--}}
{{--                </div><!-- End Pricing Item -->--}}

{{--            </div><!-- End pricing row -->--}}

{{--        </div>--}}

{{--    </section>--}}
<!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <div class="faq-container">
                        {{--faq-active--}}
                        <div class="faq-item ">
                            <h3>How do I participate in an auction?</h3>
                            <div class="faq-content">
                                <p>Simply sign up, browse the auctions, and place your bid.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->


                        <div class="faq-item">
                            <h3>What happens if I win an auction?</h3>
                            <div class="faq-content">
                                <p>You’ll receive a notification with steps to complete the payment and claim your
                                    item.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div><!-- End Faq Column-->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

                    <div class="faq-container">
                        <div class="faq-item">
                            <h3>Is it safe to make payments?</h3>
                            <div class="faq-content">
                                <p>Yes, all transactions are secured with advanced encryption.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                        <div class="faq-item">
                            <h3>How do I win an auction?</h3>
                            <div class="faq-content">
                                <p>You win the auction by having the highest bid when the auction ends. The auction
                                    countdown timer will indicate when the auction closes. If your bid is the highest at
                                    that time, you’ll be declared the winner.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        {{--                        <div class="faq-item">--}}
                        {{--                            <h3>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h3>--}}
                        {{--                            <div class="faq-content">--}}
                        {{--                                <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>--}}
                        {{--                            </div>--}}
                        {{--                            <i class="faq-toggle bi bi-chevron-right"></i>--}}
                        {{--                        </div><!-- End Faq item-->--}}

                        {{--                        <div class="faq-item">--}}
                        {{--                            <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>--}}
                        {{--                            <div class="faq-content">--}}
                        {{--                                <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>--}}
                        {{--                            </div>--}}
                        {{--                            <i class="faq-toggle bi bi-chevron-right"></i>--}}
                        {{--                        </div><!-- End Faq item-->--}}

                    </div>

                </div><!-- End Faq Column-->

            </div>

        </div>

    </section>


    <!-- /Faq Section -->

    <!-- Portfolio Section -->
{{--    <section id="portfolio" class="portfolio section">--}}

{{--        <!-- Section Title -->--}}
{{--        <div class="container section-title" data-aos="fade-up">--}}
{{--            <h2>Portfolio</h2>--}}
{{--            <p>Check our latest work</p>--}}
{{--        </div><!-- End Section Title -->--}}

{{--        <div class="container">--}}

{{--            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">--}}

{{--                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <li data-filter="*" class="filter-active">All</li>--}}
{{--                    <li data-filter=".filter-app">App</li>--}}
{{--                    <li data-filter=".filter-product">Product</li>--}}
{{--                    <li data-filter=".filter-branding">Branding</li>--}}
{{--                    <li data-filter=".filter-books">Books</li>--}}
{{--                </ul><!-- End Portfolio Filters -->--}}

{{--                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">--}}

{{--                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">--}}
{{--                        <div class="portfolio-content h-100">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>App 1</h4>--}}
{{--                                <p>Lorem ipsum, dolor sit amet consectetur</p>--}}
{{--                                <a href="{{asset('/frontend')}}/assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Portfolio Item -->--}}

{{--                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">--}}
{{--                        <div class="portfolio-content h-100">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>Product 1</h4>--}}
{{--                                <p>Lorem ipsum, dolor sit amet consectetur</p>--}}
{{--                                <a href="{{asset('/frontend')}}/assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Portfolio Item -->--}}

{{--                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">--}}
{{--                        <div class="portfolio-content h-100">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>Branding 1</h4>--}}
{{--                                <p>Lorem ipsum, dolor sit amet consectetur</p>--}}
{{--                                <a href="{{asset('/frontend')}}/assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Portfolio Item -->--}}

{{--                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">--}}
{{--                        <div class="portfolio-content h-100">--}}
{{--                            <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>Books 1</h4>--}}
{{--                                <p>Lorem ipsum, dolor sit amet consectetur</p>--}}
{{--                                <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Portfolio Item -->--}}

{{--                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">--}}
{{--                        <div class="portfolio-content h-100">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>App 2</h4>--}}
{{--                                <p>Lorem ipsum, dolor sit amet consectetur</p>--}}
{{--                                <a href="{{asset('/frontend')}}/assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Portfolio Item -->--}}

{{--                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">--}}
{{--                        <div class="portfolio-content h-100">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>Product 2</h4>--}}
{{--                                <p>Lorem ipsum, dolor sit amet consectetur</p>--}}
{{--                                <a href="{{asset('/frontend')}}/assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Portfolio Item -->--}}

{{--                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">--}}
{{--                        <div class="portfolio-content h-100">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>Branding 2</h4>--}}
{{--                                <p>Lorem ipsum, dolor sit amet consectetur</p>--}}
{{--                                <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Portfolio Item -->--}}

{{--                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">--}}
{{--                        <div class="portfolio-content h-100">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>Books 2</h4>--}}
{{--                                <p>Lorem ipsum, dolor sit amet consectetur</p>--}}
{{--                                <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Portfolio Item -->--}}

{{--                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">--}}
{{--                        <div class="portfolio-content h-100">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>App 3</h4>--}}
{{--                                <p>Lorem ipsum, dolor sit amet consectetur</p>--}}
{{--                                <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Portfolio Item -->--}}

{{--                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">--}}
{{--                        <div class="portfolio-content h-100">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>Product 3</h4>--}}
{{--                                <p>Lorem ipsum, dolor sit amet consectetur</p>--}}
{{--                                <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Portfolio Item -->--}}

{{--                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">--}}
{{--                        <div class="portfolio-content h-100">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>Branding 3</h4>--}}
{{--                                <p>Lorem ipsum, dolor sit amet consectetur</p>--}}
{{--                                <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Portfolio Item -->--}}

{{--                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">--}}
{{--                        <div class="portfolio-content h-100">--}}
{{--                            <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>Books 3</h4>--}}
{{--                                <p>Lorem ipsum, dolor sit amet consectetur</p>--}}
{{--                                <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Portfolio Item -->--}}

{{--                </div><!-- End Portfolio Container -->--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </section>--}}

<!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>What they are saying about us<br></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }



                </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                I never imagined finding such unique items at amazing prices. Highly recommended!
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('/frontend')}}/assets/img/testimonials/testimonials-1.jpg"
                                     class="testimonial-img" alt="">
                                <h3>User</h3>
                                {{--                                <h4>Ceo &amp; Founder</h4>--}}
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                The platform is easy to use, and the support team is fantastic!
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('/frontend')}}/assets/img/testimonials/testimonials-2.jpg"
                                     class="testimonial-img" alt="">
                                <h3>Seller</h3>
                                {{--                                <h4>Designer</h4>--}}
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                User-friendly platform with outstanding customer support!
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{asset('/frontend')}}/assets/img/testimonials/testimonials-3.jpg"
                                     class="testimonial-img" alt="">
                                <h3>User</h3>
                                {{--                                <h4>Store Owner</h4>--}}
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    {{--                    <div class="swiper-slide">--}}
                    {{--                        <div class="testimonial-item">--}}
                    {{--                            <div class="stars">--}}
                    {{--                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i--}}
                    {{--                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i--}}
                    {{--                                    class="bi bi-star-fill"></i>--}}
                    {{--                            </div>--}}
                    {{--                            <p>--}}
                    {{--                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat--}}
                    {{--                                minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore--}}
                    {{--                                labore illum veniam.--}}
                    {{--                            </p>--}}
                    {{--                            <div class="profile mt-auto">--}}
                    {{--                                <img src="{{asset('/frontend')}}/assets/img/testimonials/testimonials-4.jpg"--}}
                    {{--                                     class="testimonial-img" alt="">--}}
                    {{--                                <h3>Matt Brandon</h3>--}}
                    {{--                                <h4>Freelancer</h4>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div><!-- End testimonial item -->--}}

                    {{--                    <div class="swiper-slide">--}}
                    {{--                        <div class="testimonial-item">--}}
                    {{--                            <div class="stars">--}}
                    {{--                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i--}}
                    {{--                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i--}}
                    {{--                                    class="bi bi-star-fill"></i>--}}
                    {{--                            </div>--}}
                    {{--                            <p>--}}
                    {{--                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster--}}
                    {{--                                veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam--}}
                    {{--                                culpa fore nisi cillum quid.--}}
                    {{--                            </p>--}}
                    {{--                            <div class="profile mt-auto">--}}
                    {{--                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">--}}
                    {{--                                <h3>John Larson</h3>--}}
                    {{--                                <h4>Entrepreneur</h4>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div><!-- End testimonial item -->--}}

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Team Section -->
{{--    <section id="team" class="team section">--}}

{{--        <!-- Section Title -->--}}
{{--        <div class="container section-title" data-aos="fade-up">--}}
{{--            <h2>Team</h2>--}}
{{--            <p>Our hard working team</p>--}}
{{--        </div><!-- End Section Title -->--}}

{{--        <div class="container">--}}

{{--            <div class="row gy-4">--}}

{{--                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <div class="team-member">--}}
{{--                        <div class="member-img">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/team/team-1.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="bi bi-twitter-x"></i></a>--}}
{{--                                <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                <a href=""><i class="bi bi-linkedin"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="member-info">--}}
{{--                            <h4>Walter White</h4>--}}
{{--                            <span>Chief Executive Officer</span>--}}
{{--                            <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- End Team Member -->--}}

{{--                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <div class="team-member">--}}
{{--                        <div class="member-img">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/team/team-2.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="bi bi-twitter-x"></i></a>--}}
{{--                                <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                <a href=""><i class="bi bi-linkedin"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="member-info">--}}
{{--                            <h4>Sarah Jhonson</h4>--}}
{{--                            <span>Product Manager</span>--}}
{{--                            <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- End Team Member -->--}}

{{--                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">--}}
{{--                    <div class="team-member">--}}
{{--                        <div class="member-img">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/team/team-3.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="bi bi-twitter-x"></i></a>--}}
{{--                                <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                <a href=""><i class="bi bi-linkedin"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="member-info">--}}
{{--                            <h4>William Anderson</h4>--}}
{{--                            <span>CTO</span>--}}
{{--                            <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- End Team Member -->--}}

{{--                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">--}}
{{--                    <div class="team-member">--}}
{{--                        <div class="member-img">--}}
{{--                            <img src="{{asset('/frontend')}}/assets/img/team/team-4.jpg" class="img-fluid" alt="">--}}
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="bi bi-twitter-x"></i></a>--}}
{{--                                <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                <a href=""><i class="bi bi-linkedin"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="member-info">--}}
{{--                            <h4>Amanda Jepson</h4>--}}
{{--                            <span>Accountant</span>--}}
{{--                            <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- End Team Member -->--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </section>--}}
<!-- /Team Section -->

    <!-- Clients Section -->
{{--    <section id="clients" class="clients section">--}}

{{--        <!-- Section Title -->--}}
{{--        <div class="container section-title" data-aos="fade-up">--}}
{{--            <h2>Clients</h2>--}}
{{--            <p>We work with best clients<br></p>--}}
{{--        </div><!-- End Section Title -->--}}

{{--        <div class="container" data-aos="fade-up" data-aos-delay="100">--}}

{{--            <div class="swiper init-swiper">--}}
{{--                <script type="application/json" class="swiper-config">--}}
{{--            {--}}
{{--              "loop": true,--}}
{{--              "speed": 600,--}}
{{--              "autoplay": {--}}
{{--                "delay": 5000--}}
{{--              },--}}
{{--              "slidesPerView": "auto",--}}
{{--              "pagination": {--}}
{{--                "el": ".swiper-pagination",--}}
{{--                "type": "bullets",--}}
{{--                "clickable": true--}}
{{--              },--}}
{{--              "breakpoints": {--}}
{{--                "320": {--}}
{{--                  "slidesPerView": 2,--}}
{{--                  "spaceBetween": 40--}}
{{--                },--}}
{{--                "480": {--}}
{{--                  "slidesPerView": 3,--}}
{{--                  "spaceBetween": 60--}}
{{--                },--}}
{{--                "640": {--}}
{{--                  "slidesPerView": 4,--}}
{{--                  "spaceBetween": 80--}}
{{--                },--}}
{{--                "992": {--}}
{{--                  "slidesPerView": 6,--}}
{{--                  "spaceBetween": 120--}}
{{--                }--}}
{{--              }--}}
{{--            }--}}
{{--          </script>--}}
{{--                <div class="swiper-wrapper align-items-center">--}}
{{--                    <div class="swiper-slide"><img src="{{asset('/frontend')}}/assets/img/clients/client-1.png" class="img-fluid" alt=""></div>--}}
{{--                    <div class="swiper-slide"><img src="{{asset('/frontend')}}/assets/img/clients/client-2.png" class="img-fluid" alt=""></div>--}}
{{--                    <div class="swiper-slide"><img src="{{asset('/frontend')}}/assets/img/clients/client-3.png" class="img-fluid" alt=""></div>--}}
{{--                    <div class="swiper-slide"><img src="{{asset('/frontend')}}/assets/img/clients/client-4.png" class="img-fluid" alt=""></div>--}}
{{--                    <div class="swiper-slide"><img src="{{asset('/frontend')}}/assets/img/clients/client-5.png" class="img-fluid" alt=""></div>--}}
{{--                    <div class="swiper-slide"><img src="{{asset('/frontend')}}/assets/img/clients/client-6.png" class="img-fluid" alt=""></div>--}}
{{--                    <div class="swiper-slide"><img src="{{asset('/frontend')}}/assets/img/clients/client-7.png" class="img-fluid" alt=""></div>--}}
{{--                    <div class="swiper-slide"><img src="{{asset('/frontend')}}/assets/img/clients/client-8.png" class="img-fluid" alt=""></div>--}}
{{--                </div>--}}
{{--                <div class="swiper-pagination"></div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </section>--}}
<!-- /Clients Section -->

    <!-- Recent Posts Section -->

    <section id="recent-posts" class="recent-posts section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Tenders</h2>
            <p>Top Tenders<br></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

                @if(!empty($tenders))
                    @foreach($tenders as $tender_value)
                        <div class="col-xl-4 col-md-6">
                            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                                <div class="post-img position-relative overflow-hidden">
{{--                                    <img src="{{asset('/frontend')}}/assets/img/blog/blog-1.jpg" class="img-fluid"--}}
                                    <img src="{{ asset('storage/' . $tender_value->work_photos) }}" class="img-fluid"
                                         alt="">
                                    <span class="post-date">{{$tender_value->category}}</span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">{{$tender_value->title}}</h3>

                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            {{--                                            <i class="bi bi-person"></i>--}}

                                            <span
                                                class="ps-2"> End Date : {{date('d M Y',strtotime($tender_value->end_date))}}</span>
                                        </div>
                                        {{--                                        <span class="px-3 text-black-50">/</span>--}}
                                        <div class="d-flex align-items-center">
                                            {{--                                            <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>--}}
                                        </div>
                                    </div>

                                    <hr>

                                    <a href="#" class="readmore stretched-link"><span>Read More</span><i
                                            class="bi bi-arrow-right"></i></a>

                                </div>

                            </div>
                        </div>
                    @endforeach
                <!-- End post item -->
                @else
                    <div class="col-xl-12 col-md-12">
                        <div class="d-flex align-items-center"><span class="text-center">No Tenders</span></div>
                    </div>
                @endif
                {{--                <div class="col-xl-4 col-md-6">--}}
                {{--                    <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">--}}

                {{--                        <div class="post-img position-relative overflow-hidden">--}}
                {{--                            <img src="{{asset('/frontend')}}/assets/img/blog/blog-2.jpg" class="img-fluid" alt="">--}}
                {{--                            <span class="post-date">July 17</span>--}}
                {{--                        </div>--}}

                {{--                        <div class="post-content d-flex flex-column">--}}

                {{--                            <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>--}}

                {{--                            <div class="meta d-flex align-items-center">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>--}}
                {{--                                </div>--}}
                {{--                                <span class="px-3 text-black-50">/</span>--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}

                {{--                            <hr>--}}

                {{--                            <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>--}}

                {{--                        </div>--}}

                {{--                    </div>--}}
                {{--                </div><!-- End post item -->--}}

                {{--                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">--}}
                {{--                    <div class="post-item position-relative h-100">--}}

                {{--                        <div class="post-img position-relative overflow-hidden">--}}
                {{--                            <img src="{{asset('/frontend')}}/assets/img/blog/blog-3.jpg" class="img-fluid" alt="">--}}
                {{--                            <span class="post-date">September 05</span>--}}
                {{--                        </div>--}}

                {{--                        <div class="post-content d-flex flex-column">--}}

                {{--                            <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>--}}

                {{--                            <div class="meta d-flex align-items-center">--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>--}}
                {{--                                </div>--}}
                {{--                                <span class="px-3 text-black-50">/</span>--}}
                {{--                                <div class="d-flex align-items-center">--}}
                {{--                                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}

                {{--                            <hr>--}}

                {{--                            <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>--}}

                {{--                        </div>--}}

                {{--                    </div>--}}
                {{--                </div><!-- End post item -->--}}

            </div>

        </div>

    </section>

    <!-- /Recent Posts Section -->

    <!-- Auction Section -->

    <section id="auction-posts" class="recent-posts section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Auctions</h2>
            <p>Top Auctions<br></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

                <div class="col-xl-4 col-md-6">
                    <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="{{asset('/frontend')}}/assets/img/blog/home3.jpg" class="img-fluid" alt="">
                            <span class="post-date">Residential Homes</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Fully renovated or fixer-uppers, available for immediate purchase or renovation projects.</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
{{--                                    <i class="bi bi-person"></i> --}}
                                    <span class="ps-2"> Jan 12</span>
                                </div>
                                <span class="px-3 text-black-50"></span>
                                <div class="d-flex align-items-center">
{{--                                    <i class="bi bi-folder2"></i>--}}
{{--                                    <span class="ps-2">Politics</span>--}}
                                </div>
                            </div>

                            <hr>

                            <a href="#" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->

                <div class="col-xl-4 col-md-6">
                    <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="{{asset('/frontend')}}/assets/img/blog/home1.jpg" class="img-fluid" alt="">
                            <span class="post-date">Commercial Properties</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Prime office spaces, retail units, and mixed-use properties located in high-demand areas.</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
{{--                                    <i class="bi bi-person"></i>--}}
                                    <span class="ps-2">Jan 22</span>
                                </div>
                                <span class="px-3 text-black-50"></span>
                                <div class="d-flex align-items-center">
{{--                                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>--}}
                                </div>
                            </div>

                            <hr>

                            <a href="#" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="post-item position-relative h-100">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="{{asset('/frontend')}}/assets/img/blog/home2.jpg" class="img-fluid" alt="">
                            <span class="post-date">Renovation Materials</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Flooring, drywall, paint, and other essentials for your next remodeling job.</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
{{--                                    <i class="bi bi-person"></i> --}}
                                    <span class="ps-2">Feb 05</span>
                                </div>
                                <span class="px-3 text-black-50"></span>
                                <div class="d-flex align-items-center">
{{--                                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>--}}
                                </div>
                            </div>

                            <hr>

                            <a href="#" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->

            </div>

        </div>

    </section>

    <!-- /Auction  Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>Vishakapatnam,</p>
                                <p>Andhra Pradesh, India</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+91 8297808410</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>support@getbid.in</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            {{--                            <div class="info-item" data-aos="fade" data-aos-delay="500">--}}
                            {{--                                <i class="bi bi-clock"></i>--}}
                            {{--                                <h3>Open Hours</h3>--}}
                            {{--                                <p>Monday - Friday</p>--}}
                            {{--                                <p>9:00AM - 05:00PM</p>--}}
                            {{--                            </div>--}}
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="#" method="post" class="php-email-form" data-aos="fade-up"
                          data-aos-delay="200">
                        {{--                        forms/contact.php--}}
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                       required="">
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                       required="">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                          required=""></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

</main>

<footer id="footer" class="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                                                                             value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="d-flex align-items-center">
                    <span class="sitename"><img src="{{asset('logo.png')}}"></span>
                </a>
                <div class="footer-contact pt-3">
                    <p>Vishakapatnam, </p>
                    <p>Andhra Pradesh, India</p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+91 8297808410</span></p>
                    <p><strong>Email:</strong> <span>support@getbid.in</span></p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>

                    <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Our Services</h4>
                <ul>
                    {{--                    <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>--}}
                    {{--                    <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>--}}
                    {{--                    <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>--}}
                    {{--                    <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>--}}
                    <li><i class="bi bi-chevron-right"></i> <a href="#recent-posts">Tenders</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#recent-posts">Auctions</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h4>Follow Us</h4>
                <p>Stay Connected with Us</p>
                <div class="social-links d-flex">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">getbid.in</strong> <span>All Rights Reserved</span>
        </p>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            {{--            Designed by <a href="#"></a> Distributed by <a href=“https://themewagon.com></a>--}}
        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('/frontend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/frontend')}}/assets/vendor/php-email-form/validate.js"></script>
<script src="{{asset('/frontend')}}/assets/vendor/aos/aos.js"></script>
<script src="{{asset('/frontend')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('/frontend')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{asset('/frontend')}}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('/frontend')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('/frontend')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="{{asset('/frontend')}}/assets/js/main.js"></script>

</body>

</html>
