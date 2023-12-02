<x-applayout>
    <section id="faq" class="position-relative overflow-hidden py-5"
        style="background: url({{ asset('assets/images/banner-img.png') }});">

        <h1>SIAPMAS</h1>
    </section>

    <section id="process" class="position-relative overflow-hidden py-4">
        <div class="container ">
            <h6>Selamat Datang {{ Auth::user()->nama }} </h6>
            <div class="d-flex ">
                @if (!Auth::user()->is_admin)
                    <a href="{{ route('pelapor.index') }}"
                        class="me-3 btn btn-sm {{ Route::is('pelapor.index') ? 'btn-primary' : 'btn-outline-primary' }}">Beranda</a>
                @else
                    <a href="{{ route('aduan.index') }}"
                        class="me-3 btn btn-sm {{ Route::is('pelapor.index') ? 'btn-primary' : 'btn-outline-primary' }}">Beranda</a>
                @endif



                @if (!Auth::user()->is_admin)
                    <a href="{{ route('pelapor.create') }}"
                        class="btn btn-sm {{ Route::is('pelapor.create') ? 'btn-primary' : 'btn-outline-primary' }}">Buat
                        Laporan Baru</a>
                @endif
            </div>
            <div class="row process-components my-5">

                <div class="card">
                    <div class="card-body">
                        <div class="container mb-5 mt-3">
                            <div class="row d-flex align-items-baseline">
                                <div class="col-xl-9">
                                    <p style="color: #7e8d9f;font-size: 20px;">aduan: <strong>
                                            #{{ $pelapor->kategori->kategori_aduan }}</strong>
                                    </p>
                                </div>
                                <div class="col-xl-3 ">
                                    @if (Auth::user()->is_admin)
                                        <tr>
                                            <td colspan="3">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#tanggapan">
                                                    Beri Tanggapan
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="tanggapan" tabindex="-1"
                                                    aria-labelledby="tanggapanLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">

                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('aduan.update', $pelapor->aduan_id) }}"
                                                                    method="post">
                                                                    @csrf

                                                                    @method('put')
                                                                    <div class="mb-3">
                                                                        <label for="tanggapan"
                                                                            class="form-label">Tanggapan
                                                                        </label>
                                                                        <textarea class="form-control" id="tanggapan" name="tanggapan" rows="3">{{ $pelapor->tanggapan }}</textarea>
                                                                    </div>
                                                                    <button class="btn btn-success">Simpan</button>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                    @endif

                                </div>
                                <hr>
                            </div>

                            <div class="container">

                                <div class="row">
                                    <div class="col-xl-8">
                                        <ul class="list-unstyled">
                                            <li class="text-muted">Pelapor: <span
                                                    style="color:#5d9fc5 ;">{{ $pelapor->user->nama }}
                                            <li class="text-muted">{{ $pelapor->user->alamat }}</li>
                                            <li class="text-muted">{{ $pelapor->user->no_telpon }}</li>

                                        </ul>
                                    </div>
                                    <div class="col-xl-4">
                                        <ul class="list-unstyled">
                                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i>
                                                <span class="fw-bold">ID:</span>#{{ $pelapor->aduan_id }}
                                            </li>
                                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i>
                                                <span class="fw-bold">Tanggal Laporan :
                                                </span>{{ $pelapor->created_at }}
                                            </li>
                                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i>
                                                <span class="me-1 fw-bold">Status:</span>
                                                <span
                                                    class="badge text-bg-{{ $pelapor->status == false ? 'warning' : 'success' }}">{{ $pelapor->status == false ? 'Diproses' : 'Selesai' }}</span>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>

                                <div class="row my-2 mx-1 justify-content-center">

                                    <p class="h4">{{ $pelapor->judul }}</p>
                                    <p class="lead">
                                        - {{ $pelapor->isi }}.
                                    </p>


                                </div>

                                <hr>
                                <dl class="row">




                                    <dt class="col-sm-2"><span class="badge bg-success  fw-bold">
                                            Tanggapan</span></dt>
                                    <dd class="col-sm-10">
                                        <p>{{ $pelapor->tanggapan }}</p>
                                    </dd>


                                </dl>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-applayout>
