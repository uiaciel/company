@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid p-0">
        @auth
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ __('admincp.report') }}</strong> </h3>
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
                        <div class="card-header bg-dark text-white">
                            {{ __('admincp.add') }} {{ __('admincp.report') }}
                          </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('admincp.title') }}</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                                {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-2">PDF</label>
                                <input type="file" class="form-control @error('files') is-invalid @enderror"
                                    name="files[]" id="files" multiple>
                                <!-- error message untuk title -->
                                @error('files')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('admincp.content') }}</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="10"></textarea>
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
                            {{ __('admincp.setting') }}
                          </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label class="form-label fw-2">{{ __('admincp.image') }}</label>
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
                                <img id="imgPreview"
                                src="" alt="preview image"
                                class="img-fluid">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('admincp.language') }}</label>
                                <select class="form-control @error('lang') is-invalid @enderror" name="lang">
                                    <option value="en">English</option>
                                    <option value="id">Indonesia</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                    <label for="" class="form-label">Kategory</label>
                                    <select class="form-control  @error('id_category') is-invalid @enderror" name="id_category">
                                        
                                        @foreach ($category as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('id_category')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('admincp.date') }}</label>
                                <input type="date" class="form-control @error('gmt_date') is-invalid @enderror"
                                    name="date_gmt" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            @error('date_gmt')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="mb-3" hidden>
                                <label for="" class="form-label">{{ __('admincp.type') }}</label>
                                <select class="form-control @error('type') is-invalid @enderror" name="type">
                                    <option value="Report">Report</option>
                                </select>
                            </div>
                            @error('type')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('admincp.status') }}</label>
                                <select class="form-control @error('status') is-invalid @enderror" name="status">
                                    <option value="draf">Draf</option>
                                    <option value="publish">Publish</option>
                                </select>
                            </div>
                            @error('status')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                </div>
            </form>
        @endauth
    </div>
    </div>
@endsection
