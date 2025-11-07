<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ShopController extends Controller
{
    /**
     * Display a listing of products
     */
    public function index(Request $request)
    {
        $query = Shop::latest();
        
        // Search functionality
        if ($request->has('search') && $request->search != '') {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }
        
        // Price filter
        if ($request->has('min_price') && $request->min_price != '') {
            $query->where('price', '>=', $request->min_price);
        }
        
        if ($request->has('max_price') && $request->max_price != '') {
            $query->where('price', '<=', $request->max_price);
        }
        
        // Sort by price
        if ($request->has('sort')) {
            switch ($request->sort) {
                case 'price_low':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_high':
                    $query->orderBy('price', 'desc');
                    break;
                case 'newest':
                    $query->latest();
                    break;
                default:
                    $query->latest();
            }
        }
        
        $products = $query->paginate(12);
        
        return view('shop.index', compact('products'));
    }

    /**
     * Display the specified product
     */
    public function show($slug)
    {
        $product = Shop::where('slug', $slug)->firstOrFail();
        
        // Get related products (excluding current product)
        $relatedProducts = Shop::where('id', '!=', $product->id)
            ->latest()
            ->take(4)
            ->get();
    
        return view('shop.show', compact('product', 'relatedProducts'));
    }
}