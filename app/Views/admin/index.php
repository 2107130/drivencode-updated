<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Dashboard <small>Control panel</small></h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">
        <!-- First Row -->
        <div class="row">
            <!-- Total Services -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3><?= $totalServices ?></h3>
                        <p>Total Services</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-wrench"></i>
                    </div>
                    <a href="<?= base_url('admin/services') ?>" class="small-box-footer">
                        Manage Services <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- Available Services -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?= $availableServices ?></h3>
                        <p>Available Services</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-checkmark-circled"></i>
                    </div>
                    <a href="<?= base_url('admin/services') ?>" class="small-box-footer">
                        View Availability <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- Total Appointments -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3><?= $totalAppointments ?></h3>
                        <p>Total Appointments</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-calendar"></i>
                    </div>
                    <a href="<?= base_url('admin/bookings') ?>" class="small-box-footer">
                        View Appointments <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- Pending Appointments -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?= $pendingAppointments ?></h3>
                        <p>Pending Appointments</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clock"></i>
                    </div>
                    <a href="<?= base_url('admin/bookings') ?>" class="small-box-footer">
                        Review Pending <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Second Row - Appointment Statuses -->
        <div class="row">


            <!-- Confirmed Appointments -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $activeAppointments ?></h3>
                        <p>Confirmed Appointments</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-checkmark"></i>
                    </div>
                    <a href="<?= base_url('admin/bookings') ?>" class="small-box-footer">
                        View Confirmed <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- Completed Appointments -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?= $completedAppointments ?></h3>
                        <p>Completed Appointments</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-thumbsup"></i>
                    </div>
                    <a href="<?= base_url('admin/bookings') ?>" class="small-box-footer">
                        View History <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- Cancelled Appointments -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?= $cancelledAppointments ?></h3>
                        <p>Cancelled Appointments</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-close-circled"></i>
                    </div>
                    <a href="<?= base_url('admin/bookings') ?>" class="small-box-footer">
                        View Cancellations <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>



            <!-- Total Inquiries -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-teal">
                    <div class="inner">
                        <h3><?= $totalInquiries ?></h3>
                        <p>Customer Inquiries</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-chatboxes"></i>
                    </div>
                    <a href="<?= base_url('admin/customers-quires') ?>" class="small-box-footer">
                        View Inquiries <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
<?= $this->endSection() ?>