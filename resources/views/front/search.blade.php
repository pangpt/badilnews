@extends('front.master')
@section('content')
    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid sticky-top px-0">
            <div class="container-fluid bg-light">
                <div class="container px-0">
                    <nav class="navbar navbar-light navbar-expand-xl">
                        <a href="index.html" class="navbar-brand mt-3">
                            <p class="text-primary display-6 mb-2" style="line-height: 0;">Newsers</p>
                            <small class="text-body fw-normal" style="letter-spacing: 12px;">Nespaper</small>
                        </a>
                        <div class="d-flex align-items-center">
                            <button class="btn-search btn btn-md-square rounded-circlemy-auto d-block d-lg-none me-2 border-0" data-bs-toggle="modal" data-bs-target="#searchModal">
                              <i class="fas fa-search text-primary"></i>
                            </button>


                            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="fa fa-bars text-primary"></span>
                            </button>
                        </div>

                        

                        <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                            <div class="navbar-nav mx-auto border-top">
                              @foreach($categories as $category)
                                <a href="{{route('front.category', $category->slug)}}" class="nav-item nav-link">{{$category->name}}</a>
                              @endforeach
                            </div>
                            <div class="d-none d-lg-flex flex-nowrap border-top pt-3 pt-xl-0">
                                <div class="d-flex">
                                    <img src="{{asset('img/weather-icon.png')}}" class="img-fluid w-100 me-2" alt="">
                                    <div class="d-flex align-items-center">
                                        <strong class="fs-4 text-secondary">31°C</strong>
                                        <div class="d-flex flex-column ms-2" style="width: 150px;">
                                            <span class="text-body">NEW YORK,</span>
                                            <small>Mon. 10 jun 2024</small>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn-search btn border border-primary btn-md-square rounded-circle bg-white my-auto" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="container-fluid topbar bg-dark">
                <div class="container px-0">
                    <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                        <div class="top-info flex-grow-0">
                            <span class="rounded-circle btn-sm-square bg-primary me-2">
                                <i class="fas fa-bolt text-white"></i>
                            </span>
                            <div class="pe-2 me-3 border-end border-white d-flex align-items-center">
                                <p class="mb-0 text-white fs-6 fw-normal">Trending</p>
                            </div>
                            <div class="overflow-hidden" style="width: 735px;">
                                <div id="note" class="ps-2">
                                    <img src="{{asset('img/features-fashion.jpg')}}" class="img-fluid rounded-circle border border-3 border-primary me-2" style="width: 30px; height: 30px;" alt="">
                                    <a href="#"><p class="text-white mb-0 link-hover">Newsan unknown printer took a galley of type andscrambled Newsan.</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="top-link flex-lg-wrap">
                            @php
                                use Carbon\Carbon;
                                setlocale(LC_TIME, 'id_ID');
                                \Carbon\Carbon::setLocale('id');
                            @endphp

                            <i class="fas fa-calendar-alt text-white border-end border-secondary pe-2 me-2">
                                <span class="text-body">{{ Carbon::now()->translatedFormat('l, d F Y') }}</span>
                            </i>
                            <div class="d-flex icon">
                                <p class="mb-0 text-white me-2">Follow Us:</p>
                                <a href="" class="me-2"><i class="fab fa-facebook-f text-body link-hover"></i></a>
                                <a href="" class="me-2"><i class="fab fa-twitter text-body link-hover"></i></a>
                                <a href="" class="me-2"><i class="fab fa-instagram text-body link-hover"></i></a>
                                <a href="" class="me-2"><i class="fab fa-youtube text-body link-hover"></i></a>
                                <a href="" class="me-2"><i class="fab fa-linkedin-in text-body link-hover"></i></a>
                                <a href="" class="me-2"><i class="fab fa-skype text-body link-hover"></i></a>
                                <a href="" class=""><i class="fab fa-pinterest-p text-body link-hover"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="GET" action="{{route('front.search')}}" class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            @csrf
                            <input type="text" name="keyword" class="form-control p-3" placeholder="Cari" aria-describedby="search-icon-1">
                            <button type="submit" id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <div class="container-fluid populer-news mt-4">

            <!-- Most Populer News Start -->
            <div class="container-fluid populer-news">
                <div class="container">
                    <div class="tab-class mb-4">
                        <div class="row g-4">
                            <div class="col-lg-8 col-xl-8">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h3 class="mb-0">Hasil Pencarian <span>"{{ucfirst($keyword)}}"</span></h3>
                                </div>

                                <div class="whats-item mb-4">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="row g-4">
                                                @forelse($articles as $article)
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center border-bottom pb-4">
                                                        <div class="col-4">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{Storage::url($article->thumbnail)}}" class="img-zoomin img-fluid rounded fixed-image" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2" style="color:red !important">{{$article->category->name}}</p>
                                                                <a href="#" class="h5">{{substr($article->name, 0, 100)}}{{strlen($article->name) > 100 ? '...' : ''}}</a>
                                                                <small class="text-body d-block">
                                                                    <i class="fas fa-calendar-alt me-1"></i> {{$article->created_at->format('M d, Y')}}
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                <p>Belum ada berita terkini</p>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="p-3 rounded border">
                                            <h4 class="my-4">Berita Terpopuler</h4>
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center features-item">
                                                        <div class="col-4">
                                                            <div class="rounded-circle position-relative">
                                                                <div class="overflow-hidden rounded-circle">
                                                                    <img src="{{asset('img/features-sports-1.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                                </div>
                                                                <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Sports</p>
                                                                <a href="#" class="h6">
                                                                    Get the best speak market, news.
                                                                </a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center features-item">
                                                        <div class="col-4">
                                                            <div class="rounded-circle position-relative">
                                                                <div class="overflow-hidden rounded-circle">
                                                                    <img src="{{asset('img/features-technology.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                                </div>
                                                                <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Technology</p>
                                                                <a href="#" class="h6">
                                                                    Get the best speak market, news.
                                                                </a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center features-item">
                                                        <div class="col-4">
                                                            <div class="rounded-circle position-relative">
                                                                <div class="overflow-hidden rounded-circle">
                                                                    <img src="{{asset('img/features-fashion.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                                </div>
                                                                <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Fashion</p>
                                                                <a href="#" class="h6">
                                                                    Get the best speak market, news.
                                                                </a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center features-item">
                                                        <div class="col-4">
                                                            <div class="rounded-circle position-relative">
                                                                <div class="overflow-hidden rounded-circle">
                                                                    <img src="{{asset('img/features-life-style.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                                </div>
                                                                <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2">Life Style</p>
                                                                <a href="#" class="h6">
                                                                    Get the best speak market, news.
                                                                </a>
                                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <a href="#" class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">View More</a>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="border-bottom my-3 pb-3">
                                                        <h4 class="mb-0">Trending Tags</h4>
                                                    </div>
                                                    <ul class="nav nav-pills d-inline-flex text-center mb-4">
                                                        <li class="nav-item mb-3">
                                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                                <span class="text-dark link-hover" style="width: 90px;">Lifestyle</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item mb-3">
                                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                                <span class="text-dark link-hover" style="width: 90px;">Sports</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item mb-3">
                                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                                <span class="text-dark link-hover" style="width: 90px;">Politics</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item mb-3">
                                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                                <span class="text-dark link-hover" style="width: 90px;">Magazine</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item mb-3">
                                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                                <span class="text-dark link-hover" style="width: 90px;">Game</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item mb-3">
                                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                                <span class="text-dark link-hover" style="width: 90px;">Movie</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item mb-3">
                                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                                <span class="text-dark link-hover" style="width: 90px;">Travel</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item mb-3">
                                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                                <span class="text-dark link-hover" style="width: 90px;">World</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="position-relative banner-2">
                                                        <img src="{{asset('img/banner-2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                                        <div class="text-center banner-content-2">
                                                            <h6 class="mb-2">The Most Populer</h6>
                                                            <p class="text-white mb-2">News & Magazine WP Theme</p>
                                                            <a href="#" class="btn btn-primary text-white px-4">Shop Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Most Populer News End -->


            <!-- Footer Start -->
            <div class="container-fluid bg-dark footer py-5">
                <div class="container py-5">
                    <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(255, 255, 255, 0.08);">
                        <div class="row g-4">
                            <div class="col-lg-3">
                                <a href="#" class="d-flex flex-column flex-wrap">
                                    <p class="text-white mb-0 display-6">Newsers</p>
                                    <small class="text-light" style="letter-spacing: 11px; line-height: 0;">Newspaper</small>
                                </a>
                            </div>
                            <div class="col-lg-9">
                                <div class="d-flex position-relative rounded-pill overflow-hidden">
                                    <input class="form-control border-0 w-100 py-3 rounded-pill" type="email" placeholder="example@gmail.com">
                                    <button type="submit" class="btn btn-primary border-0 py-3 px-5 rounded-pill text-white position-absolute" style="top: 0; right: 0;">Subscribe Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6 col-xl-3">
                            <div class="footer-item-1">
                                <h4 class="mb-4 text-white">Get In Touch</h4>
                                <p class="text-secondary line-h">Address: <span class="text-white">123 Streat, New York</span></p>
                                <p class="text-secondary line-h">Email: <span class="text-white">Example@gmail.com</span></p>
                                <p class="text-secondary line-h">Phone: <span class="text-white">+0123 4567 8910</span></p>
                                <div class="d-flex line-h">
                                    <a class="btn btn-light me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter text-dark"></i></a>
                                    <a class="btn btn-light me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f text-dark"></i></a>
                                    <a class="btn btn-light me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube text-dark"></i></a>
                                    <a class="btn btn-light btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in text-dark"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-3">
                            <div class="footer-item-2">
                                <div class="d-flex flex-column mb-4">
                                    <h4 class="mb-4 text-white">Recent Posts</h4>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle border border-2 border-primary overflow-hidden">
                                                <img src="{{asset('img/footer-1.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                            </div>
                                            <div class="d-flex flex-column ps-4">
                                                <p class="text-uppercase text-white mb-3">Life Style</p>
                                                <a href="#" class="h6 text-white">
                                                    Get the best speak market, news.
                                                </a>
                                                <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle border border-2 border-primary overflow-hidden">
                                                <img src="{{asset('img/footer-2.jpg')}}" class="img-zoominimg-fluid rounded-circle w-100" alt="">
                                            </div>
                                            <div class="d-flex flex-column ps-4">
                                                <p class="text-uppercase text-white mb-3">Sports</p>
                                                <a href="#" class="h6 text-white">
                                                    Get the best speak market, news.
                                                </a>
                                                <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-3">
                            <div class="d-flex flex-column text-start footer-item-3">
                                <h4 class="mb-4 text-white">Categories</h4>
                                <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> Sports</a>
                                <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> Magazine</a>
                                <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> Lifestyle</a>
                                <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> Politician</a>
                                <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> Technology</a>
                                <a class="btn-link text-white" href=""><i class="fas fa-angle-right text-white me-2"></i> Intertainment</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-3">
                            <div class="footer-item-4">
                                <h4 class="mb-4 text-white">Our Gallary</h4>
                                <div class="row g-2">
                                    <div class="col-4">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{asset('img/footer-1.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                </div>
                                <div class="col-4">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{asset('img/footer-2.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                </div>
                                    <div class="col-4">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{asset('img/footer-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                </div>
                                    <div class="col-4">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{asset('img/footer-4.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                </div>
                                    <div class="col-4">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{asset('img/footer-5.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                </div>
                                <div class="col-4">
                                    <div class="rounded overflow-hidden">
                                        <img src="{{asset('img/footer-6.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Copyright Start -->
            <div class="container-fluid copyright bg-dark py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                        </div>
                        <div class="col-md-6 my-auto text-center text-md-end text-white">
                            <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                            <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                            <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright End -->

        </div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-2 border-white rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('customjs/main.js')}}"></script>
    </body>
@endsection