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
<<<<<<< HEAD
                    <form action="{{ route('menus.store') }}" method="POST">
=======
                    <form>
>>>>>>> 0449ca9798027f9ba838cc592c3885ce3657dc01
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

<<<<<<< HEAD

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
=======
                                <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label">Page</label>

                                    <select class="form-select" aria-label="Default select example">
                                        {{-- @foreach ($page as $page)
                                        <option value="/page/{{ $page->slug }}">{{ $page->title }}</option>
                                    @endforeach --}}
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
>>>>>>> 0449ca9798027f9ba838cc592c3885ce3657dc01
                                    </select>

                                </div>

<<<<<<< HEAD

                                <button type="submit" class="btn btn-primary">Submit</button>

=======
>>>>>>> 0449ca9798027f9ba838cc592c3885ce3657dc01
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<<<<<<< HEAD


=======
                            <button type="submit" class="btn btn-primary">Save changes</button>
>>>>>>> 0449ca9798027f9ba838cc592c3885ce3657dc01
                        </div>
                </div>

                </form>
            </div>
        </div>
        <div class="row">
<<<<<<< HEAD
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @foreach ($menus as $menu)
                            <ul>
                                <li>{{ $menu->title }}</li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

=======
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Featured
                    </div>


                    <ul class="list-group list-group-flush">
                        <form action="{{ route('menus.store') }}" method="post">
                            @csrf
                            <li class="list-group-item">
                                <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Google"
                                        id="exampleInputText1" aria-describedby="textHelp">
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
                        <form action="{{ route('menus.store') }}" method="post">
                            @csrf
                            <li class="list-group-item">
                                <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label">Article</label>

                                    <select class="form-select" name="title" aria-label="Default select example">
                                        @foreach ($berita as $post)
                                            <option value="{{ $post->title }}">{{ $post->title }}</option>
                                        @endforeach

                                    </select>

                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-danger">Add</button>
                                </div>
                            </li>
                        </form>
                        <li class="list-group-item">
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
                        <h5 class="card-title">List Menu</h5>
                        <table id="sort">
                            <thead>
                                <tr>

                                    <th>Order</th>
                                    <th>ID</th>
                                    <th>Title</th>

                                    <th class="index">No</th>

                                </tr>
                            </thead>
                            <tbody>
                                <form action="{{ route('updates') }}" method="POST">
                                    @csrf



                                    @foreach ($menus as $menu)
                                        <tr>
                                            <td><input value="" class="in" name="order[]">
                                            </td>
                                            <td><input value="{{ $menu->id }}" name="id[]"></td>
                                            <td>

                                                {{ $menu->title }}
                                            </td>
                                            <td class="index">{{ $menu->order }}</td>

                                        </tr>
                                    @endforeach
                                    <button type="submit" class="btn btn-primary">Save Menu</button>
                                </form>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
>>>>>>> 0449ca9798027f9ba838cc592c3885ce3657dc01
    </div>
@endsection
