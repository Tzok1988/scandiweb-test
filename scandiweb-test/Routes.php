<?php

ob_start();

Route::get('/', function () {
    ProductController::index();
});

Route::get('/add-product', function () {
    ProductController::create();
});

Route::post('/store-product', function () {
    ProductController::add();
});

Route::post('/mass-delete', function () {
    ProductController::delete();
});

ob_end_flush();
