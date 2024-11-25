<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeldaTech</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
	<!-- AOS Library CSS -->
	<link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <!-- AOS Library JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js" defer></script>
    <!-- Initialize AOS -->
    <script>
AOS.init({
    duration: 800,
    once: false,
    offset: 100,
    delay: 0,
    easing: 'ease-in-out',
    mirror: true,
    anchorPlacement: 'top-bottom',
 
});

    </script>
    <!-- Swiper.js CSS for Testimonials Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <!-- JQuery and Swiper.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="logo.png" alt="MeldaTech Logo">
        </div>
        <nav>
            <ul class="main-menu">
                <li><a href="index.php">Home</a></li>
                
                <!-- Services Submenu -->
                <li>
                    <a href="#">Services</a>
                    <div class="submenu services">
                        <div class="submenu-title">
                            <h2>Services</h2>
                            <img src="icons/services.png" alt="Services">
                        </div>
                        <div class="submenu-content">
                            <div class="submenu-column">
                                <a href="#ai-model-development">AI Model Development</a>
                                <a href="#data-integration">Data Integration</a>
                                <a href="#data-annotation">Data Annotation & Labeling</a>
                            </div>
                            <div class="submenu-column">
                                <a href="#medical-ai">Medical AI Solutions</a>
                                <a href="#tech-integration">Technology Integration</a>
                                <a href="#automation">Workflow Automation</a>
                            </div>
                        </div>
                    </div>
                </li>
                
                <!-- Industries Submenu -->
                <li>
                    <a href="#">Industries</a>
                    <div class="submenu industries">
                        <div class="submenu-title">
                            <h2>Industries</h2>
                            <img src="icons/industries.png" alt="Industries">
                        </div>
                        <div class="submenu-content">
                            <div class="submenu-column">
                                <a href="#">Healthcare</a>
                                <a href="#">Manufacturing</a>
                                <a href="#">Retail</a>
                            </div>
                            <div class="submenu-column">
                                <a href="#">Finance</a>
                                <a href="#">Logistics</a>
                                <a href="#">Education</a>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Technology Stack Submenu -->
                <li>
                    <a href="#">Technology Stack</a>
                    <div class="submenu tech-stack">
                        <div class="submenu-title">
                            <h2>Technology Stack</h2>
                            <img src="icons/tech-stack.png" alt="Technology Stack">
                        </div>
                        <div class="submenu-content">
                            <div class="submenu-column">
                                <a href="#ai-ml-frameworks">AI & ML Frameworks</a>
                                <a href="#data-management-tools">Data Management Tools</a>
                                <a href="#cloud-platforms">Cloud Platforms</a>
                            </div>
                            <div class="submenu-column">
                                <a href="#programming-languages">Programming Languages</a>
                                <a href="#frontend-frameworks">Frontend Frameworks</a>
                                <a href="#security-tools">Security & Compliance</a>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- About Us Submenu -->
                <li>
                    <a href="#">About Us</a>
                    <div class="submenu about-us">
                        <div class="submenu-title">
                            <h2>About Us</h2>
                            <img src="icons/about-us.png" alt="About Us">
                        </div>
                        <div class="submenu-content">
                            <div class="submenu-column">
                                <a href="#mission">Our Mission</a>
                                <a href="#team">Our Team</a>
                                <a href="#partners">Partners</a>
                            </div>
                        </div>
                    </div>
                </li>
                
                <!-- Contact Submenu -->
                <li>
                    <a href="#">Contact</a>
                    <div class="submenu contact">
                        <div class="submenu-title">
                            <h2>Contact</h2>
                            <img src="icons/contact.png" alt="Contact">
                        </div>
                        <div class="submenu-content">
                            <div class="submenu-column">
                                <a href="service-request.php">Request Service</a>
                                <a href="contact.php">General Inquiry</a>
                                <a href="#">Careers</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
