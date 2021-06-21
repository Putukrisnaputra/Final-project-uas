<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #5F9EA0; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
        </style>

  
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
        <body class="bg-gray-100 font-family-karla flex">
        <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
            <div class="p-6">
            <center>
               <img src="{{ asset('dashboard/') }}/assets/img/logolokapom.png" alt="" width="100px"></center>
            </div>
            <nav class="text-white text-base font-semibold pt-3">
            <a href="/"  class=" flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                  
                <!-- <a href="{{route('pegawai.index')}}" class="flex items-center text-white py-4 pl-6 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Data Pegawai
                </a>
                <a href="{{route('kegiatan.index')}}" class="flex items-center text-white py-4 pl-6 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Data Kegiatan
                </a>
                <a href="{{route('rencanastrategis.index')}}" class="flex items-center text-white py-4 pl-6 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                   Rencana Strategis
                </a>
                <a href="{{route('tahunan.index')}}" class="flex items-center text-white py-4 pl-6 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                   Laporan Tahunan
                </a>
                 <a href="{{route('semester.index')}}" class="flex items-center text-white py-4 pl-6 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                   Laporan Semester
                </a>
                 <a href="{{route('triwulan.index')}}" class="flex items-center text-white py-4 pl-6 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                   Laporan Triwulan
                </a>
                  <a href="{{route('kinerja.index')}}" class="flex items-center text-white py-4 pl-6 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                   Laporan Kinerja
                </a>
                 <a href="{{route('PPID.index')}}" class="flex items-center text-white py-4 pl-6 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                   Laporan PPID
                </a> -->
                  <a href="{{route('informasi.index')}}" class="flex items-center text-white py-4 pl-6 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                   Layanan Informasi
                </a>
                <a href="{{route('pengaduan.index')}}" class="flex items-center text-white py-4 pl-6 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                   Layanan Pengaduan
                </a>
                 <a href="{{route('contact.index')}}" class="flex items-center text-white py-4 pl-6 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                   Contact
                </a>
            </nav>
        </aside>

        <div class="w-full flex flex-col h-screen overflow-y-hidden">
            <!-- Desktop Header -->
            <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
                <div class="w-1/2"></div>
                <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                    @livewire('navigation-menu')
                </div>
            </header>

            <!-- Mobile Header & Nav -->
            <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
                <div class="flex items-center justify-between">
                    <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                    <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                        <i x-show="!isOpen" class="fas fa-bars"></i>
                        <i x-show="isOpen" class="fas fa-times"></i>
                    </button>
                </div>

               
                <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                    <i class="fas fa-plus mr-3"></i> New Report
                </button> -->
            </header>
        
            <div class="w-full overflow-x-hidden border-t flex flex-col">
                <main class="w-full flex-grow p-6">
                    {{$slot}}
                </main>
        
                <footer class="bg-black border-t border-gray-400 shadow">	
                <div class="container max-w-md mx-auto flex py-8">

                    <div class="w-full mx-auto flex flex-wrap">
                        <div class="flex w-full md:w-1/2 ">
                            <div class="px-8">
                                <h3 class="font-bold font-bold text-gray-100">About</h3>
                                <h2 class="font-bold font-bold text-gray-100">
                                    LOKA PENGAWAS OBAT DAN MAKANAN DI KABUPATEN BULELENG</h2>
                                 <p class="font-bold font-bold text-gray-100">
                                    Jalan GUNUNG AGUNG NOMOR 8 Singaraja  
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex w-full md:w-1/2">
                            <div class="px-8">
                            <h3 class="font-bold font-bold text-gray-100">Contact Person</h3>
                                <ul class="list-reset items-center text-sm pt-3">
                                <li>
                                    <a class="inline-block text-gray-100 no-underline hover:text-gray-100 hover:text-underline py-1" href="https://www.instagram.com/bpom_ri/">Instagram</a><br>
                                    <a class="inline-block text-gray-100 no-underline hover:text-gray-100 hover:text-underline py-1" href="https://www.facebook.com/bpom.official">Facebook</a><br>
                                    <a class="inline-block text-gray-100 no-underline hover:text-gray-100 hover:text-underline py-1" href="https://www.youtube.com/channel/UCO5Oi2m_M-uQhTaKDyGA0nA">Youtube</a>
                                </li></br>
                                <li>
                                    <p class="inline-block text-gray-100 no-underline">Whatsapp : 081911500533</p>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            </div>
            
        </div>

        <!-- AlpineJS -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
        <!-- ChartJS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

        <script>
            var chartOne = document.getElementById('chartOne');
            var myChart = new Chart(chartOne, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            var chartTwo = document.getElementById('chartTwo');
            var myLineChart = new Chart(chartTwo, {
                type: 'line',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
        @stack('modals')
        @livewireScripts
    </body>
</html>