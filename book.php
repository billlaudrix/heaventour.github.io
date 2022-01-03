<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Booking HeavenTour</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- ===== STYLE SECTION FORM =====  -->
    <style>
        body,
        html {
            background-color: #ebecf0;
        }

        body,
        p,
        input,
        select,
        textarea,
        button,
        select {
            font-family: "Montserrat", sans-serif;
            letter-spacing: -0.2px;
            font-size: 16px;
        }

        div,
        p {
            /* color: #babecc; */
            /* text-shadow: 1px 1px 1px #fff; */
        }

        form {
            padding: 16px;
            width: 640px;
            margin: 0 auto;
        }

        .segment {
            padding: 32px 0;
            text-align: center;
        }

        button,
        input, select {
            border: 0;
            outline: 0;
            font-size: 16px;
            border-radius: 320px;
            padding: 16px;
            background-color: #ebecf0;
            text-shadow: 1px 1px 0 #fff;
        }

        label {
            display: block;
            margin-bottom: 24px;
            width: 100%;
        }

        input , select {
            margin-right: 8px;
            box-shadow: inset 2px 2px 5px #babecc, inset -5px -5px 10px #fff;
            width: 100%;
            box-sizing: border-box;
            transition: all 0.2s ease-in-out;
            appearance: none;
            -webkit-appearance: none;
        }

        input:focus {
            box-shadow: inset 1px 1px 2px #babecc, inset -1px -1px 2px #fff;
        }

        button {
            color: #61677c;
            font-weight: bold;
            box-shadow: -5px -5px 20px #fff, 5px 5px 20px #babecc;
            transition: all 0.2s ease-in-out;
            cursor: pointer;
            font-weight: 600;
        }

        button:hover {
            box-shadow: -2px -2px 5px #fff, 2px 2px 5px #babecc;
        }

        button:active {
            box-shadow: inset 1px 1px 2px #babecc, inset -1px -1px 2px #fff;
        }

        button .icon {
            margin-right: 8px;
        }

        button.unit {
            border-radius: 8px;
            line-height: 0;
            width: 48px;
            height: 48px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 8px;
            font-size: 19.2px;
        }

        button.unit .icon {
            margin-right: 0;
        }

        button.red {
            display: block;
            width: 100%;
            color: #ae1100;
        }

        .input-group {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .input-group label {
            margin: 0;
            flex: 1;
        }
    </style>
    <!-- ==== END SECTION OF STYLE FORM ==== -->

    <!-- =======================================================
  * Template Name: Remember - v4.6.0
  * Template URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <!-- tour form style  -->

    <!-- end of tour form style  -->

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">book@heaventour.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 851 5555 5311</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> -->
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">

                <h1 class="text-light"><a href="/heaventour/database/index.php"> <a href="index.php"><img src="assets/img/favicon.png" alt="" class="img-fluid"></a>Heaven Tour</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->

            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/heaventour/database/index.php#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="/heaventour/database/index.php#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="/heaventour/database/index.php#portfolio">Destinasi</a></li>

                    <li class="dropdown"><a href="#"><span>Paket Tour</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>

                            <li><a href="/heaventour/database/index.php#pricing">Heaven</a></li>
                            <li><a href="/heaventour/database/index.php#pricing">Sky</a></li>
                            <li><a href="/heaventour/database/index.php#pricing">Earth</a></li>
                            <!-- <li><a href="#">Lombok 7 Hari 7 Malam</a></li> -->
                            <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  
                 
                </ul> -->
                    </li>

                </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Booking Page HeavenTour</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Booking Page</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <p>
                    <!-- Ini adalah halaman booking HeavenTour -->
                </p>
            </div>
        </section>

        <!-- main form section  -->



        <!-- end of main form seciton  -->

        <!-- ===== BOOKING FORM SECTION ====  -->
        <!-- <div class="container">

<div class="card bg-light text-blue">
  <img class="card-img" src="assets/img/canggu.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h2 class="card-title text-center">BOOKING FORM HEAVENTOUR</h2>
  &nbsp;
  &nbsp;
  <br>
    <div class="container">

<form action='/heaventour/database/simpan.php' method="POST" >
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA :</label>
    <div class="col-sm-10">
      <input type="label" name="nama" class="form-control" id="nama" placeholder="Masukan nama anda ...">
    </div>
  </div>
&nbsp;
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">UMUR :</label>
    <div class="col-sm-10">
      <input type="number" name="age" class="form-control" id="age" placeholder="Masukan umur anda ...">
    </div>
  </div>
  &nbsp;
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">EMAIL :</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="Masukan email anda ...">
    </div>
  </div>
  &nbsp;
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NOMOR TELEPON :</label>
    <div class="col-sm-10">
      <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Masukan nomor telepon anda ...">
    </div>
  </div>
  &nbsp;
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">JENIS KELAMIN :</label>
    <div class="col-sm-10">
    <label for="">JENIS KELAMIN</label>
        <select class="form-control" name="gender">
        <div>
            <option value="" id="jk">Pilih Jenis Kelamin ...</option>
            <option value="Laki-Laki" id="jk">Laki-Laki</option>
            <option value="Perempuan" id="jk">Perempuan</option>
        </div>
        </select>
        </div>
    </div>
  </div>

  
  &nbsp;
  <div class="form-group row">
    <div class="col-sm-12 text-center">
      <button type="submit" class="btn btn-primary btn-mg btn-block">Simpan</button>
    </div>
  </div>
</form>

</div>

 
 
  </div>
</div>

  </div> -->

        &nbsp;

        <form data-aos="fade-center" action="/heaventour/database/simpandatabooking.php" method="POST">

            <div class="segment">
                <h1>HeavenTour Booking</h1>
            </div>

            <label>
                <input name="nama" type="text" placeholder="Nama" />
            </label>
            <label>
                <input name="email" type="email" placeholder="Email" />
            </label>
            <label>
                <input name="telepon" type="number" placeholder="Nomor Telepon" />
            </label>
            <label for="" >
                <input name="age" type="Number" placeholder="Umur">
            </label>
            <label for="">
                <select name="gender" id="">

                    <option value="" id="jk">Pilih Jenis Kelamin ...</option>
                    <option value="Laki-Laki" id="jk">Laki-Laki</option>
                    <option value="Perempuan" id="jk">Perempuan</option>

                </select>
            </label>

            <!-- <label for="">
                <input type="number" name="jumlahorang" placeholder="Jumlah Orang ...">
            </label>

            <label for="">
                <select name="paket" id="">

                    <option value="" id="jk">Pilih Paket Tour ...</option>
                    <option value="Heaven" id="jk">Heaven</option>
                    <option value="Sky" id="jk">Sky</option>
                    <option value="Earth" id="jk">Earth</option>

                </select>              
            </label>
            
            <label for="">
                <p class="text-center">Tanggal Berangkat</p>
                <input type="date" name="tanggalberangkat" placeholder="Tanggal Berangkat">
            </label> -->

            


            <button class="red" type="submit"><i class="icon ion-md-lock"></i>Next!</button>

         

        </form>

        <!-- ===== CARD INPUT DATABASE =====  -->



        <!-- ===== END SECTION OF CARD INPUT DATABASE =====  -->


        <!-- ===== END SECTION OF BOOKING FORM SECTION  -->




        <!-- contact session -->
        <section id="contact" class="contact">
            <div class="container " >

                <div class="section-title" data-aos="zoom-in">
                    <h2>Contact</h2>
                    <h3>Hubungi <span>HeavenTour</span> </h3>
                    <p>Hubungi kami kapanpun anda siap untuk memulai petualangan anda!</p>
                </div>

                <div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15778.217181936734!2d115.2552645!3d-8.638714!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81ed76786e90eb40!2sBalai%20Diklat%20Industri%20Denpasar!5e0!3m2!1sen!2sid!4v1636014589341!5m2!1sen!2sid" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            
                <div>
                    <div class="row d-flex justify-content-center text-center ">
                    <div class="col-lg-6 " data-aos="fade-center">
                        <div class="info">
                          <!-- <br> <i class="bi bi-geo-alt"></i> -->
                            <div class="address" style="">

                                 
                                 <h4>Lokasi:</h4>
                                <p>Jl. WR Supratman No.302, Kesiman Kertalangu, <br> Kec. Denpasar Tim., Kota Denpasar, Bali 80237</p>
                            </div>

                            <div class="email">
                                <!-- <i class="bi bi-envelope"></i> -->
                                <h4>Email:</h4>
                                <p>book@heaventour.com</p>
                            </div>

                            <div class="phone">
                                <!-- <i class="bi bi-whatsapp"></i> -->
                                <h4>Whatsapp:</h4>
                                <p>+62 851 5555 5311</p>
                            </div>

                        </div>

                        <!-- </div> -->
                    </div>




                </div>

            </div>
        </section>
        <!-- end of contact session  -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

<div class="footer-top">

  <div class="container">

    <div class="row  justify-content-center">
      <div class="col-lg-6">
        <h3>HeavenTour</h3>
        <p>Kawan berkelana menyusuri indahnya Nusantara</p>
      </div>
    </div>


    <div class="social-links">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-linkedin"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-whatsapp"></i></a>
    </div>

  </div>
</div>

<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span>HeavenTour</span></strong>. All Rights Reserved 2021
  </div>
  <div class="credits">
   
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade & Billlaudrix 2021</a>
  </div>
</div>
</footer>

    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>