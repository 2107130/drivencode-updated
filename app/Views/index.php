<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="hero hero--layout3">
  <div
    class="vs-carousel vsslider1"
    data-slide-show="1"
    data-fade="true"
    data-arrows="false"
    data-dots="true"
    data-xl-dots="true"
    data-ml-dots="true">
    <div>
      <div class="hero-inner3">
        <div
          class="hero-bg3"
          data-bg-src="<?= base_url('assets/img/hero/hero-1-1.jpg'); ?>"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-9">
              <h1 class="hero-title">
                Unlock Your Vehicle's Full <span>Potential</span>
              </h1>
              <p class="hero-text">
                Transform your driving experience through advanced vehicle coding. We specialize in ECU tuning, software customization, and activating hidden features to optimize your car's performance and capabilities.
              </p>
              <a href="<?= base_url('make-appointment') ?>" class="vs-btn style16">
                Schedule Coding Service
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="hero-inner3">
        <div
          class="hero-bg3"
          data-bg-src="<?= base_url('assets/img/hero/hero-1-2.jpg'); ?>"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-9">
              <h1 class="hero-title">
                Customize Your Driving <span>Experience</span>
              </h1>
              <p class="hero-text">
                From LED light configurations to advanced driver assistance systems, we program your vehicle's software to match your unique preferences and driving style.
              </p>
              <a href="<?= base_url('make-appointment') ?>" class="vs-btn style16">
                Schedule Coding Service
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="hero-inner3">
        <div
          class="hero-bg3"
          data-bg-src="<?= base_url('assets/img/hero/hero-1-3.jpg'); ?>"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-9">
              <h1 class="hero-title">
                Expert Vehicle Software <span>Solutions</span>
              </h1>
              <p class="hero-text">
                Professional coding services for enhanced diagnostics, module programming, and electronic system optimization. Keep your car's software updated with the latest features and improvements.
              </p>
              <a href="<?= base_url('make-appointment') ?>" class="vs-btn style16">
                Schedule Coding Service
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Service Area -->
<section class="service--layout3 space-extra-bottom" data-bg-src="assets/img/bg/coding-services-bg.png">
  <div class="container">
    <div class="row">
      <?php foreach ($services as $service): ?>
        <div class="col-lg-4 col-6">
          <div class="service-block--style2">
            <div class="service-block__thumb">
              <?php if (!empty($service['service_image'])): ?>
                <img src="<?= base_url('uploads/services/' . $service['service_image']) ?>" alt="services">
              <?php else: ?>
                <img src="assets/img/service/default-image.jpg" alt="services">
              <?php endif; ?>
            </div>
            <div class="service-block__content">
              <h3 class="service-block__title h5 mt-5"><a href="service-details.html"><?= esc($service['service_name']) ?></a></h3>
              <p class="service-block__text"><?= esc($service['service_description']) ?></p>
              <a href="<?= base_url('make-appointment'); ?>" class="vs-btn style13">Book An Appointment</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Service Area  End -->
<!-- Coding Process Area Start -->
<section class="process--layout2 z-index-common space-top" data-bg-src="<?= base_url('assets/img/bg/process-2-1.jpg'); ?>">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-7 mx-auto">
        <div class="title-area white-title text-center">
          <span class="sec-subtitle style3">Our Coding Process</span>
          <h2 class="sec-title">
            Precision Software Solutions for Modern Vehicles
          </h2>
        </div>
      </div>
    </div>
    <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1">
      <div class="process-block--style2 col-lg-3">
        <div class="process-block__body">
          <div class="process-block__icon">
            <i class="fas fa-laptop-code"></i>
            <span class="process-block__number">01</span>
          </div>
          <div class="process-block__content">
            <h2 class="process-block__title">Vehicle Diagnostics</h2>
            <p class="process-block__text">
              Comprehensive electronic system scan and software analysis to identify customization opportunities
            </p>
          </div>
        </div>
      </div>
      <div class="process-block--style2 col-lg-3">
        <div class="process-block__body">
          <div class="process-block__icon">
            <i class="fas fa-cogs"></i>
            <span class="process-block__number">02</span>
          </div>
          <div class="process-block__content">
            <h2 class="process-block__title">Custom Programming</h2>
            <p class="process-block__text">
              Tailored ECU remapping and feature activation using industry-leading coding platforms
            </p>
          </div>
        </div>
      </div>
      <div class="process-block--style2 col-lg-3">
        <div class="process-block__body">
          <div class="process-block__icon">
            <i class="fas fa-check-double"></i>
            <span class="process-block__number">03</span>
          </div>
          <div class="process-block__content">
            <h2 class="process-block__title">System Verification</h2>
            <p class="process-block__text">
              Rigorous testing and validation of all software modifications to ensure optimal performance
            </p>
          </div>
        </div>
      </div>
      <div class="process-block--style2 col-lg-3">
        <div class="process-block__body">
          <div class="process-block__icon">
            <i class="fas fa-life-ring"></i>
            <span class="process-block__number">04</span>
          </div>
          <div class="process-block__content">
            <h2 class="process-block__title">Ongoing Support</h2>
            <p class="process-block__text">
              Continuous software updates and technical support for your vehicle's digital ecosystem
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Coding Process Area End -->

