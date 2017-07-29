## Routing & Controllers

You can set nicknames for complex routes, and also because linking them by name means you don’t have to rewrite your frontend links if the paths change

```
// Defining a route with name in routes/web.php: 
Route :: get ( 'members/{id}' , 'MembersController@show' ) -> name ( 'members.show' ); 
// Link the route in a view using the route() helper 
< a href = "<?php echo route('members.show', ['id' => 14]); ?>" >
```