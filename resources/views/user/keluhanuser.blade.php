<!doctype html>
<html lang="en">
  <head>
  	<title>Posyandu Emomma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='assets/keluh/https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="assets/keluh/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/keluh/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-1">
					<h2 class="heading-section">Posyandu EMomma</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3>Keluhan</h3>
									<p class="mb-4">Kami terbuka untuk saran apa pun atau hanya untuk mengobrol</p>
									<div id="form-message-warning" class="mb-4"></div>
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<div class="row mb-4">
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text">
							            <p><span>Location:</span> Jl. Dr. Ir. H. Soekarno, Mulyorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60115</p>
							          </div>
						          </div>
										</div>
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text">
							            <p><span>Email:</span> <a href="mailto:info@yoursite.com">admin@gmail.com</a></p>
							          </div>
						          </div>
										</div>
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text">
							            <p><span>Phone:</span> <a href="tel://1234567920">+(031)-5915551</a></p>
							          </div>
						          </div>
										</div>

									</div>
                                    <h3 class="display-12 font-weight-bold text-black">Keluhan Apa Yang Anda rasakan :</h3>
                                    <hr>

                                    {{-- <form action="{{ route('keluhan.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                          <label for="exampleFormControlTextarea1">Keluhan :</label>
                                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keluhan"></textarea>
                                        </div>
                                        <div class="form-group">
                                          <button type="submit" class="btn btn-secondary">Kirim</button>
                                        </div>
                                      </form> --}}

									<form action="{{ route('keluhan.store') }}" method="POST" name="keluhan" class="contactForm">
                                        @csrf
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="keluhan" class="form-control" name="keluhan" cols="40" rows="4" placeholder="Create a message here..."></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<button type="submit" class="btn btn-primary">Kirim</button>
                                                    <button class="btn btn-secondary"><a href ="/user">Kembali</a></button>
												</div>
                                    </form>
											</div>
										</div>
									</form>
									<div class="w-100 social-media mt-5">
										<h3>Follow us here</h3>
										<p>
											<a href="">Facebook</a>
											<a href="">Twitter</a>
											<a href="">Instagram</a>
											<a href="">Dribbble</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(assets/keluh/images/mom.jpg);">
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

  <script src="assets/keluh/js/jquery.min.js"></script>
  <script src="assets/keluh/js/popper.js"></script>
  <script src="assets/keluh/js/bootstrap.min.js"></script>
  <script src="assets/keluh/js/jquery.validate.min.js"></script>
  <script src="assets/keluh/js/main.js"></script>

	</body>
</html>
{{--
<!DOCTYPE html>
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
          <h1 class="display-4 font-weight-bold text-white">Keluhan Apa Yang Anda rasakan</h1>
          <p class="text-white mb-1">
            eMomma juga menyediakan Keluhan
          </p>
          <form action="{{ route('keluhan.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Keluhan :</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keluhan"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary">Kirim</button>
            </div>
          </form>
        </div>
        <div class="col-lg-5 text-center text-lg-right">
          <img class="img-fluid mb-5 mt-3" src="img/momi.jpg"/>
        </div>
      </div>
    </div>
    <!-- Header End --> --}}

