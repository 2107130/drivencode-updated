<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to DriveNCode</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            line-height: 1.6;
            padding-top: 50px; /* Adjust for fixed nav bar */
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #1E90FF; /* Blue color for the header */
        }

        /* Navbar Styles */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #1E90FF; /* Blue background */
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            margin: 0 20px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #0d6efd; /* Darker blue for hover effect */
        }

        /* Section Styles */
        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #555;
        }

        .highlight {
            color: #1E90FF;
            font-weight: bold;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h1>Welcome to DriveNCode</h1>
        <p>DriveNCode is your go-to solution for <span class="highlight">vehicle coding and customization</span>.</p>
        <p>We specialize in modifying car software for <span class="highlight">Audi, BMW, Skoda, Seat, and Volkswagen (VW)</span>.</p>
        <p>Our services include unlocking hidden features, customizing digital dashboards, and enhancing vehicle performance.</p>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 DriveNCode | All Rights Reserved</p>
    </footer>

</body>
</html>
