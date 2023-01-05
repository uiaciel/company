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
                                        class="form-control @error('title') is-invalid @enderror" placeholder=""
                                        aria-describedby="helpId" value="{{ $page->title }}">
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
                                @if ($page->type === 'Page')
                                @else
                                    <div class="form-group mb-3">
                                        <label class="form-label fw-2 fw-bold">Image Features</label>
                                        <input type="file" class="form-control @error('images') is-invalid @enderror"
                                            name="images[]" id="images" multiple>
                                        <!-- error message untuk title -->
                                        @error('images')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        @foreach ($page->images as $image)
                                            @if ($loop->first)
                                                <img id="imgPreview" src="/storage/{{ $image->path }}" class="img-fluid">
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
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

                                @if (empty($page->category))
                                @else
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-bold">Category</label>
                                        <select class="form-control  @error('id_category') is-invalid @enderror"
                                            name="id_category">
                                            @if (empty($page->id_category))
                                                <option value=""></option>
                                            @else
                                                <option value="{{ $page->category->id }}">{{ $page->category->name }}
                                                </option>
                                            @endif
                                            @foreach ($category as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif

                                @if ($page->type === 'Report')
                                    <div class="mb-3">
                                        <label class="form-label fw-2 fw-bold">PDF</label>
                                        <input type="file" class="form-control @error('files') is-invalid @enderror"
                                            name="files[]" id="files" multiple>
                                        <!-- error message untuk title -->
                                        @error('files')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                @endif


                                @error('id_category')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                                @if ($page->type === 'Page')
                                    <select class="form-control @error('type') is-invalid @enderror" name="type" hidden>
                                        <option value="Page">Page</option>
                                    </select>
                                @else
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-bold">TYPE</label>
                                        <select class="form-control @error('type') is-invalid @enderror" name="type">
                                            <option value="{{ $page->type }}">{{ $page->type }}</option>
                                            <option value="Blog">Blog</option>
                                            <option value="Page">Page</option>
                                            <option value="Announs">Announs</option>
                                        </select>
                                    </div>
                                @endif

                                @error('type')
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
