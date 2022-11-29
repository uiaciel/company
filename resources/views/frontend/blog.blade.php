@extends('frontend.app')
@section('content')
<div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-8">
            <div class="border-start border-5 border-primary ps-4 mb-5">
                <!-- <h6 class="text-body text-uppercase mb-2"></h6> -->
                <h1 class="display-6 mb-0">Media Center
                </h1>
              </div>
                <h3>{{ $post->title }}</h3>
                
        </div>
        <div class="col-4">
            <div class="card primary">
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
        </div>
      </div>
    </div>
</div>
@endsection
