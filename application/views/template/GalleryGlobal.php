<!-- Courses Start -->
<div id="rs-galeria" class="rs-courses sec-color sec-spacer">
    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2  >GALERÍA</h2>
            <!-- <p>Fusce sem dolor, interdum in fficitur at, faucibus nec lorem. Sed nec molestie justo.</p> -->
        </div>
        <?php if ($imagenes) { 
            $items = count($imagenes);
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="<?= $items ?>" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
                        <?php
                        $n = 1;
                        foreach ($imagenes as $imagen) {
                            ?>
                            <div class="cource-item">
                                <div class="gallery-item">
                                    <div class="gallery-desc">
                                        <!-- <h3><a href="#">Photo Title Here</a></h3>
                                         <p>There are many variations of Lorem Ipsum available</p> -->
                                        <a class="image-popup" href="<?= $imagen->ruta ?>" title="">
                                            <img src="<?= $imagen->ruta ?>" alt="Gallery Image" />

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses End -->
