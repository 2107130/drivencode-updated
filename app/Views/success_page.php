<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
    .card {
        border-radius: 0.875rem;
    }

    .card-header {
        border-radius: 0.875rem 0.875rem 0 0 !important;
    }

    dl dt {
        font-weight: 500;
        color: #495057;
    }

    dl dd {
        color: #6c757d;
    }
</style>

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

<div class="container-lg py-5">
    <!-- Confirmation Header -->
    <div class="text-center mb-2">
        <div class="d-flex justify-content-center align-items-center mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-check-circle-fill text-success me-3" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
            <div>
                <h1 class="h2 fw-bold text-dark mb-1">Booking Confirmed</h1>
                <p class="text-muted">Your appointment is scheduled successfully</p>
            </div>
        </div>
    </div>

    <!-- Booking Summary Card -->
    <div class="card border-0 shadow-lg mb-4">
        <div class="card-header bg-primary text-white py-3">
            <h5 class="card-title mb-0">Appointment Summary</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl class="row mb-0">
                        <dt class="col-sm-5">Booking ID</dt>
                        <dd class="col-sm-7 text-muted">#<?= $bookingData['id']; ?></dd>

                        <dt class="col-sm-5">Customer Name</dt>
                        <dd class="col-sm-7"><?= $bookingData['fname'] . ' ' . $bookingData['lname']; ?></dd>

                        <dt class="col-sm-5">Address</dt>
                        <dd class="col-sm-7">
                            <?= $bookingData['address'] ?: '<span class="text-muted">Not provided</span>'; ?>
                        </dd>

                        <dt class="col-sm-5">Contact Info</dt>
                        <dd class="col-sm-7">
                            <?= $bookingData['email']; ?><br>
                            <?= $bookingData['tel']; ?>
                        </dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    <dl class="row mb-0">
                        <dt class="col-sm-5">Service</dt>
                        <dd class="col-sm-7">
                            <strong><?= $bookingData['service_name']; ?></strong><br>
                            <span class="text-muted"><?= $bookingData['duration']; ?> minutes</span>
                        </dd>

                        <dt class="col-sm-5">Date & Time</dt>
                        <dd class="col-sm-7">
                            <?= date('F j, Y', strtotime($bookingData['date'])); ?> <?= date('g:i A', strtotime($bookingData['selected_time'])); ?>
                        </dd>

                        <dt class="col-sm-5">Payment Method</dt>
                        <dd class="col-sm-7 text-capitalize"><?= $bookingData['payment_method']; ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Details Card -->
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h6 class="mb-1">Payment Summary</h6>
                    <p class="text-muted mb-0">Service charge includes all applicable taxes</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="me-3">Total Amount:</span>
                        <h3 class="mb-0 text-success">£<?= number_format($bookingData['service_cost'], 2); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Action Buttons -->
    <div class="d-flex justify-content-center gap-3 mt-5">
        <a href="<?= base_url() ?>" class="btn btn-primary px-4 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door me-2" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
            </svg>
            Return Home
        </a>
        <button class="btn btn-outline-secondary px-4 py-2" onclick="window.print()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer me-2" viewBox="0 0 16 16">
                <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1" />
                <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm6 7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3a2 2 0 0 1-2 2zm1-4H5v1h6z" />
            </svg>
            Print Confirmation
        </button>
    </div>
</div>

<?= $this->endSection() ?>