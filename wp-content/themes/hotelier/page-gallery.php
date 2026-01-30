<?php
get_header();
?>

<div class="container-fluid page-header mb-5 p-0" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/EX30.jpg');">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3">Gallery</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- <div class="filter-gallery-control">
    <ul>
        <li data-load-more-status="0" class="control all-control active" data-filter="*">All</li>
        <li data-load-more-status="0" class="control" data-filter=".eael-cf-places-to-eat">Places to Eat</li>
        <li data-load-more-status="0" class="control" data-filter=".eael-cf-interior-and-rooms">Interior and Rooms</li>
        <li data-load-more-status="0" class="control" data-filter=".eael-cf-exterior">Exterior</li>
    </ul>
</div> -->
<div class="container gallery-container">
    <?php
    echo do_shortcode('[portfolio_gallery id="114"]');
    ?>
</div>

<?php
get_footer();
?>