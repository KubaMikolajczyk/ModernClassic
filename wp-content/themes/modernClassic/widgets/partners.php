

<div class="container">
    <div class="row">
        <div class="partners-container w-100">

            <div class="arrow-container d-flex px-2 px-sm-0 justify-content-around justify-content-sm-between">
                <i class="prev sliderArrow icon-back"></i>
                <i class="next sliderArrow icon-back"></i>
            </div>

            <div class="title-header">
                <h3>Zaufali nam</h3>
            </div>

            <div class="partners-slider">
                <?php foreach(get_field('partnerzy', $post->ID) as $item) : ?>
                    <div>
                        <div class="partner-logo" style="background: url(<?php echo $item['logo']?>) no-repeat center; background-size: contain"></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

