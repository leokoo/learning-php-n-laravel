<?php

class Post 
{
	public $title;

// published is used as a boolean.
	public $published;

		public function __construct($title, $published)
	{
		$this->title = $title;
		$this->published = $published;
	}
}

$posts = [
	new Post('My First Post', true),
	new Post('My Second Post', true),
	new Post('My Third Post', true),
	new Post('My Last Post', false)
];

$unpublishedPosts = array_filter($posts, function ($post) {
	return ! $post->published;
});

var_dump($unpublishedPosts);