<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VillaRai</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="assets/img/villa-logo.png" rel="icon">
    <?php
    wp_head();
    ?>

</head>

<body>
    <div class="container-xxl navs p-0 align-items-center">
        <!-- Spinner Start -->
        <!-- <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->



        <!-- Header Start -->
        <div class="container-fluid bg-white px-0">
            <div class="row gx-0">
                <div class="col-lg-2 bg-white d-none d-lg-block">
                    <a href="<?php echo home_url(); ?>"
                        class="navbar-brand w-80 h-80 m-0 p-0 d-flex align-items-center justify-content-center ">
                        <h1 class="custom-logo"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_Vila-Rai_B.png"
                                alt="VillaRai Logo">
                        </h1>
                    </a>
                </div>

                <div class="col-lg-9">
                    <!-- <div class="row gx-0 bg-white d-none d-lg-flex text-end pb-3">
                        <!-- <div class="col-lg-12 px-5 d-flex justify-content-end"> -->
                    <!-- <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">hotelvillarai@gmail.com</p>
                            </div> -->

                    <!-- <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+359 888 513570, +359 887 502222</p>
                            </div> -->

                    <!-- </div> -->
                    <!-- <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div> -->
                    <!-- </div> -->
                    <nav class="navbar navbar-expand-lg bg-white navbar-light p-0 p-lg-0">
                        <a href="<?php echo home_url(); ?>" class="navbar-brand d-block d-lg-none">
                            <h2 class="custom-logo"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/villa-logo.png"
                                    alt="VillaRai Logo"></h2>
                            <!-- <h1 class="m-0 text-primary text-uppercase">VillaRai</h1> -->

                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between py-4" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">

                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => false,
                                    'menu_class' => 'navbar-nav me-auto py-0',
                                ));
                              

                                ?>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- <a href="https://htmlcodex.com/hotel-html-template-pro"
                    class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i
                        class="fa fa-arrow-right ms-3"></i></a> -->
            </div>
        </div>
    </div>

    <!-- Header End -->