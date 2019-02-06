<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">
<!--UrlGlobal area start here-->
<?php $this->load->view('template/UrlGlobal'); ?>
<!--UrlGlobal area end here-->
<body class="inner-page">
<!--Preloader area start here-->
<div class="book_preload">
    <div class="book">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
    </div>
</div>
<!--Preloader area end here-->

<!--Full width header Start-->
<div class="full-width-header">

    <!-- Toolbar Start -->
    <?php $this->load->view('template/ToolbarGlobal'); ?>
    <!-- Toolbar End -->

    <!--Header Start-->
    <header id="rs-header-2" class="rs-header-2">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-3 col-md-12">
                        <div class="logo-area">
                            <a href="index.html"><img src="images/logo-white.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="main-menu">
                            <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                            <nav class="rs-menu">
                                <ul class="nav-menu">
                                    <!-- Home -->
                                    <li class="menu-item-has-children"> <a href="#" class="home">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home One</a> </li>
                                            <li><a href="index2.html">Home Two</a> </li>
                                            <li><a href="index3.html">Home Three</a></li>
                                            <li><a href="index4.html">Home Four</a> </li>
                                            <li><a href="index5.html">Home Five</a></li>
                                        </ul>
                                    </li>
                                    <!-- End Home -->

                                    <!--About Menu Start-->
                                    <li class="menu-item-has-children"><a href="about.html">About Us</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About One</a></li>
                                            <li><a href="about2.html">About Two</a></li>
                                            <li><a href="about3.html">About Three</a></li>
                                        </ul>
                                    </li>
                                    <!--About Menu End-->

                                    <!-- Drop Down -->
                                    <li class="menu-item-has-children"> <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"> <a href="#">Teachers</a>
                                                <ul class="sub-menu">
                                                    <li> <a href="teachers.html">Teachers</a> </li>
                                                    <li> <a href="teachers-without-filter.html">Teachers Without Filter</a> </li>
                                                    <li> <a href="teachers-single.html">Teachers Single</a> </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children"> <a href="#">Gallery</a>
                                                <ul class="sub-menu">
                                                    <li> <a href="gallery.html">Gallery One</a> </li>
                                                    <li> <a href="gallery2.html">Gallery Two</a> </li>
                                                    <li> <a href="gallery3.html">Gallery Three</a> </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children"> <a href="#">Shop</a>
                                                <ul class="sub-menu">
                                                    <li> <a href="shop.html">Shop</a> </li>
                                                    <li> <a href="shop-details.html">Shop Details</a> </li>
                                                </ul>
                                            </li>

                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>

                                            <li><a href="error-404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <!--End Icons -->

                                    <!--Courses Menu Start-->
                                    <li class="current-menu-item current_page_item menu-item-has-children"> <a href="#">Courses</a>
                                        <ul class="sub-menu">
                                            <li class="active"><a href="courses.html">Courses One</a></li>
                                            <li><a href="courses2.html">Courses Two</a></li>
                                            <li><a href="courses-details.html">Courses Details</a></li>
                                            <li><a href="courses-details2.html">Courses Details 2</a></li>
                                        </ul>
                                    </li>
                                    <!--Courses Menu End-->

                                    <!--Events Menu Start-->
                                    <li class="menu-item-has-children"> <a href="#">Events</a>
                                        <ul class="sub-menu">
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="events-details.html">Events Details</a></li>
                                        </ul>
                                    </li>
                                    <!--Events Menu End-->

                                    <!--blog Menu Start-->
                                    <li class="menu-item-has-children"> <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <!--blog Menu End-->

                                    <!--Contact Menu Start-->
                                    <li> <a href="contact.html">Contact</a></li>
                                    <!--Contact Menu End-->
                                </ul>
                            </nav>
                        </div>
                        <div class="searce-box">
                            <a class="rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->

