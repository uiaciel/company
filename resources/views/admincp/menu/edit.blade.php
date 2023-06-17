@extends('layouts.admin')
@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Menu</strong> <a href="#" data-bs-toggle="modal" data-bs-target="#createMenu"
                        class="btn btn-sm btn-primary">Add Menu</a>
                </h3>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="createMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog        ">
                    <form action="{{ route('menus.store') }}" method="POST">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">


                                <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label">Title Menu</label>
                                    <input type="text" class="form-control" id="exampleInputText1"
                                        aria-describedby="textHelp" name="title">
                                    <div id="textHelp" class="form-text">We'll never share your texts with anyone else.
                                    </div>
                                </div>

                                <div class="mb-3">

                                    <label for="exampleInputText1" class="form-label">Position</label>

                                    <select class="form-select" aria-label="Default select example" name="position">
                                        {{-- @foreach ($page as $page)
                                        <option value="/page/{{ $page->slug }}">{{ $page->title }}</option>
                                    @endforeach --}}

                                        <option value="Header">Header</option>
                                        <option value="Footer">Footer</option>
                                        <option value="Sidebar">Sidebar</option>
                                    </select>

                                </div>


                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


                        </div>
                </div>

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        {{ $menu->title }}
                    </div>


                    <ul class="list-group list-group-flush mb-3">
                        <form action="{{ route('menus.stores') }}" method="post">
                            @csrf
                            <li class="list-group-item">
                                <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Google"
                                        id="exampleInputText1" aria-describedby="textHelp">
                                    <input type="text" class="form-control" name="menu_id" value="{{ $menu->id }}">
                                    <input type="text" class="form-control" name="parent" value="0">
                                    <input type="text" class="form-control" name="order" value="0">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label">Link</label>
                                    <input type="text" class="form-control" name="link"
                                        placeholder="https://google.com" id="exampleInputText1" aria-describedby="textHelp">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-danger">Add Menu</button>
                                </div>
                            </li>
                        </form>
                        <form action="{{ route('menus.stores') }}" method="post">
                            @csrf
                            <li class="list-group-item mb-3">
                                <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label">Article</label>
                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Google"
                                            id="exampleInputText1" aria-describedby="textHelp">
                                        <input type="text" class="form-control" name="menu_id"
                                            value="{{ $menu->id }}">
                                        <input type="text" class="form-control" name="parent" value="0">
                                        <input type="text" class="form-control" name="order" value="0">
                                    </div>
                                    <select class="form-select" name="link" aria-label="Default select example">
                                        @foreach ($berita as $post)
                                            <option value="/media/{{ $post->slug }}">{{ $post->title }}</option>
                                        @endforeach

                                    </select>

                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-danger">Add</button>
                                </div>
                            </li>
                        </form>
                        <li class="list-group-item mb-3">
                            <form action="{{ route('menus.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label">Category</label>

                                    <select class="form-select" name="title" aria-label="Default select example">
                                        @foreach ($category as $category)
                                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                                        @endforeach

                                    </select>

                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-danger">Add</button>
                                </div>
                            </form>

                        </li>
                        <li class="list-group-item">A third item</li>
                    </ul>

                </div>

            </div>
            <div class="col-md-8">

                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title mb-3">Menu : {{ $menu->title }}</h4>

                        <form class="" action="{{ route('menus.update', $menu->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @foreach ($menu->link as $listmenu)
                                <div class="row g-1 mb-3">
                                    <input value="{{ $menu->id }}" name="id" hidden>
                                    <div class="col-4">
                                        <label for="staticEmail2" class="visually-hidden">Email</label>
                                        <input type="text" name="title" class="form-control" id="staticEmail2"
                                            value="{{ $listmenu->title }}">
                                    </div>
                                    <div class="col-7">
                                        <label for="inputPassword2" class="visually-hidden">Password</label>
                                        <input type="text" class="form-control" name="link"
                                            value="{{ $listmenu->link }}" id="inputPassword2" placeholder="Password">
                                    </div>
                                    <div class="col-1">
                                        <label for="inputPassword2" class="visually-hidden">Password</label>
                                        <input type="text" class="form-control" name="order"
                                            value="{{ $listmenu->order }}" id="inputPassword2" placeholder="Password">
                                    </div>
                                </div>
                            @endforeach
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Update</button>

                            </div>
                        </form>



                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
