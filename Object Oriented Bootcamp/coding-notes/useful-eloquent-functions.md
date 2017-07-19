## Eloquent Functions

- Dynamic Scopes
https://laravel.com/docs/5.0/eloquent#query-scopes
```
class User extends Model {

    public function scopeOfType($query, $type)
    {
        return $query->whereType($type);
    }

}
```

And then
```
$users = User::ofType('member')->get();
```