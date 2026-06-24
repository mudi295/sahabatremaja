<section id="gallery" class="py-24 bg-white relative overflow-hidden">
    <!-- Dekorasi Latar Belakang Halus -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-[#2E7D32]/5 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-6">
        
        <!-- HEADER SECTION -->
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 text-[#2E7D32] bg-[#2E7D32]/10 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                📸 Rekam Jejak Kebaikan
            </div>
            <h2 class="text-3xl md:text-5xl font-black text-gray-950 tracking-tight">
                Dokumentasi <span class="text-[#2E7D32]">Aksi Lapangan</span>
            </h2>
            <p class="mt-4 text-gray-600 font-medium">
                Setiap senyuman, setiap bantuan, dan setiap perubahan yang berhasil kita ukir bersama para relawan dan penerima manfaat.
            </p>
        </div>

        <!-- LOGIC DATA GALERI -->
        @if($galleries->count() > 0)
            <!-- Grid Layout Modern Responsif -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($galleries as $index => $gallery)
                    <div class="group relative overflow-hidden rounded-[2rem] bg-gray-100 shadow-md transition-all duration-500 hover:-translate-y-2 hover:shadow-xl" 
                         data-aos="fade-up" 
                         data-aos-delay="{{ ($index % 4) * 100 }}">
                        
                        <!-- Foto Utama -->
                        <img 
                            src="{{ asset('storage/' . $gallery->image) }}" 
                            alt="{{ $gallery->title }}" 
                            class="h-72 w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                        >

                        <!-- Gradient Overlay (Muncul Halus Saat Hover) -->
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-950/90 via-gray-950/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                            <span class="text-[#FFB74D] text-xs font-bold uppercase tracking-widest mb-1.5">Aksi Sosial</span>
                            <h4 class="text-white font-bold text-lg leading-snug translate-y-4 group-hover:translate-y-0 transition-transform duration-500 delay-75">
                                {{ $gallery->title }}
                            </h4>
                        </div>
                        
                        <!-- Badge Kecil Permanen (Opsional untuk Estetika Pojok Atas) -->
                        <div class="absolute top-4 right-0 bg-white/90 backdrop-blur-sm px-3 py-1 text-[10px] font-black text-gray-950 rounded-l-full shadow-sm">
                            ✨ TERBARU
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- STATE KOSONG YANG JAUH LEBIH ESTETIK -->
            <div class="max-w-md mx-auto text-center py-16 bg-[#FAFAF7] border border-dashed border-gray-200 rounded-[2.5rem] p-8" data-aos="fade-up">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-gray-100 flex items-center justify-center text-2xl mb-4">
                    🖼️
                </div>
                <h4 class="font-bold text-gray-900 mb-1">Lensa Kegiatan Belum Terisi</h4>
                <p class="text-sm text-gray-500 leading-relaxed">
                    Belum ada dokumentasi kegiatan yang diunggah ke dalam sistem. Foto aksi kemanusaiaan segera hadir di sini.
                </p>
            </div>
        @endif

    </div>
</section>