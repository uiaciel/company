@extends('frontend.app')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <h3>Announcement</h3>
            <div class="row">
                <div class="col-md-8">
                    {{ $announ->title }}
                    File pdf Embed

                </div>
                <div class="col-md-4">
                    <img src="/storage/{{ $announ->image }}" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
@endsection
