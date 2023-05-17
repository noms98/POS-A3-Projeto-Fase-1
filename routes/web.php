<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    $jsonarray = [
        'hello_url'=>'/hello',
    ];

    $jsonarray=json_encode($jsonarray);

    var_dump(json_decode($jsonarray));

    // return ['hello_url' => '/hello'];
});

Route::get('/hello', function () {
    return 'Hello, World!';
});
