@extends('layout.navbar')

@section('title','Dashboard')

@section('container')

<section>

    <main>
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
                        <img src="img/arabica.png">
                        <p>Arabica</p>
                    </div>
                </div>
                <div class="konten">
                    <div class="konten-img">
                        <img src="img/robusta.png">
                        <p>Robusta</p>
                    </div>
                </div>
                <div class="konten">
                    <div class="konten-img">
                        <img src="img/liberica.png">
                        <p>Liberica</p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="main2-konten2" id="gallery">
            <h2>Indonesian Coffee</h2>
            <div class="konten2">
                <img src="img/kopi.png" class="image">
                <div class="konten-img2">
                    <div class="text">Kopi Aceh, Gayo</div>
                </div>
            </div>

            <div class="konten2">
                <img src="img/kopi.png" class="image">
                <div class="konten-img2">
                    <div class="text">Kopi Kintamani, Bali</div>
                </div>
            </div>

            <div class="konten2">
                <img src="img/kopi.png" class="image">
                <div class="konten-img2">
                    <div class="text">Kopi Toraja, Sulawesi</div>
                </div>
            </div>

            <div class="konten2">
                <img src="img/kopi.png" class="image">
                <div class="konten-img2">
                    <div class="text">Kopi Liberika Rangsang Meranti, Riau</div>
                </div>
            </div>

            <div class="konten2">
                <img src="img/kopi.png" class="image">
                <div class="konten-img2">
                    <div class="text">Kopi Robusta, Temanggung</div>
                </div>
            </div>

            <div class="konten2">
                <img src="img/kopi.png" class="image">
                <div class="konten-img2">
                    <div class="text">Kopi Bajawa, Flores</div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- end of main 3 -->
    </main>

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

</section>

@endsection