<!-- Service Request Area Start -->
<!-- <section class="app--layout1">
  <div class="container">
    <div class="app-container" data-bg-src="assets/img/bg/coding-interface-bg.svg">
      <div class="app-container-img" data-bg-src="assets/img/bg/coding-desk.jpg"></div>
      <div class="row align-items-center gx-0">
        <div class="col-lg-6">
          <div class="app-content">
            <div class="white-title">
              <h2 class="sec-title">Schedule Your Vehicle Software Optimization</h2>
            </div>
            <a class="call-block" href="tel:+052699256693">
              <i class="fas fa-headset"></i>
              <span>24/7 Technical Support: 052 (699) 256 - 693</span>
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <form class="form-style1 ajax-contact" action="mail.php" method="post">
            <h4 class="mb-25 sec-title">Coding Service Request</h4>
            <div class="row gx-20">
              <div class="col-md-6 form-group">
                <input class="form-control" type="text" name="name" id="name" placeholder="Vehicle Owner" />
                <i class="fal fa-user"></i>
              </div>
              <div class="col-md-6 form-group">
                <input class="form-control" type="email" name="email" id="email" placeholder="Contact Email" />
                <i class="fal fa-envelope"></i>
              </div>
              <div class="col-md-6 form-group">
                <input class="form-control" type="text" name="vehicle" id="vehicle" placeholder="Vehicle Model/Year" />
                <i class="fal fa-car"></i>
              </div>
              <div class="col-md-6 form-group">
                <select name="service" id="service">
                  <option value="Select Service">Select Coding Service</option>
                  <option value="ECU Remapping">ECU Performance Tuning</option>
                  <option value="Feature Activation">Hidden Feature Activation</option>
                  <option value="Software Update">Module Software Update</option>
                  <option value="ADAS Calibration">ADAS Recalibration</option>
                  <option value="Custom Coding">Custom Function Programming</option>
                </select>
              </div>
              <div class="col-12 form-group">
                <textarea class="form-control" name="message" id="message" placeholder="Specific Requirements" rows="3"></textarea>
                <i class="fal fa-comment"></i>
              </div>
              <div class="col-md-12 form-group">
                <button class="vs-btn w-100 justify-content-center" type="submit">
                  Request Coding Service<span class="vs-btn__bar"></span>
                </button>
              </div>
            </div>
          </form>
          <p class="form-messages mb-0 mt-3">Our coding specialists will contact you within 1 business hour</p>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- Service Request Area End -->


<!-- Work Area Start -->
<section class="work--layout1 space-top space-extra-bottom z-index-common" data-bg-src="<?= base_url('assets/img/bg/work-bg.png'); ?>">
  <div class="element"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-6 col-lg-8 mb-30">
        <div class="white-title mb-50">
          <span class="sec-subtitle style6">Our Coding Methodology</span>
          <h2 class="sec-title">
            Advanced Software Solutions for Automotive Systems
          </h2>
        </div>
        <div class="work-list">
          <div class="work-item">
            <div class="work-item__icon">
              <i class="fas fa-laptop-code"></i>
            </div>
            <div class="work-item__content">
              <h3 class="work-item__title">Advanced Coding Tools</h3>
              <p class="work-item__text">
                Utilizing industry-leading software platforms and OEM-grade diagnostic interfaces for precise vehicle programming
              </p>
            </div>
          </div>
          <div class="work-item">
            <div class="work-item__icon">
              <i class="fas fa-user-shield"></i>
            </div>
            <div class="work-item__content">
              <h3 class="work-item__title">Certified Programmers</h3>
              <p class="work-item__text">
                ASE-certified coding specialists with manufacturer-specific training in ECU programming and module configuration
              </p>
            </div>
          </div>
          <div class="work-item">
            <div class="work-item__icon">
              <i class="fas fa-check-double"></i>
            </div>
            <div class="work-item__content">
              <h3 class="work-item__title">Validation Protocols</h3>
              <p class="work-item__text">
                Comprehensive post-coding verification process including system diagnostics and test drives to ensure flawless operation
              </p>
            </div>
          </div>
          <div class="work-item">
            <div class="work-item__icon">
              <i class="fas fa-sync-alt"></i>
            </div>
            <div class="work-item__content">
              <h3 class="work-item__title">Continuous Updates</h3>
              <p class="work-item__text">
                Lifetime access to software upgrades and compatibility maintenance for evolving vehicle systems
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-4 mb-30">
        <div class="work-right text-end">
          <a href="https://www.youtube.com/watch?v=YOUR_CODING_DEMO_VIDEO" class="play-btn style2 popup-video">
            <i class="fas fa-play"></i>
            <div class="play-text">
              <span>Watch Our</span>
              <strong>Coding Process</strong>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Work Area End -->


<?= $this->endSection() ?>