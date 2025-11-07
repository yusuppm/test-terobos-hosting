@extends('layouts.app') 

@section('content')

<section id="pembelajaran" class="bg-gradient-to-br from-[#002343] to-[#0157B2] pt-28 pb-16 sm:pb-20">
    <div class="container mx-auto px-4">

        <div class="max-w-3xl mb-12" data-aos="fade-up">
            <span class="inline-block px-4 py-2 bg-white/10 text-cyan-200 rounded-full text-sm font-semibold mb-4">
              Platform Pembelajaran
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white leading-tight">
                Lingkungan Belajar Robotika <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#01C0DB] to-cyan-300">Interaktif</span>
            </h1>
            <p class="text-lg text-blue-100 mt-4">
                ROBEL menyediakan lingkungan pembelajaran robotika yang interaktif, lengkap, dan mendukung prinsip keberlanjutan.
            </p>
        </div>

        <div class="flex flex-wrap gap-3" data-aos="fade-up" data-aos-delay="100">
            <a href="#fitur" class="w-full sm:w-auto group inline-flex items-center justify-center px-8 py-3 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] hover:from-[#01C0DB] hover:to-[#0157B2] text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                Fitur Unggulan
            </a>
            <a href="#paket" class="border-2 border-white/50 text-white hover:bg-white hover:text-[#002343] font-semibold px-6 py-2 rounded-full transition-colors duration-300">
                Paket Pembelajaran
            </a>
            <a href="#sertifikasi" class="border-2 border-white/50 text-white hover:bg-white hover:text-[#002343] font-semibold px-6 py-2 rounded-full transition-colors duration-300">
                Sertifikasi
            </a>
        </div>
    </div>
</section>

