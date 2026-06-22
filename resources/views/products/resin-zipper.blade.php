<!DOCTYPE html>
<html lang="en">
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

    {{-- Detail Produk --}}
<section class="bg-[#fafafa] py-24 pt-30 font-sans">
    <div class="max-w-6xl mx-auto px-6 md:px-12">

        <!-- GRID UTAMA -->
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 items-start">

            <!-- SISI KIRI: PREVIEW GAMBAR (6 KOLOM) -->
            <!-- Menggunakan sticky agar gambar mengambang elegan saat di-scroll -->
          <div class="lg:col-span-6 sticky top-36">
    <div style="background-color: #f3f3f3; border-radius: 32px; overflow: hidden; width: 100%; height: 450px; display: flex; align-items: center; justify-content: center; box-sizing: border-box;">
        
        <img src="{{ asset('image/hero.png') }}"
             style="width: 100%; height: 100%; object-fit: cover; display: block; mix-blend-multiply: multiply;"
             class="transition-transform duration-700 ease-out hover:scale-105">
             
    </div>
</div>

<!-- SISI KANAN: INFORMASI PRODUK (6 KOLOM) -->
<!-- Kategori -->
<div class="lg:col-span-6 lg:py-4">

<span class="text-xs font-bold tracking-[0.2em] text-emerald-500 uppercase block mb-3">
    Collection / Zippers
</span>

<!-- Nama Produk -->
<h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-none mb-6">
    Resin Zipper
</h1>

<!-- Deskripsi -->
<p class="text-slate-500 leading-relaxed text-base font-normal mb-10">
    Resin Zipper is designed to provide a perfect combination of durability,
    lightweight performance, and aesthetic appearance. Manufactured with
    high-quality resin teeth, it offers smooth operation, excellent color
    consistency, and strong resistance against corrosion, making it ideal for
    fashion garments, bags, outdoor equipment, and footwear applications.
</p>

<!-- Technical Specifications -->
<div class="mb-10">
    <h3 class="text-xs font-bold tracking-wider text-slate-400 uppercase mb-4">
        Technical Specifications
    </h3>

    <div class="border-t border-slate-200 text-sm">

        <div class="flex justify-between py-4 border-b border-slate-100">
            <span class="text-slate-400">Material</span>
            <span class="text-slate-900 font-medium">Premium Resin Teeth</span>
        </div>

        <div class="flex justify-between py-4 border-b border-slate-100">
            <span class="text-slate-400">Available Sizes</span>
            <span class="text-slate-900 font-medium">No. 3, No. 5, No. 8, No. 10</span>
        </div>

        <div class="flex justify-between py-4 border-b border-slate-100">
            <span class="text-slate-400">Color Options</span>
            <span class="text-slate-900 font-medium">Custom Colors Available</span>
        </div>

        <div class="flex justify-between py-4 border-b border-slate-100">
            <span class="text-slate-400">Primary Application</span>
            <span class="text-slate-900 font-medium">Fashion Wear, Bags, Outdoor Gear, Footwear</span>
        </div>

    </div>
</div>

<!-- Performance Benefits -->
<div class="mb-5">

    <h3 class="text-xs font-bold tracking-[0.15em] text-slate-400 uppercase mb-5">
        Performance Benefits
    </h3>

    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px;">

        <div style="background:#fff;padding:16px 20px;border-radius:16px;border:1px solid #f1f5f9;display:flex;align-items:center;gap:12px;">
            <span style="width:8px;height:8px;background:#34d399;border-radius:50%;"></span>
            <span style="font-size:14px;font-weight:500;color:#334155;">Smooth & Quiet Operation</span>
        </div>

        <div style="background:#fff;padding:16px 20px;border-radius:16px;border:1px solid #f1f5f9;display:flex;align-items:center;gap:12px;">
            <span style="width:8px;height:8px;background:#34d399;border-radius:50%;"></span>
            <span style="font-size:14px;font-weight:500;color:#334155;">Excellent Color Consistency</span>
        </div>

        <div style="background:#fff;padding:16px 20px;border-radius:16px;border:1px solid #f1f5f9;display:flex;align-items:center;gap:12px;">
            <span style="width:8px;height:8px;background:#34d399;border-radius:50%;"></span>
            <span style="font-size:14px;font-weight:500;color:#334155;">Lightweight Construction</span>
        </div>

        <div style="background:#fff;padding:16px 20px;border-radius:16px;border:1px solid #f1f5f9;display:flex;align-items:center;gap:12px;">
            <span style="width:8px;height:8px;background:#34d399;border-radius:50%;"></span>
            <span style="font-size:14px;font-weight:500;color:#334155;">Corrosion Resistant</span>
        </div>

    </div>

