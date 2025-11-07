@extends('layouts.app')

@section('title', 'Latest News')

@section('content')
<section class="relative py-20 bg-gradient-to-br from-[#002343] to-[#0157B2] overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Latest 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#01C0DB] to-cyan-300">
                    News
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
                Stay updated with the latest developments in robotics, technology, and innovation
            </p>
        </div>
    </div>
</section>

<section class="py-8 bg-white border-b">
    <div class="container mx-auto px-4">
        <form method="GET" action="{{ route('news.index') }}" class="flex flex-wrap gap-4 items-center justify-between">
            <div class="flex flex-wrap gap-4">
                <div class="relative">
                    <input type="text" 
                           name="search" 
                           value="{{ request('search') }}"
                           placeholder="Search news..." 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#01C0DB] focus:border-[#01C0DB] focus:outline-none">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

                <select name="kategori" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#01C0DB] focus:border-[#01C0DB] focus:outline-none">
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}" {{ request('kategori') == $category ? 'selected' : '' }}>
                            {{ $category }}
                        </option>
                    @endforeach
                </select>

                <button type="submit" class="px-6 py-2 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] hover:from-[#01C0DB] hover:to-[#0157B2] text-white rounded-lg transition-all duration-300 transform hover:scale-105 shadow-md">
                    <i class="fas fa-filter mr-2"></i>Filter
                </button>
            </div>

            @if(request()->hasAny(['search', 'kategori']))
                <a href="{{ route('news.index') }}" class="px-4 py-2 text-[#0157B2] hover:text-[#01C0DB] transition-colors duration-300">
                    <i class="fas fa-times mr-2"></i>Clear Filters
                </a>
            @endif
        </form>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        @if($news->count() > 0)
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 mb-12">
                @foreach($news as $article)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up">
                        <div class="relative overflow-hidden">
                            <img src="{{ Storage::url($article->thumbnail) }}" 
                                 class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110" 
                                 alt="{{ $article->title }}">
                            <div class="absolute top-4 left-4">
                                <span class="bg-gradient-to-r from-[#0157B2] to-[#01C0DB] text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    {{ $article->kategory }}
                                </span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <i class="fas fa-calendar-alt mr-2 text-[#0157B2]"></i>
                                <span>{{ \Carbon\Carbon::parse($article->tanggal)->format('M d, Y') }}</span>
                                <span class="mx-2">•</span>
                                <i class="fas fa-user mr-2 text-[#0157B2]"></i>
                                <span>{{ $article->ditulis_oleh }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-[#002343] mb-3 hover:text-[#0157B2] transition-colors duration-300">
                                <a href="{{ route('news.show', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                            </h3>
                            <div class="text-gray-600 mb-4 line-clamp-3">
                                {!! Str::limit(strip_tags($article->description), 150) !!}
                            </div>
                            <a href="{{ route('news.show', $article->slug) }}" 
                               class="inline-flex items-center text-[#0157B2] hover:text-[#01C0DB] font-semibold transition-colors duration-300 group">
                                Read More
                                <i class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="flex justify-center">
                {{ $news->appends(request()->query())->links() }}
            </div>
        @else
            <div class="text-center py-16">
                <div class="text-6xl text-gray-300 mb-4">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-600 mb-2">No News Found</h3>
                <p class="text-gray-500">
                    @if(request()->hasAny(['search', 'kategori']))
                        Try adjusting your search criteria or <a href="{{ route('news.index') }}" class="text-[#0157B2] hover:text-[#01C0DB]">view all news</a>.
                    @else
                        Check back later for the latest updates!
                    @endif
                </p>
            </div>
        @endif
    </div>
</section>

<section class="py-16 bg-gradient-to-r from-[#0157B2] to-[#01C0DB]">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Stay Updated
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Subscribe to our newsletter and never miss the latest news and updates from the world of robotics.
        </p>
        <div class="max-w-md mx-auto">
            <div class="flex gap-2">
                <input type="email" 
                       placeholder="Enter your email..." 
                       class="flex-1 px-4 py-3 rounded-lg border-0 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-[#0157B2]">
                <button class="px-6 py-3 bg-white text-[#0157B2] hover:bg-gray-100 font-semibold rounded-lg transition-all duration-300">
                    Subscribe
                </button>
            </div>
        </div>
    </div>
</section>
@endsection