<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Posyandu EMomma</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="https://spesialis1.ikf.fk.unair.ac.id/wp-content/uploads/2019/02/logo-unair.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/admin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/admin/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @include('admin.partials.header')
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="formbalita/create">
              <i class="bi bi-circle"></i><span>Form Balita</span>
            </a>
          </li>
          <li>
            <a href="formibu/create">
              <i class="bi bi-circle"></i><span>Form Ibu Hamil</span>
            </a>
          </li>
          <li>
            <a href="/formvitamin">
              <i class="bi bi-circle"></i><span>Form Vitamin</span>
            </a>
          </li>
          <li>
            <a href="/formartikel">
              <i class="bi bi-circle"></i><span>Form Artikel</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/tabelbalita">
              <i class="bi bi-circle"></i><span>Tabel Balita</span>
            </a>
          </li>
          <li>
            <a href="/tabelibu">
              <i class="bi bi-circle"></i><span>Tabel Ibu Hamil</span>
            </a>
          </li>
           <li>
            <a href="/tabelvitamin">
              <i class="bi bi-circle"></i><span>Tabel Vitamin</span>
            </a>
          </li>
          <li>
            <a href="/tabelartikel">
              <i class="bi bi-circle"></i><span>Tabel Artikel</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Laporan Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/laporandatabalita">
              <i class="bi bi-circle"></i><span>Laporan Data Balita</span>
            </a>
          </li>
          <li>
            <a href="/laporandataibu">
              <i class="bi bi-circle"></i><span>Laporan Data Ibu Hamil</span>
            </a>
          </li>
          <li>
            <a href="/laporanvitamin">
              <i class="bi bi-circle"></i><span>Laporan Vitamin</span>
            </a>
          </li>
          {{-- <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>Laporan Penimbangan</span>
            </a>
          </li> --}}
        </ul>
      </li><!-- End Charts Nav -->


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/profileadminn">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/keluhanadmin">
          <i class="bi bi-card-list"></i>
          <span>Keluhan</span>
        </a>
      </li><!-- End Register Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav --> --}}

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"></a>

                </div>

                <div class="card-body">
                  <h5 class="card-title">Balita</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-form"></i>
                    </div>
                    <div class="ps-3">
                      <h6>12</h6>
                      {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"></a>

                </div>

                <div class="card-body">
                  <h5 class="card-title">Ibu Hamil</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class=""></i>
                    </div>
                    <div class="ps-3">
                      <h6>3</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

                 <!-- Revenue Card -->
                 <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">
                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"></a>

                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Vitamin</h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class=""></i>
                          </div>
                          <div class="ps-3">
                            <h6>13</h6>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Revenue Card -->

                       <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"></a>

                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Ya</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class=""></i>
                      </div>
                      <div class="ps-3">
                        <h6>09</h6>
                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Revenue Card -->

            {{-- <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card --> --}}


            {{-- <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"></a>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Data Ibu</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Alamat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>$64</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>$47</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                        <td>$147</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td>$67</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                        <td>$165</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales --> --}}


          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

 <!-- News & Updates Traffic -->
 <div class="card">
    <div class="filter">

    </div>

    <div class="card-body pb-0">
      <h5 class="card-title">Artikel</h5>

      <div class="news">
        <div class="post-item clearfix">
          <img src="assets/admin/img/news-1.jpg" alt="">
          <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
          <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
        </div>

        <div class="post-item clearfix">
          <img src="assets/admin/img/news-2.jpg" alt="">
          <h4><a href="#">Quidem autem et impedit</a></h4>
          <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
        </div>

        <div class="post-item clearfix">
          <img src="assets/admin/img/news-3.jpg" alt="">
          <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
          <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
        </div>

      </div><!-- End sidebar recent posts-->

    </div>
  </div><!-- End News & Updates -->


        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/admin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/admin/vendor/chart.js/chart.min.js"></script>
  <script src="assets/admin/vendor/echarts/echarts.min.js"></script>
  <script src="assets/admin/vendor/quill/quill.min.js"></script>
  <script src="assets/admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/admin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/admin/js/main.js"></script>

</body>

</html>
