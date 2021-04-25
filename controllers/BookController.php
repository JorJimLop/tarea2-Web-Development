<?php
  // file: controllers/ProfessorController.php

  require_once('Book.php');

  class BookController extends Controller {


    public function index() {  
      
    Route::get('book',function() { echo 'HOLA MUNDO!! Tarea 1, Jordan Jiménez López!'; });
    /*  return view('books/index',
       ['books'=>Book::all(),
        'title'=>'books List']);*/
    }

    public function show($id) {
      $book = Book::find($id);
      return view('books/show',
        ['books'=>$book,
         'title'=>'books Detail']);
    } 
  }
?>