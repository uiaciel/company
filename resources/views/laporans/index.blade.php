@extends('layouts.adminapp')
@section('content')
<div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>{{ __('admincp.report') }}</strong> <a href="{{route('laporans.create')}}" class="btn btn-primary">{{__('admincp.add')}}</a></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    {{ __('admincp.list') }} {{ __('admincp.report') }}
                  </div>
                <div class="card-body">
                    <table class="table table-bordered"  id="data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>{{ __('admincp.title') }}</th>
                                
                                <th>Status</th>
                                <th>Tanggal Post</th>
                                <th>{{ __('admincp.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $index => $posts)
                            <tr>
                                <td scope="row">{{$index+1}}</td>
                                <td><a href="/{{$posts->lang}}/{{$posts->slug}}">{{ $posts->title }}</a></td>
                                
                                <td>{{ $posts->date_gmt }}</td>
                                <td>{{ $posts->status }}</td>
                                <td>
                                    <form onsubmit="return confirm('{{ __('admincp.areyousure') }}');" action="{{ route('posts.destroy', $posts->id) }}" method="POST">
                                        <a href="{{ route('posts.edit', $posts->id) }}" class="btn btn-sm btn-primary">{{ __('admincp.edit') }}</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">{{ __('admincp.delete') }}</button>
                                    </form>
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
