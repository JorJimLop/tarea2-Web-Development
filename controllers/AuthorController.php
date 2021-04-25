<?php
  // file: controllers/ProfessorController.php

  require_once('author.php');

  class AuthorController extends Controller {

    public function index() {  
      return view('views/authors/index',
       ['author'=>Author::all(),
        'title'=>'authors List']);
    }

    public function show($id) {
      $aut = Author::find($id);
      return view('views/authors/show',
        ['author'=>$aut,
         'title'=>'authors Detail']);
    }
  }
?>