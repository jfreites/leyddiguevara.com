@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar publicación <a class="pull-right" href="/admin/publicaciones">< volver</a></div>
                    <div class="panel-body">
                        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Titulo</label>
                                <input class="form-control" type="text" name="title" value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                                <label>Categoría</label>
                                <input class="form-control" value="{{ $post->category->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="name">Contenido</label>
                                <textarea class="form-control" name="body" id="content" cols="30" rows="5">{{ $post->body }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="feature_image">Banner/Imagen</label>
                                @if($post->banner)
                                    <p><img src="/uploads/posts/{{ $post->banner }}" height="200"></p>
                                @endif
                                <p>Sube otra imagen. La actual sera remplazada.</p>
                                <input class="form-control" type="file" name="banner">
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="active" value="1" @if($post->active == 1) checked @endif> Publicación activa
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
    <script>
        $(function() {
            $('#content').summernote()
        });
    </script>
@endsection
