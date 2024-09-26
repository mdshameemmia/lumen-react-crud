<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BookController extends Controller
{

    public function index()
    {
        $books  = Book::all();
        return  response()->json([
            'status' => 200,
            'books' => $books
        ]);
    }


    public function edit($id)
    {

        $book = Book::where('id', $id)->first();
        return response()->json([
            "id" => $book,
            'status' => 200,
        ]);
    }

    public function update(Request $request, $id)
    {
        return $request->all();
        $book = Book::find($id);
        $book->name = $request->name;
        return response()->json([
            'book' => $book,
            'status' => 200
        ]);
    }
}
