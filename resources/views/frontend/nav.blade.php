<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($menus->where('parent_id', 0) as $menu)
                    @php
                        $children = $menus->where('parent_id', $menu->id);
                    @endphp

                    @if (!$children->isEmpty())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ $menu->title }}
                            </a>

                            <ul class="dropdown-menu">
                                @foreach ($children->sortBy('sort_id') as $child)
                                    <li><a class="dropdown-item" href="{{ $child->slug }}">{{ $child->title }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ $menu->slug }}">{{ $menu->title }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
