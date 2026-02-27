<?php
$lang = pll_current_language();

if ($lang == 'bg') {
    $terms_page_id = 254; // Bulgarian page ID
    $location = "Вила Рай 4921 Мадан, България 41.522051, 24.957311";
    $logo = get_template_directory_uri() . '/assets/img/footer-logo-bg.png';
    $tnc = "Използвайки нашия уебсайт, Вие се съгласявате с";
} else {
    $terms_page_id = 199; // English page ID
    $location = "Villa Rai 4921 Madan, Bulgaria 41.522051, 24.957311";
    $logo = get_template_directory_uri() . '/assets/img/footerlogo.png';
    $tnc = "By using our website, you agree to our";
}


?>
<footer>
    <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-md-4 col-lg-4">
                    <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                    <!-- <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p> -->
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+359 888 513570,
                        +359 887 502222</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>hotelvillarai@gmail.com</p>
                    <p><i class="fa fa-map-marker-alt me-3"></i>
                        <a href="https://maps.google.com/?q=41.5223403,24.9548565" class="text-white"
                            target="_blank"><?php echo $location; ?></a>
                    </p>

                </div>
                <div class="col-md-4 col-lg-4 d-flex justify-content-center">
                    <div class="rounded">
                        <h1 class="custom-logo-footer"><img src="<?php echo $logo; ?>" alt="VillaRai Logo"></h1>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/villarai.rhodope"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/hotelvillarai/"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a class="btn btn-outline-light btn-social"
                                href="https://www.google.com/maps/place/%D0%92%D0%B8%D0%BB%D0%B0+%D0%A0%D0%B0%D0%B9/@41.5222162,24.9574104,17z/data=!3m1!4b1!4m9!3m8!1s0x14adac7f33af2da7:0x15965e462fb9b7a8!5m2!4m1!1i2!8m2!3d41.5222162!4d24.9574104!16s%2Fg%2F11bcdzbwbc?entry=ttu&g_ep=EgoyMDI2MDIxNi4wIKXMDSoASAFQAw%3D%3D"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-google"></i>
                            </a>

                            <a class="btn btn-outline-light btn-social"
                                href="https://www.tripadvisor.com/Hotel_Review-g2100960-d23174428-Reviews-Hotel_Villa_Rai-Madan_Smolyan_Province.html"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-tripadvisor"></i>
                            </a>

                        </div>
                        <!-- <p class="text-white mb-0">
                                Download <a class="text-dark fw-medium" href="https://htmlcodex.com/hotel-html-template-pro">Hotelier – Premium Version</a>, build a professional website for your hotel business and grab the attention of new visitors upon your site’s launch.
                            </p> -->
                    </div>
                </div>
                <section class="col-md-4 col-lg-4">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2986.613712554634!2d24.954835476066375!3d41.52221617128302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14adac7f33af2da7%3A0x15965e462fb9b7a8!2z0JLQuNC70LAg0KDQsNC5!5e0!3m2!1sen!2sin!4v1769165225399!5m2!1sen!2sin"
                            width="100%" height="300" style="border:0;" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </section>

                <!-- <div class="col-lg-5 col-md-12">
                <div class="row gy-5 g-4">
                    <div class="col-md-6">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_class' => 'd-flex flex-column',
                        ));
                        ?>
                    </div>
                    <div class="col-md-6">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Address</h6>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Villa Rai 4921 Madan, Bulgaria
                            41.522051, 24.957311</p>
                    </div>
                </div>
            </div> -->
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="text-center text-white mb-3 mb-md-0">
                        &copy; <a href="/">Copyright © 2026 Хотел "Вила Рай"</a>
                        <p><?php echo $tnc; ?> <a class="border-bottom" href="<?php echo get_permalink($terms_page_id); ?>"><?php
                               $lang = pll_current_language();
                               echo ($lang == 'bg') ? 'Общи условия' : 'Terms and Conditions';
                               ?></a>.</p>

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a class="border-bottom" href="https://themewagon.com"
                        target="_blank">ThemeWagon</a>
                </div> -->
                        <!-- <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php
wp_footer();
?>
</body>

</html>