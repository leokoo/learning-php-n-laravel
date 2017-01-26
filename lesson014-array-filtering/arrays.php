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

// $unpublishedPosts = array_filter($posts, function ($post) {
// 	// putting the bang ensures that only unpublished posts are shown in the var_dump results
// 	return ! $post->published;
// });

// var_dump($unpublishedPosts);

// If we want to change all the statuses in the array to true, we then use array_map
$modified = array_map(function ($post) {
	$post->published = true;
	return $post;
}, $posts);

var_dump($modified);