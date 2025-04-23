<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h1>About Us</h1>
<p><a href="<?= base_url(); ?>">Home</a> > About Us</p>

<h2>About Driven Code</h2>

<p><strong>Pioneers in Vehicle Software Solutions</strong></p>

<p>
    Specializing in advanced automotive coding, we transform vehicle capabilities through precision ECU tuning,
    ADAS calibration, and module programming. Our technical expertise unlocks hidden potential in modern vehicle
    electronics, delivering optimized performance and enhanced functionality.
</p>

<h3>Our Strengths</h3>
<ul>
    <li><strong>Software Programming Mastery:</strong> 95%</li>
    <li><strong>System Diagnostics Accuracy:</strong> 98%</li>
</ul>

<p><a href="<?= base_url('services'); ?>">Explore Our Services</a></p>

<hr>

<h3>Quick Stats</h3>
<ul>
    <li><strong>Vehicles Optimized:</strong> 1k+</li>
    <li><strong>Years in Coding:</strong> 10+</li>
    <li><strong>Modules Programmed:</strong> 1499+</li>
    <li><strong>Software Certifications:</strong> 15+</li>
</ul>

<?= $this->endSection() ?>
