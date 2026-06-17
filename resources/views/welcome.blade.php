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
    <li><a href="#" class="text-emerald-400 relative">
    Beranda
    <span class="absolute left-0 -bottom-2 w-full h-[2px] bg-emerald-400"></span>
</a></li>
    <li><a href="#" class="nav-link">Tentang</a></li>
    <li><a href="#" class="nav-link">Produk</a></li>
    <li><a href="#" class="nav-link">Kontak</a></li>
</ul>
        <a href="#"
            class="bg-emerald-400 hover:bg-emerald-500 text-white px-6 py-3 rounded-2xl font-semibold">
            Get A Quote
        </a>

    </div>
</nav>
<section
    class="h-[80vh] bg-cover bg-center flex items-start pt-30 relative"
    style="background-image:url('{{ asset('image/hero.png') }}')">
    <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/70 to-transparent">
    </div>
    <div class="relative w-full pl-18">

    <div class="max-w-md">
        <h1 class="text-4xl font-bold leading-tight">
            <span class="text-emerald-400">Resleting</span>
            Berkualitas untuk Setiap Kebutuhan Industri
        </h1>
        <p class="mt-5 text-sm text-gray-600 leading-7">
            Kami menyediakan berbagai jenis resleting berkualitas tinggi
            untuk kebutuhan garmen, tas, alas kaki, dan berbagai aplikasi
            industri dengan standar mutu terbaik.
        </p>
        <a href="#"
            class="inline-block mt-8
            bg-emerald-400
            hover:bg-emerald-500
            text-white
            px-8 py-4
            rounded-xl
            font-semibold
            shadow-lg
            transition-colors
            duration-300">
             Lihat Katalog
        </a>

    </div>

</div>
<div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-b from-transparent to-slate-50"></div>
</section>
<section class="relative -mt-5 z-20">
    <div class="max-w-7xl mx-auto px-8">
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <div class="grid grid-cols-4 gap-8">
                <div class="flex items-start gap-4">
                    <div class="text-emerald-400 text-4xl">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg">
                            Kualitas Terbaik
                        </h3>
                        <p class="text-gray-500 text-sm mt-2">
                            Material resleting berkualitas tinggi dan tahan lama.
                        </p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="text-emerald-400 text-4xl">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg">
                            Banyak Pilihan
                        </h3>

                        <p class="text-gray-500 text-sm mt-2">
                            Tersedia berbagai ukuran, warna, dan tipe resleting.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="text-emerald-400 text-4xl">
                        <i class="fa-solid fa-sliders"></i>
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg">
                            Custom Order
                        </h3>

                        <p class="text-gray-500 text-sm mt-2">
                            Melayani kebutuhan khusus sesuai spesifikasi Anda.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="text-emerald-400 text-4xl">
                        <i class="fa-solid fa-headset"></i>
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg">
                            Fast Response
                        </h3>

                        <p class="text-gray-500 text-sm mt-2">
                            Tim kami siap membantu kebutuhan Anda dengan cepat.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-8 text-center">

        <span class="text-emerald-400 font-semibold uppercase tracking-widest">
            Trusted By
        </span>

        <h2 class="text-4xl font-bold mt-3">
            Our Clients
        </h2>

        <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
            Kami dipercaya oleh berbagai perusahaan dan brand untuk memenuhi kebutuhan resleting berkualitas tinggi.
        </p>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10 mt-14 items-center">

            <img src="{{ asset('image/adidas.png') }}" class="h-16 mx-auto ">

            <img src="{{ asset('image/nike.png') }}" class="h-16 mx-auto ">

            <img src="{{ asset('image/eiger.png') }}" class="h-16 mx-auto ">

            <img src="{{ asset('image/converse.png') }}" class="h-16 mx-auto ">

            <img src="{{ asset('image/uniqlo.png') }}" class="h-16 mx-auto ">

        </div>

    </div>
</section>

<footer class="bg-slate-900 text-white mt-24">

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
                    <li>📍 Tangerang, Indonesia</li>
                    <li>📞 +62 812 3456 7890</li>
                    <li>✉️ sales@zippercompany.com</li>
                </ul>
            </div>

            <!-- Social -->
            <div>
                <h3 class="font-semibold text-lg mb-5">
                    Follow Us
                </h3>

                <div class="flex gap-4">

                    <a href="#"
                        class="w-12 h-12 bg-slate-800 rounded-full flex items-center justify-center hover:bg-emerald-400 transition">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#"
                        class="w-12 h-12 bg-slate-800 rounded-full flex items-center justify-center hover:bg-emerald-400 transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#"
                        class="w-12 h-12 bg-slate-800 rounded-full flex items-center justify-center hover:bg-emerald-400 transition">
                        <i class="fab fa-tiktok"></i>
                    </a>

                    <a href="#"
                        class="w-12 h-12 bg-slate-800 rounded-full flex items-center justify-center hover:bg-emerald-400 transition">
                        <i class="fab fa-whatsapp"></i>
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