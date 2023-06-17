@extends('layouts.app')
@section('content')
    @if ($post->layout == 'Sidebar')
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-8">
                        <div class="border-start border-5 border-primary ps-4 mb-3">

                            <h1 class="display-6 mb-0">{{ $post->title }}
                            </h1>
                        </div>

                        <div class="mb-3 d-flex  justify-content-between">
                            <div class="flex-grow-1">
                                <span>by: <a href="#">SGE</a> /
                                    {{ \Carbon\Carbon::parse($post->date_gmt)->toDayDateTimeString() }} -
                                    {{ \Carbon\Carbon::parse($post->date_gmt)->diffForHumans() }}</span>
                            </div>
                            <div>
                                <a class="btn btn-sm btn-social btn-fb"
                                    href="https://www.facebook.com/sharer/sharer.php?u={{ env('APP_URL') }}/media/{{ $post->slug }}"
                                    target="_blank" title="Share this post on Facebook">
                                    <i class="fab fa-facebook-square"></i> Share
                                </a>
                                <a class="btn btn-sm btn-social btn-tw"
                                    href="https://twitter.com/intent/tweet?text={{ $post->title }}&amp;url={{ env('APP_URL') }}/media/{{ $post->slug }}"
                                    target="_blank" title="Share this post on Twitter">
                                    <i class="fab fa-twitter"></i> Tweet
                                </a>
                                <a class="btn btn-sm btn-social btn-in"
                                    href="https://www.linkedin.com/shareArticle?mini=true&url={{ env('APP_URL') }}/media/{{ $post->slug }}&amp;title={{ $post->title }}"
                                    target="_blank" title="Share this post on LinkedIn">
                                    <i class="fab fa-linkedin-in" data-fa-transform="grow-2"></i> Share
                                </a>

                            </div>



                        </div>


                        <div class="mt-2">
                            {!! $post->content !!}
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4">
                        <ul class="list-group mb-3">
                            <li class="list-group-item active" aria-current="true">Categories</li>
                            @forelse ($category as $cat)
                                <li class="list-group-item">{{ $cat->name }}</li>
                            @empty
                                <li class="list-group-item disabled">Category Not Found</li>
                            @endforelse

                        </ul>

                        <div class="mb-3">
                            <h3>Artikel Lainnya</h3>
                        </div>

                        @foreach ($others as $other)
                            <div class="card mb-3">
                                <img src="/storage/{{ $other->image->path ?? '' }}" class="card-img-top"
                                    alt="{{ $other->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $other->title }}</h5>

                                    <a href="/media/{{ $other->slug }}" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        @endforeach
                        <div class="card text-bg-dark mb-3">
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
    @elseif ($post->layout == 'Article')
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-8">
                        <div class="border-start border-5 border-primary ps-4 mb-3">

                            <h1 class="display-6 mb-0">{{ $post->title }}
                            </h1>
                        </div>

                        <div class="mb-3 d-flex  justify-content-between">
                            <div class="flex-grow-1">
                                <span>by: <a href="#">SGE</a> /
                                    {{ \Carbon\Carbon::parse($post->date_gmt)->toDayDateTimeString() }} -
                                    {{ \Carbon\Carbon::parse($post->date_gmt)->diffForHumans() }}</span>
                            </div>
                            <div>
                                <a class="btn btn-sm btn-social btn-fb"
                                    href="https://www.facebook.com/sharer/sharer.php?u={{ env('APP_URL') }}/media/{{ $post->slug }}"
                                    target="_blank" title="Share this post on Facebook">
                                    <i class="fab fa-facebook-square"></i> Share
                                </a>
                                <a class="btn btn-sm btn-social btn-tw"
                                    href="https://twitter.com/intent/tweet?text={{ $post->title }}&amp;url={{ env('APP_URL') }}/media/{{ $post->slug }}"
                                    target="_blank" title="Share this post on Twitter">
                                    <i class="fab fa-twitter"></i> Tweet
                                </a>
                                <a class="btn btn-sm btn-social btn-in"
                                    href="https://www.linkedin.com/shareArticle?mini=true&url={{ env('APP_URL') }}/media/{{ $post->slug }}&amp;title={{ $post->title }}"
                                    target="_blank" title="Share this post on LinkedIn">
                                    <i class="fab fa-linkedin-in" data-fa-transform="grow-2"></i> Share
                                </a>

                            </div>



                        </div>

                        <div class="mt-2">
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

                            <h1 class="display-6 mb-0">{{ $post->title }}
                            </h1>
                        </div>

                        <div class="mb-3 d-flex  justify-content-between">
                            <div class="flex-grow-1">
                                <span>by: <a href="#">SGE</a> /
                                    {{ \Carbon\Carbon::parse($post->date_gmt)->toDayDateTimeString() }} -
                                    {{ \Carbon\Carbon::parse($post->date_gmt)->diffForHumans() }}</span>
                            </div>
                            <div>
                                <a class="btn btn-sm btn-social btn-fb"
                                    href="https://www.facebook.com/sharer/sharer.php?u={{ env('APP_URL') }}/media/{{ $post->slug }}"
                                    target="_blank" title="Share this post on Facebook">
                                    <i class="fab fa-facebook-square"></i> Share
                                </a>
                                <a class="btn btn-sm btn-social btn-tw"
                                    href="https://twitter.com/intent/tweet?text={{ $post->title }}&amp;url={{ env('APP_URL') }}/media/{{ $post->slug }}"
                                    target="_blank" title="Share this post on Twitter">
                                    <i class="fab fa-twitter"></i> Tweet
                                </a>
                                <a class="btn btn-sm btn-social btn-in"
                                    href="https://www.linkedin.com/shareArticle?mini=true&url={{ env('APP_URL') }}/media/{{ $post->slug }}&amp;title={{ $post->title }}"
                                    target="_blank" title="Share this post on LinkedIn">
                                    <i class="fab fa-linkedin-in" data-fa-transform="grow-2"></i> Share
                                </a>

                            </div>



                        </div>
                        {{-- <img src="/storage/{{ $post->image->path ?? '' }}" class="img-fluid mb-3"> --}}

                        {{-- @foreach ($post->docs as $doc)
                            @if ($loop->first)
                                <a href="/storage/{{ $doc->path }}" target="_blank">Download</a>
                            @endif
                        @endforeach --}}

                        <div class="mt-2">
                            {{-- <label>Tanggal Publish: {{$post->date_gmt}}</label> --}}
                            {!! $post->content !!}
                        </div>

                        {{-- <div class="mb-3 d-flex justify-content-between">
                            <h5><i class="fas fa-file-pdf"></i> filepdf.pdf</h5>

                            <a href="/storage/aa" class="btn btn-sm btn-primary" target="_blank">Download</a>

                        </div> --}}

                    </div>

                </div>
            </div>
        </div>
    @endif
@endsection
