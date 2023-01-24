@extends('frontend.app')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">CAREER</h6>
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
                @foreach ($blogs as $post)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light overflow-hidden h-100">
                            @foreach ($post->images as $image)
                                @if ($loop->first)
                                    <img class="img-fluid" src="/storage/{{ $image->path }}" alt="" />
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
@endsection
