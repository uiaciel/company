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

    </div>
@endsection
