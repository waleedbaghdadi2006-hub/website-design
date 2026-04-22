<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy proteins powder & shakes | Protein from supplements </title>
    <link rel="stylesheet" href="Css/HomePage.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="head_container">
                <div class="leftOfHeader">
                    <h1><a href="#">supplements</a></h1>
                </div>
                <div class="centerOfHeader">
                    <form class="search-container">
                        <input type="text" placeholder="Search..." name="search" class="search-input">
                        <button type="submit" class="search-button">Search</button>
                    </form>

                </div>
                <div class="RightSideOfHeader">

                    <?php if (isset($_SESSION['username'])): ?>
                        <!-- LOGOUT SVG (Visible when signed in) -->
                        <a href="viewCart.php">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                        </a>
                        <a href="logout.php" title="Logout">
                            <svg class="icon-logout" viewBox="0 0 24 24" width="24" height="24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                <polyline points="16 17 21 12 16 7" />
                                <line x1="21" y1="12" x2="9" y2="12" />
                            </svg>
                        </a>
                    <?php else: ?>
                        <a href="SignIn.php" title="Sign In">


                            <svg class="icon-signin" viewBox="0 0 24 24" width="24" height="24">
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
                    <a class="nav-link" href="https://www.google.com">About Us</a>
                </li>
            </ul>

            <!-- Full-width dropdown containers -->
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
        <main>
            <section class="hero-slider">
                <div class="slider-container">
                    <div class="slide active">
                        <img src="images/KW15_HeroTeaser_Desktop_1920x720_Proben.jpg" alt="Proben">
                        <div class="slide-content">
                            <h2>-50% OFF SAMPLES</h2>
                            <p>Try Designer Whey, Isoclear & more - perfect for testing and on the go</p>
                            <a href="https://www.google.com" class="save-now-btn">SAVE NOW</a>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="images/KW15_HeroTeaser_Desktop_1920x720_Athlete.jpg" alt="Athlete">
                        <div class="slide-content">
                            <h2>FUEL YOUR PERFORMANCE</h2>
                            <p>Premium supplements for elite athletes and fitness enthusiasts</p>
                            <a href="https://www.google.com" class="save-now-btn">SHOP NOW</a>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="images/KW15_HeroTeaser_Desktop_1920x720_Bars_UK_1_34dd3315-0ae7-4022-a8fd-c9aea04cf192.jpg"
                            alt="Bars">
                        <div class="slide-content">
                            <h2>PROTEIN BARS</h2>
                            <p>Delicious snacks with high protein content for your daily needs</p>
                            <a href="https://www.google.com" class="save-now-btn">EXPLORE</a>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="images/KW15_HeroTeaser_Desktop_1920x720_Vitals_1.jpg" alt="Vitals">
                        <div class="slide-content">
                            <h2>DAILY VITALS</h2>
                            <p>Everything your body needs to stay healthy and strong</p>
                            <a href="https://www.google.com" class="save-now-btn">VIEW ALL</a>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="images/KW10_HeroTeaser_Desktop_1920x720_Referafriend.jpg" alt="Refer a friend">
                        <div class="slide-content">
                            <h2>REFER A FRIEND</h2>
                            <p>Share the love and get rewards for every successful referral</p>
                            <a href="https://www.google.com" class="save-now-btn">LEARN MORE</a>
                        </div>
                    </div>
                </div>

                <!-- Slider Navigation -->
                <div class="slider-nav">
                    <span class="dot active" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                </div>

                <!-- Pause/Play Icon (Optional visual match) -->
                <div class="slider-controls">
                    <svg class="pause-icon" viewBox="0 0 24 24">
                        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                    </svg>
                </div>
            </section>
        </main>
        <footer>
            <p>&copy; 2026 Supplements Store</p>
        </footer>
    </div>
    <script src="slider.js"></script>
</body>

</html>