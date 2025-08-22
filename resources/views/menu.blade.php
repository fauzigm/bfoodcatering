<x-layout>
    <section class="relative w-full overflow-hidden" style="height: 500px;">
        <div class="w-full h-full">
            <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-100"
                style="background-image: url()" data-active>
                <img src="images/menu-banner.jpg" alt="" class="w-full h-full object-cover">
                <div class="absolute inset-0"></div>
            </div>

            <div class="absolute inset-0 flex items-center justify-between z-10">
                <button
                    class="slider-nav bg-white bg-opacity-30 text-white text-2xl md:text-3xl w-10 h-10 md:w-14 md:h-14 rounded-full flex items-center justify-center transition-all hover:bg-opacity-50 ml-4 md:ml-8">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button
                    class="slider-nav bg-white bg-opacity-30 text-white text-2xl md:text-3xl w-10 h-10 md:w-14 md:h-14 rounded-full flex items-center justify-center transition-all hover:bg-opacity-50 mr-4 md:mr-8">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex gap-2 z-10">
                <span
                    class="dot w-3 h-3 md:w-4 md:h-4 rounded-full bg-white bg-opacity-50 cursor-pointer transition-all active:bg-white active:scale-125"></span>
                <span
                    class="dot w-3 h-3 md:w-4 md:h-4 rounded-full bg-white bg-opacity-50 cursor-pointer transition-all"></span>
                <span
                    class="dot w-3 h-3 md:w-4 md:h-4 rounded-full bg-white bg-opacity-50 cursor-pointer transition-all"></span>
            </div>
        </div>
    </section>

    <body class="w-full bg-gray-100">
        <div class="bg-white shadow-sm top-0 z-20">
            <div class="flex items-center justify-between w-full mx-auto px-4 py-4">
                <div id="filter-tabs" class="flex space-x-6">
                    <button data-filter="All"
                        class="filter-btn whitespace-nowrap px-4 py-2 text-primary border-b-2 border-primary font-semibold">Semua</button>
                    <button data-filter="Rice Bowl"
                        class="filter-btn whitespace-nowrap px-4 py-2 text-gray-600 hover:text-primary border-b-2 border-transparent hover:border-primary">Rice
                        Bowl</button>
                    <button data-filter="Rice Box"
                        class="filter-btn whitespace-nowrap px-4 py-2 text-gray-600 hover:text-primary border-b-2 border-transparent hover:border-primary">Rice
                        Box</button>
                    <button data-filter="Prasmanan"
                        class="filter-btn whitespace-nowrap px-4 py-2 text-gray-600 hover:text-primary border-b-2 border-transparent hover:border-primary">Prasmanan</button>
                </div>
                <div class="flex items-center space-x-4">
                    <span id="header-total-price" class="hidden md:inline-block">Total: Rp 0</span>
                    <button class="bg-green-500 text-white font-bold py-2 px-4 rounded-lg relative"
                        onclick="openOrderModal()">
                        🛒 Keranjang
                        <span id="header-cart-count"
                            class="absolute top-[-8px] right-[-8px] bg-red-500 text-white rounded-full h-5 w-5 text-xs flex items-center justify-center">0</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="max-w-screen mx-24 px-4 py-8">
            <section data-category="Rice Bowl" class="menu-section mb-8">
                <div class="bg-primary text-white text-center py-3 rounded-lg mb-8">
                    <h2 class="text-2xl font-bold">RICE BOWL</h2>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-6">

                        <h3 class="text-lg font-semibold text-primary mb-4">PAKET SILVER</h3>
                        <!-- Pilihan Menu -->
                        <div class="space-y-4 menu-list">

                            <div class="flex justify-between items-start border-b pb-2 menu-item" data-id="menu-1"
                                data-price="12000">
                                <div>
                                    <h4 class="font-semibold">AYAM RICA-RICA</h4>
                                    <p class="text-sm text-gray-600">Nasi Putih, Ayam Rica-rica, Mentimun</p>
                                </div>
                                <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                    <span class="text-primary font-bold">Rp 12k</span>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                        <input type="number"
                                            class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                            value="0" min="0" data-id="menu-1">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between items-start border-b pb-2 menu-item" data-id="menu-2"
                                data-price="12000">
                                <div>
                                    <h4 class="font-semibold">AYAM KECAP</h4>
                                    <p class="text-sm text-gray-600">Nasi Putih, Ayam Kecap, Tahu Goreng, Sambal</p>
                                </div>
                                <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                    <span class="text-primary font-bold">Rp 12k</span>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                        <input type="number"
                                            class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                            value="0" min="0" data-id="menu-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between items-start border-b pb-2 menu-item" data-id="menu-2"
                                data-price="12000">
                                <div>
                                    <h4 class="font-semibold">NUGGET ASAM MANIS</h4>
                                    <p class="text-sm text-gray-600">Nasi Putih, Nugget Asam Manis, Kentang Goreng,
                                        Mix Vegetables

                                    </p>
                                </div>
                                <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                    <span class="text-primary font-bold">Rp 12k</span>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                        <input type="number"
                                            class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                            value="0" min="0" data-id="menu-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                    </div>
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold text-primary mb-4">PAKET PLATINUM</h3>

                            <div class="space-y-4">
                                <div class="flex justify-between items-start border-b pb-2">
                                    <div>
                                        <h4 class="font-semibold">ACUMI ASAM MANIS</h4>
                                        <p class="text-sm text-gray-600">Nasi Goreng, Cumi Asam Manis, Mix
                                            Vegetables,
                                            Kentang
                                            Soes String</p>
                                    </div>
                                    <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                        <span class="text-primary font-bold">Rp 17.5k</span>
                                        <div class="flex items-center space-x-2">
                                            <button
                                                class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                            <input type="number"
                                                class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                                value="0" min="0" data-id="menu-2">
                                            <button
                                                class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-between items-start border-b pb-2">
                                    <div>
                                        <h4 class="font-semibold">KAKAP ASAM MANIS</h4>
                                        <p class="text-sm text-gray-600">Nasi Goreng, Kakap Asam Manis, Mix
                                            Vegetables,
                                            Kentang
                                            Soes String</p>
                                    </div>
                                    <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                        <span class="text-primary font-bold">Rp 17.5k</span>
                                        <div class="flex items-center space-x-2">
                                            <button
                                                class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                            <input type="number"
                                                class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                                value="0" min="0" data-id="menu-2">
                                            <button
                                                class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-between items-start border-b pb-2">
                                    <div>
                                        <h4 class="font-semibold">NASI GORENG + FUYUNGHAI</h4>
                                        <p class="text-sm text-gray-600">Nasi Goreng, Fuyunghai, Mix Vegetables,
                                            Kentang
                                            Soes
                                            String</p>
                                    </div>
                                    <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                        <span class="text-primary font-bold">Rp 17.5k</span>
                                        <div class="flex items-center space-x-2">
                                            <button
                                                class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                            <input type="number"
                                                class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                                value="0" min="0" data-id="menu-2">
                                            <button
                                                class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="space-y-6">
                        <h3 class="text-lg font-semibold text-primary mb-4">PAKET GOLD</h3>
                        <div class="space-y-4 menu-list">
                            <div class="flex justify-between items-start border-b pb-2 menu-item" data-id="menu-3"
                                data-price="15000">
                                <div>
                                    <h4 class="font-semibold">AYAM GORENG</h4>
                                    <p class="text-sm text-gray-600">Nasi Putih, Ayam Goreng, Lalapan, Kerupuk</p>
                                </div>
                                <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                    <span class="text-primary font-bold">Rp 15k</span>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                        <input type="number"
                                            class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                            value="0" min="0" data-id="menu-3">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between items-start border-b pb-2 menu-item" data-id="menu-4"
                                data-price="15000">
                                <div>
                                    <h4 class="font-semibold">AYAM BALADO</h4>
                                    <p class="text-sm text-gray-600">Nasi Putih, Ayam Balado, Tempe/Tahu, Kerupuk
                                    </p>
                                </div>
                                <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                    <span class="text-primary font-bold">Rp 15k</span>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                        <input type="number"
                                            class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                            value="0" min="0" data-id="menu-4">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between items-start border-b pb-2 menu-item" data-id="menu-4"
                                data-price="15000">
                                <div>
                                    <h4 class="font-semibold">NASI GORENG</h4>
                                    <p class="text-sm text-gray-600">Nasi Goreng, Dadar Telur, Acar, Kerupuk
                                    </p>
                                </div>
                                <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                    <span class="text-primary font-bold">Rp 15k</span>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                        <input type="number"
                                            class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                            value="0" min="0" data-id="menu-4">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg mt-8">
                                <div class="flex items-center space-x-4 mb-4">
                                    <img src="rice bowl.png" alt="" class="w-80 h-80 rounded-lg object-cover">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- KONTEN RICE BOX -->
            <section data-category="Rice Box" class="menu-section mb-8 hidden">
                <div class="bg-primary text-white text-center py-3 rounded-lg mb-8">
                    <h2 class="text-2xl font-bold">RICE BOX</h2>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-6">

                        <h3 class="text-lg font-semibold text-primary mb-4">PAKET SILVER</h3>
                        <!-- Pilihan Menu -->
                        <div class="space-y-4 menu-list">

                            <div class="flex justify-between items-start border-b pb-2 menu-item" data-id="menu-1"
                                data-price="12000">
                                <div>
                                    <h4 class="font-semibold">AYAM RICA-RICA</h4>
                                    <p class="text-sm text-gray-600">Nasi Putih, Ayam Rica-rica, Mentimun</p>
                                </div>
                                <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                    <span class="text-primary font-bold">Rp 12k</span>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                        <input type="number"
                                            class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                            value="0" min="0" data-id="menu-1">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between items-start border-b pb-2 menu-item" data-id="menu-2"
                                data-price="12000">
                                <div>
                                    <h4 class="font-semibold">AYAM KECAP</h4>
                                    <p class="text-sm text-gray-600">Nasi Putih, Ayam Kecap, Tahu Goreng, Sambal</p>
                                </div>
                                <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                    <span class="text-primary font-bold">Rp 12k</span>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                        <input type="number"
                                            class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                            value="0" min="0" data-id="menu-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between items-start border-b pb-2 menu-item" data-id="menu-2"
                                data-price="12000">
                                <div>
                                    <h4 class="font-semibold">NUGGET ASAM MANIS</h4>
                                    <p class="text-sm text-gray-600">Nasi Putih, Nugget Asam Manis, Kentang Goreng,
                                        Mix Vegetables

                                    </p>
                                </div>
                                <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                    <span class="text-primary font-bold">Rp 12k</span>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                        <input type="number"
                                            class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                            value="0" min="0" data-id="menu-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                    </div>
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold text-primary mb-4">PAKET PLATINUM</h3>

                            <div class="space-y-4">
                                <div class="flex justify-between items-start border-b pb-2">
                                    <div>
                                        <h4 class="font-semibold">ACUMI ASAM MANIS</h4>
                                        <p class="text-sm text-gray-600">Nasi Goreng, Cumi Asam Manis, Mix
                                            Vegetables,
                                            Kentang
                                            Soes String</p>
                                    </div>
                                    <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                        <span class="text-primary font-bold">Rp 17.5k</span>
                                        <div class="flex items-center space-x-2">
                                            <button
                                                class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                            <input type="number"
                                                class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                                value="0" min="0" data-id="menu-2">
                                            <button
                                                class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-between items-start border-b pb-2">
                                    <div>
                                        <h4 class="font-semibold">KAKAP ASAM MANIS</h4>
                                        <p class="text-sm text-gray-600">Nasi Goreng, Kakap Asam Manis, Mix
                                            Vegetables,
                                            Kentang
                                            Soes String</p>
                                    </div>
                                    <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                        <span class="text-primary font-bold">Rp 17.5k</span>
                                        <div class="flex items-center space-x-2">
                                            <button
                                                class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                            <input type="number"
                                                class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                                value="0" min="0" data-id="menu-2">
                                            <button
                                                class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-between items-start border-b pb-2">
                                    <div>
                                        <h4 class="font-semibold">NASI GORENG + FUYUNGHAI</h4>
                                        <p class="text-sm text-gray-600">Nasi Goreng, Fuyunghai, Mix Vegetables,
                                            Kentang
                                            Soes
                                            String</p>
                                    </div>
                                    <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                        <span class="text-primary font-bold">Rp 17.5k</span>
                                        <div class="flex items-center space-x-2">
                                            <button
                                                class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                            <input type="number"
                                                class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                                value="0" min="0" data-id="menu-2">
                                            <button
                                                class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="space-y-6">
                        <h3 class="text-lg font-semibold text-primary mb-4">PAKET GOLD</h3>
                        <div class="space-y-4 menu-list">
                            <div class="flex justify-between items-start border-b pb-2 menu-item" data-id="menu-3"
                                data-price="15000">
                                <div>
                                    <h4 class="font-semibold">AYAM GORENG</h4>
                                    <p class="text-sm text-gray-600">Nasi Putih, Ayam Goreng, Lalapan, Kerupuk</p>
                                </div>
                                <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                    <span class="text-primary font-bold">Rp 15k</span>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                        <input type="number"
                                            class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                            value="0" min="0" data-id="menu-3">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between items-start border-b pb-2 menu-item" data-id="menu-4"
                                data-price="15000">
                                <div>
                                    <h4 class="font-semibold">AYAM BALADO</h4>
                                    <p class="text-sm text-gray-600">Nasi Putih, Ayam Balado, Tempe/Tahu, Kerupuk
                                    </p>
                                </div>
                                <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                    <span class="text-primary font-bold">Rp 15k</span>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                        <input type="number"
                                            class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                            value="0" min="0" data-id="menu-4">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between items-start border-b pb-2 menu-item" data-id="menu-4"
                                data-price="15000">
                                <div>
                                    <h4 class="font-semibold">NASI GORENG</h4>
                                    <p class="text-sm text-gray-600">Nasi Goreng, Dadar Telur, Acar, Kerupuk
                                    </p>
                                </div>
                                <div class="flex flex-col items-end flex-shrink-0 ml-2">
                                    <span class="text-primary font-bold">Rp 15k</span>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">-</button>
                                        <input type="number"
                                            class="qty-input w-12 text-center border border-gray-300 rounded-md py-1"
                                            value="0" min="0" data-id="menu-4">
                                        <button
                                            class="qty-btn bg-gray-200 w-6 h-6 rounded-full text-gray-600 text-center">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg mt-8">
                                <div class="flex items-center space-x-4 mb-4">
                                    <img src="rice bowl.png" alt="" class="w-80 h-80 rounded-lg object-cover">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- KONTEN MENU BUFFET -->
            <section data-category="Prasmanan" class="menu-section mb-8 hidden">
                <div class="bg-primary text-white text-center py-3 rounded-lg mb-8">
                    <h2 class="text-2xl font-bold">PAKET BUFFET</h2>
                </div>

                <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <!-- Paket A -->
                    <div
                        class="relative flex max-w-sm flex-col rounded-xl bg-white border border-white p-6 text-black shadow-md">
                        <div
                            class="relative m-0 mb-8 overflow-hidden rounded-none border-b border-black pb-4 text-center">
                            <p class="block font-sans text-xl font-bold uppercase text-black">
                                PAKET A
                            </p>
                            <div class="mt-2 flex justify-center items-start gap-1 font-sans text-6xl leading-none">
                                <span class="mt-2 text-3xl leading-none"></span>
                                <span class="self-end text-3xl leading-none"></span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 ">
                            <ul class="lists space-y-2 divide-base-content/25 divide-y *:py-3">
                                <li class="flex items-center gap-2">
                                    <span
                                        class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-400 bg-gray-600 bg-opacity-40">
                                        <svg aria-hidden="true" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4">
                                            <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round"
                                                stroke-linecap="round"></path>
                                        </svg>
                                    </span>
                                    <p class="block font-sans">
                                        Nasi Putih
                                    </p>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span
                                        class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-400 bg-gray-600 bg-opacity-40">
                                        <svg aria-hidden="true" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4">
                                            <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round"
                                                stroke-linecap="round"></path>
                                        </svg>
                                    </span>
                                    <p class="block font-sans">
                                        Ayam Goreng
                                    </p>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span
                                        class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-400 bg-gray-600 bg-opacity-40">
                                        <svg aria-hidden="true" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4">
                                            <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round"
                                                stroke-linecap="round"></path>
                                        </svg>
                                    </span>
                                    <p class="block font-sans">
                                        Gado-gado
                                    </p>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span
                                        class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-400 bg-gray-600 bg-opacity-40">
                                        <svg aria-hidden="true" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4">
                                            <path d="M4.5 12.75l6 6 9-13.5" stroke-linejoin="round"
                                                stroke-linecap="round"></path>
                                        </svg>
                                    </span>
                                    <p class="block font-sans">
                                        Life time technical support
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="mt-5 p-0">
                            <button type="button"
                                class="block w-full rounded-lg bg-white py-3 px-5 uppercase text-black outline-none border-0">
                                Buy Now
                            </button>
                        </div> -->
                    </div>

                    <div class="card w-96 bg-base-100 shadow-sm">
                        <div class="card-body">
                            <span class="badge badge-xs badge-warning bg-blue-500">Most Popular</span>
                            <div class="flex justify-between">
                                <h2 class="text-3xl font-bold">Premium</h2>
                                <span class="text-xl">Rp 25k/pax</span>
                            </div>
                            <ul class="mt-6 flex flex-col gap-2 text-xs">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>High-resolution image generation</span>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Customizable style templates</span>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Batch processing capabilities</span>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="size-4 me-2 inline-block text-success" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>AI-driven image enhancements</span>
                                </li>
                                <li class="opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="size-4 me-2 inline-block text-base-content/50" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="line-through">Seamless cloud integration</span>
                                </li>
                                <li class="opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="size-4 me-2 inline-block text-base-content/50" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="line-through">Real-time collaboration tools</span>
                                </li>
                            </ul>
                            <div class="mt-6">
                                <button class="btn btn-primary btn-block">Subscribe</button>
                            </div>
                        </div>
                    </div>

                    <!-- Paket B -->
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <h3 class="font-bold text-primary mb-2">PAKET B</h3>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li>Nasi Putih</li>
                            <li>Ayam Bakar</li>
                            <li>Gado-gado</li>
                            <li>Tempe Bacem</li>
                            <li>Tahu Goreng</li>
                            <li>Kerupuk</li>
                            <li>Sambal</li>
                        </ul>
                        <div class="text-primary font-bold text-lg">Rp 30k</div>
                        <button class="bg-primary text-white px-4 py-2 rounded mt-2 text-sm">Order</button>
                    </div>

                    <!-- Paket C -->
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <h3 class="font-bold text-primary mb-2">PAKET C</h3>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li>Nasi Putih</li>
                            <li>Rendang</li>
                            <li>Sayur Lodeh</li>
                            <li>Tempe Mendoan</li>
                            <li>Tahu Isi</li>
                            <li>Kerupuk</li>
                            <li>Sambal</li>
                        </ul>
                        <div class="text-primary font-bold text-lg">Rp 35k</div>
                        <button class="bg-primary text-white px-4 py-2 rounded mt-2 text-sm">Order</button>
                    </div>

                    <!-- Paket D -->
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <h3 class="font-bold text-primary mb-2">PAKET D</h3>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li>Nasi Putih</li>
                            <li>Ikan Bakar</li>
                            <li>Capcay</li>
                            <li>Tempe Goreng</li>
                            <li>Tahu Bacem</li>
                            <li>Kerupuk</li>
                            <li>Sambal</li>
                        </ul>
                        <div class="text-primary font-bold text-lg">Rp 32k</div>
                        <button class="bg-primary text-white px-4 py-2 rounded mt-2 text-sm">Order</button>
                    </div>

                    <!-- Paket E -->
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <h3 class="font-bold text-primary mb-2">PAKET E</h3>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li>Nasi Putih</li>
                            <li>Sate Ayam</li>
                            <li>Urap</li>
                            <li>Tempe Penyet</li>
                            <li>Tahu Crispy</li>
                            <li>Kerupuk</li>
                            <li>Sambal</li>
                        </ul>
                        <div class="text-primary font-bold text-lg">Rp 28k</div>
                        <button class="bg-primary text-white px-4 py-2 rounded mt-2 text-sm">Order</button>
                    </div>

                    <!-- Paket F -->
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center">
                        <h3 class="font-bold text-primary mb-2">PAKET F</h3>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li>Nasi Putih</li>
                            <li>Bebek Goreng</li>
                            <li>Sayur Bayam</li>
                            <li>Tempe Orek</li>
                            <li>Tahu Petis</li>
                            <li>Kerupuk</li>
                            <li>Sambal</li>
                        </ul>
                        <div class="text-primary font-bold text-lg">Rp 40k</div>
                        <button class="bg-primary text-white px-4 py-2 rounded mt-2 text-sm">Order</button>
                    </div>
                </div>
            </section>
        </div>

        <!-- FLOATING CART -->
        <div id="floating-cart"
            class="fixed bottom-4 right-4 bg-green-500 text-white py-3 px-4 rounded-lg shadow-lg cursor-pointer z-50 hidden"
            onclick="openOrderModal()">
            <div class="flex items-center space-x-2">
                <span>🛒 <span id="cart-item-count">0</span> item</span>
                <span id="cart-total-price">Rp 0</span>
                <span>→</span>
            </div>
        </div>

        <!-- FORM ORDER -->
        <div id="order-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white p-6 rounded-lg w-11/12 md:max-w-lg max-h-[90vh] overflow-y-auto relative">
                <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-800" onclick="closeOrderModal()">
                    <i class="fas fa-times text-xl"></i>
                </button>
                <h2 class="text-2xl font-bold mb-4 text-center">Detail Pesanan</h2>

                <div class="order-summary border border-gray-300 rounded-md p-4 mb-4">
                    <h4 class="font-semibold mb-2">Ringkasan Pesanan:</h4>
                    <div id="summary-items">
                    </div>
                    <hr class="my-2">
                    <p class="font-bold">Total: <span id="summary-total-price">Rp 0</span></p>
                </div>

                <form id="order-form">
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Nama Pemesan *</label>
                        <input type="text" id="customer-name" class="w-full p-2 border border-gray-300 rounded-md"
                            placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold mb-1">No. WhatsApp *</label>
                        <input type="tel" id="customer-whatsapp" class="w-full p-2 border border-gray-300 rounded-md"
                            placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Alamat Pengiriman *</label>
                        <textarea id="customer-address" class="w-full p-2 border border-gray-300 rounded-md" rows="3"
                            placeholder="Alamat lengkap untuk pengiriman" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Tanggal & Waktu Pengiriman *</label>
                        <input type="datetime-local" id="delivery-time"
                            class="w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Catatan Tambahan</label>
                        <textarea id="additional-notes" class="w-full p-2 border border-gray-300 rounded-md" rows="2"
                            placeholder="Catatan khusus untuk pesanan (opsional)"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-green-500 text-white font-bold p-3 rounded-md text-lg cursor-pointer">
                        📱 Pesan via WhatsApp
                    </button>
                </form>
            </div>
        </div>
    </body>
</x-layout>