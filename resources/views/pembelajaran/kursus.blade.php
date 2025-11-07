@extends('layouts.app') 

@section('content')

<section class="bg-gradient-to-br from-[#002343] to-[#0157B2] pt-28 pb-16">
    <div class="container mx-auto px-4 text-center">
        
        <h1 class="text-3xl md:text-5xl font-bold text-white mb-8" data-aos="fade-up">
            Temukan Kursus Terbaik untuk Pengembangan Dirimu!
        </h1>

        <form action="#" method="GET" class="flex flex-col md:flex-row justify-center items-center gap-3 max-w-3xl mx-auto mb-8" data-aos="fade-up" data-aos-delay="100">
            
            <input 
                type="text" 
                placeholder="Kolom Pencarian" 
                class="w-full md:w-1/2 px-4 py-3 rounded-lg border-gray-300 shadow-md text-gray-800 focus:ring-2 focus:ring-[#01C0DB] focus:outline-none">
            
            <select class="w-full md:w-1/4 px-4 py-3 rounded-lg border-gray-300 shadow-md text-gray-500 focus:ring-2 focus:ring-[#01C0DB] focus:outline-none">
                <option value="">Kategori</option>
                <option value="robotik">Robotik</option>
                <option value="iot">IoT</option>
                <option value="web">Web</option>
            </select>
            
            <select class="w-full md:w-1/4 px-4 py-3 rounded-lg border-gray-300 shadow-md text-gray-500 focus:ring-2 focus:ring-[#01C0DB] focus:outline-none">
                <option value="">Level</option>
                <option value="pemula">Pemula</option>
                <option value="menengah">Menengah</option>
                <option value="mahir">Mahir</option>
            </select>
            
            <button 
                type="submit" 
                class="w-full md:w-auto bg-gradient-to-r from-[#0157B2] to-[#01C0DB] hover:from-[#01C0DB] hover:to-[#0157B2] text-white font-semibold px-6 py-3 rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#01C0DB]">
                Cari
            </button>
        </form>

        <div class="flex flex-col sm:flex-row justify-center items-center gap-4" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="w-full sm:w-auto group inline-flex items-center justify-center px-8 py-3 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] hover:from-[#01C0DB] hover:to-[#0157B2] text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                Gabung Sekarang
            </a>
            <a href="#" class="w-full sm:w-auto group inline-flex items-center justify-center px-8 py-3 bg-white text-gray-800 hover:bg-gray-50 font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                Info Lainnya
            </a>
        </div>
    </div>
</section>

<section class="py-16 sm:py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        
        <div class="bg-white border border-gray-100 rounded-2xl shadow-lg p-4 mb-10" data-aos="fade-up">
            <form action="#" method="GET" class="flex flex-col md:flex-row items-center gap-4">
                
                <select class="w-full md:w-auto px-4 py-2 rounded-lg border border-gray-300 text-gray-600 font-medium focus:ring-2 focus:ring-[#01C0DB] focus:outline-none">
                    <option value="">Kategori</option>
                </select>
                
                <select class="w-full md:w-auto px-4 py-2 rounded-lg border border-gray-300 text-gray-600 font-medium focus:ring-2 focus:ring-[#01C0DB] focus:outline-none">
                    <option value="">Level</option>
                </select>
                
                <select class="w-full md:w-auto px-4 py-2 rounded-lg border border-gray-300 text-gray-600 font-medium focus:ring-2 focus:ring-[#01C0DB] focus:outline-none">
                    <option value="">Harga</option>
                </select>
                
                <select class="w-full md:w-auto px-4 py-2 rounded-lg border border-gray-300 text-gray-600 font-medium focus:ring-2 focus:ring-[#01C0DB] focus:outline-none">
                    <option value="">Durasi</option>
                </select>
                
                <div class="relative w-full md:w-auto md:ml-auto">
                    <input 
                        type="text" 
                        placeholder="Cari Kursus" 
                        class="w-full md:w-64 px-4 py-2 pl-10 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#01C0DB] focus:outline-none">
                    <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                </div>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="group bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                <div class="h-48 overflow-hidden">
                    <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-500 transition-transform duration-500 group-hover:scale-110">
                        Placeholder Gambar
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold mb-2 text-[#002343] group-hover:text-[#0157B2] transition-colors duration-300">
                        Nama Kursus Placeholder
                    </h3>
                    <p class="text-sm text-gray-600 mb-4 line-clamp-2">Deskripsi singkat kursus akan muncul di sini...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[#0157B2] font-bold text-lg">Rp 100.000</span>
                        <a href="#" class="inline-flex items-center text-[#0157B2] hover:text-[#01C0DB] font-bold transition-all duration-300 text-sm">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="group bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                <div class="h-48 overflow-hidden">
                    <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-500 transition-transform duration-500 group-hover:scale-110">
                        Placeholder Gambar
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold mb-2 text-[#002343] group-hover:text-[#0157B2] transition-colors duration-300">
                        Nama Kursus Placeholder
                    </h3>
                    <p class="text-sm text-gray-600 mb-4 line-clamp-2">Deskripsi singkat kursus akan muncul di sini...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[#0157B2] font-bold text-lg">Rp 100.000</span>
                        <a href="#" class="inline-flex items-center text-[#0157B2] hover:text-[#01C0DB] font-bold transition-all duration-300 text-sm">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="group bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                <div class="h-48 overflow-hidden">
                    <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-500 transition-transform duration-500 group-hover:scale-110">
                        Placeholder Gambar
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold mb-2 text-[#002343] group-hover:text-[#0157B2] transition-colors duration-300">
                        Nama Kursus Placeholder
                    </h3>
                    <p class="text-sm text-gray-600 mb-4 line-clamp-2">Deskripsi singkat kursus akan muncul di sini...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[#0157B2] font-bold text-lg">Rp 100.000</span>
                        <a href="#" class="inline-flex items-center text-[#0157B2] hover:text-[#01C0DB] font-bold transition-all duration-300 text-sm">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Tambahkan card kursus lainnya di sini -->
        </div>

    </div>
</section>

@endsection