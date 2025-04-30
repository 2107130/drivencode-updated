<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <!-- Bootstrap -->
    <link href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url('plugins/datatables/dataTables.bootstrap.css') ?>" rel="stylesheet">
    <link href="<?= base_url('dist/css/AdminLTE.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('dist/css/skins/_all-skins.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">


</head>

<body class="skin-blue">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?= base_url('admin'); ?>" class="logo"><b>Admin </b>Panel</a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <li class="dropdown website">
                            <a href="<?= base_url(); ?>" target="_blank" style="padding: 5px 7px;margin-top: 9px;" class="btn bg-navy">Website</a>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url('dist/img/avatar5.png'); ?>" class="user-image" alt="User Image" />
                                <span class="hidden-xs"><?= session()->get('username'); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= base_url('dist/img/avatar5.png'); ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <small>Member since <?= date('M, Y', strtotime(session()->get('admin_from'))) ?></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= base_url('admin/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="<?= isset($page) && $page == 'dashboard' ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin'); ?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?= isset($page) && $page == 'services' ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/services'); ?>">
                            <i class="fa fa-wrench"></i>
                            <span>Services</span>
                        </a>
                    </li>
                    <li class="<?= isset($page) && $page == 'cars' ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/coded-cars'); ?>">
                            <i class="fa fa-car"></i>
                            <span>Coded Cars</span>
                        </a>
                    </li>
                    <li class="<?= isset($page) && $page == 'bookings' ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/bookings'); ?>">
                            <i class="fa fa-calendar"></i>
                            <span>Appointments</span>
                        </a>
                    </li>
                    <li class="<?= isset($page) && $page == 'customers' ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/customers-quires'); ?>">
                            <i class="fa fa-envelope"></i>
                            <span>Contact Inquiries</span>
                        </a>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <main>
            <?= $this->renderSection('content') ?>
        </main>


        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; <?= date('Y'); ?> <a href="<?= base_url(); ?>">Driven Code</a>.</strong> All rights reserved.
        </footer>
    </div><!-- ./wrapper -->
    <script src="<?= base_url('plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
    <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('plugins/datatables/jquery.dataTables.js') ?>"></script>
    <script src="<?= base_url('plugins/datatables/dataTables.bootstrap.js') ?>"></script>
    <script src="<?= base_url('plugins/slimScroll/jquery.slimscroll.min.js') ?>"></script>
    <script src="<?= base_url('plugins/fastclick/fastclick.min.js') ?>"></script>
    <script src="<?= base_url('dist/js/app.min.js') ?>"></script>
    <script src="<?= base_url('dist/js/demo.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <!-- Add this after toastr initialization -->
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        <?php if (session()->has('toastr')) : ?>
            <?php $toastr = session('toastr'); ?>
            toastr.<?= $toastr['type'] ?>(
                <?php if (isset($toastr['errors'])) : ?> <?php
                                                            $errorMessages = [];
                                                            foreach ($toastr['errors'] as $error) {
                                                                if (is_array($error)) {
                                                                    $errorMessages = array_merge($errorMessages, $error);
                                                                } else {
                                                                    $errorMessages[] = $error;
                                                                }
                                                            }
                                                            ?> "<ul><li><?= implode('</li><li>', $errorMessages) ?></li></ul>",
                    'Form Validation Error'
                <?php else : ?> "<?= addslashes($toastr['message']) ?>"
                <?php endif ?>
            );
        <?php endif ?>
    </script>
    <script>
        $(function() {
            $('#servicesTable').DataTable({
                paging: true,
                lengthChange: false,
                searching: false,
                ordering: true,
                info: true,
                autoWidth: false
            });
        });
    </script>



</body>

</html>