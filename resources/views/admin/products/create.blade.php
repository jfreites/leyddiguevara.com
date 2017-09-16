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
                        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Nombre*</label>
                                <input class="form-control" type="text" name="name" placeholder="Nombre del producto">
                            </div>
                            <div class="form-group">
                                <label for="name">Resumen</label>
                                <input class="form-control" type="text" name="resume" placeholder="Pequeña descripción">
                            </div>
                            <div class="form-group">
                                <label>Catálogo*</label>
                                <select id="catalog_chooser" name="catalog_id" class="form-control">
                                    <option selected>---- Elije un Catálogo ----</option>
                                    <option value="1">INNO</option>
                                    <option value="2">TEOSYAL</option>
                                </select>
                            </div>

                            <div id="catalogo_teosyal" class="hide">

                                <div class="form-group">
                                    <label>Categoría*</label>
                                    @foreach ($catTeosyal as $item)
                                        @if($item->children->count() > 0)
                                            <p><i class="zmdi zmdi-check-circle"></i>{{--<input type="checkbox" name="parent_cat_teosyal" value="{{ $item->id }}">--}} {{ $item->name }}</p>
                                            <ul style="list-style-type: none;">
                                                @foreach ($item->children as $child)
                                                    <li><input type="checkbox" data-parent="{{ $item->id }}" data-child="{{ $child->id }}" name="children_cat_teosyal" value="{{ $child->id }}"> {{ $child->name }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    @endforeach
                                </div>

                            </div>

                            <div id="catalogo_inno" class="hide">

                                <div class="form-group">
                                    <label>Categoría*</label>
                                    @if(count($catInno) > 0)
                                        <p>-----</p>
                                    @else
                                        <p>No existen categorías para este catálogo</p>
                                    @endif
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

                            </div>

                            <div class="form-group">
                                <label for="name">Descripción del producto*</label>
                                <textarea class="form-control" name="content" id="content" cols="30" rows="5"></textarea>
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

@section('scripts')
    <script>
        $('#catalog_chooser').on('change', function (e) {
            var selected = this.value;
            if (selected == 2) {
                $('#catalogo_inno').addClass('hide');
                $('#catalogo_teosyal').removeClass('hide');
            }
            if (selected == 1) {
                $('#catalogo_teosyal').addClass('hide');
                $('#catalogo_inno').removeClass('hide');
            }
        });
    </script>
@endsection
