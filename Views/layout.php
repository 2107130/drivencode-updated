<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= isset($page) ? ucfirst($page) : "Web" ?> | Driven Code</title>
  <meta name="description" content="Driven Code - for car services" />
  <meta name="author" content="vecuro" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="text-gray-800 font-sans bg-white">

  <!-- Header -->
  <header class="bg-blue-200 text-gray-900">
    <div class="container mx-auto px-4 py-4 flex flex-wrap items-center justify-between">
      <a href="<?= base_url(); ?>">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="Driven Code" class="h-20" />
      </a>

      <nav>
        <ul class="flex gap-4 list-none">
          <li><a href="<?= base_url(); ?>" class="hover:text-blue-600">Home</a></li>
          <li><a href="<?= base_url('services'); ?>" class="hover:text-blue-600">Services</a></li>
          <li><a href="<?= base_url('about'); ?>" class="hover:text-blue-600">About</a></li>
          <li><a href="<?= base_url('contact'); ?>" class="hover:text-blue-600">Contact</a></li>
        </ul>
      </nav>

      <a href="<?= base_url('make-appointment'); ?>" class="bg-blue-400 hover:bg-blue-300 text-white px-4 py-2 rounded">
        Book Appointment
      </a>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto px-4 py-8">
    <?= $this->renderSection('content') ?>
  </main>

  <!-- Footer -->
  <footer class="bg-blue-200 text-gray-900 mt-12">
    <div class="container mx-auto px-4 py-8">
      <div class="text-center mb-8">
        <img src="assets/img/logo.png" alt="Driven Code" class="h-20 mx-auto mb-4" />
        <p class="max-w-xl mx-auto">
          Specialists in vehicle software optimization - ECU tuning, module programming, and feature activation using OEM-grade diagnostics.
        </p>
      </div>

      <div class="flex flex-wrap justify-between gap-8">
        <div>
          <h3 class="text-lg font-semibold mb-2">Useful Links</h3>
          <ul class="space-y-1">
            <li><a href="<?= base_url(); ?>" class="hover:text-blue-600">Home</a></li>
            <li><a href="<?= base_url('about'); ?>" class="hover:text-blue-600">About</a></li>
            <li><a href="<?= base_url('services'); ?>" class="hover:text-blue-600">Services</a></li>
            <li><a href="<?= base_url('contact'); ?>" class="hover:text-blue-600">Contact</a></li>
          </ul>
        </div>

        <div>
          <h3 class="text-lg font-semibold mb-2">Contact Info</h3>
          <p>Phone: +44 7867 916240</p>
          <p>Email: m.z.islam2@wlv.ac.uk</p>
          <p>Address: 178 Wardend Rd, Birmingham B8 2QZ, UK</p>
        </div>
      </div>

      <div class="text-center mt-8 pt-4 border-t border-blue-300">
        <p>&copy; <?= date('Y') ?> Driven Code. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Toast Script -->
  <script>
    function showToast(message, type = 'success') {
      const toast = document.createElement('div');
      toast.className = `fixed top-5 right-5 z-50 px-4 py-2 rounded shadow-lg text-white ${type === 'error' ? 'bg-red-500' : 'bg-blue-400'}`;
      toast.textContent = message;
      document.body.appendChild(toast);
      setTimeout(() => toast.remove(), 5000);
    }

    <?php if (session()->has('toastr')) : ?>
      <?php $toastr = session('toastr'); ?>
      showToast("<?= addslashes($toastr['message']) ?>", "<?= $toastr['type'] ?>");
    <?php endif ?>
  </script>

</body>

</html>
