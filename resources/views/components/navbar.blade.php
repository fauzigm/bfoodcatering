<nav id="navbar"
    class="bg-gray-50 p-2 transition-all duration-400 fixed w-full top-0 z-50 shadow-md bg-gray-200 bg-clip-padding backdrop-filter backdrop-blur-lg bg-opacity-50 border border-gray-100">
    <div class="container mx-auto px-2 max-w-7xl">
        <div class="container flex mx-auto justify-between items-center">
            <a href="index.html" class="flex items-center">
                <img src="images/logo_nav.png" alt="Logo BFood Navbar" id="logo-img"
                    class="h-12 transition-all duration-400">
            </a>

            <button id="mobile-menu-button" class="md:hidden text-dark focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>

            <div class="hidden md:flex space-x-8 items-center">
                <a href="/"
                    class="text-dark text-sm font-medium hover:text-primary transition transition-all duration-300 hover:bg-gray-300">Beranda</a>
                <a href="/menu"
                    class="text-dark text-sm font-medium hover:text-primary transition transition-all duration-300 hover:bg-gray-300">Menu</a>
                <div class="relative group">
                    <button
                        class="text-dark text-sm font-medium hover:text-primary transition transition-all duration-300 hover:bg-gray-300 focus:outline-none">
                        Events <i
                            class="fas fa-chevron-down text-xs ml-1 transition-transform duration-300 transform group-hover:rotate-180"></i>
                    </button>
                    <div
                        class="absolute w-48 bg-white shadow-lg rounded-md mt-2 py-1 transition-all duration-300 origin-top opacity-0 invisible group-hover:visible group-hover:opacity-100 z-10">
                        <a href="/wedding-catering" class="block text-sm px-4 py-2 text-dark hover:bg-gray-100">Wedding
                            Catering</a>
                        <a href="/private-event" class="block text-sm px-4 py-2 text-dark hover:bg-gray-100">Private
                            Event</a>
                        <a href="/corporate-event" class="block text-sm px-4 py-2 text-dark hover:bg-gray-100">Corporate
                            Event</a>
                    </div>
                </div>
                <a href="/galeri"
                    class="text-dark text-sm font-medium hover:text-primary transition transition-all duration-300 hover:bg-gray-300">Galeri</a>
                <a href="/kontak"
                    class="text-dark text-sm font-medium hover:text-primary transition transition-all duration-300 hover:bg-gray-300">Kontak</a>
            </div>

            <a href="pesan.html"
                class="hidden md:block bg-primary text-white px-6 py-2 rounded-full font-medium hover:bg-opacity-90 transition shadow-lg hover:shadow-xl">
                Pesan Sekarang
            </a>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white px-4 pb-4 bg-opacity-0">
            <a href="index.html" class="block py-2 text-dark hover:text-primary">Beranda</a>
            <a href="{{ route('menu') }}" class="block py-2 text-dark hover:text-primary">Menu</a>
            <div class="border-t border-gray-200 mt-2 pt-2">
                <button id="mobile-events-dropdown-button"
                    class="w-full flex justify-between items-center py-2 text-dark hover:text-primary">
                    Events <i class="fas fa-chevron-down text-xs ml-1 transition-transform duration-300"></i>
                </button>
                <div id="mobile-events-dropdown" class="hidden pl-4">
                    <a href="/wedding-catering" class="block py-2 text-dark hover:bg-gray-100">Wedding Catering</a>
                    <a href="/private-event" class="block py-2 text-dark hover:bg-gray-100">Private Event</a>
                    <a href="/corporate-event" class="block py-2 text-dark hover:bg-gray-100">Corporate Event</a>
                </div>
            </div>
            <a href="galeri.html" class="block py-2 text-dark hover:text-primary">Galeri</a>
            <a href="kontak.html" class="block py-2 text-dark hover:text-primary">Kontak</a>
            <a href="pesan.html"
                class="block mt-2 bg-primary hover:bg-primary text-gray-900 font-medium px-6 sm:px-8 py-3 sm:py-4 rounded-full transition-all duration-300 transform hover:scale-105 shadow-sm hover:shadow-sm text-xs sm:text-base">
                Pesan Sekarang
            </a>
            <!-- <button class="group bg-primary hover:bg-primary text-gray-900 font-semibold px-6 sm:px-8 py-3 sm:py-4 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-sm sm:text-base">
                            <span class="flex items-center text-white justify-center gap-2">
                                <i class="fas fa-utensils text-white text-sm sm:text-base"></i>
                                Lihat Menu Kami
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform text-sm sm:text-base"></i>
                            </span>
                        </button> -->
        </div>
    </div>
</nav>

<script>
    // JavaScript untuk mobile menu dan dropdown
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    document.getElementById('mobile-events-dropdown-button').addEventListener('click', function () {
        const dropdown = document.getElementById('mobile-events-dropdown');
        const icon = this.querySelector('.fa-chevron-down');
        dropdown.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    });

    // JavaScript untuk efek "shrink on scroll" pada navbar dan logo
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        const navbar = document.getElementById("navbar");
        const logoImg = document.getElementById("logo-img");

        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            // Saat discroll
            navbar.classList.add("shrink");
            logoImg.classList.remove("h-12");
            logoImg.classList.add("h-8");
        } else {
            // Saat di bagian atas halaman
            navbar.classList.remove("shrink");
            logoImg.classList.remove("h-8");
            logoImg.classList.add("h-12");
        }
    }
</script>