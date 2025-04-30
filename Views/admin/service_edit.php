<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h2>Update Service</h2>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">Update Service</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form method="post" action="<?= base_url('/admin/services/update/' . $service['id']); ?>" enctype="multipart/form-data" class="form-horizontal">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">

                        <div class="box-body" style="padding: 30px;">
                            <div class="form-group">
                                <label>Service Name</label>
                                <input type="text" class="form-control" name="service_name" required
                                    value="<?= esc($service['service_name']) ?>">
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Booking Cost (£)</label>
                                        <input type="number" class="form-control" name="service_cost" step="0.01" required
                                            value="<?= esc($service['service_cost']) ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Available From</label>
                                        <input type="time" class="form-control" name="service_start_time" required
                                            value="<?= esc($service['service_start_time']) ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Available To</label>
                                        <input type="time" class="form-control" name="service_end_time" required
                                            value="<?= esc($service['service_end_time']) ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Current Image</label><br>
                                <?php if (!empty($service['service_image'])): ?>
                                    <img src="<?= base_url('uploads/services/' . $service['service_image']) ?>" width="100">
                                <?php else: ?>
                                    <span class="text-muted">No image uploaded</span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label>Change Image (optional)</label>
                                <input type="file" name="service_image" accept="image/*">
                            </div>

                            <div class="form-group">
                                <label>Service Description</label>
                                <textarea class="form-control" name="service_description" rows="4"><?= esc($service['service_description']) ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Service Duration (minutes)</label>
                                <input type="number" class="form-control" name="duration" min="15" max="480" required
                                    value="<?= esc($service['duration']) ?>">
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="service_availability" <?= $service['service_availability'] ? 'checked' : '' ?>>
                                    Available for Booking
                                </label>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Service</button>
                            <a href="<?= base_url('admin/services') ?>" class="btn btn-default">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>

<?= $this->endSection() ?>