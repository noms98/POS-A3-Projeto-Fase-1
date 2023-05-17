<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $jsonarray = [
        'hello_url'=>'/hello',
    ];

    $jsonarray=json_encode($jsonarray);

    return var_dump(json_decode($jsonarray));  
});

Route::get('/hello', function () {
    return 'Hello, World!';
});
