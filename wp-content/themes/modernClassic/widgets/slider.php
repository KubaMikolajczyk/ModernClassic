<div class="slider-widget">
    <?php foreach (get_field('slider', 'option') as $item) : ?>
        <div class="slider-photo position-relative" style="background: url(<?php echo $item['zdjecie'] ?>) no-repeat; background-size: cover">
            <div class="caption">
                <h3><?php echo $item['naglowek'] ?></h3>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
                <div class="mouse"></div>
        </div>
    </div>
</div>