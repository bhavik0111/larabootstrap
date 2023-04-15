@extends('layouts.app')
@section('content')
	<h1>Edit Blog Post</h1>
	<form action="{{ route('blog.update', ['id' => $blog->id]) }}" method="POST">
		@csrf
		@method('PUT')
		<div>
			<label for="title">Title:</label>
			<input type="text" name="title" id="title" value="{{ $blog->title }}">
		</div>
		<div>
			<label for="content">Content:</label>
			<textarea name="content" id="content">{{ $blog->content }}</textarea>
		</div>
			<button type="submit">Update</button>
	</form>
@endsection