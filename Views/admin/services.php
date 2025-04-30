<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<style>
    .image-preview-container {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
    }

    .img-thumbnail {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 2px;
        transition: transform 0.2s;
    }

    .img-thumbnail:hover {
        transform: scale(1.1);
        z-index: 1000;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List of Services
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">Services</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="<?= base_url('admin/services/add-new-service'); ?>" style="float: right;" class="btn btn-primary"><b><i class="fa fa-fw fa-plus-square-o"></i> Add New Service</b></a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <!-- In admin/cars view -->
                        <!-- In admin/cars view -->
                        <table id="servicesTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Service Name</th>
                                    <th>Cost (£)</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Duration (mins)</th>
                                    <th>Availability</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($services as $service): ?>
                                    <tr>
                                        <td><?= esc($service['service_name']) ?></td>
                                        <td>$<?= number_format($service['service_cost'], 2) ?></td>
                                        <td><?= esc($service['service_start_time']) ?></td>
                                        <td><?= esc($service['service_end_time']) ?></td>
                                        <td><?= esc($service['duration']) ?> mins</td>
                                        <td>
                                            <?= $service['service_availability'] ? '<span class="label label-success">Available</span>' : '<span class="label label-danger">Not Available</span>' ?>
                                        </td>
                                        <td>
                                            <?php if (!empty($service['service_image'])): ?>
                                                <a href="<?= base_url('uploads/services/' . $service['service_image']) ?>" target="_blank">
                                                    <img src="<?= base_url('uploads/services/' . $service['service_image']) ?>" class="img-thumbnail"
                                                        style="width: 80px; height: 60px; object-fit: cover;">
                                                </a>
                                            <?php else: ?>
                                                <span class="text-muted">No image</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?= esc($service['service_description']) ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/services/edit/' . $service['id']) ?>" class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <form action="<?= base_url('admin/services/delete/' . $service['id']) ?>" method="post" style="display:inline;">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>


                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?= $this->endSection() ?>