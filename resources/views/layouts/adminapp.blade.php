<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Websytem PT. Sumber Global Energy Tbk</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @vite(['resources/sass/app.scss'])
    <link rel="stylesheet" href="/css/app-light.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://kit.fontawesome.com/1bfbc97117.js" crossorigin="anonymous"></script>
    <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>

<body data-theme="dark" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <div id="app" class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar" data-simplebar="init">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <a class="sidebar-brand" href="/" target="_blank">
                                        <svg class="sidebar-brand-icon align-middle" width="32px" height="32px"
                                            viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5"
                                            stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF"
                                            style="margin-left: -3px">
                                            <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                                            <path d="M20 12L12 16L4 12"></path>
                                            <path d="M20 16L12 20L4 16"></path>
                                        </svg>
                                        <span class="sidebar-brand-text align-middle">
                                            WEBSITE
                                            <sup><small class="badge bg-primary text-uppercase">SGE-v2</small></sup>
                                        </span>
                                    </a>

                                    <ul class="sidebar-nav">
                                        <li class="sidebar-header">
                                            Menus
                                        </li>

                                        <li class="sidebar-item {{ request()->is('admincp/posts*') ? 'active' : '' }}">
                                            <a class="sidebar-link" href="{{ route('posts.index') }}">
                                                <i class="fa-solid fa-pen-nib"></i>
                                                <span class="align-middle">{{ __('admincp.posts') }}</span>
                                                {{-- <span class="sidebar-badge badge bg-primary">Posts</span> --}}
                                            </a>
                                        </li>
                                        <li
                                            class="sidebar-item {{ request()->is('admincp/category*') ? 'active' : '' }}">
                                            <a class="sidebar-link " href="{{ route('category.index') }}">
                                                <i class="fa-solid fa-tags"></i>
                                                <span class="align-middle">{{ __('admincp.category') }}
                                                    {{ __('admincp.posts') }}</span>
                                                {{-- <span class="sidebar-badge badge bg-primary">Category</span> --}}
                                            </a>
                                        </li>
                                        <li class="sidebar-item {{ request()->is('admincp/pages*') ? 'active' : '' }}">
                                            <a class="sidebar-link" href="{{ route('pages.index') }}">
                                                <i class="fa-solid fa-file-lines"></i>
                                                <span class="align-middle">{{ __('admincp.page') }}</span>
                                                {{-- <span class="sidebar-badge badge bg-primary">Pages</span> --}}
                                            </a>
                                        </li>
                                        <li
                                            class="sidebar-item  {{ request()->is('admincp/announs*') ? 'active' : '' }}">
                                            <a class="sidebar-link " href="{{ route('announs.index') }}">
                                                <i class="fa-solid fa-circle-info"></i>
                                                <span class="align-middle">{{ __('admincp.announ') }}</span>
                                            </a>
                                        </li>
                                        <li
                                            class="sidebar-item  {{ request()->is('admincp/reports*') ? 'active' : '' }}">
                                            <a class="sidebar-link" href="{{ route('reports.index') }}">
                                                <i class="fa-solid fa-file-pdf"></i>
                                                <span class="align-middle">{{ __('admincp.report') }}</span>
                                                {{-- <span class="sidebar-badge badge bg-primary">Posts</span> --}}
                                            </a>
                                        </li>
                                        <li
                                            class="sidebar-item  {{ request()->is('admincp/contacts*') ? 'active' : '' }}">
                                            <a class="sidebar-link" href="{{ route('contacts.index') }}">
                                                <i class="fa-solid fa-message"></i>
                                                <span class="align-middle">{{ __('admincp.contact') }}</span>
                                                {{-- <span class="sidebar-badge badge bg-primary">Posts</span> --}}
                                            </a>
                                        </li>

                                        <li class="sidebar-item {{ request()->is('admincp/menu*') ? 'active' : '' }}"
                                            hidden>
                                            <a class="sidebar-link" href="{{ route('menu.index') }}">
                                                <i class="fa-solid fa-message"></i>
                                                <span class="align-middle">Menu</span>
                                                {{-- <span class="sidebar-badge badge bg-primary">Posts</span> --}}
                                            </a>
                                        </li>

                                        <li class="sidebar-item {{ request()->is('admincp/settings*') ? 'active' : '' }}"
                                            hidden>
                                            <a class="sidebar-link" href="{{ route('settings.index') }}">
                                                <i class="fa-sharp fa-solid fa-gear"></i>
                                                <span class="align-middle">General Setting</span>
                                                {{-- <span class="sidebar-badge badge bg-primary">Posts</span> --}}
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="sidebar-cta">
                                        <div class="sidebar-cta-content">
                                            <strong class="d-inline-block mb-2">Support Web</strong>
                                            <div class="mb-3 text-sm">
                                                Jika terdapat gangguan atau permasalahan, bisa kontak support kami
                                            </div>
                                            <div class="d-grid">
                                                <a href="https://api.whatsapp.com/send?phone=6285693749533&text=SupportWebSGE"
                                                    class="btn btn-outline-primary" target="_blank">Whatsapp</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: auto; height: 481px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                    <div class="simplebar-scrollbar"
                        style="height: 208px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                </div>
            </div>
        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">

                        <li class="nav-item dropdown">
                            @if (App()->getLocale() == 'id')
                                <a class="nav-flag dropdown-toggle" href="#" id="languageDropdown"
                                    data-bs-toggle="dropdown">
                                    <img src="https://demo.adminkit.io/img/flags/id.png" alt="English">
                                </a>
                            @else
                                <a class="nav-flag dropdown-toggle" href="#" id="languageDropdown"
                                    data-bs-toggle="dropdown">
                                    <img src="https://demo.adminkit.io/img/flags/us.png" alt="English">
                                </a>
                            @endif
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                                <a class="dropdown-item" href="{{ url('locale/id') }}">
                                    <img src="https://demo.adminkit.io/img/flags/id.png" alt="Indonesia"
                                        width="20" class="align-middle me-1">
                                    <span class="align-middle">Indonesia</span>
                                </a>
                                <a class="dropdown-item" href="{{ url('locale/en') }}">
                                    <img src="https://demo.adminkit.io/img/flags/us.png" alt="English"
                                        width="20" class="align-middle me-1">
                                    <span class="align-middle">English</span>
                                </a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="https://demo.adminkit.io/img/avatars/avatar.jpg"
                                    class="avatar img-fluid rounded" alt="Charles Hall">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">

                                <a class="dropdown-item" href="#">Hallo, @if (Auth::check())
                                        {{ Auth::user()->name }}
                                    @else
                                        Tamu
                                    @endif
                                </a>
                                <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-help-circle align-middle me-1">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                    </svg> Help Center</a>
                                <div class="dropdown-divider"></div>
                                @guest
                                @else
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                @endguest
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content">
                @yield('content')
            </main>
        </div>
    </div>
    <!--wrapper end-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--<script src="/tinymce/tinymce.min.js"></script>-->
    <script src="https://cdn.tiny.cloud/1/nnd7pakaxqr7isf3oqefsdlew1jsidgl78umfeus6tg21ng0/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script>
        var el = document.getElementById('example1');
        var sortable = Sortable.create(el, {
            animation: 150,
            ghostClass: 'blue-background-class'
        });
    </script>
    <script>
        tinymce.init({
            selector: 'textarea.tinymce',
            height: 140,
            // toolbar: "undo redo",
            toolbar: false,
            menubar: false

        });
    </script>
    <script>
        tinymce.init({
            selector: '#tinymce',

            image_class_list: [{
                    title: 'image-left',
                    value: 'image-left'
                },
                {
                    title: 'image-right',
                    value: 'image-right'
                },
                {
                    title: 'image-center',
                    value: 'image-center'
                },
            ],
            height: 500,
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
            },
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",
            menubar: false,
            image_title: true,
            automatic_uploads: true,

            images_upload_handler: function(blobInfo, success, failure) {
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
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                };
                input.click();
            }
        });
    </script>
    <script>
        $(document).ready(() => {
            $('#images').change(function() {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        console.log(event.target.result);
                        $('#imgPreview').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
    <script>
        document.getElementById('date').valueAsDate = new Date();
    </script>
    <script>
        @if (session()->has('success'))
            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))
            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        });
    </script>
</body>

</html>
