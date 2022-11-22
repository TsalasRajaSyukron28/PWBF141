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
<a href='{{ url('formbalita') }}'></a>
</html>

<body>
    @include('admin.partials.header')

{{-- @if (session()->has('sukses'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{session('sukses')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif --}}
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
            <a href="formbalita">
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
      <h1>Tabel Balita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
          <li class="breadcrumb-item"><a href="/tabelbalita">TabelBalita</li>
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
              <h5 class="card-title">Tabel Balita</h5>
              {{-- <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p> --}}
              <a href="{{ url('formbalita/create') }}" class="btn btn-primary" role="button" data-bs-toggle="submit">Tambah</a>
              <!-- Bordered Table -->
                <br>
                <thead>
                <br>
                  <tr>
                    <table class="table table-bordered">
                    <td scope="col">Id</td>
                    <td scope="col">Nama</td>
                    <td scope="col">NIK</td>
                    <td scope="col">Jenis kelamin</td>
                    <td scope="col">Tanggal lahir</td>
                    <td scope="col">Tinggi Badan</td>
                    <td scope="col">Berat Badan</td>
                    <td scope="col">Alamat</td>
                    <td scope="col">Nama Ibu</td>
                    <td scope="col">Tanggal</td>
                    <td scope="col">aksi</td>
                  </tr>
                </thead>
                     <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->Nama}}</td>
                                        <td>{{$item->Nik}}</td>
                                        <td>{{$item->Jeniskelamin}}</td>
                                        <td>{{$item->Tanggallahir}}</td>
                                        <td>{{$item->Tinggibadan}}</td>
                                        <td>{{$item->Beratbadan}}</td>
                                        <td>{{$item->Alamat}}</td>
                                        <td>{{$item->Namaibu}}</td>
                                        <td>{{date('d-m-Y',strtotime($item->created_at))}}</td>
                                        <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        edit
                                        </button>
                                        <form class='d-inline' action="/admin/{{$item->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"> delete</button>
                                        </form>
                                    </tr>
                                        </td>
                                     <tr>
                    <td>
                    <!-- Button trigger modal -->

                    <!-- Modal -->

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Balita</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="tabelbalita" method="post">
                              <input type ="hidden" name="id" value="{{$item->id}}">
                              {{ csrf_field()}}
                              <div class="modal-body">
                                <div class="mb-1">
                                    <label for="recipient-name" class="col-form-label">Nama</label>
                                    <input type="text" class="form-control" name='Nama' value="{{$item->Nama}}">
                                </div>
                                <div class="mb-1">
                                    <label for="recipient-name" class="col-form-label">NIK</label>
                                    <input type="text" class="form-control" name='Nik' value="{{$item->Nik}}">
                                </div>
                                <div class="mb-6">
                                    <label for="Option" class="col-sm-5 col">Jenis Kelamin</label>
                                    <div class="col-sm-10">

                                    <select class="form-select" name="Jeniskelamin" aria-label="Default select example">
                                        <option selected>{{$item->Jeniskelamin}}</option>
                                        <option value ='laki laki'>Laki laki</option>
                                        <option value ='perempuan'>Perempuan</option>
                                      </select>
                                    {{-- <label for="recipient-name" class="col-form-label">Jenis Kelamin</label>
                                    <input type="text" class="form-control" name='Jeniskelamin' id="recipient-name"> --}}
                                </div>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name='Tanggallahir' value="{{$item->Tanggallahir}}">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tinggi Badan</label>
                                    <input type="text" class="form-control" name='Tinggibadan' value="{{$item->Tinggibadan}}">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Berat Badan</label>
                                    <input type="text" class="form-control" name='Beratbadan' value="{{$item->Beratbadan}}">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Alamat</label>
                                    <input type="text" class="form-control" name='Alamat' value="{{$item->Alamat}}">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Ibu</label>
                                    <input type="text" class="form-control" name='Namaibu' value="{{$item->Namaibu}}">
                                </div>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </form>
                    </td>
                    <td>

                  </tr>
                  @endforeach
                </tbody>
            </section>
              </table>
            </main>

        </div>

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
