<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* This is for custom transition and hover effect that is easier to manage with custom CSS */
        .shrink {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
        }
    </style>
</head>
<body>

    <nav id="navbar" class="bg-gray-50 p-10 transition-all duration-400 fixed w-full top-0 z-50 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#default" id="logo" class="text-black text-4xl font-bold transition-all duration-400">CompanyLogo</a>
            <div class="flex items-center space-x-4">
                <a class="text-black text-lg p-3 rounded-md transition-all duration-300 hover:bg-gray-300" href="#home">Home</a>
                <a class="text-black text-lg p-3 rounded-md transition-all duration-300 hover:bg-gray-300" href="#contact">Contact</a>
                <a class="text-black text-lg p-3 rounded-md transition-all duration-300 hover:bg-gray-300" href="#about">About</a>
            </div>
        </div>
    </nav>
    
    <script>
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            const navbar = document.getElementById("navbar");
            const logo = document.getElementById("logo");
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                navbar.classList.add("shrink");
                logo.style.fontSize = "25px";
            } else {
                navbar.classList.remove("shrink");
                logo.style.fontSize = "35px";
            }
        }
    </script>
    
    <div class="h-[1000px] mt-[200px] text-center">
        <h1 class="text-5xl font-bold">Scroll Down to See the Effect</h1>
    </div>

</body>
</html>