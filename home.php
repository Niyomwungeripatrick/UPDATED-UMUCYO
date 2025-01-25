<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Umucyo School</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
        body {
            font-size: 0.875rem;
            background-color: #f8f9fa;
            transition: background-color 0.3s, color 0.3s;
            text-decoration: none;
        }
        .hero {
    background: url('../IMAGES/Picture_1.PNG') no-repeat center center; 
    background-size: cover; 
    height: 50vh;
    display: flex; 
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    position: relative;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
}

.hero h1 {
    font-size: 3rem; /* Larger font for heading */
    font-weight: bold;
}

.hero p {
    font-size: 1.25rem;
    margin-bottom: 20px;
}

.hero .btn-light {
    font-size: 1.1rem;
    padding: 10px 30px;
    border-radius: 25px;
}


        .dark-mode {
            background-color:rgb(11, 11, 11); /* Dark background for dark mode */
            color: white; /* Light text for dark mode */
        }

        .dark-mode .navbar {
            background-color:rgb(11, 11, 12); /* Dark navbar */
        }

        .dark-mode .navbar-brand {
            color:rgb(255, 255, 255);;
        }

        .dark-mode .navbar-nav .nav-link {
            color: white;
        }

        .dark-mode .hero {
            background: rgba(0, 0, 0, 0.7); /* Dark overlay for hero */
        }

        .dark-mode .testimonial {
            background-color:rgb(6, 6, 7); /* Dark background for testimonials */
            color: white;
            border: 1px solid white;
            border-radius: 5px;
        }

        .dark-mode .card {
            background-color:rgb(13, 13, 14); /* Dark card background */
            color: white;
            border: 1px solid white;
            border-radius: 5px;
        }

        .dark-mode .card-title {
            color: white;
        }

        .dark-mode .accordion-button {
            background-color:rgb(9, 10, 10); /* Dark accordion button */
            color: white;
        }

        .dark-mode .accordion-button:not(.collapsed) {
            background-color:rgb(9, 10, 10); /* Darker button for expanded state */
            
        }

        .dark-mode a {
            color:rgb(9, 10, 10); /* Adjusted link color */
        }

        .dark-mode .btn-light {
            background-color:rgb(255, 255, 255); /* Darker button in dark mode */
        }

        .dark-mode .gallery img {
            border-radius: 8px;
        }
footer{
    padding: 20px 0;
    background:rgb(0, 51, 101);
    color: white;
    text-decoration: none;
    font-size: 20px;
}

footer h4 {
    font-size: 30px;
    margin-bottom: 15px;
    color: rgb(67, 152, 237);
}

footer ul {
    list-style-type: none;
    padding: 0;
    text-decoration: none;
    
}

footer ul li {
    margin-bottom: 10px;
    text-decoration: none;
    
}

footer ul li a{
    text-decoration: none;
    color:rgb(254, 255, 255);
    text-decoration: none;
}