</div>

                <!-- TOMBOL AKSI UTAMA (INTERAKTIF MAKSIMAL) -->
                <div class="flex items-center gap-4 mb-16">
                    <!-- Tombol Utama Solid -->
                    <a href="https://wa.me/628xxxxxxxxxx"
                       class="flex-1 bg-slate-900 hover:bg-emerald-500 text-white text-center text-sm font-bold tracking-wider uppercase py-5 px-8 rounded-full shadow-lg shadow-slate-900/10 hover:shadow-emerald-500/20 transition-all duration-300 transform hover:-translate-y-0.5">
                        Request Quote via WhatsApp
                    </a>

                    <!-- Tombol Kembali Minimalis -->
                    <a href="/products"
                       class="border border-slate-200 hover:border-slate-800 text-slate-600 hover:text-slate-900 text-sm font-bold tracking-wider uppercase py-5 px-8 rounded-full transition-all duration-300">
                        Back
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>

    <!-- OTHER PRODUCTS -->
<section class="py-10 bg-white">

    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center mb-14">
            <span class="text-emerald-500 font-semibold uppercase tracking-widest">
                Explore More Products
            </span>
            <h2 class="text-4xl font-bold text-slate-900 mt-3">
                You May Also Like
            </h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                Explore our other zipper solutions designed for various industries and applications.
            </p>
        </div>

<div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 w-full" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; width: 100%; justify-content: center;">

    <div class="group bg-white rounded-[30px] border border-gray-200 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" 
         style="position: relative; padding-bottom: 70px; display: block; width: 100%; min-height: 500px; box-sizing: border-box;">
        
        <div style="width: 100%; height: 300px; overflow: hidden; position: relative; display: block;">
            <img src="{{ asset('image/nylon.jpeg') }}" 
                 style="width: 100%; height: 100%; object-fit: cover; display: block;"
                 class="group-hover:scale-105 transition duration-300">
        </div>

        <div class="p-6" style="display: block; width: 100%; box-sizing: border-box;">
            <span class="text-xs uppercase tracking-widest text-emerald-500 font-semibold" style="display: block;">
                Zippers
            </span>
            <h3 class="text-2xl font-bold mt-3" style="display: block; color: #0f172a;">
                Nylon Zipper
            </h3>
            <p style="color: #64748b; margin-top: 12px; line-height: 1.75; font-size: 14px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                Strong and flexible zipper made from high-quality nylon material.
            </p>
        </div>

        <div style="position: absolute; bottom: 24px; left: 24px; right: 24px; display: block;">
            <a href="/products/nylon-zipper" class="inline-block text-emerald-500 font-semibold hover:text-emerald-600 transition" style="text-decoration: none; display: inline-block;">
                View Details →
            </a>
        </div>
    </div>

    <div class="group bg-white rounded-[30px] border border-gray-200 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" 
         style="position: relative; padding-bottom: 70px; display: block; width: 100%; min-height: 500px; box-sizing: border-box;">
        
        <div style="width: 100%; height: 300px; overflow: hidden; position: relative; display: block;">
            <img src="{{ asset('image/metal.jpeg') }}" 
                 style="width: 100%; height: 100%; object-fit: cover; display: block;"
                 class="group-hover:scale-105 transition duration-300">
        </div>

        <div class="p-6" style="display: block; width: 100%; box-sizing: border-box;">
            <span class="text-xs uppercase tracking-widest text-emerald-500 font-semibold" style="display: block;">
                Zippers
            </span>
            <h3 class="text-2xl font-bold mt-3" style="display: block; color: #0f172a;">
                Metal Zipper
            </h3>
            <p style="color: #64748b; margin-top: 12px; line-height: 1.75; font-size: 14px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                Premium metal zipper for fashion, bags, jackets, and industrial products.
            </p>
        </div>

        <div style="position: absolute; bottom: 24px; left: 24px; right: 24px; display: block;">
            <a href="/products/metal-zipper" class="inline-block text-emerald-500 font-semibold hover:text-emerald-600 transition" style="text-decoration: none; display: inline-block;">
                View Details →
            </a>
        </div>
    </div>

    <div class="group bg-white rounded-[30px] border border-gray-200 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" 
         style="position: relative; padding-bottom: 70px; display: block; width: 100%; min-height: 500px; box-sizing: border-box;">
        
        <div style="width: 100%; height: 300px; overflow: hidden; position: relative; display: block;">
            <img src="{{ asset('image/waterproof.jpeg') }}" 
                 style="width: 100%; height: 100%; object-fit: cover; display: block;"
                 class="group-hover:scale-105 transition duration-300">
        </div>

        <div class="p-6" style="display: block; width: 100%; box-sizing: border-box;">
            <span class="text-xs uppercase tracking-widest text-emerald-500 font-semibold" style="display: block;">
                Zippers
            </span>
            <h3 class="text-2xl font-bold mt-3" style="display: block; color: #0f172a;">
                Waterproof Zipper
            </h3>
            <p style="color: #64748b; margin-top: 12px; line-height: 1.75; font-size: 14px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                Designed to protect against water penetration in outdoor and technical applications.
            </p>
        </div>

        <div style="position: absolute; bottom: 24px; left: 24px; right: 24px; display: block;">
            <a href="/products/waterproof-zipper" class="inline-block text-emerald-500 font-semibold hover:text-emerald-600 transition" style="text-decoration: none; display: inline-block;">
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