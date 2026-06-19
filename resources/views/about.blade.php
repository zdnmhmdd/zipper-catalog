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
    <li><a href="/about" class="text-emerald-400 relative">About Us  <span class="absolute left-0 -bottom-2 w-full h-[2px] bg-emerald-400"></span></a></li>
    <li><a href="/products" class="nav-link">Products</a></li>
    <li><a href="/contact" class="nav-link">Contact</a></li>
</ul>
        <a href="#"
            class="bg-emerald-400 hover:bg-emerald-500 text-white px-6 py-3 rounded-2xl font-semibold">
            Get A Quote
        </a>

    </div>
</nav>

<section class="pt-35 pb-10 bg-gradient-to-r from-emerald-50 to-white">
        <div class="max-w-7xl mx-auto px-8">

            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div>
                    <h1 class="text-5xl font-bold leading-tight">
                        Mitra Terpercaya dalam
                        <span class="text-emerald-400">
                            Solusi Resleting
                        </span>
                        Berkualitas
                    </h1>

                    <p class="mt-6 text-gray-600 leading-8">
                        Kami menyediakan berbagai jenis resleting berkualitas tinggi untuk kebutuhan
                        garment, tas, alas kaki, dan berbagai sektor industri lainnya dengan standar
                        kualitas terbaik.
                    </p>
                </div>

                <div>
                    <img src="{{ asset('image/gedung.png') }}"
                        class="rounded-2xl shadow-x2">
                </div>

            </div>

        </div>
    </section>

    <!-- Company Profile -->
    <section class="py-10 bg-white">
        <div class="max-w-6xl mx-auto px-8 text-center">

            <h2 class="text-4xl font-bold">
                Tentang Perusahaan
            </h2>

            <p class="mt-5 text-gray-600 leading-8 max-w-4xl mx-auto">
                CV. Zipper Production Indonesia didirikan pada tahun 2016, telah berkembang menjadi
                salah satu produsen terkemuka di Indonesia untuk produk berbasis zipper yang
                berkualitas tinggi dan inovatif. Dimulai dengan hanya dua mesin jahit, kami memulai
                perjalanan yang didorong oleh visi yang jelas: untuk menghadirkan zipper berkualitas
                premium yang memenuhi standar internasional dan bersaing baik secara lokal maupun
                global. Kami sangat berkomitmen untuk menciptakan zipper berkualitas tinggi, dipandu
                oleh prinsip presisi, inovasi, dan standar internasiona
            </p>

        </div>
    </section>

    <!-- Vision Mission -->
    <section class="py-10 bg-slate-50">

        <div class="max-w-6xl mx-auto px-8">

            <div class="grid md:grid-cols-2 gap-8">

                <div class="bg-white rounded-3xl p-10 shadow-sm">
                    <h3 class="text-3xl font-bold mb-4">
                        Visi
                    </h3>

                    <p class="text-gray-600 leading-8">
                       Menjadi pemimpin terpercaya dalam solusi
                        pakaian dan aksesori, menghadirkan produk
                        berbasis zipper yang inovatif yang
                        menggabungkan gaya, kualitas, dan
                        fungsionalitas
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-10 shadow-sm">
                    <h3 class="text-3xl font-bold mb-4">
                        Misi
                    </h3>

                    <ul class="space-y-3 text-gray-600">
                        <li>✓ Menghadirkan produk resleting berkualitas tinggi dan terpercaya.</li>
                        <li>✓ Berinovasi untuk memenuhi kebutuhan industri yang terus berkembang.</li>
                        <li>✓ Memberikan pelayanan terbaik guna membangun hubungan jangka panjang dengan pelanggan.</li>
                    </ul>
                </div>

            </div>

        </div>

    </section>


    <!-- Stats -->
    <section class="py-10 bg-emerald-400 text-white">

        <div class="max-w-6xl mx-auto px-8">

            <div class="grid md:grid-cols-4 gap-8 text-center">

                <div>
                    <h3 class="text-5xl font-bold">2016</h3>
                    <p class="mt-2">Tahun Berdiri</p>
                </div>

                <div>
                    <h3 class="text-5xl font-bold">100+</h3>
                    <p class="mt-2">Client</p>
                </div>

                <div>
                    <h3 class="text-5xl font-bold">99%</h3>
                    <p class="mt-2">Ulasan Bintang 5</p>
                </div>

                <div>
                    <h3 class="text-5xl font-bold">100+</h3>
                    <p class="mt-2">Proyek Selesai</p>
                </div>

            </div>

        </div>

    </section>

    <!-- Carouse Foto -->
<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-8">

        <!-- Heading -->
        <div class="text-center">
            <h2 class="text-4xl font-bold">
                Galeri Perusahaan
            </h2>

            <p class="text-gray-500 mt-3">
                Dokumentasi aktivitas dan fasilitas produksi kami.
            </p>
        </div>

        <!-- Carousel -->
        <div class="relative mt-5">

            <!-- Fade Kiri -->
            <div
                class="absolute left-0 top-0 h-full w-32 z-10 pointer-events-none
                bg-gradient-to-r from-white to-transparent">
            </div>

            <!-- Fade Kanan -->
            <div
                class="absolute right-0 top-0 h-full w-32 z-10 pointer-events-none
                bg-gradient-to-l from-white to-transparent">
            </div>

            <!-- Tombol Kiri -->
            <button
                id="prevBtn"
                class="absolute left-2 top-1/2 -translate-y-1/2 z-20
                bg-white/90 backdrop-blur-md
                shadow-lg rounded-full w-12 h-12
                hover:bg-emerald-400 hover:text-white
                transition-all duration-300">

                ❮

            </button>

            <!-- Gallery -->
            <div
                id="gallery"
                class="flex gap-6 overflow-hidden scroll-smooth">

                <img
                    src="{{ asset('image/produksi.jpg') }}"
                    class="w-[350px] h-[250px] object-cover rounded-2xl shadow-md flex-shrink-0">

                <img
                    src="{{ asset('image/produksi2.jpg') }}"
                    class="w-[350px] h-[250px] object-cover rounded-2xl shadow-md flex-shrink-0">

                <img
                    src="{{ asset('image/produksi3.png') }}"
                    class="w-[350px] h-[250px] object-cover rounded-2xl shadow-md flex-shrink-0">

                <img
                    src="{{ asset('image/produksi4.png') }}"
                    class="w-[350px] h-[250px] object-cover rounded-2xl shadow-md flex-shrink-0">

                <img
                    src="{{ asset('image/produksi5.png') }}"
                    class="w-[350px] h-[250px] object-cover rounded-2xl shadow-md flex-shrink-0">

            </div>

            <!-- Tombol Kanan -->
            <button
                id="nextBtn"
                class="absolute right-2 top-1/2 -translate-y-1/2 z-20
                bg-white/90 backdrop-blur-md
                shadow-lg rounded-full w-12 h-12
                hover:bg-emerald-400 hover:text-white
                transition-all duration-300">

                ❯

            </button>

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

<script>
    const gallery = document.getElementById("gallery");

    document.getElementById("nextBtn").addEventListener("click", () => {
        gallery.scrollBy({
            left: 380,
            behavior: "smooth"
        });
    });

    document.getElementById("prevBtn").addEventListener("click", () => {
        gallery.scrollBy({
            left: -380,
            behavior: "smooth"
        });
    });
</script>

</body>

</html>