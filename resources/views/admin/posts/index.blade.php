@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            @if(session('message'))
                <p class="alert alert-info">{{ session('message') }}</p>
            @endif
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Publicaciones <a class="pull-right" href="{{ route('admin.posts.create') }}"><i class="zmdi zmdi-plus-square"></i> Nueva</a></div>
                    <div class="panel-body">
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th></th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Categoria</th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td><input type="checkbox" name="select_{{ $post->id }}"></td>
                                    <td width="30%">{{ $post->title }}</td>
                                    <td width="30%">{{ $post->slug }}</td>
                                    <td width="20%">{{ $post->category->name }}</td>
                                    <td style="text-align: center">
                                        <a class="btn btn-warning" href="/admin/publicaciones/{{ $post->id }}/editar"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#" class="btn btn-danger delete-post" data-product="{{ $post->id }}"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



