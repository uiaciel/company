<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>PT SUMBER GLOBAL ENERGY Tbk - {{ $data }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta
        content="coal trading,
        list of coal trading companies in india,
        top coal trading companies in the world,
        coal trading adalah,
        coal trading associate,
        coal trade australia,
        coal trading business,
        coal trading companies,
        coal trading companies in india,
        coal trading companies in indonesia,
        coal trading company profile,
        coal tradingview,
        coal trading exchange,
        ep coal trading,
        coal futures trading"
        name="keywords" />
    <meta
        content="PT. Sumber Global Energy Tbk (SGER) didirikan pada tanggal 17 Maret 2008. Perusahaan bersama anak usahanya bergerak dalam bidang perdagangan besar bahan bakar padat, cair, gas, energi terbaru dan terbarukan serta pertambangan logam dan mineral tanah jarang (rare earth). Perusahaan memulai kegiatan operasionalnya pada tahun 2011"
        name="description" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet" />
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Template Stylesheet -->
    <link href="/css/custom.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />

    <style>
        p {
            color: black;
        }

        .bg-page-header {
            position: relative;
        }

        .bg-page-header:after {
            background: rgba(244, 99, 11, 0.92);
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
        }

        .bg-page-header .page-header {
            text-align: center;
            border-bottom: none;
            margin: 0;
            padding: 50px 0;
            position: relative;
            z-index: 1;
        }

        .page-title h2 {
            color: #fff;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center border-start border-end px-3">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>(+6221) 2500120</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center border-end px-3">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>info@sumberglobalenergy.com</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center border-end px-3">
                    <small class="far fa-clock me-2"></small>
                    <small>Mon - Fri : 09 AM - 09 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">

                    <a class="btn btn-square border-end border-start" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square border-end" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square border-end" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square border-end" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->


    <nav class="navbar navbar-expand-lg text-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
        style="
  background-color: #1E4592;
">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">
                <img src="https://sumberglobalenergy.co.id/img/LOGO-SGE-TBK.png" class="logo"alt="Logo">
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-3 py-lg-0">
                <a href="/" class="nav-item text-white nav-link active">{{ __('home.home') }}</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link text-white dropdown-toggle"
                        data-bs-toggle="dropdown">{{ __('home.aboutus') }}</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="/en/company-profile" class="dropdown-item">Company Profile</a>
                        <a href="/en/visi-mission" class="dropdown-item">Visi & Mision</a>
                        <a href="/en/message-from-director" class="dropdown-item">Message From Director</a>
                        <a href="/en/company-policy" class="dropdown-item">Company Policy</a>
                    </div>
                </div>
                @if (App::getLocale() == 'id')
                    <a href="/id/media-center" class="nav-item text-white nav-link">{{ __('home.mediacenter') }}</a>
                @else
                    <a href="/en/media-center" class="nav-item text-white nav-link">{{ __('home.mediacenter') }}</a>
                @endif
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link text-white dropdown-toggle"
                        data-bs-toggle="dropdown">{{ __('home.investorrelation') }}</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="/category/prospektus" class="dropdown-item">Public Offering Prospectus</a>
                        <a href="/financial-reports" class="dropdown-item">Financial Report</a>
                        <a href="/share-price" class="dropdown-item">Share Price</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown">ESG</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="/en/corporate-social-responsibility" class="dropdown-item">CSR</a>
                    </div>
                </div>
                <a href="/category/career" class="nav-item text-white nav-link">{{ __('home.career') }}</a>
                <a href="/contact-us" class="nav-item text-white nav-link">{{ __('home.contact') }}</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown">
                        @if (App()->getLocale() == 'id')
                            ID
                        @else
                            EN
                        @endif
                    </a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ url('locale/en') }}" class="dropdown-item"><img
                                src="https://demo.adminkit.io/img/flags/us.png" alt="Indonesia" width="20"
                                class="align-middle me-1"><span class="align-middle">English</span></a>
                        <a href="{{ url('locale/id') }}" class="dropdown-item"><img
                                src="https://demo.adminkit.io/img/flags/id.png" alt="Indonesia" width="20"
                                class="align-middle me-1"><span class="align-middle">Indonesia</span></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @foreach ($menus->where('parent_id', 0) as $menu)
                        @php
                            $children = $menus->where('parent_id', $menu->id);
                        @endphp

                        @if (!$children->isEmpty())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ $menu->title }}
                                </a>

                                <ul class="dropdown-menu">
                                    @foreach ($children->sortBy('sort_id') as $child)
                                        <li><a class="dropdown-item"
                                                href="{{ $child->slug }}">{{ $child->title }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="{{ $menu->slug }}">{{ $menu->title }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <div id="app">
        @yield('content')
    </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">{{ __('home.aboutus') }}</h4>
                    <p class="text-light">
                        {{ __('home.desc') }}
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-primary me-0" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">{{ __('home.headoffice') }}</h4>
                    <p class="text-light">Graha BIP 2nd Floor</p>
                    <p class="text-light">Jl. Gatot Subroto Kav. 23 Karet Semanggi, Setiabudi, Daerah Khusus Ibukota
                        Jakarta 12930
                    </p>
                    <p class="text-light"><i class="fa fa-phone-alt me-3"></i>(+6221) 2500120</p>
                    <p class="text-light" style="font-size: 0.9rem !important;"><i
                            class="fa fa-envelope me-3"></i>info@sumberglobalenergy.com</p>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">{{ __('home.quicklink') }}</h4>
                    <a class="btn btn-link" href="/en/company-profile">{{ __('home.aboutus') }}</a>
                    @if (App::getLocale() == 'id')
                        <a class="btn btn-link" href="/id/media-center">{{ __('home.mediacenter') }}</a>
                    @else
                        <a class="btn btn-link" href="/en/media-center">{{ __('home.mediacenter') }}</a>
                    @endif
                    <a class="btn btn-link" href="/share-price">{{ __('home.shareprice') }}</a>
                    <a class="btn btn-link" href="/financial-reports">{{ __('home.financialreport') }}</a>
                    <a class="btn btn-link" href="/contact-us">{{ __('home.contact') }}</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">{{ __('home.shareprice') }}</h4>
                    <div class="position-relative mx-auto" style="max-width: 400px">
                        <h6 class="text-light">PT. SUMBER GLOBAL ENERGY Tbk (SGER)</h6>
                        <h4 class="text-light">{{ $data }} @if ($tanda === '-')
                                <i class="fa fa-caret-down text-danger" aria-hidden="true"></i>
                            @else
                                <i class="fa fa-caret-up text-light" aria-hidden="true"></i>
                            @endif {{ $cal }} </h4>
                        <img src="https://ik.imagekit.io/tk6ir0e7mng/uploads/2021/05/1619944448337.png"
                            class="img-fluid mt-3" style="
  height: 40px;
" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">www.sumberglobalenergy.com</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end" hidden>
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br />Distributed By:
                        <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
    @if (empty($modal->id))
    @else
        <script type="text/javascript">
            window.onload = function() {
                OpenBootstrapPopup();
            };

            function OpenBootstrapPopup() {
                $("#modal{{ $modal->id }}").modal('show');
            }
        </script>
    @endif
</body>

</html>