</div>
<!--Full width header End-->

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">OUR COURSES</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Our Courses</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Courses Start -->
<div id="rs-courses-3" class="rs-courses-3 sec-spacer">
    <div class="container">
        <div class="abt-title">
            <h2>OUR COURSES</h2>
        </div>
        <div class="gridFilter">
            <button class="active" data-filter="*">ALL</button>
            <button data-filter=".filter1">SCIENCE</button>
            <button data-filter=".filter2">BUSINESS</button>
            <button data-filter=".filter3">HUMANITIES</button>
            <button data-filter=".filter4">DIPLOMA</button>
        </div>
        <div class="row grid">
            <div class="col-lg-4 col-md-6 grid-item filter1">
                <div class="course-item">
                    <div class="course-img">
                        <img src="images/courses/10.jpg" alt="" />
                        <span class="course-value">$450</span>
                        <div class="course-toolbar">
                            <h4 class="course-category"><a href="#">Science</a></h4>
                            <div class="course-date">
                                <i class="fa fa-calendar"></i> 28-06-2017
                            </div>
                            <div class="course-duration">
                                <i class="fa fa-clock-o"></i> 4 year
                            </div>
                        </div>
                    </div>
                    <div class="course-body">
                        <div class="course-desc">
                            <h4 class="course-title"><a href="<?php echo base_url('courses/Courses/Course1'); ?>">Computer Engineering</a></h4>
                            <p>
                                Hola -- Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
                                Nullam augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="course-footer">
                        <div class="course-seats">
                            <i class="fa fa-users"></i> 70 SEATS
                        </div>
                        <div class="course-button">
                            <a href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item filter2">
                <div class="course-item">
                    <div class="course-img">
                        <img src="images/courses/11.jpg" alt="" />
                        <span class="course-value">$450</span>
                        <div class="course-toolbar">
                            <h4 class="course-category"><a href="#">Business</a></h4>
                            <div class="course-date">
                                <i class="fa fa-calendar"></i> 28-06-2017
                            </div>
                            <div class="course-duration">
                                <i class="fa fa-clock-o"></i> 4 year
                            </div>
                        </div>
                    </div>
                    <div class="course-body">
                        <div class="course-desc">
                            <h3 class="course-title"><a href="courses-details.html">Business Management</a></h3>
                            <p>
                                Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
                                Nullam augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="course-footer">
                        <div class="course-seats">
                            <i class="fa fa-users"></i> 70 SEATS
                        </div>
                        <div class="course-button">
                            <a href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item filter4">
                <div class="course-item">
                    <div class="course-img">
                        <img src="images/courses/12.jpg" alt="" />
                        <span class="course-value">$450</span>
                        <div class="course-toolbar">
                            <h4 class="course-category"><a href="#">Diploma</a></h4>
                            <div class="course-date">
                                <i class="fa fa-calendar"></i> 28-06-2017
                            </div>
                            <div class="course-duration">
                                <i class="fa fa-clock-o"></i> 4 year
                            </div>
                        </div>
                    </div>
                    <div class="course-body">
                        <div class="course-desc">
                            <h3 class="course-title"><a href="courses-details.html">Diploma Electrical</a></h3>
                            <p>
                                Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
                                Nullam augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="course-footer">
                        <div class="course-seats">
                            <i class="fa fa-users"></i> 70 SEATS
                        </div>
                        <div class="course-button">
                            <a href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item filter1">
                <div class="course-item">
                    <div class="course-img">
                        <img src="images/courses/13.jpg" alt="" />
                        <span class="course-value">$450</span>
                        <div class="course-toolbar">
                            <h4 class="course-category"><a href="courses-details.html">Science</a></h4>
                            <div class="course-date">
                                <i class="fa fa-calendar"></i> 28-06-2017
                            </div>
                            <div class="course-duration">
                                <i class="fa fa-clock-o"></i> 4 year
                            </div>
                        </div>
                    </div>
                    <div class="course-body">
                        <div class="course-desc">
                            <h4 class="course-title"><a href="courses-details.html">Civil Engineering</a></h4>
                            <p>
                                Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
                                Nullam augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="course-footer">
                        <div class="course-seats">
                            <i class="fa fa-users"></i> 70 SEATS
                        </div>
                        <div class="course-button">
                            <a href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item filter3">
                <div class="course-item">
                    <div class="course-img">
                        <img src="images/courses/14.jpg" alt="" />
                        <span class="course-value">$450</span>
                        <div class="course-toolbar">
                            <h4 class="course-category"><a href="courses-details.html">Humanities</a></h4>
                            <div class="course-date">
                                <i class="fa fa-calendar"></i> 28-06-2017
                            </div>
                            <div class="course-duration">
                                <i class="fa fa-clock-o"></i> 4 year
                            </div>
                        </div>
                    </div>
                    <div class="course-body">
                        <div class="course-desc">
                            <h3 class="course-title"><a href="#">Bachelor of Arts</a></h3>
                            <p>
                                Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
                                Nullam augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="course-footer">
                        <div class="course-seats">
                            <i class="fa fa-users"></i> 70 SEATS
                        </div>
                        <div class="course-button">
                            <a href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item filter2">
                <div class="course-item">
                    <div class="course-img">
                        <img src="images/courses/15.jpg" alt="" />
                        <span class="course-value">$450</span>
                        <div class="course-toolbar">
                            <h4 class="course-category"><a href="#">Business</a></h4>
                            <div class="course-date">
                                <i class="fa fa-calendar"></i> 28-06-2017
                            </div>
                            <div class="course-duration">
                                <i class="fa fa-clock-o"></i> 4 year
                            </div>
                        </div>
                    </div>
                    <div class="course-body">
                        <div class="course-desc">
                            <h3 class="course-title"><a href="courses-details.html">Master of Business A.</a></h3>
                            <p>
                                Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
                                Nullam augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="course-footer">
                        <div class="course-seats">
                            <i class="fa fa-users"></i> 70 SEATS
                        </div>
                        <div class="course-button">
                            <a href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item filter4">
                <div class="course-item">
                    <div class="course-img">
                        <img src="images/courses/16.jpg" alt="" />
                        <span class="course-value">$350</span>
                        <div class="course-toolbar">
                            <h4 class="course-category"><a href="#">Diploma</a></h4>
                            <div class="course-date">
                                <i class="fa fa-calendar"></i> 28-06-2017
                            </div>
                            <div class="course-duration">
                                <i class="fa fa-clock-o"></i> 4 year
                            </div>
                        </div>
                    </div>
                    <div class="course-body">
                        <div class="course-desc">
                            <h3 class="course-title"><a href="courses-details.html">Diploma in Computer</a></h3>
                            <p>
                                Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
                                Nullam augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="course-footer">
                        <div class="course-seats">
                            <i class="fa fa-users"></i> 70 SEATS
                        </div>
                        <div class="course-button">
                            <a href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item filter3 filter4">
                <div class="course-item">
                    <div class="course-img">
                        <img src="images/courses/17.jpg" alt="" />
                        <span class="course-value">$450</span>
                        <div class="course-toolbar">
                            <h4 class="course-category"><a href="courses-details.html">Humanities</a></h4>
                            <div class="course-date">
                                <i class="fa fa-calendar"></i> 28-06-2017
                            </div>
                            <div class="course-duration">
                                <i class="fa fa-clock-o"></i> 4 year
                            </div>
                        </div>
                    </div>
                    <div class="course-body">
                        <div class="course-desc">
                            <h4 class="course-title"><a href="#">Master of Arts</a></h4>
                            <p>
                                Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
                                Nullam augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="course-footer">
                        <div class="course-seats">
                            <i class="fa fa-users"></i> 70 SEATS
                        </div>
                        <div class="course-button">
                            <a href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item filter1">
                <div class="course-item">
                    <div class="course-img">
                        <img src="images/courses/18.jpg" alt="" />
                        <span class="course-value">$425</span>
                        <div class="course-toolbar">
                            <h4 class="course-category"><a href="#">Science</a></h4>
                            <div class="course-date">
                                <i class="fa fa-calendar"></i> 28-06-2017
                            </div>
                            <div class="course-duration">
                                <i class="fa fa-clock-o"></i> 4 year
                            </div>
                        </div>
                    </div>
                    <div class="course-body">
                        <div class="course-desc">
                            <h3 class="course-title"><a href="courses-details.html">Electronics Engineering</a></h3>
                            <p>
                                Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
                                Nullam augue augue.
                            </p>
                        </div>
                    </div>
                    <div class="course-footer">
                        <div class="course-seats">
                            <i class="fa fa-users"></i> 70 SEATS
                        </div>
                        <div class="course-button">
                            <a href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link fa fa-angle-left" href="#" tabindex="-1"></a></li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link dotted" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link fa fa-angle-right" href="#"></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- Courses End -->

