@extends('layouts.app')

@section('content')
<!-- BANNER HEADER HALAMAN -->
<div class="relative bg-[#1A2327] py-28 overflow-hidden z-10 mt-20">
    <!-- Ornamen Glow Halus -->
    <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-[500px] h-[500px] bg-[#2E7D32]/20 rounded-full blur-3xl -z-10"></div>
    
    <div class="max-w-7xl mx-auto px-6 text-center lg:text-left">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 text-[#FFB74D] bg-[#FFB74D]/10 px-4 py-2 rounded-full text-xs font-bold tracking-wider uppercase mb-4" data-aos="fade-down">
                🌱 Etalase Gerakan Sosial
            </div>
            <h1 class="text-4xl md:text-6xl font-black text-white tracking-tight" data-aos="fade-up" data-aos-delay="100">
                Program <span class="text-[#FFB74D]">Kemanusiaan</span>
            </h1>
            <p class="mt-4 text-base md:text-lg text-gray-300 font-medium leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Jelajahi seluruh pilar gerakan berkelanjutan kami. Mulai dari pendidikan inklusif hingga aksi sosial darurat demi masa depan generasi muda yang lebih cerah.
            </p>
        </div>
    </div>
</div>

<!-- KONTEN UTAMA UTAMA -->
<div class="bg-[#FAFAF7] py-20 min-h-[50vh]">
    <div class="max-w-7xl mx-auto px-6">
        
        <!-- GRID KARTU PROGRAM -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($programs as $index => $program)
                <div class="group bg-white rounded-[2rem] border border-gray-100 shadow-sm overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between"
                     data-aos="fade-up"
                     data-aos-delay="{{ ($index % 3) * 100 }}">
                    
                    <div>
                        <!-- Thumbnail dengan Efek Hover Zoom -->
                        <div class="h-60 overflow-hidden relative bg-gray-100">
                            @if($program->thumbnail)
                                <img
                                    src="{{ Storage::url($program->thumbnail) }}"
                                    alt="{{ $program->title }}"
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-[#2E7D32]/10 to-[#66BB6A]/10 flex items-center justify-center text-4xl">
                                    🌿
                                </div>
                            @endif
                            
                            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-[#2E7D32] text-[10px] font-black uppercase tracking-wider px-3 py-1.5 rounded-lg shadow-sm">
                                Pilar Gerakan
                            </div>
                        </div>

                        <!-- Konten Informasi Card -->
                        <div class="p-8">
                            <h3 class="font-bold text-xl text-gray-950 mb-3 group-hover:text-[#2E7D32] transition-colors duration-300 line-clamp-2">
                                {{ $program->title }}
                            </h3>

                            <p class="text-gray-600 text-sm font-medium leading-relaxed line-clamp-3">
                                {{ \Illuminate\Support\Str::limit($program->description, 130) }}
                            </p>
                        </div>
                    </div>

                    <!-- Tombol Detail di Sisi Bawah -->
                    <div class="px-8 pb-8 pt-2">
                        <a href="{{ route('programs.show', $program) }}"
                           class="inline-flex items-center gap-2 text-sm font-bold text-[#2E7D32] group-hover:text-[#FFB74D] transition-colors duration-300">
                            Pelajari Selengkapnya 
                            <span class="transform group-hover:translate-x-1.5 transition-transform duration-300">→</span>
                        </a>
                    </div>

                </div>
            @empty
                <!-- TAMPILAN STATUS KOSONG JIKA TIDAK ADA PROGRAM -->
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-24 bg-white border border-dashed border-gray-200 rounded-[2.5rem] p-8" data-aos="fade-up">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-gray-50 flex items-center justify-center text-2xl mb-4">
                        💼
                    </div>
                    <h4 class="font-bold text-gray-900 mb-1">Belum Ada Program Terbit</h4>
                    <p class="text-sm text-gray-500 max-w-sm mx-auto leading-relaxed">
                        Saat ini data program kemanusiaan belum tersedia di dalam sistem kami. Silakan kembali beberapa saat lagi.
                    </p>
                </div>
            @endforelse
        </div>

        <!-- WRAPPER PAGINATION (NAVIGASI HALAMAN) -->
        @if($programs->hasPages())
            <div class="mt-20 p-6 bg-white border border-gray-100 rounded-2xl shadow-sm flex justify-center" data-aos="fade-up">
                {{ $programs->links() }}
            </div>
        @endif

    </div>
</div>
@endsection