<section id="fitur" class="bg-white py-16 sm:py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-[#002343] mb-8 pt-4" data-aos="fade-up">
            Fitur <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0157B2] to-[#01C0DB]">Unggulan</span>
        </h2>
        <hr class="border-t border-gray-200 mb-8">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

            <!-- {{-- Fitur Learning --}} -->
            <div class="group bg-white border border-gray-100 rounded-2xl shadow-lg p-6 transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer" data-aos="fade-up">
                <div class="flex items-center space-x-3 mb-4">
                    <i class="fas fa-book-open text-3xl text-[#0157B2] transition-transform duration-300 group-hover:scale-110"></i>
                    <h3 class="text-xl font-bold text-[#002343] group-hover:text-[#0157B2] transition-colors duration-300">Fitur Learning</h3>
                </div>
                <ul class="list-disc list-inside text-gray-700 space-y-1.5 pl-2">
                    <li>Media belajar robotika lengkap: materi, latihan, ujian.</li>
                    <li>Materi: Dasar hingga tingkat lanjut</li>
                    <li>Metode: Interaktif, praktis, kelas virtual, diskusi, umpan balik otomatis</li>
                </ul>
            </div>

            <!-- {{-- Remote Testing --}} -->
            <div class="group bg-white border border-gray-100 rounded-2xl shadow-lg p-6 transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center space-x-3 mb-4">
                    <i class="fas fa-cogs text-3xl text-[#01C0DB] transition-transform duration-300 group-hover:scale-110"></i> 
                    <h3 class="text-xl font-bold text-[#002343] group-hover:text-[#01C0DB] transition-colors duration-300">Remote Testing</h3>
                </div>
                <ul class="list-disc list-inside text-gray-700 space-y-1.5 pl-2">
                    <li>Uji coba dan kontrol robot asli dari jarak jauh</li>
                    <li>Tanpa perlu memiliki robot fisik</li>
                    <li>Disediakan akses oleh TEROBOS melalui server</li>
                    <li>Mendukung pembelajaran praktis dari rumah</li>
                </ul>
            </div>

            <!-- {{-- Real-Time Coding --}} -->
            <div class="group bg-white border border-gray-100 rounded-2xl shadow-lg p-6 transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center space-x-3 mb-4">
                    <i class="fas fa-code text-3xl text-purple-600 transition-transform duration-300 group-hover:scale-110"></i>
                    <h3 class="text-xl font-bold text-[#002343] group-hover:text-purple-600 transition-colors duration-300">Real-Time Coding</h3>
                </div>
                <ul class="list-disc list-inside text-gray-700 space-y-1.5 pl-2">
                    <li>Text editor untuk menulis dan mensimulasikan kode robot secara langsung</li>
                    <li>Simulasi 3D</li>
                    <li>Visualisasi kode dan output robot</li>
                    <li>Contoh Screenshot Editor + Simulasi</li>
                </ul>
            </div>

            <!-- {{-- Daur Ulang Pendukung Pembelajaran --}} -->
            <div class="group bg-white border border-gray-100 rounded-2xl shadow-lg p-6 transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center space-x-3 mb-4">
                    <i class="fas fa-recycle text-3xl text-green-600 transition-transform duration-300 group-hover:scale-110"></i> 
                    <h3 class="text-xl font-bold text-[#002343] group-hover:text-green-600 transition-colors duration-300">Daur Ulang Pendukung Pembelajaran</h3>
                </div>
                <ul class="list-disc list-inside text-gray-700 space-y-1.5 pl-2">
                    <li>Tersedia perangkat hasil daur ulang sebagai media praktik nyata</li>
                    <li>Dapat dibeli langsung melalui halaman TEROBOS</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section id="paket" class="bg-gray-50 py-16 sm:py-20">
    <div class="container mx-auto px-4">

        <h2 class="text-3xl sm:text-4xl font-bold text-[#002343] mb-2 pt-4" data-aos="fade-up">
            Paket <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0157B2] to-[#01C0DB]">Pembelajaran</span>
        </h2>
        <hr class="border-t border-gray-200 mb-8">

        <div class="space-y-8">

            <div class="group bg-white hover:bg-sky-500 border border-gray-200 hover:border-sky-500 rounded-2xl shadow-lg p-6 md:p-8 overflow-hidden transition-all duration-300" data-aos="fade-up">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-center">
                    <div>
                        <img src="{{ asset('images/paket/robot-omni.png') }}" alt="Omnidirectional Robot" class="rounded-lg w-full">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3 flex items-center space-x-2 text-[#002343] group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-robot text-[#0157B2] group-hover:text-white/90 transition-colors duration-300"></i>
                            <span>Omnidirectional Robot</span>
                        </h3>
                        <p class="mb-4 text-gray-600 group-hover:text-sky-100 transition-colors duration-300">
                          Belajar sistem robot bergerak ke segala arah.
                        </p>
                        <div class="space-y-1.5 text-sm text-gray-700 group-hover:text-white transition-colors duration-300">
                            <p><strong class="font-semibold text-gray-800 group-hover:text-white/90">Teknologi:</strong> Motor omni, pengontrol, sensor.</p>
                            <p><strong class="font-semibold text-gray-800 group-hover:text-white/90">Learning Outcomes:</strong> Dasar robotika, pemrograman gerak.</p>
                            <p><strong class="font-semibold text-gray-800 group-hover:text-white/90">Untuk:</strong> Pelajar SMA/SMK, Mahasiswa Teknik.</p>
                            <p><strong class="font-semibold text-gray-800 group-hover:text-white/90">Modul:</strong> Teori robotika, simulasi, praktek.</p>
                            <p><strong class="font-semibold text-gray-800 group-hover:text-white/90">Perangkat:</strong> IMU Controller + Simulator ROSUS.</p>
                        </div>
                        <p class="text-xl font-bold my-5 text-[#002343] group-hover:text-white transition-colors duration-300">
                          Harga: <span>Rp xxx.xxx,-</span>
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <a href="#" class="group/btn inline-flex items-center justify-center px-6 py-3 bg-blue-100 group-hover:bg-white text-[#0157B2] group-hover:text-[#0157B2] font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
                                Pelajari Lanjut
                            </a>
                            <a href="#" class="group/btn inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] group-hover:bg-white text-white group-hover:text-[#0157B2] font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                                Daftar Paket Ini
                            </a>
                        </div>
                    </div>
                </div>
            </div> <div class="group bg-white hover:bg-sky-500 border border-gray-200 hover:border-sky-500 rounded-2xl shadow-lg p-6 md:p-8 overflow-hidden transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-center">
                    <div>
                        <img src="{{ asset('images/paket/robot-lengan.png') }}" alt="Robot Lengan" class="rounded-lg w-full">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3 flex items-center space-x-2 text-[#002343] group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-robot text-[#0157B2] group-hover:text-white/90 transition-colors duration-300"></i>
                            <span>Robot Lengan (Arm Robot)</span>
                        </h3>
                        <p class="mb-4 text-gray-600 group-hover:text-sky-100 transition-colors duration-300">
                          Memahami kinematika dan otomasi industri.
                        </p>
                        <div class="space-y-1.5 text-sm text-gray-700 group-hover:text-white transition-colors duration-300">
                           <p><strong class="font-semibold text-gray-800 group-hover:text-white/90">Teknologi:</strong> Motor Servo, 3D Printing, Inverse Kinematics.</p>
                           <p><strong class="font-semibold text-gray-800 group-hover:text-white/90">Learning Outcomes:</strong> Simulasi industri, kontrol motor presisi.</p>
                           <p><strong class="font-semibold text-gray-800 group-hover:text-white/90">Untuk:</strong> Mahasiswa Teknik, Hobiis Lanjut.</p>
                           <p><strong class="font-semibold text-gray-800 group-hover:text-white/90">Modul:</strong> Desain 3D, simulasi, perakitan.</p>
                           <p><strong class="font-semibold text-gray-800 group-hover:text-white/90">Perangkat:</strong> 4-Axis Arm Kit + Simulator ROSUS.</p>
                        </div>
                        <p class="text-xl font-bold my-5 text-[#002343] group-hover:text-white transition-colors duration-300">
                          Harga: <span>Rp xxx.xxx,-</span>
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3">
                           <a href="#" class="group/btn inline-flex items-center justify-center px-6 py-3 bg-blue-100 group-hover:bg-white text-[#0157B2] group-hover:text-[#0157B2] font-semibold rounded-full transition-all duration-300 transform hover:scale-105">
                                Pelajari Lanjut
                            </a>
                            <a href="#" class="group/btn inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] group-hover:bg-white text-white group-hover:text-[#0157B2] font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                                Daftar Paket Ini
                            </a>
                        </div>
                    </div>
                </div>
            </div> </div>
    </div>
</section>

<section class="bg-white py-16 sm:py-20">
    <div class="container mx-auto px-4">

        <div data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-[#002343] mb-2 pt-4">
                Apa yang Akan <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0157B2] to-[#01C0DB]">Dipelajari</span>
            </h2>
            <hr class="border-t border-gray-200 mb-6">
            <ul class="list-disc list-inside text-gray-700 space-y-2 text-lg pl-2">
                <li>Pemrograman robotik dasar & lanjutan</li>
                <li>Pemahaman hardware dan sensor gerak</li>
                <li>Penerapan AI dasar di perangkat fisik</li>
            </ul>
        </div>

        <div class="mt-12" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-[#002343] mb-2 pt-4">
                Untuk <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0157B2] to-[#01C0DB]">Siapa</span> Paket Ini?
            </h2>
            <hr class="border-t border-gray-200 mb-6">
            <ul class="list-disc list-inside text-gray-700 space-y-2 text-lg pl-2">
                <li>Pelajar SMA/SMK</li>
                <li>Mahasiswa Teknik/Elektronika/IT</li>
                <li>Profesional bidang robotika</li>
                <li>Hobiis teknologi dan inovasi</li>
            </ul>
        </div>

        <div class="mt-12" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-[#002343] mb-2 pt-4">
                Modul <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0157B2] to-[#01C0DB]">Pembelajaran</span> Utama
            </h2>
            <hr class="border-t border-gray-200 mb-6">
            <ul class="list-disc list-inside text-gray-700 space-y-2 text-lg pl-2">
                <li>Modul 1: Pengantar Robotika dan Sensor</li>
                <li>Modul 2: Coding Dasar & Algoritma Kontrol</li>
                <li>Modul 3: Simulasi & Uji Coba</li>
                <li>Modul 4: Studi Kasus dan Tugas Proyek</li>
            </ul>
        </div>

    </div>
</section>

<section id="sertifikasi" class="bg-gray-50 py-16 sm:py-20">
    <div class="container mx-auto px-4">

        <div data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-[#002343] mb-2 pt-4">
                Harga & <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0157B2] to-[#01C0DB]">Sertifikasi</span>
            </h2>
            <hr class="border-t border-gray-200 mb-6">
            <a href="#paket" class="text-lg text-[#0157B2] font-semibold hover:underline">
                [ Lihat Harga Paket di atas ]
            </a>
        </div>

        <div class="mt-8 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-2xl shadow-lg p-6 md:p-10 border border-blue-100" data-aos="fade-up" data-aos-delay="100">
            
            <h3 class="text-3xl font-bold text-[#002343] mb-6">
                Sertifikasi Resmi
            </h3>

            <p class="text-lg text-gray-700 mb-6">
                Ujian akhir tersedia untuk mendapatkan sertifikat resmi dari TEROBOS.
            </p>

            <div class="space-y-5 text-lg">
                
                <div>
                    <span class="flex items-center font-semibold mb-2 text-gray-800">
                        <i class="fas fa-award mr-2 text-[#0157B2]"></i> {{-- Warna Biru Utama --}}
                        Sertifikasi Resmi dari TEROBOS:
                    </span>
                    <ul class="list-disc list-inside ml-6 text-gray-600 space-y-1">
                        <li>Uji kompetensi setelah menyelesaikan modul belajar.</li>
                        <li>Dapatkan sertifikat elektronik resmi TEROBOS.</li>
                    </ul>
                </div>

                <div>
                    <span class="flex items-center font-semibold mb-2 text-gray-800">
                        <i class="fas fa-star mr-2 text-[#01C0DB]"></i> {{-- Warna Cyan Cerah --}}
                        Manfaat:
                    </span>
                    <ul class="list-disc list-inside ml-6 text-gray-600 space-y-1">
                        <li>Bukti keterampilan nyata.</li>
                        <li>Meningkatkan nilai tambah dalam portofolio & CV.</li>
                    </ul>
                </div>

                <div>
                    <span class="flex items-center font-semibold mb-2 text-gray-800">
                        <i class="fas fa-check-circle mr-2 text-green-600"></i> {{-- Warna Hijau --}}
                        Cara Mendapatkan Sertifikasi:
                    </span>
                    <ol class="list-decimal list-inside ml-6 text-gray-600 space-y-1" style="list-style-type: lower-alpha;">
                        <li>Selesaikan seluruh materi dan praktik.</li>
                        <li>Lulus ujian online akhir.</li>
                        <li>Download sertifikat setelah lulus.</li>
                    </ol>
                </div>
            </div>

            <div class="mt-8">
                <a href="#" class="group inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] hover:from-[#01C0DB] hover:to-[#0157B2] text-white font-semibold rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    Ajukan Sertifikasi Sekarang
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

        </div> </div>
</section>
            
@endsection