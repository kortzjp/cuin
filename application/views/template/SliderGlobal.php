<div id="home-slider">
    <!-- Item 1 -->
    <?php
    $n = 1;
    if ($sliders)
        foreach ($sliders as $slider) {

            echo '<div class="item active">'
            . '<img src="' . base_url() . $slider->ruta . '" alt="Slide' . $n . '" />
                <div class="slide-content">
                <div class="display-table">
                <div class="display-table-cell">
                <div class="container text-center">
                <h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">' . $slider->titulo . '</h1>
		<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">' . $slider->descripcion .
            '<br class="hidden-sm-dow"> </p>  
		</div>
		</div>
		</div>
		</div>
		</div>
                ';
        }
    ?>
</div>