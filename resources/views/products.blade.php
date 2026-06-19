<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZPI Zipper</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<script>
window.addEventListener("scroll", function() {
    const navbar = document.getElementById("navbar");

    if (window.scrollY > 50) {
        navbar.classList.add(
            "bg-white/70",
            "backdrop-blur-md",
            "shadow-md"
        );
    } else {
        navbar.classList.remove(
            "bg-white/70",
            "backdrop-blur-md",
            "shadow-md"
        );
    }
});
</script>
<body class="font-[Poppins] bg-slate-50">
<nav id="navbar"
     class="fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-8 py-6 flex items-center justify-between">
        <img src="{{ asset('image/logo.jpeg') }}" class="h-12">
        <ul class="flex gap-10 font-medium">
    <li><a href="/home" class="nav-link">
    Home
   
</a></li>
    <li><a href="/about" class="nav-link">About Us</a></li>
    <li><a href="/products" class="text-emerald-400 relative">Products <span class="absolute left-0 -bottom-2 w-full h-[2px] bg-emerald-400"></span></a></li>
    <li><a href="/contact" class="nav-link">Contact </a></li>
</ul>
        <a href="#"
            class="bg-emerald-400 hover:bg-emerald-500 text-white px-6 py-3 rounded-2xl font-semibold">
            Get A Quote
        </a>

    </div>
</nav>

{{-- CONTACT SECTION --}}


<section class="py-10 pt-30">
    <div class="max-w-7xl mx-auto px-8">

        <h2 class="text-2xl font-semibold text-center mb-8">
            Kategori
        </h2>

        <div class="flex justify-center items-center gap-4 mt-6">
            <button class="bg-emerald-400 text-white px-8 py-1 rounded-xl font-medium">
                ZIPPERS
            </button>

            <button class="bg-white border border-gray-300 px-8 py-1 rounded-xl
                    hover:bg-emerald-500 hover:text-white hover:border-emerald-500
                    transition-all duration-300">
                 SLIDERS
            </button>

            <button class="bg-white border border-gray-300 px-8 py-1 rounded-xl
                    hover:bg-emerald-500 hover:text-white hover:border-emerald-500
                    transition-all duration-300">
                 MAGIC TAPE
            </button>

            <button class="bg-white border border-gray-300 px-8 py-1 rounded-xl
                    hover:bg-emerald-500 hover:text-white hover:border-emerald-500
                    transition-all duration-300">
                 OTHERS
            </button>

            

        </div>
    </div>

