{{-- resources/views/auth/customer/login.blade.php --}}

@extends('layouts.app')

@section('title', 'Login - Terobos')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 flex items-center justify-center py-12 px-4 sm:px-6 mt-12 lg:px-8">
    <div class="max-w-md w-full">
        
        <div class="text-center mb-8">
            <div class="mx-auto h-16 w-16 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full flex items-center justify-center mb-4">
                <i class="fas fa-robot text-white text-2xl animate-pulse"></i>
            </div>
            <h2 class="text-3xl font-bold text-white mb-2">Selamat Datang Kembali</h2>
            <p class="text-gray-300">Masuk ke akun Terobos Anda</p>
        </div>

        <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 shadow-2xl border border-white/20">
            @if ($errors->any())
                <div class="mb-6 bg-red-500/10 border border-red-500/50 rounded-lg p-4">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-triangle text-red-400 mr-2"></i>
                        <span class="text-red-300 text-sm">
                            {{ $errors->first() }}
                        </span>
                    </div>
                </div>
            @endif

            <form method="POST" action="{{ route('auth.login.post') }}" class="space-y-6">
                @csrf
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-200 mb-2">
                        <i class="fas fa-envelope mr-2 text-cyan-400"></i>Alamat Email
                    </label>
                    <input type="email" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}"
                           required 
                           class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300"
                           placeholder="Masukkan email Anda">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-200 mb-2">
                        <i class="fas fa-lock mr-2 text-cyan-400"></i>Kata Sandi
                    </label>
                    <div class="relative">
                        <input type="password" 
                               id="password" 
                               name="password" 
                               required 
                               class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300"
                               placeholder="Masukkan kata sandi Anda">
                        <button type="button" 
                                onclick="togglePassword()" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                            <i id="password-icon" class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" 
                               name="remember" 
                               class="w-4 h-4 text-cyan-600 bg-white/5 border-white/20 rounded focus:ring-cyan-500 focus:ring-2">
                        <span class="ml-2 text-sm text-gray-300">Ingat saya</span>
                    </label>
                    <a href="{{ route('auth.forgot-password') }}" class="text-sm text-cyan-400 hover:text-cyan-300 transition-colors">
                        Lupa kata sandi?
                    </a>
                </div>

                <button type="submit" 
                        class="w-full relative group bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-cyan-500/25">
                    <span class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500 via-blue-600 to-indigo-500 opacity-30 blur-sm group-hover:opacity-100 transition-all duration-500 rounded-lg"></span>
                    <span class="relative flex items-center justify-center">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        Masuk
                    </span>
                </button>

                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-white/20"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-transparent text-gray-400">Belum punya akun?</span>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('auth.register') }}" 
                       class="inline-flex items-center px-6 py-2 border-2 border-cyan-400/50 text-cyan-400 rounded-lg hover:bg-cyan-400 hover:text-gray-900 transition-all duration-300 font-medium">
                        <i class="fas fa-user-plus mr-2"></i>
                        Buat Akun Baru
                    </a>
                </div>
            </form>
        </div>

        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors text-sm">
                <i class="fas fa-arrow-left mr-2"></i>Kembali ke Beranda
            </a>
        </div>
    </div>
</div>

<script>
function togglePassword() {
    const passwordField = document.getElementById('password');
    const passwordIcon = document.getElementById('password-icon');
    
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        passwordIcon.classList.remove('fa-eye');
        passwordIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        passwordIcon.classList.remove('fa-eye-slash');
        passwordIcon.classList.add('fa-eye');
    }
}
</script>
@endsection