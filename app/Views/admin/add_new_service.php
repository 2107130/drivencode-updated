<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h2>Add New Service</h2>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">Add New Service</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?= base_url('/admin/services/store'); ?>" enctype="multipart/form-data" class="form-horizontal">
                        <?= csrf_field() ?>

                        <div class="box-body" style="padding: 30px;">
                            <div class="form-group">
                                <label>Service Name</label>
                                <input type="text" class="form-control" name="service_name" required
                                    placeholder="Premium Car Coding" value="<?= old('service_name') ?>">
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Booking Cost (£)</label>
                                        <input type="number" class="form-control" name="service_cost" step="0.01"
                                            required placeholder="49.99" value="<?= old('service_cost') ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Available From</label>
                                        <input type="time" class="form-control" name="service_start_time"
                                            required value="<?= old('service_start_time') ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Available To</label>
                                        <input type="time" class="form-control" name="service_end_time"
                                            required value="<?= old('service_end_time') ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Service Image</label>
                                <input type="file" name="service_image" accept="image/*" required>
                                <p class="help-block">Upload service image (JPEG, PNG, JPG. Max 5MB)</p>
                            </div>

                            <div class="form-group">
                                <label>Service Description</label>
                                <textarea class="form-control" name="service_description" rows="4"
                                    placeholder="Detailed service description and benefits"><?= old('service_description') ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Service Duration (minutes)</label>
                                <input type="number" class="form-control" name="duration"
                                    min="15" max="480" required placeholder="60"
                                    value="<?= old('duration') ?>">
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="service_availability" checked>
                                    Available for Booking
                                </label>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Add New Service</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.row -->
    </section>
</div>

<?= $this->endSection() ?>