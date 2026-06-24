<section id="team" class="py-24 bg-white relative overflow-hidden">
    <!-- Dekorasi Latar Belakang Halus -->
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-[#FFB74D]/5 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-6">
        
        <!-- HEADER SECTION -->
        <div class="text-center max-w-2xl mx-auto mb-20" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 text-[#2E7D32] bg-[#2E7D32]/10 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                🤝 Jiwa di Balik Gerakan
            </div>
            <h2 class="text-3xl md:text-5xl font-black text-gray-950 tracking-tight">
                Struktur & <span class="text-[#2E7D32]">Tim Kami</span>
            </h2>
            <p class="mt-4 text-gray-600 font-medium">
                Para inisiator, profesional, dan relawan berdedikasi yang bekerja tulus di balik layar demi masa depan generasi muda.
            </p>
        </div>

        <!-- GRID TIM ATAU STATE KOSONG -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($teams as $index => $team)
                <div class="group bg-[#FAFAF7] rounded-[2rem] border border-gray-100 overflow-hidden transition-all duration-500 hover:shadow-xl hover:-translate-y-2"
                     data-aos="fade-up"
                     data-aos-delay="{{ ($index % 4) * 100 }}">
                    
                    <!-- AREA FOTO TIM -->
                    <div class="overflow-hidden h-80 relative">
                        @if($team->photo)
                            <img 
                                src="{{ asset('storage/'.$team->photo) }}" 
                                alt="{{ $team->name }}"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                            >
                        @else
                            <!-- Placeholder Foto Kosong Bergaya Minimalis Premium -->
                            <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex flex-col items-center justify-center text-gray-400 gap-2">
                                <span class="text-4xl">👤</span>
                                <span class="text-xs font-bold tracking-wider uppercase opacity-60">Belum Ada Foto</span>
                            </div>
                        @endif
                        
                        <!-- Overlay Dekoratif Tipis Saat Hover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#1A2327]/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <!-- DATA TEKS TIM -->
                    <div class="p-6 text-center space-y-1 bg-white border-t border-gray-50">
                        <h3 class="font-bold text-lg text-gray-950 group-hover:text-[#2E7D32] transition-colors duration-300">
                            {{ $team->name }}
                        </h3>
                        <p class="text-[#2E7D32] text-xs font-bold uppercase tracking-widest bg-[#2E7D32]/5 inline-block px-3 py-1 rounded-full">
                            {{ $team->position }}
                        </p>
                    </div>

                </div>
            @empty
                <!-- TAMPILAN JIKA BELUM ADA DATA TIM DI PANEL FILAMENT -->
                <div class="col-span-1 sm:col-span-2 lg:col-span-4 text-center py-20 bg-[#FAFAF7] border border-dashed border-gray-200 rounded-[2.5rem] p-8" data-aos="fade-up">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-gray-50 flex items-center justify-center text-2xl mb-4">
                        👥
                    </div>
                    <h4 class="font-bold text-gray-900 mb-1">Data Anggota Tim Belum Diisi</h4>
                    <p class="text-sm text-gray-500 max-w-sm mx-auto leading-relaxed">
                        Manajemen struktur organisasi dan profil penggerak yayasan belum diperbarui oleh administrator di panel kontrol.
                    </p>
                </div>
            @endforelse
        </div>

    </div>
</section>