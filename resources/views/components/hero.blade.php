@php
    use Illuminate\Support\Facades\Storage;
@endphp

<section id="hero" class="min-h-[90vh] flex items-center bg-[#FAFAF7] relative overflow-hidden pt-16">

    <!-- Elemen Dekorasi -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[1000px] bg-gradient-to-b from-[#2E7D32]/5 to-transparent rounded-full blur-3xl -z-10"></div>

    <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#FFB74D]/10 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-6 w-full py-12">

        <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">

            <!-- KIRI -->
            <div class="lg:col-span-7 space-y-6 text-left" data-aos="fade-right">
                
                <!-- Hero Title -->
                <h1 class="text-5xl md:text-6xl xl:text-7xl font-black leading-[1.05] text-gray-900">

                    {{ $setting?->hero_title ?? 'Bersama Membangun Generasi Muda yang Berdampak' }}

                </h1>

                <!-- Hero Subtitle -->
                <p class="text-lg md:text-xl text-gray-600 leading-relaxed max-w-2xl">

                    {{ $setting?->hero_subtitle ?? 'Mengembangkan potensi remaja melalui pendidikan, kepemimpinan, dan aksi sosial.' }}

                </p>

                <!-- CTA -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">

                    <a href="#about"
                        class="inline-flex items-center justify-center gap-2 bg-[#2E7D32] hover:bg-[#1B5E20] text-white font-bold px-8 py-4 rounded-2xl shadow-xl shadow-[#2E7D32]/20 transition duration-300 transform active:scale-95 text-center">

                        Kenali Gerakan Kami 🔍

                    </a>

                    <a href="#contact"
                        class="inline-flex items-center justify-center gap-2 bg-white border border-gray-200 hover:border-gray-300 text-gray-800 font-bold px-8 py-4 rounded-2xl shadow-sm hover:shadow transition duration-300 transform active:scale-95 text-center">

                        Hubungi Kami 🤝

                    </a>

                </div>

            </div>

            <!-- KANAN -->
            <div class="lg:col-span-5 relative"
                data-aos="fade-left"
                data-aos-delay="200">

                <!-- Ornamen -->
                <div class="absolute -bottom-6 -right-6 w-full h-full border-4 border-dashed border-[#2E7D32]/20 rounded-[3rem] -z-10 rotate-3"></div>

                <!-- Frame Foto -->
                <div class="p-3 bg-white border border-gray-100 rounded-[3rem] shadow-2xl transform -rotate-2 hover:rotate-0 transition duration-500 ease-out">

                    <img
                        src="{{ !empty($setting?->hero_image)
                            ? Storage::url($setting->hero_image)
                            : 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac' }}"
                        alt="Hero Image"
                        class="rounded-[2.5rem] w-full h-[300px] sm:h-[450px] object-cover shadow-inner">

                </div>

                <!-- Floating Badge -->
                <div class="absolute -bottom-4 -left-4 md:-left-8 bg-white border border-gray-100 p-4 rounded-2xl shadow-xl flex items-center gap-3 animate-bounce"
                    style="animation-duration: 4s;">

                    <div class="w-10 h-10 rounded-xl bg-[#FFB74D]/20 text-[#D48200] flex items-center justify-center text-lg">
                        🌱
                    </div>

                    <div>

                        <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">
                            Misi Sosial
                        </p>

                        <p class="text-sm font-extrabold text-gray-950">
                            100% Nirlaba & Tulus
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>