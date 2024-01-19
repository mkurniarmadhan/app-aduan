<x-applayout>



    <x-pagetitle title='Aduan'>
        {{-- {{ Breadcrumbs::render('pelapor.index') }} --}}
    </x-pagetitle>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Riwayat Aduan</h5>
                        <p>

                            <!-- Table with stripped rows -->
                        <table class="table datatable">
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
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-applayout>
