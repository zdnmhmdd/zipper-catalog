<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZPI Zipper</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
    rel="stylesheet"
    href="https://unpkg.com/aos@2.3.4/dist/aos.css">
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
    <li><a href="/home" class="text-emerald-400 relative">
    Home
    <span class="absolute left-0 -bottom-2 w-full h-[2px] bg-emerald-400"></span>
</a></li>
    <li><a href="/about" class="nav-link">About Us</a></li>
    <li><a href="/products" class="nav-link">Products</a></li>
    <li><a href="/contact" class="nav-link">Contact</a></li>
</ul>
        <a href="#"
            class="bg-emerald-400 hover:bg-emerald-500 text-white px-6 py-3 rounded-2xl font-semibold">
            Get A Quote
        </a>

    </div>
</nav>
<section
    class="hero-bg relative h-[85vh] bg-cover bg-center flex items-center overflow-hidden"
    style="background-image: url('{{ asset('image/hero.png') }}')">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/70 to-transparent"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto w-full px-8">

        <div class="max-w-xl">

            <!-- Judul -->
            <h1 class="hero-title text-4xl font-bold leading-tight">
                <span class="text-emerald-400">
                    Resleting
                </span>

                Berkualitas untuk Setiap Kebutuhan Industri

            </h1>

            <!-- Deskripsi -->
            <p class="hero-desc mt-5 text-sm text-gray-600 leading-7">

                Kami menyediakan berbagai jenis resleting berkualitas tinggi
                untuk kebutuhan garmen, tas, alas kaki, koper, serta berbagai
                aplikasi industri dengan standar mutu terbaik.

            </p>

            <!-- Button -->
           <div class="mt-10 hero-btn">

    <a href="/products"
        class="inline-flex items-center gap-3
        bg-emerald-400
        hover:bg-emerald-500
        hover:scale-105
        transition-all duration-300
        text-white
        px-8 py-4
        rounded-xl
        font-semibold
        shadow-xl">

        Lihat Katalog

        <svg xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">

            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"/>
        </svg>

    </a>

</div>

        </div>

    </div>

    <!-- Fade bawah -->
    <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-b from-transparent to-slate-50"></div>

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

        <span
            data-aos="fade-up"
            class="text-emerald-400 font-semibold uppercase tracking-widest">
            Trusted By
        </span>

        <h2
            data-aos="fade-up"
            data-aos-delay="100"
            class="text-4xl font-bold mt-3">
            Our Clients
        </h2>

        <p
            data-aos="fade-up"
            data-aos-delay="200"
            class="text-gray-500 mt-4 max-w-2xl mx-auto">
            Kami dipercaya oleh berbagai perusahaan dan brand untuk memenuhi
            kebutuhan resleting berkualitas tinggi.
        </p>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10 mt-14 items-center">

            <img
                data-aos="zoom-in"
                data-aos-delay="300"
                src="{{ asset('image/adidas.png') }}"
                class="h-16 mx-auto hover:scale-110 transition duration-300">

            <img
                data-aos="zoom-in"
                data-aos-delay="450"
                src="{{ asset('image/nike.png') }}"
                class="h-16 mx-auto hover:scale-110 transition duration-300">

            <img
                data-aos="zoom-in"
                data-aos-delay="600"
                src="{{ asset('image/eiger.png') }}"
                class="h-16 mx-auto hover:scale-110 transition duration-300">

            <img
                data-aos="zoom-in"
                data-aos-delay="750"
                src="{{ asset('image/converse.png') }}"
                class="h-16 mx-auto hover:scale-110 transition duration-300">

            <img
                data-aos="zoom-in"
                data-aos-delay="900"
                src="{{ asset('image/uniqlo.png') }}"
                class="h-16 mx-auto hover:scale-110 transition duration-300">

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

                    

                </div>
            </div>

        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-slate-800 mt-4 py-2 text-center text-slate-500 text-sm">
            © 2025 ZPI Zipper. All Rights Reserved.
        </div>

    </div>

</footer>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({
    duration: 900,
    easing: 'ease-out',
    once: true,
});
</script>
</body>

</html>