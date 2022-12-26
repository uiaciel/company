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
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
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
                                            <sup><small class="badge bg-primary text-uppercase">SGE-v1</small></sup>
                                        </span>
                                    </a>

                                    <ul class="sidebar-nav">
                                        <li class="sidebar-header">
                                            Menus
                                        </li>

                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ route('posts.index') }}">
                                                <i class="fa-solid fa-pen-nib"></i>
                                                <span class="align-middle">{{ __('admincp.posts') }}</span>
                                                {{-- <span class="sidebar-badge badge bg-primary">Posts</span> --}}
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ route('category.index') }}">
                                                <i class="fa-solid fa-tags"></i>
                                                <span class="align-middle">{{ __('admincp.category') }}</span>
                                                {{-- <span class="sidebar-badge badge bg-primary">Category</span> --}}
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ route('pages.index') }}">
                                                <i class="fa-solid fa-file-lines"></i>
                                                <span class="align-middle">{{ __('admincp.page') }}</span>
                                                {{-- <span class="sidebar-badge badge bg-primary">Pages</span> --}}
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ route('announs.index') }}">
                                                <i class="fa-solid fa-circle-info"></i>
                                                <span class="align-middle">{{ __('admincp.announ') }}</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ route('laporans.index') }}">
                                                <i class="fa-solid fa-book"></i>
                                                <span class="align-middle">{{ __('admincp.report') }}</span>
                                                {{-- <span class="sidebar-badge badge bg-primary">Posts</span> --}}
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ route('contacts.index') }}">
                                                <i class="fa-solid fa-book"></i>
                                                <span class="align-middle">{{ __('admincp.contact') }}</span>
                                                {{-- <span class="sidebar-badge badge bg-primary">Posts</span> --}}
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="{{ route('menu.index') }}">
                                                <i class="fa-solid fa-book"></i>
                                                <span class="align-middle">Menu</span>
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
                {{-- <form class="d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
                        <button class="btn" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-search align-middle">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                    </div>
                </form>
                 <ul class="navbar-nav d-none d-lg-flex">
                    <li class="nav-item px-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="megaDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mega Menu
                        </a>
                        <div class="dropdown-menu dropdown-menu-start dropdown-mega" aria-labelledby="megaDropdown">
                            <div class="d-md-flex align-items-start justify-content-start">
                                <div class="dropdown-mega-list">
                                    <div class="dropdown-header">UI Elements</div>
                                    <a class="dropdown-item" href="#">Alerts</a>
                                    <a class="dropdown-item" href="#">Buttons</a>
                                    <a class="dropdown-item" href="#">Cards</a>
                                    <a class="dropdown-item" href="#">Carousel</a>
                                    <a class="dropdown-item" href="#">General</a>
                                    <a class="dropdown-item" href="#">Grid</a>
                                    <a class="dropdown-item" href="#">Modals</a>
                                    <a class="dropdown-item" href="#">Tabs</a>
                                    <a class="dropdown-item" href="#">Typography</a>
                                </div>
                                <div class="dropdown-mega-list">
                                    <div class="dropdown-header">Forms</div>
                                    <a class="dropdown-item" href="#">Layouts</a>
                                    <a class="dropdown-item" href="#">Basic Inputs</a>
                                    <a class="dropdown-item" href="#">Input Groups</a>
                                    <a class="dropdown-item" href="#">Advanced Inputs</a>
                                    <a class="dropdown-item" href="#">Editors</a>
                                    <a class="dropdown-item" href="#">Validation</a>
                                    <a class="dropdown-item" href="#">Wizard</a>
                                </div>
                                <div class="dropdown-mega-list">
                                    <div class="dropdown-header">Tables</div>
                                    <a class="dropdown-item" href="#">Basic Tables</a>
                                    <a class="dropdown-item" href="#">Responsive Table</a>
                                    <a class="dropdown-item" href="#">Table with Buttons</a>
                                    <a class="dropdown-item" href="#">Column Search</a>
                                    <a class="dropdown-item" href="#">Muulti Selection</a>
                                    <a class="dropdown-item" href="#">Ajax Sourced Data</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Resources
                        </a>
                        <div class="dropdown-menu" aria-labelledby="resourcesDropdown">
                            <a class="dropdown-item" href="https://adminkit.io/" target="_blank"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-home align-middle me-1">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Homepage</a>
                            <a class="dropdown-item" href="https://adminkit.io/docs/" target="_blank"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-book-open align-middle me-1">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                </svg>
                                Documentation</a>
                            <a class="dropdown-item" href="https://adminkit.io/docs/getting-started/changelog/"
                                target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-edit align-middle me-1">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg> Changelog</a>
                        </div>
                    </li>
                </ul> --}}
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <!--<li class="nav-item dropdown">-->
                        <!--    <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown"-->
                        <!--        data-bs-toggle="dropdown">-->
                        <!--        <div class="position-relative">-->
                        <!--            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
                        <!--                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"-->
                        <!--                stroke-linecap="round" stroke-linejoin="round"-->
                        <!--                class="feather feather-bell align-middle">-->
                        <!--                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>-->
                        <!--                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>-->
                        <!--            </svg>-->
                        <!--            <span class="indicator">4</span>-->
                        <!--        </div>-->
                        <!--    </a>-->
                        <!--    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"-->
                        <!--        aria-labelledby="alertsDropdown">-->
                        <!--        <div class="dropdown-menu-header">-->
                        <!--            4 New Notifications-->
                        <!--        </div>-->
                        <!--        <div class="list-group">-->
                        <!--            <a href="#" class="list-group-item">-->
                        <!--                <div class="row g-0 align-items-center">-->
                        <!--                    <div class="col-2">-->
                        <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
                        <!--                            viewBox="0 0 24 24" fill="none" stroke="currentColor"-->
                        <!--                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"-->
                        <!--                            class="feather feather-alert-circle text-danger">-->
                        <!--                            <circle cx="12" cy="12" r="10"></circle>-->
                        <!--                            <line x1="12" y1="8" x2="12"-->
                        <!--                                y2="12"></line>-->
                        <!--                            <line x1="12" y1="16" x2="12.01"-->
                        <!--                                y2="16"></line>-->
                        <!--                        </svg>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-10">-->
                        <!--                        <div class="text-dark">Update completed</div>-->
                        <!--                        <div class="text-muted small mt-1">Restart server 12 to complete the-->
                        <!--                            update.</div>-->
                        <!--                        <div class="text-muted small mt-1">30m ago</div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </a>-->
                        <!--            <a href="#" class="list-group-item">-->
                        <!--                <div class="row g-0 align-items-center">-->
                        <!--                    <div class="col-2">-->
                        <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
                        <!--                            viewBox="0 0 24 24" fill="none" stroke="currentColor"-->
                        <!--                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"-->
                        <!--                            class="feather feather-bell text-warning">-->
                        <!--                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>-->
                        <!--                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>-->
                        <!--                        </svg>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-10">-->
                        <!--                        <div class="text-dark">Lorem ipsum</div>-->
                        <!--                        <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate-->
                        <!--                            hendrerit et.</div>-->
                        <!--                        <div class="text-muted small mt-1">2h ago</div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </a>-->
                        <!--            <a href="#" class="list-group-item">-->
                        <!--                <div class="row g-0 align-items-center">-->
                        <!--                    <div class="col-2">-->
                        <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
                        <!--                            viewBox="0 0 24 24" fill="none" stroke="currentColor"-->
                        <!--                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"-->
                        <!--                            class="feather feather-home text-primary">-->
                        <!--                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>-->
                        <!--                            <polyline points="9 22 9 12 15 12 15 22"></polyline>-->
                        <!--                        </svg>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-10">-->
                        <!--                        <div class="text-dark">Login from 192.186.1.8</div>-->
                        <!--                        <div class="text-muted small mt-1">5h ago</div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </a>-->
                        <!--            <a href="#" class="list-group-item">-->
                        <!--                <div class="row g-0 align-items-center">-->
                        <!--                    <div class="col-2">-->
                        <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
                        <!--                            viewBox="0 0 24 24" fill="none" stroke="currentColor"-->
                        <!--                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"-->
                        <!--                            class="feather feather-user-plus text-success">-->
                        <!--                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>-->
                        <!--                            <circle cx="8.5" cy="7" r="4"></circle>-->
                        <!--                            <line x1="20" y1="8" x2="20"-->
                        <!--                                y2="14"></line>-->
                        <!--                            <line x1="23" y1="11" x2="17"-->
                        <!--                                y2="11"></line>-->
                        <!--                        </svg>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-10">-->
                        <!--                        <div class="text-dark">New connection</div>-->
                        <!--                        <div class="text-muted small mt-1">Christina accepted your request.-->
                        <!--                        </div>-->
                        <!--                        <div class="text-muted small mt-1">14h ago</div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </a>-->
                        <!--        </div>-->
                        <!--        <div class="dropdown-menu-footer">-->
                        <!--            <a href="#" class="text-muted">Show all notifications</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <!--<li class="nav-item dropdown">-->
                        <!--    <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"-->
                        <!--        data-bs-toggle="dropdown">-->
                        <!--        <div class="position-relative">-->
                        <!--            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
                        <!--                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"-->
                        <!--                stroke-linecap="round" stroke-linejoin="round"-->
                        <!--                class="feather feather-message-square align-middle">-->
                        <!--                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>-->
                        <!--            </svg>-->
                        <!--        </div>-->
                        <!--    </a>-->
                        <!--    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"-->
                        <!--        aria-labelledby="messagesDropdown">-->
                        <!--        <div class="dropdown-menu-header">-->
                        <!--            <div class="position-relative">-->
                        <!--                4 New Messages-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="list-group">-->
                        <!--            <a href="#" class="list-group-item">-->
                        <!--                <div class="row g-0 align-items-center">-->
                        <!--                    <div class="col-2">-->
                        <!--                        <img src="img/avatars/avatar-5.jpg"-->
                        <!--                            class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">-->
                        <!--                    </div>-->
                        <!--                    <div class="col-10 ps-2">-->
                        <!--                        <div class="text-dark">Vanessa Tucker</div>-->
                        <!--                        <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis-->
                        <!--                            arcu tortor.</div>-->
                        <!--                        <div class="text-muted small mt-1">15m ago</div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </a>-->
                        <!--            <a href="#" class="list-group-item">-->
                        <!--                <div class="row g-0 align-items-center">-->
                        <!--                    <div class="col-2">-->
                        <!--                        <img src="img/avatars/avatar-2.jpg"-->
                        <!--                            class="avatar img-fluid rounded-circle" alt="William Harris">-->
                        <!--                    </div>-->
                        <!--                    <div class="col-10 ps-2">-->
                        <!--                        <div class="text-dark">William Harris</div>-->
                        <!--                        <div class="text-muted small mt-1">Curabitur ligula sapien euismod-->
                        <!--                            vitae.</div>-->
                        <!--                        <div class="text-muted small mt-1">2h ago</div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </a>-->
                        <!--            <a href="#" class="list-group-item">-->
                        <!--                <div class="row g-0 align-items-center">-->
                        <!--                    <div class="col-2">-->
                        <!--                        <img src="img/avatars/avatar-4.jpg"-->
                        <!--                            class="avatar img-fluid rounded-circle" alt="Christina Mason">-->
                        <!--                    </div>-->
                        <!--                    <div class="col-10 ps-2">-->
                        <!--                        <div class="text-dark">Christina Mason</div>-->
                        <!--                        <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.-->
                        <!--                        </div>-->
                        <!--                        <div class="text-muted small mt-1">4h ago</div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </a>-->
                        <!--            <a href="#" class="list-group-item">-->
                        <!--                <div class="row g-0 align-items-center">-->
                        <!--                    <div class="col-2">-->
                        <!--                        <img src="img/avatars/avatar-3.jpg"-->
                        <!--                            class="avatar img-fluid rounded-circle" alt="Sharon Lessman">-->
                        <!--                    </div>-->
                        <!--                    <div class="col-10 ps-2">-->
                        <!--                        <div class="text-dark">Sharon Lessman</div>-->
                        <!--                        <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,-->
                        <!--                            posuere ac, mattis non.</div>-->
                        <!--                        <div class="text-muted small mt-1">5h ago</div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </a>-->
                        <!--        </div>-->
                        <!--        <div class="dropdown-menu-footer">-->
                        <!--            <a href="#" class="text-muted">Show all messages</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</li>-->
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
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-icon js-fullscreen d-none d-lg-block" href="#">-->
                        <!--        <div class="position-relative">-->
                        <!--            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
                        <!--                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"-->
                        <!--                stroke-linecap="round" stroke-linejoin="round"-->
                        <!--                class="feather feather-maximize align-middle">-->
                        <!--                <path-->
                        <!--                    d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">-->
                        <!--                </path>-->
                        <!--            </svg>-->
                        <!--        </div>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="https://demo.adminkit.io/img/avatars/avatar.jpg"
                                    class="avatar img-fluid rounded" alt="Charles Hall">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!--<a class="dropdown-item" href="pages-profile.html"><svg-->
                                <!--        xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
                                <!--        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"-->
                                <!--        stroke-linecap="round" stroke-linejoin="round"-->
                                <!--        class="feather feather-user align-middle me-1">-->
                                <!--        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>-->
                                <!--        <circle cx="12" cy="7" r="4"></circle>-->
                                <!--    </svg> Profile</a>-->
                                <!--<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg"-->
                                <!--        width="24" height="24" viewBox="0 0 24 24" fill="none"-->
                                <!--        stroke="currentColor" stroke-width="2" stroke-linecap="round"-->
                                <!--        stroke-linejoin="round" class="feather feather-pie-chart align-middle me-1">-->
                                <!--        <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>-->
                                <!--        <path d="M22 12A10 10 0 0 0 12 2v10z"></path>-->
                                <!--    </svg> Analytics</a>-->
                                <!--<div class="dropdown-divider"></div>-->
                                <!--<a class="dropdown-item" href="pages-settings.html"><svg-->
                                <!--        xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
                                <!--        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"-->
                                <!--        stroke-linecap="round" stroke-linejoin="round"-->
                                <!--        class="feather feather-settings align-middle me-1">-->
                                <!--        <circle cx="12" cy="12" r="3"></circle>-->
                                <!--        <path-->
                                <!--            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">-->
                                <!--        </path>-->
                                <!--    </svg> Settings &amp;-->
                                <!--    Privacy</a>-->
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
