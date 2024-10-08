<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Search</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="nav">
        <a href="#home">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Eatery</button>
            <div class="dropdown-content">
                <a href="#">Fast Food</a>
                <a href="#">Coffee and Tea</a>
                <a href="#">Bars and Pubs</a>
                <a href="#">Restaurant</a>
            </div>
        </div>
        <a href="#about">About</a>
    </nav>

    <div class="search-section">
        <p>Satisfy your cravings
            <br> where every dish delights</p>
        <input type="text" id="search" placeholder="Search restaurant or cuisine">
        <button onclick="search()">Search</button>
    </div>

    <section id="menu" class="menu-section">
    <h2>Our Menu</h2>
    <div class="menu-grid">
        <div class="menu-item menu-item-1">
            <a href="page1.html">
                <div class="menu-img"></div>
                <p>Menu Item 1 Description</p>
            </a>
        </div>
        <div class="menu-item menu-item-2">
            <a href="page2.html">
                <div class="menu-img"></div>
                <p>Menu Item 2 Description</p>
            </a>
        </div>
        <div class="menu-item menu-item-3">
            <a href="page3.html">
                <div class="menu-img"></div>
                <p>Menu Item 3 Description</p>
            </a>
        </div>
        <div class="menu-item menu-item-4">
            <a href="page4.html">
                <div class="menu-img"></div>
                <p>Menu Item 4 Description</p>
            </a>
        </div>
        <div class="menu-item menu-item-5">
            <a href="page5.html">
                <div class="menu-img"></div>
                <p>Menu Item 5 Description</p>
            </a>
        </div>
        <div class="menu-item menu-item-6">
            <a href="page6.html">
                <div class="menu-img"></div>
                <p>Menu Item 6 Description</p>
            </a>
        </div>
    </div>
</section>


    <section id="about" class="about-section">
        <h2>About Us</h2>
        <p>We help you find the best eateries in town.</p>
    </section>

    <section id="extra" class="extra-section">
        <h2>Our Mission</h2>
        <p>To bring you the finest dining experiences.</p>
    </section>

    

    <script src="scripts.js"></script>
</body>
</html>
