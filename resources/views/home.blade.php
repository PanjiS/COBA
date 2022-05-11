<!DOCTYPE html>
<html lang="en">
    <head>

        <title>HOME</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="/css/responsive.css">

        <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Notable&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">

    </head>
    <body>

        <!-- header- nav -->
        <header>
            <div class="container">
                <div class="header-left">
                    <img class="logo" src="https://i.ibb.co/xGDmv3t/Untitled-2-removebg-preview.png">
                </div>
                <a href="#" class="menu-icon">
                    <span class="fa fa-bars"></span>
                </a>
                <div class="header-right">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="#">Register</a>
                    <a href="#">Gallery</a>
                    <a href="#">About Us</a>
                </div>
            </div>
        </header>
        <!--end of header nav -->

        <!-- main -->
        <main>

            <!-- main 1 -->
            <div class="jumbotron">
                <div class="container">
                    <h1>start your day with a coffee</h1>
                    <p>Opening Hours : 10.00 AM - 10.00 PM </p>
                    <a href="#" class="btn loc">Location</a><br>
                    <a href="#" class="btn order">More Info</a>
                </div>
            </div>
            <!-- end of main 1 -->

            <!-- main 2 -->
            <div class="provide-wrapper">
                <div class="provide-container">
                    <div class="heading">
                        <h2>WE SHARE THIS EXPERIENCE</h2>
                    </div>
                    <ul class="flex-list">
                        <li class="li1">
                            <div class="coffee-img">
                                <!--  <img src="" alt="cozy" /> -->
                            </div>
                        </li>
                        <li class="li2">
                            <div class="coffee-desc">
                                <h2>THE SIP OF FRESHNESS</h2>
                                <p>We has a full coffee and espresso menu as well as tasty freshly made bakery items. Find plenty of options to satisfy your morning, afternoon or evening craving here.</p>
                            </div>
                            <div class="coffee-menu">
                                <a href="#menu" class="btn menu">GO TO MENU</a>
                            </div>
                        </li>
                        <li class="li3">
                            <div class="cozy-desc">
                                <h2>THE PERFECT SPOT TO COZY UP</h2>
                                <p>Grab one of many unique drinks, set up shop and be productive, or curl up and meet a friend. with our cozy vibes and live music, take a seat for a while.</p>
                            </div>
                            <div class="cozy-gallery">
                                <a href="#gallery" class="btn gallery">SEE OUR GALLERIES</a></a>
                            </div>
                        </li>
                        <li class="li4">
                            <div class="cozy-img">
                                <!--  <img src="" alt="cozy" /> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end of main 2-->

            <!-- main 3 -->
            <div class="main2">
                <div class="main2-konten" id="menu">
                    <div class="main2-head">
                        <h2>Kind of Coffee</h2>
                    </div>
                    <div class="konten">
                        <div class="konten-img">
                            <img src="/img/arabica.png">
                            <p>Arabica</p>
                        </div>
                    </div>
                    <div class="konten">
                        <div class="konten-img">
                            <img src="/img/robusta.png">
                            <p>Robusta</p>
                        </div>
                    </div>
                    <div class="konten">
                        <div class="konten-img">
                            <img src="/img/liberica.png">
                            <p>Liberica</p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="main2-konten2" id="gallery">
                <h2>Indonesian Coffee</h2>
                <div class="konten2">
                    <img src="/img/kopi.png" class="image">
                    <div class="konten-img2">
                        <div class="text">Kopi Aceh, Gayo</div>
                    </div>
                </div>
                <div class="konten2">
                    <img src="/img/kopi.png" class="image">
                    <div class="konten-img2">
                        <div class="text">Kopi Kintamani, Bali</div>
                    </div>
                </div>
                <div class="konten2">
                    <img src="/img/kopi.png" class="image">
                    <div class="konten-img2">
                        <div class="text">Kopi Toraja, Sulawesi</div>
                    </div>
                </div>
                <div class="konten2">
                    <img src="/img/kopi.png" class="image">
                    <div class="konten-img2">
                        <div class="text">Kopi Liberika Rangsang Meranti, Riau</div>
                    </div>
                </div>
                <div class="konten2">
                    <img src="/img/kopi.png" class="image">
                    <div class="konten-img2">
                        <div class="text">Kopi Robusta, Temanggung</div>
                    </div>
                </div>
                <div class="konten2">
                    <img src="/img/kopi.png" class="image">
                    <div class="konten-img2">
                        <div class="text">Kopi Bajawa, Flores</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!-- end of main 3 -->

        </main>

        <!-- footer -->
        <footer>
            <div class="container">
                <img src="https://i.ibb.co/xGDmv3t/Untitled-2-removebg-preview.png">
                <h2>Stay cozy, Stay friendly.</h2>
                <p >Kedai Hitam Putih adalah tempat kecil bagi para pecinta olahan kopi dan susu yang mengusung tema monokrom dalam setiap menu olahan kami.</p>
            </div>
            <div class="btn-wrapper">
                <a href="#" class="btn facebook"><span class="fa fa-facebook"></span>Kedai Hitam Putih</a>
                <a href="#" class="btn twitter"><span class="fa fa-twitter"></span>Hitam-putih Kedai</a>
                <a href="#" class="btn instagram"><span class="fa fa-instagram"></span>@HitamputihKedai</a>
            </div>
        </footer>
        <!-- end of footer -->

    </body>
</html>
