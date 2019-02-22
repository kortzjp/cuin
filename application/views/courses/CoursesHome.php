<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$model = &get_instance();
$model->load->model("Course_model");

$cursos = $model->Course_model->menuGlobalCursos();
$categorias = $model->Course_model->menuGlobalCategoria();
?>
<!DOCTYPE html>
<html lang="es">

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
                <div class="menu-area menu-sticky">
                    <div class="container">

                        <div class="row rs-vertical-middle">
                            <div class="col-lg-3 col-md-12">
                                <div class="logo-area">
                                    <a href="index.html"><img src="<?= base_url()?>public/images/logo-white.png" alt="logo"></a>
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
                                            <li class="current-menu-item current_page_item menu-item-has-children"> <a href="<?= base_url() ?>courses">Cursos</a>
                                                
                                            </li>
                                            <!--Courses Menu End-->

                                            <!--blog Menu Start -->
                                            <li class="menu-item-has-children"> <a href="<?= base_url() ?>#rs-galeria">Galeria</a>

                                            </li>
                                            <!-- blog Menu End-->

                                            <!--Contact Menu Start-->
                                            <li> <a href="<?= base_url() ?>contact">Contacto</a></li>
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
                            <h1 class="page-title">NUESTRAS CARRERAS</h1>
                            <ul>
                                <li>
                                    <a class="active" href="<?= base_url() ?>">Inicio</a>
                                </li>
                                <li>Nuestras carreras</li>
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
                    <h2>NUESTRAS CARRERAS</h2>
                </div>
                <div class="gridFilter">
                    <button class="active" data-filter="*">TODAS</button>
                    <?php foreach ($categorias as $categoria) { ?>
                        <button data-filter=".<?php echo $categoria->PkCategoria; ?>"> <?php echo $categoria->categoria; ?></button>
<?php } ?>

                </div>
                <div class="row grid cursos">
<?php foreach ($carreras as $curso) { ?>

                        <div class="col-lg-4 col-md-6 grid-item <?php echo $curso->FkCategoria; ?>">
                            <div class="course-item">
                                <div class="course-img">
                                    <img src="<?php echo base_url("public/images/courses/$curso->imagen"); ?>" alt="" />
                                    <span class="course-value">$<?php echo $curso->colegiatura; ?></span>
                                    <div class="course-toolbar">
                                        <h4 class="course-category"><a><?php echo $curso->categoria; ?></a></h4>
                                        <div class="course-date">
                                            <i class="fa fa-calendar"></i> <?php echo $curso->apertura; ?>
                                        </div>
                                        <div class="course-duration">
                                            <i class="fa fa-clock-o"></i><?php echo $curso->duracion; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-body">
                                    <div class="course-desc">
                                        <h4 class="course-title"><a><?php echo $curso->carrera; ?></a></h4>
                                        <p>
    <?php echo $curso->presentacion; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="course-footer">
                                    <div class="course-seats">
                                        <i class="fa fa-users"></i> LUGARES ILIMITADOS
                                    </div>
                                    <div class="apply-btn">
                                        <a href="<?php echo base_url("Courses/detalle/$curso->clave"); ?>">VER DETALLES</a>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php } ?>
                </div>





                <!--
        
        
        
        
        
        
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
                 </nav>-->
            </div>
        </div>
        <!-- Courses End -->

        <!-- Testimonial Start -->
<?php $this->load->view('template/Testimonial'); ?>
        <!-- Testimonial End -->

        <!-- Partner Start -->
<?php $this->load->view('template/Partner'); ?>
        <!-- Partner End -->

        <!-- Footer Start -->
<?php $this->load->view('template/Footer'); ?>
        <!-- Footer End -->
