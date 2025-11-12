@extends('layouts.app')

@section('content')

<section id="beranda" class="relative min-h-screen flex items-center bg-gradient-to-br from-[#002343] to-[#0157B2] overflow-hidden pt-20">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-48 sm:w-72 h-48 sm:h-72 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-64 sm:w-96 h-64 sm:h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div class="space-y-6 lg:space-y-8 text-center lg:text-left" data-aos="fade-right">
                <div class="space-y-4 lg:space-y-6">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                        Membangun Inovator, 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#01C0DB] to-cyan-300">
                            Menjaga Planet.
                        </span>
                    </h1>
                    
                    <p class="text-base sm:text-lg md:text-xl text-blue-100 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Platform pertama di Indonesia yang memadukan kurikulum robotika canggih dengan perangkat keras daur ulang. Belajar, bangun, dan berkolaborasi.
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#about" class="group inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-gradient-to-r from-[#01C0DB] to-[#0157B2] hover:from-[#0157B2] hover:to-[#01C0DB] text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Pelajari Lanjut
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    
                    <a href="{{ route('contact.index') }}" class="group inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 border-2 border-[#01C0DB] text-[#01C0DB] hover:bg-[#01C0DB] hover:text-[#002343] font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
                        Hubungi Kami
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
            
            <div class="relative order-first lg:order-last" data-aos="fade-left" data-aos-delay="200">
                <div class="relative z-10">
                    <img src="images/banner-image.png" alt="Robotics Platform" class="w-full h-auto max-w-md lg:max-w-lg mx-auto drop-shadow-2xl">
                </div>
                
                <div class="absolute top-1/4 -left-2 sm:-left-4 w-16 sm:w-20 h-16 sm:h-20 bg-gradient-to-r from-[#01C0DB] to-[#0157B2] rounded-full opacity-20 animate-pulse"></div>
                <div class="absolute bottom-1/4 -right-2 sm:-right-4 w-12 sm:w-16 h-12 sm:h-16 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] rounded-full opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
            </div>
        </div>
    </div>
    
    <div class="absolute bottom-0 left-0 w-full h-16 sm:h-32 bg-gradient-to-r from-[#002343] to-[#0157B2] transform skew-y-1 origin-bottom-left"></div>
</section>

