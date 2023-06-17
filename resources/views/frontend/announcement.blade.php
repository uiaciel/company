@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="container">


            <div class="row g-5">
                <div class="col-lg-8 col-md-12">

                    <div class="border-start border-5 border-primary ps-4 mb-3">

                        <h1 class="display-6 mb-0">{{ $announ->title }}
                        </h1>
                    </div>

                    <div class="mb-3 flex-sm-row flex-md-row d-lg-flex justify-content-lg-between">
                        <div class="flex-grow-1">
                            <span>by: <a href="#">SGE</a> /
                                {{ \Carbon\Carbon::parse($announ->date_gmt)->toDayDateTimeString() }} -
                                {{ \Carbon\Carbon::parse($announ->date_gmt)->diffForHumans() }}</span>
                        </div>
                        <div>
                            <a class="btn btn-sm btn-social btn-primary" href="{{ url('storage/' . $announ->pdf) }}"
                                target="_blank" title="Share this post on Facebook">
                                <i class="fas fa-file-pdf"></i> Download
                            </a>


                        </div>



                    </div>
                    <img src="{{ url('storage/' . $announ->image) }}" class="mb-3 img-fluid">

                    <p>{!! $announ->content !!}</p>

                    <div class="row mb-3">

                        <div class="col-md-4">
                            {{-- <img src="/storage/{{ $posts->image->path }}" class="img-fluid"> --}}
                        </div>
                        <div class="col-md-8">

                        </div>
                    </div>


                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title">CONTACT US</h4>
                            <p class="card-text">
                                Please find below contact details
                                and contact us today! Our experts always ready to help you.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Phone : (+62) 2500120</li>
                            <li class="list-group-item">info@sumberglobalenergy.co.id</li>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Kategori</h4>
                            {{-- <p class="card-text">
                        Please find below contact details
                        and contact us today! Our experts always ready to help you.</p> --}}
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($category as $kategori)
                                <li class="list-group-item"><a
                                        href="/category/{{ $kategori->slug }}">{{ $kategori->name }}</a></li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
