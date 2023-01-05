@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid p-0">
        @auth
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-2 mb-xl-3">
                    <div class="col-auto d-none d-sm-block">
                        <h3><strong>Edit {{ __('admincp.posts') }}</strong> </h3>
                    </div>
                    <div class="col-auto ms-auto text-end mt-n1">
                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>

                        <a href="{{ route('showpost', [$post->lang, $post->slug]) }}" class="btn btn-md btn-warning">View
                            Posts</a>

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
                                        aria-describedby="helpId" value="{{ $post->title }}">
                                    <small id="helpId" class="text-muted">URL :
                                        https://sumberglobalenergy.co.id/{{ $post->lang }}/{{ $post->slug }}</small>
                                </div>
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror


                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Konten</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="10" id="tinymce">{{ $post->content }}</textarea>
                                </div>
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Excerpt</label>
                                    <textarea class="form-control @error('excerpt') is-invalid @enderror tinymce" name="excerpt" rows="4">{{ $post->excerpt }}</textarea>
                                </div>
                                @error('excerpt')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <label for="" class="form-label fw-bold">Layout Option</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="custom-control custom-radio image-checkbox">
                                            <input type="radio" class="custom-control-input" id="ck2a" name="ck2">
                                            <label class="custom-control-label" for="ck2a">
                                                <img src="/img/full-side.gif" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="custom-control custom-radio image-checkbox">
                                            <input type="radio" class="custom-control-input" id="ck2b" name="ck2">
                                            <label class="custom-control-label" for="ck2b">
                                                <img src="/img/page-side.gif" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="custom-control custom-radio image-checkbox">
                                            <input type="radio" class="custom-control-input" id="ck2c" name="ck2">
                                            <label class="custom-control-label" for="ck2c">
                                                <img src="/img/article-side.gif" alt="#" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>

                                </div>

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
                                        <option value="{{ $post->status }}">{{ $post->status }}</option>
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
                                    <input type="date" class="form-control @error('gmt_date') is-invalid @enderror"
                                        value="{{ $post->date_gmt }}" name="date_gmt" aria-describedby="helpId" placeholder="">

                                </div>
                                @error('date_gmt')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                    @foreach ($post->images as $image)
                                        @if ($loop->first)
                                            <img id="imgPreview" src="/storage/{{ $image->path }}" class="img-fluid">
                                        @endif
                                    @endforeach
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Language</label>
                                    <select class="form-control @error('lang') is-invalid @enderror" name="lang">
                                        <option value="{{ $post->lang }}">
                                            @if ($post->lang == 'en')
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

                                @if (empty($post->category))
                                @else
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-bold">Category</label>
                                        <select class="form-control  @error('id_category') is-invalid @enderror"
                                            name="id_category">
                                            @if (empty($post->id_category))
                                                <option value=""></option>
                                            @else
                                                <option value="{{ $post->category->id }}">{{ $post->category->name }}
                                                </option>
                                            @endif
                                            @foreach ($category as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif

                                {{-- @if ($post->type === 'Report')
                                <div class="mb-3">
                                    <label class="form-label fw-2 fw-bold">PDF</label>
                                    <input type="file" class="form-control @error('files') is-invalid @enderror"
                                        name="files[]" id="files" multiple>

                                    @error('files')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endif --}}


                                @error('id_category')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">TYPE</label>
                                    <select class="form-control @error('type') is-invalid @enderror" name="type">
                                        <option value="{{ $post->type }}">{{ $post->type }}</option>
                                        <option value="Blog">Blog</option>
                                        <option value="Page">Page</option>
                                        <option value="Announs">Announs</option>
                                    </select>
                                </div>

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
