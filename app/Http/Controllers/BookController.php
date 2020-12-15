<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function ListBook(Request $request){

       $Books = Book::all();

       return \response(json_encode($Books),200);

    }
    
    public function PostCreate(Request $request){
        $book = new  Book();
        $book->descripcion = $request->descripcion;
        $book->cantidad = $request->cantidad;
        $book->autor = $request->autor;
        $book->save();
        return response()->json(['success'=>'Data is successfully added']);
    }
    public function Book(){

    }
}
