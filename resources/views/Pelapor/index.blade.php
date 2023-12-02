<x-applayout>

    <section id="faq" class="position-relative overflow-hidden py-5"
        style="background: url({{ asset('assets/images/banner-img.png') }});">

        <h1>SIAPMAS</h1>
    </section>
    <section id="process" class="position-relative overflow-hidden py-4">
        <div class="container">


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
                <h2 class="text-center fw-bold display-4">Laporan Anda</h2>
                <h6 class="text-center  mb-5">Data laporan anda</h6>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#IDLAPORAN</th>
                            <th scope="col">Tanggal Laporan</th>
                            <th scope="col">Kategori Laporan</th>
                            <th scope="col">Status</th>
                            <th scope="col">opsi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($aduans as $aduan)
                            <tr>
                                <th scope="row">{{ $aduan->aduan_id }}</th>
                                <td>{{ $aduan->created_at }}</td>
                                <td>{{ $aduan->kategori->kategori_aduan }}</td>

                                <td><span
                                        class="badge text-bg-{{ $aduan->status == false ? 'warning' : 'success' }}">{{ $aduan->status == false ? 'Diproses' : 'Selesai' }}</span>
                                </td>
                                <td>
                                    @if (Auth::user()->is_admin)
                                        <a class="btn btn-sm btn-primary"
                                            href="{{ route('aduan.show', $aduan->aduan_id) }}">LIHAT</a>
                                    @else
                                        <a class="btn btn-sm btn-primary"
                                            href="{{ route('pelapor.show', $aduan->aduan_id) }}">LIHAT</a>
                                    @endif


                                </td>
                            </tr>

                        @empty
                            <tr>
                                <th colspan="5">Belum ada laporan</th>
                            <tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </section>

</x-applayout>
