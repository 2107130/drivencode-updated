<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h1>Contact Us</h1>
<p><a href="<?= base_url(); ?>">Home</a> > Contact Us</p>

<div>
    <h2>Get In Touch With Driven Code</h2>
    
    <p><strong>Phone:</strong> <a href="tel:+447867916240">+44 7867 916240</a></p>
    <p><strong>Email:</strong> <a href="mailto:m.z.islam2@wlv.ac.uk">m.z.islam2@wlv.ac.uk</a></p>
    <p><strong>Location:</strong> 178 Wardend Rd, Birmingham B8 2QZ, UK</p>

    <p><strong>Follow Us:</strong>
        <a href="#">Facebook</a> |
        <a href="#">Instagram</a> |
        <a href="#">Pinterest</a> |
        <a href="#">Twitter</a>
    </p>
</div>

<hr>

<h3>Send Us a Message</h3>
<form method="post" action="<?= base_url('contact') ?>">
    <?= csrf_field() ?>

    <?php if (session()->getFlashdata('success')): ?>
        <p style="color:green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>
    
    <?php if (isset($validation)): ?>
        <p style="color:red;"><?= $validation->listErrors() ?></p>
    <?php endif; ?>

    <label>First Name:</label><br>
    <input name="fname" type="text" value="<?= old('fname') ?>"><br><br>

    <label>Last Name:</label><br>
    <input name="lname" type="text" value="<?= old('lname') ?>"><br><br>

    <label>Email:</label><br>
    <input name="email" type="email" value="<?= old('email') ?>"><br><br>

    <label>Message:</label><br>
    <textarea name="message"><?= old('message') ?></textarea><br><br>

    <button type="submit">Send Message</button>
</form>

<hr>

<h3>Our Location</h3>
<div id="map" style="height: 400px; width: 100%;"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<script>
    var map = L.map('map').setView([52.5011, -1.8282], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
    }).addTo(map);

    L.marker([52.5011, -1.8282]).addTo(map)
        .bindPopup('178 Wardend Rd, Birmingham')
        .openPopup();

    L.circle([52.5011, -1.8282], {
        color: 'blue',
        fillColor: '#7fdad5',
        fillOpacity: 0.3,
        radius: 8046.72 // 5 miles
    }).addTo(map);
</script>

<?= $this->endSection() ?>
