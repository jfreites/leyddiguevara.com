@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            @if(session('message'))
                <p class="alert alert-info">{{ session('message') }}</p>
            @endif
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Catálogos <a class="pull-right" href="#">Nuevo</a></div>
                    <div class="panel-body">
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th></th>
                                <th>Nombre</th>
                                <th>Slug</th>
                                <th>Logo</th>
                                <th></th>
                            </tr>
                            @foreach($catalogs as $catalog)
                                <tr>
                                    <td><input type="checkbox" name="select_{{ $catalog->id }}"></td>
                                    <td width="20%">{{ $catalog->name }}</td>
                                    <td width="20%">{{ $catalog->slug }}</td>
                                    <td width="30%"><img src="/uploads/logos/{{ $catalog->slug }}.png" height="100"></td>
                                    <td>
                                        <a class="btn btn-warning" href="/admin/catalogos/{{ $catalog->id }}/editar">editar</a>
                                        <a href="#" class="btn btn-danger delete-product" data-product="{{ $catalog->id }}">eliminar</a>
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

