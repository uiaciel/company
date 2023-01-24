@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid p-0">
        @auth
            <form action="{{ route('pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-2 mb-xl-3">
                    <div class="col-auto d-none d-sm-block">
                        <h3>Edit <strong>{{ __('admincp.page') }}</strong> </h3>
                    </div>
                    <div class="col-auto ms-auto text-end mt-n1">
                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <a href="{{ route('showpost', [$page->lang, $page->slug]) }}" class="btn btn-md btn-warning">View</a>

                    </div>
                </div>
                <div class="row mb-2 mb-xl-3">
                    <div class="col-xl-8">
                        <div class="card border-0 shadow rounded">

                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Judul</label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" aria-describedby="helpId"
                                        value="{{ $page->title }}">
                                    <small id="helpId" class="text-muted">URL :
                                        https://sumberglobalenergy.co.id/{{ $page->lang }}/{{ $page->slug }}</small>
                                </div>
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Konten</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="10" id="tinymce">{{ $page->content }}</textarea>
                                </div>
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card border-0 shadow rounded">
                            <div class="card-header bg-dark text-white">
                                SETTING
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">STATUS</label>
                                    <select class="form-control @error('status') is-invalid @enderror" name="status">
                                        <option value="{{ $page->status }}">{{ $page->status }}</option>
                                        <option value="draf">Draf</option>
                                        <option value="publish">Publish</option>
                                    </select>
                                </div>
                                @error('status')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Date</label>
                                    <input type="date" class="form-control date @error('gmt_date') is-invalid @enderror"
                                        value="{{ $page->date_gmt }}" name="date_gmt" aria-describedby="helpId" placeholder="">

                                </div>
                                @error('date_gmt')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Language</label>
                                    <select class="form-control @error('lang') is-invalid @enderror" name="lang">
                                        <option value="{{ $page->lang }}">
                                            @if ($page->lang == 'en')
                                                English
                                            @else
                                                Indonesia
                                            @endif
                                        </option>
                                        <option value="en">English</option>
                                        <option value="id">Indonesia</option>
                                    </select>
                                </div>
                                @error('lang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Category</label>
                                    <select class="form-control @error('status') is-invalid @enderror" name="id_menu">
                                        @foreach ($menus as $menu)
                                            @if ($loop->first)
                                                @continue
                                            @endif
                                            <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                                        @endforeach

                                    </select>
                                </div>


                                @error('id_menu')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror





                            </div>
                        </div>
                    </div>
            </form>
        @endauth
    </div>
    </div>
@endsection
