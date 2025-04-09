<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?= isset($page) ? ucfirst($page) : "Web" ?> | Driven Code</title>
    <meta name="author" content="vecuro" />
    <meta
        name="description"
        content="Driven Code - for car services" />

    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta
        name="msapplication-TileImage"
        content="assets/img/favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
        href="../../css2?family=Dosis:wght@200..800&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet" />
    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css" />
    <!-- Jquery Ui CSS -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
    <!-- Jquery Twenty Twenty -->
    <link rel="stylesheet" href="assets/css/twentytwenty.css" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
</head>

<body>
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <div class="mobile-logo">
                <a href="<?= base_url(); ?>"><img src="assets/img/white-logo.svg" alt="Driven Code" class="logo" /></a>
                <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home 1</a></li>
                            <li><a href="index-2.html">Home 2</a></li>
                            <li><a href="index-3.html">Home 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="shop.html">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="shop.html">Shop Grid</a></li>
                            <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                            <li><a href="shop-details.html">Shop Details</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="account.html">My Account</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#none">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home 1</a></li>
                            <li><a href="index-2.html">Home 2</a></li>
                            <li><a href="index-3.html">Home 3</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="price.html">Pricing Plans</a></li>
                            <li><a href="appointment.html">Appointment</a></li>
                            <li><a href="blog.html">Blog Grid</a></li>
                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                            <li><a href="blog-sidebar-2.html">Blog Sidebar 2</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                            <li><a href="services.html">Service</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="faq-2.html">FAQs 2</a></li>
                            <li><a href="shop.html">Shop Grid</a></li>
                            <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                            <li><a href="shop-details.html">Shop Details</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="project.html">Projects</a></li>
                            <li><a href="project-details.html">Projects Details</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="account.html">My Account</a></li>
                            <li><a href="404.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
        Header Area
    ==============================-->
    <header class="vs-header header-layout3">
        <!-- Header Top -->
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="header-infos">
                            <div class="header-info">
                                <div class="header-info_icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="media-body">
                                    <span class="header-info_label">We'are Open: Fri - Sat 6:00 - 18:00</span>
                                </div>
                            </div>
                            <div class="header-info">
                                <div class="header-info_icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="media-body">
                                    <a class="header-info_label" href="tel:+44 7867 916240">+44 7867 916240</a>
                                </div>
                            </div>
                            <div class="header-info">
                                <div class="header-info_icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <a class="header-info_label" href="mailto:m.z.islam2@wlv.ac.uk">m.z.islam2@wlv.ac.uk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-social style-white">
                            <a href="themeforest.net"><i class="fab fa-facebook-f"></i></a>
                            <a href="themeforest.net"><i class="fab fa-twitter"></i></a>
                            <a href="themeforest.net"><i class="fab fa-instagram"></i></a>
                            <a href="themeforest.net"><i class="fab fa-behance"></i></a>
                            <a href="themeforest.net"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper header-bottom3">
            <div class="sticky-active style3">
                <div class="container">
                    <div class="menu-top3">
                        <div
                            class="row justify-content-between align-items-center gx-sm-0">
                            <div class="col-auto">
                                <div class="header-logo3">
                                    <a href="<?= base_url(); ?>"><img
                                            src="assets/img/logo.png"
                                            alt="Driven Code"
                                            class="logo" style="height: 120px !important;" /></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu menu-style3 d-none d-lg-block">
                                    <ul>
                                        <li><a href="<?= base_url(); ?>">Home</a></li>
                                        <li><a href="<?= base_url('services'); ?>">Services</a></li>
                                        <li><a href="<?= base_url('about'); ?>">About</a></li>
                                        <li><a href="<?= base_url('contact'); ?>">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-auto">
                                <div class="header-btns">
                                    <a
                                        href="<?= base_url('make-appointment'); ?>"
                                        class="vs-btn style2 d-none d-xl-inline-block">
                                        <span class="vs-btn__bar"></span>
                                        Book An Appointment
                                    </a>
                                    <button
                                        class="vs-menu-toggle style4 d-inline-block d-lg-none">
                                        <i class="fal fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <main>
        <?= $this->renderSection('content') ?>
    </main>



    <!--==============================
	  Footer Area
	============================== -->
    <footer class="footer--layout3 space-top z-index-common overflow-hidden">
        <div class="overlay5"></div>
        <div class="container">
            <div class="footer-top">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-3 mb-30">
                        <div class="footer-logo text-center d-block text-lg-start">
                            <a href="index.html">
                                <img src="assets/img/logo.png" alt="Driven Code" class="logo" style="height: 100px !important;" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <p class="footer-text">
                            Specialists in vehicle software optimization - ECU tuning, module programming, and feature activation using OEM-grade diagnostics.
                        </p>
                    </div>
                    <div class="col-lg-3 mb-30">
                        <div class="social-style1 text-center text-lg-end">
                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area2 space-extra-bottom">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-3 col-xl-2">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Useful Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li>
                                        <a href="index.html"><i class="far fa-angle-right"></i> Home</a>
                                    </li>
                                    <li>
                                        <a href="destinations.html"><i class="far fa-angle-right"></i> About</a>
                                    </li>
                                    <li>
                                        <a href="tours.html"><i class="far fa-angle-right"></i> Services</a>
                                    </li>
                                    <li>
                                        <a href="blog.html"><i class="far fa-angle-right"></i> Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Opening Hours</h3>
                            <div class="widget__schedule">
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Mon</td>
                                        <td><span>: </span></td>
                                        <td><span>09.00 - 06.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Tue</td>
                                        <td><span>: </span></td>
                                        <td><span>10.00 - 07.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Wed</td>
                                        <td><span>: </span></td>
                                        <td><span>08.00 - 05.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Thu</td>
                                        <td><span>: </span></td>
                                        <td><span>09.30 - 06.30</span></td>
                                    </tr>
                                    <tr>
                                        <td>Fri</td>
                                        <td><span>: </span></td>
                                        <td><span>08.30 - 05.30</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sat</td>
                                        <td><span>: </span></td>
                                        <td><span>09.00 - 06.00</span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contact Info</h3>
                            <div class="footer-communicate">
                                <ul>
                                    <li>
                                        <a
                                            class="footer-communicate__text"
                                            href="tel:+44 7867 916240">
                                            <i class="fas fa-phone-alt"></i>
                                            <span class="link">+44 7867 916240</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            class="footer-communicate__text"
                                            href="mailto:m.z.islam2@wlv.ac.uk"><i class="fas fa-envelope"></i>
                                            <span class="link">m.z.islam2@wlv.ac.uk</span></a>
                                    </li>
                                    <li>
                                        <div class="footer-communicate__text">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>6 Fifth Avenue 5501, Broadway, New York Morris Street
                                                London 1234</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Our Instagram</h3>
                            <div class="sidebar-gallery">
                                <a href="assets/img/footer/insta1.jpg" class="popup-image"><img
                                        src="assets/img/footer/insta1.jpg"
                                        alt="Gallery Image"
                                        class="w-100" />
                                </a>
                                <a href="assets/img/footer/insta2.jpg" class="popup-image"><img
                                        src="assets/img/footer/insta2.jpg"
                                        alt="Gallery Image"
                                        class="w-100" />
                                </a>
                                <a href="assets/img/footer/insta3.jpg" class="popup-image"><img
                                        src="assets/img/footer/insta3.jpg"
                                        alt="Gallery Image"
                                        class="w-100" />
                                </a>
                                <a href="assets/img/footer/insta4.jpg" class="popup-image"><img
                                        src="assets/img/footer/insta4.jpg"
                                        alt="Gallery Image"
                                        class="w-100" />
                                </a>
                                <a href="assets/img/footer/insta5.jpg" class="popup-image"><img
                                        src="assets/img/footer/insta5.jpg"
                                        alt="Gallery Image"
                                        class="w-100" />
                                </a>
                                <a href="assets/img/footer/insta6.jpg" class="popup-image"><img
                                        src="assets/img/footer/insta6.jpg"
                                        alt="Gallery Image"
                                        class="w-100" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap style3">
            <div class="container">
                <p class="copyright-text">
                    Copyright <i class="fal fa-copyright"></i>
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    <a href="<?= base_url(); ?>">Driven Code</a>. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>
    <!--********************************
			Code End  Here 
	******************************** -->
    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Jquery UI -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- WOW.js Animation -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Comparison -->
    <script src="assets/js/jquery.twentytwenty.js"></script>
    <script src="assets/js/jquery.event.move.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        <?php if (session()->has('toastr')) : ?>
            <?php $toastr = session('toastr'); ?>
            toastr.<?= $toastr['type'] ?>(
                <?php if (isset($toastr['errors'])) : ?> <?php
                                                            $errorMessages = [];
                                                            foreach ($toastr['errors'] as $error) {
                                                                if (is_array($error)) {
                                                                    $errorMessages = array_merge($errorMessages, $error);
                                                                } else {
                                                                    $errorMessages[] = $error;
                                                                }
                                                            }
                                                            ?> "<ul><li><?= implode('</li><li>', $errorMessages) ?></li></ul>",
                    'Form Validation Error'
                <?php else : ?> "<?= addslashes($toastr['message']) ?>"
                <?php endif ?>
            );
        <?php endif ?>
    </script>

    <script>
        $(document).ready(function() {
            $('#service').on('change', function() {
                var selectedService = $(this).find(':selected');
                var serviceId = selectedService.val();
                var price = selectedService.data('price');
                var duration = selectedService.data('duration');
                var serviceName = selectedService.text().trim();
                var selectedDate = $('#date').val();

                if (!selectedDate) {
                    toastr.error('Please select a date first.');
                    return;
                }

                $('#selectedServiceName').text(serviceName || '');
                $('#serviceDuration').text((duration !== undefined ? duration : ''));
                $('#totalPrice').text((price !== undefined ? price : '0'));


                $.ajax({
                    url: '/get-time-slots',
                    type: 'GET',
                    data: {
                        service_id: serviceId,
                        date: selectedDate
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            populateTimeSlots(response.data);
                        } else {
                            $('#selectedTime').val('');
                            $('#timeSlots').empty();
                            toastr.error('No available slots for the selected service and date.');
                        }
                    },
                    error: function() {
                        toastr.error('Error fetching available slots.');
                    }
                });
                $('#timeSlots').empty();
                $('#selectedTime').val('');
            });

            function populateTimeSlots(slots) {
                var timeSlotsContainer = $('#timeSlots');
                timeSlotsContainer.empty();

                if (slots.length > 0) {
                    slots.forEach(function(slot) {
                        var slotElement = $('<div class="col-4 col-sm-3 col-md-2 mb-2"><div class="time-slot" data-time="' + slot.time + '">' + slot.time + '</div></div>');
                        timeSlotsContainer.append(slotElement);
                    });

                    $('.time-slot').on('click', function() {
                        $('.time-slot').removeClass('selected');
                        $(this).addClass('selected');
                        $('#selectedTime').val($(this).data('time'));
                    });
                } else {
                    timeSlotsContainer.append('<p>No available slots at the moment.</p>');
                }
            }

            $('#bookingForm').submit(function(event) {
                event.preventDefault();

                const serviceSelect = $('#service');
                const timeSlotInput = $('#selectedTime');
                const confirmButton = $('#confirmBookingButton');

                if (!serviceSelect.val()) {
                    toastr.error('Please select a service.');
                    return;
                }

                if (!timeSlotInput.val()) {
                    toastr.error('Please select a time slot.');
                    return;
                }

                var formData = $(this).serialize();

                confirmButton.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i>&nbsp; Please wait...');

                $.ajax({
                    url: '<?= base_url('appointment/submit-booking'); ?>',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        toastr.success(response.message || 'Booking successfully submitted!');
                        $('#bookingForm')[0].reset();
                        confirmButton.prop('disabled', false).html('Confirm Booking');
                    },
                    error: function(xhr, status, error) {
                        toastr.error('An error occurred: ' + error);
                        confirmButton.prop('disabled', false).html('Confirm Booking');
                    }
                });
            });
        });
    </script>




</body>

</html>