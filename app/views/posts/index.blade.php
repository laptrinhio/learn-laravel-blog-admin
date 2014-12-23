@extends('_layouts.default')

@section('content')


@foreach($posts as $post)

<article>
	<h2>{{ link_to_route('post', $post->title, array($post->id)) }}</h2>
	<p class="created_at">Created at {{ date('Y-m-d', strtotime($post->created_at)) }} by {{ $post->user->name }}</p>
	<p>{{{ str_limit($post->body) }}}</p>
	<p>{{ link_to_route('post', 'Read More >>', array($post->id)) }}</p>

</article>
@endforeach


@stop