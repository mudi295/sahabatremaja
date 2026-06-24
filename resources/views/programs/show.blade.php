@extends('layouts.app')

@section('content')
<!-- HEADER HERO PROGRAM (Sinematik) -->
<div class="relative bg-[#1A2327] pt-32 pb-20 overflow-hidden z-10 mt-20">
    <!-- Gambar Background dengan Overlay Gelap -->
    @if($program->thumbnail)
        <div class="absolute inset-0 z-10">
            <img src="{{ Storage::url($program->thumbnail) }}" alt="{{ $program->title }}" class="w-full h-full object-cover opacity-30 blur-sm transform scale-110">
            <div class="absolute inset-0 bg-gradient-to-b from-[#1A2327] via-[#1A2327]/80 to-[#FAFAF7]"></div>
        </div>
    @else
        <div class="absolute inset-0 z-10 bg-gradient-to-br from-[#2E7D32]/20 to-[#66BB6A]/20"></div>
    @endif

    <div class="max-w-7xl mx-auto px-6 relative z-20 text-center lg:text-left">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            
            <!-- Judul & Kategori (Sisi Kiri) -->
            <div class="lg:col-span-8 space-y-4">
                <div class="inline-flex items-center gap-2 text-[#FFB74D] bg-[#FFB74D]/10 px-4 py-2 rounded-full text-xs font-bold tracking-wider uppercase mb-2" data-aos="fade-down">
                    🌿 Pilar Gerakan Kemanusiaan
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight" data-aos="fade-up" data-aos-delay="100">
                    {{ $program->title }}
                </h1>
                <p class="text-xs text-gray-400 font-semibold flex items-center gap-1.5 justify-center lg:justify-start pt-2" data-aos="fade-up" data-aos-delay="200">
                    📅 Diterbitkan: {{ $program->created_at ? $program->created_at->isoFormat('D MMMM Y') : 'Baru saja' }}
                </p>
            </div>

            <!-- Tombol Aksi Cepat (Sisi Kanan - Opsional) -->
            <div class="lg:col-span-4 flex justify-center lg:justify-end" data-aos="fade-left" data-aos-delay="300">
                <a href="#contact" class="inline-flex items-center justify-center gap-2.5 bg-[#2E7D32] hover:bg-[#FFB74D] hover:text-gray-950 text-white font-extrabold px-8 py-4 rounded-2xl shadow-xl shadow-[#2E7D32]/20 transition duration-300 transform active:scale-95 text-base">
                    Salurkan Bantuan ❤️
                </a>
            </div>

        </div>
    </div>
</div>

<!-- KONTEN UTAMA (Layout Asimetris) -->
<div class="bg-[#FAFAF7] pb-24 relative z-20 -mt-1">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- AREA DESKRIPSI UTAMA (Sisi Kiri Lebih Lebar) -->
            <div class="lg:col-span-8 space-y-10" data-aos="fade-right">
                
                <!-- Gambar Thumbnail Utama (Membulat Cantik) -->
                @if($program->thumbnail)
                    <div class="relative p-2 bg-white rounded-[2.5rem] shadow-xl border border-gray-100/50 transform -rotate-1 hover:rotate-0 transition duration-500 overflow-hidden">
                        <img src="{{ Storage::url($program->thumbnail) }}" alt="{{ $program->title }}" class="rounded-[2.2rem] w-full h-[400px] md:h-[500px] object-cover shadow-inner">
                    </div>
                @endif

                <!-- Teks Deskripsi Penuh (Tailwind Prose Premium) -->
                <div class="prose prose-sm md:prose-base max-w-none prose-gray leading-relaxed text-gray-700 font-medium prose-headings:font-black prose-headings:text-gray-950 prose-headings:tracking-tight prose-a:text-[#2E7D32] prose-strong:text-gray-950 prose-img:rounded-3xl prose-blockquote:border-l-[#2E7D32] prose-blockquote:bg-[#FAFAF7] prose-blockquote:py-1">
                    {!! nl2br(e($program->description)) !!}
                </div>
            </div>

            <!-- SIDEBAR INFO & CTA (Sisi Kanan Menempel) -->
            <div class="lg:col-span-4" data-aos="fade-left" data-aos-delay="200">
                <div class="sticky top-28 space-y-8">
                    
                    <!-- Kotak Ringkasan Program -->
                    <div class="bg-white p-8 rounded-[2rem] border border-gray-100 shadow-xl space-y-6">
                        <h4 class="font-bold text-gray-950 text-lg flex items-center gap-2">
                            <span class="text-[#2E7D32]">📋</span> Ringkasan Inisiatif
                        </h4>
                        
                        <div class="space-y-4 text-sm font-medium text-gray-700">
                            <div class="flex items-start gap-3">
                                <span class="text-[#FFB74D]">📍</span>
                                <p>Fokus Wilayah: Nasional (Indonesia)</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-[#2E7D32]">🤝</span>
                                <p>Metode Gerakan: Relawan Kemanusiaan</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-[#D48200]">🧠</span>
                                <p>Tujuan: Pemberdayaan & Pendidikan</p>
                            </div>
                        </div>

                        <div class="pt-6 border-t border-gray-100">
                            <p class="text-xs text-gray-500 leading-relaxed font-normal">Program ini dijalankan sepenuhnya secara nirlaba demi mewujudkan generasi muda yang berdampak positif bagi masyarakat.</p>
                        </div>
                    </div>

                    <!-- Tombol Ajakan Sekunder (Daftar Relawan) -->
                    <a href="/volunteer" class="w-full inline-flex items-center justify-center gap-2.5 bg-white border-2 border-gray-100 hover:border-[#2E7D32] text-gray-800 hover:text-[#2E7D32] font-bold px-8 py-4 rounded-2xl shadow-sm hover:shadow transition duration-300 transform active:scale-95 text-sm">
                        Gabung Sebagai Relawan 🤝
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection