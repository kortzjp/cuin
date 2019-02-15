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

        <!-- Slider Area Start -->
        <div id="rs-slider" class="slider-overlay-2">
            <?php $this->load->view('template/SliderGlobal'); ?>
        </div>
        <!-- Slide
        
        r Area End -->

        <!-- Services Start -->
        <div class="rs-services rs-services-style1">
            <?php  $this->load->view('template/ServicesGlobal'); ?>
        </div>
        <!-- Services End -->

        <!-- About Us Start -->
        <?php $this->load->view('template/AboutGlobal'); ?> 
        <!-- About Us End -->
        
        <!-- Courses Start -->
         <?php  // $this->load->view('template/CursesGlobal'); ?> 
        <!-- Courses End -->

        <!-- Counter Up Section Start-->
        <?php  $this->load->view('template/CounterUpSection'); ?> 
        <!-- Counter Down Section End -->
        
        <!-- Gallery Start -->
        <?php $this->load->view('template/GalleryGlobal'); ?> 
        <!-- Gallery End -->
        
        <!-- Events Start -->
        <?php // $this->load->view('template/EventsSection'); ?> 
        <!-- Events End -->

        <!-- Team Start -->
        <?php // $this->load->view('template/TeamSection'); ?> 
        <!-- Team End -->

        <!-- Calltoaction Start -->
        <!--
        <div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
            <div class="container">
                <div class="rs-cta-inner text-center">
                    <div class="sec-title mb-50 text-center">
                        <h2 class="white-color">WEB DESIGN &amp; DEVLOPMENT COURSE</h2>
                        <p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.</p>
                    </div>
                    <a class="cta-button" href="#">Join Now</a>
                </div>
            </div>
        </div> -->
      <!--  Calltoaction End -->

        <!-- Latest News Start -->
       <?php // $this->load->view('Lates/TeamSection'); ?> 
        <!-- Latest News End -->

        <!-- Products Start -->
        <?php  // $this->load->view('template/Products'); ?> 

        <!-- Newslatter Start -->
        <!--
                <div id="rs-newslatter" class="rs-newslatter sec-black sec-spacer">
                    <div class="container">
                        <div class="row rs-vertical-middle">
                            <div class="col-md-6">
                                <h3 class="newslatter-title">STAY CONNECTED WITH US</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <form class="newslatter-form">
                                    <input type="text" class="form-input" placeholder="Enter Your Email Address">
                                    <button type="submit" class="form-button">SUBSCRIBE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        -->

        <!-- Testimonial Start -->
        <?php  $this->load->view('template/Testimonial'); ?> 
        <!-- Testimonial End -->

        <!-- Partner Start -->
        <?php $this->load->view('template/Partner'); ?> 
        <!-- Partner End -->

        <!-- Footer Start -->
        <?php  $this->load->view('template/Footer'); ?> 
        <!-- Footer End -->
