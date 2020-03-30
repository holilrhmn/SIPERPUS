<?php

Route::get('/', 'HomeController@index')->name('dashboard');

//Route Show Data  
Route::get('/author/data', 'DataController@authors')->name('author.data');
Route::get('/book/data', 'DataController@books')->name('book.data');
Route::get('/borrow/data', 'DataController@borrows')->name('borrow.data');

//Route Crud Author
Route::resource('author', 'AuthorController');
//Route Crud Book
Route::resource('book', 'BookController');

Route::get('borrow', 'BorrowController@index')->name('borrow.index');
Route::put('borrow/{borrowHistory}/return', 'BorrowController@returnBook')->name('borrow.return');

Route::get('report/top-book', 'ReportController@topBook')->name('report.top-book');
Route::get('report/top-user', 'ReportController@topUser')->name('report.top-user');