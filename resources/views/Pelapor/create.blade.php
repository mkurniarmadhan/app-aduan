<x-applayout>
    <section id="faq" class="position-relative overflow-hidden py-5"
        style="background: url({{ asset('assets/images/banner-img.png') }});">

        <h1>SIAPMAS</h1>
    </section>

    <section id="process" class="position-relative overflow-hidden py-4">
        <div class="container ">
            <h6>Selamat Datang {{ Auth::user()->nama }} </h6>
            <div class="d-flex ">
                <a href="{{ route('pelapor.index') }}"
                    class="me-3 btn btn-sm {{ Route::is('pelapor.index') ? 'btn-primary' : 'btn-outline-primary' }}">Beranda</a>

                @if (!Auth::user()->is_admin)
                    <a href="{{ route('pelapor.create') }}"
                        class="btn btn-sm {{ Route::is('pelapor.create') ? 'btn-primary' : 'btn-outline-primary' }}">Buat
                        Laporan Baru</a>
                @endif
            </div>
            <div class="row process-components my-5">
                <h2 class="text-center fw-bold display-4">Laporan Baru</h2>
                <h6 class="text-center  mb-5">Buat Laporan</h6>

                <div class="card">
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('pelapor.store') }}" method="POST"
                            enctype='multipart/form-data'>
                            @csrf
                            <div class="col-md-6">
                                <label for="judul" class="form-label">Judul Laporan</label>
                                <input type="text"
                                    class="form-control @error('judul')
                                is-invalid
                                @enderror"
                                    id="judul" name="judul" required>
                                @error('judul')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="validationServer04" class="form-label">Kategori Laporan</label>
                                <select
                                    class="form-select @error('kategori_id')
                                is-invalid
                                @enderror"
                                    id="validationServer04" aria-describedby="validationServer04Feedback"
                                    name="kategori_id" required>
                                    <option selected disabled value="">Kategori...</option>


                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->kategori_aduan }}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    {{ $message }}
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="validationServer03" class="form-label">Isi</label>
                                <textarea
                                    class="form-control  @error('isi')
                                is-invalid
                                @enderror"
                                    id="validationTextarea" name="isi"></textarea>
                                @error('isi')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">lampiran (optional)</label>

                                <input type="file" class="form-control" aria-label="file example" name="lampiran">
                            </div>

                            {{-- <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input is-invalid" type="checkbox" value=""
                                        id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                    <label class="form-check-label" for="invalidCheck3">
                                        Agree to terms and conditions
                                    </label>
                                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Buat Laporan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-applayout>
