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
                <div class="col-6">
                    <p class="date">
                        <?php
                        $stringDate = $bPost->post_date;
                        $convertedDate = strtotime($stringDate);
                        $date = date('d F Y', $convertedDate);
                        //                        echo $date;
                        date_local($date);
                        ?>
                    </p>
                    <div class="news-content d-flex flex-column justify-content-end">
                        <h2><?php echo get_field('karta_nowosci', $bPost->ID)['naglowek']?></h2>
                        <p class="desc">
                            <?php echo short_text(get_field('karta_nowosci', $bPost->ID)['tresc'], 303) ?>
                        </p>
                        <a class="arrow-more" title="zobacz post" href="#">
                            <i class="icon-back"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="container">
    <div class="see-more">
        <a title="zobacz więcej" class="news" href="#">
            <span>zobacz więcej</span>
        </a>
    </div>
</div>
