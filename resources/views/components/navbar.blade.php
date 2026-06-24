@php
    use Illuminate\Support\Facades\Storage;
@endphp

<nav x-data="{ isOpen: false }"
    class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-100/80">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center h-20">

            {{-- LOGO --}}
            <a href="/" class="flex items-center gap-3">

                @if(!empty($setting?->logo))
                    <img
                        src="{{ Storage::url($setting->logo) }}"
                        alt="{{ $setting?->site_name }}"
                        class="h-10 w-auto object-contain">
                @endif
                

                <span class="text-2xl font-black text-gray-950 tracking-tight">
                    {{ $setting?->site_name ?? 'Sahabat Remaja' }}
                </span>

            </a>

            {{-- DESKTOP MENU --}}
            <div class="hidden md:flex gap-8 items-center text-gray-600 text-sm font-semibold">

                <a href="#about"
                    class="hover:text-[#2E7D32] transition-colors">
                    Tentang
                </a>

                <a href="#program"
                    class="hover:text-[#2E7D32] transition-colors">
                    Program
                </a>

                <a href="#article"
                    class="hover:text-[#2E7D32] transition-colors">
                    Artikel
                </a>

                <a href="#gallery"
                    class="hover:text-[#2E7D32] transition-colors">
                    Galeri
                </a>

                <a href="#team"
                    class="hover:text-[#2E7D32] transition-colors">
                    Tim
                </a>

                <a href="#contact"
                    class="hover:text-[#2E7D32] transition-colors">
                    Kontak
                </a>

            </div>

            {{-- CTA BUTTON --}}
            <div class="hidden md:block">

                <a href="/volunteer"
                    class="bg-[#2E7D32] hover:bg-[#FFB74D]
                           text-white hover:text-gray-900
                           px-6 py-3 rounded-xl text-sm font-bold
                           transition-all duration-300">

                    Gabung Relawan 🤝

                </a>

            </div>

            {{-- MOBILE BUTTON --}}
            <button
                @click="isOpen = !isOpen"
                class="md:hidden p-2 rounded-lg">

                <svg class="w-7 h-7"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        x-show="!isOpen"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16">
                    </path>

                    <path
                        x-show="isOpen"
                        x-cloak
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12">
                    </path>

                </svg>

            </button>

        </div>

    </div>

    {{-- MOBILE MENU --}}
    <div
        x-show="isOpen"
        x-transition
        x-cloak
        class="md:hidden bg-white border-t border-gray-100 px-6 py-6 space-y-4">

        <a href="#about" @click="isOpen=false" class="block">
            Tentang Kami
        </a>

        <a href="#program" @click="isOpen=false" class="block">
            Program
        </a>

        <a href="#article" @click="isOpen=false" class="block">
            Artikel
        </a>

        <a href="#gallery" @click="isOpen=false" class="block">
            Galeri
        </a>

        <a href="#team" @click="isOpen=false" class="block">
            Tim
        </a>

        <a href="#contact" @click="isOpen=false" class="block">
            Kontak
        </a>

        <a href="/volunteer"
            class="block text-center bg-[#2E7D32] text-white py-3 rounded-xl font-bold">

            Gabung Relawan 🤝

        </a>

    </div>

</nav>