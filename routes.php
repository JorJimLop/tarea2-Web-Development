<?php
    require_once('Book.php');
    require_once('Author.php');
    require_once('Publisher.php'); 
   
  Route::get('/', function () { return view('welcome'); });

 
 Route::resource('author', 'AuthorController');
  Route::resource('book', 'BookController');
  Route::resource('publisher', 'PublisherController');
    Route::dispatch();
?>
