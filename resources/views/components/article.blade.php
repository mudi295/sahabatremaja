<section id="article" class="py-24 bg-[#FAFAF7] relative overflow-hidden">
    <!-- Dekorasi Background Halus -->
    <div class="absolute top-10 right-0 w-72 h-72 bg-[#FFB74D]/5 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-6">
        
        <!-- HEADER SECTION -->
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 text-[#2E7D32] bg-[#2E7D32]/10 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                📰 Kabar & Wawasan
            </div>
            <h2 class="text-3xl md:text-5xl font-black text-gray-950 tracking-tight">
                Artikel <span class="text-[#2E7D32]">Terbaru</span>
            </h2>
            <p class="mt-4 text-gray-600 font-medium">
                Ikuti terus perkembangan aktivitas relawan, cerita inspiratif, dan edukasi seputar kepemudaan.
            </p>
        </div>

        <!-- GRID ARTIKEL (DIAMBIL DARI FILAMENT) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($articles as $index => $article)
                <article class="group bg-white rounded-[2rem] border border-gray-100 shadow-sm overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between"
                         data-aos="fade-up"
                         data-aos-delay="{{ ($index % 3) * 100 }}">
                    
                    <div>
                        <!-- Wadah Gambar Ber-efek Zoom -->
                        <div class="h-56 overflow-hidden relative">
                            @if($article->thumbnail)
                                <img 
                                    src="{{ asset('storage/'.$article->thumbnail) }}" 
                                    alt="{{ $article->title }}" 
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                                >
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center text-3xl">
                                    📄
                                </div>
                            @endif

                            <!-- Badge Kategori Statis / Dinamis -->
                            <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm text-gray-950 text-[10px] font-black tracking-widest uppercase px-3 py-1.5 rounded-lg shadow-sm">
                                Edukasi
                            </div>
                        </div>

                        <!-- Area Konten Teks -->
                        <div class="p-8">
                            <!-- Info Waktu (Metadata Opsional) -->
                            <p class="text-xs text-gray-400 font-semibold mb-2 flex items-center gap-1.5">
                                📅 {{ $article->created_at ? $article->created_at->isoFormat('D MMMM Y') : 'Baru saja' }}
                            </p>

                            <h3 class="font-bold text-xl text-gray-950 mb-3 group-hover:text-[#2E7D32] transition-colors duration-300 line-clamp-2">
                                {{ $article->title }}
                            </h3>
                            
                            <p class="text-gray-600 text-sm font-medium leading-relaxed line-clamp-3">
                                {{ $article->description }}
                            </p>
                        </div>
                    </div>

                    <!-- Tautan Baca Selengkapnya -->
                    <div class="px-8 pb-8 pt-2">
                        <a href="{{ route('articles.show', $article) }}" 
                           class="inline-flex items-center text-sm font-bold text-[#2E7D32] group-hover:text-[#FFB74D] transition-colors duration-300 gap-1">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 transform group-hover:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>

                </article>
            @empty
                <!-- TAMPILAN JIKA BELUM ADA INPUTAN SAMA SEKALI DI FILAMENT -->
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-20 bg-white border border-dashed border-gray-200 rounded-[2.5rem] p-8" data-aos="fade-up">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-gray-50 flex items-center justify-center text-2xl mb-4">
                        ✍️
                    </div>
                    <h4 class="font-bold text-gray-900 mb-1">Koran Digital Belum Terbit</h4>
                    <p class="text-sm text-gray-500 max-w-sm mx-auto leading-relaxed">
                        Saat ini belum ada artikel, berita, atau wawasan terbaru yang ditulis oleh admin. Tetap pantau ruang literasi kami ya!
                    </p>
                </div>
            @endforelse
        </div>

    </div>
</section>