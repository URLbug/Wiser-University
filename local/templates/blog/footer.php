<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>


            <?$APPLICATION->IncludeComponent(
                "bitrix:search.form",
                "flat1",
                array(
                    "PAGE" => "/blog/search/",
                    "USE_SUGGEST" => "N",
                    "COMPONENT_TEMPLATE" => "flat1"
                ),
                false
            );?>
        </div>
    </div>
</section>


<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
</script>

<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="newsLetter_wrap">
                <div class="row justify-content-between">
                    <div class="col-md-7">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Stay Updated
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Email Address">
                                <button type="submit">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Stay Updated
                            </h3>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            About Us
                        </h3>
                        <ul>
                            <li><a href="#">Online Learning</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Press Center</a></li>
                            <li><a href="#">Become an Instructor</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Campus
                        </h3>
                        <ul>
                            <li><a href="#">Our Plans</a></li>
                            <li><a href="#">Free Trial</a></li>
                            <li><a href="#">Academic Solutions</a></li>
                            <li><a href="#">Business Solutions</a></li>
                            <li><a href="#">Government Solutions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Study
                        </h3>
                        <ul>
                            <li><a href="#">Admissions Policy</a></li>
                            <li><a href="#">Getting Started</a></li>
                            <li><a href="#">Visa Information</a></li>
                            <li><a href="#">Tuition Calculator</a></li>
                            <li><a href="#">Request Information</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Support
                        </h3>
                        <ul>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">System Requirements</a></li>
                            <li><a href="#">Register Activation Key</a></li>
                            <li><a href="#">Site feedback</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end  -->


<!-- JS here -->
<?
$asset->addJs(PATH_WISER . "/js/vendor/modernizr-3.5.0.min.js");
$asset->addJs(PATH_WISER . "/js/vendor/jquery-1.12.4.min.js");
$asset->addJs(PATH_WISER . "/js/popper.min.js");
$asset->addJs(PATH_WISER . "/js/bootstrap.min.js");
$asset->addJs(PATH_WISER . "/js/owl.carousel.min.js");
$asset->addJs(PATH_WISER . "/js/isotope.pkgd.min.js");
$asset->addJs(PATH_WISER . "/js/ajax-form.js");
$asset->addJs(PATH_WISER . "/js/waypoints.min.js");
$asset->addJs(PATH_WISER . "/js/jquery.counterup.min.js");
$asset->addJs(PATH_WISER . "/js/imagesloaded.pkgd.min.js");
$asset->addJs(PATH_WISER . "/js/scrollIt.js");
$asset->addJs(PATH_WISER . "/js/jquery.scrollUp.min.js");
$asset->addJs(PATH_WISER . "/js/wow.min.js");
$asset->addJs(PATH_WISER . "/js/nice-select.min.js");
$asset->addJs(PATH_WISER . "/js/jquery.slicknav.min.js");
$asset->addJs(PATH_WISER . "/js/jquery.magnific-popup.min.js");
$asset->addJs(PATH_WISER . "/js/plugins.js");
$asset->addJs(PATH_WISER . "/js/gijgo.min.js");

$asset->addJs(PATH_WISER . "/js/contact.js");
$asset->addJs(PATH_WISER . "/js/jquery.ajaxchimp.min.js");
$asset->addJs(PATH_WISER . "/js/jquery.form.js");
$asset->addJs(PATH_WISER . "/js/jquery.validate.min.js");
$asset->addJs(PATH_WISER . "/js/mail-script.js");

$asset->addJs(PATH_WISER . "/js/main.js");
?>

</body>

</html>