<section id="about">
    <div class="py-16 sm:py-20 bg-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-1/4 left-1/4 w-48 sm:w-64 h-48 sm:h-64 bg-[#0157B2] rounded-full"></div>
            <div class="absolute bottom-1/4 right-1/4 w-32 sm:w-48 h-32 sm:h-48 bg-[#01C0DB] rounded-full"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="relative order-last lg:order-first" data-aos="fade-right">
                    <div class="grid grid-cols-2 gap-4 sm:gap-6">
                        <div class="space-y-4 sm:space-y-6">
                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl sm:rounded-2xl p-4 sm:p-6 transform hover:scale-105 transition-transform duration-300">
                                <img src="images/about-image1.png" alt="About Image 1" class="w-full h-auto rounded-lg sm:rounded-xl shadow-lg">
                            </div>
                        </div>
                        <div class="space-y-4 sm:space-y-6 mt-6 sm:mt-8">
                            <div class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-xl sm:rounded-2xl p-4 sm:p-6 transform hover:scale-105 transition-transform duration-300">
                                <img src="images/about-image2.png" alt="About Image 2" class="w-full h-auto rounded-lg sm:rounded-xl shadow-lg">
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute -top-2 sm:-top-4 -right-2 sm:-right-4 bg-gradient-to-r from-[#01C0DB] to-[#0157B2] text-white px-3 sm:px-6 py-2 sm:py-3 rounded-full font-bold shadow-lg text-sm sm:text-base">
                        Industry 5.0 Ready
                    </div>
                </div>
                
                <div class="space-y-6 lg:space-y-8" data-aos="fade-left" data-aos-delay="200">
                    <div class="space-y-4">
                        <span class="inline-block px-4 py-2 bg-cyan-100 text-[#0157B2] rounded-full text-sm font-semibold">
                            Tentang TEROBOS
                        </span>
                        
                        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#002343]">
                            Misi Kami memberdayakan
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0157B2] to-[#01C0DB]">
                                Technopreneur
                            </span>
                            Muda
                        </h2>
                        
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Belajar robotika dengan kurikulum yang dirancang untuk menghadapi era revolusi industri 5.0. Kamu bisa mendesain, memprogram, membangun, dan menguji robot dalam satu platform pembelajaran TEROBOS yang terintegrasi.
                        </p>
                    </div>
                    
                    <div class="space-y-4 sm:space-y-6">
                        <div class="flex items-start space-x-4 p-4 sm:p-6 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl sm:rounded-2xl hover:shadow-lg transition-shadow duration-300">
                            <div class="flex-shrink-0">
                                <div class="w-10 sm:w-12 h-10 sm:h-12 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 sm:w-6 h-5 sm:h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4.9-1.3L3 20l1.3-4.1A8.96 8.96 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-lg sm:text-xl font-bold text-[#002343] mb-2">Dukungan Komunitas</h4>
                                <p class="text-sm sm:text-base text-gray-600">Bergabung dengan forum untuk diskusi, kolaborasi proyek, dan dukungan teknis.<</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4 p-4 sm:p-6 bg-gradient-to-r from-green-50 to-green-100 rounded-xl sm:rounded-2xl hover:shadow-lg transition-shadow duration-300">
                            <div class="flex-shrink-0">
                                <div class="w-10 sm:w-12 h-10 sm:h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 sm:w-6 h-5 sm:h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.358 1.048-.835 2.028-1.414 2.914a17.936 17.936 0 01-3.296 3.408c-.633.5-1.31.926-2.014 1.274a9.014 9.014 0 01-8.36-.29 8.948 8.948 0 01-3.684-4.306z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-lg sm:text-xl font-bold text-[#002343] mb-2">Aspek Keberlanjutan</h4>
                                <p class="text-sm sm:text-base text-gray-600">Kami menyediakan komponen robot dari hasil daur ulang.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> 
    
    <div class="py-16 sm:py-20 bg-gradient-to-r from-[#002343] to-[#0157B2]">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-8">

            <div class="group bg-gradient-to-br from-[#0157B2] to-[#01C0DB] text-white rounded-xl sm:rounded-2xl p-4 sm:p-6 text-center shadow-xl transform transition-all duration-500 hover:scale-105">
                <div class="flex justify-center mb-2 sm:mb-3">
                    <svg class="w-6 sm:w-10 h-6 sm:h-10 text-white drop-shadow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0v6m-4-3h8" />
                    </svg>
                </div>
                <div class="text-2xl sm:text-4xl font-extrabold drop-shadow mb-1 group-hover:scale-110 transition-transform duration-300">500+</div>
                <div class="text-white/90 font-medium tracking-wide text-xs sm:text-base">Siswa Terlatih</div>
            </div>

            <div class="group bg-gradient-to-br from-purple-600 to-indigo-600 text-white rounded-xl sm:rounded-2xl p-4 sm:p-6 text-center shadow-xl transform transition-all duration-500 hover:scale-105">
                <div class="flex justify-center mb-2 sm:mb-3">
                    <svg class="w-6 sm:w-10 h-6 sm:h-10 text-white drop-shadow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div class="text-2xl sm:text-4xl font-extrabold drop-shadow mb-1 group-hover:scale-110 transition-transform duration-300">50+</div>
                <div class="text-white/90 font-medium tracking-wide text-xs sm:text-base">Proyek Robot</div>
            </div>

            <div class="group bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-xl sm:rounded-2xl p-4 sm:p-6 text-center shadow-xl transform transition-all duration-500 hover:scale-105">
                <div class="flex justify-center mb-2 sm:mb-3">
                    <svg class="w-6 sm:w-10 h-6 sm:h-10 text-white drop-shadow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582a10 10 0 0114.3-4.419L20 5m0 0v5h-5m5-5l-7 7m-1 4a4 4 0 01-4-4H4a6 6 0 006 6v1l3-3-3-3v1z" />
                    </svg>
                </div>
                <div class="text-2xl sm:text-4xl font-extrabold drop-shadow mb-1 group-hover:scale-110 transition-transform duration-300">95%</div>
                <div class="text-white/90 font-medium tracking-wide text-xs sm:text-base">Bahan Daur Ulang</div>
            </div>

            <div class="group bg-gradient-to-br from-[#01C0DB] to-[#0157B2] text-white rounded-xl sm:rounded-2xl p-4 sm:p-6 text-center shadow-xl transform transition-all duration-500 hover:scale-105">
                <div class="flex justify-center mb-2 sm:mb-3">
                    <svg class="w-6 sm:w-10 h-6 sm:h-10 text-white drop-shadow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-5-4M9 20H4v-2a4 4 0 015-4m1-4a4 4 0 100-8 4 4 0 000 8zm6 4a4 4 0 100-8 4 4 0 000 8z" />
                    </svg>
                </div>
                <div class="text-2xl sm:text-4xl font-extrabold drop-shadow mb-1 group-hover:scale-110 transition-transform duration-300">30+</div>
                <div class="text-white/90 font-medium tracking-wide text-xs sm:text-base">Komunitas Aktif</div>
            </div>

        </div>
    </div>
</div>
    
    <div class="py-16 sm:py-20 bg-gray-50 relative overflow-hidden">
        <div class="container mx-auto px-4" data-aos="fade-right"> 
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center relative z-10">
                <div class="space-y-6 lg:space-y-8 text-center lg:text-left" data-aos="fade-right">
                    <div class="space-y-4">
                        <span class="inline-block px-4 py-2 bg-cyan-100 text-[#0157B2] rounded-full text-sm font-semibold">
                            Apa yang Kami Tawarkan
                        </span>
                        
                        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#002343] leading-tight">
                            Mewujudkan Inovasi Menjadi 
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0157B2] to-[#01C0DB]">
                                Solusi Cerdas
                            </span>
                        </h2>
                        
                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Kami menyediakan platform terintegrasi dengan keahlian industri untuk membantu siswa dan mahasiswa mewujudkan ide mereka. Dari konsep dasar hingga purwarupa (prototype) yang siap diuji, kami membantu pengguna mengubah potensi mereka menjadi solusi teknologi yang inovatif.
                        </p>
                        
                        <a href="{{ route('pembelajaran.info') }}" class="group inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] hover:from-[#01C0DB] hover:to-[#0157B2] text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            Jelajahi Semua Fitur
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
                
                <div class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 items-stretch">
                        
                        <div class="bg-white p-4 sm:p-6 rounded-xl sm:rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 h-full flex flex-col justify-between cursor-pointer group">
                            <div>
                                <figure class="w-12 sm:w-16 h-12 sm:h-16 mb-3 sm:mb-4 bg-gradient-to-r from-blue-100 to-cyan-100 rounded-lg sm:rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 sm:w-8 h-6 sm:h-8 text-[#0157B2]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </figure>
                                <h4 class="text-lg sm:text-xl font-bold text-[#002343] mb-2 sm:mb-3 group-hover:text-[#0157B2] transition-colors duration-300">Simulasi & Coding</h4>
                                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Uji kodemu di simulator 3D dan dapatkan umpan balik instan sebelum diterapkan ke robot fisik.</p>
                            </div>
                        </div>

                        <div class="bg-white p-4 sm:p-6 rounded-xl sm:rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 h-full flex flex-col justify-between cursor-pointer group">
                            <div>
                                <figure class="w-12 sm:w-16 h-12 sm:h-16 mb-3 sm:mb-4 bg-gradient-to-r from-purple-100 to-purple-200 rounded-lg sm:rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 sm:w-8 h-6 sm:h-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </figure>
                                <h4 class="text-lg sm:text-xl font-bold text-[#002343] mb-2 sm:mb-3 group-hover:text-purple-600 transition-colors duration-300">Kurikulum Berbasis Proyek</h4>
                                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Belajar melalui praktik nyata dengan modul dari dasar hingga proyek AI untuk membangun portofolio.</p>
                            </div>
                        </div>

                        <div class="bg-white p-4 sm:p-6 rounded-xl sm:rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 h-full flex flex-col justify-between cursor-pointer group">
                            <div>
                                <figure class="w-12 sm:w-16 h-12 sm:h-16 mb-3 sm:mb-4 bg-gradient-to-r from-cyan-100 to-cyan-200 rounded-lg sm:rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 sm:w-8 h-6 sm:h-8 text-[#01C0DB]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </figure>
                                <h4 class="text-lg sm:text-xl font-bold text-[#002343] mb-2 sm:mb-3 group-hover:text-[#01C0DB] transition-colors duration-300">Teknologi Edukasi</h4>
                                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Gabungan modul interaktif, kelas virtual, dan fitur *remote testing* robot dari jarak jauh.</p>
                            </div>
                        </div>

                        <div class="bg-white p-4 sm:p-6 rounded-xl sm:rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 h-full flex flex-col justify-between cursor-pointer group">
                            <div>
                                <figure class="w-12 sm:w-16 h-12 sm:h-16 mb-3 sm:mb-4 bg-gradient-to-r from-green-100 to-green-200 rounded-lg sm:rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 sm:w-8 h-6 sm:h-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </figure>
                                <h4 class="text-lg sm:text-xl font-bold text-[#002343] mb-2 sm:mb-3 group-hover:text-green-600 transition-colors duration-300">Ekosistem Daur Ulang</h4>
                                <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Dukung keberlanjutan dengan membeli perangkat recycle terjangkau di pasar komunitas kami.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> 
</section>
    
@endsection