<!-- @extends('layouts.app')
@section('content')
	<h1>Blog views</h1> -->
	<!-- @foreach ($blogs as $blog) -->
		{{ $blog->title }}
		{{ $blog->content }}
	<!-- @endforeach -->
<!-- @endsection -->