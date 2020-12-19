@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('message') }}
                    </div>
                @endif

                @if(Session::has('delete-message'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('delete-message') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Галерија фотографија
                        <a href="{{ route('galleries.create') }}" class="btn btn-sm btn-primary float-right">Додај ново</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col">Линк</th>
                                <th scope="col" width="200">Креирао</th>
                                <th scope="col" width="200">Статус</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <td>{{ $gallery->id }}</td>
                                    <td>{{ asset('storage/galleries/' . $gallery->image_url) }}</td>
                                    <td>{{ $gallery->user->name }}</td>
                                    <td>
                                        <a href="{{ route('galleries.edit', $gallery->id) }}"
                                           class="btn btn-sm btn-primary">Промени</a>
                                        {!! Form::open(['route' => ['galleries.destroy', $gallery->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                        {!! Form::submit('Обриши', ['class' => 'btn btn-sm btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
