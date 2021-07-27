<?php

Route::get('sample-route', function() {
    return 'test';
})->middleware(OzoneMiddleware::class);
