<footer>
    <div class="container">
<!--        start of footer-->
        <div class="row">

            <div class="col-6">
                <div class="footer-container">

                    <div class="f-top d-flex">
                        <div class="img-box">
                            <img src="<?php echo get_field('logo_dolne', 'option')?>" alt="logo">
                        </div>
                        <div class="social-container d-flex flex-column justify-content-end align-items-start">
                            <p>znajdź nas:</p>
                            <div class="social-box d-flex">
                                <a href="<?php echo get_field('linkedin', 'option')?>">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="<?php echo get_field('instagram', 'option')?>">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="<?php echo get_field('facebook', 'option')?>">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="f-bottom">
                        <?php $args = array(
                        'container'=> true,
                        'menu_class' => 'd-flex flex-column flex-md-row justify-content-md-between align-items-center flex-wrap',
                        'menu_id' => 'menu_2',
                        'fallback_cb' => false,
                        'theme_location' => 'bottom'
                        );
                        wp_nav_menu($args);
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row h-100">
                    <div class="col-6 offset-2 contact-info-container">
                        <h3><?php echo get_field('dane_kontaktowe','option')['nazwa']?></h3>
                        <div class="d-flex"><i class="icon-facebook-placeholder-for-locate-places-on-maps"></i><p><?php echo get_field('dane_kontaktowe','option')['ulica']?></p></div>
                        <div class="adress-f-line"><p><?php echo get_field('dane_kontaktowe','option')['kod']?> <?php echo get_field('dane_kontaktowe','option')['miasto']?></p></div>
                        <div class="d-flex"><i class="icon-call-answer-1"></i><p><?php echo get_field('dane_kontaktowe','option')['numer_kontaktowy']?></p></div>
                        <div class="d-flex"><i class="icon-mail-black-envelope-symbol"></i><p><?php echo get_field('dane_kontaktowe','option')['email']?></p></div>
                    </div>
                    <div class="col-4 up-button-container text-center">
                        <div class="arrow-up">
                            <a href="#" title="powrot_na_gore" id="go-top">
                                <i class="icon-back"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
<!--   end of footer     -->
<!--   start of copyrights     -->
        <div class="row">
            <div class="col-12 d-flex justify-content-end copyrights">
                <p><?php echo get_field('copyrights', 'option')?></p>
            </div>
        </div>
    </div>
</footer>