<?php

$imps = get_posts( array(
    'post_type' => 'implementacje',
    'numberposts' => 5
));

?>


<div class="implementations" id="implementations">
    <h3>Nasze realizacje</h3>
    <div class="swiper-container pt-4">
        <div class="swiper-wrapper">
            <?php foreach($imps as $imp) :?>
                <div class="swiper-slide">
                    <div class="implementation-slide" style="background: url(<?php echo get_field('karta_implementacji', $imp->ID)['zdjecie']?>) no-repeat; background-size: cover">
                        <p><?php echo get_field('karta_implementacji', $imp->ID)['tekst_do_zdjecia']?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination mt-4"></div>
    </div>
</div>
<div class="container">
    <div class="see-more-producers">
        <a title="zobacz więcej" href="#">
            <span>zobacz więcej</span>
        </a>
    </div>
</div>