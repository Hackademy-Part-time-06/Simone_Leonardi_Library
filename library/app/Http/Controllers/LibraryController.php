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

       public function create () {
        return view('create');
       }
       
       public function store(BookRequest $request) {

        //$request->validate([
         //   "title" => "required|string",
          //  "pages" => "required|numeric",
          //  "author" => "required",
        //]);

        $path_img = '';

        if($request->hasFile('image')&& $request->file('image')->isValid()) {
          $path_name = $request->file('image')->getClientOriginalName();
          $path_image = $request->file('image')->storeAs('public/images/cover, $path_name');
        }



          Book::create([
            'title' => $request->input('title'),
            'pages' => $request->input('pages'),
            'author' => $request->author, 
            'year' => $request->year,
            'image'=>$path_image
          ]);

          return redirect()->route('books.index')->with('success', 'Libro inserito con successo!');
    }

    public function show($book) {
         $book = Book::find($book);
         if (!$book) {
            abort(404);
        }
            return view('show', ['book'=>$book]); //sia con uno che l'altro metodo
   }
}