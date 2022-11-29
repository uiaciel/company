<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-2 mb-xl-3">
                    <div class="col-auto d-none d-sm-block">
                        <h3><strong>POST {{ __('admincp.posts') }}</strong> </h3>
                    </div>
                    <div class="col-auto ms-auto text-end mt-n1">
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                ADD POST
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class="form-label">Judul</label>
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
                                    <label for="" class="form-label">Konten</label>
                                    <textarea class="form-control tinymce @error('content') is-invalid @enderror" name="content" rows="10"></textarea>
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
                                <div class="form-group mb-3">
                                    <label class="form-label fw-2">Gambar</label>
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
                                    <img id="imgPreview" src="" alt="preview image" class="img-fluid">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">KATEGORI</label>
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
                                    <label for="" class="form-label">Language</label>
                                    <select class="form-control @error('lang') is-invalid @enderror" name="lang">
                                        <option value="en">English</option>
                                        <option value="id">Indonesia</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">TANGGAL</label>
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
                                    <label for="" class="form-label">Tipe</label>
                                    <select class="form-control @error('type') is-invalid @enderror" name="type">
                                        <option value="Blog">Blog</option>
                                    </select>
                                </div>
                                @error('type')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="mb-3">
                                    <label for="" class="form-label">STATUS</label>
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
        
        <script src="https://cdn.tiny.cloud/1/nnd7pakaxqr7isf3oqefsdlew1jsidgl78umfeus6tg21ng0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
        
        
        
        tinymce.init({
            selector: 'textarea.tinymce',

            image_class_list: [
            {title: 'img-responsive', value: 'img-responsive'},
            ],
            height: 500,
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
            },
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

            image_title: true,
            automatic_uploads: true,
        
            images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '{{ route('upload') }}');
            var token = '{{ csrf_token() }}';
            xhr.setRequestHeader("X-CSRF-Token", token);
            xhr.onload = function() {
                var json;
                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                success(json.location);
            };
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            xhr.send(formData);
        },
            
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            }
        });
</script>
    </body>
</html>
