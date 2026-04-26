<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products ";
$result = $conn->query($sql);
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy proteins powder & shakes | Protein from supplements </title>
    <link rel="stylesheet" href="Css/productPage.css">
    <link rel="stylesheet" href="Css/Header.css">
</head>

<body>
    <div class="container">
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
                <!-- CART SVG (Visible when signed in) -->
                <a href="viewCart.php" class="icon-link" title="View Cart">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                </a>
                <!-- LOGOUT SVG (Visible when signed in) -->
                <a href="logout.php" class="icon-link" title="Logout">
                    <svg class="icon-logout" viewBox="0 0 24 24" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                        <polyline points="16 17 21 12 16 7" />
                        <line x1="21" y1="12" x2="9" y2="12" />
                    </svg>
                </a>
            <?php else: ?>
                <!-- SIGN IN SVG (Visible when not signed in) -->
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
            <div class="product-section">
                <div class="section-wrapper">
                    <div class="main-content">
                        <div class="productDiscription">
                            <h1>All Products</h1>
                         
                        </div>
                        <div class="shopify-section">
                            <div class="product-grid">
                                <!-- Product 1 -->
                                <div>
                                    <div class="video-section   ">

                                        <video controlslist="nofullscreen" crossorigin="anonymous"
                                            disablepictureinpicture="true" loop="" playsinline="true" preload="false"
                                            autoplay="" class="video-player__video">
                                            <source src="videos/Buy protein powder & shakes - Protein from ESN.mp4">
                                            <!---->
                                        </video>
                                    </div>

                                </div>



                                <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <div class="product-card">
                                            <div class="product-header">
                                                <?php if ($row['bestseller']) { ?>
                                                    <span class="bestseller-badge">Bestseller</span>
                                                <?php } else { ?>
                                                    <span class="bestseller-badge" style="visibility:hidden;"></span>
                                                <?php } ?>

                                                <button class="heart-btn">♡</button>
                                            </div>

                                            <div class="image-container">
                                                <img src="images/<?php echo $row['image']; ?>"
                                                    alt="<?php echo $row['name']; ?>">
                                            </div>
                                            <?php if (isset($_SESSION['username'])): ?>
                                                <form action="addToCart.php" method="post">


                                                    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">

                                                    <button class="shopping-bag-btn" type="submit" name="addToCart">🛍</button>
                                                </form>
                                            <?php else: ?>
                                                <button class="shopping-bag-btn" type="submit" name="addToCart"
                                                    onclick="alert('You must be logged in to add items to your cart!')">🛍</button>
                                            <?php endif; ?>


                                            <!-- <button class="shopping-bag-btn">🛍</button> -->

                                            <div class="product-info">
                                                <p class="flavors"><?php echo $row['flavors']; ?> Flavours</p>
                                                <h3><?php echo $row['name']; ?></h3>
                                                <p class="description"><?php echo $row['description']; ?></p>

                                                <div class="rating">
                                                    <span class="stars">★★★★☆</span>
                                                    <span class="review-count">(<?php echo $row['reviews']; ?>)</span>
                                                </div>

                                                <p class="price">
                                                    €<?php echo $row['price']; ?>
                                                </p>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                } else {
                                    echo "<p>No products found</p>";
                                }
                                ?>






                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>

</body>


</html>