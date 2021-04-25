<?php
    require_once('Book.php');
    require_once('Author.php');
    require_once('Publisher.php'); 
   
  //Route::get('/', function () { return view('welcome'); });
    Route::get('/',function() { echo 'HOLA MUNDO!! Tarea 1, Jordan Jiménez López!'; });
    

 
 Route::resource('author', 'AuthorController');
  Route::resource('book', 'BookController');
  Route::resource('publisher', 'PublisherController');
    Route::dispatch();
?>
