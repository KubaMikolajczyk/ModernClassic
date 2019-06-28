<div class="container">
    <div class="row">
        <div class="col-12 text-center p-4">
            <h3>O firmie</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-5 icon-container">
            <div class="row icon-row">
                <div class="col-6 d-flex flex-column align-items-center text-center icon-box">
                    <i class="icon-design-tool-2"></i>
                    <p><?php echo get_field('opisy_ikon', $post->ID)['ikona_gorna_lewa']?></p>
                </div>
                <div class="col-6 d-flex flex-column align-items-center text-center icon-box">
                    <i class="icon-handshake""></i>
                    <p><?php echo get_field('opisy_ikon', $post->ID)['ikona_gorna_prawa']?></p>
                </div>
            </div>
            <div class="row icon-row">
                <div class="col-6 d-flex flex-column align-items-center text-center icon-box">
                    <i class="icon-swatches"></i>
                    <p><?php echo get_field('opisy_ikon', $post->ID)['ikona_dolna_lewa']?></p>
                </div>
                <div class="col-6 d-flex flex-column align-items-center text-center icon-box">
                    <i class="icon-cogwheel-outline"></i>
                    <p><?php echo get_field('opisy_ikon', $post->ID)['ikona_dolna_prawa']?></p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 offset-md-2 about-content-container">
            <div class="d-flex flex-column justify-content-center align-items-start">
                <p><?php echo get_field('o_nas', $post->ID)['opis_zwykly']?></p>
                <h2><?php echo get_field('o_nas', $post->ID)['opis_pogrubiony']?></h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="see-more">
        <a title="czytaj więcej" href="#">
            <span>czytaj więcej</span>
        </a>
    </div>
</div>
