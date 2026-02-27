<?php
register_nav_menus(array(
    'primary' => ('Primary Menu'),

));
register_nav_menus(array(
    'footer' => ('Footer Menu'),

));


function mytheme_assets()
{


    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/assets/css/bootstrap.min.css',
        array(),
        '5.0'
    );
    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array('bootstrap'),
        '1.0'
    );

    // wp_enqueue_style(
    //     'google-fonts',
    //     'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap',
    //     array(),
    //     null
    // );

    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
        array(),
        '5.10.0'
    );

    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
        array(),
        '1.4.1'
    );


    // wp_enqueue_style(
    //     'animate-css',
    //     get_template_directory_uri() . '/assets/lib/animate/animate.min.css',
    //     array(),
    //     '1.0'
    // );

    // wp_enqueue_style(
    //     'owl-carousel',
    //     get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css',
    //     array(),
    //     '1.0'
    // );

    // wp_enqueue_style(
    //     'tempusdominus',
    //     get_template_directory_uri() . '/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css',
    //     array(),
    //     '1.0'
    // );




    wp_enqueue_script('jquery');


    wp_enqueue_script(
        'bootstrap-bundle',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.0',
        true

    );


    // wp_enqueue_script(
    //     'wow',
    //     get_template_directory_uri() . '/assets/lib/wow/wow.min.js',
    //     array('jquery'),
    //     '1.1.2',
    //     true
    // );


    // wp_enqueue_script(
    //     'easing',
    //     get_template_directory_uri() . '/assets/lib/easing/easing.min.js',
    //     array('jquery'),
    //     '1.4.1',
    //     true
    // );


    // wp_enqueue_script(
    //     'waypoints',
    //     get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js',
    //     array('jquery'),
    //     '4.0.1',
    //     true
    // );


    // wp_enqueue_script(
    //     'counterup',
    //     get_template_directory_uri() . '/assets/lib/counterup/counterup.min.js',
    //     array('jquery'),
    //     '1.0',
    //     true
    // );


    // wp_enqueue_script(
    //     'owl-carousel',
    //     get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js',
    //     array('jquery'),
    //     '2.3.4',
    //     true
    // );


    // wp_enqueue_script(
    //     'moment',
    //     get_template_directory_uri() . '/assets/lib/tempusdominus/js/moment.min.js',
    //     array('jquery'),
    //     '2.29.1',
    //     true
    // );

    // wp_enqueue_script(
    //     'moment-timezone',
    //     get_template_directory_uri() . '/assets/lib/tempusdominus/js/moment-timezone.min.js',
    //     array('moment'),
    //     '0.5.33',
    //     true
    // );


    // wp_enqueue_script(
    //     'tempusdominus',
    //     get_template_directory_uri() . '/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js',
    //     array('jquery', 'moment'),
    //     '5.39.0',
    //     true
    // );


    wp_enqueue_script(
        'theme-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(
            'jquery',
            'bootstrap-bundle',
            'wow',
            'owl-carousel',
            true,
        ),
    );

}

add_action('wp_enqueue_scripts', 'mytheme_assets');

function villarai_gallery_filter_url_script() {
    ?>
    <script>
    document.addEventListener("DOMContentLoaded", function () {

        const buttons = document.querySelectorAll('.pfg-filter');

        buttons.forEach(function(button) {

            button.addEventListener('click', function() {

                const filterValue = this.getAttribute('data-filter');

                if (filterValue === "*") {
                    window.history.pushState({}, '', window.location.pathname);
                } else {
                    const newUrl = window.location.pathname + '?filter=' + filterValue;
                    window.history.pushState({}, '', newUrl);
                }

            });

        });

    });
    </script>
    <?php
}
add_action('wp_footer', 'villarai_gallery_filter_url_script');

function villarai_fonts() {
    wp_enqueue_style(
        'villarai-lora-font',
        'https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'villarai_fonts');

