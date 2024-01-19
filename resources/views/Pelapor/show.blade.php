<x-applayout>

    <section class="section">
        <div class="row">

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">

                        <div class="tab-content">
                            <h5 class="card-title">
                                Detail Aduan </h5>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label">
                                    Nomor Aduan
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    {{ $pelapor->aduan_id }}

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label">
                                    Tanggal Aduan
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    {{ $pelapor->created_at }}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label">
                                    Kategori Aduan
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    {{ $pelapor->kategori->kategori_aduan }}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    Aduan
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <b> {{ $pelapor->judul }}</b>
                                    <p class="small fst-italic">
                                        {{ $pelapor->isi }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    Lampiran
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <b> {{ $pelapor->judul }}</b>
                                    <p class="small fst-italic">
                                        {{ $pelapor->isi }}
                                    </p>
                                </div>
                            </div>


                            <h5 class="card-title">Tanggapan</h5>
                            <p class="small fst-italic">
                                {{ $pelapor->tanggapan }}
                            </p>
                        </div>



                        <!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-applayout>
