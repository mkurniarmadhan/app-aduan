<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>

    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--Bootstrap ================================================== -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">

    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,700;1,300&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">


    <!-- script ================================================== -->
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>

</head>

<body data-bs-spy="scroll" data-bs-target="#header-nav" tabindex="0">

    <nav class="navbar navbar-expand-lg bg-white navbar-light container-fluid py-3 position-fixed ">
        <div class="container">
            <a class="navbar-brand" href="/">
                <h3>SIAPMAS</h3>
                <span>layanan pengaduan online masyarakat</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav align-items-center justify-content-end flex-grow-1 pe-3">

                    </ul>

                    <div class="d-flex mt-5 mt-lg-0 ps-lg-3 align-items-center justify-content-center ">


                        @auth

                            @if (!Auth::user()->is_admin)
                                <a href="{{ route('pelapor.create') }}"
                                    class="btn btn-sm {{ Route::is('pelapor.create') ? 'btn-primary' : 'btn-outline-primary' }}">Buat
                                    Laporan Baru</a>

                                <a href="{{ route('logout') }}" type="button" class="btn btn-danger ms-md-3"> Keluar </a>
                            @else
                                <a href="{{ route('aduan.index') }}" type="button" class="btn btn-primary ms-md-3"> Lihat
                                    Aduan
                                </a>
                                <a href="{{ route('logout') }}" type="button" class="btn btn-danger ms-md-3"> Keluar </a>
                            @endif

                        @else:
                            <a href="{{ route('pelapor.create') }}" type="button" class="btn btn-success ms-md-3"> Buat
                                Laporan </a>
                            <a href="{{ route('login') }}" type="button" class="btn btn-primary ms-md-3">
                                Masuk </a>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <section id="footer">
        <div class="container footer-container mt-5 pt-3">
            <footer class="row my-5 py-5 ">

                <div class=" col-8 mt-5 mt-md-0 ">
                    {{-- <img src="images/main-logo.png" alt="image" class="my-3"> --}}
                    <h3>SIAPMAS</h3>
                    <p class="">Situs ini merupakan sarana yang aman dan terpercaya untuk menyampaikan aspirasi
                        dan laporan Anda. Aduan Anda akan ditangani dengan cepat dan profesional oleh tim kami yang
                        berdedikasi. Kami berkomitmen untuk transparansi dan akuntabilitas dalam penanganan aduan. Aduan
                        Anda adalah langkah awal menuju perbaikan. Mari bersama-sama membangun masyarakat yang lebih
                        baik.</p>
                    <div class="d-flex align-items-center ">
                        <a href="#" target="_blank"><iconify-icon class="social-link-icon active pe-4"
                                icon="mdi:facebook"></iconify-icon></a>

                        <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:instagram"></iconify-icon></a>

                        <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:youtube"></iconify-icon></a>
                    </div>

                </div>



                <div class="col-4 ">
                    <h5 class="py-3">Contact Info</h5>
                    <ul class="nav flex-collumn">
                        <li class="nav-item d-flex mb-3">
                            <iconify-icon class="contact-icon pe-3" icon="ion:location"></iconify-icon>
                            <a href="#" class="nav-link p-0 "> lokasi </a>
                        </li>
                        <li class="nav-item d-flex mb-3">
                            <iconify-icon class="contact-icon pe-3" icon="ion:call"></iconify-icon><a href="#"
                                class="nav-link p-0 "> (62) 89694273720 </a>
                        </li>
                        <li class="nav-item d-flex mb-3">
                            <iconify-icon class="contact-icon pe-3" icon="ion:mail"></iconify-icon><a href="#"
                                class="nav-link p-0 "> info@siapmas.com </a>
                        </li>

                    </ul>
                </div>



            </footer>
        </div>



        <footer class="d-flex flex-wrap justify-content-between align-items-center border-top"></footer>

        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 pt-4">
                <div class="col-md-6 d-flex align-items-center">
                    <p>© 2023 siapMas - All rights reserved</p>

                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                    <p class="">© 2023 Website </p>
                </div>

            </footer>
        </div>
    </section>

    <!-- script ================================================== -->
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>


</body>

</html>
