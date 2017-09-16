@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear publicación <a class="pull-right" href="/admin/publicaciones">< volver</a></div>
                    <div class="panel-body">
                        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Titulo*</label>
                                <input class="form-control" type="text" name="title" placeholder="Título de la publicación">
                            </div>
                            <div class="form-group">
                                <label>Tipo de publicación*</label>
                                <select name="category_id" class="form-control">
                                    <option value="1" selected>Noticia</option>
                                    <option value="2">Promoción</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Contenido*</label>
                                <textarea class="form-control" name="body" id="content" cols="30" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="feature_image">Banner/Imagen*</label>
                                <input class="form-control" type="file" name="banner">
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="1" name="featured"> Publicación destacada
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="active" value="1" checked> Publicación visible
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
        $(function() {
            $('#content').summernote()
        });
    </script>
@endsection
