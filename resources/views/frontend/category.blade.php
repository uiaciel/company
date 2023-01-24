@extends('frontend.app')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-8">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h1 class="display-6 mb-0">{{ $cat->name }}</h1>
                    </div>
                    @foreach ($cat->posts as $posts)
                        <div class="row">
                            <div class="col-md-4">
                                @foreach ($posts->images as $image)
                                    @if ($loop->first)
                                        <img src="/storage/{{ $image->path }}" class="img-fluid">
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-md-8">
                                <h4><a href="/media/{{ $posts->slug }}">{{ $posts->title }}</a></h4>
                                <p>{!! $posts->excerpt !!}</p>
                                <p>Date Post : {{ $posts->date_gmt }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-4">
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
