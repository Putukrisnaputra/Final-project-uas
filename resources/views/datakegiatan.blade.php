<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LokaPOM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('dashboard/') }}/assets/img/logolokapom.png" rel="icon">
  <link href="{{ asset('dashboard/') }}/assets/img/logolokapom.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('dashboard/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('dashboard/') }}/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('dashboard/') }}/assets/vendor/modal-video/css/modal-video.min.css" rel="stylesheet">
  <link href="{{ asset('dashboard/') }}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ asset('dashboard/') }}/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('dashboard/') }}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eStartup - v2.2.1
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <img src="{{ asset('dashboard/') }}/assets/img/logo.png" alt="" title="" class="image" style="width: 130px; height: 100;"/></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" title="" /></a>-->
      </div>

         <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-has-children"><a href="/">Profil</a>
            <ul>
              <li><a href="/latarbelakang">Latar Belakang</a></li>
              <li><a href="#get-started">Visi dan Misi</a></li>
              <li><a href="#features">Budaya Organisasi</a></li>
              <li><a href="#about-us">Struktur Organisasi</a></li>
              <li><a href="/tugasfungsi">Tugas dan Fungsi</a></li>
            </ul>
          </li>
          <li><a href="/berandakegiatan">Beranda Kegiatan</a></li>
          <li class="menu-has-children"><a href="">Peringatan Publik</a>
            <ul>
              <li><a href="http://cekbpom.pom.go.id/tarik/">Produk Dibatalkan</a></li>
              <li><a href="http://cekbpom.pom.go.id/warning/">Produk Public Warning</a></li>
              <li><a href="http://cekbpom.pom.go.id/index.php/home/recall/czF0OWNhM2lva3JkMXFrcDM5a2w3N252ODYwbTR3M2I=">Produk Ditarik</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Laporan</a>
            <ul>
              <li><a href="#">Rencana Strategis</a></li>
              <li><a href="#">Laporan Tahunan</a></li>
              <li><a href="#">Laporan Semester</a></li>
              <li><a href="#">Laporan Triwulan</a></li>
              <li><a href="#">Laporan Kinerja</a></li>
              <li><a href="#">Laporan PPID</a></li>
            </ul>
          </li>
          <li><a href="https://jdih.pom.go.id/">Peraturan</a></li>
          <li class="menu-has-children"><a href="/layananinformasi">Layanan Informasi</a>
            </li>
           <li class="btn btn-light"><a href="/home">Login</a>
          </li>
        </ul>
           
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->



  <main id="main">
    <!-- Table -->
    <br>
    <br>
    <br>
    <br>
    <br>
          <tbody class=" text-center bg-white divide-y divide-gray-200">
          <?php $no=1; ?>
            @foreach ($kegiatan as $item)
              <tr>
              <td align="center">
                      <img src="{{asset('storage/' .$item->gambar)}}" width="200px" alt="">
                    </td><br>
                    <td>{{$item->nama}}</td><br>
                     <td>{{$item->nama}}</td>
                    <td>{{$item->waktu}}</td>
                     <td>{{$item->description}}</td>
                   
                </tr>
                <?php $no++; ?>
            @endforeach
          </tbody>
        </table>
       </div>
    </div>


         
  </main><!-- End #main -->

 
  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-7">
          <div class="footer-logo">

            <img src="{{ asset('dashboard/') }}/assets/img/logo.png" alt="" title="" class="image" style="width:600px; height: 300;"/></a>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Link</h4>

            <ul class="list-unstyled">
              <li><a href="http://cekbpom.pom.go.id/tarik/">Produk Dibatalkan</a></li>
              <li><a href="http://cekbpom.pom.go.id/warning/">Produk Public Warning</a></li>
              <li><a href="http://cekbpom.pom.go.id/index.php/home/recall/czF0OWNhM2lva3JkMXFrcDM5a2w3N252ODYwbTR3M2I=">Produk Ditarik</a></li>
               <li><a href="https://jdih.pom.go.id/">Peraturan</i></a></li>
                <li><a href="https://www.pom.go.id/new/">Website BPOM</a></li>
            </ul>

          </div>
        </div>
        <div class="col-sm-8 col-md-3 col-lg-3">
          <div class="list-menu">

            <h4>Kontak Kami</h4>

            <ul class="list-unstyled">
              <li><a href="https://www.facebook.com/lokapomdibuleleng/">facebook</i></a></li>
              <li><a href="https://www.instagram.com/lokapombuleleng/?hl=id">Instagram</a></li>
              <li><a href="https://twitter.com/lokapombuleleng?s=11">Twitter</a></li>
               <p class="inline-block text-gray-100 no-underline">Email : lokapombuleleng@gmail.com</p></a></li>
              <li><a href="https://www.youtube.com/results?search_query=loka+pom+buleleng">Youtube</li>
               <p class="inline-block text-gray-100 no-underline">Whatsapp : 081911500533</p>
            </ul>

          </div>
        </div>
      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights Disain </p>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
        -->
          Designed by <a href="https://www.instagram.com/p/CLBd1r1h5Ox/?utm_medium=share_sheethttps://www.instagram.com/p/CLBd1r1h5Ox/?utm_medium=copy_link">Aditya Permadi & Krisna</a>
        </div>
      </div>
    </div>

  </footer><!-- End  Footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('dashboard/') }}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('dashboard/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('dashboard/') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{ asset('dashboard/') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('dashboard/') }}/assets/vendor/modal-video/js/modal-video.min.js"></script>
  <script src="{{ asset('dashboard/') }}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{ asset('dashboard/') }}/assets/vendor/superfish/superfish.min.js"></script>
  <script src="{{ asset('dashboard/') }}/ssets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="{{ asset('dashboard/') }}/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('dashboard/') }}/assets/js/main.js"></script>

</body>

</html>