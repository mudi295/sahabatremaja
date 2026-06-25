@extends('layouts.app')

@section('content')

<!-- ==================== NAVBAR SPACER ==================== -->
<div class="h-20 lg:h-24"></div>

<!-- ==================== HERO SECTION (Sinematik) ==================== -->
<div class="relative min-h-[70vh] lg:min-h-[80vh] flex items-end pb-16 lg:pb-24 overflow-hidden">

    <!-- Background Image dengan Parallax Effect -->
    <div class="absolute inset-0 z-0">
        @if($program->thumbnail)
            <img src="{{ Storage::url($program->thumbnail) }}" 
                 alt="{{ $program->title }}" 
                 class="w-full h-full object-cover scale-110 blur-[2px] opacity-40"
                 style="object-position: center 30%;">
        @else
            <div class="w-full h-full bg-gradient-to-br from-slate-900 via-teal-900 to-emerald-900"></div>
        @endif
        <!-- Dark Overlay Gradient -->
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/70 to-slate-900/30"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/80 via-transparent to-slate-900/40"></div>
    </div>

    <!-- Animated Background Ornaments -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute top-1/3 left-1/4 w-[500px] h-[500px] bg-teal-500/10 rounded-full blur-3xl animate-pulse" style="animation-duration: 10s;"></div>
        <div class="absolute bottom-1/4 right-1/3 w-[300px] h-[300px] bg-orange-400/10 rounded-full blur-3xl animate-pulse" style="animation-duration: 14s;"></div>
    </div>

    <!-- Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-end">

            <!-- Sisi Kiri: Judul & Info -->
            <div class="lg:col-span-8 space-y-6" data-aos="fade-up">
                <!-- Breadcrumb -->
                <nav class="flex items-center gap-2 text-sm text-slate-400 font-medium">
                    <a href="/" class="hover:text-teal-400 transition-colors">Beranda</a>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    <a href="{{ route('programs.index') ?? '#program' }}" class="hover:text-teal-400 transition-colors">Program</a>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                    <span class="text-teal-400 truncate max-w-[200px]">{{ Str::limit($program->title, 30) }}</span>
                </nav>

                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-orange-300 px-4 py-2 rounded-full text-xs font-bold tracking-widest uppercase shadow-lg shadow-orange-500/10">
                    <span class="w-2 h-2 rounded-full bg-orange-400 animate-pulse"></span>
                    Pilar Gerakan Kemanusiaan
                </div>

                <!-- Title -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
                    {{ $program->title }}
                </h1>

                <!-- Meta Info -->
                <div class="flex flex-wrap items-center gap-4 text-sm text-slate-400">
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        {{ $program->created_at ? $program->created_at->isoFormat('D MMMM Y') : 'Baru saja' }}
                    </span>
                    <span class="w-1 h-1 rounded-full bg-slate-600"></span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        {{ $program->created_at ? $program->created_at->diffForHumans() : 'Baru' }}
                    </span>
                    <span class="w-1 h-1 rounded-full bg-slate-600"></span>
                    <span class="flex items-center gap-1.5 text-teal-400 font-semibold">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Program Aktif
                    </span>
                </div>
            </div>

            <!-- Sisi Kanan: CTA Button -->
            <div class="lg:col-span-4 flex justify-start lg:justify-end" data-aos="fade-left" data-aos-delay="200">
                <a href="#contact" 
                   class="group inline-flex items-center justify-center gap-3 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-orange-400 hover:to-amber-500 text-white font-extrabold px-8 py-4 rounded-2xl shadow-2xl shadow-teal-600/20 hover:shadow-orange-400/30 transition-all duration-500 transform hover:-translate-y-1 active:scale-95 text-base w-full sm:w-auto">
                    <span class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        Salurkan Bantuan
                    </span>
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>

    <!-- Bottom Wave -->
    <div class="absolute bottom-0 left-0 right-0 z-10">
        <svg class="w-full h-12 sm:h-16 lg:h-20 text-[#FAFAF7]" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="currentColor"/>
        </svg>
    </div>
</div>

