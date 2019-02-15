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
                <?php $this->load->view('template/MenuGlobal', $carreras); ?>
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
                            <h1 class="page-title">Contact</h1>
                            <ul>
                                <li>
                                    <a class="active" href="index.html">Home</a>
                                </li>
                                <li>Cantact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- .breadcrumbs-inner end -->
        </div>
        <!-- Breadcrumbs End -->

        <!-- Contact Section Start -->
        <div class="contact-page-section sec-spacer">
            <div class="container">
                <div id="googleMap"></div>
                <div class="row contact-address-section">
                    <div class="col-md-4 pl-0">
                        <div class="contact-info contact-address">
                            <i class="fa fa-map-marker"></i>
                            <h4>Address</h4>
                            <p>503  Old Buffalo Street</p>
                            <p>Northwest #205, New York-3087</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info contact-phone">
                            <i class="fa fa-phone"></i>
                            <h4>Phone Number</h4>
                            <a href="tel:+3453-909-6565">+3453-909-6565</a>
                            <a href="tel:+2390-875-2235">+2390-875-2235</a>
                        </div>
                    </div>
                    <div class="col-md-4 pr-0">
                        <div class="contact-info contact-email">
                            <i class="fa fa-envelope"></i>
                            <h4>Email Address</h4>
                            <a href="mailto:infoname@gmail.com"><p>infoname@gmail.com</p></a>
                            <a href="#"><p>www.yourname.com</p></a>
                        </div>
                    </div>
                </div>

                <div class="contact-comment-section">
                    <h3>Deje un comentario</h3>
                    <div id="form-messages"></div>
                    <form id="contact-form" method="post" action="contact/send">
                        <fieldset>
                            <div class="row">                                      
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Nombre*</label>
                                        <input name="fname" id="fname" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Apellidos*</label>
                                        <input name="lname" id="lname" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Correo electónico*</label>
                                        <input name="email" id="email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Tema *</label>
                                        <input name="subject" id="subject" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12 col-sm-12">    
                                    <div class="form-group">
                                        <label>Mensaje *</label>
                                        <textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
                                    </div>
                                </div>
                            </div>							        
                            <div class="form-group mb-0">
                                <input class="btn-send" type="submit" value="Enviar">
                            </div>

                        </fieldset>
                    </form>						
                </div>
            </div>
        </div>
        <!-- Contact Section End -->     

        <!-- Footer Start -->
        <?php $this->load->view('contact/ContactFooter'); ?> 
        <!-- Footer End -->


