<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Laundry</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="assets/landing/img/favicon.png" rel="icon">
  <link href="assets/landing/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="assets/landing/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets/landing/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/landing/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/landing/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/landing/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/landing/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/landing/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <!-- <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div> -->

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>Laundry</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">Tentang Kita</a></li>
          <li><a href="#portfolio">Post</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#testimonials">Team</a></li>
          <li><a href="<?= base_url("auth");  ?>">Login</a></li>
          <li><a href="<?= base_url("home/caripesanan") ?>">Cari Pesanan</a></li>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Selamat Datang<br>di <span>Laundry-an :)</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Mulai</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="assets/landing/img/intro-image.png" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="assets/landing/img/about-img.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>Tetang kita</h2>
              <h3>Aplikasi sistem informasi laundry</h3></br></br></br>
              <p>Aplikasi sistem informasi laundry ini dibuat untuk mempermudah pekerjaan dalam mencatat dan memonitoring data laundry. </p>
              <p>Dalam aplikasi ini terdapat fungsionalitas dasar seperti CRUD (Create Replace Update Delete), aplikasi ini diharapkan mampu mempermudah memonitor laundry an yang sudah selesai.</p>
              <!-- <p>Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores neque. Aspernatur consectetur omnis numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae. Et vel ut quidem alias veritatis repudiandae ut fugit. Est ut eligendi aspernatur nulla voluptates veniam iusto vel quisquam. Fugit ut maxime incidunt accusantium totam repellendus eum error. Et repudiandae eum iste qui et ut ab alias.</p>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->


    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Post Laundry-an</h3>
        </header>

        <div class="row portfolio-container">

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/landing/img/portfolio/app1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="assets/landing/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="assets/landing/img/portfolio/web3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="assets/landing/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <?php foreach ($post as $po) : ?>

            <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-duration="1s">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/article/img/post/') . $po['image']; ?>" class="img-fluid" alt="" alt="<?= $po['title']; ?>">
                <div class="portfolio-info">
                  <h4><a href="#"><?= $po['title']; ?></a></h4>
                  <p><?= word_limiter($po['body'], 20); ?></p>
                  <div>
                    <a href="<?= base_url('assets/article/img/post/') . $po['image']; ?>" class="link-preview" data-lightbox="portfolio" data-title="<?= $po['title']; ?>" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="<?= base_url('home/detail/') . $po['slug_post']; ?>" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>


          <?php endforeach; ?>

        </div>

      </div>
    </section><!-- #portfolio -->


    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Layanan</h3>
          <p>Layanan dari aplikasi</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-person" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Akun</a></h4>
              <p class="description">Masuk akun di aplikasi</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-tshirt" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Pesanan</a></h4>
              <p class="description">Melihat pesanan laundry kamu tinggal ke aplikasi</p>
            </div>
          </div>
          <!-- <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- #services -->



    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3>Team</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">

              <div class="testimonial-item">
                <img src="assets/landing/img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Krisna Ilafat</h3>
                <h4>Programmer</h4>
                <p>
                  Nama saya krisna, harapan saya aplikasi ini berguna namun bisa dikembangkan lagi. Aplikasi ini dibuat memenuhi tugas dari matakuliah Aplikasi Pemrograman Berorientasi Objek.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/landing/img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Akhmad Nizhami</h3>
                <h4>Analis</h4>
                <p>
                  Dalam pembelajaran ini banyak ilmu dan pengalaman yang sangat berharga. Semoga bekal ilmu ini bisa seslalu dimanfaatkan dengan baik dan benar.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/landing/img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Maryam Alizza</h3>
                <h4>Designer</h4>
                <p>
                  Aplikasi yang bagus walaupun masih banyak kekurangan. Namun dalam pengerjaannya semaksimal mungkin dan berharap yang terbaik.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/landing/img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Sham Akbar</h3>
                <h4>Ketua</h4>
                <p>
                  Tantangan belum selesai sampai disini. Evalusi dan pemeriksaan akan selalu dilihat. Kedepannya aplikasi akan bisa lebih bagus.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
                  <h3>Laundry</h3>
                  <p>Aplikasi sistem informasi laundry ini dibuat untuk mempermudah pekerjaan dalam mencatat dan memonitoring data laundry.</p>
                </div>

                <!-- <div class="footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                    <form action="" method="post">
                      <input type="email" name="email"><input type="submit"  value="Subscribe">
                    </form>
                  </div> -->

              </div>

              <div class="col-sm-6">
                <!-- <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Terms of service</a></li>
                      <li><a href="#">Privacy policy</a></li>
                    </ul>
                  </div> -->

                <div class="footer-links">
                  <h4>Contact Us</h4>
                  <p>
                    Jl. Cikutra No. 204A <br>
                    Bandung<br>
                    , Jawa Barat <br>
                    <strong>Phone:</strong> +6282218191042<br>
                    <strong>Email:</strong> krisnailafat@gmail.com<br>
                  </p>
                </div>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>Send us a message</h4>
              <!-- <p>Silahkan hubungi kami.</p> -->
              <form action="<?= base_url('landing/contact'); ?>" method="POST" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message" value="Send">Send Message</button></div>
              </form>
            </div>

          </div>

          <!-- <div class="col-lg-6">

            <div class="form">
              
              <h4>Send us a message</h4>
              <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>

          </div> -->



        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="assets/landing/lib/jquery/jquery.min.js"></script>
  <script src="assets/landing/lib/jquery/jquery-migrate.min.js"></script>
  <script src="assets/landing/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/landing/lib/easing/easing.min.js"></script>
  <script src="assets/landing/lib/mobile-nav/mobile-nav.js"></script>
  <script src="assets/landing/lib/wow/wow.min.js"></script>
  <script src="assets/landing/lib/waypoints/waypoints.min.js"></script>
  <script src="assets/landing/lib/counterup/counterup.min.js"></script>
  <script src="assets/landing/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/landing/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/landing/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="assets/landing/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="assets/landing/js/main.js"></script>

</body>

</html>