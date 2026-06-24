<footer class="bg-[#1A2327] text-gray-300 pt-20 pb-8 border-t border-gray-800/50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 mb-16">

            {{-- TENTANG ORGANISASI --}}
            <div class="lg:col-span-4 space-y-6">

                <div class="space-y-3">

                    <h3 class="font-black text-2xl text-white tracking-tight">
                        {{ $setting?->site_name ?? 'Sahabat Remaja' }}
                    </h3>

                    <div class="w-12 h-1 bg-[#2E7D32] rounded-full"></div>

                </div>

                <p class="text-sm text-gray-400 leading-relaxed font-medium">

                    {{ $setting?->about ??
                    'Bergerak bersama sebagai episentrum aksi nyata kemanusiaan, penegak pilar pendidikan inklusif, dan ruang aman bagi pengembangan potensi generasi muda Indonesia.' }}

                </p>

                <div class="pt-2">

                    <a href="#contact"
                        class="inline-flex items-center gap-2 text-xs font-bold tracking-wider uppercase text-gray-950 bg-[#FFB74D] hover:bg-white px-5 py-3 rounded-xl transition duration-300 shadow-lg shadow-[#FFB74D]/10">

                        ❤️ Ambil Peran Sosial

                    </a>

                </div>

            </div>

            {{-- MENU --}}
            <div class="lg:col-span-2 lg:col-start-6 space-y-4">

                <h4 class="font-bold text-white text-sm uppercase tracking-wider">
                    Menu Utama
                </h4>

                <ul class="space-y-3 text-sm font-medium">

                    <li>
                        <a href="#about"
                            class="text-gray-400 hover:text-[#FFB74D] transition flex items-center gap-1">
                            <span>•</span> Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a href="#program"
                            class="text-gray-400 hover:text-[#FFB74D] transition flex items-center gap-1">
                            <span>•</span> Program Gerakan
                        </a>
                    </li>

                    <li>
                        <a href="#gallery"
                            class="text-gray-400 hover:text-[#FFB74D] transition flex items-center gap-1">
                            <span>•</span> Galeri Aksi
                        </a>
                    </li>

                    <li>
                        <a href="#article"
                            class="text-gray-400 hover:text-[#FFB74D] transition flex items-center gap-1">
                            <span>•</span> Artikel & Berita
                        </a>
                    </li>

                </ul>

            </div>

            {{-- KONTAK --}}
            <div class="lg:col-span-3 space-y-4">

                <h4 class="font-bold text-white text-sm uppercase tracking-wider">
                    Hubungi Kami
                </h4>

                <div class="space-y-3 text-sm text-gray-400">

                    @if($setting?->email)
                        <p>📧 {{ $setting->email }}</p>
                    @endif

                    @if($setting?->phone)
                        <p>📱 {{ $setting->phone }}</p>
                    @endif

                    @if($setting?->address)
                        <p>📍 {{ $setting->address }}</p>
                    @endif

                </div>

            </div>

            {{-- SOSIAL MEDIA --}}
            <div class="lg:col-span-2 space-y-4">

                <h4 class="font-bold text-white text-sm uppercase tracking-wider">
                    Media Sosial
                </h4>

                <p class="text-xs text-gray-400">
                    Ikuti cerita, dokumentasi, dan transparansi aksi kami.
                </p>

                <div class="flex gap-3 pt-2">

                    @if($setting?->instagram)
                        <a href="{{ $setting->instagram }}"
                            target="_blank"
                            class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#2E7D32] hover:border-[#2E7D32] text-white transition duration-300">
                            📸
                        </a>
                    @endif

                    @if($setting?->facebook)
                        <a href="{{ $setting->facebook }}"
                            target="_blank"
                            class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#2E7D32] hover:border-[#2E7D32] text-white transition duration-300">
                            📘
                        </a>
                    @endif

                    @if($setting?->youtube)
                        <a href="{{ $setting->youtube }}"
                            target="_blank"
                            class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#2E7D32] hover:border-[#2E7D32] text-white transition duration-300">
                            🎬
                        </a>
                    @endif

                </div>

            </div>

        </div>

        {{-- COPYRIGHT --}}
        <div class="border-t border-gray-800/60 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-medium text-gray-500">

            <p>
                © {{ date('Y') }}
                {{ $setting?->site_name ?? 'Sahabat Remaja' }}.
                Seluruh Hak Cipta Dilindungi.
            </p>

            <div class="flex gap-6">

                <a href="#" class="hover:text-gray-400 transition">
                    Kebijakan Privasi
                </a>

                <a href="#" class="hover:text-gray-400 transition">
                    Syarat & Ketentuan
                </a>

            </div>

        </div>

    </div>

</footer>