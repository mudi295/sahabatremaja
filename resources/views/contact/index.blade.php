@extends('layouts.app')

@section('content')

<!-- ==================== NAVBAR SPACER ==================== -->
<div class="h-20 lg:h-24"></div>

<!-- ==================== HERO SECTION ==================== -->
<div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-teal-900 py-24 lg:py-32 overflow-hidden">

    <!-- Animated Background Ornaments -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-[600px] h-[600px] bg-teal-500/10 rounded-full blur-3xl animate-pulse" style="animation-duration: 8s;"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-orange-400/10 rounded-full blur-3xl animate-pulse" style="animation-duration: 12s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-emerald-500/5 rounded-full blur-3xl"></div>

        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-orange-300 px-5 py-2.5 rounded-full text-xs font-bold tracking-widest uppercase mb-6 shadow-lg shadow-orange-500/10">
                <span class="w-2 h-2 rounded-full bg-orange-400 animate-pulse"></span>
                Hubungi Kami
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black text-white tracking-tight leading-tight mb-6">
                Kontak <span class="bg-gradient-to-r from-orange-400 via-amber-400 to-yellow-300 bg-clip-text text-transparent">Kami</span>
            </h1>

            <p class="mt-4 text-base sm:text-lg md:text-xl text-slate-300 font-medium leading-relaxed max-w-2xl mx-auto">
                Ada pertanyaan, saran, atau ingin berkolaborasi? Jangan ragu untuk menghubungi kami. Tim kami siap membantu Anda.
            </p>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 sm:h-20 lg:h-24 text-[#FAFAF7]" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="currentColor"/>
        </svg>
    </div>
</div>

<!-- ==================== CONTACT SECTION ==================== -->
<div class="bg-[#FAFAF7] py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-16">

            <!-- CONTACT INFO SIDEBAR (Kiri) -->
            <div class="lg:col-span-5 space-y-6">

                <!-- Contact Cards -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-slate-100" data-aos="fade-right">
                    <h2 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center">
                            <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        Informasi Kontak
                    </h2>

                    <div class="space-y-5">
                        <!-- Address -->
                        <div class="flex items-start gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center flex-shrink-0 group-hover:bg-orange-100 transition-colors">
                                <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-0.5">Alamat</p>
                                <p class="text-sm font-semibold text-slate-700 leading-relaxed">
                                    Jl. Kemanusiaan No. 123, Jakarta Selatan, Indonesia 12950
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center flex-shrink-0 group-hover:bg-teal-100 transition-colors">
                                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-0.5">Email</p>
                                <a href="mailto:info@sahabatremaja.org" class="text-sm font-semibold text-teal-600 hover:text-orange-500 transition-colors">
                                    info@sahabatremaja.org
                                </a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-purple-50 flex items-center justify-center flex-shrink-0 group-hover:bg-purple-100 transition-colors">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-0.5">Telepon</p>
                                <a href="tel:+62211234567" class="text-sm font-semibold text-slate-700 hover:text-teal-600 transition-colors">
                                    +62 21 1234 5678
                                </a>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div class="flex items-start gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center flex-shrink-0 group-hover:bg-green-100 transition-colors">
                                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.434-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.134 1.585 5.929L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-0.5">WhatsApp</p>
                                <a href="https://wa.me/6281234567890" target="_blank" class="text-sm font-semibold text-green-600 hover:text-green-700 transition-colors">
                                    +62 812 3456 7890
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-slate-100" data-aos="fade-right" data-aos-delay="100">
                    <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Media Sosial
                    </h3>
                    <div class="flex flex-wrap gap-3">
                        <a href="#" target="_blank" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-blue-50 text-blue-600 text-sm font-semibold hover:bg-blue-100 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            Facebook
                        </a>
                        <a href="#" target="_blank" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-pink-50 text-pink-600 text-sm font-semibold hover:bg-pink-100 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                            Instagram
                        </a>
                        <a href="#" target="_blank" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-sky-50 text-sky-600 text-sm font-semibold hover:bg-sky-100 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                            Twitter
                        </a>
                        <a href="#" target="_blank" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-red-50 text-red-600 text-sm font-semibold hover:bg-red-100 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                            YouTube
                        </a>
                    </div>
                </div>

                <!-- Working Hours -->
                <div class="bg-gradient-to-br from-teal-50 to-emerald-50 rounded-3xl p-6 sm:p-8 border border-teal-100" data-aos="fade-right" data-aos-delay="200">
                    <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Jam Operasional
                    </h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-slate-600 font-medium">Senin - Jumat</span>
                            <span class="text-sm font-bold text-slate-900">08:00 - 17:00</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-slate-600 font-medium">Sabtu</span>
                            <span class="text-sm font-bold text-slate-900">09:00 - 15:00</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-slate-600 font-medium">Minggu</span>
                            <span class="text-sm font-bold text-red-500">Tutup</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONTACT FORM (Kanan) -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-3xl p-6 sm:p-8 lg:p-10 shadow-xl shadow-slate-900/5 border border-slate-100" data-aos="fade-left">

                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center">
                            <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-slate-900">Kirim Pesan</h2>
                    </div>
                    <p class="text-sm text-slate-500 mb-8 ml-13">Isi form di bawah ini dan tim kami akan segera menghubungi Anda.</p>

                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="mb-6 bg-green-50 border border-green-200 rounded-2xl p-4 flex items-start gap-3" data-aos="fade-in">
                            <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-green-800">Pesan Terkirim!</p>
                                <p class="text-sm text-green-600">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Error Messages -->
                    @if($errors->any())
                        <div class="mb-6 bg-red-50 border border-red-200 rounded-2xl p-4" data-aos="fade-in">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-red-800 mb-1">Terjadi Kesalahan</p>
                                    <ul class="text-sm text-red-600 space-y-1">
                                        @foreach($errors->all() as $error)
                                            <li>• {{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-bold text-slate-700 mb-2">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       value="{{ old('name') }}"
                                       placeholder="Masukkan nama lengkap Anda"
                                       class="w-full pl-12 pr-4 py-3.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white transition-all duration-300 text-sm font-medium"
                                       required>
                            </div>
                        </div>

                        <!-- Email & Phone (2 columns) -->
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-bold text-slate-700 mb-2">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <input type="email" 
                                           id="email" 
                                           name="email" 
                                           value="{{ old('email') }}"
                                           placeholder="email@example.com"
                                           class="w-full pl-12 pr-4 py-3.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white transition-all duration-300 text-sm font-medium"
                                           required>
                                </div>
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-bold text-slate-700 mb-2">
                                    Nomor Telepon <span class="text-slate-400 font-normal">(Opsional)</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                    <input type="tel" 
                                           id="phone" 
                                           name="phone" 
                                           value="{{ old('phone') }}"
                                           placeholder="+62 8xx xxxx xxxx"
                                           class="w-full pl-12 pr-4 py-3.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white transition-all duration-300 text-sm font-medium">
                                </div>
                            </div>
                        </div>

                        <!-- Subject (Optional) -->
                        <div>
                            <label for="subject" class="block text-sm font-bold text-slate-700 mb-2">
                                Subjek <span class="text-slate-400 font-normal">(Opsional)</span>
                            </label>
                            <div class="relative">
                                <div class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                    </svg>
                                </div>
                                <select id="subject" 
                                        name="subject"
                                        class="w-full pl-12 pr-4 py-3.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white transition-all duration-300 text-sm font-medium appearance-none">
                                    <option value="">Pilih subjek pesan...</option>
                                    <option value="general">Pertanyaan Umum</option>
                                    <option value="volunteer">Pendaftaran Relawan</option>
                                    <option value="donation">Donasi & Bantuan</option>
                                    <option value="partnership">Kerjasama & Partnership</option>
                                    <option value="media">Media & Press</option>
                                    <option value="other">Lainnya</option>
                                </select>
                                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-bold text-slate-700 mb-2">
                                Pesan <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute left-4 top-4 text-slate-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                    </svg>
                                </div>
                                <textarea id="message" 
                                          name="message" 
                                          rows="5"
                                          placeholder="Tulis pesan Anda di sini..."
                                          class="w-full pl-12 pr-4 py-3.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white transition-all duration-300 text-sm font-medium resize-none"
                                          required>{{ old('message') }}</textarea>
                            </div>
                            <p class="text-xs text-slate-400 mt-2">Minimal 10 karakter</p>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" 
                                class="w-full inline-flex items-center justify-center gap-3 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-orange-400 hover:to-amber-500 text-white font-bold px-8 py-4 rounded-xl text-sm tracking-wide shadow-lg shadow-teal-600/20 hover:shadow-orange-400/30 transition-all duration-500 transform hover:-translate-y-0.5 active:scale-95">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Kirim Pesan
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ==================== MAP SECTION (Optional) ==================== -->
<div class="bg-white py-16 lg:py-20 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mb-3">Lokasi Kami</h2>
            <p class="text-slate-500 text-sm max-w-md mx-auto">Kunjungi kantor pusat kami untuk berdiskusi langsung.</p>
        </div>

        <div class="rounded-3xl overflow-hidden shadow-xl shadow-slate-900/10 border border-slate-100" data-aos="fade-up">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.288!2d106.827!3d-6.175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTAnMzAuMCJTIDEwNsKwNDknMzcuMiJF!5e0!3m2!1sid!2sid!4v1"
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full">
            </iframe>
        </div>
    </div>
</div>

<!-- ==================== FAQ SECTION ==================== -->
<div class="bg-[#FAFAF7] py-16 lg:py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mb-3">Pertanyaan yang Sering Diajukan</h2>
            <p class="text-slate-500 text-sm">Temukan jawaban untuk pertanyaan umum di bawah ini.</p>
        </div>

        <div class="space-y-4" x-data="{ open: null }">
            <!-- FAQ Item 1 -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden" data-aos="fade-up" data-aos-delay="0">
                <button @click="open === 1 ? open = null : open = 1" class="w-full flex items-center justify-between p-5 sm:p-6 text-left hover:bg-slate-50 transition-colors">
                    <span class="font-bold text-slate-900 text-sm sm:text-base pr-4">Bagaimana cara menjadi relawan?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300 flex-shrink-0" :class="{ 'rotate-180': open === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open === 1" x-collapse class="px-5 sm:px-6 pb-5 sm:pb-6">
                    <p class="text-sm text-slate-600 leading-relaxed">Anda dapat mendaftar sebagai relawan melalui halaman "Gabung Relawan" di menu navigasi. Isi formulir pendaftaran dan tim kami akan menghubungi Anda untuk proses selanjutnya.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <button @click="open === 2 ? open = null : open = 2" class="w-full flex items-center justify-between p-5 sm:p-6 text-left hover:bg-slate-50 transition-colors">
                    <span class="font-bold text-slate-900 text-sm sm:text-base pr-4">Bagaimana cara berdonasi?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300 flex-shrink-0" :class="{ 'rotate-180': open === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open === 2" x-collapse class="px-5 sm:px-6 pb-5 sm:pb-6">
                    <p class="text-sm text-slate-600 leading-relaxed">Donasi dapat dilakukan melalui transfer bank ke rekening resmi kami. Hubungi kami melalui form ini atau WhatsApp untuk informasi rekening dan konfirmasi donasi.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <button @click="open === 3 ? open = null : open = 3" class="w-full flex items-center justify-between p-5 sm:p-6 text-left hover:bg-slate-50 transition-colors">
                    <span class="font-bold text-slate-900 text-sm sm:text-base pr-4">Apakah ada syarat khusus untuk menjadi relawan?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300 flex-shrink-0" :class="{ 'rotate-180': open === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open === 3" x-collapse class="px-5 sm:px-6 pb-5 sm:pb-6">
                    <p class="text-sm text-slate-600 leading-relaxed">Relawan minimal berusia 18 tahun, memiliki komitmen tinggi, dan bersedia mengikuti pelatihan yang diselenggarakan. Tidak diperlukan pengalaman khusus karena akan ada orientasi.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                <button @click="open === 4 ? open = null : open = 4" class="w-full flex items-center justify-between p-5 sm:p-6 text-left hover:bg-slate-50 transition-colors">
                    <span class="font-bold text-slate-900 text-sm sm:text-base pr-4">Berapa lama respons dari tim kami?</span>
                    <svg class="w-5 h-5 text-slate-400 transition-transform duration-300 flex-shrink-0" :class="{ 'rotate-180': open === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open === 4" x-collapse class="px-5 sm:px-6 pb-5 sm:pb-6">
                    <p class="text-sm text-slate-600 leading-relaxed">Kami berusaha merespons setiap pesan dalam waktu 1-2 hari kerja. Untuk urusan darurat, silakan hubungi nomor telepon langsung kami.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection