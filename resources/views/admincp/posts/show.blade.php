@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-xl-8">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h3>{{ $post->title_id }}</h3>
                        {{ $post->content_id }}
                        @forelse  ($post->images as $image)
                            <img src="/storage/{{ $image->path }}" class="img-fluid">
                        @empty
                            <h3>image not found</h3>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
