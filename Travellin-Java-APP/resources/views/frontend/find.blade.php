<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TravellinJava</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('images/LOGO TRAVELLIN JAVA.png') }}" type="image/x-icon">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/landing2.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar scrolled navbar-expand-lg" style="background-color: #1053B7;">
        <div class="container px-4 px-lg-5">
            <div class="d-flex justify-content-start">
                <a href="{{ route('landing') }}" class="navbar-brand d-flex align-items-center">
                    <img src="{{ asset('images/LOGO TRAVELLIN JAVA.png') }}" alt="" class="img-fluid"
                        style="height: 70px;">
                    <p class="ml-3 mb-0 text-white">TravellinJava</p>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active text-white" aria-current="page"
                            href="{{ route('landing') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link text-white" aria-current="page"
                            href="{{ route('landing') }}#testimonial">Testimoni</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" aria-current="page"
                            href="{{ route('landing') }}#footer">Tentang
                            Kami</a></li>

                    @auth
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link btn btn-light">
                                <img class="rounded-circle" src="{{ Storage::url(Auth::user()->avatar_url) }}"
                                    style="height: 20px;">
                                Dashboard
                            </a>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link btn btn-light">
                                <i class="bi-person-fill me-1"></i>
                                Masuk
                            </a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- Product section-->
    <section id="products" class="pt-5 container px-4 px-lg-5 mt-5">
        <p href="#" class="text-center h2 mt-2 fw-bolder font-monospace text-danger">
            <span class="text-primary text-capitalize fw-bolder font-monospace">Cari Destinasi atau Katalog</span>
        </p>
        <div class="row g-3 my-2 d-flex justify-content-center">
            <div class="col-md-8 col-lg-10">
                <form action="{{ route('landing.find') }}" method="GET" class="d-flex">
                    @csrf
                    <input type="text" class="form-control" placeholder="Cari Produk Berdasarkan Nama Atau wilayah"
                        name="search" value="{{ old('search', $searchTerm) }}">
                    <button type="submit" class="btn btn-primary ms-2">Cari</button>
                </form>
            </div>
        </div>
        <div class="row text-center product py-3 pt-5" data-aos="fade-up" data-aos-offset="250" data-aos-duration="900">
            @forelse ($Travels as $travel)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <img src="{{ Storage::url($travel->image1) }}"
                            class="img-fluid rounded-start p-3 fixed-size-image" alt="{{ $travel->name }}">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-capitalize">{{ $travel->name }}</h5>
                            <small class="text-strong text-center">{{ $travel->category->name }}</small>
                            <div class="d-flex justify-content-center mb-3 text-muted fs-6">
                                @for ($i = 0; $i < $travel->rating; $i++)
                                    <div class="bi-star-fill"></div>
                                @endfor
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('landing.detail', ['id' => $travel->id]) }}"
                                    class="btn btn-outline-success">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-secondary w-100 text-center" role="alert">
                    <h4>Produk belum tersedia</h4>
                </div>
            @endforelse
        </div>
    </section>
    <!-- Product section-->
    <!-- Footer-->
    <footer class="pt-5 py-3" style="background-color: rgba(16, 83, 183, 0.2)">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 px-4">
                    <a class="navbar-brand d-flex align-items-center h2" href="{{ route('landing') }}"
                        style="white-space: nowrap;">
                        <h2 class="">TravellinJava</h2>
                    </a>
                    <p>Jelajahi keindahan Pulau Jawa dengan satu sentuhan. Dapatkan informasi lengkap tentang
                        tempat-tempat wisata terbaik di Pulau Jawa untuk liburanmu kapan saja.</p>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 px-4" style="font-size: 1.1rem;">
                    <h3 class="md-5 d-block">
                        Info</h3>
                    <div class="d-flex flex-column">
                        <a class="text-black text-decoration-none mb-2 fs-6" href="#">Home</a>
                        <a class="text-black text-decoration-none mb-2 fs-6" href="#">About</a>
                        <a class="text-black text-decoration-none mb-2 fs-6" href="#">Contact</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 px-4" style="font-size: 1.1rem;">
                    <h3 class="md-5 d-block">
                        Developed by</h3>
                    <div class="d-flex flex-column">
                        <p class="mb-2 fs-6">Rahmatul Idami</p>
                        <p class="mb-2 fs-6">Adinda Ginta Purani</p>
                        <p class="mb-2 fs-6">Naffa Amalia Fitri</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="py-3" style="background-color: #1053B7;">
        <div class="container">
            <p class="m-0 text-center text-white" id="copyright">Copyright &copy;
                <script>
                    var today = new Date();
                    var year = today.getFullYear();
                    document.write(year);
                </script> KEL C624-PS107 - Travellin Java
            </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
