@extends('layouts.app')

@section('content')
<div class="relative bg-[#1A2327] pt-40 pb-28 overflow-hidden z-10">
    <div class="absolute inset-0 bg-gradient-to-br from-[#2E7D32]/10 to-[#FFB74D]/5 -z-10"></div>
    <div class="absolute -top-20 -right-20 w-96 h-96 bg-[#2E7D32]/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="inline-flex items-center gap-2 text-[#FFB74D] bg-[#FFB74D]/10 px-4 py-2 rounded-full text-xs font-bold tracking-wider uppercase mb-4" data-aos="fade-down">
            🤝 Orang Hebat Di Balik Layar
        </div>
        <h1 class="text-4xl md:text-6xl font-black text-white tracking-tight leading-tight" data-aos="fade-up" data-aos-delay="100">
            Tim <span class="text-[#66BB6A]">Kami</span>
        </h1>
        <p class="mt-4 text-gray-300 text-base md:text-lg max-w-xl mx-auto font-medium" data-aos="fade-up" data-aos-delay="200">
            Penggerak, relawan, dan profesional yang berdedikasi penuh untuk mendampingi masa depan Sahabat Remaja.
        </p>
    </div>
</div>

<section class="py-24 bg-[#FAFAF7] relative z-20 -mt-1">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($teams as $index => $member)
                <div class="group bg-white rounded-[2.5rem] border border-gray-100 p-4 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-500 flex flex-col justify-between"
                     data-aos="fade-up"
                     data-aos-delay="{{ ($index % 3) * 100 }}">
                    
                    <div>
                        <div class="overflow-hidden rounded-[2rem] h-80 relative bg-gray-50 shadow-inner">
                            @if(!empty($member->photo))
                                <img 
                                    src="{{ \Illuminate\Support\Facades\Storage::url($member->photo) }}" 
                                    alt="{{ $member->name }}" 
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center text-6xl">
                                    👤
                                </div>
                            @endif

                            @if(!empty($member->division))
                                <div class="absolute bottom-4 left-4 bg-[#1A2327]/80 backdrop-blur-sm text-white text-[10px] font-black tracking-widest uppercase px-3 py-1.5 rounded-xl shadow-sm">
                                    📂 {{ $member->division }}
                                </div>
                            @endif
                        </div>

                        <div class="p-6 pt-5 space-y-2">
                            <div>
                                <h3 class="font-black text-2xl text-gray-950 tracking-tight group-hover:text-[#2E7D32] transition-colors duration-300">
                                    {{ $member->name }}
                                </h3>
                                <p class="text-sm font-bold text-[#2E7D32] tracking-wide uppercase mt-0.5">
                                    {{ $member->position }}
                                </p>
                            </div>

                            @if(!empty($member->bio))
                                <p class="text-gray-500 text-sm font-medium leading-relaxed line-clamp-3 pt-2 border-t border-gray-50">
                                    “{{ $member->bio }}”
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="px-6 pb-4">
                        <div class="pt-4 border-t border-gray-50 flex items-center justify-between text-[11px] text-gray-400 font-bold uppercase tracking-wider">
                            <span>Active Member</span>
                            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                        </div>
                    </div>

                </div>
            @empty
                <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center py-20 bg-white border border-dashed border-gray-200 rounded-[2.5rem] p-8" data-aos="fade-up">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-gray-50 flex items-center justify-center text-2xl mb-4">
                        👥
                    </div>
                    <h4 class="font-bold text-gray-900 mb-1">Struktur Tim Belum Tersedia</h4>
                    <p class="text-sm text-gray-500 max-w-sm mx-auto leading-relaxed">
                        Data pengurus dan relawan internal organisasi sedang dikonfigurasi oleh administrator.
                    </p>
                </div>
            @endforelse
        </div>

    </div>
</section>
@endsection