<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Umucyo School</title>
    <link rel="stylesheet" href="../CSS/homes_style.css">
    <link rel="shortcut icon" href="../IMAGES/logo.PNG" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .background-section {
            background: url('../IMAGES/Picture_2.jpg') no-repeat center center/cover;
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            padding: 20px;
        }

        .content-container {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 80%;
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .section-card {
            width: 45%; /* Adjust width of individual sections */
        }

        .section-card h2 {
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .section-card ul {
            list-style: none;
            padding: 0;
        }

        .section-card ul li {
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .background-section h1 {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 3rem;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-size: 40px;" href="javascript:void(0)"> 
                <img class="rounded-circle" style="width: 120px;" src="../IMAGES/logo.PNG" alt="logo">UMUCYO<span style="color: rgb(43, 142, 255);">SCHOOL</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link btn btn-primary" style="font-size: 20px;" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link btn btn-primary me-2 active" style="font-size: 20px;" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link btn btn-primary" style="font-size: 20px;" href="contactus.php">Contact</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link btn btn-primary" style="font-size: 20px;" href="academic.php">Academic</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Background Section -->
    <div class="background-section">
        <h1>Welcome to Umucyo School</h1>
        <div class="content-container">
            <!-- Overview Section -->
            <div class="section-card">
                <h2>Overview</h2>
                <p>At Umucyo School, we focus on academic excellence, character development, and community building. We provide a safe and inclusive environment that fosters growth and innovation for all students.</p>
            </div>

            <!-- Contact Information Section -->
            <div class="section-card">
                <h2>Contact Information</h2>
                <ul>
                    <li>Email: umucyoschool@gmail.com</li>
                    <li>Phone: +250 783 728 359</li>
                    <li>Address: 33M7+2Q8, KG 667 Street, Kigali</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Offers</h5>
                    <p>. Nursery</p>
                    <p>. Primary 1 - 6</p>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <ul class="list-unstyled">
                        <li>Email: umucyoschool@gmail.com</li>
                        <li>Phone: +250 783 728 359</li>
                        <li>Address: 33M7+2Q8, KG 667 Street, Kigali</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i> Facebook</a>
                    <a href="#" class="text-white me-2"><i class="bi bi-youtube"></i> YouTube</a>
                    <a href="#" class="text-white"><i class="bi bi-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
        <div class="text-center py-3 bg-secondary mt-3">
            &copy; 2024 Umucyo School. All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
