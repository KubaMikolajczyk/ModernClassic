<?php

$mans = get_posts( array(
    'post_type' => 'producenci',
    'numberposts' => 5
));

?>




<div class="producers" id="producers">
    <h3>Producenci</h3>
    <div class="swiper-container pt-4">
        <div class="swiper-wrapper">
            <?php foreach($mans as $man) :?>

            <div class="swiper-slide">
                <div class="producer-slide overflow-hidden position-relative">
                    <div class="image">
                        <img class="w-100" src="<?php echo get_field('producent_slajd', $man->ID)['zdjecie']?>" alt="<?php echo get_field('producent_slajd', $man->ID)['tekst_na_zdjeciu']?>">
                    </div>
                    <p><?php echo get_field('producent_slajd', $man->ID)['tekst_na_zdjeciu']?></p>
                    <a class="link-overlay" href="<?php echo get_permalink($man->ID)?>" title="<?php echo get_field('producent_slajd', $man->ID)['tekst_na_zdjeciu']?>"></a>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination mt-4"></div>
    </div>
</div>
<div class="container">
    <div class="see-more">
        <a title="zobacz więcej" href="#">
            <span>zobacz więcej</span>
        </a>
    </div>
</div>

