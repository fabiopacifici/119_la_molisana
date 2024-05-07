<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function () {

    $products = config('db.products');

    //dd($products);
    // filter the products for only tipo: lungha
    //$long = array_filter($products, fn ($product) => $product['tipo'] == 'lunga');
    //dd($long);
    // filter the products for only tipo: corta
    // $short = array_filter($products, fn ($product) => $product['tipo'] == 'corta');
    // filter the products for only tipo: cortissima
    //$veryshort = array_filter($products, fn ($product) => $product['tipo'] == 'cortissima');


    // Use collections instead
    $productsCollection = collect($products);
    $long = $productsCollection->filter(fn ($product) => $product['tipo'] == 'lunga');
    //dd($long);
    $short = $productsCollection->filter(fn ($product) => $product['tipo'] == 'corta');
    $veryshort = $productsCollection->filter(fn ($product) => $product['tipo'] == 'cortissima');


    $data = [
        'products' => [
            'lunga' => $long,
            'corta' => $short,
            'cortissima' => $veryshort,
        ]
    ];


    return view('products', $data);
})->name('products');

Route::get('/blog', function () {


    $posts = config('db.posts');
    // dd($posts);
    return view('blog', compact('posts'));
})->name('blog');
