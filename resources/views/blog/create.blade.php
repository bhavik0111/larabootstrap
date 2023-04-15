@extends('layouts.app')
@section('content')
	<h1>Create Blog Post</h1>
	<form action="{{ route('blog.store') }}" method="POST">
		@csrf
		<div>
			<label for="title">Title:</label>
			<input type="text" name="title" id="title">
		</div>
		<div>
			<label for="content">Content:</label>
			<textarea name="content" id="content"></textarea>
		</div>
			<button type="submit">Create</button>
	</form>
@endsection