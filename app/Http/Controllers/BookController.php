<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        if (!$query) {
            return redirect()->back();
        }
        $response = Http::get('https://www.googleapis.com/books/v1/volumes', [
            'q' => $query,
            'maxResults' => 10,
        ]);
    
        $books = $response->json()['items'];

    return view('results', [
        'books' => $books,
    ]);

        }
    

    public function show($id)
    {
        $response = Http::get('https://www.googleapis.com/books/v1/volumes/' . $id);
        $book = $response->json();

        return view('details', [
            'book' => $book
        ]);
    }
}
