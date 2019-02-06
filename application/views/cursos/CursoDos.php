<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

    <!--UrlGlobal area start here-->
    <?php $this->load->view('template/UrlGlobal'); ?>
    <!--UrlGlobal area end here-->

    <body class="home1">
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
            <header id="rs-header" class="rs-header">

                <!-- Header Top Start -->
                <?php $this->load->view('template/HeaderTopGlobal'); ?>
                <!-- Header Top End -->

                <!-- Menu Start -->
                <?php $this->load->view('template/MenuGlobal'); ?>
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
                            <h1 class="page-title">Curso Dos</h1>
                            <ul>
                                <li>
                                    <a class="active" href="index.html">Home</a>
                                </li>
                                <li>Computer Science And Engineering</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Courses Details Start -->
        <div class="rs-courses-details pt-100 pb-70">
            <div class="container">
                <div class="row mb-30">
                    <div class="col-lg-8 col-md-12">
                        <div class="detail-img">
                            <img src="<?= base_url() ?>public/images/courses/courses-details.jpg" alt="Courses Images" />
                            <div class="course-seats">
                                170 <span>SEATS</span>
                            </div>
                        </div>
                        <div class="course-content">
                            <!--<h3 class="course-title">Computer Science And Engineering</h3>-->
                            <div class="course-instructor">
                                <div class="row">
                                    <div class="col-md-6 mobile-mb-20">
                                        <h3 class="instructor-title">COURSE <span class="primary-color">INSTRUCTOR</span></h3>
                                        <div class="instructor-inner">
                                            <div class="instructor-img">
                                                <img src="<?= base_url() ?>public/images/teachers/2.jpg" alt="Teachers Images" />
                                            </div>
                                            <div class="instructor-body">
                                                <h3 class="name">Garade Pickey Moon</h3>
                                                <span class="designation">English Professor</span>
                                                <div class="social-icon">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="short-desc">
                                            <p>There are many variations of passages of Lorem Ipsum available</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="instructor-title">BASIC <span class="primary-color">INFORMATION</span></h3>
                                        <div class="row info-list">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li>
                                                        <span>Price :</span> $6589
                                                    </li>
                                                    <li>
                                                        <span>Lessons :</span> 12
                                                    </li>
                                                    <li>
                                                        <span>Length :</span> 4 Year
                                                    </li>
                                                    <li>
                                                        <span>Level :</span> Basic
                                                    </li>
                                                    <li>
                                                        <span>Category :</span> Business
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li>
                                                        <span>Started :</span> 03-11-2017
                                                    </li>
                                                    <li>
                                                        <span>Shift :</span> 02
                                                    </li>
                                                    <li>
                                                        <span>Class :</span> 120
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="#">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-desc">
                            <h3 class="desc-title">Course Description</h3>
                            <div class="desc-text">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera tion in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum
                                </p>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera tion in some form, by injected humour
                                </p>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera tion in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsumor randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum
                                </p>
                            </div>
                            <div class="course-syllabus">
                                <h3 class="desc-title">Course Syllabus</h3>
                                <div id="accordion" class="rs-accordion-style1">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <strong>Lessons  1: </strong>
                                                <span>Computer Science And Engineering</span>
                                            </h3>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <strong>Lessons  2: </strong><span>Business Management</span>
                                            </h3>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header mb-0" id="headingThree">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <strong>Lessons  3: </strong>
                                                <span>Civil Engineering</span>
                                            </h3>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial End -->
                            <!--
                                                            <div class="share-area">
                                                                    <div class="row rs-vertical-middle">
                                                                            <div class="col-md-5">
                                                                                    <h3>You Can Share It :</h3>
                                                                            </div>
                                                                            <div class="col-md-7">
                                                                                    <div class="share-inner">
                                                                                            <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                                                                                            <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                                                                                            <a href="#"><i class="fa fa-google"></i> Google</a>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                            -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar-area">
                            <div class="search-box">
                                <h3 class="title">Search Courses</h3>
                                <div class="box-search">
                                    <input class="form-control" placeholder="Search Here ..." name="srch-term" id="srch-term" type="text">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="cate-box">
                                <h3 class="title">Courses Categories</h3>
                                <ul>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Analysis & Features <span>(05)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Video Reviews <span>(07)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Engineering Tech <span>(09)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#"> Righteous Indignation <span>(08)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">General Education <span>(04)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="latest-courses">
                                <h3 class="title">Latest Courses</h3>
                                <div class="post-item">
                                    <div class="post-img">
                                        <a href="courses-details.html"><img src="<?= base_url() ?>public/images/blog-details/sm1.jpg" alt="" title="News image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <h4><a href="courses-details.html">Raken develops reporting The software</a></h4>
                                        <span class="duration"> 
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 4 Years
                                        </span> 
                                        <span class="price">Price: <span>$350</span></span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <a href="courses-details.html"><img src="<?= base_url() ?>public/images/blog-details/sm2.jpg" alt="" title="News image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <h4><a href="courses-details.html">Raken develops reporting The software</a></h4>
                                        <span class="duration"> 
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 4 Years
                                        </span> 
                                        <span class="price">Price: <span>$350</span></span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <a href="courses-details.html"><img src="<?= base_url() ?>public/images/blog-details/sm3.jpg" alt="" title="News image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <h4><a href="courses-details.html">Raken develops reporting The software</a></h4>
                                        <span class="duration"> 
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 4 Years
                                        </span> 
                                        <span class="price">Price: <span>$350</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tags-cloud clearfix">
                                <h3 class="title">courses Tags</h3>
                                <ul>
                                    <li>
                                        <a href="#">SCIENCE</a>
                                    </li>
                                    <li>
                                        <a href="#">HUMANITIES</a>
                                    </li>
                                    <li>
                                        <a href="#">DIPLOMA</a>
                                    </li>
                                    <li>
                                        <a href="#">BUSINESS</a>
                                    </li>
                                    <li>
                                        <a href="#">SPROTS</a>
                                    </li>
                                    <li>
                                        <a href="#">RESEARCH</a>
                                    </li>
                                    <li>
                                        <a href="#">ARTS</a>
                                    </li>
                                    <li>
                                        <a href="#">ADMISSIONS</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="rs-testimonial" class="rs-testimonial pt-100 pb-45 sec-color">
                <div class="container">
                    <div class="sec-title-2 mb-50">
                        <h2>Student Reviews</h2>      
                        <p>Considering primary motivation for the generation of narratives is a useful concept</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div  class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="1200" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="false" data-md-device="2" data-md-device-nav="true" data-md-device-dots="false">
                                <div class="testimonial-item">
                                    <div class="testi-img">
                                        <img src="<?= base_url() ?>public/images//testimonial/1.jpg" alt="Jhon Smith">
                                    </div>
                                    <div class="testi-desc">
                                        <h4 class="testi-name">Luise Henrikes</h4>
                                        <div class="cl-client-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> 
                                        </div>
                                        <p>
                                            Etiam non elit nec augue tempor gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testi-img">
                                        <img src="<?= base_url() ?>public/images/testimonial/2.jpg" alt="Jhon Smith">
                                    </div>
                                    <div class="testi-desc">
                                        <h4 class="testi-name">Aliana D’suza</h4>
                                        <div class="cl-client-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> 
                                        </div>
                                        <p>
                                            Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testi-img">
                                        <img src="<?= base_url() ?>public/images/testimonial/3.jpg" alt="Jhon Smith">
                                    </div>
                                    <div class="testi-desc">
                                        <h4 class="testi-name">Aliana D’suza</h4>
                                        <div class="cl-client-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> 
                                        </div>
                                        <p>
                                            Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testi-img">
                                        <img src="<?= base_url() ?>public/images/testimonial/4.jpg" alt="Jhon Smith">
                                    </div>
                                    <div class="testi-desc">
                                        <h4 class="testi-name">Aliana D’suza</h4>
                                        <div class="cl-client-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> 
                                        </div>
                                        <p>
                                            Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                                        </p>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testi-img">
                                        <img src="<?= base_url() ?>public/images/testimonial/5.jpg" alt="Jhon Smith">
                                    </div>
                                    <div class="testi-desc">
                                        <h4 class="testi-name">Aliana D’suza</h4>
                                        <div class="cl-client-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> 
                                        </div>
                                        <p>
                                            Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-100">    
                <!-- Testimonial Start -->
                <div class="related-courses rs-courses-3">
                    <div class="sec-title-2 mb-50">
                        <h2>RELATED COURSES</h2>      
                        <p>Considering primary motivation for the generation of narratives is a useful concept</p>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1500" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-ipad-device="2" data-ipad-device-nav="true" data-md-device="3" data-md-device-nav="true">
                        <div class="course-item">
                            <div class="course-img">
                                <img src="<?= base_url() ?>public/images/courses/10.jpg" alt="" />
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
                                    <h4 class="course-title"><a href="courses-details.html">Computer Engineering</a></h4>
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
                        <div class="course-item">
                            <div class="course-img">
                                <img src="<?= base_url() ?>public/images/courses/11.jpg" alt="" />
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
                                    <h3 class="course-title"><a href="#">Business Management</a></h3>
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
                        <div class="course-item">
                            <div class="course-img">
                                <img src="<?= base_url() ?>public/images/courses/13.jpg" alt="" />
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
                                    <h3 class="course-title"><a href="#">Diploma Electrical</a></h3>
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
            </div>
        </div>
        <!-- Courses Details End -->

        <!-- Footer Start -->
        <?php $this->load->view('template/Footer'); ?> 
        <!-- Footer End -->
