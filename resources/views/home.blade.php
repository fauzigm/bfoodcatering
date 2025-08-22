<x-layout>
    <!-- Hero Section -->
    <section
        class="flex max-w-full px-4 xl:px-6 lg:px-8 mx-6 my-24 md:my-16 lg:my-12 min-h-screen max-w-5xl bg-gradient-custom hero-bg items-center justify-center overflow-hidden">
        <!-- Background Overlay -->
        <div class="absolute inset-0 bg-overlay">
            <img src="{{ asset('images/hero.jpg') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <!-- Main Content -->
        <div class="container relative z-10 mx-auto px-4 sm:px-6 lg:px-8 py-0">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Left Content -->
                <div class="max-w-xl text-white space-y-6 lg:space-y-8 text-center lg:text-left">
                    <div class="space-y-4">
                        <h1
                            class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight animate-fade-in-up">
                            Simple Food
                            <span class="block text-white">Great Test</span>
                        </h1>
                        <p
                            class="text-base sm:text-lg md:text-xl text-gray-200 animate-fade-in-left max-w-lg mx-auto lg:mx-0">
                            Hidangan berkualitas premium dengan cita rasa autentik untuk acara spesial Anda.
                            Dari intimate dinner hingga grand celebration.
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div
                        class="flex flex-col sm:flex-row gap-3 sm:gap-4 animate-fade-in-right justify-center lg:justify-start">
                        <button
                            class="group bg-primary hover:bg-primary text-gray-900 font-semibold px-6 sm:px-8 py-3 sm:py-4 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-sm sm:text-base">
                            <span class="flex items-center text-white justify-center gap-2">
                                <i class="fas fa-utensils text-white text-sm sm:text-base"></i>
                                Lihat Menu Kami
                                <i
                                    class="fas fa-arrow-right group-hover:translate-x-1 transition-transform text-sm sm:text-base"></i>
                            </span>
                        </button>
                        <button
                            class="group border-2 border-white text-white hover:bg-white hover:text-gray-900 font-semibold px-6 sm:px-8 py-3 sm:py-4 rounded-full transition-all duration-300 transform hover:scale-105 text-sm sm:text-base">
                            <span class="flex items-center justify-center gap-2">
                                <i class="fas fa-phone text-sm sm:text-base"></i>
                                Konsultasi Gratis
                            </span>
                        </button>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-4 sm:gap-6 pt-6 lg:pt-8 animate-fade-in-up"
                        style="animation-delay: 0.6s;">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-primary">500+</div>
                            <div class="text-xs sm:text-sm text-gray-300">Acara Sukses</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-primary">50+</div>
                            <div class="text-xs sm:text-sm text-gray-300">Menu Pilihan</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-primary">5★</div>
                            <div class="text-xs sm:text-sm text-gray-300">Rating Client</div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Image -->
                <div class="relative animate-fade-in-right order-first lg:order-last flex justify-center">
                    <div class="relative z-10 animate-pulse-slow max-w-sm lg:max-w-none">
                        <img src="{{ asset('images/hero_elemen.png') }}" alt="" class="w-full h-full">
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-6 left-1/2 transform translate-x-1/2 animate-bounce">
            <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>
    </section>

    <!-- 3D Card Sldier -->
    <section id="tranding"
        class="flex max-w-full px-4 sm:px-6 lg:px-8 mx-6 my-24 md:my-16 lg:my-12 items-center min-h-screen px-16">

        <div class="container max-w-xl">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img w-full h-full">
                            <img src="images/paperbowl.png" alt="Tranding">
                        </div>
                        <div class="rounded-lg">
                            <div
                                class="absolute inset-0 bg-gradient-to-b from-transparent via-gray/10 to-gray/10 dark:via-gray-900/10 dark:to-gray-900/20 backdrop-blur-none">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-gray/5 dark:to-gray-900/5"
                                style="backdrop-filter: blur(120px); mask:linear-gradient(to bottom, transparent 50%, black 100%)">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-white/1 dark:to-gray-900/1"
                                style="backdrop-filter: blur(150px); mask: linear-gradient(to bottom, transparent 60%, black 100%)">
                            </div>
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price"></h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="text-3xl px-2 text-white font-bold">
                                    Rice Bowl
                                </h2>
                                <h3 class="food-rating">
                                    <button
                                        class="group bg-primary hover:bg-primary text-gray-900 font-semibold px-4 sm:px-6 py-2 sm:py-2 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-sm sm:text-base">
                                        <span class="flex items-center text-white justify-center gap-2">
                                            <i class="fas fa-utensils text-white text-sm sm:text-base"></i>
                                            Lihat Menu
                                            <i
                                                class="fas fa-arrow-right group-hover:translate-x-1 transition-transform text-sm sm:text-base"></i>
                                        </span>
                                    </button>
                                    <!-- <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div> -->
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img w-full h-full">
                            <img src="images/ricebox.png" alt="Tranding">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-gray/10 to-gray/10 dark:via-gray-900/10 dark:to-gray-900/20 backdrop-blur-none">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-gray/5 dark:to-gray-900/5"
                            style="backdrop-filter: blur(80px); mask:linear-gradient(to bottom, transparent 50%, black 100%)">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-white/1 dark:to-gray-900/1"
                            style="backdrop-filter: blur(100px); mask: linear-gradient(to bottom, transparent 60%, black 100%)">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price"></h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="text-3xl px-2 text-white font-bold">
                                    Nasi Kotak
                                </h2>
                                <h3 class="food-rating">
                                    <button
                                        class="group bg-primary hover:bg-primary text-gray-900 font-semibold px-4 sm:px-6 py-2 sm:py-2 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-sm sm:text-base">
                                        <span class="flex items-center text-white justify-center gap-2">
                                            <i class="fas fa-utensils text-white text-sm sm:text-base"></i>
                                            Lihat Menu
                                            <i
                                                class="fas fa-arrow-right group-hover:translate-x-1 transition-transform text-sm sm:text-base"></i>
                                        </span>
                                    </button>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img w-full h-full">
                            <img src="images/buffet.png" alt="Tranding">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-gray/10 to-gray/10 dark:via-gray-900/10 dark:to-gray-900/20 backdrop-blur-none">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-gray/5 dark:to-gray-900/5"
                            style="backdrop-filter: blur(80px); mask:linear-gradient(to bottom, transparent 50%, black 100%)">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-white/1 dark:to-gray-900/1"
                            style="backdrop-filter: blur(100px); mask: linear-gradient(to bottom, transparent 60%, black 100%)">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price"></h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="text-3xl px-2 text-white font-bold">
                                    Buffet/Prasmanan
                                </h2>
                                <h3 class="food-rating">
                                    <button
                                        class="group bg-primary hover:bg-primary text-gray-900 font-semibold px-4 sm:px-6 py-2 sm:py-2 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-sm sm:text-base">
                                        <span class="flex items-center text-white justify-center gap-2">
                                            <i class="fas fa-utensils text-white text-sm sm:text-base"></i>
                                            Lihat Menu
                                            <i
                                                class="fas fa-arrow-right group-hover:translate-x-1 transition-transform text-sm sm:text-base"></i>
                                        </span>
                                    </button>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img w-full h-full">
                            <img src="images/wedding.png" alt="Tranding">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-gray/10 to-gray/10 dark:via-gray-900/10 dark:to-gray-900/20 backdrop-blur-none">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-gray/5 dark:to-gray-900/5"
                            style="backdrop-filter: blur(80px); mask:linear-gradient(to bottom, transparent 50%, black 100%)">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-white/1 dark:to-gray-900/1"
                            style="backdrop-filter: blur(100px); mask: linear-gradient(to bottom, transparent 60%, black 100%)">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price"></h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="text-3xl px-2 text-white font-bold">
                                    Wedding Package
                                </h2>
                                <h3 class="food-rating">
                                    <button
                                        class="group bg-primary hover:bg-primary text-gray-900 font-semibold px-4 sm:px-6 py-2 sm:py-2 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-sm sm:text-base">
                                        <span class="flex items-center text-white justify-center gap-2">
                                            <i class="fas fa-utensils text-white text-sm sm:text-base"></i>
                                            Lihat Menu
                                            <i
                                                class="fas fa-arrow-right group-hover:translate-x-1 transition-transform text-sm sm:text-base"></i>
                                        </span>
                                    </button>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                </div>

                <div class="tranding-slider-control">
                    <div class="swiper-button-prev slider-arrow text-sm">
                        <ion-icon name="arrow-back-outline" class="text-sm"></ion-icon>
                    </div>
                    <div class="swiper-button-next slider-arrow text-sm">
                        <ion-icon name="arrow-forward-outline" class=""></ion-icon>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
        <!-- Tagline Section -->
        <div class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8 text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                Ciptakan Momen Tak Terlupakan Untuk Acara Anda
            </h2>
            <p class="w-full h-full text-sm text-center text-black text-base font-light break-words">
                Selamat datang di BFood Catering! Kami hadir untuk menjadikan setiap acara Anda di Malang dan Batu lebih
                istimewa. Dengan pengalaman lebih dari 5 tahun, kami ahli dalam menyajikan hidangan lezat dan tak
                terlupakan untuk berbagai kebutuhan, mulai dari prasmanan wisatawan hingga pernikahan impian dan pesta
                pribadi Anda.
            </p>
            <p class="text-gray-600 mt-2 text-xl">
                Layanan terbaik untuk acara Anda!
            </p>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="py-16 bg-gray-50">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">Delicious Menu</h2>
            <!-- <div class="flex justify-center space-x-8 mb-12">
                    <button class="text-primary font-semibold border-b-2 border-primary">Main Dish</button>
                    <button class="text-gray-600 hover:text-primary">Appetizer</button>
                    <button class="text-gray-600 hover:text-primary">Dessert</button>
                    <button class="text-gray-600 hover:text-primary">Drinks</button>
                </div> -->

            <div class="grid md:grid-cols-2 gap-6 max-w-7xl mx-auto">
                <!-- Menu Items Left Column -->
                <div class="space-y-6">
                    <!-- Menu Item 1 -->
                    <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
                        <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🍖</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Kakap Asam Manis</h4>
                            <p class="text-gray-600 text-sm">Nasi Goreng, Kakap Asam Manis, Mix Vegetables, Kentang
                                Soes String</p>
                        </div>
                        <span class="text-primary font-bold">Rp 17.5k</span>
                    </div>

                    <!-- Menu Item 2 -->
                    <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
                        <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🐟</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Kari Ayam</h4>
                            <p class="text-gray-600 text-sm">Nasi Putih, Kare Ayam, Telur Rebus, Tempe Goreng,
                                Kerupuk, Sambal</p>
                        </div>
                        <span class="text-primary font-bold">Rp 20k</span>
                    </div>

                    <!-- Menu Item 3 -->
                    <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
                        <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🥘</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Rawon Daging</h4>
                            <p class="text-gray-600 text-sm">Nasi Putih, Rawon Daging Labu Siyam, Tempe Goreng,
                                Telur Asin, Sambal, Kerupuk</p>
                        </div>
                        <span class="text-primary font-bold">Rp 25k</span>
                    </div>
                </div>

                <!-- Menu Items Right Column -->
                <div class="space-y-6">
                    <!-- Menu Item 4 -->
                    <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
                        <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🍲</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Ayam Balado+Rolade</h4>
                            <p class="text-gray-600 text-sm">Nasi Putih, Ayam Balado, Tempe Bacem, Rolade, Timun,
                                Sayur, Sambal, Kerupuk</p>
                        </div>
                        <span class="text-primary font-bold">Rp 30k</span>
                    </div>

                    <!-- Menu Item 5 -->
                    <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
                        <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🍜</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Ayam Rica-rica</h4>
                            <p class="text-gray-600 text-sm">Nasi Putih, Ayam Goreng, Mie Goreng Jawa, Sambal,
                                Kerupuk, Sambal Goreng, Kentang</p>
                        </div>
                        <span class="text-primary font-bold">Rp 35k</span>
                    </div>

                    <!-- Menu Item 6 -->
                    <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
                        <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🍛</span>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Sate Komoh</h4>
                            <p class="text-gray-600 text-sm">Nasi Putih, Sate Komoh, Mie Goreng Jawa, Sambal Goreng,
                                Kentang, Ati Ampela, Acar Kuning, Kerupuk</p>
                        </div>
                        <span class="text-primary font-bold">Rp 40k</span>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button class="bg-primary text-white px-8 py-3 rounded-lg hover:bg-red-700 transition font-semibold">
                    Lihat Semua Menu
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll(
                ".absolute.inset-0.bg-cover.bg-center"
            );
            const dots = document.querySelectorAll(".dot");
            const navButtons = document.querySelectorAll(".slider-nav");
            let currentIndex = 0;
            let autoSlideInterval;

            function showSlide(index) {
                // Hapus kelas dan atribut aktif dari slide dan dot sebelumnya
                slides.forEach((slide) => slide.classList.remove("opacity-100"));
                slides.forEach((slide) => slide.classList.add("opacity-0"));
                slides.forEach((slide) => slide.removeAttribute("data-active"));
                dots.forEach((dot) => dot.classList.remove("active"));

                // Tampilkan slide yang dipilih dan tandai sebagai aktif
                slides[index].classList.remove("opacity-0");
                slides[index].classList.add("opacity-100");
                slides[index].setAttribute("data-active", "");
                dots[index].classList.add("active");

                // Update currentIndex
                currentIndex = index;
            }

            function nextSlide() {
                let newIndex = (currentIndex + 1) % slides.length;
                showSlide(newIndex);
            }

            function prevSlide() {
                let newIndex = (currentIndex - 1 + slides.length) % slides.length;
                showSlide(newIndex);
            }

            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, 5000); // Ganti slide setiap 5 detik
            }

            function stopAutoSlide() {
                clearInterval(autoSlideInterval);
            }

            // Event listener untuk tombol navigasi
            navButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    stopAutoSlide();
                    if (button.classList.contains("fa-chevron-right")) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                    startAutoSlide(); // Mulai lagi setelah interaksi manual
                });
            });

            // Event listener untuk dot navigasi
            dots.forEach((dot, index) => {
                dot.addEventListener("click", () => {
                    stopAutoSlide();
                    showSlide(index);
                    startAutoSlide(); // Mulai lagi setelah interaksi manual
                });
            });

            // Hentikan autoslide saat mouse diarahkan ke carousel
            const sliderSection = document.querySelector("section");
            sliderSection.addEventListener("mouseenter", stopAutoSlide);
            sliderSection.addEventListener("mouseleave", startAutoSlide);

            // Inisialisasi: Tampilkan slide pertama
            showSlide(0);
            startAutoSlide();
        });

    </script>
</x-layout>