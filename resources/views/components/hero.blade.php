<section class="relative w-full h-screen overflow-hidden" style="height: 543px;">
        <!-- Slider Container -->
        <div class="relative w-full h-full">
            <!-- Slide 1 - Beranda -->
            <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-100"
                style="background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')"
                data-active>
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white w-4/5 max-w-4xl px-4">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 drop-shadow-md">Catering Berkualitas untuk Acara
                        Spesial Anda</h1>
                    <p class="text-lg md:text-xl mb-8 leading-relaxed">Kami menyediakan berbagai pilihan menu lezat
                        dengan bahan-bahan segar dan pengolahan profesional.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="pesan.html"
                            class="inline-block px-8 py-3 bg-primary text-white font-bold rounded-full border-2 border-primary transition-all hover:bg-transparent hover:text-white hover:-translate-y-1 hover:shadow-lg">
                            Pesan Sekarang
                        </a>
                        <a href="menu.html"
                            class="inline-block px-8 py-3 bg-white text-dark font-bold rounded-full border-2 border-white transition-all hover:bg-transparent hover:text-white hover:-translate-y-1 hover:shadow-lg">
                            Lihat Menu
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 - Menu -->
            <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0"
                style="background-image: url('https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80')">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white w-4/5 max-w-4xl px-4">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 drop-shadow-md">Menu Variatif untuk Semua Selera</h1>
                    <p class="text-lg md:text-xl mb-8 leading-relaxed">Temukan berbagai pilihan menu kami yang dibuat
                        khusus untuk memenuhi kebutuhan acara Anda.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="menu.html"
                            class="inline-block px-8 py-3 bg-secondary text-white font-bold rounded-full border-2 border-secondary transition-all hover:bg-transparent hover:text-white hover:-translate-y-1 hover:shadow-lg">
                            Jelajahi Menu
                        </a>
                        <a href="paket.html"
                            class="inline-block px-8 py-3 bg-white text-dark font-bold rounded-full border-2 border-white transition-all hover:bg-transparent hover:text-white hover:-translate-y-1 hover:shadow-lg">
                            Lihat Paket
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 - Paket -->
            <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0"
                style="background-image: url('https://images.unsplash.com/photo-1555244162-803834f70033?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white w-4/5 max-w-4xl px-4">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 drop-shadow-md">Paket Hemat untuk Berbagai Acara</h1>
                    <p class="text-lg md:text-xl mb-8 leading-relaxed">Kami menawarkan paket catering lengkap dengan
                        harga kompetitif untuk pernikahan, seminar, dan acara lainnya.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="paket.html"
                            class="inline-block px-8 py-3 bg-primary text-white font-bold rounded-full border-2 border-primary transition-all hover:bg-transparent hover:text-white hover:-translate-y-1 hover:shadow-lg">
                            Lihat Paket
                        </a>
                        <a href="kontak.html"
                            class="inline-block px-8 py-3 bg-white text-dark font-bold rounded-full border-2 border-white transition-all hover:bg-transparent hover:text-white hover:-translate-y-1 hover:shadow-lg">
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <button
            class="slider-nav absolute top-1/2 left-4 md:left-8 transform -translate-y-1/2 bg-white bg-opacity-30 text-white text-2xl md:text-3xl w-10 h-10 md:w-14 md:h-14 rounded-full flex items-center justify-center z-10 transition-all hover:bg-opacity-50">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button
            class="slider-nav absolute top-1/2 right-4 md:right-8 transform -translate-y-1/2 bg-white bg-opacity-30 text-white text-2xl md:text-3xl w-10 h-10 md:w-14 md:h-14 rounded-full flex items-center justify-center z-10 transition-all hover:bg-opacity-50">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Pagination Dots -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex gap-2 z-10">
            <span
                class="dot w-3 h-3 md:w-4 md:h-4 rounded-full bg-white bg-opacity-50 cursor-pointer transition-all active:bg-white active:scale-125"></span>
            <span
                class="dot w-3 h-3 md:w-4 md:h-4 rounded-full bg-white bg-opacity-50 cursor-pointer transition-all"></span>
            <span
                class="dot w-3 h-3 md:w-4 md:h-4 rounded-full bg-white bg-opacity-50 cursor-pointer transition-all"></span>
        </div>
    </section>