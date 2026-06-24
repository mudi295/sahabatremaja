<section id="contact" class="py-24 bg-[#FAFAF7] relative overflow-hidden">
    <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-[#2E7D32]/5 rounded-full blur-3xl -z-10"></div>
    
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 text-[#2E7D32] bg-[#2E7D32]/10 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                👋 Hubungi Jaringan Kami
            </div>
            <h2 class="text-3xl md:text-5xl font-black text-gray-950 tracking-tight">
                Mari Berkolaborasi <span class="text-[#2E7D32]">Ambil Peran</span>
            </h2>
            <p class="mt-4 text-gray-600 font-medium">
                Punya pertanyaan mengenai program kami, ingin menyalurkan bantuan, atau tertarik menjadi mitra gerakan kemanusiaan ini? Kami siap mendengar.
            </p>
        </div>

        @if(session('success'))
            <div class="max-w-5xl mx-auto mb-8 bg-emerald-50 border border-emerald-200 text-emerald-800 p-4 rounded-2xl flex items-center gap-3 shadow-sm animate-fade-in">
                <span class="text-xl">✨</span>
                <p class="font-medium text-sm">{{ session('success') }}</p>
            </div>
        @endif

        <div class="grid lg:grid-cols-12 gap-12 max-w-6xl mx-auto items-stretch">
            
            <div class="lg:col-span-5 bg-gradient-to-br from-[#263238] to-[#1a2327] text-white p-8 md:p-12 rounded-[2.5rem] flex flex-col justify-between shadow-xl" data-aos="fade-right">
                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Informasi Sekretariat</h3>
                        <p class="text-gray-400 text-sm">Pintu kami selalu terbuka untuk diskusi kemanusiaan.</p>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center text-lg flex-shrink-0">
                                📍
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-200 text-sm">Alamat Utama</h4>
                                <p class="text-gray-400 text-sm mt-1 leading-relaxed">Jl. Kemanusiaan No. 45, Kompleks Gerakan Muda, Jakarta Selatan</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center text-lg flex-shrink-0">
                                ✉️
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-200 text-sm">Surat Elektronik</h4>
                                <p class="text-gray-400 text-sm mt-1">halo@sahabatremaja.org</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center text-lg flex-shrink-0">
                                📞
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-200 text-sm">Hotline / WhatsApp</h4>
                                <p class="text-gray-400 text-sm mt-1">+62 812-3456-7890</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-8 border-t border-white/10 mt-8 lg:mt-0">
                    <p class="text-xs text-gray-400 leading-relaxed">Yayasan SahabatRemaja terdaftar resmi secara hukum sebagai organisasi sosial nirlaba penegak pilar kemanusiaan generasi muda.</p>
                </div>
            </div>

            <div class="lg:col-span-7 bg-white rounded-[2.5rem] p-8 md:p-12 border border-gray-100 shadow-xl" data-aos="fade-left">
                <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                    @csrf

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-800">Nama Lengkap</label>
                            <input 
                                type="text" 
                                name="name" 
                                required 
                                placeholder="Masukkan nama Anda"
                                class="w-full bg-[#FAFAF7] border border-gray-200 rounded-2xl p-4 text-sm font-medium focus:outline-none focus:border-[#2E7D32] focus:bg-white transition">
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-800">Alamat Email</label>
                            <input 
                                type="email" 
                                name="email" 
                                required 
                                placeholder="contoh@email.com"
                                class="w-full bg-[#FAFAF7] border border-gray-200 rounded-2xl p-4 text-sm font-medium focus:outline-none focus:border-[#2E7D32] focus:bg-white transition">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-800">Nomor Telepon / WhatsApp</label>
                        <input 
                            type="text" 
                            name="phone" 
                            placeholder="Contoh: 0812xxxxx"
                            class="w-full bg-[#FAFAF7] border border-gray-200 rounded-2xl p-4 text-sm font-medium focus:outline-none focus:border-[#2E7D32] focus:bg-white transition">
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-800">Isi Pesan Anda</label>
                        <textarea 
                            name="message" 
                            rows="5" 
                            required 
                            placeholder="Tuliskan niat baik, pertanyaan, atau rencana kolaborasi Anda di sini..."
                            class="w-full bg-[#FAFAF7] border border-gray-200 rounded-2xl p-4 text-sm font-medium focus:outline-none focus:border-[#2E7D32] focus:bg-white transition resize-none"></textarea>
                    </div>

                    <button 
                        type="submit" 
                        class="w-full sm:w-auto bg-[#2E7D32] hover:bg-[#FFB74D] hover:text-gray-950 text-white font-bold px-8 py-4 rounded-2xl shadow-lg shadow-[#2E7D32]/20 hover:shadow-[#FFB74D]/20 transition-all duration-300 transform active:scale-95">
                        Kirim Pesan Sekarang 🚀
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>