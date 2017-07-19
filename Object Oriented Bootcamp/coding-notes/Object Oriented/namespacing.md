## Why use namespacing?
- As a way to label or organize your classes. Especially if your project might be bigger and you might have two classes with the same name.
- Without Namespace, the classes will all be in the global scale

## Autoload example
- Note that instead of calling the root namespace as Acme, we should call it whatever the product represents. If it's an app, then App. Or BaseCamp or LaraCast
- We then need to specify the root directory for the namespace. In this example, we're using 'src' as our root directory

```
{
	"autoload": {
		"psr-4": {
			"Acme\\": "src"
		}
	}
}
```

## Other things to remember

- Every time you update the namespaces, run
```
composer dump-autoload
```
- Don't forget to require the autoloader