## Routing & Controllers

- You can set nicknames for complex routes, and also because linking them by name means you don’t have to rewrite your frontend links if the paths change

```
// Defining a route with name in routes/web.php: 
Route :: get ( 'members/{id}' , 'MembersController@show' ) -> name ( 'members.show' ); 
// Link the route in a view using the route() helper 
< a href = "<?php echo route('members.show', ['id' => 14]); ?>" >
```

## Grouping routes
- You can also define routes within a group. And then pass them through some middleware.

```
Route::group ([ 'middleware' => 'auth' ], function (){ 
	Route::get ( 'dashboard' , function () { return view ( 'dashboard' ); }); 
	Route :: get ( 'account' , function () { return view ( 'account' ); }); 
});
```

## Prefixing routes
- If you have a group of routes that share a segment of their path—for example, if your site’s API is prefixed with /api, you can use route groups to simplify this structure
```
Route::group ([ 'prefix' => 'api' ], function () { 
	Route::get ( '/' , function () { 
	// Handles the path /api 
	}); 
	Route::get ( 'users' , function () { 
	// Handles the path /api/users 
	}); 
});
```

## Passing variables to views
```
Route::get ( 'tasks' , function () { 
	return view ( 'tasks.index' ) 
	-> with ( 'tasks' , Task :: all ()); 
});
```

## Share variables with every view

Sometimes it can become a hassle to pass the same variables over and over. There may be a variable that you want accessible to every view in the site, or to a certain class of views or a certain included subview—for example, all views related to tasks, or the header partial. It’s possible to share certain variables with every template or just certain templates, like in the following code:

```
view () -> share ( 'variableName' , 'variableValue' );
```

# Controllers

### To generate a controller
```
php artisan make:controller TasksController
```

### Simple Controller
```
class TasksController extends Controller 
{
    public function home () 
    { 
        return 'Hello, World!'; 
    }
}
```

### How to find all routes?

Run from the command line
```
php artisan route:list
```


