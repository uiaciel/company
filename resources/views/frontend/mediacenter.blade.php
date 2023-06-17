@extends('layouts.app')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-md-8">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h1 class="display-6 mb-0">Media Center</h1>
                    </div>
                    @foreach ($blogs as $posts)
                        <div class="row mb-3">
                            <div class="col-md-4">
                                @if ($posts->image)
                                    <img class="img-fluid" src="/storage/{{ $posts->image->path }}" alt="" />
                                @else
                                    <img class="img-fluid"
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                                        alt="" />
                                @endif

                            </div>
                            <div class="col-md-8">
                                <h4><a href="/media/{{ $posts->slug }}">{{ $posts->title }}</a></h4>
                                <p>{!! $posts->excerpt !!}</p>
                                <span>by: <a href="#">SGE</a> /
                                    {{ \Carbon\Carbon::parse($posts->date)->toDayDateTimeString() }}</span>
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
