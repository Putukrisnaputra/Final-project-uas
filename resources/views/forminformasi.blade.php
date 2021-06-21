<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Formulir Informasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('templatelayanan/') }}/assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('templatelayanan/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('templatelayanan/') }}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{ asset('templatelayanan/') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('templatelayanan/') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('templatelayanan/') }}/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{ asset('templatelayanan/') }}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ asset('templatelayanan/') }}/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('templatelayanan/') }}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v2.2.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/" class="logo mr-auto"><img src="{{ asset('dashboard/') }}/assets/img/logo.png" alt="" title="" class="image" style="width: 130px; height: 100;"/></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Bernda</a></li>
          <li class="drop-down"><a href="/">Profil</a>
            <ul>
              <li><a href="#">Latar Belakang</a></li>
              <li><a href="/#get-started">Visi dan Misi</a></li>
              <li><a href="/#features">Budaya Organisasi</a></li>
              <li><a href="/#about-us">Struktur Organisasi</a></li>
              <li><a href="/tugasfungsi">Tugas dan Fungsi</a></li>
            </ul>
          </li>
          <li><a href="/forminformasi">Form Informasi</a></li>
          <li><a href="/formpengaduan">Form Pengaduan</a></li>
           <li><a href="/#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>FORMULIR INFORMASI</h1>
          <h2>LOKA PENGAWAS OBAT DAN MAKANAN DI KABUPATEN BULELENG</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="#form" class="btn-get-started scrollto">KLIK DISINI</a>
      </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
      </div>
    </section><!-- End Cta Section -->

   
    <!-- ======= Contact Section ======= -->
    <section id="form" class="contact">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulir <small>Informasi</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<form action="{{(isset($informasi))?route('informasi.update',$informasi->id):route('informasi.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($informasi))
        @method('PUT')
    @endif
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="last_name" class="block text-sm font-medium text-gray-700">Nama informasi</label>
                <input type="text" name="nama" id="nama" autocomplete="family-name" value="{{(isset($informasi))?$informasi->nama:old('nama') }}" class="mt-1  @error('nama') @enderror" placeholder="Ketik nama informasi">
              <div class="text-xs text-red-600">@error('nama'){{$message}} @enderror</div>
              </div>
            </div>

                <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="jk" class="block text-sm font-medium text-gray-700">
                                Jenis Kelamin
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select name="jk" id="jk" class="@error('jk') border-red-600 @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300">
                                    <option value="">Pilih</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="text-xs text-red-500"> @error('jk') {{$message}} @enderror</div>
                        </div>
                    </div>
                  
                  <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="pekerjaan" class="block text-sm font-medium text-gray-700">
                                Pekerjaan
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select name="pekerjaan" id="pekerjaan" class="@error('pekerjaan') border-red-600 @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300">
                                    <option value=""></option>
                                    <option value="Apoteker">Apoteker</option>
                                    <option value="Dokter">Dokter</option>
                                    <option value="Karyawan">Karyawan</option>
                                    <option value="LSM">LSM</option>
                                    <option value="Nakes Lain">Nakes Lain</option>
                                    <option value="Pengacara/Legal">Pengacara/Legal</option>
                                     <option value="Plajar/Mahasiswa">Plajar/Mahasiswa</option>
                                    <option value="Pelaku Usaha">Pelaku Usaha</option>
                                    <option value="Wartawan">Wartawan</option>
                                    <option value="Umum">Umum</option>
                                </select>
                            </div>
                            <div class="text-xs text-red-500"> @error('pekerjaan') {{$message}} @enderror</div>
                        </div>
                    </div>


             <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="last_name" class="block text-sm font-medium text-gray-700">Alamat</label>
                <input type="text" name="alamat" id="alamat" autocomplete="family-name" value="{{(isset($informasi))?$informasi->alamat:old('alamat') }}" class="mt-1  @error('alamat') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik alamat informasi">
              <div class="text-xs text-red-600">@error('alamat'){{$message}} @enderror</div>
              </div>
            </div>

            <div>
            <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="waktu" class="block text-sm font-medium text-gray-700">
                                Tanggal 
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="date" name="waktu" id="waktu" value="{{(isset($informasi))?$informasi->waktu:old('waktu') }}" class="@error('waktu') border-red-600 @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300  text-black">
                            </div>
                            <div class="text-xs text-red-500"> @error('waktu') {{$message}} @enderror</div>
                        </div>
                    </div><br>

                  <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" name="email" id="email" autocomplete="family-name" value="{{(isset($informasi))?$informasi->email:old('email') }}" class="mt-1  @error('email') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik email informasi">
              <div class="text-xs text-red-600">@error('email'){{$message}} @enderror</div>
              </div>
            </div>

             <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="namaperusahaan" class="block text-sm font-medium text-gray-700">Nama Perusahaan</label>
                <input type="text" name="namaperusahaan" id="namaperusahaan" autocomplete="family-name" value="{{(isset($informasi))?$informasi->namaperusahaan:old('namaperusahaan') }}" class="mt-1  @error('namaperusahaan') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik namaperusahaan informasi">
              <div class="text-xs text-red-600">@error('namaperusahaan'){{$message}} @enderror</div>
              </div>
            </div>

              <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="alamatperusahaan" class="block text-sm font-medium text-gray-700">Alamat Perusahaan</label>
                <input type="text" name="alamatperusahaan" id="alamatperusahaan" autocomplete="family-name" value="{{(isset($informasi))?$informasi->alamatperusahaan:old('alamatperusahaan') }}" class="mt-1  @error('alamatperusahaan') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik alamatperusahaan informasi">
              <div class="text-xs text-red-600">@error('alamatperusahaan'){{$message}} @enderror</div>
              </div>
            </div>

              <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="jenisperusahaan" class="block text-sm font-medium text-gray-700">jenis Perusahaan</label>
                <input type="text" name="jenisperusahaan" id="jenisperusahaan" autocomplete="family-name" value="{{(isset($informasi))?$informasi->jenisperusahaan:old('jenisperusahaan') }}" class="mt-1  @error('jenisperusahaan') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik jenisperusahaan informasi">
              <div class="text-xs text-red-600">@error('jenisperusahaan'){{$message}} @enderror</div>
              </div>
            </div>

            <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="no_telp" class="block text-sm font-medium text-gray-700">No Telepon</label>
                <input type="text" name="no_telp" id="no_telp" autocomplete="family-name" value="{{(isset($informasi))?$informasi->no_telp:old('no_telp') }}" class="mt-1  @error('no_telp') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik no_telp informasi">
              <div class="text-xs text-red-600">@error('no_telp'){{$message}} @enderror</div>
              </div>
            </div>


                <div>
                <label for="about" class="block text-sm font-medium text-gray-700">
                Pertanyaan
              </label>
              <div class="mt-1">
                <textarea name="pertanyaan" rows="8" class="@error('pertanyaan') shadow-sm focus:ring-indigo-500 @enderror focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Ketik Deskripsi informasi">
                {{(isset($informasi))?$informasi->pertanyaan:old('pertanyaan') }}
                </textarea>
              </div>
               <div class="text-xs text-red-500"> @error('pertanyaan') {{$message}} @enderror</div>
            </div> <br>
                
              <label class="block text-sm font-medium text-gray-400">
                Gambar
              </label>
              <div class="mt-1 flex justify-center px-6 pt-8 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  @if(isset($informasi) && $informasi->gambar!='')
                      <img src="{{asset('storage/' .$informasi->gambar)}}" class="mx-auto h-12 w-12 text-gray-100 rounded" alt="">

                  @endif
                  <div class="flex text-sm text-gray-100">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-200 hover:text-indigo-200 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-200">
                      <span>Upload a file</span>
                      <input id="file-upload" name="gambar" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-500">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-primary bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      </form>
              
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
            </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('templatelayanan/') }}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('templatelayanan/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('templatelayanan/') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{ asset('templatelayanan/') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('templatelayanan/') }}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{ asset('templatelayanan/') }}/assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{ asset('templatelayanan/') }}/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{ asset('templatelayanan/') }}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{ asset('templatelayanan/') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('templatelayanan/') }}/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('templatelayanan/') }}/assets/js/main.js"></script>

</body>

</html>