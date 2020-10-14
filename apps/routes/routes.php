<?php
$routes = [];
$true_url = '';
Route::get('admin/home/:ad', function ($params) {
    var_dump($params);
});

Route::get('', function () {
    var_dump("ok");
});

Route::get('/about', function () {
    echo 'About Us';
});
