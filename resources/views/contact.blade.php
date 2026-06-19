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
    <li><a href="/products" class="nav-link">Products</a></li>
    <li><a href="/contact" class="text-emerald-400 relative">Contact  <span class="absolute left-0 -bottom-2 w-full h-[2px] bg-emerald-400"></span></a></li>
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

        {{-- Heading --}}
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold">
                Hubungi Kami
            </h1>

            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                Kami siap membantu kebutuhan resleting industri Anda.
                Hubungi tim kami untuk konsultasi produk maupun permintaan penawaran.
            </p>
        </div>

        {{-- Contact + Form --}}
        <div class="bg-white rounded-3xl shadow-lg p-10 lg:p-14">
            <div class="grid lg:grid-cols-2 gap-16 items-start">

            {{-- LEFT --}}
            <div>
                <h2 class="text-3xl font-bold mb-10">
                    Informasi Kontak
                </h2>

                <div class="space-y-8">

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-500 text-xl">
                            📍
                        </div>

                        <div>
                            <h3 class="font-semibold text-xl">
                                Alamat
                            </h3>

                            <p class="text-gray-500 mt-1">
                                Tangerang, Banten, Indonesia
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-500 text-xl">
                            📞
                        </div>

                        <div>
                            <h3 class="font-semibold text-xl">
                                Telepon
                            </h3>

                            <p class="text-gray-500 mt-1">
                                +62 812 3456 7890
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-500 text-xl">
                            ✉️
                        </div>

                        <div>
                            <h3 class="font-semibold text-xl">
                                Email
                            </h3>

                            <p class="text-gray-500 mt-1">
                                sales@zpizipper.com
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-500 text-xl">
                            🕒
                        </div>

                        <div>
                            <h3 class="font-semibold text-xl">
                                Jam Operasional
                            </h3>

                            <p class="text-gray-500 mt-1">
                                Senin - Jumat
                                <br>
                                08.00 - 17.00 WIB
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            {{-- RIGHT --}}
           <div class="bg-white rounded-3xl shadow-lg p-5 max-w-xl">

                <h2 class="text-3xl font-bold mb-7">
                    Kirim Pesan
                </h2>

                <form class="space-y-4">

                    <input
                        type="text"
                        placeholder="Nama Lengkap"
                        class="w-full border border-gray-200 rounded-xl px-5 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400">

                    <input
                        type="email"
                        placeholder="Email"
                        class="w-full border border-gray-200 rounded-xl px-5 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400">

                    <input
                        type="text"
                        placeholder="Nomor Telepon"
                        class="w-full border border-gray-200 rounded-xl px-5 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400">

                    <input
                        type="text"
                        placeholder="Nama Perusahaan"
                        class="w-full border border-gray-200 rounded-xl px-5 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400">

                    <textarea
                        rows="6"
                        placeholder="Pesan"
                        class="w-full border border-gray-200 rounded-xl px-5 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400"></textarea>

                    <button
                        type="submit"
                        class="w-full bg-emerald-400 hover:bg-emerald-500 transition-all duration-300 text-white py-2 rounded-xl font-semibold shadow-lg">
                        Kirim Pesan
                    </button>

                </form>

            </div>

        </div>
</div>
    </div>
</section>

{{-- GOOGLE MAPS --}}
<section class="pb-10">
    <div class="max-w-7xl mx-auto px-8">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8265743723523!2d106.68100987039571!3d-6.153976346663904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f92fcf2a60d1%3A0x1ebcf95698b32608!2sCV%20Zipper%20Production%20Indonesia!5e0!3m2!1sid!2sid!4v1781797016437!5m2!1sid!2sid"
            class="w-full h-[450px] rounded-3xl shadow-lg"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

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