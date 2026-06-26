@php
    use Illuminate\Support\Facades\Storage;
@endphp

{{-- Alpine.js & Tailwind CSS harus sudah ada di layouts.app --}}
{{-- Pastikan layouts.app sudah include: @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

<nav 
    x-data="{ 
        isOpen: false, 
        scrolled: false,
        activeDropdown: null 
    }"
    x-init="
        window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 });
        $watch('activeDropdown', value => {
            if (value !== null) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
    "
    @keydown.escape.window="activeDropdown = null; isOpen = false"
    :class="scrolled ? 'bg-white/95 shadow-lg shadow-slate-900/5 py-3' : 'bg-white/80 py-5'"
    class="fixed top-0 left-0 right-0 z-50 backdrop-blur-xl border-b border-slate-100 transition-all duration-500 ease-out"
>

    {{-- Backdrop Overlay untuk Mobile & Dropdown --}}
    <div 
        x-show="isOpen || activeDropdown !== null"
        x-transition:enter="transition-opacity ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="isOpen = false; activeDropdown = null"
        class="fixed inset-0 bg-slate-900/20 backdrop-blur-sm z-40 lg:hidden"
        style="display: none;"
        x-cloak
    ></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">

            {{-- ==================== LOGO & BRANDING ==================== --}}
            <a href="/" class="flex items-center gap-3 min-w-0 flex-shrink-0 z-50 relative group">
                <div class="relative overflow-hidden rounded-xl">
                    @if(!empty($setting?->logo))
                        <img
                            src="{{ Storage::url($setting->logo) }}"
                            alt="{{ $setting?->site_name }}"
                            class="h-10 w-auto object-contain transition-transform duration-500 group-hover:scale-110">
                    @else
                        {{-- Default Logo Placeholder --}}
                        <div class="h-10 w-10 bg-gradient-to-br from-teal-500 to-emerald-600 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg shadow-teal-500/30">
                            S
                        </div>
                    @endif
                </div>
                <div class="flex flex-col">
                    <span class="text-lg sm:text-xl font-extrabold text-slate-800 tracking-tight leading-none group-hover:text-teal-700 transition-colors duration-300">
                        {{ $setting?->site_name ?? 'Sahabat Remaja' }}
                    </span>
                    <span class="text-[10px] sm:text-xs font-medium text-slate-400 tracking-widest uppercase mt-0.5">
                        Peduli & Berbagi
                    </span>
                </div>
            </a>

            {{-- ==================== DESKTOP NAVIGATION ==================== --}}
            <div class="hidden lg:flex items-center gap-1 xl:gap-2">

                {{-- Beranda --}}
                <a href="/" 
                   class="relative px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-teal-700 hover:bg-teal-50 transition-all duration-300 group">
                    <span class="relative z-10 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Beranda
                    </span>
                </a>

                {{-- Tentang Kami Dropdown --}}
                <div class="relative" x-data="{ open: false }">
                    <button
                        @mouseenter="open = true"
                        @mouseleave="open = false"
                        @click="open = !open"
                        class="relative px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-teal-700 hover:bg-teal-50 transition-all duration-300 flex items-center gap-1.5 focus:outline-none"
                        :class="{ 'bg-teal-50 text-teal-700': open }"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Tentang Kami
                        <svg 
                            class="w-3.5 h-3.5 transition-transform duration-300 ease-out" 
                            :class="{ 'rotate-180': open }"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    {{-- Dropdown Menu --}}
                    <div
                        x-show="open"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                        x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                        @mouseenter="open = true"
                        @mouseleave="open = false"
                        class="absolute left-0 top-full mt-2 w-64 bg-white rounded-2xl shadow-2xl shadow-slate-900/10 border border-slate-100 py-2 overflow-hidden z-50"
                        style="display: none;"
                        x-cloak
                    >
                        <div class="px-4 py-3 border-b border-slate-50 bg-gradient-to-r from-teal-50 to-transparent">
                            <p class="text-xs font-bold text-teal-600 uppercase tracking-wider">Kenali Kami</p>
                        </div>
                        
                        <a href="{{ route('profile.index') ?? '#' }}" class="group flex items-center gap-3 px-5 py-3 text-slate-600 hover:text-teal-700 hover:bg-teal-50/50 transition-all duration-200">
                            <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-orange-100 text-orange-600 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </span>
                            <div>
                                <span class="block text-sm font-semibold">Profil Organisasi</span>
                                <span class="block text-xs text-slate-400">Visi, misi, dan sejarah</span>
                            </div>
                        </a>

                        <a href="{{ route('gallery.index') ?? '#gallery' }}" class="group flex items-center gap-3 px-5 py-3 text-slate-600 hover:text-teal-700 hover:bg-teal-50/50 transition-all duration-200">
                            <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-purple-100 text-purple-600 group-hover:bg-purple-500 group-hover:text-white transition-all duration-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </span>
                            <div>
                                <span class="block text-sm font-semibold">Galeri</span>
                                <span class="block text-xs text-slate-400">Dokumentasi kegiatan</span>
                            </div>
                        </a>

                        <a href="{{ route('team.index') ?? '#team' }}" class="group flex items-center gap-3 px-5 py-3 text-slate-600 hover:text-teal-700 hover:bg-teal-50/50 transition-all duration-200">
                            <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-blue-100 text-blue-600 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </span>
                            <div>
                                <span class="block text-sm font-semibold">Tim Kami</span>
                                <span class="block text-xs text-slate-400">Para relawan & pengurus</span>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Program --}}
                <a href="{{ route('programs.index') ?? '#program' }}" 
                   class="relative px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-teal-700 hover:bg-teal-50 transition-all duration-300 group">
                    <span class="relative z-10 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                        </svg>
                        Program
                    </span>
                </a>

                {{-- Artikel --}}
                <a href="{{ route('articles.index') ?? '#article' }}" 
                   class="relative px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-teal-700 hover:bg-teal-50 transition-all duration-300 group">
                    <span class="relative z-10 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                        Artikel
                    </span>
                </a>

                {{-- Materi Dropdown --}}
                <div class="relative" x-data="{ open: false }">
                    <button
                        @mouseenter="open = true"
                        @mouseleave="open = false"
                        @click="open = !open"
                        class="relative px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-teal-700 hover:bg-teal-50 transition-all duration-300 flex items-center gap-1.5 focus:outline-none"
                        :class="{ 'bg-teal-50 text-teal-700': open }"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        Materi
                        <svg 
                            class="w-3.5 h-3.5 transition-transform duration-300 ease-out" 
                            :class="{ 'rotate-180': open }"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div
                        x-show="open"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                        x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                        @mouseenter="open = true"
                        @mouseleave="open = false"
                        class="absolute left-0 top-full mt-2 w-56 bg-white rounded-2xl shadow-2xl shadow-slate-900/10 border border-slate-100 py-2 overflow-hidden z-50"
                        style="display: none;"
                        x-cloak
                    >
                        <div class="px-4 py-3 border-b border-slate-50 bg-gradient-to-r from-teal-50 to-transparent">
                            <p class="text-xs font-bold text-teal-600 uppercase tracking-wider">Sumber Belajar</p>
                        </div>

                        <a href="{{ route('materials.index') }}" class="group flex items-center gap-3 px-5 py-3 text-slate-600 hover:text-teal-700 hover:bg-teal-50/50 transition-all duration-200">
                            <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-emerald-100 text-emerald-600 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </span>
                            <div>
                                <span class="block text-sm font-semibold">📚 Modul Pembelajaran</span>
                                <span class="block text-xs text-slate-400">Bacaan & panduan</span>
                            </div>
                        </a>

                        <a href="{{ route('materials.videos') }}" class="group flex items-center gap-3 px-5 py-3 text-slate-600 hover:text-teal-700 hover:bg-teal-50/50 transition-all duration-200">
                            <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-rose-100 text-rose-600 group-hover:bg-rose-500 group-hover:text-white transition-all duration-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </span>
                            <div>
                                <span class="block text-sm font-semibold">🎥 Video Edukasi</span>
                                <span class="block text-xs text-slate-400">Tutorial & penjelasan</span>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Kebencanaan Dropdown --}}
                <div class="relative" x-data="{ open: false }">
                    <button
                        @mouseenter="open = true"
                        @mouseleave="open = false"
                        @click="open = !open"
                        class="relative px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-teal-700 hover:bg-teal-50 transition-all duration-300 flex items-center gap-1.5 focus:outline-none"
                        :class="{ 'bg-teal-50 text-teal-700': open }"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        Kebencanaan
                        <svg 
                            class="w-3.5 h-3.5 transition-transform duration-300 ease-out" 
                            :class="{ 'rotate-180': open }"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div
                        x-show="open"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                        x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                        @mouseenter="open = true"
                        @mouseleave="open = false"
                        class="absolute left-0 top-full mt-2 w-64 bg-white rounded-2xl shadow-2xl shadow-slate-900/10 border border-slate-100 py-2 overflow-hidden z-50"
                        style="display: none;"
                        x-cloak
                    >
                        <div class="px-4 py-3 border-b border-slate-50 bg-gradient-to-r from-red-50 to-transparent">
                            <p class="text-xs font-bold text-red-500 uppercase tracking-wider">Siaga Bencana</p>
                        </div>

                        <a href="{{ route('evacuation.index') }}" class="group flex items-center gap-3 px-5 py-3 text-slate-600 hover:text-red-600 hover:bg-red-50/50 transition-all duration-200">
                            <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-red-100 text-red-600 group-hover:bg-red-500 group-hover:text-white transition-all duration-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </span>
                            <div>
                                <span class="block text-sm font-semibold">🚨 Jalur Evakuasi</span>
                                <span class="block text-xs text-slate-400">Peta & rute darurat</span>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Kontak --}}
                <a href="{{ route('contact.index') ?? '#contact' }}" 
                   class="relative px-4 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-teal-700 hover:bg-teal-50 transition-all duration-300 group">
                    <span class="relative z-10 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Kontak
                    </span>
                </a>

                {{-- CTA Button Desktop --}}
                <a href="{{ route('volunteer.index') ?? '/volunteer' }}"
                   class="ml-2 relative overflow-hidden group bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-orange-400 hover:to-amber-500 text-white px-6 py-3 rounded-xl text-sm font-bold tracking-wide shadow-lg shadow-teal-600/20 hover:shadow-orange-400/30 transition-all duration-500 transform hover:-translate-y-0.5 active:scale-95 flex items-center gap-2">
                    <span class="relative z-10 flex items-center gap-2">
                        Gabung Relawan
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </span>
                </a>

            </div>

            {{-- ==================== MOBILE HAMBURGER BUTTON ==================== --}}
            <button
                @click="isOpen = !isOpen; activeDropdown = null"
                class="lg:hidden relative z-50 p-2.5 text-slate-700 hover:text-teal-600 focus:outline-none rounded-xl hover:bg-teal-50 transition-all duration-300"
                :class="{ 'bg-teal-50 text-teal-600': isOpen }"
                aria-label="Toggle Menu">
                <svg class="w-6 h-6 transition-transform duration-300" :class="{ 'rotate-90': isOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="isOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

        </div>
    </div>

    {{-- ==================== MOBILE MENU ==================== --}}
    <div
        x-show="isOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-8 scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 -translate-y-8 scale-95"
        class="lg:hidden fixed inset-x-0 top-[72px] bg-white/95 backdrop-blur-xl border-t border-slate-100 shadow-2xl shadow-slate-900/10 max-h-[calc(100vh-80px)] overflow-y-auto z-40"
        style="display: none;"
        x-cloak
    >
        <div class="max-w-7xl mx-auto px-6 py-6 space-y-2">

            {{-- Mobile Beranda --}}
            <a href="/" @click="isOpen = false" 
               class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-slate-700 hover:text-teal-700 hover:bg-teal-50 font-semibold transition-all duration-200">
                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Beranda
            </a>

            {{-- Mobile Tentang Kami Accordion --}}
            <div x-data="{ open: false }" class="border-b border-slate-50 pb-2">
                <button @click="open = !open" 
                        class="w-full flex items-center justify-between px-4 py-3.5 rounded-xl text-slate-700 hover:text-teal-700 hover:bg-teal-50 font-semibold transition-all duration-200"
                        :class="{ 'bg-teal-50 text-teal-700': open }">
                    <span class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Tentang Kami
                    </span>
                    <svg class="w-4 h-4 transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                
                <div x-show="open" x-collapse class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('profile.index') ?? '#' }}" @click="isOpen = false" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm text-slate-600 hover:text-teal-700 hover:bg-teal-50/50 transition-all duration-200">
                        <span class="w-2 h-2 rounded-full bg-orange-400"></span>
                        Profil Organisasi
                    </a>
                    <a href="{{ route('gallery.index') ?? '#gallery' }}" @click="isOpen = false" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm text-slate-600 hover:text-teal-700 hover:bg-teal-50/50 transition-all duration-200">
                        <span class="w-2 h-2 rounded-full bg-purple-400"></span>
                        Galeri
                    </a>
                    <a href="{{ route('team.index') ?? '#team' }}" @click="isOpen = false" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm text-slate-600 hover:text-teal-700 hover:bg-teal-50/50 transition-all duration-200">
                        <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                        Tim Kami
                    </a>
                </div>
            </div>

            {{-- Mobile Program --}}
            <a href="{{ route('programs.index') ?? '#program' }}" @click="isOpen = false" 
               class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-slate-700 hover:text-teal-700 hover:bg-teal-50 font-semibold transition-all duration-200">
                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                </svg>
                Program
            </a>

            {{-- Mobile Artikel --}}
            <a href="{{ route('articles.index') ?? '#article' }}" @click="isOpen = false" 
               class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-slate-700 hover:text-teal-700 hover:bg-teal-50 font-semibold transition-all duration-200">
                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
                Artikel
            </a>

            {{-- Mobile Materi Accordion --}}
            <div x-data="{ open: false }" class="border-b border-slate-50 pb-2">
                <button @click="open = !open" 
                        class="w-full flex items-center justify-between px-4 py-3.5 rounded-xl text-slate-700 hover:text-teal-700 hover:bg-teal-50 font-semibold transition-all duration-200"
                        :class="{ 'bg-teal-50 text-teal-700': open }">
                    <span class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        Materi
                    </span>
                    <svg class="w-4 h-4 transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                
                <div x-show="open" x-collapse class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('materials.index') }}" @click="isOpen = false" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm text-slate-600 hover:text-teal-700 hover:bg-teal-50/50 transition-all duration-200">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        📚 Modul Pembelajaran
                    </a>
                    <a href="{{ route('materials.videos') }}" @click="isOpen = false" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm text-slate-600 hover:text-teal-700 hover:bg-teal-50/50 transition-all duration-200">
                        <span class="w-2 h-2 rounded-full bg-rose-400"></span>
                        🎥 Video Edukasi
                    </a>
                </div>
            </div>

            {{-- Mobile Kebencanaan Accordion --}}
            <div x-data="{ open: false }" class="border-b border-slate-50 pb-2">
                <button @click="open = !open" 
                        class="w-full flex items-center justify-between px-4 py-3.5 rounded-xl text-slate-700 hover:text-red-600 hover:bg-red-50 font-semibold transition-all duration-200"
                        :class="{ 'bg-red-50 text-red-600': open }">
                    <span class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        Kebencanaan
                    </span>
                    <svg class="w-4 h-4 transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                
                <div x-show="open" x-collapse class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('evacuation.index') }}" @click="isOpen = false" 
                       class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm text-slate-600 hover:text-red-600 hover:bg-red-50/50 transition-all duration-200">
                        <span class="w-2 h-2 rounded-full bg-red-400"></span>
                        🚨 Jalur Evakuasi
                    </a>
                </div>
            </div>

            {{-- Mobile Kontak --}}
            <a href="{{ route('contact.index') ?? '#contact' }}" @click="isOpen = false" 
               class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-slate-700 hover:text-teal-700 hover:bg-teal-50 font-semibold transition-all duration-200">
                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Kontak
            </a>

            {{-- Mobile CTA --}}
            <div class="pt-4 mt-2 border-t border-slate-100">
                <a href="{{ route('volunteer.index') ?? '/volunteer' }}" @click="isOpen = false"
                   class="flex items-center justify-center gap-2 w-full bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-orange-400 hover:to-amber-500 text-white py-4 rounded-xl font-bold text-base tracking-wide shadow-lg shadow-teal-600/20 transition-all duration-500 transform active:scale-95">
                    <span>Gabung Relawan</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </a>
                <p class="text-center text-xs text-slate-400 mt-3">Bergabunglah bersama kami untuk Indonesia yang lebih baik</p>
            </div>

        </div>
    </div>
</nav>

{{-- Spacer untuk fixed navbar --}}
<div class="h-20 lg:h-24"></div>