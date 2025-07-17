<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "hi there";
});

Route::get('/jobs', function () {
    return "Available jobs";
});