<!-- Partner Start -->
<div id="rs-partner" class="rs-partner pt-70 pb-170 sec-color">
    <div class="container">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
            <div class="partner-item">
                <a href="#"><img src="images/partner/1.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="images/partner/2.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="images/partner/3.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="images/partner/4.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="images/partner/5.png" alt="Partner Image"></a>
            </div>
        </div>
    </div>
</div>
<!-- Partner End -->

<!-- Footer Start -->
<footer id="rs-footer" class="bg3 rs-footer mt-0">
    <div class="container">
        <!-- Footer Address -->
        <div>
            <div class="row footer-contact-desc">
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Address</h4>
                        <p class="contact-desc">
                            503  Old Buffalo Street<br>
                            Northwest #205, New York-3087
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-phone"></i>
                        <h4 class="contact-title">Phone Number</h4>
                        <p class="contact-desc">
                            +3453-909-6565<br>
                            +2390-875-2235
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Email Address</h4>
                        <p class="contact-desc">
                            infoname@gmail.com<br>
                            www.yourname.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="about-widget">
                        <img src="images/logo-footer.png" alt="Footer Logo">
                        <p>We create Premium Html Themes for more than three years. Our team goal is to reunite the elegance of unique.</p>
                        <p class="margin-remove">We create Unique and Easy To Use Flexible Html Themes.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">RECENT POSTS</h5>
                    <div class="recent-post-widget">
                        <div class="post-item">
                            <div class="post-date">
                                <span>28</span>
                                <span>June</span>
                            </div>
                            <div class="post-desc">
                                <h5 class="post-title"><a href="#">While the lovely valley team work</a></h5>
                                <span class="post-category">Keyword Analysis</span>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="post-date">
                                <span>28</span>
                                <span>June</span>
                            </div>
                            <div class="post-desc">
                                <h5 class="post-title"><a href="#">I must explain to you how all this idea</a></h5>
                                <span class="post-category">Spoken English</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">OUR SITEMAP</h5>
                    <ul class="sitemap-widget">
                        <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                        <li ><a href="about.html"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
                        <li><a href="courses.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Courses</a></li>
                        <li><a href="courses-details.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Courses Details</a></li>
                        <li><a href="events.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Events</a></li>
                        <li><a href="events-details.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Events Details</a></li>
                        <li><a href="blog.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog</a></li>
                        <li><a href="blog-details.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog Details</a></li>
                        <li><a href="teachers.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Teachers</a></li>
                        <li><a href="teachers-single.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Teachers Details</a></li>
                        <li><a href="contact.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
                        <li><a href="error-404.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Error 404</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h3 class="footer-title">FLICKR FEED</h3>
                    <ul class="flickr-feed">
                        <li><a href="#"><img src="images/flickr/1.jpg" alt="Project Image"></a></li>
                        <li><a href="#"><img src="images/flickr/2.jpg" alt="Project Image"></a></li>
                        <li><a href="#"><img src="images/flickr/3.jpg" alt="Project Image"></a></li>
                        <li><a href="#"><img src="images/flickr/4.jpg" alt="Project Image"></a></li>
                        <li><a href="#"><img src="images/flickr/5.jpg" alt="Project Image"></a></li>
                        <li><a href="#"><img src="images/flickr/6.jpg" alt="Project Image"></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-share">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <p>© 2018 <a href="#">RS Theme</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" class="fa fa-close"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="eg: Computer Technology" type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<!--ScriptGlobal area start here-->
<?php $this->load->view('template/ScriptGlobal'); ?>
<!--ScriptGlobal area end here-->

</body>
</html>