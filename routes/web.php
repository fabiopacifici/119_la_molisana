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
    return view('guests.home');
})->name('guests.home');

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


    /* $data = [
        'products' => [
            'lunga' => $long,
            'corta' => $short,
            'cortissima' => $veryshort,
        ]
    ];
 */

    return view('guests.products.index', ['products' => $products]);
})->name('guests.products.index');


Route::get('/products/{id}', function ($id) {


    abort_unless($id >= 0 && $id < count(config('db.products')), 404);

    $product = config('db.products')[$id];
    //dd($product);
    // TODO: handle the 404 case

    return view('guests.products.show', compact('product'));
})->name('guests.products.show');


Route::get('/posts', function () {


    $posts = config('db.posts');
    // dd($posts);
    return view('guests.posts.index', compact('posts'));
})->name('guests.posts.index');

Route::get('/posts/{id}', function ($id) {

    abort_unless($id >= 0 && $id < count(config('db.posts')), 404);
    $post = config('db.posts')[$id];
    return view('guests.posts.show', compact('post'));
})->name('guests.posts.show');
