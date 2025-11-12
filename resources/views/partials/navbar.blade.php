<header class="fixed top-0 left-0 right-0 z-50 bg-gray-50 border-b border-gray-200 shadow-lg ">
    <nav class="container mx-auto px-4 ">
        <div class="flex items-center justify-between h-20">
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Rosus Logo" class="h-10 w-auto">
                </a>
            </div>

            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="nav-link text-[#59BBE1] hover:text-blue-700 transition-colors duration-300 {{ request()->routeIs('home') ? 'font-bold text-blue-700' : '' }}">
                    Beranda
                </a>
                
                <div class="relative group">
                    <button class="flex items-center space-x-1 nav-link text-[#59BBE1] hover:text-blue-700 transition-colors duration-300 focus:outline-none 
                                    {{ (request()->routeIs('pembelajaran.info') || request()->routeIs('kursus.*')) ? 'font-bold text-blue-700' : '' }}">
                        <span>Pembelajaran</span>
                        <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform duration-300"></i>
                    </button>
                    
                    <div class="absolute left-0 mt-2 w-48 
                                bg-white 
                                rounded-lg shadow-2xl border border-gray-100 
                                opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                                transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 z-50">
                        <div class="py-2">
                            <a href="{{ route('pembelajaran.info') }}" 
                               class="flex items-center px-4 py-2 hover:text-blue-700 hover:bg-gray-50 transition-all duration-200 
                                      {{ request()->routeIs('pembelajaran.info') ? 'font-bold text-blue-700' : 'text-[#59BBE1]' }}">
                                Info Pembelajaran
                            </a>
                            <a href="{{ route('kursus.index') }}" 
                               class="flex items-center px-4 py-2 hover:text-blue-700 hover:bg-gray-50 transition-all duration-200 
                                      {{ request()->routeIs('kursus.*') ? 'font-bold text-blue-700' : 'text-[#59BBE1]' }}">
                                Katalog Kursus
                            </a>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('komunitas.index') }}" class="nav-link text-[#59BBE1] hover:text-blue-700 transition-colors duration-300 {{ request()->routeIs('komunitas.index') ? 'font-bold text-blue-700' : '' }}">
                    Komunitas
                </a>
                <a href="{{ route('perangkat.index') }}" class="nav-link text-[#59BBE1] hover:text-blue-700 transition-colors duration-300 {{ request()->routeIs('perangkat.index') ? 'font-bold text-blue-700' : '' }}">
                    Perangkat
                </a>
                <a href="{{ route('news.index') }}" class="nav-link text-[#59BBE1] hover:text-blue-700 transition-colors duration-300 {{ request()->routeIs('news.index') ? 'font-bold text-blue-700' : '' }}">
                    Berita
                </a>
                <a href="{{ route('contact.index') }}" class="nav-link text-[#59BBE1] hover:text-blue-700 transition-colors duration-300 {{ request()->routeIs('contact.index') ? 'font-bold text-blue-700' : '' }}">
                    Kontak
                </a> 
                
                @auth('customer')
                    <div x-data="{ open: false }" class="relative" @click.away="open = false">
                        
                        <button @click="open = !open" class="flex items-center space-x-2 text-[#59BBE1] hover:text-blue-700 transition-colors duration-300 focus:outline-none">
                            
                            <div class="w-8 h-8 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full flex items-center justify-center overflow-hidden">
                                @if(auth('customer')->user()->avatar)
                                    <img src="{{ auth('customer')->user()->avatar_url }}" alt="Avatar" class="w-8 h-8 rounded-full object-cover">
                                @else
                                    <i class="fas fa-user text-sm text-white"></i>
                                @endif
                            </div>
                            
                            <span class="font-medium">{{ auth('customer')->user()->first_name }}</span>
                            <i class="fas fa-chevron-down text-xs transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                        </button>
                        
                        <div x-show="open" 
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform translate-y-2"
                            style="display: none;" 
                            class="absolute right-0 mt-2 w-56 bg-gray-900/80 backdrop-blur-lg rounded-xl shadow-2xl border border-white/20">
                            
                            <div class="p-4 border-b border-white/20">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full flex items-center justify-center overflow-hidden">
                                        @if(auth('customer')->user()->avatar)
                                            <img src="{{ auth('customer')->user()->avatar_url }}" alt="Avatar" class="w-10 h-10 rounded-full object-cover">
                                        @else
                                            <i class="fas fa-user text-white"></i>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="text-white font-medium">{{ auth('customer')->user()->name }}</p>
                                        <p class="text-gray-400 text-sm">{{ auth('customer')->user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="py-2">
                                <a href="{{ route('auth.profile') }}" class="flex items-center px-4 py-2 text-gray-300 hover:text-cyan-400 hover:bg-white/10 transition-colors duration-200">
                                    <i class="fas fa-user-circle mr-3 text-cyan-400"></i>
                                    Profil Saya
                                </a>
                                
                                <div class="border-t border-white/20 my-2"></div>
                                
                                <form method="POST" action="{{ route('auth.logout') }}">
                                    @csrf
                                    <button type="submit" class="flex items-center w-full px-4 py-2 text-gray-300 hover:text-red-400 hover:bg-white/10 transition-colors duration-200">
                                        <i class="fas fa-sign-out-alt mr-3"></i>
                                        Keluar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ route('auth.login') }}" class="relative group inline-block px-6 py-2 font-semibold text-white bg-gradient-to-r from-sky-500 to-blue-600 rounded-full transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/40 transform hover:scale-105">
                        <span class="relative z-10 flex items-center gap-2">
                            <i class="fas fa-robot"></i> Login
                        </span>
                    </a>
                @endauth
                </div>

            <div class="lg:hidden">
                <button id="mobile-menu-toggle" class="text-gray-800 focus:outline-none"> <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <div id="mobile-menu" class="hidden lg:hidden bg-gray-50 px-4 py-6 space-y-4 text-center text-gray-800 shadow-xl border-t border-gray-200">
        <a href="{{ route('home') }}" class="block text-[#59BBE1] hover:text-blue-700 {{ request()->routeIs('home') ? 'font-bold text-blue-700' : '' }}">Beranda</a>
        
        <div>
            <button id="mobile-pembelajaran-toggle" class="w-full flex justify-center items-center space-x-1 py-2 text-[#59BBE1] hover:text-blue-700 {{ (request()->routeIs('pembelajaran.info') || request()->routeIs('kursus.*')) ? 'font-bold text-blue-700' : '' }}">
                <span>Pembelajaran</span>
                <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
            </button>
            
            <div id="mobile-pembelajaran-menu" class="hidden pt-2 pb-1 space-y-2 bg-gray-100 rounded-lg mt-2">
                <a href="{{ route('pembelajaran.info') }}" class="block text-[#59BBE1] hover:text-blue-700 {{ request()->routeIs('pembelajaran.info') ? 'font-bold text-blue-700' : '' }}">
                    Info Pembelajaran
                </a>
                <a href="{{ route('kursus.index') }}" class="block text-[#59BBE1] hover:text-blue-700 {{ request()->routeIs('kursus.*') ? 'font-bold text-blue-700' : '' }}">
                    Katalog Kursus
                </a>
            </div>
        </div>
        
        <a href="{{ route('komunitas.index') }}" class="block text-[#59BBE1] hover:text-blue-700 {{ request()->routeIs('komunitas.index') ? 'font-bold text-blue-700' : '' }}">
            Komunitas
        </a>
        <a href="{{ route('perangkat.index') }}" class="block text-[#59BBE1] hover:text-blue-700 {{ request()->routeIs('perangkat.index') ? 'font-bold text-blue-700' : '' }}">
            Perangkat
        </a>
        <a href="{{ route('news.index') }}" class="block text-[#59BBE1] hover:text-blue-700 {{ request()->routeIs('news.index') ? 'font-bold text-blue-700' : '' }}">
            Berita
        </a>
        <a href="{{ route('contact.index') }}" class="block text-[#59BBE1] hover:text-blue-700 {{ request()->routeIs('contact.index') ? 'font-bold text-blue-700' : '' }}">
            Kontak
        </a>
        
        @auth('customer')
            <div class="border-t border-gray-200 pt-4 mt-4">
               <div class="flex items-center justify-center space-x-3 mb-4">
                    <div class="w-10 h-10 bg-gradient-to-r from-sky-500 to-blue-600 rounded-full flex items-center justify-center">
                        @if(auth('customer')->user()->avatar)
                            <img src="{{ auth('customer')->user()->avatar_url }}" alt="Avatar" class="w-10 h-10 rounded-full object-cover">
                        @else
                            <i class="fas fa-user text-white"></i>
                        @endif
                    </div>
                    <div class="text-left">
                        <p class="text-gray-900 font-medium">{{ auth('customer')->user()->first_name }}</p>
                        <p class="text-gray-500 text-sm">{{ auth('customer')->user()->email }}</p>
                    </div>
               </div>
                <a href="{{ route('auth.profile') }}" class="block py-2 px-4 bg-gray-100 rounded-lg mb-2 hover:bg-gray-200 transition-all duration-300">
                    <i class="fas fa-user-circle mr-2 text-sky-500"></i>My Profile
                </a>
                <form method="POST" action="{{ route('auth.logout') }}">
                    @csrf
                    <button type="submit" class="w-full py-2 px-4 bg-red-100 text-red-500 rounded-lg hover:bg-red-200 transition-all duration-300">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </button>
                </form>
            </div>
        @else
            <a href="{{ route('auth.login') }}" class="block bg-gradient-to-r from-sky-500 to-blue-600 text-white font-semibold py-2 px-4 rounded-full hover:shadow-lg transition-all duration-300 shadow-md">
                <i class="fas fa-robot mr-2"></i> Login
            </a>
        @endauth
    </div>
</header>

<script>
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    document.addEventListener('click', (e) => {
        if (!toggleBtn.contains(e.target) && !mobileMenu.contains(e.target) && !mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
        }
    });
    
    const pembelajaranToggle = document.getElementById('mobile-pembelajaran-toggle');
    const pembelajaranMenu = document.getElementById('mobile-pembelajaran-menu');

    pembelajaranToggle.addEventListener('click', (e) => {
        e.stopPropagation(); 
        pembelajaranMenu.classList.toggle('hidden');
        
        const pembelajaranChevron = pembelajaranToggle.querySelector('i');
        if (pembelajaranChevron) {
            pembelajaranChevron.classList.toggle('rotate-180');
        }
    });

    pembelajaranMenu.addEventListener('click', (e) => {
        e.stopPropagation();
    });
</script>