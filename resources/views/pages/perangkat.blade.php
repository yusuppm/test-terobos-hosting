@extends('layouts.app')

@section('content')

<section id="hero-perangkat" class="relative bg-gradient-to-br from-[#002343] to-[#0157B2] overflow-hidden pt-20">
    
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-48 sm:w-72 h-48 sm:h-72 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-64 sm:w-96 h-64 sm:h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="pt-24 sm:pt-32 pb-12" data-aos="fade-up">
            <div class="text-center max-w-3xl mx-auto">
              
              <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white leading-tight mb-4">
                Katalog 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#01C0DB] to-cyan-300">
                  Perangkat
                </span>
                Kami
              </h1>


              <span class="inline-block px-4 py-2 bg-white/10 text-cyan-300 rounded-full text-sm font-semibold">
                Mendukung Keberlanjutan
              </span>
                
            </div>
        </div>
    </div>
    
</section>
<section id="perangkat" class="bg-gray-50 pt-12 sm:pt-16 pb-16 sm:pb-20">
  <div class="container mx-auto px-4">
    
    <div class="bg-gradient-to-r from-cyan-100 to-blue-100 text-[#002343] p-6 rounded-2xl flex items-start sm:items-center space-x-4 mb-12 shadow-lg border border-cyan-200" data-aos="fade-up" data-aos-delay="100">
      <i class="fas fa-recycle text-3xl sm:text-4xl text-[#0157B2] flex-shrink-0 mt-1 sm:mt-0"></i>
      <p class="font-semibold text-base md:text-lg">
        TEROBOS berkomitmen pada keberlanjutan melalui teknologi daur ulang. Membeli perangkat hasil daur ulang = mendukung lingkungan + hemat biaya + unik.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
      <div class="bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden flex flex-col transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('storage/perangkat_photos/ldr_sensor.png') }}" alt="Sensor cahaya LDR" class="h-56 w-full object-cover">
        <div class="p-5 flex flex-col flex-grow">
          <h3 class="text-lg font-bold text-[#002343] mb-2">Sensor cahaya LDR</h3>
          <ul class="list-disc list-inside text-gray-600 text-sm space-y-1 mb-4">
            <li>Sensor cahaya LDR.</li>
            <li>Spesifikasi: Range 2cm–400cm, Tegangan 5V.</li>
          </ul>
          <div class="flex-grow"></div> 
          <p class="text-base font-semibold text-[#002343] mb-5">Harga: Rp 20.000,-</p>
          
          <div class="flex flex-col sm:flex-row gap-3">
            <a href="#" class="group inline-flex items-center justify-center w-full sm:w-auto px-5 py-3 bg-cyan-100 hover:bg-cyan-200 text-[#0157B2] font-semibold rounded-full transition-all duration-300 transform hover:scale-105 text-sm">
              <i class="fas fa-shopping-cart mr-2"></i>
              Ke Keranjang
            </a>
            <a href="#" class="group inline-flex items-center justify-center w-full sm:w-auto px-5 py-3 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] hover:from-[#01C0DB] hover:to-[#0157B2] text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg text-sm">
              Beli Sekarang
              <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
          </div>
        </div>
      </div> 

      <div class="bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden flex flex-col transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="300">
        <img src="{{ asset('storage/perangkat_photos/ldr_sensor.png') }}" alt="Arduino Uno R3 Recycle" class="h-56 w-full object-cover">
        <div class="p-5 flex flex-col flex-grow">
          <h3 class="text-lg font-bold text-[#002343] mb-2">Microcontroller Arduino Uno R3 Recycle</h3>
          <ul class="list-disc list-inside text-gray-600 text-sm space-y-1 mb-4">
            <li>Mikrokontroler hasil refurbish, kondisi OK.</li>
            <li>Spesifikasi: ATmega328P, USB connection.</li>
          </ul>
          <div class="flex-grow"></div>
          <p class="text-base font-semibold text-[#002343] mb-5">Harga: Rp 45.000,-</p>
          
          <div class="flex flex-col sm:flex-row gap-3">
            <a href="#" class="group inline-flex items-center justify-center w-full sm:w-auto px-5 py-3 bg-cyan-100 hover:bg-cyan-200 text-[#0157B2] font-semibold rounded-full transition-all duration-300 transform hover:scale-105 text-sm">
              <i class="fas fa-shopping-cart mr-2"></i>
              Ke Keranjang
            </a>
            <a href="#" class="group inline-flex items-center justify-center w-full sm:w-auto px-5 py-3 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] hover:from-[#01C0DB] hover:to-[#0157B2] text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg text-sm">
              Beli Sekarang
              <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
          </div>
        </div>
      </div> 

      <div class="bg-white border border-gray-100 rounded-2xl shadow-lg overflow-hidden flex flex-col transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="400">
        <img src="{{ asset('storage/perangkat_photos/ldr_sensor.png') }}" alt="Sensor cahaya LDR" class="h-56 w-full object-cover">
        <div class="p-5 flex flex-col flex-grow">
          <h3 class="text-lg font-bold text-[#002343] mb-2">Sensor cahaya LDR</h3>
          <ul class="list-disc list-inside text-gray-600 text-sm space-y-1 mb-4">
            <li>Cocok untuk proyek robot sederhana.</li>
            <li>Spesifikasi: 12V, RPM ±150.</li>
          </ul>
          <div class="flex-grow"></div>
          <p class="text-base font-semibold text-[#002343] mb-5">Harga: Rp 20.000,-</p>
          
          <div class="flex flex-col sm:flex-row gap-3">
            <a href="#" class="group inline-flex items-center justify-center w-full sm:w-auto px-5 py-3 bg-cyan-100 hover:bg-cyan-200 text-[#0157B2] font-semibold rounded-full transition-all duration-300 transform hover:scale-105 text-sm">
              <i class="fas fa-shopping-cart mr-2"></i>
              Ke Keranjang
            </a>
            <a href="#" class="group inline-flex items-center justify-center w-full sm:w-auto px-5 py-3 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] hover:from-[#01C0DB] hover:to-[#0157B2] text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg text-sm">
              Beli Sekarang
              <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
          </div>
        </div>
      </div> 

    </div> 

    <div class="space-y-8 mt-12" data-aos="fade-up" data-aos-delay="500"> 
      
      <div class="bg-gradient-to-r from-blue-50 to-cyan-50 p-6 md:p-8 rounded-2xl shadow-lg border border-blue-100">
        <div class="flex items-start space-x-4">
            <div class="flex-shrink-0 w-10 sm:w-12 h-10 sm:h-12 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] rounded-full flex items-center justify-center">
                <i class="fas fa-store text-xl text-white"></i>
            </div>
            <div>
                <h3 class="text-xl md:text-2xl font-bold text-[#002343] mb-2">
                    Fitur Komunitas Jual Beli
                </h3>
                <ul class="list-disc list-inside space-y-2 text-base text-gray-700">
                    <li>Terobos membuka ruang bagi pengguna untuk menjual/membeli kerangka & komponen.</li>
                    <li>Semua transaksi diawasi dan difilter untuk keamanan pengguna.</li>
                    <li>Menu "Pasar Komunitas" akan hadir jika fitur ini diaktifkan.</li>
                </ul>
            </div>
        </div>
      </div> 

      <div class="bg-gradient-to-r from-green-50 to-green-100 p-6 md:p-8 rounded-2xl shadow-lg border border-green-100">
        <div class="flex items-start space-x-4">
            <div class="flex-shrink-0 w-10 sm:w-12 h-10 sm:h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center">
                <i class="fas fa-leaf text-xl text-white"></i>
            </div>
            <div>
                <h3 class="text-xl md:text-2xl font-bold text-[#002343] mb-4">
                    KONSEP KEBERLANJUTAN (SUSTAINABILITY)
                </h3>
                <div class="space-y-4 text-base text-gray-700">
                  
                  <div>
                      <h4 class="font-semibold text-gray-800">Pendekatan Daur Ulang:</h4>
                      <ul class="list-disc list-inside ml-4 space-y-1">
                        <li>Terobos mengumpulkan perangkat elektronik tidak terpakai dari komunitas & mitra.</li>
                        <li>Proses penyortiran, perakitan kembali, dan uji kelayakan dilakukan internal.</li>
                      </ul>
                  </div>

                  <div>
                      <h4 class="font-semibold text-gray-800">Dampak Positif:</h4>
                      <ul class="list-disc list-inside ml-4 space-y-1">
                        <li>Mengurangi limbah elektronik (e-waste) secara signifikan</li>
                        <li>Mendorong pembelajaran berbasis reuse dan eco-friendly</li>
                      </ul>
                  </div>

                </div>
            </div>
        </div>
      </div> 

    </div> 
  </div> 
</section>

@endsection