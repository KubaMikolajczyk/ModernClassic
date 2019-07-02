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
                    <div class="implementation-slide overflow-hidden position-relative">
                        <div class="image">
                            <img class="w-100" src="<?php echo get_field('karta_implementacji', $imp->ID)['zdjecie']?>" alt="<?php echo get_field('karta_implementacji', $imp->ID)['tekst_do_zdjecia']?>">
                        </div>
                        <p><?php echo get_field('karta_implementacji', $imp->ID)['tekst_do_zdjecia']?></p>
                        <a class="link-overlay" href="<?php echo get_permalink($imp->ID)?>" title="<?php echo get_field('karta_implementacji', $imp->ID)['tekst_do_zdjecia']?>"></a>
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