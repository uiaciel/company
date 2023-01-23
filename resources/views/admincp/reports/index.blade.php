@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ __('admincp.report') }}</strong> <a href="{{ route('reports.create') }}"
                        class="btn btn-primary">{{ __('admincp.add') }}</a></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        {{ __('admincp.list') }} {{ __('admincp.report') }}
                    </div>
                    <div class="card-body">
                        <h3 class="mb-3 mt-3">Annual Reports</h3>
                        <table class="table table-bordered" id="data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>{{ __('admincp.title') }}</th>
                                    <th>Category</th>
                                    <th>Tanggal Post</th>
                                    <th>Status</th>

                                    <th>{{ __('admincp.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts->where('category', 'Annual Report') as $annual)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $annual->title }}</td>
                                        <td>{{ $annual->category }}</td>
                                        <td>{{ $annual->date_gmt }}</td>
                                        <td>{{ $annual->status }}</td>
                                        <td>
                                            <form onsubmit="return confirm('{{ __('admincp.areyousure') }}');"
                                                action="{{ route('posts.destroy', $annual->id) }}" method="POST">

                                                <a href="" data-bs-toggle="modal"
                                                    data-bs-target="#edit{{ $annual->id }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-sm btn-danger">{{ __('admincp.delete') }}</button>
                                            </form>
                                        </td>
                                        <!-- Modal -->
                                        <div class="modal fade" id="edit{{ $annual->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-dark">
                                                        <h5 class="modal-title text-white" id="exampleModalLabel">Edit
                                                            Category</h5>
                                                        <button type="button" class="btn-close text-white"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('reports.update', $annual->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <div class="mb-3">
                                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                                                                            class="img-fluid">

                                                                    </div>
                                                                </div>
                                                                <div class="col-8">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="inputEmail4">Title

                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control @error('name') is-invalid @enderror"
                                                                            name="title" value="{{ $annual->title }}">
                                                                    </div>
                                                                    @error('name')
                                                                        <div class="alert alert-danger mt-2">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror

                                                                    <div class="mb-3">
                                                                        <div class="input-group">
                                                                            <span class="input-group-text"
                                                                                id="basic-addon1">Type</span>
                                                                            <select
                                                                                class="form-select  @error('id_category') is-invalid @enderror"
                                                                                name="category">
                                                                                <option value="{{ $annual->category }}">
                                                                                    {{ $annual->category }}
                                                                                </option>
                                                                                <option value="Annual Report">Annual Report
                                                                                </option>
                                                                                <option value="Financial Report">Financial
                                                                                    Report</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <div class="input-group">
                                                                            <span class="input-group-text"
                                                                                id="basic-addon1">Status</span>
                                                                            <select
                                                                                class="form-select  @error('status') is-invalid @enderror"
                                                                                name="status">

                                                                                <option value="Publish">Publish
                                                                                </option>
                                                                                <option value="Draf">Draf</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <div class="input-group">
                                                                            <span class="input-group-text"
                                                                                id="basic-addon1">Date</span>
                                                                            <input type="date"
                                                                                class="form-control @error('gmt_date') is-invalid @enderror"
                                                                                name="date_gmt"
                                                                                value="{{ $annual->date_gmt }}"
                                                                                aria-describedby="helpId">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="inputEmail4">File PDF

                                                                        </label>
                                                                        <div class="input-group mb-3">

                                                                            <input type="text" class="form-control"
                                                                                value="{{ $annual->pdf }}"
                                                                                aria-label="Text input with checkbox"
                                                                                readonly>
                                                                            <button class="btn btn-outline-secondary"
                                                                                type="button" id="button-addon2">X</button>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <input type="file" class="form-control"
                                                                                name="files" id="inputGroupFile01">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>




                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>

                                                </div>


                                                </form>
                                            </div>
                                        </div>
                    </div>
                    </tr>
                @empty
                    <div class="alert alert-danger">
                        Data Post belum Tersedia.
                    </div>
                    @endforelse
                    </tbody>
                    </table>
                    <h3 class="mb-3 mt-3">Financial Reports</h3>
                    <table class="table table-bordered" id="data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>{{ __('admincp.title') }}</th>
                                <th>Category</th>
                                <th>Tanggal Post</th>
                                <th>Status</th>

                                <th>{{ __('admincp.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts->where('category', 'Financial Report') as $financial)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $financial->title }}</td>
                                    <td>{{ $financial->category }}</td>
                                    <td>{{ $financial->date_gmt }}</td>
                                    <td>{{ $financial->status }}</td>
                                    <td>
                                        <form onsubmit="return confirm('{{ __('admincp.areyousure') }}');"
                                            action="{{ route('posts.destroy', $financial->id) }}" method="POST">

                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#edit{{ $financial->id }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-sm btn-danger">{{ __('admincp.delete') }}</button>
                                        </form>
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="edit{{ $financial->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header bg-dark">
                                                    <h5 class="modal-title text-white" id="exampleModalLabel">Edit
                                                        Category</h5>
                                                    <button type="button" class="btn-close text-white"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('reports.update', $financial->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="mb-3">
                                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                                                                        class="img-fluid">

                                                                </div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="inputEmail4">Title

                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control @error('name') is-invalid @enderror"
                                                                        name="name" value="{{ $financial->title }}">
                                                                </div>
                                                                @error('name')
                                                                    <div class="alert alert-danger mt-2">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror

                                                                <div class="mb-3">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon1">Type</span>
                                                                        <select
                                                                            class="form-select  @error('id_category') is-invalid @enderror"
                                                                            name="category">
                                                                            <option value="{{ $financial->category }}">
                                                                                {{ $financial->category }}
                                                                            </option>
                                                                            <option value="Annual Report">Annual Report
                                                                            </option>
                                                                            <option value="Financial Report">Financial
                                                                                Report</option>

                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="input-group">
                                                                        <span class="input-group-text"
                                                                            id="basic-addon1">Date</span>
                                                                        <input type="date"
                                                                            class="form-control @error('gmt_date') is-invalid @enderror"
                                                                            name="date_gmt"
                                                                            value="{{ $financial->date_gmt }}"
                                                                            aria-describedby="helpId">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="inputEmail4">File PDF

                                                                    </label>
                                                                    <div class="input-group mb-3">

                                                                        <input type="text" class="form-control"
                                                                            value="{{ $financial->pdf }}"
                                                                            aria-label="Text input with checkbox" readonly>
                                                                        <button class="btn btn-outline-secondary"
                                                                            type="button" id="button-addon2">X</button>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <input type="file" class="form-control"
                                                                            name="files" id="inputGroupFile01">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>




                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>

                                            </div>


                                            </form>
                                        </div>
                                    </div>
                </div>
                </tr>
            @empty
                <div class="alert alert-danger">
                    Data Post belum Tersedia.
                </div>
                @endforelse
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
