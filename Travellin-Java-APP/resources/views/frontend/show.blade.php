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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/landing2.css') }}" rel="stylesheet" />
</head>

<body style="background-color: rgba(16, 83, 183, 0.2);">
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
    <h2 class="fw-bold text-center mt-3">
        <span class="text-black text-capitalize fw-bolder font-monospace">Detail Wisata</span>
    </h2>
    <hr>

    <section id="isirumah">
        <div class="container mt-2">
            <div class="row py-5">
                <div class="col-md-6 mt-3">
                    <div class="slide-atas">
                        <div class="rumah">
                            <img src="{{ Storage::url($Travels->image1) }}" class="img-fluid" alt="">
                        </div>
                        <div class="rumah">
                            <img src="{{ Storage::url($Travels->image2) }}" class="img-fluid" alt="">
                        </div>
                        <div class="rumah">
                            <img src="{{ Storage::url($Travels->image3) }}" class="img-fluid" alt="">
                        </div>
                        <div class="rumah">
                            <img src="{{ Storage::url($Travels->image4) }}" class="img-fluid" alt="">
                        </div>
                        <div class="rumah">
                            <img src="{{ Storage::url($Travels->image5) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="slide-bawah mt-1">
                        <div class="rumah1">
                            <img src="{{ Storage::url($Travels->image1) }}" class="img-fluid" alt="">
                        </div>
                        <div class="rumah1">
                            <img src="{{ Storage::url($Travels->image2) }}" class="img-fluid" alt="">
                        </div>
                        <div class="rumah1">
                            <img src="{{ Storage::url($Travels->image3) }}" class="img-fluid" alt="">
                        </div>
                        <div class="rumah1">
                            <img src="{{ Storage::url($Travels->image4) }}" class="img-fluid" alt="">
                        </div>
                        <div class="rumah1">
                            <img src="{{ Storage::url($Travels->image5) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="isiketerangan">
                        <h1 class="pt-2 fw-bolder lh-1 text-capitalize">{{ $Travels->name }}</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="small mb-1 text-uppercase">{{ $Travels->category->name }}</div>
                            </div>
                            <div class="col-md-6 text-end fs-4">
                                <p class="mb-0 small">Bagikan</p>
                                @php
                                    echo ShareButtons::page('https://travellinjava.my.id/', 'Page title', [
                                        'title' => 'Page title',
                                        'rel' => 'nofollow noopener noreferrer',
                                    ])
                                        ->facebook()
                                        ->twitter(['rel' => 'nofollow'])
                                        ->whatsapp()
                                        ->copylink()
                                        ->render();
                                @endphp
                            </div>
                        </div>
                        <hr>
                        <p class="text-left" style="font-size: 14px;">{{ $Travels->description }}</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </section>
    <!-- isirumah -->
    <!-- Related items section-->
    <section class="">
        <div class="container px-4 px-lg-5">
            <h2 class="fw-bolder mb-4">Rekomendasi wisata lain</h2>
            <div class="row text-center product py-3" data-aos="fade-up" data-aos-offset="250"
                data-aos-duration="900">
                @forelse ($related as $travel)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{ Storage::url($travel->image1) }}" class="card-img-top"
                                alt="{{ $travel->name }}">
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
        </div>
    </section>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"
        integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script type="text/javascript">
        $('.slide-atas').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slide-bawah'
        });
        $('.slide-bawah').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slide-atas',
            arrows: false,
            dots: true,
            centerMode: false,
            focusOnSelect: true
        });
    </script>
</body>

</html>
