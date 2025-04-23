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
            List of Bookings
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">Bookings</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table id="servicesTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Customer</th>
                                    <th>Service</th>
                                    <th>Appointment</th>
                                    <th>Service Cost</th>
                                    <th>Status</th>
                                    <th>Payment Method</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($bookings as $booking): ?>
                                    <tr>
                                        <td>#<?= $booking['id'] ?></td>
                                        <td>
                                            <?= esc($booking['fname'] . ' ' . $booking['lname']) ?><br>
                                            <small><?= esc($booking['email']) ?></small><br>
                                            <small><?= esc($booking['tel']) ?></small>
                                        </td>
                                        <td>
                                            <?= esc($booking['service_name']) ?><br>
                                            <small><?= $booking['duration'] ?> mins</small>
                                        </td>
                                        <td>
                                            <?= date('M d, Y', strtotime($booking['date'])) ?><br>
                                            <small><?= esc($booking['selected_time']) ?></small>
                                        </td>
                                        <td>£<?= number_format($booking['service_cost'], 2) ?></td>
                                        <td>
                                            <form action="<?= base_url('admin/bookings/update-status/' . $booking['id']) ?>" method="post">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="PATCH">
                                                <select name="status" class="form-select form-select-sm form-control" onchange="this.form.submit()">
                                                    <option value="pending" <?= $booking['status'] === 'pending' ? 'selected' : '' ?>>Pending</option>
                                                    <option value="confirmed" <?= $booking['status'] === 'confirmed' ? 'selected' : '' ?>>Confirmed</option>
                                                    <option value="completed" <?= $booking['status'] === 'completed' ? 'selected' : '' ?>>Completed</option>
                                                    <option value="cancelled" <?= $booking['status'] === 'cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                                </select>
                                            </form>
                                        </td>
                                        <td><?= ucfirst($booking['payment_method']) ?></td>
                                        <td><?= date('M d, Y H:i', strtotime($booking['created_at'])) ?></td>
                                        <td>
                                            <!-- <a href="<?= base_url('admin/bookings/view/' . $booking['id']) ?>" class="btn btn-sm btn-success mb-1">
                                                <i class="fa fa-eye"></i>
                                            </a> -->

                                            <form action="<?= base_url('admin/bookings/delete/' . $booking['id']) ?>" method="post" style="display:inline;">
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