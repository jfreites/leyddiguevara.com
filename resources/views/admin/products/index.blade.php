@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            @if(session('message'))
                <p class="alert alert-info">{{ session('message') }}</p>
            @endif
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Productos <a class="pull-right" href="/admin/productos/nuevo">Nuevo</a></div>
                    <div class="panel-body">
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th></th>
                                <th>Nombre</th>
                                <th>Slug</th>
                                <th>Imagen</th>
                                <th></th>
                            </tr>
                            @foreach($products as $product)
                            <tr>
                                <td><input type="checkbox" name="select_{{ $product->id }}"></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->slug }}</td>
                                <td><img src="/uploads/products/{{ $product->feature_image }}" height="100"></td>
                                <td style="text-align: center">
                                    <a class="btn btn-warning" href="/admin/productos/{{ $product->id }}/editar"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="#" class="btn btn-danger delete-product" data-product="{{ $product->id }}"><i class="zmdi zmdi-delete"></i></a>
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

