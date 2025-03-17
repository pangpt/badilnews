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
                            <p class="text-primary display-6 mb-2" style="line-height: 0;">Pabonews</p>
                            <small class="text-body fw-normal" style="letter-spacing: 12px;">Informatif</small>
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
                                <a href="{{ route('front.galeri') }}" class="nav-item nav-link">Galeri</a>
                                <a href="{{ route('front.berita') }}" class="nav-item nav-link">Berita</a>
                                <a href="{{ route('front.opini') }}" class="nav-item nav-link">Opini</a>
                                <a href="{{ route('front.kontak') }}" class="nav-item nav-link">Kontak</a>
                            </div>
                            <div class="d-none d-lg-flex flex-nowrap border-top pt-3 pt-xl-0">
                                <div class="d-flex">
                                    <img src="{{ asset('img/weather-icon.png') }}" class="img-fluid w-100 me-2" alt="">
                                    <div class="d-flex align-items-center">
                                        <strong class="fs-4 text-secondary">31°C</strong>
                                        <div class="d-flex flex-column ms-2" style="width: 150px;">
                                            <span class="text-body">NEW YORK,</span>
                                            <small>Mon. 10 Jun 2024</small>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn-search btn border border-primary btn-md-square rounded-circle bg-white my-auto" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="fas fa-search text-primary"></i>
                                </button>
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
                                    <a href="#"><p class="text-white mb-0 link-hover">{{ $latest_featured_article->name }}</p></a>
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
                                <p class="mb-0 text-white me-2">Ikuti Kami:</p>
                                <a href="" class="me-2"><i class="fab fa-facebook-f text-body link-hover"></i></a>
                                <a href="" class="me-2"><i class="fab fa-instagram text-body link-hover"></i></a>
                                <a href="" class="me-2"><i class="fab fa-youtube text-body link-hover"></i></a>
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


        <div class="container-fluid populer-news">
            <!-- Banner Start -->
            <div class="container-fluid" style="background: linear-gradient(rgba(202, 203, 185, 1), rgba(202, 203, 185, 1));">
                <div class="container py-3 mt-3"> 
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7">
                            <h1 class="mb-4 text-primary">Newsers</h1>
                            <h1 class="mb-4">Get Every Weekly Updates</h1>
                            <p class="text-dark mb-4 pb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            </p>
                            <div class="position-relative mx-auto">
                                <input class="form-control w-100 py-3 rounded-pill" type="email" placeholder="Your Busines Email">
                                <button type="submit" class="btn btn-primary py-3 px-5 position-absolute rounded-pill text-white h-100" style="top: 0; right: 0;">Subscribe Now</button>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="rounded">
                                <img src="img/banner-img.jpg" class="img-fluid rounded w-100 rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->
            <div class="container py-3">
                <div class="tab-class mb-4">
                        <div class="col-lg-12 col-xl-12">
                            <div class="tab-content mb-4">
                                <div id="tab-1" class="tab-pane fade show p-0 active responsive-container">
                                    <!-- Desktop View (Layar Besar) -->
                                    <div class="align-items-stretch d-none d-lg-flex">
                                        <!-- Gambar di Kiri -->
                                            <div class="col-lg-6 d-flex flex-column image-container">
                                                <div class="position-relative rounded overflow-hidden w-100 h-100">
                                                    <img src="{{Storage::url($latest_featured_article->thumbnail)}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                </div>
                                            </div>

                                        <!-- Teks di Kanan -->
                                        <div class="col-lg-6 d-flex align-items-center border-top border-bottom border-dark text-container">
                                            <div class="p-4 d-flex flex-column justify-content-center w-100 h-100">
                                                <a href="#" class="text-body" style="color:red !important">{{$latest_featured_article->category->name}}</a>
                                                <a href="{{route('front.details', $latest_featured_article->slug)}}" class="h4 article-title">{{$latest_featured_article->name}}</a>
                                                <p class="article-description">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <small class="text-body d-block">
                                                        <i class="fas fa-calendar-alt me-1"></i> {{$latest_featured_article->created_at->format('M d, Y')}}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Mobile View (Layar Kecil) -->
                                    <div class="lifestyle mobile-view d-lg-none d-block">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="lifestyle-item">
                                                    <img src="{{Storage::url($latest_featured_article->thumbnail)}}" class="img-fluid w-100" alt="">
                                                    <div class="lifestyle-content">
                                                        <div class="mt-auto">
                                                            <a href="#" class="h4 text-white link-hover">{{$latest_featured_article->name}}</a>
                                                            <div class="d-flex justify-content-between mt-4">
                                                                <a href="#" class="small text-white link-hover">By Willium Smith</a>
                                                                <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> {{$latest_featured_article->created_at->format('M d, Y')}}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-4">
                                        {{-- <h2 class="my-4">Berit</h2> --}}
                                    </div>
                                    <div class="whats-carousel owl-carousel">
                                    @forelse($gallery_articles as $article)
                                        <div class="whats-item">
                                            <div class="card bg-light rounded h-100 d-flex flex-column">
                                                <!-- Gambar -->
                                                <div class="rounded-top overflow-hidden">
                                                    <img src="{{ Storage::url($article->thumbnail) }}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                                </div>

                                                <!-- Konten Artikel -->
                                                <div class="d-flex flex-column flex-grow-1 p-3">
                                                    <a href="#" class="text-body" style="color:red !important">{{ $article->category->name }}</a>
                                                    <a href="{{route('front.details', $article->slug)}}" class="h6 article-title" title="{{ $article->name }}">
                                                        {{substr($article->name, 0, 60)}}{{strlen($article->name) > 60 ? '...' : ''}}
                                                    </a>

                                                    <div class="d-flex justify-content-between mt-auto">
                                                        
                                                        <small class="text-body">
                                                            <i class="fas fa-calendar-alt me-1"></i> {{ $article->created_at->format('M d, Y') }}
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <p>Belum ada artikel terbaru</p>
                                    @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <!-- Most Populer News Start -->
            <div class="container-fluid populer-news">
                <div class="container">
                    <div class="tab-class mb-4">
                        <div class="row g-4">
                            <div class="col-lg-8 col-xl-8">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h1 class="mb-0">Terkini</h1>
                                    <p class="mb-0"><a href="#" class="text-primary">Selengkapnya...</a></p>
                                </div>

                                <div class="whats-item mb-4">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="row g-4">
                                                @forelse($current_articles as $current)
                                                <div class="col-12">
                                                    <div class="row g-4 align-items-center border-bottom pb-4">
                                                        <div class="col-4">
                                                            <div class="overflow-hidden rounded">
                                                                <img src="{{Storage::url($current->thumbnail)}}" class="img-zoomin img-fluid rounded fixed-image" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="features-content d-flex flex-column">
                                                                <p class="text-uppercase mb-2" style="color:red !important">{{$current->category->name}}</p>
                                                                <a href="#" class="h5">{{substr($current->name, 0, 100)}}{{strlen($current->name) > 100 ? '...' : ''}}</a>
                                                                <small class="text-body d-block">
                                                                    <i class="fas fa-calendar-alt me-1"></i> {{$current->created_at->format('M d, Y')}}
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
                                <div class="mt-5 lifestyle">
                                    <div class="border-bottom mb-4">
                                        <h1 class="mb-4">Life Style</h1>
                                    </div>
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="lifestyle-item rounded">
                                                <img src="{{asset('img/lifestyle-1.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                                <div class="lifestyle-content">
                                                <div class="mt-auto">
                                                        <a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
                                                        <div class="d-flex justify-content-between mt-4">
                                                            <a href="#" class="small text-white link-hover">By Willium Smith</a>
                                                            <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                        </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="lifestyle-item rounded">
                                                <img src="{{asset('img/lifestyle-2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                                <div class="lifestyle-content">
                                                <div class="mt-auto">
                                                        <a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
                                                        <div class="d-flex justify-content-between mt-4">
                                                            <a href="#" class="small text-white link-hover">By Willium Smith</a>
                                                            <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                        </div>
                                                </div>
                                                </div>
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
    </body>
@endsection