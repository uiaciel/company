@extends('frontend.app')
@section('content')
<div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        
        <div class="col-md-8">
            <div class="border-start border-5 border-primary ps-4 mb-5">
                <h1 class="display-6 mb-0">Media Center</h1>
            </div>
            @foreach ($blogs as $posts )
            <div class="row">
                <div class="col-md-4">
                    @foreach ($posts->images as $image)
                            @if ($loop->first)
                            <img src="/storage/{{$image->path}}" class="img-fluid"/>
                            @endif
                            @endforeach
                </div>
                <div class="col-md-8">
                    <h4><a href="/{{$posts->lang}}/{{$posts->slug}}">{{$posts->title}}</a></h4>
                        <p>{!! $posts->excerpt !!}</p>
                        <p>Date Post : {{$posts->date_gmt}}</p>
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
