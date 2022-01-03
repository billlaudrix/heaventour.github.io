<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  

  <title>HeavenTour</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico.png" rel="icon">
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<!-- KONEKSI TABLE DATABASE  -->

    <?php

    require_once('config.php');
    
    
    $cek = count($_GET);
    if ($cek > 0) {
        $status = $_GET['status'];
        if ($status == 'success_tambah') { ?>
            
            <script> Swal.fire({
                title: 'Data Berhasil Disimpan!',
                text : 'Data di database akan diperbaharui!',
                icon : 'success'
            });</script>
            <?php
        } else if ($status == 'success_booking') {
            ?>
            
            <script> Swal.fire({
                title: 'Data Booking Berhasil Diproses!',
                text : 'Tim HeavenTour akan menghubungi kamu agar kamu segera memulai petualanganmu!',
                icon : 'success'
            });</script>
            <?php
        } else if ($status == 'success_delete') {
            ?>
            
            <script>
             
                Swal.fire({
                  title: 'Data Booking Berhasil Dihapus!',
                  text: "Silahkan Buat Book Order Yang Baru!",
                  icon: 'success',
                  showCancelButton: false,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Siap'
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location.href = "/heaventour/database/index.php#pricing";
                  }                   
                });
           
            
            
            </script>

            <?php
        }   else {
            ?>
            
            <script> Swal.fire({
                title: 'Data Gagal Diproses!',
                text : 'Data di database tidak akan diperbaharui!',
                icon : 'error'
            });</script>

            <?php
        }
    }
    

    ?>

    


    <!-- <div class="container">

    <h1 class="text-center">Menjadi Data Scientist dan Melampauinya 0.1</h1>
    <table class="table table-bordered table-striped" style="width: 100%;">
        <tr class="text-center">
            <th>ID</th>
            <th>NAMA CUSTOMER</th>
            <th>GENDER CUSTOMER</th>
            <th>UMUR</th>
            <th>KONTAK</th>
            <th>EMAIL</th>
            <th>ACTION</th>
        </tr>

    
    <?php

    // $query = "SELECT * FROM costumer";
    // $data  = mysqli_query($koneksi,$query);
    
    // if(mysqli_num_rows($data) > 0){
    //     while($row = mysqli_fetch_assoc($data)){
          
    //         echo "
    //         <tr class=\"text-center\">

    //             <td>". $row['id_cust'] ."</td>
    //             <td>". $row['cust_name'] ."</td>
    //             <td>". $row['cust_gender'] ."</td>
    //             <td>". $row['cust_age']."</td>
    //             <td>". $row['cust_contact']."</td>
    //             <td>" .$row['cust_email'] ."</td>
    //             <td>
                
    //             <a href='/heaventour/database/edit.php?id_cust=".$row['id_cust']. "' class='btn btn-secondary btn-lg active ' role='button' aria-pressed='true'>EDIT</a> 
    //             <a href='#' onclick='validasi(". $row['id_cust'] .")' class='btn btn-danger btn-lg  ' >HAPUS</a>
                
    //             </td>
            
    //         </tr>
            
            
            
    //         ";
    //     }
    // }else{
    //     echo "hehe gajelas Data";
    // } 
    // ?>
    
    
    
    </table>
    
    <a href="/heaventour/database/create.php" class="btn btn-info btn-lg active btn-lg btn-block" role="button" aria-pressed="true">Tambah Data</a>
    </div> -->

<!-- END OF KONEKSI TABLE DATABASE  -->


<!-- HEAVENTOUR  -->

