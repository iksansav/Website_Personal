<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css internal -->
    <link rel="stylesheet" href="assets/dist/style.css">
    <title>Langgeng Travel</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  </head>
  <body>
  <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    //Cek apakah  ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $name = input($_POST["name"]);
      $email = input($_POST["email"]);
      $komentar = input($_POST["komentar"]);

      //Query input menginput data kedalam tabel anggota
      $sql = "INSERT INTO anggota (name,email,komentar) VALUES 
      ('$name','$email','$komentar')";

      //Mengeksekusi atau menjalankan query diatas
      $hasil = mysqli_query($kon, $sql);

      //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
      if ($hasil) {
        echo "<script>
        alert('Komentar Berhasil Dikirim');
        window.location = 'index.php';
    </script>";
      } else {
        echo "<div class='alert alert-danger'>Data Gagal Disimpan</div>";
      }
    }
    ?>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top animate__animated animate__fadeInDown">
        <div class="container">
          <a class="navbar-brand fw-bold fs-4" href="#">Langgeng Travel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Faq</a>
              </li>
            </ul>
            <div class="text-white text-center">
                <i class="fa-brands fa-instagram fs-5 mx-3"></i>
                <i class="fa-brands fa-facebook fs-5 mx-3"></i>
            </div>
          </div>
        </div>
      </nav>
    <!-- EndNavBar -->


    <!-- Hero -->
      <div class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-white fw-bold mb-4 animate__animated animate__fadeInUp">
                        Join Us 
                    <br>
                    Lets Traveling With Your Favorite Destination
                    </h1>

                    <p class="text-white mb-4 text-opacity-200">
                        this is not this ordinary travel, this travel can make money, without holidays
                    </p>

                    <button type="button" class="btn btn-lg btn-primary">Join With Us</button>
                    <button type="button" class="btn btn-lg btn-outline-light">About Us</button>
                </div>
            </div>
        </div>
      </div>
    <!-- End Hero -->

    <!-- about -->
    <div class="about">
        <div class="container-fluid">
        <div class="row">
            <div class="col py-5 text-center" data-aos="fade-up">
                <h2>2000+</h2>
                <h2>Users</h2>
                <p>many have stopped by our booth, don't hesitate with our travels.
                </p>
            </div>
            <div class="col py-5 bg-dark text-white text-center" data-aos="fade-down" data-aos-duration="1000">
                <h2>250+</h2>
                <h2>Destination</h2>
                <p>many tourist destinations that we offer to you.
                </p>
            </div>
        </div>
        </div>
    </div>
    <!-- end about -->

    <!-- services -->
    <div class="services">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="border-bottom pb-2">
                    Detail Services <br>
                    In Our Service
                    </h2>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                <div class="col" data-aos="zoom-in-down" data-aos-duration="1000">
                    <img src="assets/img/resort.jpeg" class="w-100">
                    <h4 class="mt-3">Resort</h4>
                    <p>Lorem ipsum dolor sit amet <br> katanya cinta sedalam samudra.</p>
                </div>
                <div class="col" data-aos="zoom-in-down" data-aos-duration="1000">
                    <img src="assets/img/services2.jpg" class="w-100">
                    <h4 class="mt-3">Hotel</h4>
                    <p>Lorem ipsum dolor sit amet <br> katanya cinta sedalam samudra.</p>
                </div>      
                <div class="col" data-aos="zoom-in-down" data-aos-duration="1000">
                    <img src="assets/img/resort.jpeg" class="w-100">
                    <h4 class="mt-3">Resort</h4>
                    <p>Lorem ipsum dolor sit amet <br> katanya cinta sedalam samudra.</p>
                </div>            
                <div class="col" data-aos="zoom-in-down" data-aos-duration="1000">
                    <img src="assets/img/services2.jpg" class="w-100">
                    <h4 class="mt-3">Hotel</h4>
                    <p>Lorem ipsum dolor sit amet <br> katanya cinta sedalam samudra.</p>
                </div>      
                <div class="col" data-aos="zoom-in-down" data-aos-duration="1000">
                    <img src="assets/img/resort.jpeg" class="w-100">
                    <h4 class="mt-3">Resort</h4>
                    <p>Lorem ipsum dolor sit amet <br> katanya cinta sedalam samudra.</p>
                </div>      
                <div class="col" data-aos="zoom-in-down" data-aos-duration="1000">
                    <img src="assets/img/services2.jpg" class="w-100">
                    <h4 class="mt-3">Hotel</h4>
                    <p>Lorem ipsum dolor sit amet <br> katanya cinta sedalam samudra.</p>
                </div>           
            </div>
        </div>
    </div>
    <!-- end services -->

    <!-- Comment box -->

    <div class="comment-box">
        <h2>Comments</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <input type="text" name="name" placeholder="Full Name...">
            <input type="email" name="email" placeholder="Email Address...">
            <textarea name="komentar" placeholder="Type Your Comment..."></textarea>
            <button type="submit">Submit Comment</button>
        </form>
    </div>
        
    <!-- Footer -->
    <div class="footer pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 bg-dark">
                    <h2 class="text-white fw-bold mt-2">Langgeng Travel</h2>
                    <p class="text-white-50">very useful travel service provider</p>
                </div>
                <div class="col col-lg-3 bg-dark d-flex flex-column text-white">
                    <h5 class="text-white fw-bold mt-2">Menu</h5>
                    <a href="" class="text-white-50 mt-2 text-decoration-none">Home</a>
                    <a href="" class="text-white-50 mt-2 text-decoration-none">Services</a>
                    <a href="" class="text-white-50 mt-2 text-decoration-none">FAQ</a>
                </div>  
                <div class="col col-lg-3 bg-dark d-flex flex-column text-white">
                    <h5 class="text-white fw-bold mt-2">Contact</h5>
                    <a href="" class="text-white-50 mt-2 text-decoration-none">LanggengTravel@gmail.com</a>
                    <a href="" class="text-white-50 mt-2 text-decoration-none">0812 1230 2393</a>
                    <a href="" class="text-white-50 mt-2 text-decoration-none">@LanggengTravelTamini ( Instagram )</a>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-white text-center copyright">&copy; Copyright 2023 by LanggengTravel, ALL Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- fonts google poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- internal -->
    <link rel="stylesheet" href="assets/dist/style.css">
    <script src="assets/dist/script.js"></script>
    <!-- external -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

  </body>
</html>