<!-- ==================== MAIN CONTENT (Layout Asimetris) ==================== -->
<div class="bg-[#FAFAF7] pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-16">

            <!-- AREA DESKRIPSI UTAMA (Sisi Kiri Lebih Lebar) -->
            <div class="lg:col-span-8 space-y-10">

                <!-- Gambar Thumbnail Utama -->
                @if($program->thumbnail)
                    <div class="relative group" data-aos="fade-up">
                        <div class="absolute -inset-1 bg-gradient-to-r from-teal-500 via-emerald-500 to-orange-400 rounded-[2.5rem] blur opacity-20 group-hover:opacity-40 transition duration-700"></div>
                        <div class="relative p-2 bg-white rounded-[2.5rem] shadow-2xl shadow-slate-900/10 border border-slate-100 overflow-hidden">
                            <img src="{{ Storage::url($program->thumbnail) }}" 
                                 alt="{{ $program->title }}" 
                                 class="rounded-[2.2rem] w-full h-[300px] sm:h-[400px] lg:h-[500px] object-cover transition-transform duration-700 group-hover:scale-105">
                            <!-- Image Overlay on Hover -->
                            <div class="absolute inset-4 rounded-[2.2rem] bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                @endif

                <!-- Teks Deskripsi Penuh -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 lg:p-10 shadow-sm border border-slate-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-50">
                        <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center">
                            <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-slate-900">Tentang Program</h2>
                    </div>

                    <div class="prose prose-sm sm:prose-base max-w-none prose-slate leading-relaxed text-slate-600 font-medium 
                                prose-headings:font-black prose-headings:text-slate-900 prose-headings:tracking-tight
                                prose-a:text-teal-600 prose-a:no-underline prose-a:font-semibold hover:prose-a:text-orange-500
                                prose-strong:text-slate-900 prose-strong:font-bold
                                prose-img:rounded-2xl prose-img:shadow-lg
                                prose-blockquote:border-l-4 prose-blockquote:border-teal-500 prose-blockquote:bg-teal-50/50 prose-blockquote:py-2 prose-blockquote:px-6 prose-blockquote:rounded-r-xl
                                prose-ul:marker:text-teal-500 prose-ol:marker:text-teal-500">
                        {!! nl2br(e($program->description)) !!}
                    </div>
                </div>

                <!-- Share Section -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-slate-100" data-aos="fade-up">
                    <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                        </svg>
                        Bagikan Program Ini
                    </h3>
                    <div class="flex flex-wrap gap-3">
                        <button onclick="navigator.share({title: '{{ $program->title }}', url: window.location.href})" 
                                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-teal-50 text-teal-700 font-semibold text-sm hover:bg-teal-100 transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                            </svg>
                            Bagikan
                        </button>
                        <button onclick="navigator.clipboard.writeText(window.location.href); alert('Link disalin!')" 
                                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-slate-50 text-slate-600 font-semibold text-sm hover:bg-slate-100 transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                            Salin Link
                        </button>
                    </div>
                </div>

            </div>

            <!-- SIDEBAR INFO & CTA (Sisi Kanan Menempel) -->
            <div class="lg:col-span-4">
                <div class="sticky top-28 space-y-6">

                    <!-- Kotak Ringkasan Program -->
                    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-xl shadow-slate-900/5" data-aos="fade-left">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-50">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-teal-50 to-emerald-50 flex items-center justify-center border border-teal-100">
                                <span class="text-xl">📋</span>
                            </div>
                            <h4 class="font-bold text-slate-900 text-lg">Ringkasan Inisiatif</h4>
                        </div>

                        <div class="space-y-5">
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center flex-shrink-0 group-hover:bg-orange-100 transition-colors">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-0.5">Fokus Wilayah</p>
                                    <p class="text-sm font-semibold text-slate-700">Nasional (Indonesia)</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 group">
                                <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center flex-shrink-0 group-hover:bg-teal-100 transition-colors">
                                    <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-0.5">Metode Gerakan</p>
                                    <p class="text-sm font-semibold text-slate-700">Relawan Kemanusiaan</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 group">
                                <div class="w-10 h-10 rounded-xl bg-purple-50 flex items-center justify-center flex-shrink-0 group-hover:bg-purple-100 transition-colors">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-0.5">Tujuan</p>
                                    <p class="text-sm font-semibold text-slate-700">Pemberdayaan & Pendidikan</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 pt-6 border-t border-slate-50">
                            <p class="text-xs text-slate-500 leading-relaxed">Program ini dijalankan sepenuhnya secara nirlaba demi mewujudkan generasi muda yang berdampak positif bagi masyarakat.</p>
                        </div>
                    </div>

                    <!-- Progress Card -->
                    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-xl shadow-slate-900/5" data-aos="fade-left" data-aos-delay="100">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-bold text-slate-900 text-sm">Progress Program</h4>
                            <span class="text-2xl font-black text-teal-600">75%</span>
                        </div>
                        <div class="h-3 bg-slate-100 rounded-full overflow-hidden mb-3">
                            <div class="h-full bg-gradient-to-r from-teal-500 via-emerald-500 to-teal-400 rounded-full w-3/4 relative overflow-hidden">
                                <div class="absolute inset-0 bg-white/20 animate-[shimmer_2s_infinite]"></div>
                            </div>
                        </div>
                        <div class="flex justify-between text-xs text-slate-400 font-medium">
                            <span>Terdaftar: 120 relawan</span>
                            <span>Target: 200</span>
                        </div>
                    </div>

                    <!-- Tombol Ajakan Sekunder -->
                    <a href="{{ route('volunteer.index') ?? '/volunteer' }}" 
                       class="group w-full inline-flex items-center justify-center gap-3 bg-white border-2 border-slate-200 hover:border-teal-500 text-slate-700 hover:text-teal-700 font-bold px-8 py-4 rounded-2xl shadow-sm hover:shadow-lg hover:shadow-teal-500/10 transition-all duration-300 transform hover:-translate-y-0.5 active:scale-95 text-sm">
                        <svg class="w-5 h-5 text-teal-600 group-hover:text-teal-700 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Gabung Sebagai Relawan
                    </a>

                    <!-- Back to Programs -->
                    <a href="{{ route('programs.index') ?? '/programs' }}" 
                       class="group w-full inline-flex items-center justify-center gap-2 text-slate-500 hover:text-teal-600 font-semibold px-4 py-3 rounded-xl hover:bg-teal-50 transition-all duration-300 text-sm">
                        <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Kembali ke Daftar Program
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- ==================== CTA SECTION ==================== -->
<div class="bg-gradient-to-br from-teal-600 via-emerald-600 to-teal-700 py-16 lg:py-20 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-aos="zoom-in">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-4 tracking-tight">
            Ingin Bergabung?
        </h2>
        <p class="text-teal-100 text-base sm:text-lg mb-8 max-w-xl mx-auto leading-relaxed">
            Jadilah bagian dari perubahan. Setiap kontribusi Anda, sekecil apapun, sangat berarti bagi mereka yang membutuhkan.
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