@extends('layouts.app')

@section('content')

<section id="komunitas" class="bg-gray-50 py-16 sm:py-20 pt-28">
  <div class="container mx-auto px-4">
    
    <div class="text-center mb-12 sm:mb-16">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#002343] mt-4">
            Ekosistem <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0157B2] to-[#01C0DB]">Komunitas</span> Kami
        </h2>
    </div>

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
      </div> <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
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
      </div> </div> </div> </section>

@endsection