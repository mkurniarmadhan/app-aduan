<x-applayout>
    <section id="hero" class="position-relative overflow-hidden py-4" {{-- style="background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtGTgzWVMuBPGDTodw_qeVUGbFD0OwJ0RPDw&usqp=CAU');opacity: 0.5;" --}}>
        <div class="pattern-overlay pattern-right position-absolute">
            <img src="{{ asset('assets/images/pattern-hero.png') }}" alt="pattern">
        </div>
        <div class="container py-5 mt-5" style="z-index: 100000">
            <div class="row align-items-center py-5 mt-5">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h6 class="text-black">-</h6>
                    <h2 class="text-black fw-bold display-2">Aduan KITA</h2>
                    <p class="text-black">Situs ini merupakan sarana yang aman dan terpercaya untuk menyampaikan
                        aspirasi dan
                        laporan Anda. Aduan Anda akan ditangani dengan cepat dan profesional oleh tim kami yang
                        berdedikasi. Kami berkomitmen untuk transparansi dan akuntabilitas dalam penanganan aduan. Aduan
                        Anda adalah langkah awal menuju perbaikan. Mari bersama-sama membangun masyarakat yang lebih
                        baik. </p>

                </div>

                @guest
                    <div class=" col-md-5 offset-md-1">
                        <div class="card">
                            <form class=" p-5 row" action="{{ route('daftar') }}" method="POST">
                                @csrf
                                <h5>Form Pendaftar pelapor</h5>
                                <h6>Apakah ada konten yang ingin Anda adukan ? silakan daftar dibawah ini.</h6>
                                <div class="mb-4">
                                    <label for="nama" class="form-label mb-0">Nama Lengkap </label>
                                    <input type="text" class="form-control border-1" id="nama" name="nama">
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label mb-0">Email </label>
                                    <input type="email" name="email" class="form-control border-1" id="email">
                                </div>
                                <div class="mb-3">
                                    <label for="no_telpon" class="form-label mb-0">No. Telp Aktif</label>
                                    <input type="text" name="no_telpon" class="form-control border-1" id="no_telpon">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label mb-0">Alamat</label>
                                    <textarea name="alamat" class="form-control border-1" id="alamat"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label mb-0">Password</label>
                                    <input type="password" name="password" class="form-control border-1" id="password">
                                </div>
                                <div class="mb-3">

                                    <div class="col-auto mb-2">
                                        <img src="{{ Captcha::src('default') }}" alt="">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="captcha" name="captcha">
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                                </div>
                            </form>
                        </div>

                    </div>

                @endguest
            </div>
        </div>
    </section>

    <section id="count" class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row">
                <!-- counter -->

                @foreach ($aduans as $id => $aduan)
                    <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                        data-wow-duration="300ms"
                        style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                        <i class="fa fa-beer medium-icon"></i>
                        <span id="anim-number-pizza" class="counter-number"></span>
                        <span class="timer counter alt-font appear" data-to="980"
                            data-speed="7000">{{ $aduan }}</span>
                        <p class="counter-title">{{ $id }}</p>
                    </div>
                @endforeach

                <!-- end counter -->
                {{-- <!-- counter -->
                <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                    data-wow-duration="600ms"
                    style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">
                    <i class="fa fa-heart medium-icon"></i>
                    <span class="timer counter alt-font appear" data-to="980" data-speed="7000">980</span>
                    <span class="counter-title">Happy Clients</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated"
                    data-wow-duration="900ms"
                    style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;">
                    <i class="fa fa-anchor medium-icon"></i>
                    <span class="timer counter alt-font appear" data-to="810" data-speed="7000">810</span>
                    <span class="counter-title">Projects Completed</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated"
                    data-wow-duration="1200ms"
                    style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">
                    <i class="fa fa-user medium-icon"></i>
                    <span class="timer counter alt-font appear" data-to="600" data-speed="7000">600</span>
                    <span class="counter-title">Clients Served</span>
                </div>
                <!-- end counter --> --}}
            </div>
        </div>
    </section>

    {{-- <section id="process">
        <div class="container my-5 py-5">
            <div class="row process-components my-5">
                <div class="d-flex flex-wrap justify-content-between">

                    <div class="col text-center px-4 my-5">
                        <iconify-icon class="process-icon mb-2" icon="mdi:phone-outline"></iconify-icon>
                        <h5 class="process-heading">call or Fill form</h5>
                    </div>
                    <div class="col text-center px-4 my-5">
                        <iconify-icon class="process-icon mb-2" icon="mdi:forum"></iconify-icon>
                        <h5 class="process-heading">Talk with us</h5>
                    </div>
                    <div class="col text-center px-4 my-5">
                        <iconify-icon class="process-icon mb-2" icon="mdi:archive-search-outline"></iconify-icon>
                        <h5 class="process-heading">Inspect & prososal</h5>
                    </div>
                    <div class="col text-center px-4 my-5">
                        <iconify-icon class="process-icon mb-2" icon="mdi:car-lifted-pickup"></iconify-icon>
                        <h5 class="process-heading">Prep & installation</h5>
                    </div>
                    <div class="col text-center px-4 my-5">
                        <iconify-icon class="process-icon mb-2" icon="mdi:shield-home-outline"></iconify-icon>
                        <h5 class="process-heading">job site picked up</h5>
                    </div>


                </div>
            </div>
        </div>
    </section> --}}

    <section id="faq">

        <div class="container my-5 pb-5 ">
            <h6 class="text-center">Frequently asked questions</h6>
            <h2 class="text-center fw-bold display-4 mb-5">FAQ</h2>

            <div class="accordion col-md-8 offset-md-2" id="accordionPanelsStayOpenExample">

                <div class="accordion-item mt-3">
                    <h5 class="accordion-header border-0" id="panelsStayOpen-headingOne">
                        <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            Bagaiman cara mendaftar
                        </button>
                    </h5>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <p>ISI FORM PENDAFTARAN PADA HALAMAN AWAL</p>

                        </div>
                    </div>
                </div>



                <div class="accordion-item mt-3">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFour">
                            Siapa saja yang bisa membuat aduna?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <p>Semua WNI yang telah mendaftar</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mt-3">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFourr" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFour">
                            Aduan/laporan dikirim dalam bentuk apa?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFourr" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFourr">
                        <div class="accordion-body">
                            <p>Aduan yang dikirim harus ada URL/Link, Screenshot tampilan serta Alasannya.</p>
                        </div>
                    </div>
                </div>





            </div>

        </div>
    </section>





    <section id="cta" class="position-relative my-5">
        <div class="cta-pattern-overlay pattern-left position-absolute top-50 start-0 translate-middle-y">
            <img src="{{ asset('assets/images/cta-pattern.png') }}" alt="pattern">
        </div>
        <div class="container my-5 py-5">
            <div class="row align-items-center my-5">
                <div class="col-md-6 offset-md-2">
                    <h6 class="text-white">Get started now</h6>
                    <h2 class="text-white fw-bold display-4">BUTUH RESPON CEPAT</h2>
                </div>
                <div class="col-md-2">
                    <a href="#" class="btn btn-success  ">HUBUNGI KAMI</a>
                </div>
            </div>
        </div>
    </section>

    @push('style')
        <style>
            #count .counter-section i {
                display: block;
                margin: 0 0 10px
            }

            #count .counter-section span.counter {
                font-size: 40px;
                color: #000;
                line-height: 60px;
                display: block;
                font-family: "Oswald", sans-serif;
                letter-spacing: 2px
            }

            #count .counter-title {
                font-size: 12px;
                letter-spacing: 2px;
                text-transform: uppercase
            }

            #count .counter-icon {
                top: 25px;
                position: relative
            }

            #count .counter-style2 .counter-title {
                letter-spacing: 0.55px;
                float: left;
            }

            #count .counter-style2 span.counter {
                letter-spacing: 0.55px;
                float: left;
                margin-right: 10px;
            }

            #count .counter-style2 i {
                float: right;
                line-height: 26px;
                margin: 0 10px 0 0
            }

            #count .counter-subheadline span {
                float: right;
            }

            #count .medium-icon {
                font-size: 40px !important;
                margin-bottom: 15px !important;
            }

            #count .container {
                margin-bottom: 200px;
            }
        </style>
    @endpush

    @push('script')
        <script>
            $(document).ready(function() {
                $('.counter').each(function() {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 4000,
                        easing: 'swing',
                        step: function(now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });

            });
        </script>
    @endpush

</x-applayout>
