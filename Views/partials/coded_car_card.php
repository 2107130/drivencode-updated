<div class="col-lg-4 coded-car-item">
    <div class="vs-blog style3">
        <div class="blog-img" style="background: #ededf1;">
            <a href="#"><img class="blog-img__img" src="<?= base_url('uploads/coded_cars/' . esc($car['coded_car_image'])) ?>" alt="<?= esc($car['coded_car_name']) ?>"></a>
            <div class="vs-blog__meta">
                <span class="blog-date">
                    <?= date('d', strtotime($car['coded_car_date'])) ?>
                    <span><?= date('M, Y', strtotime($car['coded_car_date'])) ?></span>
                </span>
            </div>
        </div>
        <div class="blog-content" style="padding: 10px;">
            <p><?= esc($car['coded_car_description']) ?></p>
        </div>
    </div>
</div>