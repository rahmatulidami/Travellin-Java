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
    {{-- animated on scroll --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- animated hover --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css"
        integrity="sha512-SJw7jzjMYJhsEnN/BuxTWXkezA2cRanuB8TdCNMXFJjxG9ZGSKOX5P3j03H6kdMxalKHZ7vlBMB4CagFP/de0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css"
        integrity="sha512-Qg72y9f1a3aVc1FVnjq5YURLOOG8fDKQjMnhxYaZgBz4nIVjpVOBUtuMMMqkZPS1FlVrzzEBXq2sM6Qp1zen/Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    {{-- animate --}}
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet" />
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
                            href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link text-white" aria-current="page"
                            href="#testimonial">Testimoni</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" aria-current="page" href="#footer">Tentang
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

    <!-- Carousel-->
    <!-- Hero-->
    <section id="hero">
        <div class="container  px-4 px-lg-5">
            <div class="row pt-4">
                <div class="col-lg-6 col-md-4 d-flex align-items-center">
                    <div class="">
                        <p class="font-Montserrat fs-2 pt-3 typing-animation">
                            @if (empty($heroes->title))
                                <p class="font-Montserrat fs-2 pt-3 typing-animation">
                                    Ubah di admin
                                </p>
                            @else
                                <p class="font-Montserrat fs-2 pt-3 typing-animation">
                                    {{ $heroes->title }}
                                </p>
                            @endif
                        </p>
                        <p class="py-2 fs-5 leading-normal text-gray-500">
                            @if (empty($heroes->caption))
                                <p class="font-Montserrat fs-2 pt-3 typing-animation">
                                    Ubah di admin
                                </p>
                            @else
                                <p class="font-Montserrat fs-2 pt-3 typing-animation">
                                    {{ $heroes->caption }}
                                </p>
                            @endif
                        <div class="fs-1 icons-container">
                            <a href="" class="btn btn-outline-primary">Jelajahi Sekarang</a>
                        </div>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 d-flex justify-content-center align-items-center">
                    <div class="rounded-full">
                        @if (!empty($heroes->image))
                            <img src="{{ Storage::url($heroes->image) }}" class=" d-block w-100 rounded-circle"
                                alt="Hero Illustration" />
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- card Section -->
    <section id="products" class="py-5 px-4 px-lg-5 mt-5" style="background-color: rgba(16, 83, 183, 0.2);">
        <p href="#" class="text-start h5 mt-2 fw-bolder font-Montserrat">Destinasi Terpopuler</p>
        <div class="kliklanjut mt-2" data-aos="fade-up">
            <a href="{{ route('landing.page') }}" class="hvr-forward text-black">Lebih Lanjut
                <i class="bi bi-caret-right-fill"></i>
            </a>
        </div>
        <div class="row text-center product py-3" data-aos="fade-up" data-aos-offset="250" data-aos-duration="900">
            <div class="col">
                <!-- Slider main container -->
                <div class="swiper mySwiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->

                        @forelse ($travels as $travel)
                            <div class="swiper-slide" style="width: 290px; margin: 0 auto;">
                                <div class="card" style="width: 290px;">
                                    <img src="{{ Storage::url($travel->image1) }}"
                                        class="img-fluid rounded-start p-3" alt="{{ $travel->name }}">
                                    <small class="text-strong text-center">{{ $travel->category->name }}</small>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold text-capitalize">{{ $travel->name }}</h5>
                                        <small class="d-flex justify-content-start mb-3 text-muted fs-6">
                                            @for ($i = 0; $i < $travel->rating; $i++)
                                                <div class="bi-star-fill"></div>
                                            @endfor
                                        </small>
                                        <a href="{{ route('landing.detail', ['id' => $travel->id]) }}"
                                            class="btn btn-outline-success mt-2">
                                            lihat Detail</a>
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
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="row">
            <div class="toogle-slider d-flex justify-content-end mt-1">
                <i class="bi bi-arrow-left-circle-fill iconBg" style="font-size: 2.2rem;"></i>
                <i class="bi bi-arrow-right-circle-fill iconBg" style="font-size: 2.2rem; margin-left: 10px;"></i>
            </div>
        </div>
    </section>
    {{-- section card --}}
    <!-- Related items section-->
    {{-- <section class="py-5 " style="background-color: rgba(16, 83, 183, 0.2)">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4 fs-4">Kategori Tempat Lain</h2>
            <div class="row text-center product py-3" data-aos="fade-up" data-aos-offset="250"
                data-aos-duration="900">
                @forelse ($related as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            @if ($product->sale_price != 0)
                                <!-- Sale badge-->
                                <div class="badge bg-warning text-white position-absolute top-0 end-0">Sale</div>
                            @endif
                            <img src="{{ asset('storage/product/' . $product->image) }}" class="card-img-top"
                                alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-capitalize">{{ $product->name }}</h5>
                                <small class="text-strong text-center">{{ $product->category->name }}</small>
                                <div class="d-flex justify-content-center mb-3 text-muted fs-6">
                                    @for ($i = 0; $i < $product->rating; $i++)
                                        <div class="bi-star-fill"></div>
                                    @endfor
                                </div>
                                <!-- Product price-->
                                @if ($product->sale_price != 0)
                                    <span
                                        class="text-muted text-decoration-line-through">Rp.{{ number_format($product->price, 0) }}</span>
                                    <p class="card-text fs-5" style="color: #69B99D;">
                                        <strong>Rp.{{ number_format($product->sale_price, 0) }}</strong>
                                    </p>
                                @else
                                    <p class="card-text fs-5" style="color: #69B99D;">
                                        <strong>Rp.{{ number_format($product->price, 0) }}</strong>
                                    </p>
                                @endif
                                <div class="d-flex justify-content-center">
                                    @auth
                                        <a href="https://wa.me/6285691393029?text={{ urlencode('Saya ingin membeli produk ' . $product->name) }}"
                                            class="btn btn-outline-success me-2">Pesan</a>
                                    @endauth
                                    @guest
                                        <a href="{{ route('login') }}" class="btn btn-outline-success me-2">Pesan</a>
                                    @endguest
                                    <a href="{{ route('product.show', ['id' => $product->id]) }}"
                                        class="btn btn-outline-success">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                <div class="alert alert-primary w-100 text-center" role="alert">
                    <h4>Kategori belum tersedia</h4>
                </div>
                @endforelse
            </div>
        </div>
    </section> --}}

    <!-- Section-->

    <!-- testimonial -->
    <section id="testimonial">
        <div class="container py-5">
            <div class=" mt-2 fw-bold text-start font-Montserrat fs-4">Testimonial Pelanggan</div>
            <div class=" mt-2 text-start font-Montserrat fs-5">Pendapat pelanggan tentang kami</div>
            <div class="row">
                <!-- Slider main container -->
                <div class="swiper SwiperTesti">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        @forelse ($testimonials as $testimoni)
                            <div class="col-md-4 swiper-slide" data-aos="fade-up" data-aos-offset="250"
                                data-aos-duration="1000">
                                <div class="card komen mt-3">
                                    <div class="card-body">
                                        <div class="bawahisicard d-flex justify-content-start mt-4">
                                            <img src="{{ Storage::url($testimoni->user->avatar_url) }}"
                                                class="rounded-circle" style="width: 75px; height: 75px;"
                                                alt="">
                                            <div class="col-md-6"
                                                style="display: flex; align-items: center; margin-left: 15px;">

                                                <p style="color: #0B2E29;">{{ $testimoni->user->name }}</p>
                                            </div>
                                        </div>
                                        <p class="card-text fs-6 mt-3" style="color: #1F2744;">
                                            {{ $testimoni->deskripsi }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-primary w-100 text-center" role="alert">
                                <h4>Testimonial belum tersedia</h4>
                            </div>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- komentar -->


    <!-- Footer-->
    <footer id="footer" class="pt-5 py-3" style="background-color: rgba(16, 83, 183, 0.2)">
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
    <!-- animate JS-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- JavaScript swiper --}}
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        AOS.init();

        var swiper = new Swiper(".mySwiper", {
            grabCursor: true,
            centeredSlides: false,
            spaceBetween: 20,
            slidesPerView: "auto",
            navigation: {
                prevEl: ".bi-arrow-left-circle-fill",
                nextEl: ".bi-arrow-right-circle-fill",
            },
        });

        var SwiperTesti = new Swiper(".SwiperTesti", {
            grabCursor: true,
            centeredSlides: false,
            spaceBetween: 20,
            slidesPerView: "auto",
            navigation: {
                prevEl: ".bi-arrow-left-circle-fill",
                nextEl: ".bi-arrow-right-circle-fill",
            },
        });
    </script>
    {{-- <script src="{{ asset('js/scripts.js') }}"></script> --}}
</body>

</html>
