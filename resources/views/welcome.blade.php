@extends('layouts.app')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img class="w-100" src="/img/coal-sge-banner.jpg" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                                        We are making world a Better place for you.
                                    </h1>
                                    <!-- <ol class="breadcrumb mb-4 pb-2">
                                                                                                                    <li class="breadcrumb-item fs-5 text-light">
                                                                                                                      Trading & Mining
                                                                                                                    </li>
                                                                                                                    <li class="breadcrumb-item fs-5 text-light">
                                                                                                                      Coal, Gas, Liquid
                                                                                                                    </li>
                                                                                                                    <li class="breadcrumb-item fs-5 text-light">
                                                                                                                      Renewable Energy
                                                                                                                    </li>
                                                                                                                  </ol> -->
                                    <!-- <a href="" class="btn btn-sm btn-primary py-3 px-5"
                                                                                                                    >More Details</a
                                                                                                                  > -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- <img class="w-100" src="img/carousel-2.jpg" alt="Image" /> -->
                    <img class="w-100" src="/img/coal-sge-banner.jpg" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                                        Indonesia's Leading Coal Trading Company
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>
    </div>
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="d-flex flex-sm-row flex-column justify-content-lg-between">
                    {{-- @foreach ($pages->where('id_menu', 3) as $sub)
                        <div class="team-item position-relative p-2">
                            <img class="img-fluid" src="/img/3.jpeg" alt="" />
                            <div class="team-text bg-white p-4">
                                <h6><a href="{{ $sub->menu->slug }}/{{ $sub->slug }}"
                                        class="text-dark">{{ $sub->title }}</a></h6>

                            </div>
                        </div>
                    @endforeach --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Team End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100" src="/img/batubara-tank.jpeg" alt=""
                            style="object-fit: cover" />
                        <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                                <h1 class="text-white">18</h1>
                                <h2 class="text-white">Years</h2>
                                <h5 class="text-white mb-0">Experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h6 class="text-body text-uppercase mb-2">{{ __('home.aboutus') }}</h6>
                            <h1 class="display-6 mb-0">
                                NEXT GENERATION OF ENERGY PROVIDER
                            </h1>
                        </div>
                        <p>
                            Sumber Globar Energy Tbk (SGE) has strengthened its position as the most reliable coal trading
                            company in the export and domestic coal market by its systematic one stop coal supplier system
                            from coal miners to delivery. We can sell to export customers on FOB/CFR/CIF vessel basis.
                            We started this business in Jakarta in 2008, trading coal from South and East Kalimantan to
                            domestic and export clients. We are currently hard at work supplying coal, nickel and other
                            commodities to export and domestic customers. </p>
                        <p class="mb-4">
                            We export to China, India, Vietnam, Bangladesh, South Korea and Asian/European markets
                            With all the hard-work and dedication, SGER has become the top 5 National coal trading company
                            in Indonesia with excellent reputation, especially the ON-time delivery and good performance. In
                            2021 SGER sold more than 3 million MT of coal, and is aiming to sell 6 million MT in 2022.
                        </p>
                        <p class="mb-4">Now SGE has 8 subsidiaries, with various lines of businesses, ranging from coal
                            mining company to waste-to-energy project. We also have offices in Singapore and Kalimantan.
                            To spur its rapid growth, In 2020 SGE went public and listed in Indonesia Stock Exchange,
                            (Ticker : SGER and ISIN Code : ID1000156706)
                        </p>
                        <div class="border-top mt-4 pt-4">
                            <div class="row g-4">
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                                    <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                    <h6 class="mb-0">Coal Trading & Mining</h6>
                                </div>
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                                    <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                    <h6 class="mb-0">Metals and Commodities Trading</h6>
                                </div>
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                                    <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                    <h6 class="mb-0">Renewable Energy</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Facts Start -->
    <div class="container-fluid my-5 p-0">
        <div class="row g-0">
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="/img/batu-bara.jpg" alt="" />
                    <div class="facts-overlay">
                        <h1 class="display-1">01</h1>
                        <h4 class="text-white mb-3">{{ __('home.coal') }}</h4>
                        {{-- <a class="text-white small" href=""
              >READ MORE<i class="fa fa-arrow-right ms-3"></i
            ></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="/img/minerals.jpg" alt="" />
                    <div class="facts-overlay">
                        <h1 class="display-1">02</h1>
                        <h4 class="text-white mb-3">{{ __('home.mineral') }}</h4>
                        {{-- <a class="text-white small" href=""
              >READ MORE<i class="fa fa-arrow-right ms-3"></i
            ></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="/img/rare-earth-metals.jpg" alt="" />
                    <div class="facts-overlay">
                        <h1 class="display-1">03</h1>
                        <h4 class="text-white mb-3">{{ __('home.rare') }}</h4>
                        {{-- <a class="text-white small" href=""
              >READ MORE<i class="fa fa-arrow-right ms-3"></i
            ></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="/img/renewable.jpg" alt="" />
                    <div class="facts-overlay">
                        <h1 class="display-1">04</h1>
                        <h4 class="text-white mb-3">{{ __('home.renewable') }}</h4>
                        {{-- <a class="text-white small" href=""
              >READ MORE<i class="fa fa-arrow-right ms-3"></i
            ></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <!-- <h6 class="text-body text-uppercase mb-2"></h6> -->
                        <h1 class="display-6 mb-0">{{ __('home.announcement') }}
                        </h1>
                    </div>
                    <ol class="list-group list-group-numbered">
                        @foreach ($announs as $announ)
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">{{ $announ->title }}</div>
                                    {{ $announ->created_at }}
                                </div>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#ann{{ $announ->id }}">
                                    View
                                </button>
                            </li>
                            <!-- Button trigger modal -->
                            <!-- Modal -->
                            <div class="modal fade" id="ann{{ $announ->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content text-center">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ $announ->title }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <img src="/storage/{{ $announ->image }}" class="img-fluid" />

                                            <a href="" class="btn btn-primary mt-3">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </ol>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <!-- <h6 class="text-body text-uppercase mb-2"></h6> -->
                        <h1 class="display-6 mb-0">{{ __('home.shareprice') }}
                        </h1>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="border-start border-5 border-primary ps-4 mb-5">
                                <!-- <h6 class="text-body text-uppercase mb-2"></h6> -->
                                <h1 class="display-6 mb-0">{{ __('home.shareprice') }}
                                </h1>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5>PT. SUMBER GLOBAL ENERGY Tbk (SGER)</h5>
                                    <h4>Rp.{{ $data }} @if ($tanda === '-')
                                            <i class="fa fa-caret-down text-danger" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-caret-up text-primary" aria-hidden="true"></i>
                                        @endif {{ $cal }} </h4>
                                    <small>{{ $up }} <a href="/share-price" target="_blank">Detail</a></small>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h5>PT. SUMBER GLOBAL ENERGY Tbk (SGER)</h5>
                                        <h4>Rp.{{ $data }} @if ($tanda === '-')
                                                <i class="fa fa-caret-down text-danger" aria-hidden="true"></i>
                                            @else
                                                <i class="fa fa-caret-up text-primary" aria-hidden="true"></i>
                                            @endif {{ $cal }} </h4>
                                        <small>{{ $up }} <a href="/share-price"
                                                target="_blank">Detail</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features End -->
                <!-- Service Start -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="border-start border-5 border-primary ps-4">
                                    <!--<h6 class="text-body text-uppercase mb-2">INVESTOR RELATION</h6>-->
                                    <h1 class="display-6 mb-0">
                                        <!--{{ __('home.financialreport') }}-->
                                        Investor Relations
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 mt-4 justify-content-center">
                            @foreach ($laporans as $laporan)
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="service-item text-center bg-light overflow-hidden h-100">
                                        <img src="/storage/{{ $laporan->image }}" class="img-fluid" />

                                        <div class="service-text position-relative text-center h-100 p-4">
                                            <h5 class="mb-3">{{ $laporan->title }}</h5>
                                            <!-- <p>
                                                                                                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                                                                                                amet diam et eos
                                                                                                              </p> -->
                                            <a class="small" href="/storage/{{ $laporan->pdf }}"
                                                target="_blank">DOWNLOAD<i class="fa fa-arrow-right ms-3"></i></a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="container-fluid my-5 py-5 wow fadeIn" data-wow-delay="0.1s"
                    style="background: linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)), url(/img/sge-banner.png) center center no-repeat;background-size: cover; visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                    <div class="container text-center py-5">
                        <h1 class="display-4 text-white  slideInDown mb-4">{{ __('home.vision') }}</h1>
                        <p class="text-white">We have a vision to be a leading domestic coal trading from the first-class
                            producers and
                            ensure long term sufficiency of supply for our various customers, with excellent performance and
                            first-class
                            standards serving both international and domestic coal market. In order to achieve it we have
                            commitment to
                            provide customer satisfaction and strengthen the capital sources by hard work and strong team
                            network.
                        </p>
                    </div>
                </div>

                <!-- Appointment Start -->
                <!-- Appointment End -->
                <!-- BLOG Start -->
                <!-- Service Start -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-5 align-items-end mb-5">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="border-start border-5 border-primary ps-4">
                                    <h6 class="text-body text-uppercase mb-2">BLOGS</h6>
                                    <h1 class="display-6 mb-0">
                                        {{ __('home.newsupdate') }}
                                    </h1>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
                                                                                                          <a class="btn btn-primary py-3 px-5" href="">More Services</a>
                                                                                                        </div> -->
                        </div>
                        <div class="row g-4 justify-content-center">
                            @foreach ($postpublish as $post)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="service-item bg-light overflow-hidden h-100">
                                        @foreach ($post->images as $image)
                                            @if ($loop->first)
                                                <img class="img-fluid" src="/storage/{{ $image->path }}"
                                                    alt="" />
                                            @endif
                                        @endforeach
                                        <div class="service-text position-relative text-center h-100 p-4">
                                            <h5 class="mb-3">{{ $post->title }}</h5>
                                            <p>
                                                {{ $post->category->name }}
                                            </p>
                                            <a class="small" href="/media/{{ $post->slug }}">READ MORE<i
                                                    class="fa fa-arrow-right ms-3"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Service End -->
                <!-- BLOG END -->
                <div class="container-fluid appointment py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="container py-5">
                        <div class="row g-5">
                            <div class="col-lg-9 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border-start border-5 border-primary ps-4 mb-5">
                                    <h6 class="text-white text-uppercase mb-2">BUSINESS ACTIVITIES</h6>
                                    <h1 class="display-6 text-white mb-0">
                                        Large Trade in Solid, Liquid, Gas, Renewable Energy and Rare Earth Metals and
                                        Minerals Mining in
                                        Subsidiaries
                                    </h1>
                                </div>
                                <!-- <p class="text-white mb-0">
                                                                                                            Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                                                                                            diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                                                                                            lorem sit clita duo justo magna dolore erat amet
                                                                                                          </p> -->
                            </div>
                            <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                                <!-- <form>
                                                                                                            <div class="row g-3">
                                                                                                              <div class="col-sm-6">
                                                                                                                <div class="form-floating">
                                                                                                                  <input
                                                                                                                    type="text"
                                                                                                                    class="form-control bg-dark border-0"
                                                                                                                    id="gname"
                                                                                                                    placeholder="Gurdian Name"
                                                                                                                  />
                                                                                                                  <label for="gname">Your Name</label>
                                                                                                                </div>
                                                                                                              </div>
                                                                                                              <div class="col-sm-6">
                                                                                                                <div class="form-floating">
                                                                                                                  <input
                                                                                                                    type="email"
                                                                                                                    class="form-control bg-dark border-0"
                                                                                                                    id="gmail"
                                                                                                                    placeholder="Gurdian Email"
                                                                                                                  />
                                                                                                                  <label for="gmail">Your Email</label>
                                                                                                                </div>
                                                                                                              </div>
                                                                                                              <div class="col-sm-6">
                                                                                                                <div class="form-floating">
                                                                                                                  <input
                                                                                                                    type="text"
                                                                                                                    class="form-control bg-dark border-0"
                                                                                                                    id="cname"
                                                                                                                    placeholder="Child Name"
                                                                                                                  />
                                                                                                                  <label for="cname">Your Mobile</label>
                                                                                                                </div>
                                                                                                              </div>
                                                                                                              <div class="col-sm-6">
                                                                                                                <div class="form-floating">
                                                                                                                  <input
                                                                                                                    type="text"
                                                                                                                    class="form-control bg-dark border-0"
                                                                                                                    id="cage"
                                                                                                                    placeholder="Child Age"
                                                                                                                  />
                                                                                                                  <label for="cage">Service Type</label>
                                                                                                                </div>
                                                                                                              </div>
                                                                                                              <div class="col-12">
                                                                                                                <div class="form-floating">
                                                                                                                  <textarea class="form-control bg-dark border-0" placeholder="Leave a message here" id="message"
                                                                                                                      style="height: 100px"></textarea>
                                                                                                                  <label for="message">Message</label>
                                                                                                                </div>
                                                                                                              </div>
                                                                                                              <div class="col-12">
                                                                                                                <button class="btn btn-primary w-100 py-3" type="submit">
                                                                                                                  Get Appointment
                                                                                                                </button>
                                                                                                              </div>
                                                                                                            </div>
                                                                                                          </form> -->
                            </div>
                            <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s"></div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Start -->
                <!-- <div class="container-xxl py-5">
                                                                                                    <div class="container">
                                                                                                      <div class="row g-5">
                                                                                                        <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                                                                                                          <div class="border-start border-5 border-primary ps-4 mb-5">
                                                                                                            <h6 class="text-body text-uppercase mb-2">Testimonial</h6>
                                                                                                            <h1 class="display-6 mb-0">What Our Happy Clients Say!</h1>
                                                                                                          </div>
                                                                                                          <p class="mb-4">
                                                                                                            Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                                                                                                            ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                                                                                            dolore erat amet
                                                                                                          </p>
                                                                                                          <div class="row g-4">
                                                                                                            <div class="col-sm-6">
                                                                                                              <div class="d-flex align-items-center mb-2">
                                                                                                                <i class="fa fa-users fa-2x text-primary flex-shrink-0"></i>
                                                                                                                <h1 class="ms-3 mb-0">123+</h1>
                                                                                                              </div>
                                                                                                              <h5 class="mb-0">Happy Clients</h5>
                                                                                                            </div>
                                                                                                            <div class="col-sm-6">
                                                                                                              <div class="d-flex align-items-center mb-2">
                                                                                                                <i class="fa fa-check fa-2x text-primary flex-shrink-0"></i>
                                                                                                                <h1 class="ms-3 mb-0">123+</h1>
                                                                                                              </div>
                                                                                                              <h5 class="mb-0">Projects Done</h5>
                                                                                                            </div>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                                                                                                          <div class="owl-carousel testimonial-carousel">
                                                                                                            <div class="testimonial-item">
                                                                                                              <img
                                                                                                                class="img-fluid mb-4"
                                                                                                                src="img/testimonial-1.jpg"
                                                                                                                alt=""
                                                                                                              />
                                                                                                              <p class="fs-5">
                                                                                                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                                                                                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                                                                                                et labore et tempor diam tempor erat.
                                                                                                              </p>
                                                                                                              <div
                                                                                                                class="bg-primary mb-3"
                                                                                                                style="width: 60px; height: 5px"
                                                                                                              ></div>
                                                                                                              <h5>Client Name</h5>
                                                                                                              <span>Profession</span>
                                                                                                            </div>
                                                                                                            <div class="testimonial-item">
                                                                                                              <img
                                                                                                                class="img-fluid mb-4"
                                                                                                                src="img/testimonial-2.jpg"
                                                                                                                alt=""
                                                                                                              />
                                                                                                              <p class="fs-5">
                                                                                                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                                                                                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                                                                                                et labore et tempor diam tempor erat.
                                                                                                              </p>
                                                                                                              <div
                                                                                                                class="bg-primary mb-3"
                                                                                                                style="width: 60px; height: 5px"
                                                                                                              ></div>
                                                                                                              <h5>Client Name</h5>
                                                                                                              <span>Profession</span>
                                                                                                            </div>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  </div> -->
                <!-- Testimonial End -->
            </div>
            <!-- Modal -->
            @if (empty($modal->id))
            @else
                <div class="modal fade" id="modal{{ $modal->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ __('home.announcement') }}
                                    <small>{{ $modal->date_gmt }}</small>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <img src="/storage/{{ $modal->image }}" class="card-img-top">

                                <p class="text-center">
                                    {{ $modal->content }}
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endsection
