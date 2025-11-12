@extends('layouts.app')

{{-- 
  Anda bisa tambahkan @section('title', 'Kontak') di sini jika mau, 
  tapi saya biarkan kosong agar sesuai dengan file asli Anda.
--}}

@section('content')

<section id="contact" class="pt-28 pb-16 sm:py-24 bg-gradient-to-br from-white via-sky-50 to-cyan-50">
    <div class="container mx-auto px-4" data-aos="fade-right">
        <div class="text-center mb-16 sm:mb-20">
            <span class="inline-block px-4 sm:px-5 py-2 bg-cyan-100 text-[#0157B2] rounded-full text-sm font-semibold tracking-wide mb-4">
                ✨ Hubungi Kami
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#002343] mb-4">
                Mari 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0157B2] to-[#01C0DB]">
                    Terhubung
                </span>
            </h2>
            <p class="text-base sm:text-lg text-gray-600 max-w-xl mx-auto leading-relaxed">
                Punya pertanyaan, saran, atau hanya ingin menyapa? Kami ingin mendengar dari Anda. Tim kami selalu siap membantu!
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 sm:gap-12">
            
            <div class="space-y-8 sm:space-y-10">
                <div class="bg-white p-6 sm:p-8 shadow-xl rounded-2xl sm:rounded-3xl border border-gray-100 hover:shadow-2xl transition-shadow duration-500">
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="text-[#0157B2] text-xl sm:text-2xl mr-4 flex-shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#002343] text-lg sm:text-xl mb-1">Lokasi Kami</h4>
                                <p class="text-gray-600 text-sm sm:text-base">Makamhaji, Wisma kahfi</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="text-[#0157B2] text-xl sm:text-2xl mr-4 flex-shrink-0">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#002343] text-lg sm:text-xl mb-1">Telepon Kami</h4>
                                <p><a href="tel:+62895802850204" class="text-[#0157B2] hover:underline text-sm sm:text-base">+62xx</a></p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="text-[#0157B2] text-xl sm:text-2xl mr-4 flex-shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#002343] text-lg sm:text-xl mb-1">Email Kami</h4>
                                <p><a href="mailto:admin@rosus.my.id" class="text-[#0157B2] hover:underline text-sm sm:text-base">jarpakterobos2025@gmail.com</a></p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="text-[#0157B2] text-xl sm:text-2xl mr-4 flex-shrink-0">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#002343] text-lg sm:text-xl mb-1">Jam Kerja</h4>
                                {{-- Mengubah format jam agar lebih umum di Indonesia --}}
                                <p class="text-gray-600 text-sm sm:text-base">Sen – Jum: 09.00 – 18.00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
            <div class="bg-white p-6 sm:p-10 rounded-2xl sm:rounded-3xl shadow-xl border border-gray-100">
                <h4 class="text-xl sm:text-2xl font-bold text-[#002343] mb-6 sm:mb-8">📬 Kirimkan Kami Pesan</h4>
                <form id="contact-form" method="POST" action="contact-form.php" class="space-y-4 sm:space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Anda</label>
                        <input type="text" name="name" placeholder="Nama Lengkap Anda" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#01C0DB] focus:outline-none transition duration-300 text-sm sm:text-base" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email Anda</label>
                        <input type="email" name="email" placeholder="anda@email.com" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#01C0DB] focus:outline-none transition duration-300 text-sm sm:text-base" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                        <input type="tel" name="phone" placeholder="+62 8xx" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#01C0DB] focus:outline-none transition duration-300 text-sm sm:text-base" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Pesan Anda</label>
                        <textarea name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#01C0DB] focus:outline-none transition duration-300 resize-none text-sm sm:text-base"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-[#0157B2] to-[#01C0DB] hover:from-[#01C0DB] hover:to-[#0157B2] text-white font-semibold py-3 sm:py-4 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-md text-sm sm:text-base">
                        Kirim Pesan <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                </form>
            </div>
            
        </div>
    </div>
</section>

@endsection