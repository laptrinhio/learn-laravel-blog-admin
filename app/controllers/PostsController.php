<?php

class PostsController extends \BaseController
{
	public function getIndex()
	{
		$posts = Post::with('user')->get();
		return View::make('posts.index')->with('posts', $posts);
	}

	public function getPost($id)
	{
		$post = Post::with('user')->find($id);
		return View::make('posts.post')->with('post', $post);
	}
}