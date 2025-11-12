<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{
    // display list
    public function index(Request $request)
    {
        $query = News::with('author')->latest('tanggal');
        
        // Filter
        if ($request->has('kategori') && $request->kategori != '') {
            $query->where('kategory', $request->kategori);
        }
        
        // Search fungs
        if ($request->has('search') && $request->search != '') {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');

                // 'author'
                $q->orWhereHas('author', function($authorQuery) use ($request) {
                    $authorQuery->where('name', 'like', '%' . $request->search . '%');
                });
            });
        }
        
        $news = $query->paginate(12);
        
        // filter kategori
        $categories = News::distinct()->pluck('kategory')->filter();
        
        return view('news.index', compact('news', 'categories'));
    }


    // spesifik news
    public function show($slug)
    {

        $news = News::with('author')->where('slug', $slug)->firstOrFail();
        
        // Get related news 
        $relatedNews = News::with('author')
            ->where('kategory', $news->kategory)
            ->where('id', '!=', $news->id)
            ->latest('tanggal')
            ->take(3)
            ->get();
        
        
        if ($relatedNews->count() < 3) {
            
            $additionalNews = News::with('author')
                ->where('id', '!=', $news->id)
                ->whereNotIn('id', $relatedNews->pluck('id'))
                ->latest('tanggal')
                ->take(3 - $relatedNews->count())
                ->get();
            
            $relatedNews = $relatedNews->merge($additionalNews);
        }
        
        return view('news.show', compact('news', 'relatedNews'));
    }
}