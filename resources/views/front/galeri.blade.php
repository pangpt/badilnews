@extends('front.master')
@section('content')

    <body>
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


        <!-- Single Product Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="lifestyle">
                    <div class="border-bottom mb-4">
                        <h1 class="mb-4 text-center">Galeri Kami</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="lifestyle-item rounded">
                                <img src="{{asset('img/lifestyle-2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                <div class="lifestyle-content">
                                <div class="mt-auto text-center">
                                    <a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="lifestyle-item rounded">
                                <img src="{{asset('img/lifestyle-2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                <div class="lifestyle-content">
                                <div class="mt-auto text-center">
                                    <a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="lifestyle-item rounded">
                                <img src="{{asset('img/lifestyle-2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                <div class="lifestyle-content">
                                <div class="mt-auto text-center">
                                    <a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="lifestyle-item rounded">
                                <img src="{{asset('img/lifestyle-2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                <div class="lifestyle-content">
                                <div class="mt-auto text-center">
                                    <a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="lifestyle-item rounded">
                                <img src="{{asset('img/lifestyle-2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                <div class="lifestyle-content">
                                <div class="mt-auto text-center">
                                    <a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="lifestyle-item rounded">
                                <img src="{{asset('img/lifestyle-2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                <div class="lifestyle-content">
                                <div class="mt-auto text-center">
                                    <a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark footer py-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
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
                                            <img src="img/footer-1.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
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
                                            <img src="img/footer-2.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
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
                                        <img src="img/footer-1.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                               </div>
                               <div class="col-4">
                                    <div class="rounded overflow-hidden">
                                        <img src="img/footer-2.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div class="rounded overflow-hidden">
                                        <img src="img/footer-3.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div class="rounded overflow-hidden">
                                        <img src="img/footer-4.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div class="rounded overflow-hidden">
                                        <img src="img/footer-5.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                               </div>
                               <div class="col-4">
                                <div class="rounded overflow-hidden">
                                    <img src="img/footer-6.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
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


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-2 border-white rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

    
    </body>
    
@endsection