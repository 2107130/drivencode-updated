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
            Coded Cars
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">Coded Cars</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="<?= base_url('admin/add-new-coded-car'); ?>" style="float: right;" class="btn btn-primary"><b><i class="fa fa-fw fa-plus-square-o"></i> Add New Coded Car</b></a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="servicesTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Car Name</th>
                                    <th width="50%">Description</th>
                                    <th>Date of Coded</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cars as $car): ?>
                                    <tr>
                                        <td><?= esc($car['coded_car_name']) ?></td>
                                        <td><?= esc($car['coded_car_description']) ?></td>
                                        <td><?= esc(date('d M Y', strtotime($car['coded_car_date']))) ?></td>
                                        <td>
                                            <?php if (!empty($car['coded_car_image'])): ?>
                                                <a href="<?= base_url('uploads/coded_cars/' . $car['coded_car_image']) ?>" target="_blank">
                                                    <img src="<?= base_url('uploads/coded_cars/' . $car['coded_car_image']) ?>" class="img-thumbnail"
                                                        style="width: 80px; height: 60px; object-fit: cover;">
                                                </a>
                                            <?php else: ?>
                                                <span class="text-muted">No image</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <form action="<?= base_url('admin/coded_cars/delete/' . $car['id']) ?>" method="post" style="display:inline;">
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