@extends('frontend.app')
@section('content')
    <section class="bg-page-header">
        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="page-header">
                        <div class="page-title">
                            <h1 class="display-4 text-white  slideInDown mb-4">Contact Us</h1>
                        </div>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item">
                                    <a class="text-white" href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <a class="text-white" href="#">Contact Us</a>
                                </li>

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!--<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">-->
                <!--  <div class="row g-4 align-items-center">-->
                <!--    <div class="col-sm-6">-->
                <!--      <img class="img-fluid" src="img/team-1.jpg" alt="">-->
                <!--    </div>-->
                <!--    <div class="col-sm-6">-->
                <!--      <h3 class="mb-0">Full Name</h3>-->
                <!--      <p>Head of Sales</p>-->
                <!--      <h6>Contact Details</h6>-->
                <!--      <p>-->
                <!--        Lorem ipsum dolor sit amet conse elit sed eiu smod lab ore.-->
                <!--      </p>-->
                <!--<p class="mb-0">Call: +012 345 6789</p>-->
                <!--      <p class="mb-0">Email: info@sumberglobalenergy.com</p>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">-->
                <!--  <div class="row g-4 align-items-center">-->
                <!--    <div class="col-sm-6">-->
                <!--      <img class="img-fluid" src="img/team-2.jpg" alt="">-->
                <!--    </div>-->
                <!--    <div class="col-sm-6">-->
                <!--      <h3 class="mb-0">Full Name</h3>-->
                <!--      <p>Head of Marketing</p>-->
                <!--      <h6>Contact Details</h6>-->
                <!--      <p>-->
                <!--        Lorem ipsum dolor sit amet conse elit sed eiu smod lab ore.-->
                <!--      </p>-->
                <!--      <p class="mb-0">Call: +012 345 6789</p>-->
                <!--      <p class="mb-0">Email: sales@example.com</p>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="min-height: 450px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="position-relative h-100">
                        <img src="/batubara-tank.jpeg" class="img-fluid mb-4" />
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h6 class="text-body text-uppercase mb-2">Email Us</h6>
                            <h4 class="mb-0">
                                info@sumberglobalenergy.com
                            </h4>
                            <h4 class="mb-0">
                                corsec@sumberglobalenergy.com
                            </h4><br />
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Contact Us</h6>
                        <h1 class="display-6 mb-0">
                            Contact Our Support and Sales Team
                        </h1>
                    </div>
                    <p class="mb-4">
                        Our team is happy to answer your sales questions. Fill out the form and we'll be in touch as soon as
                        possible.
                    </p>
                    <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <input type="date" id="date" class="form-control date" name="date_gmt" hidden>
                            <input type="text" class="form-control" name="status" value="Send" hidden>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" name="name"
                                        id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light" name="email"
                                        id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" name="subject"
                                        id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-light" name="message" placeholder="Leave a message here" id="message"
                                        style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">
                                    Send Message
                                </button>
                            </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>


    </div>
@endsection
