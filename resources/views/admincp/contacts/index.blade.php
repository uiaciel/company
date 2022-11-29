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
                                    <th>Kategori</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>{{ __('admincp.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contacts as $index => $posts)
                                    {{-- <tr>
                                        <td scope="row">{{ $index + 1 }}</td>
                                        <td>{{ $posts->title }}</td>
                                        <td>{{ $posts->category->name }}</td>
                                        <td>{{ $posts->lang }}</td>
                                        <td><a href="/{{ $posts->lang }}/{{ $posts->slug }}">{{ $posts->slug }}</a>
                                        </td>
                                        <td>{{ $posts->type }}</td>
                                        <td>{{ $posts->status }}</td>
                                        <td>
                                            <form onsubmit="return confirm('{{ __('admincp.areyousure') }}');"
                                                action="{{ route('posts.destroy', $posts->id) }}" method="POST">
                                                <a href="{{ route('posts.edit', $posts->id) }}"
                                                    class="btn btn-sm btn-primary">{{ __('admincp.edit') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-sm btn-danger">{{ __('admincp.delete') }}</button>
                                            </form>
                                        </td>
                                    </tr> --}}
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