footer ul li a:hover {
    text-decoration: none;
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
                    <a class="nav-link btn btn-primary me-2 active" style="font-size: 20px;" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link btn btn-primary" style="font-size: 20px;" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link btn btn-primary" style="font-size: 20px;" href="contactus.php">Contact</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link btn btn-primary" style="font-size: 20px;" href="academic.php">Academic</a>
                </li>
                <!-- Dark Mode Toggle -->
                <li class="nav-item me-3">
                    <button class="btn btn-light" id="darkModeToggle">
                        <i class="fas fa-sun" id="sunIcon"></i>
                        <i class="fas fa-moon d-none" id="moonIcon"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>



<!-- Add some padding to the content to avoid being hidden by the fixed navbar -->
<style>
    body {
        padding-top: 80px; /* Adjust this value if needed */
    }
</style>


    <!-- Hero Section as a Carousel -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="hero d-flex align-items-center justify-content-center" style="background-image: url('../IMAGES/pic1.PNG'); background-size: cover;">
                    <div class="container text-center text-white">
                        <h1>Welcome to Umucyo School</h1>
                        <p>Join us to explore our programs and enroll for a brighter future!</p>
                        <a href="#" class="btn btn-light">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="hero d-flex align-items-center justify-content-center" style="background-image: url('../IMAGES/pic2.PNG'); background-size: cover;">
                    <div class="container text-center text-white">
                        <h1>Empowering Students</h1>
                        <p>We provide quality education for a bright and successful future.</p>
                        <a href="#" class="btn btn-light">Discover More</a>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="hero d-flex align-items-center justify-content-center" style="background-image: url('../IMAGES/pic3.PNG'); background-size: cover;">
                    <div class="container text-center text-white">
                        <h1>Building Bright Futures</h1>
                        <p>Experience our inclusive community and supportive environment.</p>
                        <a href="#" class="btn btn-light">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Main Content -->
    <div class="container my-5">
        <h2>Why Choose Us?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Quality Education</h5>
                        <p class="card-text">We provide top-notch education with experienced teachers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Inclusive Community</h5>
                        <p class="card-text">Our school fosters a welcoming environment for all students.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Extracurricular Activities</h5>
                        <p class="card-text">We offer various activities to enhance student experience.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="text-center my-5">
            <h2>Ready to Start Your Journey?</h2>
            <p>Sign up today and become a part of our vibrant community!</p>
            <a href="signup.php" class="btn btn-primary btn-lg">Sign Up Now</a>
        </div>

        <!-- Testimonials Section -->
        <h2 class="my-5">What Our Students Say</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial text-center">
                    <img src="student1.jpg" alt="Isezerano Scovia" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px;">
                    <h5>Isezerano Scovia</h5>
                    <p>"Umucyo School has changed my life! The teachers are amazing, and I’ve made lifelong friends."</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial text-center">
                    <img src="../IMAGES/student1.jpg" alt="Irasubiza Chadia" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px;">
                    <h5>Irasubiza Chadia</h5>
                    <p>"The support and resources here are incredible. I feel prepared for my future!"</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial text-center">
                    <img src="../IMAGES/pic2.PNG" alt="Kwizera Bruno" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px;">
                    <h5>Kwizera Bruno</h5>
                    <p>"I love the variety of extracurricular activities. It really enhances my school experience."</p>
                </div>
            </div>
        </div>

        <!-- Events Section -->
        <h2 class="my-5">Upcoming Events</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Open House</h5>
                        <p class="card-text">Join us for an open house on March 15, 2024. Discover our programs and meet the faculty.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sports Day</h5>
                        <p class="card-text">Our annual sports day will be held on April 20, 2024. All students are encouraged to participate!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Graduation Ceremony</h5>
                        <p class="card-text">Celebrate our graduates on June 10, 2024. Join us in honoring their achievements!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Section -->
        <h2 class="my-5">Gallery</h2>
        <div class="row gallery">
            <div class="col-md-4">
                <img src="../IMAGES//pic2.PNG" alt="Event Image 1" class="img-fluid mb-4">
            </div>
            <div class="col-md-4">
                <img src="../IMAGES/pic3.PNG" alt="Event Image 2" class="img-fluid mb-4">
            </div>
            <div class="col-md-4">
                <img src="../IMAGES/pic1.PNG" alt="Event Image 3" class="img-fluid mb-4">
            </div>
        </div>

        <!-- FAQ Section -->
        <h2 class="my-5">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What programs do you offer?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We offer a variety of programs, including primary education, secondary education, and vocational training.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How can I apply to Umucyo School?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can apply online through our website or visit the school for an application form.
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!-- Footer Section -->
<footer>
<div class="container my-5">
    <div class="row">
        <!-- Contact Us and Useful Websites on the left -->
        <div class="col-md-6">
            <h4>Contact Us</h4>
            <p><i class="fas fa-map-marker-alt"></i> Umucyo School, 33M7+2Q8, KG 667 Street, Kigali</p>
            <p><i class="fas fa-phone-alt"></i> Phone: +250 783 728 359</p>
            <p><i class="fas fa-envelope"></i> Email: <a style="color: white; text-decoration: none;" href="https://www.gmail.com">umucyoschool@gmail.com</a></p>
            

            <h4>Follow Us</h4>
            <p>
                <a style="color: white; text-decoration: none;" href="https://www.facebook.com/profile.php?id=100050038844197" target="_blank"><i class="fab fa-facebook"></i> Facebook</a><br>
                <a style="color: white; text-decoration: none;" href="https://wa.me/+250 783 728 359" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a><br>
                <a style="color: white; text-decoration: none;" href="https://www.youtube.com/@umucyoschooltv8286" target="_blank"><i class="fab fa-youtube"></i> YouTube</a>
            </p>
        </div>

        <!-- Google Map on the right -->
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3896.509818403151!2d30.065184182623753!3d-1.916935883476147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca39a3de8b069%3A0xca9919bd9294bf5c!2sUmucyo%20School!5e0!3m2!1sen!2srw!4v1737816443304!5m2!1sen!2srw" width="760px" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
</footer>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Dark mode toggle functionality
        const darkModeToggle = document.getElementById('darkModeToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');
        const body = document.body;

        darkModeToggle.addEventListener('click', function() {
            body.classList.toggle('dark-mode');
            sunIcon.classList.toggle('d-none');
            moonIcon.classList.toggle('d-none');
        });
    </script>
</body>
</html>
