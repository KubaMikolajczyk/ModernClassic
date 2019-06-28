<?php

    $blogPosts = get_posts( array(
        'post_type' => 'post',
        'numberposts' => 5
    ))

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="section-title">Co nowego?</h3>
        </div>
    </div>

    <div class="slider-news">
        <?php foreach($blogPosts as $bPost) : ?>
            <div class="row d-flex">
                <div class="col-5 offset-1">
                    <div class="news-photo-slider">
                        <?php foreach(get_field('karta_nowosci', $bPost->ID)['zdjecia'] as $item) : ?>
                            <div class="news-photo" style="background: url(<?php echo $item['zdjecie']?>) no-repeat; background-size: cover"></div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-6 news-content d-flex flex-column justify-content-end">
                    <p class="date"><?php echo get_field('karta_nowosci', $bPost->ID)['data']?></p>
                    <h2><?php echo get_field('karta_nowosci', $bPost->ID)['naglowek']?></h2>
                    <p class="desc">
                        <?php echo short_text(get_field('karta_nowosci', $bPost->ID)['tresc'], 303) ?>
                    </p>
                    <a class="arrow-more" title="zobacz post" href="#">
                        <i class="icon-back"></i>
                    </a>


                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="container">
    <div class="see-more-producers">
        <a title="zobacz więcej" href="#">
            <span>zobacz więcej</span>
        </a>
    </div>
</div>