</section>
<section class="pb-24">
    <div class="max-w-7xl mx-auto px-8">

        <div class="grid md:grid-cols-4 xl:grid-cols-4 gap-8 mt-12">

            <!-- Nylon -->
            <div class="bg-white rounded-[60px] overflow-hidden border-2 border-gray-200 hover:shadow-xl transition-all duration-300">

               <div class="bg-gray-50 h-[250px] flex items-center justify-center p-6">
                    <img src="{{ asset('image/nylon.jpeg') }}"
                        class="max-h-full max-w-full object-contain">
                </div>

                <div class="p-5">

                    <h3 class="text-2xl font-semibold">
                        Nylon Zipper
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Size: 3, 5, 8, 10
                    </p>

                    <a href="#"
                        class="inline-block mt-6 bg-emerald-400 hover:bg-emerald-500 text-white px-6 py-3 rounded-full transition">
                        Read More..
                    </a>

                </div>

            </div>

            <!-- Resin -->
            <div class="bg-white rounded-[60px] overflow-hidden border-2 border-gray-200 hover:shadow-xl transition-all duration-300">

                <div class="bg-gray-50 h-[250px] flex items-center justify-center p-6">
                    <img src="{{ asset('image/hero.png') }}"
                        class="max-h-full max-w-full object-contain">
                </div>

                <div class="p-5">

                    <h3 class="text-2xl font-semibold">
                        Resin Zipper
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Size: 3, 5, 8, 10
                    </p>

                    <a href="#"
                        class="inline-block mt-6 bg-emerald-400 hover:bg-emerald-500 text-white px-6 py-3 rounded-full transition">
                        Read More..
                    </a>

                </div>

            </div>

            <!-- Metal -->
            <div class="bg-white rounded-[60px] overflow-hidden border-2 border-gray-200 hover:shadow-xl transition-all duration-300">

                <div class="bg-gray-50 h-[250px] flex items-center justify-center p-6">
                    <img src="{{ asset('image/metal.jpeg') }}"
                        class="max-h-full max-w-full object-contain">
                </div>

                <div class="p-5">

                    <h3 class="text-2xl font-semibold">
                        Metal Zipper
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Size: 3, 5, 8
                    </p>

                    <a href="#"
                        class="inline-block mt-6 bg-emerald-400 hover:bg-emerald-500 text-white px-6 py-3 rounded-full transition">
                        Read More..
                    </a>

                </div>

            </div>

            <!-- Waterproof -->
            <div class="bg-white rounded-[60px] overflow-hidden border-2 border-gray-200 hover:shadow-xl transition-all duration-300">

                <div class="bg-gray-50 h-[250px] flex items-center justify-center p-6">
                    <img src="{{ asset('image/waterproof.jpeg') }}"
                        class="max-h-full max-w-full object-contain">
                </div>

                <div class="p-5">

                    <h3 class="text-2xl font-semibold">
                        Waterproof Zipper
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Size: 3, 5
                    </p>

                    <a href="#"
                        class="inline-block mt-6 bg-emerald-400 hover:bg-emerald-500 text-white px-6 py-3 rounded-full transition">
                        Read More..
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>
<footer class="bg-slate-900 text-white mt-5">

    <div class="max-w-7xl mx-auto px-8 pt-8 pb-2">

        <div class="grid md:grid-cols-4 gap-12">

            <!-- Company -->
            <div>
                <img src="{{ asset('image/logo.jpeg') }}"
                     alt="Logo"
                     class="h-14 mb-4 rounded">

                <p class="text-slate-400 leading-7">
                    Penyedia resleting berkualitas tinggi untuk kebutuhan
                    garment, tas, alas kaki, dan berbagai industri lainnya.
                </p>
            </div>

            <!-- Menu -->
            <div>
                <h3 class="font-semibold text-lg mb-5">
                    Menu
                </h3>

                <ul class="space-y-3 text-slate-400">
                    <li><a href="#" class="hover:text-emerald-400 transition">Beranda</a></li>
                    <li><a href="#" class="hover:text-emerald-400 transition">Tentang</a></li>
                    <li><a href="#" class="hover:text-emerald-400 transition">Produk</a></li>
                    <li><a href="#" class="hover:text-emerald-400 transition">Kontak</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="font-semibold text-lg mb-5">
                    Kontak
                </h3>

                <ul class="space-y-3 text-slate-400">
                    <li>📍 Jl. Faliman Jaya, RT.001/RW.009, Kb. Besar, Kec. Benda, Kota Tangerang, Banten 15124</li>
                    <li>📞 +62 852-1294-0295</li>
                    <li>📞 +62 813-1708-9841 (No. CS)</li>
                    <li>✉️ sales@zippercompany.com</li>
                </ul>
            </div>

            <!-- Social -->
            <div>
                <h3 class="font-semibold text-lg mb-5">
                    Follow Us
                </h3>

                <div class="flex gap-4">

                    <a href="https://www.instagram.com/zpi.id/"
                        class="w-12 h-12 bg-slate-800 rounded-full flex items-center justify-center hover:bg-emerald-400 transition">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="https://www.facebook.com/share/p/1E29JUj4zA/"
                        class="w-12 h-12 bg-slate-800 rounded-full flex items-center justify-center hover:bg-emerald-400 transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="https://www.tiktok.com/@zpiofficialstore?_r=1&_t=ZS-97L4ddnESsH"
                        class="w-12 h-12 bg-slate-800 rounded-full flex items-center justify-center hover:bg-emerald-400 transition">
                        <i class="fab fa-tiktok"></i>
                    </a>


                </div>
            </div>

        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-slate-800 mt-4 py-2 text-center text-slate-500 text-sm">
            © 2025 ZPI Zipper. All Rights Reserved.
        </div>

    </div>

</footer>
</body>

</html>