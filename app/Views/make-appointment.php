<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
    .time-slot {
        padding: 8px 5px;
        border: 2px solid #ddd;
        border-radius: 4px;
        text-align: center;
        cursor: pointer;
        margin: 2px;
        font-size: 0.9rem;
        transition: all 0.2s;
    }

    .time-slot:hover {
        border-color: #007bff;
    }

    .time-slot.selected {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }

    .section-subtitle {
        font-size: 15px;
    }

    .billig-sec {
        margin: 10px;
        border: 1px solid #dfcece;
        padding: 10px;
        box-shadow: 1px 1px 4px -3px;
    }

    .payment-select {
        padding: 12px 15px;
        border: 2px solid #ddd;
        border-radius: 8px;
        appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23007bff"><path d="M7 10l5 5 5-5z"/></svg>');
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 16px;
    }

    .payment-select:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 123, 255, .25);
    }

    @media (max-width: 576px) {
        .time-slot {
            font-size: 0.8rem;
            padding: 6px 3px;
        }
    }
</style>


<!--==============================
    Breadcumb
    ============================== -->
<div class="breadcumb-wrapper" data-bg-src="<?= base_url('assets/img/bg/breadcumb-bg.png'); ?>">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Book An Appointment</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li>Appointment</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Appointment -->
<div class="space-top space-bottom z-index-common">
    <div class="bg-shape1">
        <img class="shape1 end-0 top-0" src="assets/img/shapes/shape-5.svg" alt="shapes">
        <img class="shape2" src="assets/img/shapes/shape-6.svg" alt="shapes">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="title-area text-center">
                    <h2 class="sec-title h2">Schedule Coding Service</h2>
                </div>

                <form class="form-style2" id="bookingForm" method="POST">
                    <div class="row gx-20">
                        <!-- User Information -->
                        <div class="col-md-6 form-group">
                            <input class="form-control" type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input class="form-control" type="text" name="lname" placeholder="Last Name" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input class="form-control" type="tel" name="tel" placeholder="Phone Number" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <input class="form-control" type="text" name="address" placeholder="Address" required>
                        </div>

                        <!-- Vehicle Info -->
                        <div class="col-md-6 form-group">
                            <input class="form-control" id="date" type="date" name="date" required>
                        </div>

                        <!-- Service Selection -->
                        <div class="col-md-6 form-group">
                            <select class="form-control service-select" name="service" id="service" required>
                                <option value="">Select Service</option>
                                <!-- PHP loop for services -->
                                <?php foreach ($services as $service): ?>
                                    <option value="<?= esc($service['id']) ?>"
                                        data-price="<?= esc($service['service_cost']) ?>"
                                        data-duration="<?= esc($service['duration']) ?>"
                                        data-start="<?= esc($service['service_start_time']) ?>"
                                        data-end="<?= esc($service['service_end_time']) ?>">
                                        <?= esc($service['service_name']) ?> (£<?= esc($service['service_cost']) ?> - <?= esc($service['duration']) ?>mins)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Time Slots -->
                        <div class="col-12">
                            <h4 class="section-subtitle mb-3">Available Time Slots</h4>
                            <div class="row time-row" id="timeSlots"></div>
                            <input type="hidden" name="selected_time" id="selectedTime">
                        </div>

                        <div class="col-md-12">
                            <div class="row billig-sec">
                                <div class="col-md-6">
                                    <div class="payment-box">
                                        <h4 class="section-subtitle">Payment Method</h4>
                                        <div class="payment-methods compact">
                                            <select class="form-control payment-select" name="payment_method" id="paymentMethod" required>
                                                <option value="cash">Cash</option>
                                                <option value="credit">Credit Card (Visa/Mastercard)</option>
                                                <option value="paypal">PayPal</option>
                                                <option value="bank">Bank Transfer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="summary-box compact">
                                        <h4 class="section-subtitle">Order Summary</h4>
                                        <div class="summary-item">
                                            <span class="service-name">Service:</span>
                                            <span id="selectedServiceName">-</span>
                                        </div>
                                        <div class="summary-item">
                                            <span class="duration">Duration:</span>
                                            <span id="serviceDuration">-</span>
                                        </div>
                                        <div class="total-amount">
                                            Total: £<span id="totalPrice">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 form-group text-center">
                            <button type="submit" id="confirmBookingButton" class="vs-btn confirm-booking">Confirm Booking</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->
<!-- FAQ Area -->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="title-area text-center">
                    <span class="sec-subtitle style4">CODING FAQs</span>
                    <h4>Technical Solutions for Modern Vehicles</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="accordion-style1">
                    <div class="accordion" id="accordionExample">
                        <!-- ECU Remapping -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Is ECU remapping safe for my vehicle?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our ECU remapping process uses professional-grade tools and follows manufacturer protocols to ensure complete safety.
                                    We perform thorough system checks before and after programming to maintain vehicle integrity and performance.
                                </div>
                            </div>
                        </div>

                        <!-- Warranty -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Will coding void my manufacturer warranty?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our coding services are completely reversible and leave no permanent traces. We use OEM-compatible software
                                    that maintains factory warranty compliance when performed by our certified technicians.
                                </div>
                            </div>
                        </div>

                        <!-- Fuel Efficiency -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can coding improve fuel efficiency?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, our ECU optimizations can enhance fuel economy by up to 15% through improved combustion management
                                    and transmission mapping, while maintaining or improving performance characteristics.
                                </div>
                            </div>
                        </div>

                        <!-- Service Duration -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How long does vehicle coding typically take?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Most coding services take 1-3 hours depending on complexity. Basic feature activations can be completed in under
                                    60 minutes, while full ECU remapping may require 2-3 hours including diagnostics and testing.
                                </div>
                            </div>
                        </div>

                        <!-- Diagnostics -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Do coding modifications affect dealership diagnostics?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our coding maintains full dealership diagnostic compatibility. All modifications are performed using
                                    factory-approved protocols and can be easily reverted for official servicing if required.
                                </div>
                            </div>
                        </div>

                        <!-- Feature Activation -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Can you activate hidden features on my vehicle?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we specialize in unlocking manufacturer-hidden features like enhanced lighting configurations,
                                    performance modes, and comfort functions. Availability depends on your vehicle's hardware capabilities
                                    and regional specifications.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Area End -->


<?= $this->endSection() ?>