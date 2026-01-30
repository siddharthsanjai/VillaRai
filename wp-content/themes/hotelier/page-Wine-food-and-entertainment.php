<?php

get_header();

?>

<div class="container-fluid page-header mb-5 p-0" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/PTE4.jpg');">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 ">Wine, food and entertainment</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">Wine, food and entertainment</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <br>
    <div class="wine">
        <h3>Wine and food</h3>
        <br>
        <div id="carouselWine" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselWine" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselWine" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselWine" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselWine" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner wne">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wine1.jpg" class="d-block w-100"
                        alt="wine1">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wine2.jpg" class="d-block w-100"
                        alt="wine2">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wine3.jpg" class="d-block w-100"
                        alt="wine3">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wine4.jpg" class="d-block w-100"
                        alt="wine4">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselWine" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselWine" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <br>
        <p class="text-wine">
            Villa Rai has three distinct dining nooks. Small restaurant with fireplace, suitable for more intimate
            evenings.
            Tavern with a special barbecue and large summer tavern with incredible view.
            <br>
            Make the most of the equipped kitchen at an additional cost, using the separate dining areas! A grocery
            store is
            a
            few minutes away by car! Used utensils should be cleaned and put back in their place.
        </p>
        <br>
        <h3>Entertainment</h3>
        <br>
        <div id="carouselEntertainment" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselEntertainment" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselEntertainment" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ent1.jpg" class="d-block w-100"
                        alt="ent1">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ent2.jpg" class="d-block w-100"
                        alt="ent2">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselEntertainment"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselEntertainment"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
        <h3>THREE UNIQUE PROGRAMMES</h3>
        <br>
        <p class="text-wine">
            1. (40 km) Visit to the caves Uhlovitsa and Golubovitsa (five hundred meters next to each other), a walk in
            the
            town
            of Smilyan on the way back, where there are traditional restaurants (ask us), and a nice fishpond.<br>
            2. (30 km) Visit the old historic town of Zlatograd, the ethnographic complex with a street of crafts, where
            you
            can
            try the authentic coffee on sand (revolving coffee) and the unique baklava with Turkish delight.<br>
            3. (25 km) Visit to Momchilova fortress, (20 km) walk in the town of Smolyan, where upon request you can
            visit
            the
            famous planetarium. Also do not miss the ethnographic museum and the church of Saint Vissarion of Smolyan
        </p>
        <br>
        <!-- <div class="elementor-element elementor-element-67cd036 elementor-widget elementor-widget-image-gallery"
        data-id="67cd036" data-element_type="widget" data-widget_type="image-gallery.default">
        <div class="elementor-widget-container">
            <div class="elementor-image-gallery">
                <div id="gallery-1" class="gallery galleryid-1066 gallery-columns-5 gallery-size-thumbnail">
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="67cd036"
                                data-elementor-lightbox-title="villarai-razvlechenie-1"
                                href="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-1-3.jpg"
                                data-featherlight="image"><img width="150" height="150"
                                    src="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-1-3-150x150.jpg"
                                    class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"></a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="67cd036"
                                data-elementor-lightbox-title="villarai-razvlechenie-2"
                                href="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-2-2.jpeg"
                                data-featherlight="image"><img width="150" height="150"
                                    src="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-2-2-150x150.jpeg"
                                    class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"></a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="67cd036"
                                data-elementor-lightbox-title="villarai-razvlechenie-3"
                                href="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-3-2.jpeg"
                                data-featherlight="image"><img width="150" height="150"
                                    src="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-3-2-150x150.jpeg"
                                    class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"></a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="67cd036"
                                data-elementor-lightbox-title="villarai-razvlechenie-4"
                                href="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-4-2.jpeg"
                                data-featherlight="image"><img width="150" height="150"
                                    src="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-4-2-150x150.jpeg"
                                    class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"></a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="67cd036"
                                data-elementor-lightbox-title="villarai-razvlechenie-5"
                                href="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-5-2.jpeg"
                                data-featherlight="image"><img width="150" height="150"
                                    src="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-5-2-150x150.jpeg"
                                    class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"></a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="67cd036"
                                data-elementor-lightbox-title="villarai-razvlechenie-6"
                                href="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-6-2.jpeg"
                                data-featherlight="image"><img width="150" height="150"
                                    src="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-6-2-150x150.jpeg"
                                    class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"></a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="67cd036"
                                data-elementor-lightbox-title="villarai-razvlechenie-7"
                                href="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-7-2.jpeg"
                                data-featherlight="image"><img width="150" height="150"
                                    src="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-7-2-150x150.jpeg"
                                    class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"></a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="67cd036"
                                data-elementor-lightbox-title="villarai-razvlechenie-8"
                                href="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-8-2.jpeg"
                                data-featherlight="image"><img width="150" height="150"
                                    src="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-8-2-150x150.jpeg"
                                    class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"></a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="67cd036"
                                data-elementor-lightbox-title="villarai-razvlechenie-9"
                                href="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-9-2.jpeg"
                                data-featherlight="image"><img width="150" height="150"
                                    src="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-9-2-150x150.jpeg"
                                    class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"></a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon portrait">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="67cd036"
                                data-elementor-lightbox-title="villarai-razvlechenie-10"
                                href="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-10-2.jpg"
                                data-featherlight="image"><img width="150" height="150"
                                    src="https://villarai.eu/wp-content/uploads/2021/08/villarai-razvlechenie-10-2-150x150.jpg"
                                    class="attachment-thumbnail size-thumbnail" alt="" loading="lazy"></a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div> -->
        <?php
        echo do_shortcode('[portfolio_gallery id="134"]');

        ?>
    </div>

</div>


<?php
get_footer();
?>