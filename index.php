<!DOCTYPE html>
<html lang="en">

<head>
    <title>Oi Doi OI website</title>
    <link rel="icon" href="/images/logoT .jpg" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=person,shopping_cart,storefront" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="menu.js"></script>
</head>

<body>
    <header class="main-header">
        <button type="button" class="nav-button">fdgdfs
            <i class="fa-solid fa-bars"></i>
        </button>
        <a href="/">
            <img class="logo" src="/images/logoT .jpg" alt="oi doi oi logo">
        </a>
        <form class="search" method="get" action="/search.php">
            <input type="search" placeholder="search for a product">
            <button>
                <img src="https://via.placeholder.com/20" alt="search icon">

            </button>
        </form>
        <nav class="user-nav">
            <a href="stores.html">
                <span class="material-symbols-outlined">
                    storefront
                </span>
            </a>
            <a href="account.html">
                <span class="material-symbols-outlined">
                    person
                </span>
            </a>
            <a href="order.php">
                <span class="material-symbols-outlined">
                    shopping_cart
                </span>
            </a>
        </nav>
        <nav class="shop-nav">
            <a href="womens.html">Womens</a>
            <a href="mens.html">Mens</a>
            <a href="kids.html">Kids</a>
            <a href="brands.html">Brands</a>
            <a href="clearance.html">Clearance</a>
        </nav>
    </header>
    <!-- carousel -->
    <div class="main-carousel" data-flickity='{ "autoPlay": true, "cellAlign": "left", "contain": true }'>
        <div class="slide">
            <h2>Black Friday Sale</h2>
            <a href="#" class="slide-button">Shop Black Friday</a>
        </div>
        <div class="slide">i want to buy a playstation 5 </div>
        <div class="slide">can someone buy for me pls ?</div>
        <div class="slide">i think i have to hard work to buy it </div>
    </div>
    <main class="content">
        <div class="card">
            <img src="/images/womensp.jpg" alt="a woman sit in meditateion pose">
            <div class="card-content">
                <h3>Womens</h3>
                <a href="#" class="card-button">Shop Womens</a>
            </div>
        </div>
         <div class="card">
            <img src="/images/mansp.jpg" alt="a man tying his shoes">
            <div class="card-content">
                <h3>Mens</h3>
                <a href="#" class="card-button">Shop Mens</a>
            </div>
        </div>
        <div class="card">
            <img src="/images/kidssp.jpg" alt="a child running in a baseball game">
            <div class="card-content">
                <h3>Kids</h3>
                <a href="#" class="card-button">Shop Kids</a>
            </div>
        </div>
        <div class="banner">
            <h2>Black Friday</h2>
            <a class="slide-button" href="#">Shop Sale</a>
        </div>
        <div class="card">
            <img src="/images/woman2.jpg" alt="a woman doing push ups">
            <div class="card-content">
                <h3>Womens</h3>
                <a href="#" class="card-button">Shop Womens</a>
            </div>
        </div>
         <div class="card">
            <img src="/images/man2 (1).jpg (1).jpg" alt="a man playing football">

            <div class="card-content">
                <h3>Mens</h3>
                <a href="#" class="card-button">Shop Mens</a>
            </div>
        </div>
        <div class="card">
            <img src="/images/kids2.jpg" alt="child playing football">
            <div class="card-content">
                <h3>Kids</h3>
                <a href="#" class="card-button">Shop Kids</a>
            </div>
        </div>
    </main>
    <footer class="main-footer">
        <nav class="social">
            <a href="https://facebook.com">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://instagram.com">
                <i class="fa-brands fa-square-instagram"></i>
            </a>
            <a href="https://x.com">
                <i class="fa-brands fa-square-x-twitter"></i>
            </a>
            <a href="https://linkedin.com">
                <i class="fa-brands fa-square-linkedin"></i>
            </a>
        </nav>
        <nav class="footer-nav">
            <a href="contact.php">Contact</a>
            <a href="terms.html">Terms</a>
            <a href="support.html">Support</a>
            <a href="policies.html">Policies</a>
        </nav>
    </footer>
</body>

</html>