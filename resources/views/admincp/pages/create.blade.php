@extends('layouts.admin')
@section('content')
    <div class="container-fluid p-0">
        @auth
            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-2 mb-xl-3">
                    <div class="col-auto d-none d-sm-block">
                        <h3>Add New <strong>{{ __('admincp.page') }}</strong> </h3>
                    </div>
                    <div class="col-auto ms-auto text-end mt-n1">
                        <button type="submit" class="btn btn-md btn-primary">{{ __('admincp.publish') }}</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        {{-- <a href="{{ route('category.create') }}"
                    class="btn btn-light bg-white me-2">{{ __('admincp.addcategory') }}</a>
                <a href="{{ route('posts.index') }}" class="btn btn-primary">Daftar Post</a> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">

                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">{{ __('admincp.title') }}</label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror">
                                    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    @error('title')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">{{ __('admincp.content') }}</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" id="tinymce" name="content" rows="10"></textarea>
                                    <input name="excerpt" value="" hidden>
                                </div>
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                SETTING
                            </div>
                            <div class="card-body">

                                <div class="mb-3" hidden>
                                    <label for="" class="form-label fw-bold">{{ __('admincp.status') }}</label>
                                    <select class="form-control @error('status') is-invalid @enderror" name="status">

                                        <option value="publish">Publish</option>
                                        <option value="draf">Draf</option>
                                    </select>
                                </div>
                                @error('status')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">{{ __('admincp.date') }}</label>
                                    <input type="date" id="date"
                                        class="form-control date @error('date') is-invalid @enderror" name="date"
                                        aria-describedby="helpId" placeholder="">
                                    {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                                </div>
                                @error('date')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">{{ __('admincp.language') }}</label>
                                    <select class="form-control @error('lang') is-invalid @enderror" name="lang">
                                        <option value="en">English</option>
                                        <option value="id">Indonesia</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Add to Menu</label>
                                    <select class="form-control @error('menu_id') is-invalid @enderror" name="menu_id">
                                        @foreach ($menus as $menu)
                                            <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endauth
    </div>
    </div>
@endsection
