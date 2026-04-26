<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Premium Supplements Store</title>
    <link rel="stylesheet" href="Css/HomePage.css">
    <link rel="stylesheet" href="Css/Header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Css/AboutUs.css">
    
    <link rel="stylesheet" href="Css/Footer.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="head_container">
                <div class="leftOfHeader">
                    <a href="HomePage.php" class="logo-link">
                        <img src="images/Logo.png" alt="Logo" class="logo-img">
                    </a>
                </div>
                <div class="centerOfHeader">
                    <form class="search-container">
                        <input type="text" placeholder="Search..." name="search" class="search-input">
                        <button type="submit" class="search-button">Search</button>
                    </form>
                </div>
                <div class="RightSideOfHeader">
                    <?php if (isset($_SESSION['username'])): ?>
                        <a href="viewCart.php" class="icon-link" title="View Cart">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                        </a>
                        <a href="logout.php" class="icon-link" title="Logout">
                            <svg class="icon-logout" viewBox="0 0 24 24" width="24" height="24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                <polyline points="16 17 21 12 16 7" />
                                <line x1="21" y1="12" x2="9" y2="12" />
                            </svg>
                        </a>
                    <?php else: ?>
                        <a href="SignIn.php" class="icon-link" title="Sign In">
                            <svg class="icon-signin" viewBox="0 0 24 24" width="24" height="24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M12 4a5 5 0 1 0 0 10 5 5 0 0 0 0-10ZM5 9a7 7 0 1 1 14 0A7 7 0 0 1 5 9Z"
                                    fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                                <path
                                    d="M12 16a9.504 9.504 0 0 0-8.229 4.75 1 1 0 0 1-1.732-1.001 11.503 11.503 0 0 1 19.922 0 1 1 0 1 1-1.732 1A9.504 9.504 0 0 0 12 16Z"
                                    fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </header>

        <nav>
            <ul class="nav-list">
                <li class="nav-item">
                    <div class="nav-link">
                        <a class="nav-link" href="productPage.php">View All Products</a>
                    </div>
                </li>
                <li class="nav-item" data-dropdown="proteins">
                    <div class="nav-link">proteins powder & shakes</div>
                </li>
                <li class="nav-item" data-dropdown="vitamins">
                    <div class="nav-link">vitamins & more</div>
                </li>
                <li class="nav-item" data-dropdown="creatine">
                    <div class="nav-link">creatine</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AboutUs.php">About Us</a>
                </li>
            </ul>

            <!-- Dropdown menus (same as before) -->
            <div class="dropdown-full-width" id="proteins">
                <div class="dropdown-inner">
                    <div class="dropdown-section">
                        <h3>Our Protein Powders</h3>
                        <a href="ProteinPage.php">
                            <p class="view-all">View All</p>
                        </a>
                        <div class="bestsellers">
                            <h4>Protein Bestsellers</h4>
                            <a href="https://www.google.com" class="product-item">
                                <div class="product-img">
                                    <img src="images/IsoClear_908g_IcyPearFlavor_2024x2024_shop-p1BtDyzO_41c13784-b635-4266-982f-3680651ed116.jpg"
                                        alt="Isoclear">
                                </div>
                                <span>Isoclear Clear Whey</span>
                            </a>
                            <a href="https://www.google.com" class="product-item">
                                <div class="product-img">
                                    <img src="images/DesignerWhey_908g_LE_ChickenWaffleFlavor_2024x2024_shop-Ieff5OpJ_cfdd9345-1abb-4c72-9893-6c5c216c0b6e.jpg"
                                        alt="Designer Whey">
                                </div>
                                <span>Designer Whey Protein</span>
                            </a>
                            <a href="https://www.google.com" class="product-item">
                                <div class="product-img">
                                    <img src="images/IsoClear_908g_IcyPearFlavor_2024x2024_shop-p1BtDyzO_41c13784-b635-4266-982f-3680651ed116.jpg"
                                        alt="Flexpresso">
                                </div>
                                <span>Flexpresso Protein Coffee</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown-full-width" id="vitamins">
                <div class="dropdown-inner">
                    <div class="dropdown-section">
                        <h3>Our Vitamins</h3>
                        <a href="VitaminPage.php">
                            <p class="view-all">View All</p>
                        </a>
                        <div class="bestsellers">
                            <h4>Vitamin Bestsellers</h4>
                            <a href="https://www.google.com" class="product-item">
                                <div class="product-img">
                                    <img src="images/Ashwa__120Caps_2024x2024_shop-ZiGfqmvZ_617765a7-6ae0-4a08-8e92-cc92773b2760.jpg"
                                        alt="Ashwa">
                                </div>
                                <span>Ashwa KSM-66</span>
                            </a>
                            <a href="https://www.google.com" class="product-item">
                                <div class="product-img">
                                    <img src="images/Athletestack_Men_2024x2024_shop_1-z-ZiEbBu_bb4e3c6a-d2e4-4f8b-a9bc-cee333cce047.jpg"
                                        alt="Athlete Stack Men">
                                </div>
                                <span>Athlete Stack Men</span>
                            </a>
                            <a href="https://www.google.com" class="product-item">
                                <div class="product-img">
                                    <img src="images/Athletestack_Women_2024x2024_shop-wVywdtg2_8962e88f-2d92-4ec6-9b8b-d6d62113ee80.jpg"
                                        alt="Athlete Stack Women">
                                </div>
                                <span>Athlete Stack Women</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown-full-width" id="creatine">
                <div class="dropdown-inner">
                    <div class="dropdown-section">
                        <h3>Our Creatine</h3>
                        <a href="CreatinePage.php">
                            <p class="view-all">View All</p>
                        </a>
                        <div class="bestsellers">
                            <h4>Creatine Bestsellers</h4>
                            <a href="https://www.google.com" class="product-item">
                                <div class="product-img">
                                    <img src="images/UltrapureCreatine_500g_Beutel_NeutralFlavor_2024x2024_shop-6v02cWzQ_a41b1095-1dad-4771-9e1b-4d233d8f358b.jpg"
                                        alt="Ultrapure Creatine">
                                </div>
                                <span>Ultrapure Creatine</span>
                            </a>
                            <a href="https://www.google.com" class="product-item">
                                <div class="product-img">
                                    <img src="images/Fundamental_600g_CherryLemonadeFlavor_2024x2024_shop-DOz63eFT_886b550b-633d-4ae2-b9a8-aa88eff94a31.jpg"
                                        alt="Fundamental Creatine">
                                </div>
                                <span>Fundamental Creatine</span>
                            </a>
                            <a href="https://www.google.com" class="product-item">
                                <div class="product-img">
                                    <img src="images/UltrapureCreatine_Gummies_600g_Beutel_Front_PeachFlavor_2024x2024_shop-Q5S2NfaE_6e8f2089-396c-48bb-ac23-cea0fe5be25c.jpg"
                                        alt="Creatine Gummies">
                                </div>
                                <span>Creatine Gummies</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main class="about-main">
            <!-- Hero Section -->
            <section class="about-hero">
                <div class="hero-content">
                    <h1>About Premium Supplements Store</h1>
                    <p>Your Trusted Partner in Health & Fitness Since 2015</p>
                </div>
            </section>

            <!-- Our Story Section -->
            <section class="our-story">
                <div class="story-container">
                    <div class="story-text">
                        <h2>Our Story</h2>
                        <p>Founded in 2015, Premium Supplements Store was born from a simple vision: to provide
                            athletes, fitness enthusiasts, and health-conscious individuals with the highest quality
                            supplements at competitive prices.</p>
                        <p>What started as a small local shop has grown into a trusted online destination serving
                            thousands of customers worldwide. Our commitment to excellence, quality, and customer
                            satisfaction has been the driving force behind our success.</p>
                        <p>Today, we pride ourselves on offering a carefully curated selection of premium supplements,
                            including proteins, vitamins, creatine, and more – all sourced from reputable manufacturers
                            and tested for purity and potency.</p>
                    </div>
                    <div class="story-image">
                        <img src="images/logo.png" alt="Our Store">
                    </div>
                </div>
            </section>

            <!-- Mission & Vision Section -->
            <section class="mission-vision">
                <div class="mission-vision-container">
                    <div class="mission-card">
                        <div class="card-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Our Mission</h3>
                        <p>To empower individuals to achieve their fitness goals by providing premium quality
                            supplements, expert guidance, and exceptional customer service at affordable prices.</p>
                    </div>
                    <div class="mission-card">
                        <div class="card-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Our Vision</h3>
                        <p>To become the most trusted and accessible supplement retailer globally, recognized for our
                            commitment to quality, innovation, and customer-centric solutions.</p>
                    </div>
                    <div class="mission-card">
                        <div class="card-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Our Values</h3>
                        <p>Quality, Integrity, Innovation, and Customer Satisfaction. We believe in transparency,
                            ethical business practices, and building long-term relationships with our customers.</p>
                    </div>
                </div>
            </section>





            <!-- Stats Section -->
            <section class="stats-section">
                <div class="stats-container">
                    <div class="stat-box">
                        <h3>50,000+</h3>
                        <p>Happy Customers</p>
                    </div>
                    <div class="stat-box">
                        <h3>500+</h3>
                        <p>Premium Products</p>
                    </div>
                    <div class="stat-box">
                        <h3>9 Years</h3>
                        <p>Industry Experience</p>
                    </div>
                    <div class="stat-box">
                        <h3>24/7</h3>
                        <p>Customer Support</p>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="cta-section">
                <h2>Ready to Start Your Fitness Journey?</h2>
                <p>Explore our wide range of premium supplements and find exactly what you need.</p>
                <a href="productPage.php" class="cta-button">Shop Now</a>
            </section>
        </main>

        <!-- Footer -->
             <footer class="footer-enhanced">
            <div class="footer-container">
                <!-- Store Location Map Section -->
                <div class="footer-section map-section">
                    <h3 class="footer-title">Visit Our Store</h3>
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.1234567890!2d-74.0060!3d40.7128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a316bb7ae8b%3A0x123456789!2sSupplements%20Store%20NYC!5e0!3m2!1sen!2sus!4v1234567890"
                            width="100%" height="350" style="border:0; border-radius: 10px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="store-address">
                        <p><strong>Premium Supplements Store</strong></p>
                        <p>123 Fitness Avenue, New York, NY 10001</p>
                        <p>United States</p>
                    </div>
                </div>

                <!-- Contact Us Section -->
                <div class="footer-section contact-section">
                    <h3 class="footer-title">Contact Us</h3>
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <p class="contact-label">Phone</p>
                                <a href="tel:+963 930 811 226">+963 930 811 226</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <p class="contact-label">Email</p>
                                <a href="SWsupplement@hmail.com">SWSupplements@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <p class="contact-label">Address</p>
                                <p>123 Fitness Avenue<br>New York, NY 10001</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <p class="contact-label">Hours</p>
                                <p>Mon - Fri: 9:00 AM - 8:00 PM<br>Sat - Sun: 10:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Additional Info Section -->
                <div class="footer-section info-section">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="productPage.php">Shop All Products</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>

                    <h3 class="footer-title" style="margin-top: 30px;">Follow Us</h3>
                   <div class="social-links">
    <!-- Facebook Icon -->
    <a href="https://www.facebook.com/" class="social-link-item" title="Facebook" target="_blank">
        <div class="social-profile-img facebook-img">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="white" aria-hidden="true">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
        </div>
        <span>Facebook</span>
    </a>

    <!-- Instagram Icon -->
    <a href="https://www.instagram.com/" class="social-link-item" title="Instagram" target="_blank">
        <div class="social-profile-img instagram-img">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="white" aria-hidden="true">
                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.117.6c-.798.3-1.427.785-2.065 1.422-.637.638-1.122 1.267-1.422 2.065-.267.788-.468 1.658-.528 2.936C.015 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.528 2.936.3.798.785 1.427 1.422 2.065.638.637 1.267 1.122 2.065 1.422.788.267 1.658.468 2.936.528 1.28.057 1.687.072 4.947.072s3.667-.015 4.947-.072c1.277-.06 2.148-.261 2.936-.528.798-.3 1.427-.785 2.065-1.422.637-.638 1.122-1.267 1.422-2.065.267-.788.468-1.658.528-2.936.057-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.261-2.148-.528-2.936-.3-.798-.785-1.427-1.422-2.065-.638-.637-1.267-1.122-2.065-1.422-.788-.267-1.658-.468-2.936-.528C15.667.015 15.26 0 12 0zm0 2.16c3.203 0 3.585.009 4.849.070 1.171.054 1.805.244 2.227.408.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.354 1.057.408 2.227.061 1.264.07 1.646.07 4.849s-.009 3.585-.07 4.849c-.054 1.171-.244 1.805-.408 2.227-.217.562-.477.96-.896 1.382-.42.419-.819.679-1.381.896-.422.164-1.057.354-2.227.408-1.264.061-1.646.07-4.849.07s-3.585-.009-4.849-.07c-1.171-.054-1.805-.244-2.227-.408-.562-.217-.96-.477-1.382-.896-.419-.42-.679-.819-.896-1.381-.164-.422-.354-1.057-.408-2.227-.061-1.264-.07-1.646-.07-4.849s.009-3.585.07-4.849c.054-1.171.244-1.805.408-2.227.217-.562.477-.96.896-1.382.42-.419.819-.679 1.381-.896.422-.164 1.057-.354 2.227-.408 1.264-.061 1.646-.07 4.849-.07z"/>
                <circle cx="12" cy="12" r="3.846"/>
                <circle cx="18.406" cy="5.594" r="0.9"/>
            </svg>
        </div>
        <span>Instagram</span>
    </a>

    <!-- Snapchat Icon -->
    <a href="https://www.snapchat.com/" class="social-link-item" title="Snapchat" target="_blank">
        <div class="social-profile-img snapchat-img">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="white" aria-hidden="true">
                <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm3.34 16.96c-.82.55-1.64.82-2.46.82-.41 0-.82-.1-1.23-.3-.41.2-.82.3-1.23.3-.82 0-1.64-.27-2.46-.82-.27-.18-.45-.55-.36-.91.09-.36.41-.59.77-.59.09 0 .18.01.27.03.68.36 1.37.55 2.09.55.72 0 1.41-.19 2.09-.55.09-.02.18-.03.27-.03.36 0 .68.23.77.59.09.36-.09.73-.36.91zm-3.34-4.5c-.82 0-1.5-.68-1.5-1.5s.68-1.5 1.5-1.5 1.5.68 1.5 1.5-.68 1.5-1.5 1.5zm3 0c-.82 0-1.5-.68-1.5-1.5s.68-1.5 1.5-1.5 1.5.68 1.5 1.5-.68 1.5-1.5 1.5z"/>
            </svg>
        </div>
        <span>Snapchat</span>
    </a>

    <!-- Telegram Icon -->
    <a href="https://web.telegram.org/" class="social-link-item" title="Telegram" target="_blank">
        <div class="social-profile-img telegram-img">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="white" aria-hidden="true">
                <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.12l-6.869 4.332-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.461c.54-.203 1.01.131.84.951z"/>
            </svg>
        </div>
        <span>Telegram</span>
    </a>
</div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; 2026 Premium Supplements Store. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>

</html>