@extends('layouts.app')

@section('content')
<div class="relative bg-[#1A2327] pt-40 pb-28 overflow-hidden z-10">
    <div class="absolute inset-0 bg-gradient-to-br from-[#2E7D32]/10 to-[#FFB74D]/5 -z-10"></div>
    <div class="absolute -bottom-20 -left-20 w-96 h-96 bg-[#2E7D32]/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="inline-flex items-center gap-2 text-[#FFB74D] bg-[#FFB74D]/10 px-4 py-2 rounded-full text-xs font-bold tracking-wider uppercase mb-4" data-aos="fade-down">
            📸 Dokumentasi Kegiatan
        </div>
        <h1 class="text-4xl md:text-6xl font-black text-white tracking-tight leading-tight" data-aos="fade-up" data-aos-delay="100">
            Galeri <span class="text-[#66BB6A]">Foto</span>
        </h1>
        <p class="mt-4 text-gray-300 text-base md:text-lg max-w-xl mx-auto font-medium" data-aos="fade-up" data-aos-delay="200">
            Kumpulan momen berharga, aksi sosial kemanusiaan, dan keceriaan gerakan Sahabat Remaja.
        </p>
    </div>
</div>

<section class="py-24 bg-[#FAFAF7] relative z-20 -mt-1">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($galleries as $index => $item)
                <div class="group bg-white rounded-[2.5rem] border border-gray-100/70 p-3 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-500 flex flex-col"
                     data-aos="fade-up"
                     data-aos-delay="{{ ($index % 3) * 100 }}">
                    
                    <div class="overflow-hidden rounded-[2rem] h-64 relative bg-gray-50 group shadow-inner">
                        <img 
                            src="{{ \Illuminate\Support\Facades\Storage::url($item->image) }}" 
                            alt="{{ $item->title }}" 
                            class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                        
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                    </div>

                    <div class="p-6 flex-grow flex flex-col justify-between">
                        <div class="space-y-2">
                            <h3 class="font-bold text-xl text-gray-950 tracking-tight group-hover:text-[#2E7D32] transition-colors duration-300 line-clamp-1">
                                {{ $item->title }}
                            </h3>
                            
                            @if(!empty($item->description))
                                <p class="text-gray-500 text-sm font-medium leading-relaxed line-clamp-2">
                                    {{ $item->description }}
                                </p>
                            @else
                                <p class="text-gray-400 text-xs italic font-medium">
                                    Tidak ada deskripsi tambahan untuk dokumentasi ini.
                                </p>
                            @endif
                        </div>

                        <div class="pt-5 mt-5 border-t border-gray-50 flex items-center justify-between text-[11px] text-gray-400 font-bold uppercase tracking-wider">
                            <span>📅 {{ $item->created_at ? $item->created_at->isoFormat('D MMMM Y') : 'Baru saja' }}</span>
                            <span class="text-[#2E7D32] bg-[#2E7D32]/5 px-2 py-1 rounded-md">Verified 🛡️</span>
                        </div>
                    </div>

                </div>
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-20 bg-white border border-dashed border-gray-200 rounded-[2.5rem] p-8" data-aos="fade-up">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-gray-50 flex items-center justify-center text-2xl mb-4">
                        🖼️
                    </div>
                    <h4 class="font-bold text-gray-900 mb-1">Galeri Foto Masih Kosong</h4>
                    <p class="text-sm text-gray-500 max-w-sm mx-auto leading-relaxed">
                        Belum ada dokumentasi foto kegiatan yang diunggah oleh admin untuk saat ini.
                    </p>
                </div>
            @endforelse
        </div>

        @if($galleries->hasPages())
            <div class="mt-20 flex justify-center" data-aos="fade-up">
                <div class="bg-white border border-gray-100 rounded-2xl shadow-sm px-4 py-2">
                    {{ $galleries->links() }}
                </div>
            </div>
        @endif

    </div>
</section>
@endsection