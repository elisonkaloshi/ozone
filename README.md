# ozone
A package that manage ip addresses on Laravel Framework

## Install on laravel project

`composer require elison/ozone`

### Add the provider in the app.php

`config/app.php`

`\Elison\Ozone\OzoneProvider::class,`

## Requirements

`laravel project`

`composer v2`

## Usage

`php artisan migrate` -> create necessary tables

Add records in the tables

### Add middleware to routes
```
Route::get('/', function () {
    return view('welcome');
})->middleware(\Elison\Ozone\Http\Middleware\OzoneMiddleware::class);
```
