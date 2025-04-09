<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!--==============================
    Breadcumb
    ============================== -->
<div class="breadcumb-wrapper" data-bg-src="<?= base_url('assets/img/bg/breadcumb-bg.png'); ?>">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About Us</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- About Area Start -->
<div class="space-top space-extra-bottom" data-bg-src="<?= base_url('assets/img/bg/about-bg.png'); ?>">
    <div class="container">
        <div class="row align-items-center gx-60">
            <div class="col-lg-6">
                <div class="about-img3 position-relative">
                    <div class="img1">
                        <img src="<?= base_url('assets/img/about/about-img-3-1.jpg') ?>" alt="about img 1 1" />
                    </div>
                    <div class="img-right">
                        <div class="img2">
                            <img src="<?= base_url('assets/img/about/about-img-3-2.jpg') ?>" alt="about img 1 1" />
                        </div>
                        <div class="img3">
                            <img src="<?= base_url('assets/img/about/about-img-3-3.jpg') ?>" alt="about img 1 1" />
                        </div>
                    </div>
                    <div class="text-box style2">
                        <span class="text-box__number">10+</span>
                        <h3 class="text-box__title">Years of Expertise</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <span class="sec-subtitle style2">About Driven Code</span>
                <h2 class="sec-title">Pioneers in Vehicle Software Solutions</h2>
                <p>
                    Specializing in advanced automotive coding, we transform vehicle capabilities through precision ECU tuning,
                    ADAS calibration, and module programming. Our technical expertise unlocks hidden potential in modern vehicle
                    electronics, delivering optimized performance and enhanced functionality.
                </p>
                <div class="progress-box">
                    <h3 class="progress-box__title">Software Programming Mastery</h3>
                    <span class="progress-box__number">95%</span>
                    <div class="progress-box__progress">
                        <div class="progress-box__bar" role="progressbar" style="width: 95%"
                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-box">
                    <h3 class="progress-box__title">System Diagnostics Accuracy</h3>
                    <span class="progress-box__number">98%</span>
                    <div class="progress-box__progress">
                        <div class="progress-box__bar" role="progressbar" style="width: 98%"
                            aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <a href="<?= base_url('services'); ?>" class="vs-btn mt-3">Explore Services <span class="vs-btn__bar"></span></a>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Counter Area Start -->
<section class="counter--layout2 space-top space-extra-bottom">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-auto col-md-6 mb-30">
                <div class="counter-block style2 count-start">
                    <div class="counter-block__icon">
                        <img src="assets/img/icons/counter-icon-a-1.svg" alt="counter icon 1" />
                    </div>
                    <div class="counter-block__body">
                        <span class="counter-block__number"><span class="counters" data-counter="1">1</span>k+</span>
                        <h3 class="counter-block__heading">Vehicles Optimized</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-auto col-md-6 mb-30">
                <div class="counter-block style2 count-start">
                    <div class="counter-block__icon">
                        <img src="assets/img/icons/counter-icon-a-2.svg" alt="counter icon 1" />
                    </div>
                    <div class="counter-block__body">
                        <span class="counter-block__number"><span class="counters" data-counter="10">10</span>+</span>
                        <h3 class="counter-block__heading">Years in Coding</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-auto col-md-6 mb-30">
                <div class="counter-block style2 count-start">
                    <div class="counter-block__icon">
                        <img src="assets/img/icons/counter-icon-a-3.svg" alt="counter icon 1" />
                    </div>
                    <div class="counter-block__body">
                        <span class="counter-block__number"><span class="counters" data-counter="1499">1499</span>+</span>
                        <h3 class="counter-block__heading">Modules Programmed</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-auto col-md-6 mb-30">
                <div class="counter-block style2 count-start">
                    <div class="counter-block__icon">
                        <img src="assets/img/icons/counter-icon-a-4.svg" alt="counter icon 1" />
                    </div>
                    <div class="counter-block__body">
                        <span class="counter-block__number"><span class="counters" data-counter="15">15</span>+</span>
                        <h3 class="counter-block__heading">Software Certifications</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Area End -->

<?= $this->endSection() ?>