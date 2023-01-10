@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ __('admincp.contacts') }}</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        {{ __('admincp.list') }} {{ __('admincp.contacts') }}
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>

                                {{-- $table->date('date_gmt');
                                $table->string('category');
                                $table->string('name');
                                $table->string('email');
                                $table->integer('phone')->nullable();
                                $table->string('title')->nullable();
                                $table->text('content');
                                $table->string('status'); --}}

                                <tr>
                                    <th>No</th>
                                    <th>Pengirim</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>{{ __('admincp.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contacts as $index => $posts)
                                    <tr>
                                        <td scope="row">{{ $index + 1 }}</td>
                                        <td>{{ $posts->name }}</td>
                                        <td>{{ $posts->email }}</td>
                                        <td>{{ $posts->subject }}</td>

                                        <td>{{ $posts->message }}</td>
                                        <td>{{ $posts->status }}</td>
                                        <td>
                                            <form onsubmit="return confirm('{{ __('admincp.areyousure') }}');"
                                                action="{{ route('contacts.destroy', $posts->id) }}" method="POST">
                                                <a href="" data-bs-toggle="modal"
                                                    data-bs-target="#edit{{ $posts->id }}"
                                                    class="btn btn-sm btn-primary">VIEW</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-sm btn-danger">{{ __('admincp.delete') }}</button>
                                            </form>
                                        </td>
                                        <div class="modal fade" id="edit{{ $posts->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-dark">
                                                        <h5 class="modal-title text-white" id="exampleModalLabel">Message
                                                            from {{ $posts->email }}
                                                        </h5>
                                                        <button type="button" class="btn-close text-white"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('reports.update', $posts->id) }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Subject</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $posts->subject }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlTextarea1"
                                                                    class="form-label">Message</label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7">{{ $posts->subject }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-primary">Reply</button>
                                                        </div>

                                                </div>


                                                </form>
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
