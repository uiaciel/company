@extends('layouts.app')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-md-8">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h1 class="display-6 mb-0">Public Offering Prospectus</h1>
                    </div>
                    @foreach ($publicoffering as $posts)
                        <div class="row mb-3">
                            <div class="card col-md-4">
                                <img src="{{ $posts->image }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $posts->title }}</h5>
                                    <p class="card-text">Date Post : {{ $posts->date }}</p>
                                    <a href="{{ $posts->path }}" class="btn btn-primary">Download</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card primary">
                        <div class="card-body">
                            <h4 class="card-title">CONTACT US</h4>
                            <p class="card-text">
                                Please find below contact details
                                and contact us today! Our experts always ready to help you.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Phone : (+6221) 2500120</li>
                            <li class="list-group-item">info@sumberglobalenergy.co.id</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
