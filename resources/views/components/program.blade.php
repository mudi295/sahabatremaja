@php
use Illuminate\Support\Str;
@endphp

<section id="program" class="py-24 bg-[#FAFAF7] relative overflow-hidden">
    <!-- Dekorasi Latar Belakang Lingkaran Halus -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#2E7D32]/5 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER SECTION -->
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 text-[#2E7D32] bg-[#2E7D32]/10 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                🌱 Inisiatif & Gerakan Nyata
            </div>
            <h2 class="text-3xl md:text-5xl font-black text-gray-950 tracking-tight">
                Program <span class="text-[#2E7D32]">Kemanusiaan</span>
            </h2>
            <p class="mt-4 text-gray-600 font-medium">
                Berbagai pilar gerakan berkelanjutan yang kami jalankan demi merangkul, mendidik, dan memberdayakan generasi muda.
            </p>
        </div>

        <!-- LAYOUT GRID PROGRAM -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse($programs as $index => $program)
                <div class="group bg-white rounded-[2rem] border border-gray-100 shadow-sm overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between"
                     data-aos="fade-up"
                     data-aos-delay="{{ ($index % 3) * 100 }}">
                    
                    <div>
                        <!-- Thumbnail dengan Efek Zoom -->
                        @if($program->thumbnail)
                            <div class="h-60 overflow-hidden relative">
                                <img
                                    src="{{ asset('storage/' . $program->thumbnail) }}"
                                    alt="{{ $program->title }}"
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                                
                                <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-[#2E7D32] text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
                                    Active Misi
                                </div>
                            </div>
                        @else
                            <!-- Placeholder jika tidak ada gambar -->
                            <div class="h-60 bg-gradient-to-br from-[#2E7D32]/10 to-[#66BB6A]/10 flex items-center justify-center text-4xl">
                                🌿
                            </div>
                        @endif

                        <!-- Konten Teks Card -->
                        <div class="p-8">
                            <h3 class="font-bold text-xl text-gray-950 mb-3 group-hover:text-[#2E7D32] transition-colors duration-300">
                                {{ $program->title }}
                            </h3>

                            <p class="text-gray-600 text-sm font-medium leading-relaxed">
                                {{ Str::limit($program->description, 130) }}
                            </p>
                        </div>
                    </div>

                    <!-- Tombol Aksi di Bagian Bawah Card -->
                    <div class="px-8 pb-8 pt-2">
                        <a href="{{ route('programs.show', $program) }}"
                           class="inline-flex items-center gap-2 text-sm font-bold text-[#2E7D32] group-hover:text-[#FFB74D] transition-colors duration-300">
                            Pelajari Selengkapnya 
                            <span class="transform group-hover:translate-x-1.5 transition-transform duration-300">→</span>
                        </a>
                    </div>

                </div>
            @empty
                <!-- TAMPILAN STATUS KOSONG -->
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-20 bg-white border border-dashed border-gray-200 rounded-[2.5rem] p-8" data-aos="fade-up">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-gray-50 flex items-center justify-center text-2xl mb-4">
                        💼
                    </div>
                    <h4 class="font-bold text-gray-900 mb-1">Daftar Program Masih Kosong</h4>
                    <p class="text-sm text-gray-500 max-w-sm mx-auto leading-relaxed">
                        Saat ini belum ada data program kemanusiaan yang diterbitkan. Ikuti terus pembaruan berkala kami.
                    </p>
                </div>
            @endforelse

        </div>

        <!-- BUTTON LIHAT SEMUA (FOOTER SECTION) -->
        @if($programs->count() > 0)
            <div class="text-center mt-16" data-aos="fade-up">
                <a href="{{ route('programs.index') }}"
                   class="inline-flex items-center gap-2 bg-[#2E7D32] hover:bg-[#FFB74D] text-white hover:text-gray-950 font-bold px-8 py-4 rounded-2xl shadow-lg shadow-[#2E7D32]/10 hover:shadow-[#FFB74D]/20 transition-all duration-300 transform active:scale-95">
                    Jelajahi Semua Program 🚀
                </a>
            </div>
        @endif

    </div>
</section>