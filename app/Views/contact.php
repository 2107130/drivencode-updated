<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<style>
    #map {
        height: 600px;
    }
</style>
<!--==============================
    Breadcumb
    ============================== -->
<div class="breadcumb-wrapper" data-bg-src="<?= base_url('assets/img/bg/breadcumb-bg.png'); ?>">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Contact Area -->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-30">
                <div class="title-area">
                    <span class="sec-subtitle style2">Contact Us</span>
                    <h2 class="sec-title">Get In Touch With <span>Driven Code</span></h2>
                </div>
                <div class="mb-40">
                    <div class="icon-box style3">
                        <div class="icon-box__icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <p class="icon-box__text">Call Us 24/7</p>
                            <h3 class="icon-box__title"><a href="tel:+44 7867 916240">+44 7867 916240</a></h3>
                        </div>
                    </div>
                    <div class="icon-box style3">
                        <div class="icon-box__icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <p class="icon-box__text">Email Us</p>
                            <h3 class="icon-box__title"><a href="mailto:m.z.islam2@wlv.ac.uk">m.z.islam2@wlv.ac.uk</a></h3>
                        </div>
                    </div>
                    <div class="icon-box style3">
                        <div class="icon-box__icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <p class="icon-box__text">Location</p>
                            <h3 class="icon-box__title">
                                <p>178 Wardend RdBirmingham B8 2QZ, UK</p>
                            </h3>
                        </div>
                    </div>
                </div>
                <hr class="divider2">
                <div class="social-style1 style3">
                    <span class="title">Follow Us:</span>
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-lg-7 mb-30">
                <form method="post" action="<?= base_url('contact') ?>" class="form-style3">
                    <?= csrf_field() ?>
                    <h3 class="sec-title">Send Us a Message</h3>
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                    <?php endif; ?>
                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="fname" type="text" class="form-control" placeholder="First Name" value="<?= old('fname') ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="lname" type="text" class="form-control" placeholder="Last Name" value="<?= old('lname') ?>">
                        </div>
                        <div class="col-12 form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email Address" value="<?= old('email') ?>">
                        </div>
                        <div class="col-12  form-group">
                            <textarea name="message" class="form-control" placeholder="Message"><?= old('message') ?></textarea>
                        </div>
                        <div class="col-12 form-group">
                            <button class="vs-btn" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
                <p class="form-messages mb-0 mt-3"></p>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area end -->
<!-- Map Area -->
<div class="space-bottom">
    <div class="container">
        <!-- <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=Frankfrut%20Germany+(Vecuro)&t=h&z=14&ie=UTF8&iwloc=B&output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe></div> -->
        <div id="map"></div>
    </div>
</div>
<!-- Map Area End -->

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([52.5011, -1.8282], 13); // Coords for B8 2QZ

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
    }).addTo(map);

    L.marker([52.5011, -1.8282]).addTo(map)
        .bindPopup('178 Wardend Rd, Birmingham')
        .openPopup();

    L.circle([52.5011, -1.8282], {
        color: 'blue',
        fillColor: '#7fdad5',
        fillOpacity: 0.3,
        radius: 8046.72 // 5 miles in meters
    }).addTo(map);
</script>

<?= $this->endSection() ?>