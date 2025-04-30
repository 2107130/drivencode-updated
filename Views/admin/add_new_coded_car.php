<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h2>Add New Coded Car</h2>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">Add New Coded Car</a></li>
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

                    <form method="post" action="<?= base_url('/admin/coded-cars/store'); ?>" enctype="multipart/form-data" class="form-horizontal">
                        <?= csrf_field() ?>

                        <div class="box-body" style="padding: 30px;">
                            <div class="form-group">
                                <label>Coded Car Name</label>
                                <input type="text" class="form-control" name="coded_car_name" required
                                    placeholder="Enter coded car name" value="<?= old('coded_car_name') ?>">
                            </div>

                            <div class="form-group">
                                <label>Coded Car Image</label>
                                <input type="file" name="coded_car_image" accept="image/*" required>
                                <p class="help-block">Upload car image (JPEG, PNG, JPG. Max 5MB)</p>
                            </div>
                            <div class="form-group">
                                <label>Date of Coded</label>
                                <input type="date" class="form-control" name="coded_car_date" required
                                    value="<?= old('coded_car_date') ?>">
                            </div>

                            <div class="form-group">
                                <label>Coded Car Description</label>
                                <textarea class="form-control" name="coded_car_description" rows="4"
                                    placeholder="Describe the coded car features and specifications"><?= old('coded_car_description') ?></textarea>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Add New Coded Car</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.row -->
    </section>
</div>

<?= $this->endSection() ?>