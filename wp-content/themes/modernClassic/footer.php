

<?php get_template_part('_partials/footer'); ?>
<?php wp_footer(); ?>


</div>
<!-- end of .site-inner -->

</div>
<!-- end of .site -->

<aside>
    <div class="inner">
        <div class="d-flex justify-content-end">
            <div class="close-aside">
                <div class="bar1"></div>
                <div class="bar2"></div>
            </div>
        </div>

        <?php $args = array(
            'container'=> true,
            'menu_class' => 'd-flex flex-column justify-content-start align-items-center flex-wrap',
            'menu_id' => 'menu_2',
            'fallback_cb' => false,
            'theme_location' => 'left'
        );
        wp_nav_menu($args);
        ?>
    </div>
</aside>

<!--google maps-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwlpRocNhjct4QLVXZ8ZQpNOSVxkjt4hA&callback=initMap">
</script>

</body>
</html>