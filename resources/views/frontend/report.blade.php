@extends('layouts.app')
@section('content')
    <section class="bg-page-header  wow fadeIn" data-wow-delay="0.1s">
        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="page-header">
                        <div class="page-title">
                            <h1 class="display-4 text-white  slideInDown mb-4">Reports</h1>
                        </div>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item">
                                    <a class="text-white" href="#">{{ __('home.home') }}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a class="text-white" href="#">{{ __('home.investorrelation') }}</a>
                                </li>
                                <li class="breadcrumb-item text-white active" aria-current="page">
                                    Reports
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="container mt-5">
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="border-start border-5 border-primary ps-4 mb-5">
                <!-- <h6 class="text-body text-uppercase mb-2"></h6> -->
                <h1 class="display-6 mb-0">Annual Reports
                </h1>
            </div>

        </div>

        <div class="row">
            @foreach ($annuals->take(2) as $index => $annual)
                <div class="col-3">
                    <div class="card mb-3">
                        <img src="/storage/{{ $annual->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center fs-6 fw-bold">
                                <p class="card-text mb-0">{{ $annual->title }}</p>
                                <a href="/storage/" target="_blank"><i class="fa fa-arrow-right ms-3"></i></a>
                            </div>

                        </div>
                    </div>

                </div>
            @endforeach
            {{-- <div class="col-3">
                <div class="card mb-3">
                    <img src="https://sumberglobalenergy.co.id/storage/images/1683859602-Annual-report-03052023-sger.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center fs-6 fw-bold">
                            <p class="card-text mb-0">Annual Report 2022</p>
                            <a href="/storage/" target="_blank"><i class="fa fa-arrow-right ms-3"></i></a>
                        </div>

                    </div>
                </div>

            </div> --}}
            <div class="col-6">
                <ul class="list-group">
                    @foreach ($annuals->slice(2) as $index => $annualx)
                        <li
                            class="list-group-item list-group-item-action bg-waring d-flex justify-content-between align-items-center">
                            <h5><i class="fas fa-file-pdf me-2"></i> {{ $annualx->title }}</h5>
                            <a href="/" data-bs-toggle="modal" data-bs-target="#exampleModal">Download</a>
                        </li>



                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog        ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Download</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="/storage/{{ $annualx->image }}" class="img-fluid">

                                            </div>
                                            <div class="col-md-8">
                                                <table class="table">

                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">File Name : </th>
                                                            <td>{{ $annualx->title }}</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Type File</th>
                                                            <td>PDF</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Date Publish :</th>
                                                            <td>{{ $annualx->date_gmt }}</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Downloaded :</th>
                                                            <td>100x</td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-primary" type="button">Download</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach


                </ul>

            </div>

        </div>

    </div>


    <div class="container-xxl py-5">
        <!-- Service End -->
        <div class="container">

            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                    <!-- <h6 class="text-body text-uppercase mb-2"></h6> -->
                    <h1 class="display-6 mb-0">Financial Reports
                    </h1>
                </div>

            </div>
            <ul class="list-group">

                @foreach ($laps->where('category', 'Financial Report') as $index => $financial)
                    <li
                        class="list-group-item list-group-item-action bg-waring d-flex justify-content-between align-items-center">
                        <h5><i class="fas fa-file-pdf me-2"></i> {{ $financial->title }}</h5>
                        <a href="/" class="">Download</a>
                    </li>
                @endforeach
            </ul>
            <div class="mt-5">
                <div class="ir_textDivider reset"></div>
                <p class="ir_textFootnote si_fixed">
                    <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank" title="Get Adobe Reader">
                        <img src="/images/icon_getAdobeReader.gif" class="ir_left" alt="Get Adobe Reader">
                    </a>
                    <strong>Note:</strong> Files are in Adobe (PDF) format.<br>Please download the free <a
                        href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank">Adobe Acrobat
                        Reader</a>
                    to view these documents.
                </p>
            </div>
        </div>
    </div>
@endsection
