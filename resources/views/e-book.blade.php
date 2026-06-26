<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/assets/svg/logo.svg">
    <title>Toko Brow - Brownies, Koffiee and Relaxing Spot</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-primary-100">

    {{-- Navbar --}}
    <x-navbar/>

    {{-- Hero Section --}}
    <section class="px-8 py-16 max-sm:px-4">
        <div class="w-full max-w-7xl mx-auto text-center">

            <img src="/assets/svg/logo.svg" alt="Toko Brow Logo" class="h-[86px] md:h-[96px] mx-auto mb-6 lg:hidden">

            {{-- Title & Subtitle --}}
            <span class="inline-block text-badge px-4 py-2.5 mb-3 text-primary-900 bg-primary-200 rounded-full">Katalog E-Book</span>
            <h1 class="text-h1 text-primary-950 mb-3">Telusuri Lembaran Cerita dan Kreasi <br> Orisinal dari Toko Brow</h1>
            <p class="text-body text-neutral-600 mb-16 max-sm:mb-8">
                Lebih dari sekadar rasa, kami membagikan cerita dan ide lewat lembaran digital. Disini, kami mempersembahkan <br> kumpulan rilisan karya e-book orisinal yang lahir langsung dari balik dapur dan pemikiran kreatif kami
            </p>
    
            {{-- E-Book Catalogue (Placeholder) --}}
            <div class="grid grid-cols-4 gap-8 max-lg:grid-cols-2 max-sm:grid-cols-1">
                <div class="bg-neutral-300 rounded-[32px] aspect-[12/16] grid place-content-center">
                    <img src="/assets/image/image-placeholder.webp" alt="Gambar Sampul E-Book Toko Brow">
                </div>
                <div class="bg-neutral-300 rounded-[32px] aspect-[12/16] grid place-content-center">
                    <img src="/assets/image/image-placeholder.webp" alt="Gambar Sampul E-Book Toko Brow">
                </div>
                <div class="bg-neutral-300 rounded-[32px] aspect-[12/16] grid place-content-center">
                    <img src="/assets/image/image-placeholder.webp" alt="Gambar Sampul E-Book Toko Brow">
                </div>
                <div class="bg-neutral-300 rounded-[32px] aspect-[12/16] grid place-content-center">
                    <img src="/assets/image/image-placeholder.webp" alt="Gambar Sampul E-Book Toko Brow">
                </div>
            </div>

        </div>
    </section>

    {{-- Footer --}}
    <x-footer/>
</body>
</html>