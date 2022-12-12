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
  <link href="{{asset('https://fonts.gstatic.com" rel="preconnect')}}">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  <script src="{{asset('https://code.jquery.com/jquery-3.6.1.js')}}" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<form  action='{{ url('formvitamin') }}' method='post' enctype="multipart/form-data">
  @csrf

<body>
    @include('admin.partials.header')

  @if (session()->has('success'))
    <script>
      alert('{{ session('success') }}');
    </script>
  @endif
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
            <a href="formvitamin/create">
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
            <li>
                <a href="/tabelartikel">
                  <i class="bi bi-circle"></i><span>Tabel Artikel</span>
                </a>
              </li>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Laporan Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/laporanbalita">
              <i class="bi bi-circle"></i><span>Laporan Data Balita</span>
            </a>
          </li>
          <li>
            <a href="/laporanibu">
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

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="/profileadminn">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav --> --}}

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


<!-- End Sidebar-->

    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Form Vitamin</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active"><a href=/formvitamin>Formvitamin</a></li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">
          <div class="col-lg-6">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Form Tambah Vitamin</h5>

                <!-- General Form Elements -->
                {{-- <form>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name ="id_balitaa" class="form-control">
                    </div>
                  </div> --}}
                <form action="" method="POST">
                  @csrf
                  <div class="row mb-3">
                    <div class="col-sm-2">
                      Nama Balita
                    </div>
                    <div class="col-md">
                      <select id="nama_bayi" class="form-select" name="id_balitaa" aria-label="Default select example">
                        <option value="0">Silahkan pilih nama bayi</option>
                        @foreach ($balita as $item)
                        <option value="{{ $item->id }}">{{ $item->Nama }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  {{-- <div class="row mb-3">
                    <div class="col-sm-2">
                        Pilih Vitamin
                    </div>
                    <div class="col-md">
                    <select class="form-select" name="vitamin" aria-label="Default select example">
                    <option value="0">Silahkan pilih vitamin</option>
                    <option value ='A'>A</option>
                    <option value ='B'>B</option>
                    <option value ='B6'>B6</option>
                    <option value ='B12'>B12</option>
                    <option value ='C'>C</option>
                    <option value ='D'>D</option>
                    <option value ='E'>E</option>
                    <option value ='K'>K</option>
                    <option value ='lainnya'>lainnya</option>
                  </select>
                </div>
              </div> --}}


                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Vitamin</label>
                    <div class="col-sm-10">
                      <input type="text" name="vitamin" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Saran</label>
                    <div class="col-sm-10">
                      <input type="text"  name="saran" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">simpan</label>
                    <div class="col-sm-10">
                      <button type="submit" id="submit" class="btn btn-primary">Save Data</button>
                    </div>
                  </div>

                </form><!-- End General Form Elements -->

              </div>
            </div>

          </div>

        </div>


    </main><!-- End #main -->



  <!-- Vendor JS Files -->
  <script src="{{asset('assets/admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/admin/js/main.js')}}"></script>
  {{-- <script type="text/javascript">
    $('#nama_bayi').change(function (e) {
      if($(this).val()==0){
          $('#submit').hide();
        }else{
          $('#submit').show();

      }
    });
    $(document).ready(function () {
      if($('#nama_bayi').val()==0){
          $('#submit').hide();
      }
    });
  </script> --}}

</body>

</html>
