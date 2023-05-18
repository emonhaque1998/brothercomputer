@extends("layouts.home-layout")
@section("home-content")
<!-- Add your site or application content here -->
<!-- header begin -->
<header>
    <!-- menu-area -->
    <div class="top-bar-white top-bar-3 pt-20 pb-20">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="logo logo-3 pos-rel">
                        <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-8 d-none d-lg-block">
                    <div class="header-right-btn f-right">
                        <a href="appoinment.html" class="bt-btn">Get A Quote</a>
                    </div>
                    <div class="header-cta-info header-cta-info-3 cta-info-address">
                        <div class="header-cta-icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <div class="header-cta-text">
                            <h5>58 Howard Street New</h5>
                            <span class="primary-color">San Francisco</span>
                        </div>
                    </div>
                    <div class="header-cta-info header-cta-info-3 cta-info-mail">
                        <div class="header-cta-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="header-cta-text">
                            <h5>+876 7764 332Info</h5>
                            <span class="primary-color">info@example.com </span>
                        </div>
                    </div>
                    <div class="header-cta-info header-cta-info-3 cta-info-phone">
                        <div class="header-cta-icon">
                            <i class="fa fa-comment-alt-lines"></i>
                        </div>
                        <div class="header-cta-text">
                            <h5>Online 24/7</h5>
                            <span class="primary-color">+444 32152</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-area header-menu-blue theme-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="header__menu menu-dark">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="menu-item"><a href="index.html">Home</a></li>
                                <li class="menu-item-has-children"><a href="services.html">Services</a>
                                    <ul class="submenu">
                                        <li><a href="services.html">Services 01</a></li>
                                        <li><a href="services-2.html">Services 02</a></li>
                                        <li><a href="services-details.html">Services Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="team.html">Team</a>
                                    <ul class="submenu">
                                        <li><a href="team.html">Team Style 01</a></li>
                                        <li><a href="team-2.html">Team Style 02</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                    <ul class="submenu">
                                        <li><a href="shop.html">Shop Page</a></li>
                                        <li><a href="product-details.html">Shop Details</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                        <li><a href="blog-2-col.html">Blog 2 Column</a></li>
                                        <li><a href="blog-2-col-mas.html">Blog 2 Col Masonry</a></li>
                                        <li><a href="blog-3-col.html">Blog 3 Column</a></li>
                                        <li><a href="blog-3-col-mas.html">Blog 3 Col Masonry</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="blog-details-left-sidebar.html">Details Left Sidebar</a></li>
                                        <li><a href="blog-details-audio.html">Details Audio</a></li>
                                        <li><a href="blog-details-video.html">Details Video</a></li>
                                        <li><a href="blog-details-gallery.html">Details Gallery</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="appoinment.html">Appoinment</a></li>
                                        <li><a href="portfolio-2-col.html">Portfolio 2 column</a></li>
                                        <li><a href="portfolio.html">Portfolio 3 column</a></li>
                                        <li><a href="portfolio-slider.html">Portfolio Slider</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="header-right f-right mt-0">
                        <div class="header-social-icons f-right d-none d-lg-block p-0">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="header-menu-search">
                                    <a class="nav-search search-trigger" href="#"><i class="fas fa-search"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu mobile-menu-blue"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

