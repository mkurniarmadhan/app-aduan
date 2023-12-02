<x-applayout>

    <section id="faq" class="position-relative overflow-hidden py-5"
        style="background: url({{ asset('assets/images/banner-img.png') }});">

        <h1>SIAPMAS</h1>
    </section>


    <section id="faq">

        <div class="container my-5 pb-5 ">
            <h2 class="text-center fw-bold display-4 mb-5">LOGIN</h2>
            <div class="col-6 m-auto">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('doLogin') }}" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror " id="email">

                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <p>Belum punya akun ? <a href="{{ route('home') }}">Daftar</a> </p>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Masuk</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section>
</x-applayout>
