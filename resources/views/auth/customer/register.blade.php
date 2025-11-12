{{-- resources/views/auth/customer/register.blade.php --}}

@extends('layouts.app')

@section('title', 'Register - Terobos')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 mt-12 ">
    <div class="max-w-2xl w-full">
        <div class="text-center mb-8" data-aos="fade-down">
            <div class="mx-auto h-16 w-16 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full flex items-center justify-center mb-4">
                <i class="fas fa-user-plus text-white text-2xl"></i>
            </div>
            <h2 class="text-3xl font-bold text-white mb-2">Bergabung dengan Terobos</h2>
            <p class="text-gray-300">Buat akun Anda dan mulailah perjalanan Anda</p>
        </div>

        <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 shadow-2xl border border-white/20" data-aos="fade-up" data-aos-delay="100">
            @if ($errors->any())
                <div class="mb-6 bg-red-500/10 border border-red-500/50 rounded-lg p-4">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-exclamation-triangle text-red-400 mr-2"></i>
                        <span class="text-red-300 text-sm font-medium">Harap perbaiki kesalahan berikut:</span>
                    </div>
                    <ul class="text-red-300 text-sm space-y-1 ml-6">
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('auth.register.post') }}" class="space-y-6">
                @csrf
                
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-200 mb-2">
                        <i class="fas fa-user mr-2 text-cyan-400"></i>Nama Lengkap
                    </label>
                    <input type="text" 
                           id="name" 
                           name="name" 
                           value="{{ old('name') }}"
                           required 
                           class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300"
                           placeholder="Masukkan nama lengkap Anda">
                </div>

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

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-200 mb-2">
                            <i class="fas fa-phone mr-2 text-cyan-400"></i>Nomor Telepon
                        </label>
                        <input type="tel" 
                               id="phone" 
                               name="phone" 
                               value="{{ old('phone') }}"
                               class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300"
                               placeholder="Nomor telepon Anda">
                    </div>
                    
                    <div>
                        <label for="gender" class="block text-sm font-medium text-gray-200 mb-2">
                            <i class="fas fa-venus-mars mr-2 text-cyan-400"></i>Jenis Kelamin
                        </label>
                        
                        @php
                            $old_gender = old('gender');
                            $selected_text = 'Pilih Jenis Kelamin';
                            if ($old_gender == 'male') {
                                $selected_text = 'Laki-laki';
                            } elseif ($old_gender == 'female') {
                                $selected_text = 'Perempuan';
                            }
                        @endphp

                        <div x-data="{ 
                                open: false, 
                                selected: '{{ $old_gender }}', 
                                selectedText: '{{ $selected_text }}' 
                             }" 
                             class="relative" @click.away="open = false">
                            
                            <input type="hidden" name="gender" x-model="selected">

                            <button @click="open = !open" type="button" class="flex items-center justify-between w-full px-4 py-3 text-left bg-white/5 border border-white/20 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300">
                                <span x-text="selectedText" :class="{ 'text-gray-400': selected === '' }"></span>
                                <i class="fas fa-chevron-down text-gray-400 text-xs transition-transform" :class="{ 'rotate-180': open }"></i>
                            </button>

                            <div x-show="open" 
                                 x-transition
                                 class="absolute z-20 w-full mt-2 bg-gray-800 rounded-lg shadow-2xl border border-white/20 overflow-hidden"
                                 style="display: none;">
                                
                                <a @click="selected = 'male'; selectedText = 'Laki-laki'; open = false"
                                   href="#"
                                   class="block px-4 py-3 text-gray-200 hover:bg-white/10 hover:text-cyan-400 transition-colors">
                                   Laki-laki
                                </a>
                                <a @click="selected = 'female'; selectedText = 'Perempuan'; open = false"
                                   href="#"
                                   class="block px-4 py-3 text-gray-200 hover:bg-white/10 hover:text-cyan-400 transition-colors">
                                   Perempuan
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>

                <div>
                    <label for="birth_date" class="block text-sm font-medium text-gray-200 mb-2">
                        <i class="fas fa-birthday-cake mr-2 text-cyan-400"></i>Tanggal Lahir
                    </label>
                    <input type="date" 
                           id="birth_date" 
                           name="birth_date" 
                           value="{{ old('birth_date') }}"
                           class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300">
                </div>

                <div>
                    <label for="address" class="block text-sm font-medium text-gray-200 mb-2">
                        <i class="fas fa-map-marker-alt mr-2 text-cyan-400"></i>Alamat
                    </label>
                    <textarea id="address" 
                              name="address" 
                              rows="3"
                              class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300 resize-none"
                              placeholder="Masukkan alamat Anda">{{ old('address') }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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
                                   placeholder="Buat kata sandi">
                            <button type="button" 
                                    onclick="togglePassword('password')" 
                                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                                <i id="password-icon" class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-200 mb-2">
                            <i class="fas fa-lock mr-2 text-cyan-400"></i>Konfirmasi Kata Sandi
                        </label>
                        <div class="relative">
                            <input type="password" 
                                   id="password_confirmation" 
                                   name="password_confirmation" 
                                   required 
                                   class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300"
                                   placeholder="Konfirmasi kata sandi">
                            <button type="button" 
                                    onclick="togglePassword('password_confirmation')" 
                                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                                <i id="password_confirmation-icon" class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex items-start">
                    <input type="checkbox" 
                           id="terms" 
                           name="terms" 
                           required
                           class="w-4 h-4 text-cyan-600 bg-white/5 border-white/20 rounded focus:ring-cyan-500 focus:ring-2 mt-1">
                    <label for="terms" class="ml-3 text-sm text-gray-300">
                        Saya setuju dengan 
                        <a href="#" class="text-cyan-400 hover:text-cyan-300 transition-colors">Ketentuan Layanan</a> 
                        dan 
                        <a href="#" class="text-cyan-400 hover:text-cyan-300 transition-colors">Kebijakan Privasi</a>
                    </label>
                </div>

                <button type="submit" 
                        class="w-full relative group bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-cyan-500/25">
                    <span class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500 via-blue-600 to-indigo-500 opacity-30 blur-sm group-hover:opacity-100 transition-all duration-500 rounded-lg"></span>
                    <span class="relative flex items-center justify-center">
                        <i class="fas fa-user-plus mr-2"></i>
                        Buat Akun
                    </span>
                </button>

                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-white/20"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-transparent text-gray-400">Sudah punya akun?</span>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('auth.login') }}" 
                       class="inline-flex items-center px-6 py-2 border-2 border-cyan-400/50 text-cyan-400 rounded-lg hover:bg-cyan-400 hover:text-gray-900 transition-all duration-300 font-medium">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        Masuk
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
function togglePassword(fieldId) {
    const passwordField = document.getElementById(fieldId);
    const passwordIcon = document.getElementById(fieldId + '-icon');
    
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