<main>
    <!-- hero-area start -->
    <section class="hero-area">
        <div class="hero-slider">
            <div class="slider-fix">
                <div class="single-slider slider-height slider-height-3 d-flex align-items-center" data-background="img/slider/80763.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9">
                                <div class="hero-text hero-text-box">
                                    <div class="hero-slider-caption ">
                                        <h5 data-animation="fadeInUp" data-delay=".2s">We are here for your care.</h5>
                                        <h1 data-animation="fadeInUp" data-delay=".4s">Better Business & Best Idea.</h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum  dolor sit amet,
                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolo.</p>
                                    </div>
                                    <div class="hero-slider-btn">
                                        <a data-animation="fadeInLeft" data-delay=".6s" href="appoinment.html"
                                           class="bt-btn">Make Appointment</a>
                                        <a data-animation="fadeInRight" data-delay="1.0s"
                                           href="https://www.youtube.com/watch?v=eXQgPCsd83c"
                                           class="play-btn popup-video"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero-area end -->
    <!-- about-area start -->
    <section class="about-area pt-115 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-couter counter-box counter-box-white text-center mb-30">
                        <i class="fal fa-user"></i>
                        <h1><span class="counter">850</span>+</h1>
                        <h6 class="c-sub-title pb-20">Expert Member</h6>
                        <div class="counter-text mt-10">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-couter counter-box counter-box-white text-center mb-30">
                        <i class="fal fa-map-marked-alt"></i>
                        <h1><span class="counter">899</span>+</h1>
                        <h6 class="c-sub-title pb-20">Project Done</h6>
                        <span class="counter-shpae"></span>
                        <div class="counter-text mt-10">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-couter counter-box counter-box-white text-center mb-30">
                        <i class="fal fa-trophy-alt"></i>
                        <h1><span class="counter">230</span>+</h1>
                        <h6 class="c-sub-title pb-20">Award Winner</h6>
                        <span class="counter-shpae"></span>
                        <div class="counter-text mt-10">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area end -->
    <!-- services-area start -->
    <section class="servcies-area gray-bg pt-115 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title pos-rel mb-75 text-center">
                        <div class="section-text pos-rel">
                            <h5>Services</h5>
                            <h1>Our Services<span>.</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row service-active">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-box-3 mb-30 text-center">
                        <div class="service-thumb">
                            <a href="services-details.html"><img src="img/services/service-thumb-1.jpg" alt=""></a>
                        </div>
                        <div class="service-content-box">
                            <div class="service-content">
                                <h3><a href="services-details.html">Business Plan</a></h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            </div>
                            <a href="services-details.html" class="service-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-box-3 mb-30 text-center">
                        <div class="service-thumb">
                            <a href="services-details.html"><img src="img/services/service-thumb-2.jpg" alt=""></a>
                        </div>
                        <div class="service-content-box">
                            <div class="service-content">
                                <h3><a href="services-details.html">Free Markets</a></h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            </div>
                            <a href="services-details.html" class="service-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-box-3 mb-30 text-center">
                        <div class="service-thumb">
                            <a href="services-details.html"><img src="img/services/service-thumb-3.jpg" alt=""></a>
                        </div>
                        <div class="service-content-box">
                            <div class="service-content">
                                <h3><a href="services-details.html">Technology Advising</a></h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            </div>
                            <a href="services-details.html" class="service-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-box-3 mb-30 text-center">
                        <div class="service-thumb">
                            <a href="services-details.html"><img src="img/services/service-thumb-4.jpg" alt=""></a>
                        </div>
                        <div class="service-content-box">
                            <div class="service-content">
                                <h3><a href="services-details.html">Business Forecast</a></h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            </div>
                            <a href="services-details.html" class="service-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-box-3 mb-30 text-center">
                        <div class="service-thumb">
                            <a href="services-details.html"><img src="img/services/service-thumb-5.jpg" alt=""></a>
                        </div>
                        <div class="service-content-box">
                            <div class="service-content">
                                <h3><a href="services-details.html">Business Strategy</a></h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            </div>
                            <a href="services-details.html" class="service-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-box-3 mb-30 text-center">
                        <div class="service-thumb">
                            <a href="services-details.html"><img src="img/services/service-thumb-6.jpg" alt=""></a>
                        </div>
                        <div class="service-content-box">
                            <div class="service-content">
                                <h3><a href="services-details.html">Technology Advising</a></h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            </div>
                            <a href="services-details.html" class="service-link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area end -->
    <!-- team-area start -->
    <section class="team-area pt-115 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center pos-rel mb-70">
                        <div class="section-text pos-rel">
                            <h5>Our Team</h5>
                            <h1>Team Member<span>.</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team-wrapper team-box-2 text-center mb-30">
                        <div class="team-thumb">
                            <img src="img/team/team-member-1.jpg" alt="">
                            <div class="team-social-profile">
                                <ul>
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-behance"></i></a></li>
                                    <li><a href=""><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-member-info mt-35 mb-25">
                            <h3><a href="team-details.html">Philimia D. Darwin</a></h3>
                            <h6 class="f-500 text-up-case letter-spacing pink-color">Designer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team-wrapper team-box-2 text-center mb-30">
                        <div class="team-thumb">
                            <img src="img/team/team-member-2.jpg" alt="">
                            <div class="team-social-profile">
                                <ul>
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-behance"></i></a></li>
                                    <li><a href=""><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-member-info mt-35 mb-25">
                            <h3><a href="team-details.html">Hekim D. Rswana</a></h3>
                            <h6 class="f-500 text-up-case letter-spacing pink-color">Developer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team-wrapper team-box-2 text-center mb-30">
                        <div class="team-thumb">
                            <img src="img/team/team-member-3.jpg" alt="">
                            <div class="team-social-profile">
                                <ul>
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-behance"></i></a></li>
                                    <li><a href=""><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-member-info mt-35 mb-25">
                            <h3><a href="team-details.html">Tarana Halim</a></h3>
                            <h6 class="f-500 text-up-case letter-spacing pink-color">Marketing</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team-wrapper team-box-2 text-center mb-30">
                        <div class="team-thumb">
                            <img src="img/team/team-member-4.jpg" alt="">
                            <div class="team-social-profile">
                                <ul>
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-behance"></i></a></li>
                                    <li><a href=""><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-member-info mt-35 mb-25">
                            <h3><a href="team-details.html">Limonda Pwedie</a></h3>
                            <h6 class="f-500 text-up-case letter-spacing pink-color">Developer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team-wrapper team-box-2 text-center mb-30">
                        <div class="team-thumb">
                            <img src="img/team/team-member-5.jpg" alt="">
                            <div class="team-social-profile">
                                <ul>
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-behance"></i></a></li>
                                    <li><a href=""><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-member-info mt-35 mb-25">
                            <h3><a href="team-details.html">Kelian M. Habblu</a></h3>
                            <h6 class="f-500 text-up-case letter-spacing pink-color">Seo Expert</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team-wrapper team-box-2 text-center mb-30">
                        <div class="team-thumb">
                            <img src="img/team/team-member-6.jpg" alt="">
                            <div class="team-social-profile">
                                <ul>
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-behance"></i></a></li>
                                    <li><a href=""><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-member-info mt-35 mb-25">
                            <h3><a href="team-details.html">Romada G. WIlliam</a></h3>
                            <h6 class="f-500 text-up-case letter-spacing pink-color">Designer</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area end -->
    <!-- membership-area start -->
    <section class="review-area membership-review member-ship-map gray-bg pos-rel pt-120 pb-120 pos-rel" data-background="img/membership/map.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center pos-rel mb-70">
                        <div class="section-text pos-rel">
                            <h5>Review</h5>
                            <h1>Clients Say<span>.</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="test-active owl-carousel">
                <div class="item">
                    <div class="review-box">
                        <div class="members-rating">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="members-text">
                            <p>Lorem ipsum dolor sit amet, coning
                                ctetur adipisicing elit, sed do it on
                                eiusmod tempor incididunt me
                                ut labore et dolore.</p>
                        </div>
                        <div class="about-author d-flex align-items-center">
                            <div class="author-ava">
                                <img src="img/membership/members-icon-2.png" alt="">
                            </div>
                            <div class="author-desination author-desination-2">
                                <h4>Mr. Halim Dawn</h4>
                                <h6>Founder, TrashTheme</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="review-box">
                        <div class="members-rating">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="members-text">
                            <p>Lorem ipsum dolor sit amet, coning
                                ctetur adipisicing elit, sed do it on
                                eiusmod tempor incididunt me
                                ut labore et dolore.</p>
                        </div>
                        <div class="about-author d-flex align-items-center">
                            <div class="author-ava">
                                <img src="img/membership/members-icon-3.png" alt="">
                            </div>
                            <div class="author-desination author-desination-2">
                                <h4>Hiliam D. Pawlu</h4>
                                <h6>Founder, TrashTheme</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="review-box">
                        <div class="members-rating">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="members-text">
                            <p>Lorem ipsum dolor sit amet, coning
                                ctetur adipisicing elit, sed do it on
                                eiusmod tempor incididunt me
                                ut labore et dolore.</p>
                        </div>
                        <div class="about-author d-flex align-items-center">
                            <div class="author-ava">
                                <img src="img/membership/members-icon-1.png" alt="">
                            </div>
                            <div class="author-desination author-desination-2">
                                <h4>Eric Z. Piedie</h4>
                                <h6>Founder, TrashTheme</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- membership-area end -->
    <!-- faq-area start -->
    <div class="section-faq-area pt-120 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-4 d-lg-none d-xl-block">
                    <div class="faq-left-box pos-rel mb-200">
                        <div class="faq-left-img">
                            <img class="img" src="img/faq/faq-left-back.jpg" alt="">
                        </div>
                        <div class="faq-pos-front">
                            <img class="img" src="img/faq/faq-left-front.jpg" alt="">
                        </div>
                        <div class="faq-back-shape">
                            <img class="img" src="img/faq/faq-left-back-shape.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="about-title mb-45">
                        <h5 class="pink-color">FAQ</h5>
                        <h1>Get Every Single Answers There.</h1>
                    </div>
                    <div class="faq-right-box">
                        <div id="accordion" class="mt-40">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                                           aria-expanded="false" aria-controls="collapseOne">
                                            How can we help your business??
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseTwo"
                                           aria-expanded="false" aria-controls="collapseTwo">
                                            What are the advantages of bearl??
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                           aria-expanded="false" aria-controls="collapseThree">
                                            Let’s find an office near you?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                           aria-expanded="false" aria-controls="collapseFour">
                                            Powerfully flexible WordPress theme for business?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                           aria-expanded="false" aria-controls="collapseFive">
                                            Related organizations, institutes, company and businesses?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq-area start -->
    <!-- brand-area start -->
    <section class="brand-area pos-rel pt-115 pb-110" data-background="img/slider/slider-bg-3.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="about-title text-center mb-70">
                        <h5 class="white-color">Sponsors</h5>
                        <h1 class="white-color">Our Popular Brand.</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="brand-active owl-carousel">
                    <div class="single-brand">
                        <img src="img/brand/brand1.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="img/brand/brand2.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="img/brand/brand3.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="img/brand/brand4.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="img/brand/brand5.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="img/brand/brand6.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="img/brand/brand2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand-area end -->
    <!-- latest-news-area start -->
    <section class="latest-news-area gray-bg pt-115 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center pos-rel mb-70">
                        <div class="section-text pos-rel">
                            <h5>Blog</h5>
                            <h1>Latest News<span>.</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="latest-news-box latest-news-box-2 latest-news-box-3 mb-30">
                        <div class="latest-news-thumb">
                            <a href="blog-details.html"><img src="img/blog/news-thumb-1.jpg" alt=""></a>
                        </div>
                        <div class="latest-news-content-box pl-0 pr-0">
                            <div class="latest-news-content">
                                <div class="news-meta mb-10">
                                    <span><a href="#" class="news-tag">Business,</a></span>
                                    <span><a href="#" class="news-tag">Logo</a></span>
                                </div>
                                <h3><a href="blog-details.html">Lorem ipsum dolor sit at met, cons ectetur.</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="latest-news-box latest-news-box-2 latest-news-box-3 mb-30">
                        <div class="latest-news-thumb">
                            <a href="blog-details.html"><img src="img/blog/news-thumb-2.jpg" alt=""></a>
                        </div>
                        <div class="latest-news-content-box pl-0 pr-0">
                            <div class="latest-news-content">
                                <div class="news-meta mb-10">
                                    <span><a href="#" class="news-tag">Consulting,</a></span>
                                    <span><a href="#" class="news-tag">idea</a></span>
                                </div>
                                <h3><a href="blog-details.html">Lorem ipsum dolor sit at met, cons ectetur.</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="latest-news-box latest-news-box-2 latest-news-box-3 mb-30">
                        <div class="latest-news-thumb">
                            <a href="blog-details.html"><img src="img/blog/news-thumb-3.jpg" alt=""></a>
                        </div>
                        <div class="latest-news-content-box pl-0 pr-0">
                            <div class="latest-news-content">
                                <div class="news-meta mb-10">
                                    <span><a href="#" class="news-tag">Design,</a></span>
                                    <span><a href="#" class="news-tag">Idea</a></span>
                                </div>
                                <h3><a href="blog-details.html">Lorem ipsum dolor sit at met, cons ectetur.</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-news-area end -->
