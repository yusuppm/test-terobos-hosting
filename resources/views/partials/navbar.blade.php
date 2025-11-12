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