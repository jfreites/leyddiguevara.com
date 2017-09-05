@extends('site.layout')

@section('content')
    <div class="gdlr-content" style="margin-top: 200px; height: 300px;">
		<h2>{{ $content->title }}</h2>
		<p><small>Publicado el {{ $content->created_at->format('d-m-Y') }}</small></p>
		<p>{{ $content->body }}</p>
    </div>
@endsection()