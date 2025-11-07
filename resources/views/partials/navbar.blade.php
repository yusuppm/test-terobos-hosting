<header class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-br from-[#002343] to-[#0157B2] backdrop-blur-lg border-b border-white/10 shadow-lg ">
    <nav class="container mx-auto px-4 ">
        <div class="flex items-center justify-between h-20">
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Rosus Logo" class="h-10 w-auto">
                </a>
            </div>

            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="nav-link text-blue-200 hover:text-white transition-colors duration-300 {{ request()->routeIs('home') ? 'font-bold text-white' : '' }}">
                    Beranda
                </a>
                
                <div class="relative group">
                    <button class="flex items-center space-x-1 nav-link text-blue-200 hover:text-white transition-colors duration-300 focus:outline-none 
                                  {{ (request()->routeIs('pembelajaran.info') || request()->routeIs('kursus.*')) ? 'font-bold text-white' : '' }}">
                        <span>Pembelajaran</span>
                        <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform duration-300"></i>
                    </button>
                    
                    <div class="absolute left-0 mt-2 w-48 
                                bg-gradient-to-br from-[#002343] to-[#0157B2] 
                                rounded-lg shadow-2xl border border-white/10 
                                opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                                transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 z-50">
                        <div class="py-2">
                            <a href="{{ route('pembelajaran.info') }}" 
                               class="flex items-center px-4 py-2 hover:text-white hover:bg-white/5 transition-all duration-200 
                                      {{ request()->routeIs('pembelajaran.info') ? 'font-bold text-[#01C0DB]' : 'text-blue-200' }}">
                                Info Pembelajaran
                            </a>
                            <a href="{{ route('kursus.index') }}" 
                               class="flex items-center px-4 py-2 hover:text-white hover:bg-white/5 transition-all duration-200 
                                      {{ request()->routeIs('kursus.*') ? 'font-bold text-[#01C0DB]' : 'text-blue-200' }}">
                                Katalog Kursus
                            </a>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('komunitas.index') }}" class="nav-link text-blue-200 hover:text-white transition-colors duration-300 {{ request()->routeIs('komunitas.index') ? 'font-bold text-white' : '' }}">
                    Komunitas
                </a>
                <a href="{{ route('perangkat.index') }}" class="nav-link text-blue-200 hover:text-white transition-colors duration-300 {{ request()->routeIs('perangkat.index') ? 'font-bold text-white' : '' }}">
                    Perangkat
                </a>
                <a href="{{ route('news.index') }}" class="nav-link text-blue-200 hover:text-white transition-colors duration-300 {{ request()->routeIs('news.index') ? 'font-bold text-white' : '' }}">
                    Berita
                </a>
                <a href="{{ route('contact.index') }}" class="nav-link text-blue-200 hover:text-white transition-colors duration-300 {{ request()->routeIs('contact.index') ? 'font-bold text-white' : '' }}">
                    Kontak
                </a> 
                
                @auth('customer')
                    <div class="relative group">
                        <button class="flex items-center space-x-2 text-white hover:text-[#01C0DB] transition-colors duration-300 focus:outline-none">
                            <div class="w-8 h-8 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] rounded-full flex items-center justify-center">
                                @if(auth('customer')->user()->avatar)
                                    <img src="{{ auth('customer')->user()->avatar_url }}" alt="Avatar" class="w-8 h-8 rounded-full object-cover">
                                @else
                                    <i class="fas fa-user text-sm"></i>
                                @endif
                            </div>
                            <span class="font-medium">{{ auth('customer')->user()->first_name }}</span>
                            <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform duration-300"></i>
                        </button>
                        
                        <div class="absolute right-0 mt-2 w-56 bg-[#002343]/95 backdrop-blur-lg rounded-lg shadow-2xl border border-white/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2">
                            <div class="p-4 border-b border-white/10">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] rounded-full flex items-center justify-center">
                                        @if(auth('customer')->user()->avatar)
                                            <img src="{{ auth('customer')->user()->avatar_url }}" alt="Avatar" class="w-10 h-10 rounded-full object-cover">
                                        @else
                                            <i class="fas fa-user"></i>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="text-white font-medium">{{ auth('customer')->user()->name }}</p>
                                        <p class="text-gray-400 text-sm">{{ auth('customer')->user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <a href="{{ route('auth.profile') }}" class="flex items-center px-4 py-2 text-blue-200 hover:text-white hover:bg-white/5 transition-all duration-200">
                                    <i class="fas fa-user-circle mr-3 text-[#01C0DB]"></i>
                                    My Profile
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-blue-200 hover:text-white hover:bg-white/5 transition-all duration-200">
                                    <i class="fas fa-shopping-bag mr-3 text-[#01C0DB]"></i>
                                    My Orders
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-blue-200 hover:text-white hover:bg-white/5 transition-all duration-200">
                                    <i class="fas fa-heart mr-3 text-[#01C0DB]"></i>
                                    Wishlist
                                </a>
                                <div class="border-t border-white/10 my-2"></div>
                                <form method="POST" action="{{ route('auth.logout') }}">
                                    @csrf
                                    <button type="submit" class="flex items-center w-full px-4 py-2 text-blue-200 hover:text-red-400 hover:bg-white/5 transition-all duration-200">
                                        <i class="fas fa-sign-out-alt mr-3"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ route('auth.login') }}" class="relative group inline-block px-6 py-2 font-semibold text-white border-2 border-[#01C0DB] rounded-full overflow-hidden transition-all duration-300 hover:bg-[#01C0DB] hover:text-[#002343] shadow-md hover:shadow-cyan-400/40">
                        <span class="absolute -inset-0.5 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] opacity-30 blur-sm group-hover:opacity-100 transition-all duration-500"></span>
                        <span class="relative z-10 flex items-center gap-2">
                            <i class="fas fa-robot text-[#01C0DB] group-hover:text-[#002343] animate-pulse"></i> Login
                        </span>
                    </a>
                @endauth
                </div>

            <div class="lg:hidden">
                <button id="mobile-menu-toggle" class="text-white focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <div id="mobile-menu" class="hidden lg:hidden bg-gradient-to-br from-[#002343] to-[#0157B2] px-4 py-6 space-y-4 text-center text-white">
        <a href="{{ route('home') }}" class="block hover:text-[#01C0DB] {{ request()->routeIs('home') ? 'font-bold text-[#01C0DB]' : '' }}">Beranda</a>
        
        <div>
            <button id="mobile-pembelajaran-toggle" class="w-full flex justify-center items-center space-x-1 py-2 hover:text-[#01C0DB] {{ (request()->routeIs('pembelajaran.info') || request()->routeIs('kursus.*')) ? 'font-bold text-[#01C0DB]' : '' }}">
                <span>Pembelajaran</span>
                <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
            </button>
            
            <div id="mobile-pembelajaran-menu" class="hidden pt-2 pb-1 space-y-2 bg-black/20 rounded-lg mt-2">
                <a href="{{ route('pembelajaran.info') }}" class="block hover:text-[#01C0DB] {{ request()->routeIs('pembelajaran.info') ? 'font-bold text-[#01C0DB]' : '' }}">
                    Info Pembelajaran
                </a>
                <a href="{{ route('kursus.index') }}" class="block hover:text-[#01C0DB] {{ request()->routeIs('kursus.*') ? 'font-bold text-[#01C0DB]' : '' }}">
                    Katalog Kursus
                </a>
            </div>
        </div>
        
        <a href="{{ route('komunitas.index') }}" class="block hover:text-[#01C0DB] {{ request()->routeIs('komunitas.index') ? 'font-bold text-[#01C0DB]' : '' }}">
            Komunitas
        </a>
        
        <a href="{{ route('perangkat.index') }}" class="block hover:text-[#01C0DB] {{ request()->routeIs('perangkat.index') ? 'font-bold text-[#01C0DB]' : '' }}">
            Perangkat
        </a>
        
        <a href="{{ route('news.index') }}" class="block hover:text-[#01C0DB] {{ request()->routeIs('news.index') ? 'font-bold text-[#01C0DB]' : '' }}">
            Berita
        </a>
        <a href="{{ route('contact.index') }}" class="block hover:text-[#01C0DB] {{ request()->routeIs('contact.index') ? 'font-bold text-[#01C0DB]' : '' }}">
            Kontak
        </a>
        
        @auth('customer')
            <div class="border-t border-white/20 pt-4 mt-4">
               <div class="flex items-center justify-center space-x-3 mb-4">
                    <div class="w-10 h-10 bg-gradient-to-r from-[#0157B2] to-[#01C0DB] rounded-full flex items-center justify-center">
                        @if(auth('customer')->user()->avatar)
                            <img src="{{ auth('customer')->user()->avatar_url }}" alt="Avatar" class="w-10 h-10 rounded-full object-cover">
                        @else
                            <i class="fas fa-user"></i>
                        @endif
                    </div>
                    <div class="text-left">
                        <p class="text-white font-medium">{{ auth('customer')->user()->first_name }}</p>
                        <p class="text-gray-400 text-sm">{{ auth('customer')->user()->email }}</p>
                    </div>
                </div>
                <a href="{{ route('auth.profile') }}" class="block py-2 px-4 bg-white/5 rounded-lg mb-2 hover:bg-white/10 transition-all duration-300">
                    <i class="fas fa-user-circle mr-2 text-[#01C0DB]"></i>My Profile
                </a>
                <form method="POST" action="{{ route('auth.logout') }}">
                    @csrf
                    <button type="submit" class="w-full py-2 px-4 bg-red-500/20 text-red-400 rounded-lg hover:bg-red-500/30 transition-all duration-300">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </button>
                </form>
            </div>
        @else
            <a href="{{ route('auth.login') }}" class="block bg-[#01C0DB] text-[#002343] font-semibold py-2 px-4 rounded-full hover:bg-cyan-400 transition-all duration-300 shadow-md hover:shadow-cyan-300/50">
                <i class="fas fa-robot mr-2"></i> Login
            </a>
        @endauth
        </div>
</header>

<script>
    // --- KODE LAMA (BIARKAN) ---
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!toggleBtn.contains(e.target) && !mobileMenu.contains(e.target) && !mobileMenu.classList.contains('hidden')) {
            // Kita cek agar tidak menutup menu jika menu memang sudah tertutup
            mobileMenu.classList.add('hidden');
        }
    });
    
    // === KODE UNTUK DROPDOWN MOBILE ===
    const pembelajaranToggle = document.getElementById('mobile-pembelajaran-toggle');
    const pembelajaranMenu = document.getElementById('mobile-pembelajaran-menu');

    pembelajaranToggle.addEventListener('click', (e) => {
        e.stopPropagation(); // Mencegah menu utama tertutup saat dropdown diklik
        pembelajaranMenu.classList.toggle('hidden');
        
        // Memutar panah
        const pembelajaranChevron = pembelajaranToggle.querySelector('i');
        if (pembelajaranChevron) {
            pembelajaranChevron.classList.toggle('rotate-180');
        }
    });

    // Tambahan: Pastikan dropdown pembelajaran tidak memicu penutupan menu utama
    pembelajaranMenu.addEventListener('click', (e) => {
        e.stopPropagation();
    });
</script>