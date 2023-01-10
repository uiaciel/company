@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>All</strong> {{ __('menu') }}</h3>
            </div>
            <div class="col-auto ms-auto text-end mt-n1">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        menu
                    </div>
                    <div class="card-body">
                        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label" for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" name="title" placeholder="menu">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputEmail4">Parent Menu</label>
                                    <select class="form-control">
                                        <option></option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputEmail4">Slug</label>
                                    <input type="text" class="form-control" name="title" placeholder="menu">
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        LIST MENU
                    </div>
                    <div class="card-body">
                        <div id="example1" class="list-group col">

                            @forelse ($menus as $index => $menu)
                                <div class="list-group-item">{{ $menu->title }}</div>
                            @empty
                                <div class="list-group-item">
                                    Data Post belum Tersedia.
                                </div>
                            @endforelse


                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
