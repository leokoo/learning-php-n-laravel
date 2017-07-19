# Controller

links: <br>
http://php.net/manual/en/language.exceptions.php <br>
http://php.net/manual/en/reserved.variables.server.php <br>
https://laravel.com/docs/5.4/helpers#method-view <br>
https://laravel.com/docs/5.4/views#view-composers

- A controller is an entry point for a route
- The router directs traffic to the controller, which then acts as the project manager
- Gets data needed and passes it to view

To get any partial to load on any pages, we can use the view composer, either by the view facade or the view helper function <br><br>
<strong>Definition</strong>
- View composers are callbacks or class methods that are called when a view is rendered. If you have data that you want to be bound to a view each time that view is rendered, a view composer can help you organize that logic into a single location.
```
    public function boot()
    {
        // https://laravel.com/docs/5.4/helpers#method-view
		// https://laravel.com/docs/5.4/views#view-composers
		view()->composer('layouts.sidebar', function($view){
			$view->with('archives', \App\Post::archives());
		});

	}
```