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
	new Post('My Fourth Post', false)
];

// var_dump($posts);

// $unpublishedPosts = array_filter($posts, function ($post) {
// 	// putting the bang ensures that only unpublished posts are shown in the var_dump results
// 	return ! $post->published;
// });

// var_dump($unpublishedPosts);

// If we want to change all the statuses in the array to true, we then use array_map
// $modified = array_map(function ($post) {
// 	$post->published = true;
// 	return $post;
// }, $posts);

// var_dump($modified);

// foreach ($posts as $index => $post) 
// {
// 	# code...
// 	$posts[index] = (array) $post;
// }
$posts = array_map(function ($post) 
	{
		return(array) $post;
	}, $posts);


// var_dump($posts);
// unlike the previous example, we're fetching a key called title.
$titles = array_column($posts, 'title');

var_dump($titles);