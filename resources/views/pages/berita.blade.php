<!-- @extends('layouts.app')

@section('content')

<section id="news" class="pt-28 pb-16 sm:py-24 bg-gray-50 relative overflow-hidden">
    <div class="absolute inset-0 gradient-overlay"></div>
    <div class="container mx-auto px-4 relative z-10" data-aos="fade-up">
        <div class="text-center mb-16 sm:mb-20">
            <div class="inline-block">
                <span class="inline-block px-4 sm:px-6 py-2 sm:py-3 bg-cyan-100 text-[#0157B2] rounded-full text-sm font-bold mb-4 sm:mb-6 floating-animation">
                    <i class="fas fa-newspaper mr-2"></i>
                    Latest News
                </span>
            </div>
            <h2 class="text-4xl sm:text-5xl md:text-6xl font-black text-[#002343] mb-4 sm:mb-6 leading-tight">
                Stay Updated with Our 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0157B2] to-[#01C0DB] pulse-animation">
                    Latest News
                </span>
            </h2>
            <p class="text-lg sm:text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Discover the latest developments in robotics, Industry 5.0 innovations, and updates from our sustainable learning platform and community.
            </p>
        </div>
        
        <div class="mb-12 sm:mb-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @if($news && $news->count() > 0)
                    @foreach($news->take(6) as $article)
                    <div class="bg-white rounded-2xl sm:rounded-3xl shadow-lg overflow-hidden card-hover group">
                        <div class="relative overflow-hidden">
                            <img src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : asset('assets/images/news-default.jpg') }}" 
                                 class="w-full h-48 sm:h-64 object-cover transition-transform duration-500 group-hover:scale-110" 
                                 alt="{{ $article->title }}">
                            <div class="absolute top-4 left-4">
                                <span class="bg-gradient-to-r from-[#0157B2] to-[#01C0DB] text-white px-3 sm:px-4 py-1 sm:py-2 rounded-full text-xs sm:text-sm font-bold">
                                    <i class="fas fa-tag mr-1"></i>
                                    {{ $article->kategory ?? 'News' }}
                                </span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                        </div>
                        <div class="p-6 sm:p-8">
                            <div class="flex flex-col sm:flex-row sm:items-center text-xs sm:text-sm text-gray-500 mb-3 sm:mb-4 space-y-2 sm:space-y-0">
                                <div class="flex items-center">
                                    <i class="fas fa-calendar-alt mr-2 text-[#0157B2]"></i>
                                    <span class="font-semibold">{{ \Carbon\Carbon::parse($article->tanggal)->format('M d, Y') }}</span>
                                </div>
                                <span class="hidden sm:block mx-3 text-gray-300">•</span>
                                <div class="flex items-center">
                                    <i class="fas fa-user mr-2 text-[#0157B2]"></i>
                                    <span class="font-semibold">{{ $article->ditulis_oleh ?? 'Admin' }}</span>
                                </div>
                            </div>
                            <h5 class="text-lg sm:text-2xl font-bold text-[#002343] mb-3 sm:mb-4 group-hover:text-[#0157B2] transition-colors duration-300 leading-tight">
                                <a href="{{ route('news.show', $article->slug) }}">{{ $article->title }}</a>
                            </h5>
                            <p class="text-gray-600 mb-4 sm:mb-6 line-clamp-3 leading-relaxed text-sm sm:text-base">
                                {!! Str::limit($article->description, 150) !!}
                            </p>
                            <a href="{{ route('news.show', $article->slug) }}" class="inline-flex items-center text-[#0157B2] hover:text-[#01C0DB] font-bold transition-all duration-300 transform hover:scale-105 text-sm sm:text-base">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="col-span-full text-center py-16 sm:py-20 bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl sm:rounded-3xl">
                        <div class="text-gray-400 mb-6 floating-animation">
                            <i class="fas fa-newspaper text-6xl sm:text-8xl"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-gray-600 mb-4">No News Available</h3>
                        <p class="text-gray-500 text-base sm:text-lg">News articles will appear here once they are added by the admin.</p>
                    </div>
                @endif
            </div>
        </div>
        
        <div class="text-center">
            <a href="{{ route('news.index') }}" class="inline-flex items-center justify-center px-8 sm:px-12 py-4 sm:py-5 border-3 border-[#0157B2] text-[#0157B2] hover:bg-[#0157B2] hover:text-white font-bold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-base sm:text-lg">
                <i class="fas fa-newspaper mr-3"></i>
                View All News
                <i class="fas fa-arrow-right ml-3"></i>
            </a>
        </div>
    </div>
</section>

@endsection -->