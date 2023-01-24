@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ __('admincp.page') }}</strong> <a href="{{ route('pages.create') }}"
                        class="btn btn-sm btn-primary">{{ __('admincp.add') }}</a> </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <table class="table table-striped table-hover" id="data">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>{{ __('admincp.title') }}</th>
                                    <th>{{ __('admincp.language') }}</th>

                                    <th>{{ __('admincp.status') }}</th>
                                    <th>{{ __('admincp.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $index => $posts)
                                    <tr>
                                        <td scope="row">{{ $index + 1 }}</td>
                                        <td>{{ $posts->title }}</td>
                                        <td>
                                            @if ($posts->lang == 'id')
                                                <span class="badge text-bg-danger">Indonesia</span>
                                            @else
                                                <span class="badge text-bg-primary">English</span>
                                            @endif
                                        </td>

                                        <td>{{ $posts->status }}</td>
                                        <td class="text-right">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <form onsubmit="return confirm('{{ __('admincp.areyousure') }}');"
                                                    action="{{ route('pages.destroy', $posts->id) }}" method="POST">
                                                    <a href="{{ route('pages.edit', $posts->id) }}"
                                                        class="btn btn-md btn-primary">{{ __('admincp.edit') }}</a>
                                                    <a class="btn btn-md btn-success"
                                                        href="{{ $posts->menu->slug }}/{{ $posts->slug }}"
                                                        target="_blank">View</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-md btn-danger">{{ __('admincp.delete') }}</button>
                                                </form>
                                            </div>
                                        </td>
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
