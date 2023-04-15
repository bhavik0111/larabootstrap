@extends('layouts.app')
@section('content')
	<h1>Blog Posts</h1>
	
	@foreach ($blogs as $blog)
		<div>
			<h2>{{ $blog->title }}</h2>
			<p>{{ $blog->content }}</p>
			<a href="{{ route('blog.show', ['id' => $blog->id]) }}">Read more</a>
		</div>
	@endforeach
@endsection