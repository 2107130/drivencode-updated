<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation & Invoice</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            color: #555;
        }

        .container {
            width: 600px;
            margin: 20px auto;
            background-color: #efefef;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #2D87F0;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .invoice-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .invoice-header img {
            width: 150px;
            margin-bottom: 10px;
        }

        .invoice-header p {
            font-size: 16px;
            color: #555;
        }

        .customer-info,
        .service-info,
        .payment-info {
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
            border-bottom: 2px solid #e3e3e3;
            padding-bottom: 5px;
        }

        .info-item {
            margin-bottom: 8px;
            font-size: 14px;
        }

        .info-item span {
            font-weight: bold;
        }

        .total-amount {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: #2D87F0;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #999;
            margin-top: 40px;
        }

        .footer p {
            margin: 5px 0;
        }

        .payment-methods {
            margin-top: 10px;
            font-size: 14px;
            text-align: center;
        }

        .payment-methods span {
            font-weight: bold;
        }

        .line-item {
            border-top: 1px solid #e3e3e3;
            padding-top: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="invoice-header">
            <p>Your Service Booking Confirmation & Invoice</p>
        </div>

        <h1>Booking Confirmation</h1>

        <div class="customer-info">
            <div class="section-title">Customer Information</div>
            <div class="info-item"><span>Name:</span> <?= esc($fname) ?> <?= esc($lname) ?></div>
            <div class="info-item"><span>Email:</span> <?= esc($email) ?></div>
            <div class="info-item"><span>Phone:</span> <?= esc($tel) ?></div>
            <div class="info-item"><span>Address:</span> <?= esc($address) ?></div>
        </div>

        <div class="service-info">
            <div class="section-title">Service Information</div>
            <div class="info-item"><span>Service Name:</span> <?= esc($service_name) ?></div>
            <div class="info-item"><span>Service Duration:</span> <?= esc($service_duration) ?> mins</div>
            <div class="info-item"><span>Booking Date:</span> <?= esc($date) ?></div>
            <div class="info-item"><span>Time:</span> <?= esc($selected_time) ?></div>
        </div>

        <div class="payment-info">
            <div class="section-title">Payment Information</div>
            <div class="info-item"><span>Payment Method:</span> <?= esc($payment_method) ?></div>
            <div class="info-item"><span>Service Cost:</span> £<?= esc($service_cost) ?></div>
        </div>

        <div class="total-amount">
            <div><span>Total Amount:</span> £<?= esc($service_cost) ?></div>
        </div>

        <div class="footer">
            <p>Thank you for booking with us!</p>
            <p>If you have any questions or need to make changes to your booking, please contact us at any time.</p>
            <p>Best regards,<br><a href="<?= base_url() ?>" target="_blank" rel="noopener noreferrer">Driven Code Team</a></p>
        </div>
    </div>
</body>

</html>