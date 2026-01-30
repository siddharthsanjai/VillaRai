<?php
get_header();
?>

<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Terms and Conditions</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">Terms and Conditions</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container-xxl text-justify mb-5 lh-base">
    <?php
    the_content(); ?>
</div>



<?php
get_footer();
?>