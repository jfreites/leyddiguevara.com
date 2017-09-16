@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            @if(session('message'))
                <p class="alert alert-info">{{ session('message') }}</p>
            @endif
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Banners de portada <a class="pull-right" href="{{ route('admin.banners.create') }}">Nuevo</a></div>
                    <div class="panel-body">
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th></th>
                                <th>Imagen</th>
                                <th>Enlace</th>
                                <th>Fecha inicio *</th>
                                <th>Fecha fin *</th>
                            </tr>
                            @foreach($banners as $banner)
                                <tr>
                                    <td><input type="checkbox" name="select_{{ $banner->id }}"></td>
                                    <td width="30%"></td>
                                    <td width="20%"></td>
                                    <td width="20%"></td>
                                    <td width="20%"></td>
                                    <td>
                                        <a class="btn btn-warning" href="/admin/banners/{{ $banner->id }}/editar">editar</a>
                                        <a href="#" class="btn btn-danger delete-product" data-product="{{ $banner->id }}">eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <p class="text-center">* Las fechas indican la expiración del banner.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

