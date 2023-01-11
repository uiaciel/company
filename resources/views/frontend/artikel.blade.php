@extends('frontend.app')
@section('content')
    @if ($post->layout == 'Sidebar')
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-8">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <!-- <h6 class="text-body text-uppercase mb-2"></h6> -->
                            <h1 class="display-6 mb-0">{{ $post->title }}
                            </h1>
                        </div>
                        @foreach ($post->images as $image)
                            @if ($loop->first)
                                <img src="/storage/{{ $image->path }}" class="img-fluid">
                            @endif
                        @endforeach

                        @foreach ($post->docs as $doc)
                            @if ($loop->first)
                                <a href="/storage/{{ $doc->path }}" target="_blank">Download</a>
                            @endif
                        @endforeach

                        <div class="mt-2">
                            {{-- <label>Tanggal Publish: {{$post->date_gmt}}</label> --}}
                            {!! $post->content !!}
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4">
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
    @elseif ($post->layout == 'artikel')
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-8">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <!-- <h6 class="text-body text-uppercase mb-2"></h6> -->
                            <h1 class="display-6 mb-0">{{ $post->title }}
                            </h1>
                        </div>
                        @foreach ($post->images as $image)
                            @if ($loop->first)
                                <img src="/storage/{{ $image->path }}" class="img-fluid">
                            @endif
                        @endforeach

                        @foreach ($post->docs as $doc)
                            @if ($loop->first)
                                <a href="/storage/{{ $doc->path }}" target="_blank">Download</a>
                            @endif
                        @endforeach

                        <div class="mt-2">
                            {{-- <label>Tanggal Publish: {{$post->date_gmt}}</label> --}}
                            {!! $post->content !!}
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4">
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
    @else
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-12 col-lg-12">
                        <div class="border-start border-5 border-primary ps-4 mb-3">
                            <!-- <h6 class="text-body text-uppercase mb-2"></h6> -->
                            <h1 class="display-6 mb-0">{{ $post->title }}
                            </h1>
                        </div>
                        <div>
                            @foreach ($post->images as $image)
                                @if ($loop->first)
                                    <img src="/storage/{{ $image->path }}" class="img-fluid">
                                @endif
                            @endforeach
                        </div>
                        @foreach ($post->docs as $doc)
                            @if ($loop->first)
                                <a href="/storage/{{ $doc->path }}" target="_blank">Download</a>
                            @endif
                        @endforeach

                        <div class="mt-3">
                            {{-- <label>Tanggal Publish: {{$post->date_gmt}}</label> --}}
                            {!! $post->content !!}
                        </div>

                    </div>

                </div>
            </div>
        </div>
    @endif
@endsection
