<?php

use Core\Application;

$app = new Application();

// $app::get('/','DashBoardController','index');
// $app::get('/test/{id}','HomeController','test3');
// $app::get('/work/test/{id}','HomeController','work');

$app::get('/category','CategoryController','index');
$app::get('/category/create','CategoryController','create');
$app::post('/category/store','CategoryController','store');
$app::get('/category/edit/{id}','CategoryController','edit');
$app::post('/category/update','CategoryController','update');
$app::get('/category/show/{id}','CategoryController','show');
$app::get('/category/delete/{id}','CategoryController','destroy');

$app::get('/description','DescriptionController','index');
$app::get('/description/create','DescriptionController','create');
$app::post('/description/store','DescriptionController','store');
$app::get('/description/edit/{id}','DescriptionController','edit');
$app::post('/description/update','DescriptionController','update');
$app::get('/description/show/{id}','DescriptionController','show');
$app::get('/description/delete/{id}','DescriptionController','destroy');


$app::post('/purchase/medicine_list','PurchaseController','medicine_list');
$app::post('/purchase/single_brand','PurchaseController','single_brand');

$app::get('/doc','DocController','index');
$app::get('/doc/create','DocController','create');
$app::get('/doc/datails/{id}','DocController','show');

$app->run();
