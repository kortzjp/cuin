<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

    <!--UrlGlobal area start here-->
    <?php $this->load->view('template/UrlGlobal'); ?>
    <!--UrlGlobal area end here-->
    <style>
        .google-maps {
            position: relative;
            padding-bottom: 50%; // This is the aspect ratio
            height: 0;
            overflow: hidden;
        }
        .google-maps iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            
        }
    </style>
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
                <div class="menu-area menu-sticky">
                    <div class="container">

                        <div class="row rs-vertical-middle">
                            <div class="col-lg-3 col-md-12">
                                <div class="logo-area">
                                    <a href="<?= base_url()?>"><img src="<?= base_url()?>public/images/logo-white.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <div class="main-menu">
                                    <nav class="rs-menu">
                                        <ul class="nav-menu">
                                            <!-- Home -->
                                            <li class="menu-item-has-children"> <a href="<?= base_url() ?>" class="home">Inicio</a>
                            
                                            </li>
                                            <!-- End Home -->

                                            <!--About Menu Start-->
                                            <li class="menu-item-has-children"> <a href="<?= base_url() ?>#rs-about">Nosotros</a>
                            
                                            </li>
                                            <!--About Menu End-->

                                            <!--Courses Menu Start-->
                                            <li class="menu-item-has-children"> <a href="<?= base_url() ?>courses">Cursos</a>
                                                
                                            </li>
                                            <!--Courses Menu End-->

                                            <!--blog Menu Start -->
                                            <li class="menu-item-has-children"> <a href="<?= base_url() ?>#rs-galeria">Galeria</a>

                                            </li>
                                            <!-- blog Menu End-->

                                            <!--Contact Menu Start-->
                                            <li class="current-menu-item current_page_item "> <a href="<?= base_url() ?>contact">Contacto</a></li>
                                            <!--Contact Menu End-->
                                        </ul>
                                    </nav>
                                    <div class="right-bar-icon rs-offcanvas-link text-right">
                                        <!--
                                            <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>
                                        <a id="nav-expander" class="nav-expander fixed"><i class="fa fa-bars fa-lg white"></i></a>
                                        -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
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
                            <h1 class="page-title">Contacto</h1>
                            <ul>
                                <li>
                                    <a class="active" href="<?= base_url() ?>">Inicio</a>
                                </li>
                                <li>Contacto</li>
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
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d331.80926685196397!2d-99.87411811378074!3d19.79788047334534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d258ea55555555%3A0x698f4df4f6ba368e!2sCentro+Universitario+Isaac+Newton!5e0!3m2!1ses!2smx!4v1550449692667" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="row contact-address-section">
                    <div class="col-md-4 pl-0">
                        <div class="contact-info contact-address">
                            <i class="fa fa-map-marker"></i>
                            <h4>Dirección</h4>
                            <p>Calle Nicolás Bravo Esq. Callejón Juan Aldama</p>
                            <p>Frente a Coopel Centro, Atlacomulco, México.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info contact-phone">
                            <i class="fa fa-phone"></i>
                            <h4>Número Telefónico</h4>
                            <a href="tel:01 712 120 4030">01 712 120 4030</a>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-4 pr-0">
                        <div class="contact-info contact-email">
                            <i class="fa fa-envelope"></i>
                            <h4>Correo electrónico</h4>
                            <a href="mailto:informes@cuisaacnewton.com"><p>informes@cuisaacnewton.com</p></a>
                            <!-- <a href="#"><p>www.yourname.com</p></a> -->
                            <br>
                        </div>
                    </div>
                </div>

                <div class="contact-comment-section">
                    <h3>Deje un comentario</h3>
                    <div id="form-messages">
                        <?php
                        if ($this->session->flashdata('envio')) {
                            echo '<p class="alert alert-success">' . $this->session->flashdata('envio') . '</p>';
                        }
                        if ($this->session->flashdata('error')) {
                            echo '<p class="alert alert-danger">' . $this->session->flashdata('error') . '</p>';
                        }
                        ?></div>
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
                                        <label>Correo electrónico*</label>
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


