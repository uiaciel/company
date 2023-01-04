@extends('frontend.app')
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
    <div class="container-xxl py-5">
        <!-- Service End -->
        <div class="container">

            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                    <!-- <h6 class="text-body text-uppercase mb-2"></h6> -->
                    <h1 class="display-6 mb-0">Annual Reports
                    </h1>
                </div>

            </div>
            <div class="table-responsive mb-4">
                <table class="table table-bordered text-dark">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>{{ __('home.title') }}</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laps->where('category', 'Annual Report') as $indexs => $laporan)
                            <tr>
                                <td>{{ $indexs + 1 }}</td>
                                <td><i class="fas fa-file-pdf"></i> {{ $laporan->title }}</td>

                                <td><a href="/storage/{{ $laporan->pdf }}" target="_blank" class="btn btn-sm btn-primary"><i
                                            class="fas fa-file-download"></i> Download </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                    <!-- <h6 class="text-body text-uppercase mb-2"></h6> -->
                    <h1 class="display-6 mb-0">Financial Reports
                    </h1>
                </div>

            </div>

            <div class="table-responsive mb-4">
                <table class="table table-bordered text-dark">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>{{ __('home.title') }}</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laps->where('category', 'Financial Report') as $index => $financial)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><i class="fas fa-file-pdf"></i> {{ $financial->title }}</td>

                                <td> <a href="/storage/{{ $financial->pdf }}" target="_blank"
                                        class="btn btn-sm btn-primary"><i class="fas fa-file-download"></i> Download </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-5">
                <div class="ir_textDivider reset"></div>
                <p class="ir_textFootnote si_fixed">
                    <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank" title="Get Adobe Reader">
                        <img src="/images/icon_getAdobeReader.gif" class="ir_left" alt="Get Adobe Reader">
                    </a>
                    <strong>Note:</strong> Files are in Adobe (PDF) format.<br>Please download the free <a
                        href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank">Adobe Acrobat Reader</a>
                    to view these documents.
                </p>
            </div>
        </div>
    </div>
@endsection
