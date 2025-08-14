<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BFood Catering Batu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#db0000ff',
                        secondary: '#04518cff',
                        dark: '#1E293B',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
</head>

<body class="font-sans bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Logo -->
            <a href="index.html" class="flex items-center">
                <img src="images/logo bfood v.png" alt="Logo BFood Navbar" class="h-8 md:h-12">
            </a>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-dark focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="index.html" class="text-dark font-medium hover:text-primary transition">Beranda</a>
                <a href="menu.html" class="text-dark font-medium hover:text-primary transition">Menu</a>
                <a href="paket.html" class="text-dark font-medium hover:text-primary transition">Events</a>
                <a href="galeri.html" class="text-dark font-medium hover:text-primary transition">Galeri</a>
                <a href="kontak.html" class="text-dark font-medium hover:text-primary transition">Kontak</a>
            </div>

            <!-- CTA Button -->
            <a href="pesan.html"
                class="hidden md:block bg-primary text-white px-6 py-2 rounded-full font-medium hover:bg-opacity-90 transition shadow-lg hover:shadow-xl">
                Pesan Sekarang
            </a>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white px-4 pb-4">
            <a href="index.html" class="block py-2 text-dark hover:text-primary">Beranda</a>
            <a href="menu.html" class="block py-2 text-dark hover:text-primary">Menu</a>
            <a href="paket.html" class="block py-2 text-dark hover:text-primary">Events</a>
            <a href="galeri.html" class="block py-2 text-dark hover:text-primary">Galeri</a>
            <a href="kontak.html" class="block py-2 text-dark hover:text-primary">Kontak</a>
            <a href="pesan.html"
                class="block mt-2 bg-primary text-white px-4 py-2 rounded-full text-center font-medium">
                Pesan Sekarang
            </a>
        </div>
    </nav>

    <!-- Hero Slider -->
    <section class="relative w-full h-screen overflow-hidden">
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

    <!-- Main Content -->
    <main class="py-16">
        <!-- Tagline Section -->
        <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                Ciptakan Momen Tak Terlupakan di Malang dan Batu
            </h2>
            <p class="w-full h-full text-center text-black text-base font-light break-words">
                Selamat datang di BFood Catering! Kami hadir untuk menjadikan setiap acara Anda di Malang dan Batu lebih
                istimewa. Dengan pengalaman lebih dari 5 tahun, kami ahli dalam menyajikan hidangan lezat dan tak
                terlupakan untuk berbagai kebutuhan, mulai dari prasmanan wisatawan hingga pernikahan impian dan pesta
                pribadi Anda.
            </p>
            <p class="text-gray-600 mt-2">
                Layanan terbaik untuk acara Anda Mulai!
            </p>
        </section>

        <!-- Services Section -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">
                Kami Menawarkan<br>
                Semua Opsi
            </h2>

            <!-- Jenis Paket -->
            <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-auto sm:py-12">
                <div class="max-w-screen-md mx-auto">
                    <div class="grid grid-cols-3 gap-12">

                        <div class="group pb-24 relative overflow-hidden">
                            <div
                                class="group-hover:translate-y-0 transition-all duration-700 translate-y-full top-0 right-0 bottom-24 left-0 absolute bg-gradient-to-b from-transparent to-red-600 z-10">
                            </div>
                            <div class="h-60 w-auto">
                                <img src="images/ricebowlpaper.jpg"
                                    class="transition-all group-hover:scale-125 duration-700 mr-4 h-auto w-auto right-0"
                                    alt="">
                            </div>
                            <div
                                class="bg-red-600 absolute z-10 bottom-0 left-0 w-full h-24 flex flex-col justify-center items-center">
                                <div class="z-20 absolute -top-5 w-full flex justify-center">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="group-hover:bg-white group-hover:text-red-600 group-hover:rotate-180 w-10 h-10 bg-black text-white p-2 rounded-full transition-all">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                    </svg> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="group-hover:bg-white group-hover:text-red-600 group-hover:rotate-180 w-10 h-10 bg-black text-white p-2 rounded-full transition-all">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M128 352.576V352a288 288 0 01491.072-204.224 192 192 0 01274.24 204.48 64 64 0 0157.216 74.24C921.6 600.512 850.048 710.656 736 756.992V800a96 96 0 01-96 96H384a96 96 0 01-96-96v-43.008c-114.048-46.336-185.6-156.48-214.528-330.496A64 64 0 01128 352.64zm64-.576h64a160 160 0 01320 0h64a224 224 0 00-448 0zm128 0h192a96 96 0 00-192 0zm439.424 0h68.544A128.256 128.256 0 00704 192c-15.36 0-29.952 2.688-43.52 7.616 11.328 18.176 20.672 37.76 27.84 58.304A64.128 64.128 0 01759.424 352zM672 768H352v32a32 32 0 0032 32h256a32 32 0 0032-32v-32zm-342.528-64h365.056c101.504-32.64 165.76-124.928 192.896-288H136.576c27.136 163.072 91.392 255.36 192.896 288z" />
                                    </svg>
                                </div>
                                <!-- <div
                                class="group-hover:hidden transition-all duration-1000 w-4 absolute overflow-hidden inline-block right-0 -top-6">
                                <div class="h-6  bg-red-900 -rotate-45 transform origin-bottom-right"></div>
                            </div> -->
                                <h2 class="font-bold">Rice Bowl</h2>
                                <span class="text-white">Lihat Menu</span>
                            </div>
                        </div>

                        <div class="group pb-24 relative overflow-hidden">
                            <div
                                class="group-hover:translate-y-0 transition-all duration-700 translate-y-full top-0 right-0 bottom-24 left-0 absolute bg-gradient-to-b from-transparent to-red-600 z-10">
                            </div>
                            <div class="h-60 w-auto">
                                <img src="images/rice box.jpeg"
                                    class="transition-all group-hover:scale-125 duration-700 mr-4 h-auto w-auto right-0"
                                    alt="">
                            </div>
                            <div
                                class="bg-red-600 absolute z-10 bottom-0 left-0 w-full h-24 flex flex-col justify-center items-center">
                                <div class="z-20 absolute -top-5 w-full flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="group-hover:bg-white group-hover:text-red-600 group-hover:rotate-180 w-10 h-10 bg-black text-white p-2 rounded-full transition-all">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                    </svg>
                                </div>
                                <!-- <div
                                class="group-hover:hidden transition-all duration-1000 w-4 absolute overflow-hidden inline-block right-0 -top-6">
                                <div class="h-6  bg-red-900 -rotate-45 transform origin-bottom-right"></div>
                            </div> -->
                                <h2 class="font-bold">Nasi Kotak</h2>
                                <span class="text-white">Lihat Menu</span>
                            </div>
                        </div>

                        <div class="group pb-24 relative overflow-hidden">
                            <div
                                class="group-hover:translate-y-0 transition-all duration-700 translate-y-full top-0 right-0 bottom-24 left-0 absolute bg-gradient-to-b from-transparent to-red-600 z-10">
                            </div>
                            <div class="h-60 w-auto">
                                <img src="images/buffet.jpg"
                                    class="transition-all group-hover:scale-125 duration-700 mr-4 h-auto w-auto right-0"
                                    alt="">
                            </div>
                            <div
                                class="bg-red-600 absolute z-10 bottom-0 left-0 w-full h-24 flex flex-col justify-center items-center">
                                <div class="z-20 absolute -top-5 w-full flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="group-hover:bg-white group-hover:text-red-600 group-hover:rotate-180 w-10 h-10 bg-black text-white p-2 rounded-full transition-all">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                    </svg>
                                </div>
                                <!-- <div
                                class="group-hover:hidden transition-all duration-1000 w-4 absolute overflow-hidden inline-block right-0 -top-6">
                                <div class="h-6  bg-red-900 -rotate-45 transform origin-bottom-right"></div>
                            </div> -->
                                <h2 class="font-bold">Paket Buffet</h2>
                                <span class="text-white">Lihat Menu</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Catering Services Section -->
        <section class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Private Event -->
                <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                    <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                        <span class="text-gray-600">👥 Private Event Photo</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Private Event</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Nikmati pengalaman kuliner eksklusif untuk acara pribadi Anda.
                            Kami menyediakan layanan catering terbaik untuk berbagai
                            keperluan acara pribadi dengan menu yang dapat disesuaikan.
                        </p>
                    </div>
                </div>

                <!-- Wedding Catering -->
                <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                    <div class="lg:order-2">
                        <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-600">💒 Wedding Photo</span>
                        </div>
                    </div>
                    <div class="lg:order-1">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Wedding Catering</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Wujudkan pernikahan impian Anda dengan layanan catering
                            pernikahan terbaik. Menu lengkap dan pelayanan profesional
                            untuk hari bahagia Anda.
                        </p>
                        <button class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-red-700 transition">
                            Order
                        </button>
                    </div>
                </div>

                <!-- Catering Wisata -->
                <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                    <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                        <span class="text-gray-600">🏞️ Tourism Catering</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Catering Wisata</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Layanan catering khusus untuk perjalanan wisata dan tour.
                            Makanan praktis dan lezat yang cocok untuk perjalanan
                            Anda bersama keluarga atau rombongan.
                        </p>
                    </div>
                </div>

                <!-- Jumat Berkah -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="lg:order-2">
                        <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-600">🕌 Jumat Berkah</span>
                        </div>
                    </div>
                    <div class="lg:order-1">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Jumat Berkah</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Paket khusus untuk kegiatan Jumat Berkah di masjid atau
                            komunitas. Menu sederhana namun berkualitas untuk
                            berbagi keberkahan bersama.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Menu Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">Delicious Menu</h2>
                <div class="flex justify-center space-x-8 mb-12">
                    <button class="text-primary font-semibold border-b-2 border-primary">Main Dish</button>
                    <button class="text-gray-600 hover:text-primary">Appetizer</button>
                    <button class="text-gray-600 hover:text-primary">Dessert</button>
                    <button class="text-gray-600 hover:text-primary">Drinks</button>
                </div>

                <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <!-- Menu Items Left Column -->
                    <div class="space-y-6">
                        <!-- Menu Item 1 -->
                        <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
                            <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center">
                                <span class="text-2xl">🍖</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900">Ayam Geprek Sambal</h4>
                                <p class="text-gray-600 text-sm">Ayam crispy dengan sambal pedas</p>
                            </div>
                            <span class="text-primary font-bold">Rp 17.5K</span>
                        </div>

                        <!-- Menu Item 2 -->
                        <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
                            <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center">
                                <span class="text-2xl">🐟</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900">Ikan Gurami</h4>
                                <p class="text-gray-600 text-sm">Gurami goreng bumbu kuning</p>
                            </div>
                            <span class="text-primary font-bold">Rp 25K</span>
                        </div>

                        <!-- Menu Item 3 -->
                        <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
                            <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center">
                                <span class="text-2xl">🥘</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900">Rendang Daging</h4>
                                <p class="text-gray-600 text-sm">Rendang daging sapi authentic</p>
                            </div>
                            <span class="text-primary font-bold">Rp 30K</span>
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
                                <h4 class="font-semibold text-gray-900">Soto Ayam Lamongan</h4>
                                <p class="text-gray-600 text-sm">Soto ayam dengan kuah kuning</p>
                            </div>
                            <span class="text-primary font-bold">Rp 15K</span>
                        </div>

                        <!-- Menu Item 5 -->
                        <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
                            <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center">
                                <span class="text-2xl">🍜</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900">Bakso Beef Mix</h4>
                                <p class="text-gray-600 text-sm">Bakso daging sapi dengan mi</p>
                            </div>
                            <span class="text-primary font-bold">Rp 18K</span>
                        </div>

                        <!-- Menu Item 6 -->
                        <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-sm">
                            <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center">
                                <span class="text-2xl">🍛</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900">Nasi Gudeg Yogya</h4>
                                <p class="text-gray-600 text-sm">Gudeg khas dengan opor ayam</p>
                            </div>
                            <span class="text-primary font-bold">Rp 20K</span>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <button
                        class="bg-primary text-white px-8 py-3 rounded-lg hover:bg-red-700 transition font-semibold">
                        View Full Menu
                    </button>
                </div>
            </div>
        </section>

        <!-- Testimonial Section -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <blockquote class="text-xl text-gray-700 leading-relaxed mb-8">
                    "I wanted to thank you for inviting me down<br>
                    for that amazing dinner the other night.<br>
                    The food was extraordinary."
                </blockquote>

                <div class="flex justify-center space-x-4">
                    <div class="w-12 h-12 bg-gray-300 rounded-full"></div>
                    <div class="w-12 h-12 bg-gray-300 rounded-full"></div>
                    <div class="w-12 h-12 bg-gray-300 rounded-full"></div>
                </div>
                <p class="text-gray-600 mt-4">Our Client</p>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mobile Menu Toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
            });

            // Slider Functionality
            const slides = document.querySelectorAll('[style*="background-image"]');
            const dots = document.querySelectorAll('.dot');
            const prevBtn = document.querySelector('.fa-chevron-left').parentElement;
            const nextBtn = document.querySelector('.fa-chevron-right').parentElement;

            let currentSlide = 0;
            const slideCount = slides.length;

            // Initialize slider
            function initSlider() {
                slides[currentSlide].classList.add('opacity-100');
                slides[currentSlide].setAttribute('data-active', '');
                dots[currentSlide].classList.add('bg-white', 'scale-125');
            }

            // Go to specific slide
            function goToSlide(n) {
                slides[currentSlide].classList.remove('opacity-100');
                slides[currentSlide].removeAttribute('data-active');
                dots[currentSlide].classList.remove('bg-white', 'scale-125');

                currentSlide = (n + slideCount) % slideCount;

                slides[currentSlide].classList.add('opacity-100');
                slides[currentSlide].setAttribute('data-active', '');
                dots[currentSlide].classList.add('bg-white', 'scale-125');
            }

            // Next slide
            function nextSlide() {
                goToSlide(currentSlide + 1);
            }

            // Previous slide
            function prevSlide() {
                goToSlide(currentSlide - 1);
            }

            // Auto slide
            let slideInterval = setInterval(nextSlide, 6000);

            // Pause on hover
            const slider = document.querySelector('section');
            slider.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            });

            slider.addEventListener('mouseleave', () => {
                slideInterval = setInterval(nextSlide, 6000);
            });

            // Event listeners
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    goToSlide(index);
                });
            });

            // Initialize
            initSlider();
        });
    </script>
</body>

</html>