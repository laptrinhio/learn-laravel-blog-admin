@extends('_layouts.default')

@section('content')

<h1>{{{ $post->title }}}</h1>

<p class="created_at">Created at {{ date('Y-m-d', strtotime($post->created_at)) }} by {{ $post->user->name }}</p>
<p>{{{ $post->body }}}</p>

@stop