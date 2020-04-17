<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{

  //Returns the index view resources/views/index.blade.php
  public function index(){
    return view('albums.index');
  }

  //Returns the create view resources/views/create.blade.php
  public function create(){
    return view('albums.create');
  }


}
