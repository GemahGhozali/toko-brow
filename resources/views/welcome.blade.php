@php
    $testimonials = [
        [
            'title' => 'Pengalaman yang Berkesan',
            'testimonial' => 'Tempatnya memang minimalis tapi punya karakter yang kuat banget. Perpaduan rasa menu dan keramahan stafnya bikin tempat ini punya nilai lebih. Pasti bakal balik lagi!',
            'name' => 'Damar Elvano Putra',
            'role' => 'Pelanggan Setia Toko Brow',
            'rating' => 4.5
        ],
        [
            'title' => 'Tempat Tenang untuk WFC',
            'testimonial' => 'Tempatnya tenang banget buat nyelesaiin tugas kuliah ataupun kerjaan, ambience-nya dapet banget. Bersih, rapi, estetik juga tempatnya. Highly recommended!',
            'name' => 'Zayyan Farrel Aditya',
            'role' => 'Pelanggan Setia Toko Brow',
            'rating' => 4.7
        ],
        [
            'title' => 'Perpaduan Sempurna Brownies dan Kopi',
            'testimonial' => 'Browniesnya enak bgt ga bikin eneg manisnya pas, dan kopinya juga enak ga terlalu strong, pas bgt buat nemenin santai sore. Sukses terus Toko Brow!',
            'name' => 'Bima Satya Anggara',
            'role' => 'Pelanggan Setia Toko Brow',
            'rating' => 4.8
        ],
        [
            'title' => 'Desain Estetik yang Homey',
            'testimonial' => 'Suka banget sama interior kayunya yang bikin keliatan hangat. Tempatnya gak begitu luas tapi penataannya pas banget jadi berasa lega dan super nyaman.',
            'name' => 'Rafi Ramadhan Siregar',
            'role' => 'Pelanggan Setia Toko Brow',
            'rating' => 4.9
        ],
        [
            'title' => 'Hidden Gem di Tengah Kota',
            'testimonial' => 'Gak nyangka ada tempat se-cozy ini tersembunyi di Samarinda. Pas banget buat yang pengen menyendiri, baca buku, atau nyari inspirasi baru tanpa keganggu bisingnya jalanan.',
            'name' => 'Keanu Dimas Nugroho',
            'role' => 'Pelanggan Setia Toko Brow',
            'rating' => 5.0
        ],
        [
            'title' => 'Pelayanan Super Ramah',
            'testimonial' => 'Baristanya ramah-ramah banget, ditanya rekomendasi menu langsung dijelasin detail. Tempatnya juga bersih dan protokol kebersihannya terjaga.',
            'name' => 'Zayyan Farrel Aditya',
            'role' => 'Pelanggan Setia Toko Brow',
            'rating' => 4.6
        ]
    ];

    $merchandise = [
        [
            'title' => 'Brow Sand',
            'description' => 'T-Shirt yang simpel dan nyaman dengan bahan 100% katun premium',
            'price' => 'Rp 100.000',
            'image' => '/assets/image/brow-sand.webp'
        ],
        [
            'title' => 'Brow Black',
            'description' => 'T-Shirt yang simpel dan nyaman dengan bahan 100% katun premium',
            'price' => 'Rp 100.000',
            'image' => '/assets/image/brow-black.webp'
        ],
        [
            'title' => 'Shoulder Bag',
            'description' => 'Shoulder Bag yang simpel dan nyaman untuk membawa kebutuhan harian',
            'price' => 'Rp 150.000',
            'image' => '/assets/image/shoulder-bag.webp'
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/assets/svg/logo.svg">
    <title>Toko Brow - Brownies, Koffiee and Relaxing Spot</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-primary-100">
    <main class="overflow-hidden">
    
        {{-- Navbar --}}
        <x-navbar/>
    
        {{-- Hero Section --}}
        <section class="pt-16 max-sm:px-6 px-8 max-lg:pt-8">
            <div class="w-full max-w-7xl mx-auto flex items-center lg:gap-6 max-lg:flex-col">
        
                {{-- Section Content --}}
                <div class="flex-1 max-lg:text-center">

                    <img src="/assets/svg/logo.svg" alt="Toko Brow Logo" class="h-[86px] md:h-[96px] mx-auto mb-6 lg:hidden">
        
                    {{-- Title & Subtitle --}}
                    <span class="inline-block text-badge px-4 py-2.5 mb-3 text-primary-900 bg-primary-200 rounded-full max-sm:px-3 max-sm:py-2">Brownies, Koffiee and Relaxing Spot</span>
                    <h1 class="text-h1 text-primary-950 mb-4">Ruang Tenang di Tengah Padatnya Rutinitas</h1>
                    <p class="text-body text-neutral-600 mb-6">Temukan sudut tersembunyi yang nyaman untuk beristirahat. Nikmati ketenangan ruang ditemani aroma kopi yang menenangkan dan kelezatan brownies yang dibuat sepenuh hati.</p>
        
                    {{-- CTA Buttons --}}
                    <div class="flex items-center gap-8 mb-16 max-sm:flex-col max-sm:gap-6 max-sm:*:w-full max-lg:justify-center max-lg:mb-6">
                        <a href="#merchandise" class="bg-primary-800 hover:bg-primary-900 hover:gap-3 duration-300 text-white rounded-lg text-btn-lg py-4 pl-6 pr-4 flex justify-center items-center gap-2">
                            <span>Lihat Produk Kami</span>
                            <img src="/assets/svg/arrow-right-icon.svg" alt="Arrow Right Icon">
                        </a>
                        <a href="#tentang-kami" class="text-primary-800 text-btn-lg flex justify-center items-center gap-2 group hover:text-primary-900 hover:gap-3 duration-300">
                            <img src="/assets/svg/play-icon.svg" alt="Play Icon" class="group-hover:scale-110 duration-300">
                            <span>Cerita Kami</span>
                        </a>
                    </div>
        
                </div>
        
                {{-- Section Image --}}
                <div class="flex-1">
                    <img src="/assets/image/toko-brow-cafe.webp" alt="Toko Brow">
                </div>
        
            </div>
        </section>
    
        {{-- Tentang Kami Section --}}
        <section id="tentang-kami" class="px-8 py-32 max-lg:pb-8 max-lg:pt-16 max-sm:px-6 max-sm:pb-6">
            <div class="w-full max-w-7xl mx-auto flex gap-16 max-md:gap-6 max-lg:flex-col max-xl:gap-8">
    
                {{-- Section Image --}}
                <div class="group relative flex-1 rounded-4xl max-lg:aspect-[13/16] max-lg:order-1 overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-transform duration-500 group-hover:scale-110" 
                        style="background-image: url('/assets/image/toko-brow-crew-table.webp');">
                    </div>
                </div>
        
                {{-- Section Content --}}
                <div class="flex-1">
        
                    {{-- Title & Subtitle --}}
                    <span class="inline-block text-badge px-4 py-2.5 mb-3 text-primary-900 bg-primary-200 rounded-full">Tentang Kami</span>
                    <h2 class="text-h2 text-primary-950 mb-4">Bagaimana Sejarah Berdirinya Toko Brow?</h2>
                    <p class="text-body text-neutral-600 mb-6">
                        Berawal dari sebuah dapur rumah di <b>Bandung pada tahun 2005</b> dengan nama <b>Atika Brownies</b>, kami merintis perjalanan dari sebuah oven besi tua dan keyakinan akan cita rasa yang dibuat sepenuh hati. Kini, kami bertransformasi menjadi <b>Toko Brow</b>. Kami memadukan kelezatan autentik brownies klasik legendaris khas Bandung dengan kehangatan kopi pilihan. Di ruang baru ini, kami hadir untuk :
                    </p>
        
                    {{-- Motivation List --}}
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-center gap-1.5">
                            <img src="/assets/svg/check-icon.svg" alt="Check Icon">
                            <p class="text-body font-medium text-primary-950">Menghadirkan kehangatan rumah di setiap sudut ruangan.</p>
                        </li>
                        <li class="flex items-center gap-1.5">
                            <img src="/assets/svg/check-icon.svg" alt="Check Icon">
                            <p class="text-body font-medium text-primary-950">Menyatukan kelezatan seni rasa dan kenyamanan seni suasana.</p>
                        </li>
                        <li class="flex items-center gap-1.5">
                            <img src="/assets/svg/check-icon.svg" alt="Check Icon">
                            <p class="text-body font-medium text-primary-950">Menjadi ruang tumbuh bagi cerita, gagasan, dan ide baru.</p>
                        </li>
                    </ul>
        
                    {{-- Owner Quote --}}
                    <div class="flex gap-6 mb-10">
                        <div class="w-1 rounded-full bg-primary-300"></div>
                        <div class="py-3 space-y-8">
                            <h4 class="text-h4 text-primary-950">“Toko Brow bukan hanya sekedar tempat untuk singgah, tapi tempat dimana cerita baru di mulai.”</h4>
                            <div class="flex items-center gap-3">
                                <img src="/assets/image/lubech-quote.webp" alt="Timotius Lubech - Owner dari Toko Brow" class="size-16 rounded-full border border-neutral-300">
                                <div class="space-y-0.5">
                                    <h5 class="text-h5 text-primary-950">Timotius Lubech</h5>
                                    <p class="text-body text-neutral-600">Owner dari Toko Brow</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    {{-- CTA Button --}}
                    <a href="https://www.instagram.com/reels/DZd4abNKLnK/" target="_blank" class="w-fit bg-primary-800 hover:bg-primary-900 hover:gap-3 duration-300 text-white rounded-xl text-btn-lg py-4 pl-6 pr-4 flex justify-center items-center gap-2 max-md:w-full">
                        <span>Lihat Selengkapnya</span>
                        <img src="/assets/svg/arrow-right-icon.svg" alt="Arrow Right Icon">
                    </a>
        
                </div>
    
            </div>
    
        </section>

        {{-- Merchandise Section --}}
        <section id="merchandise" class="w-full bg-primary-950 py-32 px-8 max-sm:px-6 max-md:py-16">
            <div class="w-full max-w-7xl mx-auto text-center">

                {{-- Title & Subtitle --}}
                <span class="inline-block text-badge px-4 py-2.5 mb-3 text-primary-900 bg-primary-200 rounded-full">Merhcandise</span>
                <h2 class="text-h2 text-primary-50 mb-8 max-sm:mb-6">Rilisan Karya Eksklusif dari Toko Brow</h2>
                
                {{-- Merhcandise Catalogue --}}
                <div class="relative max-sm:mx-4">
                    
                    <button class="swiper-prev-btn absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1/2 z-20 size-12 bg-primary-800 grid place-content-center cursor-pointer rounded-full max-sm:size-9">
                        <img src="/assets/svg/chevron-left-icon.svg" alt="Chevron Left Icon" class="max-sm:size-6">
                    </button>

                    <button class="swiper-next-btn absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 z-20 size-12 bg-primary-800 grid place-content-center cursor-pointer rounded-full max-sm:size-9">
                        <img src="/assets/svg/chevron-right-icon.svg" alt="Chevron Right Icon" class="max-sm:size-6">
                    </button>

                    <div id="merchandise-swiper" class="swiper w-full overflow-hidden">
                        <div class="swiper-wrapper text-start">
                            @foreach ($merchandise as $item)
                                <div class="swiper-slide">
                                    <div class="rounded-[32px] bg-primary-50 border border-primary-100 overflow-hidden relative w-full aspect-[4/5] md:aspect-auto group cursor-pointer">
                                        <img src="{{ $item['image'] }}" alt="{{ $item['description'] }}" class="w-full h-full object-cover group-hover:scale-110 duration-500">
                                        <div class="p-6 flex flex-col justify-end absolute inset-0 z-10 bg-[linear-gradient(to_top,rgba(0,0,0,0.8)_0%,rgba(0,0,0,0)_60%)] max-sm:p-4">
                                            <h3 class="text-h3 text-primary-50 mb-1">{{ $item['title'] }}</h3>
                                            <h4 class="font-body text-2xl font-semibold text-primary-300 max-sm:text-xl">{{ $item['price'] }}</h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </section>
    
        {{-- Tim Kami Section --}}
        <section id="tim-kami" class="pt-32 pb-16 px-8 max-sm:px-6 max-lg:py-16 max-lg:pb-8">
            <div class="w-full max-w-7xl mx-auto text-center">
                
                {{-- Title & Subtitle --}}
                <span class="inline-block text-badge px-4 py-2.5 mb-3 text-primary-900 bg-primary-200 rounded-full">Tim Toko Brow</span>
                <h2 class="text-h2 text-primary-950 mb-8 max-sm:mb-6">Kenali Wajah-Wajah di Balik Toko Brow</h2>
        
                {{-- Team Images --}}
                <div class="text-start grid grid-cols-3 gap-8 max-sm:gap-6 max-sm:grid-cols-1 max-lg:grid-cols-2 max-lg:grid-rows-2 max-lg:gap-6">

                    <div class="rounded-[32px] bg-primary-50 border border-primary-950 overflow-hidden relative group">
                        <img src="/assets/image/lubech.webp" alt="Lubech sebagai owner dari Toko Brow" class="size-full object-cover duration-500 group-hover:scale-110">
                        <div class="p-8 flex flex-col justify-end absolute inset-0 z-10 bg-[linear-gradient(to_top,rgba(0,0,0,0.8)_0%,rgba(0,0,0,0)_60%)] max-sm:p-6">
                            <h2 class="text-h2 text-primary-50 mb-1">Lubech</h2>
                            <p class="font-body text-2xl font-medium text-primary-300 max-sm:text-xl">Owner</p>
                        </div>
                    </div>

                    <div class="rounded-[32px] bg-primary-50 border border-primary-950 overflow-hidden relative group">
                        <img src="/assets/image/rahel.webp" alt="Rahel sebagai Head Chef Pastry di Toko Brow" class="size-full object-cover duration-500 group-hover:scale-110">
                        <div class="p-8 flex flex-col justify-end absolute inset-0 z-10 bg-[linear-gradient(to_top,rgba(0,0,0,0.8)_0%,rgba(0,0,0,0)_60%)] max-sm:p-6">
                            <h2 class="text-h2 text-primary-50 mb-1">Rahel</h2>
                            <p class="font-body text-2xl font-medium text-primary-300 max-sm:text-xl">Head Chef Pastry</p>
                        </div>
                    </div>

                    <div class="rounded-[32px] bg-primary-50 border border-primary-950 overflow-hidden relative sm:max-lg:col-span-2 sm:max-lg:aspect-[16/10] group">
                        <img src="/assets/image/toko-brow-crew.webp" alt="Semua crew Toko Brow yang ikut terlibat di belakang layar" class="size-full object-cover sm:max-lg:object-[0_-200px] duration-500 group-hover:scale-110">
                        <div class="p-8 flex flex-col justify-end absolute inset-0 z-10 bg-[linear-gradient(to_top,rgba(0,0,0,0.8)_0%,rgba(0,0,0,0)_60%)] max-sm:p-6">
                            <h2 class="text-h2 text-primary-50 mb-1">Toko Brow Crew</h2>
                            <p class="font-body text-2xl font-medium text-primary-300 max-sm:text-xl">Tim Di Balik Layar</p>
                        </div>
                    </div>
                </div>
    
            </div>
        </section>
    
       {{-- Testimoni Pelanggan Section --}}
        <section id="testimoni-pelanggan" class="py-16 max-lg:py-8 overflow-x-hidden w-full">
            
            <div class="px-8 max-sm:px-4">
                {{-- Header Container --}}
                <div class="w-full max-w-7xl mx-auto flex flex-col lg:flex-row lg:justify-between lg:items-end mb-8 max-sm:mb-6 gap-6">
                    <div class="max-lg:text-center">
                        <span class="inline-block text-badge px-4 py-2.5 mb-3 text-primary-900 bg-primary-200 rounded-full">Testimoni Pelanggan</span>
                        <h2 class="text-h2 text-primary-950">Pendapat Jujur Pelanggan Tentang Kami!</h2>
                    </div>
                    
                    {{-- Desktop Prev & Next Button --}}
                    <div class="hidden lg:flex gap-2">
                        <button id="testimonial-prev-desktop" class="size-12 bg-primary-800 text-primary-50 grid place-content-center cursor-pointer rounded-full transition-all hover:bg-primary-900 active:scale-95 shadow-sm">
                            <img src="/assets/svg/chevron-left-icon.svg" alt="Chevron Left Icon">
                        </button>
                        <button id="testimonial-next-desktop" class="size-12 bg-primary-800 text-primary-50 grid place-content-center cursor-pointer rounded-full transition-all hover:bg-primary-900 active:scale-95 shadow-sm">
                            <img src="/assets/svg/chevron-right-icon.svg" alt="Chevron Right Icon">
                        </button>
                    </div>
                </div>
            </div>

            {{-- Swiper Container --}}
            <div id="testimonial-swiper" class="swiper w-full invisible-scrollbar [mask-image:linear-gradient(to_right,transparent_0%,black_15%,black_85%,transparent_100%)] max-sm:[mask-image:none]">
                <div class="swiper-wrapper text-start items-stretch">
                    
                    @foreach ($testimonials as $item)
                        <div class="swiper-slide !h-auto max-w-[558px] flex select-none px-4 max-sm:px-6 max-sm:text-center">
                            <div class="w-full h-full bg-primary-50 rounded-2xl p-6 border border-neutral-200/60 transition-all duration-300 hover:ring-2 hover:ring-inset hover:ring-primary-800 flex flex-col justify-between">
                                <div>
                                    <h4 class="text-h4 text-primary-950 mb-3">{{ $item['title'] }}</h4>
                                    <p class="text-body text-neutral-600 leading-relaxed mb-6">{{ $item['testimonial'] }}</p>
                                </div>
                                <div class="mt-auto">
                                    <hr class="border-neutral-300 mb-6">
                                    <div class="flex sm:justify-between sm:items-end max-sm:flex-col max-sm:items-center max-sm:gap-4">
                                        <div class="flex items-center gap-3 max-sm:flex-col max-sm:items-center">
                                            <img src="/assets/image/image-placeholder.webp" alt="{{ $item['name'] }}" class="size-[56px] rounded-full border border-neutral-300 object-cover">
                                            <div class="space-y-0.5">
                                                <h5 class="text-h5 text-primary-950 font-bold">{{ $item['name'] }}</h5>
                                                <p class="text-body text-neutral-600 text-sm">{{ $item['role'] }}</p>
                                            </div>
                                        </div>
                                        <div class="bg-primary-900 py-1.5 pl-2.5 pr-3 rounded-full text-badge flex items-center gap-2 text-primary-50 font-medium whitespace-nowrap">
                                            <img src="/assets/svg/star-icon.svg" alt="Star Icon" class="size-4">
                                            <span>{{ number_format($item['rating'], 1) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            {{-- Mobile Prev & Next Button --}}
            <div class="w-full max-w-7xl mx-auto px-8 max-sm:px-4">
                <div class="flex lg:hidden gap-2 justify-center mt-10">
                    <button id="testimonial-prev-mobile" class="size-12 bg-primary-800 text-primary-50 grid place-content-center cursor-pointer rounded-full transition-all hover:bg-primary-900 active:scale-95 shadow-sm">
                        <img src="/assets/svg/chevron-left-icon.svg" alt="Chevron Left Icon">
                    </button>
                    <button id="testimonial-next-mobile" class="size-12 bg-primary-800 text-primary-50 grid place-content-center cursor-pointer rounded-full transition-all hover:bg-primary-900 active:scale-95 shadow-sm">
                        <img src="/assets/svg/chevron-right-icon.svg" alt="Chevron Right Icon">
                    </button>
                </div>
            </div>

        </section>
    
        {{-- Footer --}}
        <x-footer/>
    </main>

</body>
</html>