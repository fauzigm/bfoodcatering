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
    <x-navbar></x-navbar>
    <x-hero></x-hero>
    <main class="py-16">
        {{ $slot }}
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