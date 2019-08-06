# descriptive
A highly opioniated PHP library for auto generating openapi documentation based on your Laravel applications structure.

## To create a development setup:

Run the following in the parent folder:

```
composer create-project --prefer-dist laravel/laravel descriptive-test
cd descriptive-test
```

Add the following to it's descriptive-test/composer.json

```
    "repositories": [
        {
            "type": "path",
            "url": "../descriptive"
        }
    ],
```

run the following from the descriptive-test folder:

```
composer require mrhn/descriptive
```

You should now be able to run:

```
php artisan descriptive:openapi
```
