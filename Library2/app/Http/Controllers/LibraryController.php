<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
   public function index() {

    $books = Book::all();
    return view('index',['books' => $books]);

   }

   public function create() {

   return view('create');

   }

   public function store(BookRequest $request) {

      $path_image = '';

      if($request->hasFile('image') && $request -> file('image')->isValid()) {
         $file_name = $request->file('image') -> getClientOriginalName();
         $path_image = $request->file('image') -> storeAs('public/images/cover', $file_name); 
      }

   //$request->validate([
     // 'title'=>"required|string",
      //'pages'=>"required",
      //'author'=>"required|string",
      //'year'=>"required",
   //]);
    
   Book::create([
      'title'=>$request->title,
      'pages'=>$request->pages,
      'author'=>$request->author,
      'year'=>$request->year,
      'images'=>$path_image,
   ]);

   return redirect()->route('books.index')->with(['success' => 'Il libro è stato inserito']);
   }

   public function show($book) {
        
      $book = Book::find($book);
      if (!$book) {
          abort(404);
                  }
      return view('show',['book' => $book]);
}
}