<!-- <h1 class="text-center">HeavenTour</h1> -->



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
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- logo gambar -->
        <h1 class="text-light"><a href="/heaventour/database/index.php"> <a href="index.php"><img src="assets/img/favicon.png" alt="" class="img-fluid"></a> Heaven Tour</a></h1>
    </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Destinasi</a></li>
          
          <li class="dropdown"><a href="#"><span>Paket Tour</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li><a href="#pricing">Heaven</a></li>
                  <li><a href="#pricing">Sky</a></li>
                  <li><a href="#pricing">Earth</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Selamat Datang di Heaven Tour</h1>
      <h2>Segera Mulai Perjalananmu Menyusuri Tanah Surga di Indonesia!</h2>
      <a href="#portfolio" class="btn-get-started scrollto">Pilih Destinasi</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="zoom-in">
            <a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div  class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <div class="box-heading" data-aos="fade-up">
              <h4>Heaven Tour</h4>
              <h3>Kawan berkelana menyusuri indahnya Nusantara</h3>
              <p>Kami hadir sebagai solusi bagimu yang ingin menepi sejenak dari riuhnya hidup yang bergerak semakin cepat.</p>
            </div>

            <div class="icon-box" data-aos="fade-up">
              <!-- <div class="icon"><i class="bx bx-bali"></i></div> -->
              <h4 class="title"><a href="">Bali</a></h4>
              
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <!-- <div class="icon"><i class="bx bx-gift"></i></div> -->
              <h4 class="title"><a href="">Lombok</a></h4>
              
            </div>

            
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <!-- <div class="icon"><i class="bx bx-gift"></i></div> -->
              <h4 class="title"><a href="">Segera Hadir Destinasi Baru!</a></h4>
              
            </div>

          

          </div>
        </div>

      </div>
    </section>

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Mulai Petualanganmu!</h3>
          <p> Nusantara menantimu untuk segera memulai petualangan di tanah surga!</p>
          <a class="cta-btn" href="#pricing">Book Sekarang</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Destinasi</h2>
          <h3>Telusuri destinasi wisata Nusantara yang telah <span>Menantimu</span></h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Bali</li>
              <li data-filter=".filter-card">Lombok</li>
              <!-- <li data-filter=".filter-web">Web</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/tanahlot.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Tanah Lot</h4>
              <p>Pura Tanah Lot adalah salah satu Pura yang sangat disucikan di Bali, Indonesia. Di sini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. Pura Tanah Lot ini merupakan bagian dari pura Dang Kahyangan. </p>
              <a href="assets/img/tanahlot.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Tanah Lot"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/Penglipuran3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Desa Penglipuran</h4>
              <p>Selain bentuk bangunan traditional yang hampir sama, ada beberapa hal lain yang menarik dari desa Penglipuran Bangli seperti, kesejukan udara, kebersihan dan tata ruang yang tertata rapi.</p>
              <a href="assets/img/Penglipuran3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Desa Penglipuran"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/canggu.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Canggu</h4>
              <p>Keunikan Canggu salah satunya adalah ada desa seni yang menawarkan aktivitas yoga. Lokasinya berada di Jalan Subak Sari, Berawa. Wisatawan biasanya berkunjung ke tempat di sepulang dari Pantai Berawa. Desa seni yoga didedikasikan untuk orang-orang yang peduli akan kesehatan dan kebugaran tubuh.</p>
              <a href="assets/img/canggu.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/bayan.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Desa Bayan</h4>
              <p>Desa Bayan adalah desa yang terletak di Kabupaten Lombok Utara. di Desa Bayan terdapat Masjid adat tertua di pulau Lombok. di Desa Bayan pula tersimpan kekayaan budaya Nusantara..</p>
              <a href="assets/img/bayan.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Desa Bayan"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2018/12/Garuda-Wisnu-Kencana.jpg" class="img-fluid" alt="Garuda-Wisnu-Kencana">
            <div class="portfolio-info">
              <h4>Garuda Wisnu Kencana</h4>
              <p>Garuda Wisnu Kencana merupakan sebuah patung yang besar karya I Nyoman Nuarta dan sekarang menjadi tempat wisata di Bali.</p>
              <a href="https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2018/12/Garuda-Wisnu-Kencana.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="GWK"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="https://th.bing.com/th/id/R.7d2f45615b0ac548f2ac4a0c6d57f0ce?rik=ByG9bJvlay5GLg&riu=http%3a%2f%2f3.bp.blogspot.com%2f-VAXA1s-0rC0%2fUtMxB8Br77I%2fAAAAAAAAAMk%2fa9mXGRrj7Dw%2fs1600%2fDanau%2bBatur%2b2.JPG&ehk=WPdqgmVl4ioJZczTl665lpy7Eq5JwXQOyZzRtfCkOeg%3d&risl=&pid=ImgRaw&r=0" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Danau Batur</h4>
              <p>Danau Batur Kintamani</p>
              <a href="https://th.bing.com/th/id/R.7d2f45615b0ac548f2ac4a0c6d57f0ce?rik=ByG9bJvlay5GLg&riu=http%3a%2f%2f3.bp.blogspot.com%2f-VAXA1s-0rC0%2fUtMxB8Br77I%2fAAAAAAAAAMk%2fa9mXGRrj7Dw%2fs1600%2fDanau%2bBatur%2b2.JPG&ehk=WPdqgmVl4ioJZczTl665lpy7Eq5JwXQOyZzRtfCkOeg%3d&risl=&pid=ImgRaw&r=0" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Danau Batur"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/gili.jfif" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Gili Trawangan</h4>
              <p>Kelebihan Gili Trawangan dibandingkan dengan pantai lain adalah kita dapat menikmati sunset dan juga sunrise sekaligus di pantai ini. Hal ini terjadi karena Gili Trawangan memiliki pantai yang menghadap timur dan menghadap barat, dan jaraknya tidak terlalu jauh. Sehingga baik sunrise maupun sunset dapat kita nikmati di pantai ini.</p>
              <a href="assets/img/gili.jfif" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gili Trawangan"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/sumbawa.jfif" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sumbawa</h4>
              <p>Sumbawa adalah pulau yang terletak di sisi Barat NTB. Sumbawa menyimpan keindahan alam yang membuat kita seolah berada di surga.</p>
              <a href="assets/img/sumbawa.jfif" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sumbawa"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/kuta.jfif" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pantai Kuta</h4>
              <p>Pantai Kuta Bali terletak pada daerah yang strategis yaitu di pusat pulau Bali yang sangat mudah diakses dari segala arah. Pantai Kuta juga dekat dari pantai lainnya seperti Airport Reef, Kuta Reef, Pantai Legian Bali dan Pantai Seminyak Bali. Tempat ini juga dekat dengan tempat-tempat menarik di Bali yang banyak dikunjungi wisatawan. </p>
              <a href="assets/img/kuta.jfif" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Kuta"><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Harga</h2>
          <h3>Telusuri Harga Terbaik dari kami untuk <span> memulai petualanganmu</span></h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Sky</h3>
              <h4><sup>RP.</sup>3.999.999<span></span></h4>
              <ul>
                <li>Tanah Lot</li>
                <li>Canggu</li>
                <li>Desa Penglipuran</li>                
                <li>GWK</li>               
                <li>Kuta</li>
                <li class="na">Pura Besakih</li>
                <li class="na">Danau Batur</li>
              </ul>
              <div class="btn-wrap">
                <a href="/heaventour/database/book.php" class="btn-buy">Pesan Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended" data-aos="zoom-out" data-aos-delay="100">
              <span class="recommended-badge">recommended</span>
              <h3>Heaven</h3>
              <h4><sup>Rp.</sup>6.999.999<span></span></h4>
              <ul>
                <li>Tanah Lot</li>
                <li>Canggu</li>
                <li>Desa Penglipuran</li>
                <li>Pura Besakih</li>
                <li>GWK</li>
                <li>Danau Batur</li>
                <li>Kuta</li>
                <li>Desa Bayan</li>
                <li>Sumbawa</li>
                <li>Gili Trawangan</li>
              </ul>
              <div class="btn-wrap">
                <a href="/heaventour/database/book.php" class="btn-buy">Pesan Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Earth</h3>
              <h4><sup>Rp.</sup>4.999.999<span></span></h4>
              <ul>
                <li>Desa Bayan</li>
                <li>Sumbawa</li>
                <li>Gili Trawangan</li>
                <li class="na">Kuta</li>
                <li class="na">Canggu</li>
                <li class="na">Tanah Lot</li>
              </ul>
              <div class="btn-wrap">
                <a href="/heaventour/database/book.php" class="btn-buy">Pesan Sekarang</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Destinasinya kemana aja kak? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                 <a href="#portfolio">Kesini nih destinasinya</a>
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Selain Bali dan Lombok, apakah ada destinasi yang lain kak?? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Untuk sementara belum ada destinasi selain Bali dan Lombok, namun kedepannya akan ada destinasi baru! Tungguin ya!!
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Apakah harganya bisa lebih murah kak? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Harga yang ditawarkan oleh HeavenTour adalah harga terbaik yang dapat kamu temukan pada hampir semua agen tour yang ada di Indonesia, jadi segera mulai perjalananmu sekarang bersama HeavenTour!
                </p>
              </div>
            </li>


          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Contact</h2>
          <h3>Hubungi <span>HeavenTour</span> </h3>
          <p>Hubungi kami kapanpun anda siap untuk memulai petualangan anda!</p>
        </div>

        <div>
         
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15778.217181936734!2d115.2552645!3d-8.638714!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81ed76786e90eb40!2sBalai%20Diklat%20Industri%20Denpasar!5e0!3m2!1sen!2sid!4v1636014589341!5m2!1sen!2sid" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div>
          <!-- <div class="row d-flex justify-content-center"> -->
            <div class="col-lg-6" data-aos="fade-right">
            <div class="info">
              <i class="bi bi-geo-alt "></i>
              <div class="address" >
               
                <h4>Lokasi:</h4>
                <p>Jl. WR Supratman No.302, Kesiman Kertalangu, <br> Kec. Denpasar Tim., Kota Denpasar, Bali 80237</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>book@heaventour.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-whatsapp"></i>
                <h4>Whatsapp:</h4>
                <p>+62 851 5555 5311</p>
              </div>

            </div>

         
          </div>
          


        </div>

      </div>
    </section><!-- End Contact Section -->

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
  </footer><!-- End Footer -->

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


<!-- END SECTION OF HEAVENTOUR  -->


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
            function validasi(param) {
                Swal.fire({
                  title: 'Yakin pengen hapus datanya?',
                  text: "Data yang udah dihapus gabisa dibalikin lho!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes'
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location.href = "/heaventour/database/delete.php?id_cust="+param;
                  } else {
                      Swal.fire({
                        title: "Batal ya....?",
                        text: "Jangan ragu-ragu dong, remaja labil!",
                        icon: "info"
                      });
                  }
                });
            }
        </script>






</body>


</html>