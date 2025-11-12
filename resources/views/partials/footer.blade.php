<footer class="relative bg-gradient-to-br from-[#002343] to-[#0157B2] text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-white rounded-full -translate-x-1/2 translate-y-1/2"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 py-16">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8 mb-12">
            
            <div class="lg:col-span-1 space-y-6" data-aos="fade-right">
                <a href="{{ route('home') }}" class="inline-block">
                    <img src="{{ asset('images/logo.png') }}" alt="Rosus Logo" class="h-12 w-auto">
                </a>
                <p class="text-blue-200 leading-relaxed">
                    Membangun Inovator, Menjaga Planet. Platform edukasi robotika pertama di Indonesia dengan perangkat keras daur ulang.
                </p>
                
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-[#01C0DB]/20 hover:bg-[#01C0DB] text-white rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-[#01C0DB]/20 hover:bg-[#01C0DB] text-white rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-[#01C0DB]/20 hover:bg-[#01C0DB] text-white rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-[#01C0DB]/20 hover:bg-[#01C0DB] text-white rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="space-y-6" data-aos="fade-up" data-aos-delay="100">
                <h4 class="text-xl font-bold text-white mb-6">Navigasi</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('home') }}" class="flex items-center text-blue-200 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-[#01C0DB]"></i>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pembelajaran.info') }}" class="flex items-center text-blue-200 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-[#01C0DB]"></i>
                            Pembelajaran
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('komunitas.index') }}" class="flex items-center text-blue-200 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-[#01C0DB]"></i>
                            Komunitas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('perangkat.index') }}" class="flex items-center text-blue-200 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-[#01C0DB]"></i>
                            Perangkat
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('news.index') }}" class="flex items-center text-blue-200 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-[#01C0DB]"></i>
                            Berita
                        </a>
                    </li>
                </ul>
            </div>

            <div class="space-y-6" data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-xl font-bold text-white mb-6">Layanan Kami</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('kursus.index') }}" class="flex items-center text-blue-200 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-[#01C0DB]"></i>
                            Katalog Kursus
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('perangkat.index') }}" class="flex items-center text-blue-200 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-[#01C0DB]"></i>
                            Perangkat Daur Ulang
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pembelajaran.info') }}#sertifikasi" class="flex items-center text-blue-200 hover:text-white hover:translate-x-2 transition-all duration-300">
                            <i class="fas fa-angle-right mr-3 text-[#01C0DB]"></i>
                            Sertifikasi
                        </a>
                    </li>
                </ul>
            </div>

            <div class="space-y-6" data-aos="fade-left" data-aos-delay="300">
                <h4 class="text-xl font-bold text-white mb-6">Hubungi Kami</h4>
                <ul class="space-y-4">
                    <li class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-[#01C0DB] rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-phone text-xs text-[#002343]"></i>
                        </div>
                        <div>
                            <a href="tel:+62xxx" class="text-blue-200 hover:text-white transition-colors">
                                +62xxx
                            </a>
                        </div>
                    </li>
                    <li class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-[#01C0DB] rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-envelope text-xs text-[#002343]"></i>
                        </div>
                        <div>
                            <a href="mailto:jarpakterobos2025@gmail.com" class="text-blue-200 hover:text-white transition-colors">
                                jarpakterobos2025@gmail.com
                            </a>
                        </div>
                    </li>
                    <li class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-[#01C0DB] rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-map-marker-alt text-xs text-[#002343]"></i>
                        </div>
                        <div>
                            <p class="text-blue-200 leading-relaxed">
                                Makamhaji, Wisma kahfi
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

 
    <div class="relative z-10 bg-black/20 border-t border-white/10">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-blue-200 text-center md:text-left">
                    © {{ date('Y') }} Terobos Platform. All Rights Reserved.
                </p>
                
                <div class="flex items-center space-x-6 text-sm text-blue-200">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-[#0157B2] to-[#01C0DB]"></div>
</footer>