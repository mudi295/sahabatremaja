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
                Pustaka Multimedia
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black text-white tracking-tight leading-tight mb-6">
                Video <span class="bg-gradient-to-r from-orange-400 via-amber-400 to-yellow-300 bg-clip-text text-transparent">Edukasi</span>
            </h1>

            <p class="mt-4 text-base sm:text-lg md:text-xl text-slate-300 font-medium leading-relaxed max-w-2xl mx-auto">
                Materi pembelajaran interaktif, literasi kepemudaan, dan kesiapsiagaan aksi sosial kemanusiaan.
            </p>

            <div class="mt-10 flex flex-wrap justify-center gap-6 sm:gap-10">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-2xl sm:text-3xl font-black text-white">{{ $materials->total() ?? 0 }}</div>
                    <div class="text-xs sm:text-sm text-slate-400 font-medium mt-1">Video</div>
                </div>
                <div class="w-px h-12 bg-white/10 hidden sm:block"></div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-2xl sm:text-3xl font-black text-white">1000+</div>
                    <div class="text-xs sm:text-sm text-slate-400 font-medium mt-1">Penonton</div>
                </div>
                <div class="w-px h-12 bg-white/10 hidden sm:block"></div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-2xl sm:text-3xl font-black text-white">50+</div>
                    <div class="text-xs sm:text-sm text-slate-400 font-medium mt-1">Jam Konten</div>
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

<!-- ==================== FILTER SECTION ==================== -->
<div class="bg-[#FAFAF7] pt-8 pb-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex flex-wrap gap-2" data-aos="fade-right">
                <a href="{{ route('materials.index') }}" 
                   class="px-5 py-2.5 rounded-full bg-white text-slate-600 border border-slate-200 hover:bg-teal-50 hover:text-teal-700 hover:border-teal-200 text-sm font-semibold transition-all duration-300">
                    Semua Materi
                </a>
                <a href="{{ route('materials.index', ['type' => 'module']) }}" 
                   class="px-5 py-2.5 rounded-full bg-white text-slate-600 border border-slate-200 hover:bg-teal-50 hover:text-teal-700 hover:border-teal-200 text-sm font-semibold transition-all duration-300">
                    📄 Modul PDF
                </a>
                <a href="{{ route('materials.videos') }}" 
                   class="px-5 py-2.5 rounded-full bg-teal-600 text-white shadow-lg shadow-teal-600/20 text-sm font-semibold transition-all duration-300">
                    🎥 Video
                </a>
            </div>

            <div class="relative" data-aos="fade-left">
                <input type="text" 
                       placeholder="Cari video..." 
                       class="w-full sm:w-64 pl-10 pr-4 py-2.5 rounded-xl bg-white border border-slate-200 text-sm text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 transition-all duration-300">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>
    </div>
</div>

<!-- ==================== VIDEOS GRID ==================== -->
<div class="bg-[#FAFAF7] py-12 lg:py-20 min-h-[50vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @forelse($materials as $index => $video)
                <article class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-slate-900/10 overflow-hidden hover:-translate-y-2 transition-all duration-500 flex flex-col"
                         data-aos="fade-up"
                         data-aos-delay="{{ ($index % 3) * 100 }}">

                    <!-- Thumbnail dengan Play Button -->
                    <div class="h-56 sm:h-64 overflow-hidden relative bg-slate-900">
                        @if($video->thumbnail)
                            <img src="{{ asset('storage/'.$video->thumbnail) }}"
                                 alt="{{ $video->title }}"
                                 class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 opacity-90 group-hover:opacity-80">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-slate-800 to-slate-950 flex items-center justify-center">
                                <div class="w-20 h-20 rounded-2xl bg-white/10 backdrop-blur-sm flex items-center justify-center text-4xl">
                                    📺
                                </div>
                            </div>
                        @endif

                        <!-- Play Button Overlay -->
                        <div class="absolute inset-0 flex items-center justify-center bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="w-16 h-16 bg-teal-600 text-white flex items-center justify-center rounded-full shadow-2xl shadow-teal-600/30 transform scale-75 group-hover:scale-100 transition-transform duration-500">
                                <svg class="w-7 h-7 fill-current translate-x-0.5" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Video Badge -->
                        <div class="absolute bottom-4 right-4">
                            <span class="inline-flex items-center gap-1 bg-black/70 backdrop-blur-sm text-white text-[10px] font-bold px-2.5 py-1 rounded-lg">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Video
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6 lg:p-8 flex flex-col flex-grow">
                        <!-- Meta -->
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-xs font-semibold text-slate-400 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                {{ $video->updated_at?->format('d M Y') ?? 'Baru saja' }}
                            </span>
                            <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                            <span class="text-xs font-semibold text-orange-600">Video Edukasi</span>
                        </div>

                        <!-- Title -->
                        <h3 class="font-bold text-lg lg:text-xl text-slate-900 mb-3 group-hover:text-teal-700 transition-colors duration-300 line-clamp-2 leading-tight flex-grow">
                            {{ $video->title }}
                        </h3>

                        <!-- Description -->
                        <p class="text-slate-500 text-sm font-medium leading-relaxed line-clamp-3 mb-4">
                            {{ Str::limit($video->description, 110) }}
                        </p>

                        <!-- Button -->
                        <div class="pt-4 border-t border-slate-50 mt-auto">
                            <a href="{{ route('materials.show', $video->slug) }}"
                               class="w-full inline-flex items-center justify-center gap-2 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-orange-400 hover:to-amber-500 text-white py-3.5 rounded-xl font-bold text-sm tracking-wide shadow-lg shadow-teal-600/10 transition-all duration-500 transform hover:-translate-y-0.5 active:scale-95">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                                Mulai Menonton
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('materials.show', $video->slug) }}" class="absolute inset-0 z-10" aria-label="Tonton {{ $video->title }}"></a>
                </article>
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3" data-aos="fade-up">
                    <div class="text-center py-20 lg:py-28 bg-white border-2 border-dashed border-slate-200 rounded-3xl">
                        <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-slate-50 to-slate-100 flex items-center justify-center text-4xl mb-6 shadow-inner">
                            🎬
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 mb-2">Video Edukasi Belum Tersedia</h4>
                        <p class="text-sm text-slate-500 max-w-md mx-auto leading-relaxed mb-6">
                            Koleksi materi video edukasi kami sedang dalam proses produksi dan akan segera diunggah oleh administrator.
                        </p>
                        <a href="{{ route('materials.index') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-teal-600 text-white rounded-xl text-sm font-bold hover:bg-teal-700 transition-all duration-300 shadow-lg shadow-teal-600/20">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            Lihat Semua Materi
                        </a>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($materials->hasPages())
            <div class="mt-16 lg:mt-20" data-aos="fade-up">
                <div class="bg-white border border-slate-100 rounded-2xl shadow-sm p-4 flex justify-center">
                    {{ $materials->links() }}
                </div>
            </div>
        @endif

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