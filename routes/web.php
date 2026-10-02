<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Listar livros
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Form de criação
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// Salvar livro
Route::post('/books', [BookController::class, 'store'])->name('books.store');

// Exibir um livro
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

// Form de edição
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');

// Atualizar livro
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');

// Excluir livro
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

Route::get('/', function () {
    return view('welcome');
});


// Listar categorias
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Form de criação
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

// Salvar livro
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

// Exibir um livro
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

// Form de edição
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

// Atualizar livro
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

// Excluir livro
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/', function () {
    return view('welcome');
});



// Listar Produtos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Form de criação
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Salvar Produto
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Exibir um Produto
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Form de edição
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Atualizar Produto
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Excluir Produto
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/', function () {
    return view('welcome');
});