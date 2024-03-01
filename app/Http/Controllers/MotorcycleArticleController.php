<?php

namespace App\Http\Controllers;

use App\Models\MotorcycleArticle;
use Illuminate\Http\Request;

class MotorcycleArticleController extends Controller
{
    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'author' => 'required|max:255',
        ]);

        MotorcycleArticle::create($request->all());

        return redirect()->route('articles.index')->with('success','Article created successfully.');
    }
    public function index()
    {
        $articles = MotorcycleArticle::all(); // Pobiera wszystkie artykuły z bazy danych
        return view('index', compact('articles')); // Przekazuje artykuły do widoku
    }
}