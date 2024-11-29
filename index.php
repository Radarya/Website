<?php
     //inisialisasi session
     session_start();
     
     //mengecek username pada session
     if ( !isset( $_SESSION[ 'username' ] ) ) {
        $_SESSION[ 'msg' ] = 'anda harus login untuk mengakses halaman ini';
         header( 'Location: login.php' );
     }
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
  <title>Home</title>
  
   <!--Meta Tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Icon-->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
    <!--Poppins Font-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
    
    <!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

  </head>
  <body>
    <!--Loading Screen-->
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">     
      <!-- Header-->
      <header class="section page-header">
        <!-- Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- Navbar Panel-->
                <div class="rd-navbar-panel"> 
                  <!-- Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- Navbar Logo-->
                  <div class="rd-navbar-brand"><a href="index.php"><img class="brand-logo-light" src="images/logo-default1-140x57.png" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- Navbar Atas-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.php">About</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a>
                      </li>
                    </ul><a class="button button-white button-sm" href="logout.php">Log Out</a>
                  </div>
                </div><a class="button button-white button-sm" href="logout.php">Log Out</a>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <main>
      <!-- Banner-->
      <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
        <div class="main-bunner-img" style="background-image: url(&quot;images/bg-bunner-2.jpg&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
              <h1 class="box-default-title">Selamat Datang</h1>
              <div class="box-default-decor"></div>
              <p class="big box-default-text">Website ini menghadirkan keajaiban dan keragaman flora Indonesia, memperkenalkan kekayaan alam yang memukau sebagai warisan yang patut dilestarikan.</p>
            </div>
          </div>
        </div>
      </section>
      <br>
      <br>
      <br>
      <br>
      <!-- Pengenalan Singkat-->
        <section class="section section-lg section-inset-1 bg-gray-1 pt-lg-0">
          <div class="container">
            <div class="row row-50 justify-content-xl-between align-items-lg-center">
              <div class="col-lg-6 wow fadeInLeft">
                <div class="box-image"><img class="box-image-static" src="images/home-3-1-483x327.jpg" alt="" width="483" height="327"/>
                </div>
              </div>
              <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <h2>Pengenalan Singkat</h2>
                <p>Arunika Flora adalah website bertema flora atau tumbuhan yang dibuat oleh Tim 3.</p>
                <p>Website ini menyediakan informasi sekilas mengenai ragam tumbuhan yang ada di Indonesia.</p><img src="images/signature-1-140x50.png" alt="" width="140" height="50"/>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Tumbuhan Nasional-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 wow-outer">
              <div class="wow slideInDown">
                <h2>Tumbuhan Nasional</h2>
                <p class="text-opacity-80">Tumbuhan nasional Indonesia adalah tumbuhan yang secara simbolis diakui sebagai representasi identitas dan kekayaan flora Indonesia. Pemerintah Indonesia telah menetapkan tiga tumbuhan nasional berdasarkan Keputusan Presiden No. 4 Tahun 1993.Berikut adalah ketiganya:</p>
              </div>
            </div>
          </div>
          <div class="row row-20 row-lg-30">
            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow fadeInUp">
                <div class="product-featured">
                  <div class="product-featured-figure"><img src="images/product-1-370x395.jpg" alt="" width="370" height="395"/>
                    <div class="product-featured-button"><a class="button button-primary" href="https://id.wikipedia.org/wiki/Melati_putih">Puspa Bangsa</a></div>
                  </div>
                  <div class="product-featured-caption">
                    <h4><a class="product-featured-title" href="https://id.wikipedia.org/wiki/Melati_putih">Melati (Jasminum sambac)</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow fadeInUp">
                <div class="product-featured">
                  <div class="product-featured-figure"><img src="images/product-2-370x395.jpg" alt="" width="370" height="395"/>
                    <div class="product-featured-button"><a class="button button-primary" href="https://id.wikipedia.org/wiki/Anggrek_bulan">Puspa Pesona</a></div>
                  </div>
                  <div class="product-featured-caption">                    
                    <h4><a class="product-featured-title" href="https://id.wikipedia.org/wiki/Anggrek_bulan">Anggrek Bulan (Phalaenopsis amabilis)</a></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow fadeInUp">
                <div class="product-featured">
                  <div class="product-featured-figure"><img src="images/product-3-370x395.jpg" alt="" width="370" height="395"/>
                    <div class="product-featured-button"><a class="button button-primary" href="https://id.wikipedia.org/wiki/Rafflesia">Puspa Langka</a></div>
                  </div>
                  <div class="product-featured-caption">
                    <h4><a class="product-featured-title" href="https://id.wikipedia.org/wiki/Rafflesia"> Padma Raksasa (Rafflesia Arnoldii)</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Tumbuhan Lainnya-->
      <section class="section section-lg bg-gray-1">
        <div class="container">
          <h2 class="text-center">Tumbuhan Lainnya</h2>
          <div class="row">
            <div class="col-12">
              <div class="tabs-custom tabs-horizontal tabs-classic" id="tabs-1">
                <ul class="nav nav-tabs nav-tabs-classic">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Endemik</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Herbal</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Langka</a></li>
                </ul>
                <!-- Halaman 1-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-1-1">
                    <div class="box-event-modern">
                      <div class="event-item-modern">
                        <h4 class="event-item-modern-title"><a href="https://id.wikipedia.org/wiki/Bunga_bangkai_raksasa">Bunga Bangkai (Amorphophallus Titanum)</a></h4>
                        <div class="event-item-modern-text">
                          <p>Amorphophallus titanum atau bunga bangkai adalah tumbuhan endemik Sumatera yang dikenal sebagai bunga terbesar di dunia. Bunga ini menghasilkan aroma seperti bangkai untuk menarik serangga penyerbuk.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <h4 class="event-item-modern-title"><a href="https://id.wikipedia.org/wiki/Anaphalis_javanica">Edelweis Jawa (Anaphalis javanica)</a></h4>
                        <div class="event-item-modern-text">
                          <p>Edelweis Jawa (Anaphalis javanica) adalah tumbuhan endemik pegunungan Indonesia yang tumbuh di ketinggian 2.000 meter ke atas. Disebut "bunga abadi" karena bunganya tidak mudah layu, berkat kandungan resin dan lateks. </p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <h4 class="event-item-modern-title"><a href="https://id.wikipedia.org/wiki/Daun_payung">Daun Payung (Johannesteijsmannia altifrons)</a></h4>
                        <div class="event-item-modern-text">
                          <p>Daun Payung (Johannesteijsmannia altifrons) adalah tumbuhan palem endemik Kalimantan dengan daun besar, tunggal, dan berbentuk seperti payung. Tumbuhan ini tumbuh di hutan tropis dataran rendah dan memiliki nilai ekologis serta estetika tinggi.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <h4 class="event-item-modern-title"><a href="https://id.wikipedia.org/wiki/Rafflesia">Bunga Rafflesia arnoldii</a></h4>
                        <div class="event-item-modern-text">
                          <p>Rafflesia arnoldii adalah bunga parasit endemik Sumatera yang dikenal sebagai bunga terbesar di dunia, dengan diameter hingga 1 meter. Bunga ini tidak memiliki daun, batang, atau akar, dan mengeluarkan bau busuk untuk menarik serangga penyerbuk.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Halaman 2-->
                  <div class="tab-pane fade" id="tabs-1-2">
                    <div class="box-event-modern">
                      <div class="event-item-modern">
                        <h4 class="event-item-modern-title"><a href="https://id.wikipedia.org/wiki/Kunyit">Kunyit (Curcuma longa)</a></h4>
                        <div class="event-item-modern-text">
                          <p>Kunyit (Curcuma longa) adalah tanaman rimpang yang digunakan sebagai bumbu, pewarna alami, dan obat tradisional. Berwarna kuning oranye, kunyit kaya akan kurkumin, senyawa dengan sifat antiinflamasi dan antioksidan. Tumbuhan ini banyak dibudidayakan di Indonesia.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <h4 class="event-item-modern-title"><a href="https://id.wikipedia.org/wiki/Temu_lawak">Temulawak (Curcuma xanthorrhiza)</a></h4>
                        <div class="event-item-modern-text">
                          <p>Temulawak (Curcuma xanthorrhiza) adalah tanaman rimpang asli Indonesia yang digunakan sebagai bahan jamu dan obat tradisional. Mengandung kurkumin dan minyak atsiri, temulawak bermanfaat untuk kesehatan pencernaan, hati, dan meningkatkan daya tahan tubuh.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <h4 class="event-item-modern-title"><a href="https://id.wikipedia.org/wiki/Jahe">Jahe (Zingiber officinale)</a></h4>
                        <div class="event-item-modern-text">
                          <p>Jahe (Zingiber officinale) adalah tanaman rimpang yang digunakan sebagai rempah dan obat tradisional. Memiliki rasa pedas khas, jahe bermanfaat untuk menghangatkan tubuh, meredakan mual, dan meningkatkan pencernaan.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <h4 class="event-item-modern-title"><a href="https://id.wikipedia.org/wiki/Sirih">Daun Sirih (Piper betle)</a></h4>
                        <div class="event-item-modern-text">
                          <p>Daun Sirih (Piper betle) adalah tanaman merambat yang daunnya digunakan sebagai obat tradisional. Mengandung senyawa antiseptik, daun sirih bermanfaat untuk kesehatan mulut, menghentikan pendarahan ringan, dan mengobati infeksi.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Halaman 3 -->
                  <div class="tab-pane fade" id="tabs-1-3">
                    <div class="box-event-modern">
                      <div class="event-item-modern">
                        <h4 class="event-item-modern-title"><a href="https://id.wikipedia.org/wiki/Tengkawang">Tengkawang (Shorea macrophylla)</a></h4>
                        <div class="event-item-modern-text">
                          <p>Tengkawang (Shorea macrophylla) adalah pohon endemik Kalimantan yang menghasilkan biji dengan minyak tengkawang, digunakan dalam kosmetik dan obat tradisional. Pohon ini termasuk langka dan dilindungi karena habitatnya yang terancam.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <h4 class="event-item-modern-title"><a href="https://id.wikipedia.org/wiki/Gaharu_(pohon)">Pohon Gaharu (Aquilaria malaccensis)</a></h4>
                        <div class="event-item-modern-text">
                          <p>Pohon Gaharu (Aquilaria malaccensis) adalah pohon tropis yang terkenal karena menghasilkan gaharu, yaitu resin aromatik yang bernilai tinggi. Gaharu digunakan dalam pembuatan parfum, obat tradisional, dan produk aromaterapi. Pohon ini ditemukan di hutan Asia Tenggara, termasuk Indonesia, dan termasuk dalam tumbuhan yang dilindungi karena perburuan liar dan kerusakan habitatnya.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <h4 class="event-item-modern-title"><a href="https://id.wikipedia.org/wiki/Kantong_semar">Kantong Semar (Nepenthes)</a></h4>
                        <div class="event-item-modern-text">
                          <p>Kantong Semar (Nepenthes) adalah tanaman pemakan serangga yang memiliki daun berbentuk kantong, yang berfungsi untuk menangkap dan mencerna serangga sebagai sumber nutrisinya. Tanaman ini tumbuh di daerah tropis, termasuk Indonesia, dan dikenal karena kemampuan uniknya dalam memerangkap mangsa menggunakan cairan di dalam kantongnya. Kantong semar termasuk tumbuhan langka dan dilindungi di beberapa daerah.</p>
                        </div>
                      </div>
                      <div class="event-item-modern">
                        <h4 class="event-item-modern-title"><a href="https://id.wikipedia.org/wiki/Kayu_hitam_sulawesi">Eboni (Diospyros spp.)</a></h4>
                        <div class="event-item-modern-text">
                          <p>Eboni (Diospyros spp.) adalah pohon yang menghasilkan kayu keras dan berwarna gelap, dikenal karena kualitasnya yang tinggi. Kayu eboni banyak digunakan dalam pembuatan barang-barang mewah seperti furnitur dan ukiran. Eboni termasuk tumbuhan yang terancam punah karena penebangan liar.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="row isotope-wrap">
          <!-- Galery-->
          <div class="col-lg-12">
            <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group" data-lg-thumbnail="false">
              <div class="row no-gutters row-condensed">
                <div class="col-12 col-sm-6 col-md-4 isotope-item wow-outer" data-filter="*">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="images/gallery-masonry-1-640x429.jpg" alt="" width="640" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="images/gallery-masonry-1-original.jpg" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 isotope-item wow-outer" data-filter="Category 3">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="images/gallery-masonry-2-640x429.jpg" alt="" width="640" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="images/gallery-masonry-2-original.jpg" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 isotope-item wow-outer" data-filter="Category 3">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="images/gallery-masonry-3-640x429.jpg" alt="" width="640" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="images/gallery-masonry-3-original.jpg" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
      <!-- Footer-->
      <footer class="section footer-minimal context-dark">
        <div class="container wow-outer">
          <div class="wow fadeIn">
            <div class="row row-60">
              <div class="col-12"><a href="index.php"><img src="images/logo-default1-140x57.png" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
              <div class="col-12">
                <ul class="footer-minimal-nav">
                  <li><a href="index.php">Menu</a></li>
                  <li><a href="https://inovasikuteknologi.blogspot.com/">Blog</a></li>
                  <li><a href="contacts.php">Contacts</a></li>
                  <li><a href="about-us.php">About</a></li>
                </ul>
              </div>
              <div class="col-12">
                <ul class="social-list">
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="https://web.facebook.com/profile.php?id=100079618073645"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="https://www.instagram.com/pakeknanya_xy/"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-tumblr" href="https://www.tiktok.com/@radarya_gaming"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play" href="https://www.youtube.com/@RadaryaGaming"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-pinterest-p" href="https://id.pinterest.com/aydinaryasatyaradithya/"></a></li>
                </ul>
              </div>
            </div>
            <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Arunika Flora</span><span>.&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><a href="https://www.termsfeed.com/live/98a877d4-a418-43b4-86c3-6fe110d44d43">Privacy Policy</a>. Design&nbsp;by&nbsp;<a href="https://www.youtube.com/@RadaryaGaming">Radithya</a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>