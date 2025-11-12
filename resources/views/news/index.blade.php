@extends('layouts.app')

@section('title', 'Latest News')

@section('content')

<section id="hero-berita" class="relative bg-gradient-to-br from-[#002343] to-[#0157B2] overflow-hidden pt-20">
    {{-- ... (Tidak ada perubahan di Hero Section) ... --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-48 sm:w-72 h-48 sm:h-72 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-64 sm:w-96 h-64 sm:h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="pt-24 sm:pt-32 pb-24" data-aos="fade-up">
            <div class="text-center max-w-3xl mx-auto">
                
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white leading-tight">
                    Berita 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#01C0DB] to-cyan-300">
                        Terbaru
                    </span>
                </h1>
                
                <p class="mt-6 text-base sm:text-lg md:text-xl text-blue-100 leading-relaxed max-w-2xl mx-auto">
                    Tetap terinformasi dengan perkembangan terbaru di bidang robotika, teknologi, dan inovasi.
                </p>
                
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 pb-16 sm:pb-20">
    <div class="container mx-auto px-4">
        
        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 mb-12 relative z-10 -mt-16" data-aos="fade-up">
            <form method="GET" action="{{ route('news.index') }}" class="flex flex-wrap gap-4 items-center justify-between">
                <div class="flex flex-wrap gap-4 w-full md:w-auto">
                    <div class="relative flex-grow">
                        <input type="text" 
                               name="search" 
                               value="{{ request('search') }}"
                               placeholder="Cari berita..." 
                               class="pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#01C0DB] focus:border-[#01C0DB] focus:outline-none w-full">
                        <div class="absolute left-3 top-3.5 text-gray-400">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>

                    {{-- ===== [PERUBAHAN 1: TEKS DROPDOWN] ===== --}}
                    <div x-data="{ 
                            open: false, 
                            selected: '{{ request('kategori', '') }}', 
                            selectedText: '{{ request('kategori') ?: 'Semua Kategori' }}'  {{-- Diubah dari 'All Categories' --}}
                         }" 
                         class="relative flex-grow" @click.away="open = false">
                        
                        <input type="hidden" name="kategori" x-model="selected">

                        <button @click="open = !open" type="button" class="flex items-center justify-between w-full px-4 py-3 text-left bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#01C0DB] focus:border-[#01C0DB] focus:outline-none">
                            <span x-text="selectedText" class="text-gray-700"></span>
                            <i class="fas fa-chevron-down text-gray-400 text-xs transition-transform" :class="{ 'rotate-180': open }"></i>
                        </button>

                        <div x-show="open" 
                             x-transition
                             class="absolute z-20 w-full mt-2 bg-white rounded-lg shadow-2xl border border-gray-100 overflow-hidden"
                             style="display: none;">
                            
                            {{-- Teks link default diubah --}}
                            <a @click="selected = ''; selectedText = 'Semua Kategori'; open = false"
                               href="#"
                               class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-[#0157B2] transition-colors">
                               Semua Kategori
                            </a>
                            
                            @foreach($categories as $category)
                            <a @click="selected = '{{ $category }}'; selectedText = '{{ $category }}'; open = false"
                               href="#"
                               class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-[#0157B2] transition-colors">
                               {{ $category }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                    {{-- ===== [AKHIR PERUBAHAN 1] ===== --}}

                    <button type="submit" class="px-6 py-3 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] hover:from-[#01C0DB] hover:to-[#0157B2] text-white rounded-lg transition-all duration-300 transform hover:scale-105 shadow-md flex-grow md:flex-grow-0">
                        <i class="fas fa-filter mr-2"></i>Filter
                    </button>
                </div>

                @if(request()->hasAny(['search', 'kategori']))
                    <a href="{{ route('news.index') }}" class="px-4 py-2 text-[#0157B2] hover:text-[#01C0DB] transition-colors duration-300 w-full md:w-auto text-center md:text-left">
                        <i class="fas fa-times mr-2"></i>Hapus Filter
                    </a>
                @endif
            </form>
        </div>
        
        @if($news->count() > 0)
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 mb-12">
                @foreach($news as $article)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden group transition-all duration-300 transform hover:scale-105" data-aos="fade-up">
                        <div class="relative overflow-hidden">
                            <img src="{{ Storage::url($article->thumbnail) }}" 
                                 class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110" 
                                 alt="{{ $article->title }}">
                            <div class="absolute top-4 left-4">
                                <span class="bg-gradient-to-r from-[#0157B2] to-[#01C0DB] text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    {{ $article->kategory }}
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <i class="fas fa-calendar-alt mr-2 text-[#0157B2]"></i>
                                <span>{{ \Carbon\Carbon::parse($article->tanggal)->format('d M, Y') }}</span>
                                <span class="mx-2">•</span>
                                <i class="fas fa-user mr-2 text-[#0157B2]"></i>
                                
                                {{-- ===== [PERUBAHAN 2: EAGER LOADING] ===== --}}
                                {{-- $article->ditulis_oleh diganti dengan relasi author --}}
                                <span>{{ $article->author?->name ?? 'Tim Terobos' }}</span>
                                {{-- ===== [AKHIR PERUBAHAN 2] ===== --}}

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
                               class="inline-flex items-center text-[#0157B2] hover:text-[#01C0DB] font-semibold transition-colors duration-300 group-hover:text-[#01C0DB]">
                                Baca Selengkapnya
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
            {{-- ... (Tidak ada perubahan di bagian "Berita Tidak Ditemukan") ... --}}
            <div class="text-center py-16 bg-white rounded-2xl shadow-lg border border-gray-100" data-aos="fade-up">
                <div class="text-6xl text-gray-300 mb-4">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-600 mb-2">Berita Tidak Ditemukan</h3>
                <p class="text-gray-500">
                    @if(request()->hasAny(['search', 'kategori']))
                        Coba sesuaikan kriteria pencarian Anda atau <a href="{{ route('news.index') }}" class="text-[#0157B2] hover:text-[#01C0DB]">lihat semua berita</a>.
                    @else
                        Silakan kembali lagi nanti untuk pembaruan terbaru!
                    @endif
                </p>
            </div>
        @endif
    </div>
</section>

<section class="py-16 bg-gradient-to-r from-[#0157B2] to-[#01C0DB]">
    {{-- ... (Tidak ada perubahan di Newsletter Section) ... --}}
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Tetap Terkini
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Berlangganan buletin kami dan jangan pernah lewatkan berita dan pembaruan terbaru dari dunia robotika.
        </p>
        <div class="max-w-md mx-auto" data-aos="fade-up">
            <div class="flex gap-2">
                <input type="email" 
                       placeholder="Masukkan email Anda..." 
                       class="flex-1 px-4 py-3 rounded-lg border-0 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-[#0157B2]">
                <button class="px-6 py-3 bg-white text-[#0157B2] hover:bg-gray-100 font-semibold rounded-lg transition-all duration-300">
                    Berlangganan
                </button>
            </div>
        </div>
    </div>
</section>
@endsection