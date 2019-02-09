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
        <?php $this->load->view('template/MenuGlobal',$carreras); ?>
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
            <?php foreach ($carreras as $carrera){?>
            <button data-filter=".<?php echo $carrera->nombre;?>"> <?php echo $carrera->nombre;?></button>
            <?php }?>

        </div>
        <div class="row grid cursos">
            <?php foreach ($carreras as $curso){?>

                <div class="col-lg-4 col-md-6 grid-item <?php echo $curso->nombre;?>">
                    <div class="course-item">
                        <div class="course-img">
                            <img src="<?php echo base_url("public/images/courses/$curso->imagen");?>" alt="" />
                            <span class="course-value">$<?php echo $curso->colegiatura;?></span>
                            <div class="course-toolbar">
                                <h4 class="course-category"><a href="#"><?php echo $curso->nombre;?></a></h4>
                                <div class="course-date">
                                    <i class="fa fa-calendar"></i> <?php echo $curso->apertura;?>
                                </div>
                                <div class="course-duration">
                                    <i class="fa fa-clock-o"></i><?php echo $curso->duracion;?> años
                                </div>
                            </div>
                        </div>
                        <div class="course-body">
                            <div class="course-desc">
                                <h4 class="course-title"><a href="<?php echo base_url("Courses/detalle/$curso->PKCarrera"); ?>"><?php echo $curso->curso;?></a></h4>
                                <p>
                                    <?php echo $curso->presentacion;?>
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
                <?php } ?>
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

<!-- Testimonial Start -->
<?php  $this->load->view('template/Testimonial'); ?>
<!-- Testimonial End -->

<!-- Partner Start -->
<?php $this->load->view('template/Partner'); ?>
<!-- Partner End -->

<!-- Footer Start -->
<?php  $this->load->view('template/Footer'); ?>
<!-- Footer End -->
