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
            <a href="/formibu">
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
            <a href="/laporanpenimbangan">
              <i class="bi bi-circle"></i><span>Laporan Penimbangan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
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

    <!--page-->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Tabel Artikel</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
          <li class="breadcrumb-item"><a href="/tabelartikel">TabelArtikel</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

          </div>
        </div><!-- End Left side columns -->

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Artikel</h5>
              {{-- <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p> --}}
              <!-- Bordered Table -->

                <a href="/formartikel" class="btn btn-primary" role="button" data-bs-toggle="submit">Tambah</a>
                <br>
                <br>
                <thead>
                <table class="table table-bordered">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Kategori Artikel</th>
                    <th scope="col">Judul Artikel</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($artikel as $art)
                  {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                  <th scope="row">{{ $art->id }}</th>
                  <td>{{ $art->Gambar }}</td>
                  <td>{{ $art->Kategori }}</td>
                  <td>{{ $art->Judul }}</td>
                  <td>{{ $art->Isi }}</td>

                  <td>
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$art->id}}">
                          edit
                        </button>

                             <!--delete-->
                             <form class='d-inline' action="/admin/{{$art->id}}" method="POST">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-danger"> delete</button>
                              </form>

                    <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$art->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Artikel</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="admin/tabelartikel" method="post">
                                @csrf
                                @method('put')
                                <input type ="hidden" name="id" value="{{$art->id}}">
                                  <div class="modal-body">
                                  <div class="row mb-3">
                                      <label for="inputImage" class="col-sm-5 col-form-label">Masukkan Gambar</label>
                                      <div class="col-sm-10">
                                        <input class="form-control" type="file" name="Gambar" id="formFile" value="{{$art->Gambar}}">
                                      </div>
                                    </div>
                                <div class="row mb-3">
                                  <label for="inputText" class="col-sm-5 col-form-label">Kategori Artikel</label>
                                  <div class="col-sm-10">
                                    <input type="text" name="Kategori" class="form-control" value="{{$art->Kategori}}">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="inputText" class="col-sm-5 col-form-label">Judul Artikel</label>
                                  <div class="col-sm-10">
                                    <input type="text" name="Judul" class="form-control" value="{{$art->Judul}}">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="inputText" class="col-sm-5 col-form-label">Tulis Artikel</label>
                                  <div class="col-sm-10">
                                    <textarea class="form-control" name="Isi" style="height: 100px">{{$art->Isi}}</textarea>
                                  </div>
                                </div>
                              </form><!-- End General Form Elements -->

                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </td>
                  </form>
                </td>
              </td>
              </tr>
                  @endforeach
                </section>
                {{-- @endsection --}}
              </table>
            </main>
          </div>

                </tbody>
              </table>
              <!-- End Bordered Table -->

              {{-- <p><a href="https://getbootstrap.com/docs/5.0/utilities/borders/#border-color" target="_blank">Border color utilities</a> can be added to change colors:</p> --}}


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
