<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Posyandu EMomma</title>
            <!-- Favicons -->
            <link rel="icon" type="image/x-icon" href="https://spesialis1.ikf.fk.unair.ac.id/wp-content/uploads/2019/02/logo-unair.png" />
            <!-- Font Awesome icons (free version)-->
            <script src="assets/user1/https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
            <!-- Google fonts-->
            <link rel="preconnect" href="assets/user1/https://fonts.gstatic.com" />
            <link href="assets/user1/https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
            <link href="assets/user1/https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="assets/user1/css/styles.css" rel="stylesheet" />
        </head>
        <body>
            <!-- Background Video-->
            <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/user1/assets/mp4/ibu.webm" type="video/mp4" /></video>
            <!-- Masthead-->
            <div class="masthead">
                <div class="masthead-content text-white">
                    <div class="container-fluid px-4 px-lg-0">
                        <h1 class="fst-italic lh-1 mb-4">Posyandu Emomma</h1>
                        <p class="mb-5"> eMomma juga menyediakan fitur Kalkulator kehamilan,
                            Yuk Bunda, hitung tanggal perkiraan si Kecil lahir melalui langkah mudah di bawah ini.
                          </p>
                          <p class="text-white mb-1">Hari Pertama Haid Terakhir (HPHT):</p>

                        <!-- * * * * * * * * * * * * * * *-->
                       <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        {{-- <form id="contactForm" data-sb-form-api-token="API_TOKEN"> --}}
                            <!-- Email address input-->
                             <div class="row input-group-newsletter">
                                <form action="/hpht" method="POST">
                                @csrf
                                <div class="col"><input class="form-control" id="HPHT" name ="CekKehamilan" type="date" /></div>
                                <hr>
                                <div class="col-auto"><button class="btn btn-primary" id="submitButton" type="submit" href="/hasil">Submit</button>
                                <button class="btn btn-secondary"><a href ="/user">Kembali</a></button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JS-->
            <script src="assets/user1/https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="assets/user1/js/scripts.js"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="assets/user1/https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        </body>
    </html>


{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Posyandu EMomma</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://spesialis1.ikf.fk.unair.ac.id/wp-content/uploads/2019/02/logo-unair.png" />


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light">
        <nav class="navbar bg-light">
            <div class="container-fluid">
              <a class="navbar-brand">EMomma</a>
                <button class="btn btn-outline-success"><a href ="/user">Kembali</a></button>
            </div>
          </nav>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
      <div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
          <h4 class="text-white mb-4 mt-5 mt-lg-0">Posyandu EMomma</h4>
          <h1 class="display-4 font-weight-bold text-white">Kalkulator Kehamilan</h1>
          <p class="text-white mb-1">
            eMomma juga menyediakan fitur Kalkulator kehamilan,
            Yuk Bunda, hitung tanggal perkiraan si Kecil lahir melalui langkah mudah di bawah ini.
          </p>
          <p class="text-white mb-1">Hari Pertama Haid Terakhir (HPHT):</p>
          <form action="/hpht" method="POST">
            @csrf
          <input type="date" id="HPHT" name="CekKehamilan">
          <input type="submit" href="/hasil">
        </div>
        <div class="col-lg-5 text-center text-lg-right">
          <img class="img-fluid mb-5 mt-3" src="img/momi.jpg"/>
        </div>
      </div>
    </div>
    <!-- Header End -->  --}}

