@extends('layouts.admin')
@section('content')
    <div class="container-fluid p-0">
        @auth
            <form action="{{ route('announs.update', $announ->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mb-2 mb-xl-3">
                    <div class="col-auto d-none d-sm-block">
                        <h3><strong>{{ __('admincp.announ') }}</strong> </h3>
                    </div>
                    <div class="col-auto ms-auto text-end mt-n1">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#filepdf">
                            View PDF
                        </button>
                        <button type="submit" class="btn btn-md btn-primary">{{ __('admincp.publish') }}</button>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">{{ __('admincp.title') }}</label>
                                    <input type="text" name="title" value="{{ $announ->title }}"
                                        class="form-control @error('title') is-invalid @enderror">
                                    @error('title')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">{{ __('admincp.content') }}</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="tinymce" rows="10">{{ $announ->content }}</textarea>
                                </div>
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror







                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-dark text-white"> File PDF

                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <h4>File Uploaded</h4>
                                    <ul>
                                        <li><a href="/storage/{{ $announ->pdf }}">{{ $announ->pdf }}</a> </li>
                                    </ul>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-2 fw-bold">PDF</label>
                                    <input type="file" class="form-control @error('files') is-invalid @enderror"
                                        name="pdf" id="files" multiple>
                                    <!-- error message untuk title -->
                                    @error('files')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label fw-2 fw-bold">Cover {{ __('admincp.image') }}</label>
                                    <input type="file" class="form-control @error('images') is-invalid @enderror"
                                        name="image" id="images" multiple>
                                    @error('images')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <img id="imgPreview" src="/storage/{{ $announ->image }}" alt="preview image"
                                        class="img-fluid">
                                </div>


                                <div class="mb-3" hidden>
                                    <label for="" class="form-label">{{ __('admincp.status') }}</label>
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
                            </div>
                        </div>
                    </div>
                </div>




            </form>
        </div>
    @endauth

    <!-- Modal -->
    <div class="modal fade" id="filepdf" tabindex="-1" aria-labelledby="filepdf" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="filepdf">File PDF</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <embed src="/storage/{{ $announ->pdf }}" frameborder="0" width="100%" height="600px">

                </div>
                <div class="modal-footer">
                    {{-- <form action="{{ route('announs.removepdf', $announ->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input value="{{ $announ->title }}" name="title" hidden>
                        <input value="{{ $announ->content }}" name="content" hidden>
                        <input value="{{ $announ->image }}" name="image" hidden>
                        <input value="{{ $announ->date_gmt }}" name="date_gmt" hidden>
                        <input value=" " name="pdf" hidden>
                        <input value="{{ $announ->status }}" name="status" hidden>

                        <button type="submit" class="btn btn-primary">Delete Pdf</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('date').valueAsDate = new Date();
    </script>
@endsection
