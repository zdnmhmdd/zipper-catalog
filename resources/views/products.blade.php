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


<section class="pb-24 pt-30">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center mb-14">
            <h2 class="text-5xl font-bold mt-4 text-slate-900">
                Zipper Solutions for Every Industry
            </h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto leading-8">
                High-quality zipper products designed for durability,
                performance, and reliability across a wide range of
                applications.
            </p>
        </div>

        <div class="flex justify-center gap-4 flex-wrap mb-14">
            <button class="px-6 py-2 border border-gray-300 rounded-full hover:bg-emerald-500 hover:text-white transition">
                ZIPPERS
            </button>
            <button class="px-6 py-2 border border-gray-300 rounded-full hover:bg-emerald-500 hover:text-white transition">
                SLIDERS
            </button>
            <button class="px-8 py-3 border border-gray-300 rounded-full hover:bg-emerald-500 hover:text-white transition">
                MAGIC TAPE
            </button>
            <button class="px-8 py-3 border border-gray-300 rounded-full hover:bg-emerald-500 hover:text-white transition">
                OTHERS
            </button>
        </div>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 32px; margin-top: 32px; width: 100%;">

    <div style="background-color: #ffffff; border-radius: 24px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.05); display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
        <div>
            <div style="width: 100%; height: 300px; overflow: hidden; position: relative;">
                <img src="{{ asset('image/nylon.jpeg') }}" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            </div>
            <div style="padding: 24px;">
                <span style="font-size: 12px; text-transform: uppercase; color: #10b981; font-weight: 600; letter-spacing: 0.05em; display: block;">Zippers</span>
                <h3 style="font-size: 24px; font-weight: 700; margin-top: 12px; color: #0f172a;">Nylon Zipper</h3>
                <p style="color: #64748b; margin-top: 12px; line-height: 1.75; font-size: 14px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">Strong and flexible zipper made from high-quality nylon material.</p>
                <div style="margin-top: 20px;">
                    <span style="font-weight: 600; color: #10b981;">Size</span>
                    <span style="margin-left: 12px; color: #475569;">3, 5, 8, 10</span>
                </div>
            </div>
        </div>
        <div style="padding: 24px; padding-top: 0;">
            <a href="/products/nylon-zipper" style="display: inline-block; color: #10b981; font-weight: 600; text-decoration: none; transition: color 0.2s;">
                View Details →
            </a>
        </div>
    </div>

    <div style="background-color: #ffffff; border-radius: 24px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.05); display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
        <div>
            <div style="width: 100%; height: 300px; overflow: hidden; position: relative;">
                <img src="{{ asset('image/hero.png') }}" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            </div>
            <div style="padding: 24px;">
                <span style="font-size: 12px; text-transform: uppercase; color: #10b981; font-weight: 600; letter-spacing: 0.05em; display: block;">Zippers</span>
                <h3 style="font-size: 24px; font-weight: 700; margin-top: 12px; color: #0f172a;">Resin Zipper</h3>
                <p style="color: #64748b; margin-top: 12px; line-height: 1.75; font-size: 14px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">Smooth and lightweight zipper with excellent color matching.</p>
                <div style="margin-top: 20px;">
                    <span style="font-weight: 600; color: #10b981;">Size</span>
                    <span style="margin-left: 12px; color: #475569;">3, 5, 8, 10</span>
                </div>
            </div>
        </div>
        <div style="padding: 24px; padding-top: 0;">
            <a href="/products/resin-zipper" style="display: inline-block; color: #10b981; font-weight: 600; text-decoration: none; transition: color 0.2s;">
                View Details →
            </a>
        </div>
    </div>

    <div style="background-color: #ffffff; border-radius: 24px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.05); display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
        <div>
            <div style="width: 100%; height: 300px; overflow: hidden; position: relative;">
                <img src="{{ asset('image/metal.jpeg') }}" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            </div>
            <div style="padding: 24px;">
                <span style="font-size: 12px; text-transform: uppercase; color: #10b981; font-weight: 600; letter-spacing: 0.05em; display: block;">Zippers</span>
                <h3 style="font-size: 24px; font-weight: 700; margin-top: 12px; color: #0f172a;">Metal Zipper</h3>
                <p style="color: #64748b; margin-top: 12px; line-height: 1.75; font-size: 14px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">Premium metal zipper for strong, durable and stylish finish.</p>
                <div style="margin-top: 20px;">
                    <span style="font-weight: 600; color: #10b981;">Size</span>
                    <span style="margin-left: 12px; color: #475569;">3, 5, 8</span>
                </div>
            </div>
        </div>
        <div style="padding: 24px; padding-top: 0;">
            <a href="/products/metal-zipper" style="display: inline-block; color: #10b981; font-weight: 600; text-decoration: none; transition: color 0.2s;">
                View Details →
            </a>
        </div>
    </div>

    <div style="background-color: #ffffff; border-radius: 24px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.05); display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
        <div>
            <div style="width: 100%; height: 300px; overflow: hidden; position: relative;">
                <img src="{{ asset('image/waterproof.jpeg') }}" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            </div>
            <div style="padding: 24px;">
                <span style="font-size: 12px; text-transform: uppercase; color: #10b981; font-weight: 600; letter-spacing: 0.05em; display: block;">Zippers</span>
                <h3 style="font-size: 24px; font-weight: 700; margin-top: 12px; color: #0f172a;">Waterproof Zipper</h3>
                <p style="color: #64748b; margin-top: 12px; line-height: 1.75; font-size: 14px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                    Designed to resist water penetration for outdoor and technical gear.
                </p>
                <div style="margin-top: 20px;">
                    <span style="font-weight: 600; color: #10b981;">Size</span>
                    <span style="margin-left: 12px; color: #475569;">3, 5</span>
                </div>
            </div>
        </div>
        <div style="padding: 24px; padding-top: 0;">
            <a href="/products/waterproof-zipper" style="display: inline-block; color: #10b981; font-weight: 600; text-decoration: none; transition: color 0.2s;">
                View Details →
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