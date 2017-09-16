@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            @if(session('message'))
                <p class="alert alert-warning">{{ session('message') }}</p>
            @endif
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear producto <a class="pull-right" href="/admin/productos">< volver</a></div>
                    <div class="panel-body">
                        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                            </div>
                            <div class="form-group">
                                <label>Catálogo</label>
                                @if($product->catalog_id == 1)
                                    <p class="label label-info">INNO</p>
                                @elseif($product->catalog_id == 2)
                                    <p class="label label-info">TEOSYAL</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Categoría*</label>
                                @foreach ($categories as $item)
                                    @if($item->children->count() > 0)
                                        <p><i class="zmdi zmdi-check-circle"></i>{{ $item->name }}</p>
                                        <ul style="list-style-type: none;">
                                            @foreach ($item->children as $child)
                                                <li><input type="checkbox" data-parent="{{ $item->id }}" data-child="{{ $child->id }}" name="children_category" value="{{ $child->id }}" @if($product->category_id == $child->id) checked @endif> {{ $child->name }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="name">Descripción</label>
                                <textarea class="form-control" name="content" id="content" cols="30" rows="5">{{ $product->content }}</textarea>
                            </div>
                            @if($product->catalog_id == 1)
                            <div class="form-group">
                                <label for="name">Activos</label>
                                <textarea class="form-control" name="extra_1" id="content" cols="30" rows="3">{{ $extra_1 or '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Indicaciones</label>
                                <textarea class="form-control" name="extra_2" id="content" cols="30" rows="3">{{ $extra_2 or '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Protocolo</label>
                                <textarea class="form-control" name="extra_3" id="content" cols="30" rows="3">{{ $extra_3 or '' }}</textarea>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="feature_image">Imagen principal</label>
                                @if($product->feature_image)
                                    <p><img src="/uploads/products/{{ $product->feature_image }}" height="200"></p>
                                @endif
                                <p>Sube otra imagen. La actual sera remplazada.</p>
                                <input class="form-control" type="file" name="feature_image">
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="featured" value="1" @if($product->featured == 1) checked @endif> Producto destacado
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="active" value="1" @if($product->active == 1) checked @endif> Producto activo
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-success pull-right" type="submit">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
