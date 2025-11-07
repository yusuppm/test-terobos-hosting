@extends('layouts.app')

@section('title', $news->title)

@section('content')

<section class="relative py-20 bg-gradient-to-br from-[#002343] to-[#0157B2] overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            <nav class="mb-8">
                <a href="{{ route('news.index') }}" class="text-blue-200 hover:text-white transition-colors duration-300">
                    <i class="fas fa-arrow-left mr-2"></i>Back to News
                </a>
            </nav>
            <div class="mb-4">
                <span class="inline-block bg-gradient-to-r from-[#0157B2] to-[#01C0DB] text-white px-4 py-2 rounded-full text-sm font-semibold">
                    {{ $news->kategory }}
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                {{ $news->title }}
            </h1>
            <div class="flex flex-wrap items-center justify-center text-blue-200 gap-x-6 gap-y-2">
                <div class="flex items-center">
                    <i class="fas fa-user mr-2 text-[#01C0DB]"></i>
                    <span>{{ $news->ditulis_oleh }}</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-calendar-alt mr-2 text-[#01C0DB]"></i>
                    <span>{{ \Carbon\Carbon::parse($news->tanggal)->format('M d, Y') }}</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-clock mr-2 text-[#01C0DB]"></i>
                    <span>{{ \Carbon\Carbon::parse($news->created_at)->diffForHumans() }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="mb-12 relative overflow-hidden rounded-2xl shadow-2xl" data-aos="fade-up">
                <img src="{{ Storage::url($news->thumbnail) }}" 
                     class="w-full h-96 object-cover" 
                     alt="{{ $news->title }}">
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
            </div>

            <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-delay="200">
                <div class="text-gray-700 leading-relaxed">
                    {!! $news->description !!}
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-gray-200" data-aos="fade-up" data-aos-delay="400">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div>
                        <h3 class="text-lg font-semibold text-[#002343] mb-2">Share this article</h3>
                        <div class="flex flex-wrap gap-2">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 bg-[#0157B2] hover:bg-[#002343] text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-facebook-f mr-2"></i>Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($news->title) }}" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 bg-[#01C0DB] hover:bg-[#0157B2] text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-twitter mr-2"></i>Twitter
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 bg-[#0157B2] hover:bg-[#002343] text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-linkedin-in mr-2"></i>LinkedIn
                            </a>
                            <a href="whatsapp://send?text={{ urlencode($news->title . ' ' . request()->fullUrl()) }}" 
                               class="inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg transition-colors duration-300">
                                <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                            </a>
                        </div>
                    </div>
                    <div class="text-left sm:text-right w-full sm:w-auto mt-4 sm:mt-0">
                        <p class="text-sm text-gray-500">Published on</p>
                        <p class="text-lg font-semibold text-[#002343]">{{ \Carbon\Carbon::parse($news->tanggal)->format('F d, Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if(isset($relatedNews) && $relatedNews->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-[#002343] mb-12" data-aos="fade-up">
                Related Articles
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($relatedNews as $related)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105 group" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="relative overflow-hidden">
                            <img src="{{ Storage::url($related->thumbnail) }}" 
                                 class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110" 
                                 alt="{{ $related->title }}">
                            <div class="absolute top-4 left-4">
                                <span class="bg-gradient-to-r from-[#0157B2] to-[#01C0DB] text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    {{ $related->kategory }}
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <i class="fas fa-calendar-alt mr-2 text-[#0157B2]"></i>
                                <span>{{ \Carbon\Carbon::parse($related->tanggal)->format('M d, Y') }}</span>
                            </div>
                            <h3 class="text-lg font-bold text-[#002343] mb-3 group-hover:text-[#0157B2] transition-colors duration-300">
                                <a href="{{ route('news.show', $related->slug) }}">
                                    {{ $related->title }}
                                </a>
                            </h3>
                            <div class="text-gray-600 mb-4 line-clamp-2">
                                {!! Str::limit(strip_tags($related->description), 100) !!}
                            </div>
                            <a href="{{ route('news.show', $related->slug) }}" 
                               class="inline-flex items-center text-[#0157B2] hover:text-[#01C0DB] font-semibold transition-colors duration-300">
                                Read More
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

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

<button id="backToTop" class="fixed bottom-8 right-8 bg-[#0157B2] hover:bg-[#002343] text-white p-3 rounded-full shadow-lg transition-all duration-300 transform scale-0">
    <i class="fas fa-arrow-up"></i>
</button>

<script>
    // Back to top functionality
    window.addEventListener('scroll', function() {
        const backToTopButton = document.getElementById('backToTop');
        if (window.pageYOffset > 300) {
            backToTopButton.classList.remove('scale-0');
            backToTopButton.classList.add('scale-100');
        } else {
            backToTopButton.classList.remove('scale-100');
            backToTopButton.classList.add('scale-0');
        }
    });

    document.getElementById('backToTop').addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>
@endsection