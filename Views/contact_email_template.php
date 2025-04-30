<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Form Submission</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #444444;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        }

        .header {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-radius: 4px 4px 0 0;
        }

        .logo {
            max-width: 150px;
            height: auto;
        }

        .content {
            padding: 30px 20px;
            background-color: #ffffff;
            border: 1px solid #eeeeee;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #666666;
            font-size: 12px;
        }

        .info-table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }

        .info-table td {
            padding: 10px;
            border-bottom: 1px solid #eeeeee;
        }

        .info-table td:first-child {
            font-weight: 600;
            width: 30%;
            color: #2c3e50;
        }

        .message-box {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            margin: 15px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2 style="color: #2c3e50; margin: 10px 0 0 0;">New Contact Form Submission</h2>
        </div>

        <div class="content">
            <p style="margin: 0 0 20px 0;">Hello Team,</p>
            <p style="margin: 0 0 25px 0;">We've received a new message through our contact form:</p>

            <table class="info-table">
                <tr>
                    <td>Name:</td>
                    <td><?= $fname ?> <?= $lname ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><a href="mailto:<?= $email ?>" style="color: #3498db; text-decoration: none;"><?= $email ?></a></td>
                </tr>
                <tr>
                    <td>Received:</td>
                    <td><?= date('F j, Y \a\t g:i a') ?></td>
                </tr>
            </table>

            <div style="margin: 25px 0;">
                <h3 style="color: #2c3e50; margin: 0 0 15px 0;">Message:</h3>
                <div class="message-box">
                    <?= nl2br($message) ?>
                </div>
            </div>

            <p style="margin: 25px 0 0 0;">Best regards,<br>Website Team</p>
        </div>

        <div class="footer">
            <p style="margin: 0 0 5px 0;">&copy; <?= date('Y') ?> Driven Code. All rights reserved.</p>
        </div>
    </div>
</body>

</html>