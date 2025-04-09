<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!--==============================
    Breadcumb
    ============================== -->
<div class="breadcumb-wrapper" data-bg-src="<?= base_url('assets/img/bg/breadcumb-bg.png'); ?>">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Services</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Services Area Start -->
<div class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <?php foreach ($services as $service): ?>
                <div class="col-lg-4">
                    <div class="service-block--style2">
                        <div class="service-block__thumb">
                            <img src="<?= base_url('uploads/services/' . esc($service['service_image'])) ?>" alt="services">
                        </div>
                        <div class="service-block__content">
                            <h3 class="service-block__title h5 mt-5"><a href="service-details.html"><?= esc($service['service_name']) ?></a></h3>
                            <p class="service-block__text"><?= esc($service['service_description']) ?></p>
                            <a href="<?= base_url('make-appointment') ?>" class="vs-btn style13">Book An Appointment</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Services Area End -->

<?= $this->endSection() ?>