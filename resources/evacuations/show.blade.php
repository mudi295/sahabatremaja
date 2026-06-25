@extends('layouts.app')

@section('content')

<!-- ==================== NAVBAR SPACER ==================== -->
<div class="h-20 lg:h-24"></div>

<!-- ==================== HERO SECTION ==================== -->
<div class="relative bg-gradient-to-br from-red-900 via-red-800 to-orange-900 py-16 lg:py-20 overflow-hidden">

    <!-- Animated Background Ornaments -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-red-500/10 rounded-full blur-3xl animate-pulse" style="animation-duration: 10s;"></div>
        <div class="absolute bottom-1/4 right-1/3 w-[300px] h-[300px] bg-orange-400/10 rounded-full blur-3xl animate-pulse" style="animation-duration: 14s;"></div>
    </div>

    <!-- Alert Banner -->
    <div class="absolute top-0 left-0 right-0 bg-red-600/80 backdrop-blur-sm border-b border-red-500/50 py-3">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-center gap-3">
            <svg class="w-5 h-5 text-white animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
            </svg>
            <p class="text-white text-sm font-bold tracking-wide">INFORMASI JALUR EVAKUASI — BACA DENGAN SEKSAMA</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-8">
        <div class="max-w-3xl" data-aos="fade-up">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-sm text-red-200 font-medium mb-4">
                <a href="/" class="hover:text-white transition-colors">Beranda</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="{{ route('evacuation.index') }}" class="hover:text-white transition-colors">Jalur Evakuasi</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-white truncate max-w-[200px]">{{ Str::limit($route->title, 30) }}</span>
            </nav>

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-orange-300 px-4 py-2 rounded-full text-xs font-bold tracking-widest uppercase mb-4 shadow-lg shadow-orange-500/10">
                <span class="w-2 h-2 rounded-full bg-orange-400 animate-pulse"></span>
                Jalur Evakuasi Aktif
            </div>

            <!-- Title -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black text-white tracking-tight leading-tight mb-4">
                {{ $route->title }}
            </h1>

            <!-- Meta -->
            <div class="flex flex-wrap items-center gap-4 text-sm text-red-200">
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    {{ $route->safe_location ?? 'Titik Kumpul Aman' }}
                </span>
                <span class="w-1 h-1 rounded-full bg-red-400"></span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Estimasi: {{ $route->estimated_time ?? '~15 menit' }}
                </span>
            </div>
        </div>
    </div>

    <!-- Bottom Wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-12 sm:h-16 text-[#FAFAF7]" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="currentColor"/>
        </svg>
    </div>
</div>

<!-- ==================== MAIN CONTENT ==================== -->
<div class="bg-[#FAFAF7] pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-10 items-start">

            <!-- MAP VIEWER (Sisi Kiri Lebih Lebar) -->
            <div class="lg:col-span-8 order-1 lg:order-2">

                <div class="bg-white rounded-3xl border border-slate-100 shadow-xl shadow-slate-900/5 overflow-hidden" data-aos="fade-right">

                    <!-- Map Embed / Image -->
                    @if($route->map_image || $route->map_embed)
                        <div class="rounded-3xl overflow-hidden bg-slate-50">
                            @if($route->map_embed)
                                <div class="w-full h-[400px] sm:h-[500px] md:h-[600px]">
                                    {!! $route->map_embed !!}
                                </div>
                            @elseif($route->map_image)
                                <img src="{{ asset('storage/'.$route->map_image) }}" 
                                     alt="Peta {{ $route->title }}"
                                     class="w-full h-[400px] sm:h-[500px] md:h-[600px] object-cover">
                            @endif
                        </div>
                    @else
                        <!-- Fallback Map Visualization -->
                        <div class="relative w-full h-[400px] sm:h-[500px] bg-gradient-to-br from-red-50 via-orange-50 to-amber-50 rounded-3xl overflow-hidden">
                            <!-- Decorative Map Elements -->
                            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 800 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Roads -->
                                <path d="M100 500 Q200 400 300 420 T500 350 T700 380" stroke="#fca5a5" stroke-width="4" fill="none" stroke-dasharray="12 6"/>
                                <path d="M100 300 Q250 250 400 280 T700 250" stroke="#fdba74" stroke-width="4" fill="none" stroke-dasharray="12 6"/>
                                <path d="M200 100 Q300 200 350 300 T400 500" stroke="#fca5a5" stroke-width="4" fill="none" stroke-dasharray="12 6"/>

                                <!-- Start Point (Danger) -->
                                <circle cx="100" cy="500" r="16" fill="#ef4444" opacity="0.8"/>
                                <text x="100" y="506" text-anchor="middle" fill="white" font-size="12" font-weight="bold">!</text>

                                <!-- End Point (Safe) -->
                                <circle cx="700" cy="380" r="20" fill="#22c55e" opacity="0.8"/>
                                <text x="700" y="387" text-anchor="middle" fill="white" font-size="14" font-weight="bold">✓</text>

                                <!-- Buildings -->
                                <rect x="250" y="150" width="80" height="60" rx="8" fill="#e5e7eb" opacity="0.6"/>
                                <rect x="400" y="100" width="100" height="70" rx="8" fill="#e5e7eb" opacity="0.6"/>
                                <rect x="550" y="180" width="70" height="50" rx="8" fill="#e5e7eb" opacity="0.6"/>
                                <rect x="300" y="320" width="90" height="55" rx="8" fill="#e5e7eb" opacity="0.6"/>
                                <rect x="500" y="400" width="80" height="60" rx="8" fill="#e5e7eb" opacity="0.6"/>

                                <!-- Labels -->
                                <text x="100" y="540" text-anchor="middle" fill="#dc2626" font-size="14" font-weight="bold">Titik Awal</text>
                                <text x="700" y="420" text-anchor="middle" fill="#16a34a" font-size="14" font-weight="bold">Titik Kumpul Aman</text>
                            </svg>

                            <!-- Legend Overlay -->
                            <div class="absolute bottom-4 left-4 bg-white/95 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-red-100">
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="w-3 h-3 rounded-full bg-red-500"></span>
                                    <span class="text-xs font-semibold text-slate-700">Titik Awal (Bahaya)</span>
                                </div>
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="w-3 h-3 rounded-full bg-green-500"></span>
                                    <span class="text-xs font-semibold text-slate-700">Titik Kumpul Aman</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="w-6 h-0.5 bg-red-300"></span>
                                    <span class="text-xs font-semibold text-slate-700">Jalur Evakuasi</span>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>

                <!-- Route Description -->
                @if($route->description)
                    <div class="mt-8 bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-slate-100" data-aos="fade-up">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-50">
                            <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center">
                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            <h2 class="text-xl font-bold text-slate-900">Detail Jalur</h2>
                        </div>

                        <div class="prose prose-sm sm:prose-base max-w-none prose-slate leading-relaxed text-slate-600 font-medium
                                    prose-headings:font-black prose-headings:text-slate-900 prose-headings:tracking-tight
                                    prose-a:text-red-600 prose-a:no-underline prose-a:font-semibold hover:prose-a:text-orange-500
                                    prose-strong:text-slate-900 prose-strong:font-bold
                                    prose-img:rounded-2xl prose-img:shadow-lg
                                    prose-blockquote:border-l-4 prose-blockquote:border-red-500 prose-blockquote:bg-red-50/50 prose-blockquote:py-2 prose-blockquote:px-6 prose-blockquote:rounded-r-xl
                                    prose-ul:marker:text-red-500 prose-ol:marker:text-red-500">
                            {!! nl2br(e($route->description)) !!}
                        </div>
                    </div>
                @endif

                <!-- Safety Instructions -->
                <div class="mt-8 bg-gradient-to-r from-amber-50 to-orange-50 rounded-3xl p-6 sm:p-8 border border-amber-100" data-aos="fade-up">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-slate-900">Instruksi Keselamatan</h2>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <span class="w-6 h-6 rounded-full bg-red-100 text-red-600 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">1</span>
                            <p class="text-sm text-slate-700 font-medium">Tetap tenang dan jangan panik. Ikuti arahan petugas evakuasi.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="w-6 h-6 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">2</span>
                            <p class="text-sm text-slate-700 font-medium">Bawa dokumen penting dan perlengkapan darurat minimal.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">3</span>
                            <p class="text-sm text-slate-700 font-medium">Bantu lansia, anak-anak, dan penyandang disabilitas.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="w-6 h-6 rounded-full bg-yellow-100 text-yellow-600 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">4</span>
                            <p class="text-sm text-slate-700 font-medium">Jangan menggunakan lift/elevator. Gunakan tangga darurat.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">5</span>
                            <p class="text-sm text-slate-700 font-medium">Setelah sampai di titik kumpul, laporkan diri ke koordinator.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- SIDEBAR INFO (Sisi Kanan Menempel) -->
            <div class="lg:col-span-4 order-2 lg:order-1 lg:sticky lg:top-28">

                <div class="bg-white rounded-3xl border border-slate-100 shadow-xl shadow-slate-900/5 overflow-hidden" data-aos="fade-left">

                    <!-- Route Info Header -->
                    <div class="h-32 bg-gradient-to-br from-red-500 to-orange-500 relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20">
                            <svg class="w-full h-full" viewBox="0 0 400 150" fill="none">
                                <path d="M0 75 Q50 50 100 75 T200 75 T300 60 T400 75" stroke="white" stroke-width="2" fill="none" stroke-dasharray="8 4"/>
                                <circle cx="30" cy="75" r="8" fill="white" opacity="0.6"/>
                                <circle cx="370" cy="75" r="10" fill="white" opacity="0.6"/>
                            </svg>
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mx-auto mb-2 border border-white/30">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0121 18.382V7.618a1 1 0 01-.447-.894L15 7m0 13V7"/>
                                    </svg>
                                </div>
                                <p class="text-white text-xs font-bold tracking-wider uppercase">Informasi Jalur</p>
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6 sm:p-8 space-y-6">

                        <!-- Route Name -->
                        <div>
                            <h2 class="text-xl font-black text-slate-900 leading-tight">
                                {{ $route->title }}
                            </h2>
                            <p class="text-xs text-slate-400 uppercase tracking-wider font-bold mt-2 flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Diperbarui: {{ $route->updated_at?->isoFormat('D MMMM Y') ?? '-' }}
                            </p>
                        </div>

                        <div class="border-t border-slate-50 pt-5 space-y-4">
                            <!-- Safe Location -->
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center flex-shrink-0 group-hover:bg-green-100 transition-colors">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-0.5">Titik Kumpul Aman</p>
                                    <p class="text-sm font-semibold text-slate-700">{{ $route->safe_location ?? 'Belum ditentukan' }}</p>
                                </div>
                            </div>

                            <!-- Estimated Time -->
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center flex-shrink-0 group-hover:bg-orange-100 transition-colors">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-0.5">Estimasi Waktu</p>
                                    <p class="text-sm font-semibold text-slate-700">{{ $route->estimated_time ?? '~15 menit' }}</p>
                                </div>
                            </div>

                            <!-- Distance -->
                            @if($route->distance)
                                <div class="flex items-start gap-4 group">
                                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-100 transition-colors">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-0.5">Jarak</p>
                                        <p class="text-sm font-semibold text-slate-700">{{ $route->distance }}</p>
                                    </div>
                                </div>
                            @endif

                            <!-- Disaster Type -->
                            @if($route->disaster_type)
                                <div class="flex items-start gap-4 group">
                                    <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center flex-shrink-0 group-hover:bg-red-100 transition-colors">
                                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-0.5">Jenis Bencana</p>
                                        <p class="text-sm font-semibold text-slate-700">{{ $route->disaster_type }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Emergency Contact -->
                        <div class="mt-4 pt-4 border-t border-slate-50">
                            <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-3">Kontak Darurat</h3>
                            <a href="tel:112" 
                               class="w-full inline-flex items-center justify-center gap-2 bg-red-600 hover:bg-red-700 text-white py-3.5 rounded-xl font-bold text-sm transition-all duration-300 shadow-lg shadow-red-600/20 transform hover:-translate-y-0.5 active:scale-95">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                Hubungi 112
                            </a>
                        </div>

                        <!-- Back Button -->
                        <div class="pt-2 border-t border-slate-50">
                            <a href="{{ route('evacuation.index') }}"
                               class="group inline-flex items-center gap-2 text-sm text-slate-500 hover:text-red-600 font-semibold transition-colors py-2">
                                <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                </svg>
                                Kembali ke Daftar Jalur
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- ==================== CTA SECTION ==================== -->
<div class="bg-gradient-to-br from-teal-600 via-emerald-600 to-teal-700 py-16 lg:py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-aos="zoom-in">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-4 tracking-tight">
            Ingin Bergabung?
        </h2>
        <p class="text-teal-100 text-base sm:text-lg mb-8 max-w-xl mx-auto leading-relaxed">
            Jadilah bagian dari gerakan kemanusiaan. Bantu kami menyebarkan informasi keselamatan untuk Indonesia yang lebih baik.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('volunteer.index') ?? '/volunteer' }}"
               class="inline-flex items-center justify-center gap-2 bg-white text-teal-700 px-8 py-4 rounded-xl text-sm font-bold hover:bg-orange-50 hover:text-orange-600 transition-all duration-300 shadow-xl shadow-black/10 transform hover:-translate-y-1">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                Daftar Relawan
            </a>
            <a href="{{ route('contact.index') ?? '#contact' }}"
               class="inline-flex items-center justify-center gap-2 bg-white/10 backdrop-blur-md border border-white/30 text-white px-8 py-4 rounded-xl text-sm font-bold hover:bg-white/20 transition-all duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Hubungi Kami
            </a>
        </div>
    </div>
</div>

@endsection