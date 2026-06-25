@extends('layouts.app')

@section('content')

<!-- ==================== NAVBAR SPACER ==================== -->
<div class="h-20 lg:h-24"></div>

<!-- ==================== HERO SECTION ==================== -->
<div class="relative bg-gradient-to-br from-red-900 via-red-800 to-orange-900 py-24 lg:py-32 overflow-hidden">

    <!-- Animated Background Ornaments -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-[600px] h-[600px] bg-red-500/10 rounded-full blur-3xl animate-pulse" style="animation-duration: 8s;"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-orange-400/10 rounded-full blur-3xl animate-pulse" style="animation-duration: 12s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-red-500/5 rounded-full blur-3xl"></div>

        <!-- Alert Pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    </div>

    <!-- Alert Banner -->
    <div class="absolute top-0 left-0 right-0 bg-red-600/80 backdrop-blur-sm border-b border-red-500/50 py-3">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-center gap-3">
            <svg class="w-5 h-5 text-white animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
            </svg>
            <p class="text-white text-sm font-bold tracking-wide">PETA JALUR EVAKUASI — INFORMASI PENTING UNTUK KESELAMATAN</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-8">
        <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-orange-300 px-5 py-2.5 rounded-full text-xs font-bold tracking-widest uppercase mb-6 shadow-lg shadow-orange-500/10">
                <span class="w-2 h-2 rounded-full bg-orange-400 animate-pulse"></span>
                Siaga Bencana
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black text-white tracking-tight leading-tight mb-6">
                Jalur <span class="bg-gradient-to-r from-orange-400 via-amber-400 to-yellow-300 bg-clip-text text-transparent">Evakuasi</span>
            </h1>

            <p class="mt-4 text-base sm:text-lg md:text-xl text-red-100 font-medium leading-relaxed max-w-2xl mx-auto">
                Informasi jalur evakuasi darurat untuk berbagai jenis bencana. Kenali rute terdekat dan titik kumpul aman di wilayah Anda.
            </p>

            <div class="mt-10 flex flex-wrap justify-center gap-6 sm:gap-10">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-2xl sm:text-3xl font-black text-white">{{ $routes->count() ?? 0 }}</div>
                    <div class="text-xs sm:text-sm text-red-200 font-medium mt-1">Jalur Tersedia</div>
                </div>
                <div class="w-px h-12 bg-white/10 hidden sm:block"></div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-2xl sm:text-3xl font-black text-white">24/7</div>
                    <div class="text-xs sm:text-sm text-red-200 font-medium mt-1">Siaga</div>
                </div>
                <div class="w-px h-12 bg-white/10 hidden sm:block"></div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-2xl sm:text-3xl font-black text-white">🚨</div>
                    <div class="text-xs sm:text-sm text-red-200 font-medium mt-1">Darurat</div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 sm:h-20 lg:h-24 text-[#FAFAF7]" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="currentColor"/>
        </svg>
    </div>
</div>

<!-- ==================== INFO ALERT SECTION ==================== -->
<div class="bg-[#FAFAF7] pt-8 pb-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-red-50 to-orange-50 border border-red-100 rounded-2xl p-4 sm:p-6 flex items-start gap-4" data-aos="fade-up">
            <div class="w-10 h-10 rounded-xl bg-red-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div>
                <h3 class="font-bold text-red-900 text-sm mb-1">Penting untuk Diketahui</h3>
                <p class="text-red-700 text-sm leading-relaxed">
                    Jalur evakuasi dapat berubah sewaktu-waktu tergantung kondisi. Selalu ikuti arahan petugas SAR dan pemerintah setempat. Hubungi nomor darurat <strong class="font-bold">112</strong> jika dalam bahaya.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- ==================== ROUTES GRID ==================== -->
<div class="bg-[#FAFAF7] py-12 lg:py-20 min-h-[50vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @forelse($routes as $index => $route)
                <article class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-red-900/10 overflow-hidden hover:-translate-y-2 transition-all duration-500 flex flex-col"
                         data-aos="fade-up"
                         data-aos-delay="{{ ($index % 3) * 100 }}">

                    <!-- Map Thumbnail / Header -->
                    <div class="h-48 sm:h-56 overflow-hidden relative bg-gradient-to-br from-red-50 via-orange-50 to-amber-50">
                        <!-- Decorative Map Pattern -->
                        <div class="absolute inset-0 opacity-30">
                            <svg class="w-full h-full" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M50 250 Q100 200 150 220 T250 180 T350 200" stroke="#fca5a5" stroke-width="2" fill="none" stroke-dasharray="8 4"/>
                                <path d="M50 150 Q100 120 150 140 T250 100 T350 120" stroke="#fdba74" stroke-width="2" fill="none" stroke-dasharray="8 4"/>
                                <circle cx="80" cy="200" r="8" fill="#ef4444" opacity="0.6"/>
                                <circle cx="200" cy="150" r="10" fill="#22c55e" opacity="0.6"/>
                                <circle cx="320" cy="180" r="8" fill="#22c55e" opacity="0.6"/>
                                <rect x="60" y="80" width="60" height="40" rx="8" fill="#e5e7eb" opacity="0.5"/>
                                <rect x="180" y="60" width="80" height="50" rx="8" fill="#e5e7eb" opacity="0.5"/>
                                <rect x="280" y="100" width="50" height="40" rx="8" fill="#e5e7eb" opacity="0.5"/>
                            </svg>
                        </div>

                        <!-- Route Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center gap-1.5 bg-white/95 backdrop-blur-sm text-red-600 text-[10px] font-black uppercase tracking-wider px-3 py-1.5 rounded-lg shadow-sm border border-red-100">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0121 18.382V7.618a1 1 0 01-.447-.894L15 7m0 13V7"/>
                                </svg>
                                Jalur Evakuasi
                            </span>
                        </div>

                        <!-- Emergency Level Badge -->
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center gap-1 bg-red-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-lg shadow-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                                Aktif
                            </span>
                        </div>

                        <!-- Hover Action -->
                        <div class="absolute bottom-4 right-4 translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                            <span class="flex items-center gap-2 bg-white/95 backdrop-blur-sm text-red-600 px-4 py-2 rounded-xl text-xs font-bold shadow-lg">
                                Lihat Detail
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6 lg:p-8 flex flex-col flex-grow">
                        <!-- Title -->
                        <h3 class="font-bold text-lg lg:text-xl text-slate-900 mb-2 group-hover:text-red-600 transition-colors duration-300 line-clamp-2 leading-tight">
                            {{ $route->title }}
                        </h3>

                        <!-- Safe Location -->
                        <div class="flex items-start gap-2 mb-4">
                            <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <p class="text-sm text-slate-600 font-medium leading-relaxed">
                                {{ $route->safe_location ?? 'Titik kumpul aman' }}
                            </p>
                        </div>

                        <!-- Description (if exists) -->
                        @if(isset($route->description))
                            <p class="text-slate-500 text-sm font-medium leading-relaxed line-clamp-3 mb-4 flex-grow">
                                {{ Str::limit($route->description, 120) }}
                            </p>
                        @endif

                        <!-- Footer -->
                        <div class="flex items-center justify-between pt-4 border-t border-slate-50 mt-auto">
                            <a href="{{ route('evacuation.show', $route->id) }}"
                               class="inline-flex items-center gap-2 text-sm font-bold text-red-600 group-hover:text-orange-500 transition-colors duration-300">
                                Lihat Jalur
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>

                            <span class="text-xs font-semibold text-slate-400 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $route->estimated_time ?? '~15 min' }}
                            </span>
                        </div>
                    </div>

                    <a href="{{ route('evacuation.show', $route->id) }}" class="absolute inset-0 z-10" aria-label="Lihat {{ $route->title }}"></a>
                </article>
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3" data-aos="fade-up">
                    <div class="text-center py-20 lg:py-28 bg-white border-2 border-dashed border-slate-200 rounded-3xl">
                        <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-red-50 to-orange-50 flex items-center justify-center text-4xl mb-6 shadow-inner">
                            🚨
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 mb-2">Belum Ada Jalur Evakuasi</h4>
                        <p class="text-sm text-slate-500 max-w-md mx-auto leading-relaxed mb-6">
                            Data jalur evakuasi belum tersedia. Silakan hubungi pihak berwenang untuk informasi lebih lanjut.
                        </p>
                        <a href="{{ route('contact.index') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-red-600 text-white rounded-xl text-sm font-bold hover:bg-red-700 transition-all duration-300 shadow-lg shadow-red-600/20">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            @endforelse
        </div>

    </div>
</div>

<!-- ==================== EMERGENCY CONTACT SECTION ==================== -->
<div class="bg-gradient-to-br from-red-600 via-red-700 to-orange-600 py-16 lg:py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-aos="zoom-in">
        <div class="w-16 h-16 mx-auto rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center text-3xl mb-6 border border-white/20">
            📞
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-4 tracking-tight">
            Nomor Darurat
        </h2>
        <p class="text-red-100 text-base sm:text-lg mb-8 max-w-xl mx-auto leading-relaxed">
            Jika Anda dalam situasi darurat, segera hubungi nomor berikut untuk bantuan evakuasi dan pertolongan.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:112" 
               class="inline-flex items-center justify-center gap-2 bg-white text-red-700 px-8 py-4 rounded-xl text-sm font-bold hover:bg-orange-50 hover:text-orange-600 transition-all duration-300 shadow-xl shadow-black/10 transform hover:-translate-y-1">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                112 — Nomor Darurat
            </a>
            <a href="{{ route('contact.index') }}"
               class="inline-flex items-center justify-center gap-2 bg-white/10 backdrop-blur-md border border-white/30 text-white px-8 py-4 rounded-xl text-sm font-bold hover:bg-white/20 transition-all duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Kontak Lainnya
            </a>
        </div>
    </div>
</div>

@endsection