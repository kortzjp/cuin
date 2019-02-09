<div class="menu-area menu-sticky">
    <div class="container">
        <div class="main-menu">
            <div class="row">
                <div class="col-sm-12">
                    <!-- <div id="logo-sticky" class="text-center">
                        <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                    </div> -->
                    <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                    <nav class="rs-menu">
                        <ul class="nav-menu">
                            <!-- Home -->
                            <li class="current-menu-item current_page_item menu-item-has-children"> <a href="<?= base_url()?>" class="home">Inicio</a>
                            <!--    <ul class="sub-menu">
                                    <li class="active"><a href="index.html">Inicio</a> </li>
                                    <li><a href="index2.html">Home Two</a> </li>
                                    <li><a href="index3.html">Home Three</a></li>
                                    <li><a href="index4.html">Home Four</a> </li>
                                    <li><a href="index5.html">Home Five</a> </li>
                                </ul>  -->
                            </li>
                            <!-- End Home -->

                            <!--About Menu Start-->
                            <li class="menu-item-has-children"> <a href="#">Nosotros</a>
                                <!--
                                <ul class="sub-menu">
                                    <li> <a href="about.html">About One</a></li>
                                    <li><a href="about2.html">About Two</a></li>
                                    <li><a href="about3.html">About Three</a></li>
                                </ul> -->
                            </li>
                            <!--About Menu End-->

                            <!-- Drop Down Pages Start
                            <li class="rs-mega-menu mega-rs"> <a href="#">Mega</a>
                                <ul class="mega-menu">
                                    <li class="mega-menu-container">
                                        <div class="mega-menu-innner">
                                            <div class="single-magemenu">
                                                <ul class="sub-menu">
                                                    <li> <a href="about.html">About One</a></li>
                                                    <li><a href="about2.html">About Two</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </div>
                                            <div class="single-magemenu">
                                                <ul class="sub-menu">
                                                    <li> <a href="teachers.html">Teachers</a> </li>
                                                    <li> <a href="teachers-without-filter.html">Teachers Without Filter</a> </li>
                                                    <li> <a href="teachers-single.html">Teachers Single</a> </li>
                                                    <li> <a href="contact.html">Contact</a></li>
                                                </ul>
                                            </div>
                                            <div class="single-magemenu">
                                                <ul class="sub-menu">
                                                    <li> <a href="gallery.html">Gallery One</a> </li>
                                                    <li> <a href="gallery2.html">Gallery Two</a> </li>
                                                    <li> <a href="gallery3.html">Gallery Three</a> </li>
                                                    <li><a href="error-404.html">Error 404</a></li>
                                                </ul>
                                            </div>
                                            <div class="single-magemenu">
                                                <ul class="sub-menu">
                                                    <li> <a href="shop.html">Shop</a> </li>
                                                    <li> <a href="shop-details.html">Shop Details</a> </li>

                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                           Drop Down Pages End -->

                            <!--Courses Menu Start-->
                            <li class="menu-item-has-children"> <a href="<?= base_url()?>courses">Cursos</a>
                                <ul class="sub-menu">
                                    <?php
                                    foreach ($carreras as $categoria){?>
                                    <li><a href="#"><?php echo($categoria -> nombre); ?></a>
                                        <ul class="sub-menu">
                                            <?php foreach ($carreras as $id)
                                            {

                                                if($id -> PkCategoria == $categoria -> FkCategoria)
                                                {
                                                ?>
                                            <li> <a href="<?php echo base_url("Courses/detalle/$categoria->PKCarrera"); ?>"><?php echo($categoria-> curso); ?></a> </li>
                                          <?php }
                                            } ?>
                                        </ul>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <!--Courses Menu End-->

                            <!--Events Menu Start
                            <li class="menu-item-has-children"> <a href="#">Events</a>
                                <ul class="sub-menu">
                                    <li><a href="events.html">Events</a></li>
                                    <li><a href="events-details.html">Events Details</a></li>
                                    <li> <a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            Events Menu End-->

                            <!-- Drop Down
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
                            End Icons -->

                            <!--blog Menu Start -->
                            <li class="menu-item-has-children"> <a href="<?= base_url() ?>#galeria">Galeria</a>
                                <!--
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul> -->
                            </li>
                            <!-- blog Menu End-->

                            <!--Contact Menu Start-->
                            <li> <a href="contact.html">Contacto</a></li>
                            <!--Contact Menu End-->
                        </ul>
                    </nav>
                    <div class="right-bar-icon rs-offcanvas-link text-right">
                    <!--
                        <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>
                    -->
                        <a id="nav-expander" class="nav-expander fixed"><i class="fa fa-bars fa-lg white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Canvas Menu start -->
        <nav class="right_menu_togle">
            <div class="close-btn"><span id="nav-close" class="text-center">x</span></div>
            <div class="canvas-logo">
                <a href="<?= base_url() ?>"><img src="<?= base_url() ?>public/images/logo-white.png" alt="logo"></a>
            </div>
            <ul class="sidebarnav_menu list-unstyled main-menu">
                <!--Home Menu Start-->
                <li class="current-menu-item "><a href="#">Inicio</a>
                  <!--  <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="index.html">Home One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index2.html">Home Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index3.html">Home Three<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index4.html">Home Four<span class="icon"></span></a></li>
                    </ul>  -->
                </li>
                <!--Home Menu End-->

                <!--About Menu Start-->
                <li class="menu-item-has-children"><a href="<?= base_url() ?>nosotros">Nosotros</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="index.html">About One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index2.html">About Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index3.html">About Three<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--About Menu End-->

                <!--Pages Menu Start
                <li class="menu-item-has-children"><a href="#">Pages</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="teachers.html">Teachers<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="teachers-without-filter.html">Teachers Without Filter<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="teachers-single.html">Teachers Single<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="gallery.html">Gallery One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="gallery2.html">Gallery Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="gallery3.html">Gallery Three<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="shop-details.html">Shop Details<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="cart.html">Cart<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="error-404.html">Error 404<span class="icon"></span></a></li>
                    </ul>
                </li>
                Pages Menu End-->

                <!--Courses Menu Star-->
                <li class="menu-item-has-children"><a href="<?= base_url() ?>#rs-courses">Cursos</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="<?= base_url('cursos/uno')?>">Courses<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="<?= base_url('cursos/dos')?>">Courses Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="<?= base_url('cursos/tres')?>">Courses Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Courses Menu End-->

                <!--Events Menu Star
                <li class="menu-item-has-children"><a href="#">Events</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="events.html">Events<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="events-details.html">Events Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                Events Menu End-->

                <!--blog Menu Star
                <li class="menu-item-has-children"><a href="#">Blog</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="blog.html">Blog<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="blog-details.html">Blog Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                blog Menu End-->
                <li><a href="<?= base_url() ?>galeria">Galeria<span class="icon"></span></a></li>
                <li><a href="<?= base_url() ?>contact">Contacto<span class="icon"></span></a></li>
            </ul>
            <!--
            <div class="search-wrap">
                <label class="screen-reader-text">Search for:</label>
                <input type="search" placeholder="Search..." name="s" class="search-input" value="">
                <button type="submit" value="Search"><i class="fa fa-search"></i></button>
            </div> -->
        </nav>
        <!-- Canvas Menu end -->

        <!-- Search Modal Start 
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
        Search Modal End -->