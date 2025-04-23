<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page) ? ucfirst($page) : "Web" ?> | Driven Code</title>
    <meta name="description" content="Driven Code - for car services" />
    <meta name="author" content="vecuro" />
    
    <!-- Simple CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
        }
        header, footer {
            background: #222;
            color: white;
            padding: 1rem;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 1rem;
        }
        nav a {
            color: white;
            text-decoration: none;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        main {
            padding: 2rem 0;
        }
        footer {
            margin-top: 2rem;
        }
        .logo {
            height: 80px;
        }
        .btn {
            display: inline-block;
            background: #0066cc;
            color: white;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <a href="<?= base_url(); ?>">
                    <img src="<?= base_url('assets/img/logo.png') ?>" alt="Driven Code" class="logo" />
                </a>
                
                <nav>
                    <ul>
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><a href="<?= base_url('services'); ?>">Services</a></li>
                        <li><a href="<?= base_url('about'); ?>">About</a></li>
                        <li><a href="<?= base_url('contact'); ?>">Contact</a></li>
                    </ul>
                </nav>
                
                <a href="<?= base_url('make-appointment'); ?>" class="btn">
                    Book Appointment
                </a>
            </div>
        </div>
    </header>

    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <div class="container">
            <div style="text-align: center; margin-bottom: 2rem;">
                <img src="assets/img/logo.png" alt="Driven Code" style="height: 80px;" />
                <p>Specialists in vehicle software optimization - ECU tuning, module programming, and feature activation using OEM-grade diagnostics.</p>
            </div>
            
            <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 2rem;">
                <div>
                    <h3>Useful Links</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><a href="<?= base_url('about'); ?>">About</a></li>
                        <li><a href="<?= base_url('services'); ?>">Services</a></li>
                        <li><a href="<?= base_url('contact'); ?>">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3>Contact Info</h3>
                    <p>Phone: +44 7867 916240</p>
                    <p>Email: m.z.islam2@wlv.ac.uk</p>
                    <p>Address: 178 Wardend Rd, Birmingham B8 2QZ, UK</p>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 2rem; padding-top: 1rem; border-top: 1px solid #444;">
                <p>Copyright &copy; <?= date('Y') ?> Driven Code. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Basic JavaScript -->
    <script>
        // Simple toast notification function
        function showToast(message, type = 'success') {
            const toast = document.createElement('div');
            toast.style.position = 'fixed';
            toast.style.top = '20px';
            toast.style.right = '20px';
            toast.style.padding = '10px 20px';
            toast.style.background = type === 'error' ? '#ff4444' : '#00C851';
            toast.style.color = 'white';
            toast.style.borderRadius = '4px';
            toast.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            toast.style.zIndex = '1000';
            toast.textContent = message;
            
            document.body.appendChild(toast);
            
            setTimeout(() => {
                toast.remove();
            }, 5000);
        }

        // Display any server-side messages
        <?php if (session()->has('toastr')) : ?>
            <?php $toastr = session('toastr'); ?>
            showToast("<?= addslashes($toastr['message']) ?>", "<?= $toastr['type'] ?>");
        <?php endif ?>
    </script>
</body>

</html>