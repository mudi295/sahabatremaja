@extends('layouts.app')

@section('content')

<!-- ==================== NAVBAR SPACER ==================== -->
<div class="h-20 lg:h-24"></div>

<!-- ==================== HERO SECTION ==================== -->
<div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-teal-900 py-16 lg:py-20 overflow-hidden">

    <!-- Animated Background Ornaments -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-teal-500/10 rounded-full blur-3xl animate-pulse" style="animation-duration: 10s;"></div>
        <div class="absolute bottom-1/4 right-1/3 w-[300px] h-[300px] bg-orange-400/10 rounded-full blur-3xl animate-pulse" style="animation-duration: 14s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl" data-aos="fade-up">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-sm text-slate-400 font-medium mb-4">
                <a href="/" class="hover:text-teal-400 transition-colors">Beranda</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="{{ route('materials.index') }}" class="hover:text-teal-400 transition-colors">Materi</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-teal-400 truncate max-w-[200px]">{{ Str::limit($material->title, 30) }}</span>
            </nav>

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-orange-300 px-4 py-2 rounded-full text-xs font-bold tracking-widest uppercase mb-4 shadow-lg shadow-orange-500/10">
                <span class="w-2 h-2 rounded-full bg-orange-400 animate-pulse"></span>
                {{ $material->type === 'module' ? '📄 Modul PDF' : '🎥 Video Edukasi' }}
            </div>

            <!-- Title -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black text-white tracking-tight leading-tight mb-4">
                {{ $material->title }}
            </h1>

            <!-- Meta -->
            <div class="flex flex-wrap items-center gap-4 text-sm text-slate-400">
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    {{ $material->updated_at ? $material->updated_at->isoFormat('D MMMM Y') : 'Baru saja' }}
                </span>
                <span class="w-1 h-1 rounded-full bg-slate-600"></span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ $material->updated_at ? $material->updated_at->diffForHumans() : 'Baru' }}
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

            <!-- CONTENT VIEWER (Sisi Kiri Lebih Lebar) -->
            <div class="lg:col-span-8 order-1 lg:order-2">

                <div class="bg-white rounded-3xl border border-slate-100 shadow-xl shadow-slate-900/5 overflow-hidden" data-aos="fade-right">

                    <!-- PDF MODULE -->
                    @if($material->type === 'module' && $material->file)
                        <div class="rounded-3xl overflow-hidden bg-slate-50">
                            <iframe
                                src="{{ asset('storage/'.$material->file) }}#toolbar=1"
                                class="w-full h-[500px] sm:h-[600px] md:h-[700px] lg:h-[800px]"
                                frameborder="0"
                                loading="lazy">
                            </iframe>
                        </div>

                    <!-- YOUTUBE VIDEO -->
                    @elseif($material->type === 'video' && $material->video_url)
                        <div class="rounded-3xl overflow-hidden bg-slate-950 aspect-video shadow-inner">
                            @php
                                $youtubeId = '';
                                if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\s]{11})/', $material->video_url, $matches)) {
                                    $youtubeId = $matches[1];
                                }
                            @endphp
                            @if($youtubeId)
                                <iframe
                                    class="w-full h-full"
                                    src="https://www.youtube.com/embed/{{ $youtubeId }}"
                                    title="{{ $material->title }}"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            @else
                                <div class="py-20 text-center">
                                    <span class="text-5xl block mb-4">📺</span>
                                    <h3 class="font-bold text-slate-900 text-lg">Video Tidak Tersedia</h3>
                                    <p class="text-slate-500 text-sm mt-2">URL video tidak valid.</p>
                                </div>
                            @endif
                        </div>

                    <!-- FALLBACK -->
                    @else
                        <div class="py-24 text-center bg-slate-50 rounded-3xl border-2 border-dashed border-slate-200">
                            <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-slate-100 to-slate-200 flex items-center justify-center text-4xl mb-6 shadow-inner">
                                📂
                            </div>
                            <h3 class="font-bold text-slate-900 text-xl mb-2">Media Belum Tersedia</h3>
                            <p class="text-slate-500 text-sm max-w-md mx-auto leading-relaxed">
                                Dokumen atau video untuk materi ini belum tersedia atau sedang diperbarui oleh administrator.
                            </p>
                        </div>
                    @endif

                </div>

            </div>

            <!-- SIDEBAR (Sisi Kanan Menempel) -->
            <div class="lg:col-span-4 order-2 lg:order-1 lg:sticky lg:top-28">

                <div class="bg-white rounded-3xl border border-slate-100 shadow-xl shadow-slate-900/5 overflow-hidden" data-aos="fade-left">

                    <!-- Thumbnail -->
                    <div class="h-48 sm:h-56 overflow-hidden relative">
                        @if($material->thumbnail)
                            <img src="{{ asset('storage/'.$material->thumbnail) }}"
                                 alt="{{ $material->title }}"
                                 class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-teal-50 via-emerald-50 to-orange-50 flex items-center justify-center">
                                <div class="w-20 h-20 rounded-2xl bg-white/80 backdrop-blur-sm flex items-center justify-center text-4xl shadow-lg">
                                    {{ $material->type === 'module' ? '📚' : '🎥' }}
                                </div>
                            </div>
                        @endif

                        <div class="absolute top-4 left-4">
                            @if($material->type === 'module')
                                <span class="inline-flex items-center gap-1.5 bg-white/95 backdrop-blur-sm text-teal-700 text-[10px] font-black uppercase tracking-wider px-3 py-1.5 rounded-lg shadow-sm border border-teal-100">
                                    <span class="w-1.5 h-1.5 rounded-full bg-teal-500"></span>
                                    📄 Modul PDF
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 bg-white/95 backdrop-blur-sm text-orange-600 text-[10px] font-black uppercase tracking-wider px-3 py-1.5 rounded-lg shadow-sm border border-orange-100">
                                    <span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span>
                                    🎥 Video
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6 sm:p-8 space-y-6">

                        <div>
                            <h2 class="text-xl font-black text-slate-900 leading-tight">
                                {{ $material->title }}
                            </h2>
                            <p class="text-xs text-slate-400 uppercase tracking-wider font-bold mt-3 flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                Diperbarui: {{ $material->updated_at?->isoFormat('D MMMM Y') ?? '-' }}
                            </p>
                        </div>

                        <div class="border-t border-slate-50 pt-5">
                            <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-3 flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Deskripsi Materi
                            </h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                {{ $material->description ?? 'Tidak ada deskripsi.' }}
                            </p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="space-y-3 pt-4">

                            <!-- Module Buttons -->
                            @if($material->type === 'module' && $material->file)
                                <a href="{{ asset('storage/'.$material->file) }}"
                                   target="_blank"
                                   class="w-full inline-flex items-center justify-center gap-2 bg-slate-50 hover:bg-blue-50 border border-slate-200 hover:border-blue-200 text-slate-700 hover:text-blue-600 py-3.5 rounded-xl font-bold text-sm transition-all duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    Buka PDF Penuh
                                </a>

                                <a href="{{ asset('storage/'.$material->file) }}"
                                   download
                                   class="w-full inline-flex items-center justify-center gap-2 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-orange-400 hover:to-amber-500 text-white py-3.5 rounded-xl font-bold text-sm transition-all duration-500 shadow-lg shadow-teal-600/20 hover:shadow-orange-400/30 transform hover:-translate-y-0.5 active:scale-95">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    Download Modul
                                </a>
                            @endif

                            <!-- Video Button -->
                            @if($material->type === 'video' && $material->video_url)
                                <a href="{{ $material->video_url }}"
                                   target="_blank"
                                   class="w-full inline-flex items-center justify-center gap-2 bg-red-600 hover:bg-red-700 text-white py-3.5 rounded-xl font-bold text-sm transition-all duration-300 shadow-lg shadow-red-600/20 transform hover:-translate-y-0.5 active:scale-95">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Tonton di YouTube
                                </a>
                            @endif

                        </div>

                        <!-- Back Button -->
                        <div class="pt-2 border-t border-slate-50">
                            <a href="{{ route('materials.index') }}"
                               class="group inline-flex items-center gap-2 text-sm text-slate-500 hover:text-teal-600 font-semibold transition-colors py-2">
                                <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                </svg>
                                Kembali ke Daftar Materi
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
            Ingin Berkontribusi?
        </h2>
        <p class="text-teal-100 text-base sm:text-lg mb-8 max-w-xl mx-auto leading-relaxed">
            Jadilah bagian dari gerakan kemanusiaan. Bantu kami menyebarkan ilmu dan wawasan untuk Indonesia yang lebih baik.
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