</main>

<!-- Footer  -->
<footer data-bg-color="#223645">
    <div class="footer-top pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-30">
                        <div class="footer-logo mb-30">
                            <a href="#"><img src="img/logo/logo-light.png" alt=""></a>
                        </div>
                        <div class="footer-text mb-40">
                            <p>Lorem ipsum dolor sit amet consecte tur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna
                                aliqua tepo the.</p>
                        </div>
                        <div class="footer-subsccribe">
                            <h5>Subscribe</h5>
                            <form action="#">
                                <input type="email" name="EMAIL" placeholder="Enter your email" required="">
                                <button type="submit"><i class="fal fa-rocket"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-md-6">
                    <div class="footer-widget mb-30 pl-20">
                        <h3 class="footer-title">Departments</h3>
                        <div class="footer-menu-2">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Locations</a></li>
                                <li><a href="#">Caregivers</a></li>
                                <li><a href="#">New & Blog</a></li>
                                <li><a href="#">Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 d-lg-none d-xl-block">
                    <div class="footer-widget mb-30">
                        <h3 class="footer-title">Latest Feed</h3>
                        <div class="blog-feeds pr-15">
                            <div class="signle-blog-feeds mb-20">
                                <div class="blog-feeds-thumb">
                                    <a href="blog-details.html"><img src="img/blog/feeds-thumb-1.jpg" alt=""></a>
                                </div>
                                <div class="blog-feeds-text">
                                    <h5><a href="blog-details.html">Lorem ipsum dolor sit am et, consectetur.</a></h5>
                                    <span class="feeds-date">14 July 2019</span>
                                </div>
                            </div>
                            <div class="signle-blog-feeds mb-20">
                                <div class="blog-feeds-thumb">
                                    <a href="blog-details.html"><img src="img/blog/feeds-thumb-2.jpg" alt=""></a>
                                </div>
                                <div class="blog-feeds-text">
                                    <h5><a href="blog-details.html">Lorem ipsum dolor sit am et, consectetur.</a></h5>
                                    <span class="feeds-date">14 July 2019</span>
                                </div>
                            </div>
                            <div class="signle-blog-feeds  mb-20">
                                <div class="blog-feeds-thumb">
                                    <a href="blog-details.html"><img src="img/blog/feeds-thumb-3.jpg" alt=""></a>
                                </div>
                                <div class="blog-feeds-text">
                                    <h5><a href="blog-details.html">Lorem ipsum dolor sit am et, consectetur.</a></h5>
                                    <span class="feeds-date">14 July 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 d-lg-block">
                    <div class="footer-widget mb-30">
                        <h3 class="footer-title">Instagram</h3>
                        <div class="footer-instagram">
                            <ul>
                                <li><a href="#"><img src="img/instagram/ins1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instagram/ins2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instagram/ins3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instagram/ins4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instagram/ins5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instagram/ins6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area pt-25 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-copyright">
                        <p class="white-color">© 2020 Beakai Template by BasicTheme</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-social text-left text-md-right">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer  -->


<!-- Fullscreen search -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end fullscreen search -->
@endsection
