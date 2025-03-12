<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $articles = ArticleNews::with(['category'])
        ->where('is_featured', 'not_featured')
        ->latest()
        ->take(3)
        ->get();

        $authors = Author::all();

        // $featured_articles = ArticleNews::with(['category'])
        // ->where('is_featured', 'featured')
        // ->inRandomOrder()
        // ->take(3)
        // ->get();
        $latest_featured_article = ArticleNews::with(['category'])
        ->where('is_featured', 'featured')
        ->latest('updated_at')
        ->first();



        // $gallery_articles = ArticleNews::whereHas('category', function ($query) {
        //     $query->where('name', 'Galeri');
        // })
        // ->where('is_featured', 'not_featured')
        // ->latest()
        // ->take(6)
        // ->get();
        $gallery_articles = ArticleNews::where('is_featured', 'not_featured')
        ->latest()
        ->take(6)
        ->get();

        $current_articles = ArticleNews::latest()
        ->take(3)
        ->get();

        $gallery_featured_articles = ArticleNews::whereHas('category', function ($query) {
            $query->where('name', 'Galeri');
        })
        ->where('is_featured', 'featured')
        ->inRandomOrder()
        ->first();

        return view('front.index', compact('gallery_articles','gallery_featured_articles','categories','articles','authors','latest_featured_article','current_articles'));
    }

    public function category(Category $category)
    {
        $categories = Category::all();

        return view('front.category', compact('category', 'categories'));
    }

    public function details (ArticleNews $articleNews)
    {
        return view('front.details', compact('articleNews'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'keyword' => ['required', 'string', 'max:255']
        ]);

        $categories = Category::all();

        $keyword = $request->keyword;

        $articles = ArticleNews::with(['category', 'author'])
        ->where('name', 'like', '%' . $keyword . '%')->paginate(6);
        
        return view('front.search', compact('articles','keyword','categories'));
    }
}
