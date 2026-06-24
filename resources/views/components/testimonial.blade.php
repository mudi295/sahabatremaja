<section id="testimonial" class="py-24 bg-white relative overflow-hidden">
    <div class="absolute top-1/3 left-0 w-96 h-96 bg-[#2E7D32]/5 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-6">
        
        <div class="text-center max-w-2xl mx-auto mb-20" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 text-[#D48200] bg-[#FFB74D]/10 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                ✨ Cerita Dampak Nyata
            </div>
            <h2 class="text-3xl md:text-5xl font-black text-gray-950 tracking-tight">
                Apa Kata <span class="text-[#2E7D32]">Sahabat Kita?</span>
            </h2>
            <p class="mt-4 text-gray-600 font-medium">
                Dengarkan langsung kisah perubahan, kesan tulus, dan pengalaman berharga dari para relawan serta remaja penerima manfaat.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($testimonials as $index => $testimonial)
                <div class="bg-[#FAFAF7] p-8 md:p-10 rounded-[2.5rem] border border-gray-100/70 hover:shadow-xl hover:-translate-y-2 transition-all duration-500 flex flex-col justify-between"
                     data-aos="fade-up"
                     data-aos-delay="{{ ($index % 3) * 100 }}">
                    
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-[#2E7D32]/10 text-[#2E7D32] flex items-center justify-center text-3xl font-serif mb-6 shadow-sm select-none">
                            “
                        </div>
                        
                        <p class="text-gray-700 text-sm md:text-base italic leading-relaxed font-medium mb-8">
                            "{{ $testimonial->message }}"
                        </p>
                    </div>
                    
                    <div class="flex items-center gap-4 pt-6 border-t border-gray-200/60">
                        @if(!empty($testimonial->avatar))
                            <img 
                                src="{{ asset('storage/' . $testimonial->avatar) }}" 
                                alt="{{ $testimonial->name }}" 
                                class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-md"
                            >
                        @else
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-[#2E7D32] to-[#66BB6A] text-white flex items-center justify-center font-bold text-sm shadow-md">
                                {{ strtoupper(substr($testimonial->name, 0, 2)) }}
                            </div>
                        @endif
                        
                        <div>
                            <h4 class="font-bold text-gray-950 text-base leading-tight">{{ $testimonial->name }}</h4>
                            <span class="text-xs text-[#2E7D32] font-extrabold uppercase tracking-widest mt-0.5 inline-block">Penerima Manfaat</span>
                        </div>
                    </div>

                </div>
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-20 bg-[#FAFAF7] border border-dashed border-gray-200 rounded-[2.5rem] p-8" data-aos="fade-up">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-gray-100 flex items-center justify-center text-2xl mb-4">
                        💬
                    </div>
                    <h4 class="font-bold text-gray-900 mb-1">Belum Ada Testimoni</h4>
                    <p class="text-sm text-gray-500 max-w-sm mx-auto leading-relaxed">
                        Cerita dan pengalaman berkesan dari jejaring gerakan kami akan segera ditampilkan di halaman ini.
                    </p>
                </div>
            @endforelse
        </div>

    </div>
</section>