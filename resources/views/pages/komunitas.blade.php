@extends('layouts.app')

@section('content')

<section id="hero-komunitas" class="relative bg-gradient-to-br from-[#002343] to-[#0157B2] overflow-hidden pt-20">
    
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-48 sm:w-72 h-48 sm:h-72 bg-white rounded-full -translate-x-1-2 -translate-y-1-2"></div>
        <div class="absolute bottom-0 right-0 w-64 sm:w-96 h-64 sm:h-96 bg-white rounded-full translate-x-1-2 translate-y-1-2"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="py-24 sm:py-32">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white leading-tight">
                    Ekosistem
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#01C0DB] to-cyan-300">
                        Komunitas
                    </span>
                    Kami
                </h1>
                
                <p class="mt-6 text-base sm:text-lg md:text-xl text-blue-100 leading-relaxed max-w-2xl mx-auto">
                    Bergabunglah dengan ribuan inovator, pengembang, dan pelajar. Berbagi pengetahuan, berkolaborasi dalam proyek, dan dapatkan dukungan.
                </p>

                <div class="mt-8 sm:mt-10">
                    <a href="#komunitas-content" class="group inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-gradient-to-r from-[#01C0DB] to-[#0157B2] hover:from-[#0157B2] hover:to-[#01C0DB] text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Gabung Komunitas
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
    
    <div class="absolute bottom-0 left-0 w-full h-16 sm:h-24 bg-gray-50 transform origin-bottom-left"></div>
</section>


<section id="komunitas-content" class="bg-gray-50 py-16 sm:py-5">
  <div class="container mx-auto px-4">
    
    <div class="max-w-4xl mx-auto space-y-8">

      <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden" data-aos="fade-up">
        <div class="p-6 md:p-8">
          
          <div class="flex items-center space-x-3 mb-4">
            <i class="fas fa-users text-3xl text-[#0157B2]"></i> 
            <h3 class="text-xl md:text-2xl font-bold text-[#002343]">KOMUNITAS TEROBOS</h3>
          </div>
          
          <hr class="border-t border-gray-200 mb-5">

          <div>
            <div class="flex items-start space-x-3 mb-4">
              <i class="fas fa-exclamation-triangle text-yellow-500 mt-1 flex-shrink-0"></i>
              <div class="text-gray-700">
                <p class="font-semibold">Bergabunglah dengan ribuan pengguna TEROBOS lainnya!</p>
                <p class="mt-1">Komunitas TEROBOS adalah tempat berbagi pengetahuan, pengalaman, dan berkolaborasi dalam bidang robotika. Nikmati forum diskusi, berita terbaru, dan acara komunitas.</p>
              </div>
            </div>

            <div class="flex flex-wrap items-center gap-x-5 gap-y-2 my-6 text-gray-600">
              <span class="flex items-center text-sm">
                <i class="fas fa-gem text-xs text-[#0157B2] mr-2"></i> Diskusi Terbuka
              </span>
              <span class="flex items-center text-sm">
                <i class="fas fa-gem text-xs text-[#0157B2] mr-2"></i> Kolaborasi Proyek
              </span>
              <span class="flex items-center text-sm">
                <i class="fas fa-gem text-xs text-[#0157B2] mr-2"></i> Dukungan Teknis
              </span>
              <span class="flex items-center text-sm">
                <i class="fas fa-gem text-xs text-[#0157B2] mr-2"></i> Update Teknologi
              </span>
            </div>

            <div class="mt-6">
              <a href="#" class="group inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] hover:from-[#01C0DB] hover:to-[#0157B2] text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                Gabung Komunitas
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
              </a>
            </div>

          </div>
        </div>
      </div> 

      <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
        <div class="p-6 md:p-8">
          
          <div class="flex items-center space-x-3 mb-4">
            <i class="fas fa-comments text-3xl text-[#01C0DB]"></i>
            <h3 class="text-xl md:text-2xl font-bold text-[#002343]">FORUM DISKUSI KOMUNITAS</h3>
          </div>
          
          <hr class="border-t border-gray-200 mb-5">

          <div>
            <div class="flex items-start space-x-3 mb-4">
              <i class="far fa-comment-alt text-gray-500 mt-1 flex-shrink-0"></i>
              <div class="text-gray-700">
                <p class="font-semibold">Tanya, jawab, dan pelajari bersama!</p>
                <p class="mt-1">Komunitas TEROBOS adalah tempat berbagi pengetahuan, pengalaman, dan berkolaborasi dalam bidang robotika. Nikmati forum diskusi, berita terbaru, dan acara komunitas.</p>
              </div>
            </div>

            <div class="flex flex-wrap items-center gap-x-5 gap-y-2 my-6 text-gray-600">
              <span class="flex items-center text-sm">
                <i class="fas fa-gem text-xs text-[#0157B2] mr-2"></i> Diskusi Terbuka
              </span>
              <span class="flex items-center text-sm">
                <i class="fas fa-gem text-xs text-[#0157B2] mr-2"></i> Kolaborasi Proyek
              </span>
              <span class="flex items-center text-sm">
                <i class="fas fa-gem text-xs text-[#0157B2] mr-2"></i> Dukungan Teknis
              </span>
              <span class="flex items-center text-sm">
                <i class="fas fa-gem text-xs text-[#0157B2] mr-2"></i> Update Teknologi
              </span>
            </div>

            <div class="mt-6">
              <a href="#" class="group inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] hover:from-[#01C0DB] hover:to-[#0157B2] text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                Mulai Berdiskusi
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
              </a>
            </div>

          </div>
        </div>
      </div> 

    </div> 
  </div> 
</section>

@endsection