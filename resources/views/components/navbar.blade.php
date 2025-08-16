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
                <a href="/" class="text-dark font-medium hover:text-primary transition">Beranda</a>
                <a href="/menu" class="text-dark font-medium hover:text-primary transition">Menu</a>
                <a href="/Event" class="text-dark font-medium hover:text-primary transition">Events</a>
                <a href="/galeri" class="text-dark font-medium hover:text-primary transition">Galeri</a>
                <a href="/kontak" class="text-dark font-medium hover:text-primary transition">Kontak</a>
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
            <a href="{{ route('menu') }}" class="block py-2 text-dark hover:text-primary">Menu</a>
            <a href="paket.html" class="block py-2 text-dark hover:text-primary">Events</a>
            <a href="galeri.html" class="block py-2 text-dark hover:text-primary">Galeri</a>
            <a href="kontak.html" class="block py-2 text-dark hover:text-primary">Kontak</a>
            <a href="pesan.html"
                class="block mt-2 bg-primary text-white px-4 py-2 rounded-full text-center font-medium">
                Pesan Sekarang
            </a>
        </div>
    </nav>