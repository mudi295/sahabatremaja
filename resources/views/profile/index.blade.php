@extends('layouts.app')

@section('content')
<div class="relative bg-[#1A2327] pt-40 pb-28 overflow-hidden z-10">
    <div class="absolute inset-0 bg-gradient-to-br from-[#2E7D32]/10 to-[#FFB74D]/5 -z-10"></div>
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-[#2E7D32]/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="inline-flex items-center gap-2 text-[#FFB74D] bg-[#FFB74D]/10 px-4 py-2 rounded-full text-xs font-bold tracking-wider uppercase mb-4" data-aos="fade-down">
            ✨ Kenali Gerakan Kami
        </div>
        <h1 class="text-4xl md:text-6xl font-black text-white tracking-tight leading-tight" data-aos="fade-up" data-aos-delay="100">
            Tentang <span class="text-[#66BB6A]">Kami</span>
        </h1>
        @if(!empty($Profiles?->subtitle))
            <p class="mt-4 text-gray-300 text-base md:text-lg max-w-2xl mx-auto font-medium" data-aos="fade-up" data-aos-delay="200">
                {{ $Profiles->subtitle }}
            </p>
        @endif
    </div>
</div>

<section class="py-24 bg-[#FAFAF7] relative z-20 -mt-1">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center mb-24">
            
            {{-- Sisi Kiri: Visual Branding --}}
            <div class="lg:col-span-5" data-aos="fade-right">
                <div class="relative p-2.5 bg-white rounded-[2.5rem] shadow-xl border border-gray-100/50 transform -rotate-1 hover:rotate-0 transition duration-500 overflow-hidden">
                    @if(!empty($Profiles?->image))
                        <img src="{{ asset('storage/' . $Profiles->image) }}" 
                             alt="{{ $Profiles->title ?? 'Sahabat Remaja' }}" 
                             class="rounded-[2.2rem] w-full h-[380px] md:h-[450px] object-cover shadow-inner">
                    @else
                        <div class="rounded-[2.2rem] w-full h-[380px] md:h-[450px] bg-gradient-to-br from-[#2E7D32]/10 to-[#66BB6A]/10 flex items-center justify-center text-6xl">
                            🌿
                        </div>
                    @endif
                    
                    {{-- Floating Impact Widget --}}
                    @if(!empty($Profiles?->impact_total))
                        <div class="absolute bottom-6 right-6 bg-white/95 backdrop-blur-md px-6 py-4 rounded-2xl shadow-xl border border-gray-100 flex items-center gap-4 transform translate-y-2 group-hover:translate-y-0 transition duration-300" data-aos="zoom-in" data-aos-delay="300">
                            <div class="w-12 h-12 bg-[#2E7D32]/10 text-[#2E7D32] rounded-xl flex items-center justify-center text-xl font-bold">
                                📊
                            </div>
                            <div>
                                <h4 class="text-2xl font-black text-gray-950 leading-none mb-1">{{ $Profiles->impact_total }}</h4>
                                <p class="text-xs text-gray-500 font-bold uppercase tracking-wider">{{ $Profiles->impact_label ?? 'Penerima Manfaat' }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Sisi Kanan: Teks Deskripsi Penuh --}}
            <div class="lg:col-span-7 space-y-6" data-aos="fade-left" data-aos-delay="100">
                <h2 class="text-3xl md:text-4xl font-black text-gray-950 tracking-tight leading-tight">
                    {{ $Profiles->title ?? 'Membangun Generasi Tangguh & Berdampak' }}
                </h2>
                <div class="prose prose-gray max-w-none text-gray-600 text-base font-medium leading-relaxed space-y-4">
                    {!! nl2br(e($Profiles->description ?? 'Deskripsi organisasi belum diisi di panel admin.')) !!}
                </div>
            </div>

        </div>

        @if(!empty($Profiles?->vision) || !empty($Profiles?->mission))
            <div class="grid md:grid-cols-2 gap-8 pt-16 border-t border-gray-200/60">
                
                {{-- KARTU VISI --}}
                @if(!empty($Profiles?->vision))
                    <div class="bg-white p-8 md:p-10 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300" data-aos="fade-up">
                        <div class="w-14 h-14 bg-[#2E7D32]/10 text-[#2E7D32] text-2xl flex items-center justify-center rounded-2xl mb-6">
                            👁️‍🗨️
                        </div>
                        <h3 class="text-2xl font-black text-gray-950 tracking-tight mb-4">Visi Utama</h3>
                        <p class="text-gray-600 font-medium text-base leading-relaxed">
                            {!! nl2br(e($Profiles->vision)) !!}
                        </p>
                    </div>
                @endif

                {{-- KARTU MISI --}}
                @if(!empty($Profiles?->mission))
                    <div class="bg-white p-8 md:p-10 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-14 h-14 bg-[#FFB74D]/10 text-[#D48200] text-2xl flex items-center justify-center rounded-2xl mb-6">
                            🚀
                        </div>
                        <h3 class="text-2xl font-black text-gray-950 tracking-tight mb-4">Misi Gerakan</h3>
                        <div class="text-gray-600 font-medium text-base leading-relaxed space-y-2 prose prose-sm prose-gray">
                            {!! nl2br(e($Profiles->mission)) !!}
                        </div>
                    </div>
                @endif

            </div>
        @endif

    </div>
</section>
@endsection