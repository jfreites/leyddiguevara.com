@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear producto <a class="pull-right" href="/admin/productos">< volver</a></div>
                    <div class="panel-body">
                        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Nombre*</label>
                                <input class="form-control" type="text" name="name" placeholder="Nombre del producto">
                            </div>
                            <div class="form-group">
                                <label>Catálogo*</label>
                                <select name="catalog_id" class="form-control">
                                    <option value="1" selected>inno</option>
                                    <option value="2">teosyal</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Descripción*</label>
                                <textarea class="form-control" name="content" id="content" cols="30" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Activos</label>
                                <textarea class="form-control" name="extra_1" id="content" cols="30" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Indicaciones</label>
                                <textarea class="form-control" name="extra_2" id="content" cols="30" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Protocolo</label>
                                <textarea class="form-control" name="extra_3" id="content" cols="30" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="feature_image">Imagen principal</label>
                                <input class="form-control" type="file" name="feature_image">
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="1" name="featured"> Producto destacado
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="active" value="1" checked> Producto visible
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-success pull-right" type="submit">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
