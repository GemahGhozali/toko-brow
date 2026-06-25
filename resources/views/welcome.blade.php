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

    $chunks = collect($testimonials)->chunk(3);
    $rowTop = $chunks->get(0)->values();
    $rowBottom = $chunks->get(1)->values();
@endphp

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
    <header class="w-full max-w-7xl mx-auto mt-6 flex items-center gap-6">

        {{-- Toko Brow Logo --}}
        <img src="/assets/svg/logo.svg" alt="Toko Brow Logo" class="h-[128px]">

        <div class="grow space-y-3">

            {{-- Top Container --}}
            <div class="flex justify-between items-end">
                <h3 class="text-h3 text-primary-950">Toko Brow</h3>

                {{-- Social Media --}}
                <div class="flex gap-2">
                    <a href="#" class="size-12 grid place-content-center bg-primary-800 rounded-full">
                        <img src="/assets/svg/tiktok-icon.svg" alt="Tiktok Toko Brow">
                    </a>
                    <a href="#" class="size-12 grid place-content-center bg-primary-800 rounded-full">
                        <img src="/assets/svg/instagram-icon.svg" alt="Instagram Toko Brow">
                    </a>
                    <a href="#" class="size-12 grid place-content-center bg-primary-800 rounded-full">
                        <img src="/assets/svg/whatsapp-icon.svg" alt="Whatsapp Toko Brow">
                    </a>
                </div>
            </div>

            {{-- Breakline --}}
            <div class="w-full border border-primary-900 rounded-full"></div>

            {{-- Navlinks --}}
            <nav class="flex gap-6">
                <a href="#hero" class="text-body text-primary-900">Beranda</a>
                <a href="#tentang-kami" class="text-body text-primary-900">Tentang Kami</a>
                <a href="#merchandise" class="text-body text-primary-900">Merchandise</a>
                <a href="#tim-kami" class="text-body text-primary-900">Tim Kami</a>
                <a href="#testimoni-pelanggan" class="text-body text-primary-900">Testimoni Pelanggan</a>
                <a href="#hero" class="text-body text-primary-900">E-Book</a>
            </nav>

        </div>
    </header>

    {{-- Hero Section --}}
    <section id="#hero" class="w-full max-w-7xl mx-auto flex items-center pt-16">

        {{-- Section Content --}}
        <div class="flex-1">

            {{-- Title & Subtitle --}}
            <span class="inline-block text-badge px-4 py-2.5 mb-3 text-primary-900 bg-primary-200 rounded-full">Brownies, Koffiee and Relaxing Spot</span>
            <h1 class="text-h1 text-primary-950 mb-4">Ruang Tenang di Tengah Padatnya Rutinitas</h1>
            <p class="text-body text-neutral-600 mb-6">Temukan sudut tersembunyi yang nyaman untuk beristirahat. Nikmati ketenangan ruang ditemani aroma kopi yang menenangkan dan kelezatan brownies yang dibuat sepenuh hati.</p>

            {{-- CTA Buttons --}}
            <div class="flex items-center gap-8 mb-16">
                <a href="#merchandise" class="bg-primary-800 text-white rounded-xl text-btn-lg py-4 pl-6 pr-4 flex items-center gap-2">
                    <span>Lihat Produk Kami</span>
                    <img src="/assets/svg/arrow-right-icon.svg" alt="Arrow Right Icon">
                </a>
                <a href="#merchandise" class="text-primary-800 text-btn-lg flex items-center gap-2">
                    <img src="/assets/svg/play-icon.svg" alt="Play Icon">
                    <span>Cerita Kami</span>
                </a>
            </div>

            {{-- Social Proof --}}
            <div class="flex items-center gap-4">
                <div class="flex">
                    <img src="/assets/image/image-placeholder.webp" alt="Toko Brow Client Image Placholder" class="size-[50px] rounded-full border border-neutral-400">
                    <img src="/assets/image/image-placeholder.webp" alt="Toko Brow Client Image Placholder" class="size-[50px] rounded-full border border-neutral-400 -ml-4">
                    <img src="/assets/image/image-placeholder.webp" alt="Toko Brow Client Image Placholder" class="size-[50px] rounded-full border border-neutral-400 -ml-4">
                </div>
                <div class="space-y-0.5">
                    <div class="text-body font-bold text-primary-950 flex items-center gap-1.5">
                        <img src="/assets/svg/star-icon.svg" alt="Star Icon" class="size-4">
                        <p>4.8 Total Rating</p>
                    </div>
                    <p class="text-body text-neutral-600">Ulasan nyata dari pelanggan setia kami!</p>
                </div>
            </div>

        </div>

        {{-- Section Image --}}
        <div class="flex-1">
            <img src="/assets/image/toko-brow-cafe.webp" alt="Toko Brow">
        </div>

    </section>

    {{-- Tagline Ribbon --}}
    <div class="relative my-16">
        <div class="h-20 bg-primary-800 absolute inset-0 rotate-[-2.5deg] -skew-x-[4deg]"></div>
        <div class="overflow-hidden bg-primary-950 px-6 py-4 relative z-10">
            <div class="flex flex-nowrap justify-start gap-8 text-nowrap animate-tagline-left">
                @for ($i = 0; $i < 4; $i++)
                    <h3 class="text-h3 text-primary-50">Brownies</h3>
                    <img src="/assets/svg/four-star-icon.svg" alt="Four Star Icon">
                    <h3 class="text-h3 text-primary-50">Koffiee</h3>
                    <img src="/assets/svg/four-star-icon.svg" alt="Four Star Icon">
                    <h3 class="text-h3 text-primary-50">Relaxing Spot</h3>
                    <img src="/assets/svg/four-star-icon.svg" alt="Four Star Icon">
                @endfor
            </div>
        </div>
    </div>

    {{-- Tentang Kami Section --}}
    <section id="#tentang-kami" class="w-full max-w-7xl mx-auto flex py-16 gap-16">

        {{-- Section Image --}}
        <div class="grow-0 basis-[584px] rounded-4xl bg-cover bg-center bg-no-repeat" style="background-image: url('/assets/image/toko-brow-crew-table.webp');"></div>

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
                <div class="w-[3px] rounded-full bg-primary-200"></div>
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
            <a href="#merchandise" class="w-fit bg-primary-800 text-white rounded-xl text-btn-lg py-4 pl-6 pr-4 flex items-center gap-2">
                <span>Lihat Selengkapnya</span>
                <img src="/assets/svg/arrow-right-icon.svg" alt="Arrow Right Icon">
            </a>

        </div>

    </section>

    {{-- Merchandise Section --}}
    <section id="#merchandise" class="w-full bg-primary-950 py-32 my-16">
        <div class="w-full max-w-7xl mx-auto text-center">

            {{-- Title & Subtitle --}}
            <span class="inline-block text-badge px-4 py-2.5 mb-3 text-primary-900 bg-primary-200 rounded-full">Merhcandise</span>
            <h2 class="text-h2 text-primary-50 mb-2">Rilisan Karya Eksklusif dari Toko Brow</h2>
            <p class="text-body text-primary-200 mb-8">
                Merchandise edisi terbatas dengan desain ilustrasi unik yang dikemas premium dan estetik!
            </p>
            
            {{-- Merhcandise Catalogue --}}
            <div class="grid grid-cols-3 gap-8 text-start">
                <div class="rounded-[32px] bg-primary-50 border border-primary-100 overflow-hidden relative">
                    <img src="/assets/image/brow-sand.webp" alt="T-Shirt yang simpel dan nyaman dengan bahan 100% katun premium">
                    <div class="p-6 flex flex-col justify-end absolute inset-0 z-10 bg-[linear-gradient(to_top,rgba(0,0,0,0.8)_0%,rgba(0,0,0,0)_60%)]">
                        <h3 class="text-h3 text-primary-50 mb-1">Brow Sand</h3>
                        <p class="text-body text-neutral-300 mb-3">T-Shirt yang simpel dan nyaman dengan bahan 100% katun premium</p>
                        <h4 class="font-body text-2xl font-semibold text-primary-300">Rp 100.000</h4>
                    </div>
                </div>
                <div class="rounded-[32px] bg-primary-50 border border-primary-100 overflow-hidden relative">
                    <img src="/assets/image/brow-black.webp" alt="T-Shirt yang simpel dan nyaman dengan bahan 100% katun premium">
                    <div class="p-6 flex flex-col justify-end absolute inset-0 z-10 bg-[linear-gradient(to_top,rgba(0,0,0,0.8)_0%,rgba(0,0,0,0)_60%)]">
                        <h3 class="text-h3 text-primary-50 mb-1">Brow Black</h3>
                        <p class="text-body text-neutral-300 mb-3">T-Shirt yang simpel dan nyaman dengan bahan 100% katun premium</p>
                        <h4 class="font-body text-2xl font-semibold text-primary-300">Rp 100.000</h4>
                    </div>
                </div>
                <div class="rounded-[32px] bg-primary-50 border border-primary-100 overflow-hidden relative">
                    <img src="/assets/image/shoulder-bag.webp" alt="Shoulder Bag yang simpel dan nyaman untuk membawa kebutuhan harian">
                    <div class="p-6 flex flex-col justify-end absolute inset-0 z-10 bg-[linear-gradient(to_top,rgba(0,0,0,0.8)_0%,rgba(0,0,0,0)_60%)]">
                        <h3 class="text-h3 text-primary-50 mb-1">Shoulder Bag</h3>
                        <p class="text-body text-neutral-300 mb-3">Shoulder Bag yang simpel dan nyaman untuk membawa kebutuhan harian</p>
                        <h4 class="font-body text-2xl font-semibold text-primary-300">Rp 150.000</h4>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Tim Kami Section --}}
    <section id="#tim-kami" class="w-full max-w-7xl mx-auto py-16">

        {{-- Title & Subtitle --}}
        <span class="inline-block text-badge px-4 py-2.5 mb-3 text-primary-900 bg-primary-200 rounded-full">Tim Kami</span>
        <h2 class="text-h2 text-primary-950 mb-2">Wajah-Wajah di Balik Toko Brow</h2>
        <p class="text-body text-neutral-600 mb-8">
            Mereka yang meramu rasa, merajut cerita, dan menuangkan kehangatan di setiap sudut Toko Brow
        </p>

        {{-- Team Images --}}
        <div class="grid grid-cols-3 gap-8">
            <div class="rounded-[32px] bg-primary-50 border border-primary-950 overflow-hidden relative">
                <img src="/assets/image/lubech.webp" alt="Lubech sebagai owner dari Toko Brow">
                <div class="p-8 flex flex-col justify-end absolute inset-0 z-10 bg-[linear-gradient(to_top,rgba(0,0,0,0.8)_0%,rgba(0,0,0,0)_60%)]">
                    <h2 class="text-h2 text-primary-50 mb-0.5">Lubech</h2>
                    <p class="font-body text-2xl font-medium text-primary-300">Owner</p>
                </div>
            </div>
            <div class="rounded-[32px] bg-primary-50 border border-primary-950 overflow-hidden relative">
                <img src="/assets/image/rahel.webp" alt="Rahel sebagai Head Chef Pastry di Toko Brow">
                <div class="p-8 flex flex-col justify-end absolute inset-0 z-10 bg-[linear-gradient(to_top,rgba(0,0,0,0.8)_0%,rgba(0,0,0,0)_60%)]">
                    <h2 class="text-h2 text-primary-50 mb-0.5">Rahel</h2>
                    <p class="font-body text-2xl font-medium text-primary-300">Head Chef Pastry</p>
                </div>
            </div>
            <div class="rounded-[32px] bg-primary-50 border border-primary-950 overflow-hidden relative">
                <img src="/assets/image/toko-brow-crew.webp" alt="Semua crew Toko Brow yang ikut terlibat di belakang layar">
                <div class="p-8 flex flex-col justify-end absolute inset-0 z-10 bg-[linear-gradient(to_top,rgba(0,0,0,0.8)_0%,rgba(0,0,0,0)_60%)]">
                    <h2 class="text-h2 text-primary-50 mb-0.5">Toko Brow Crew</h2>
                    <p class="font-body text-2xl font-medium text-primary-300">Tim Di Balik Layar</p>
                </div>
            </div>
        </div>

    </section>

    {{-- Testimoni Pelanggan Section --}}
    <section id="#testimoni-pelanggan" class="py-16 text-center">

        {{-- Title & Subtitle --}}
        <span class="inline-block text-badge px-4 py-2.5 mb-3 text-primary-900 bg-primary-200 rounded-full">Testimoni Pelanggan</span>
        <h2 class="text-h2 text-primary-950 mb-2">Apa Yang Pelanggan Katakan Tentang Kami?</h2>
        <p class="text-body text-neutral-600 mb-8">
            Kisah jujur dari mereka yang telah menemukan ketenangan ruang dan kehangatan rasa di Toko Brow
        </p>
        
        {{-- Testimonial Infinite Sliders --}}
        <div class="text-start overflow-hidden space-y-8 [mask-image:linear-gradient(to_right,transparent_0%,black_15%,black_85%,transparent_100%)]">
            <div class="flex justify-start gap-8 animate-marquee-left hover:[animation-play-state:paused]">
                @for ($i = 0; $i < 6; $i++)
                    @php $item = $rowTop[$i % 3];@endphp

                    <div class="max-w-[558px] bg-primary-50 rounded-2xl p-5 shrink-0 transition-shadow duration-300 cursor-pointer hover:ring-2 hover:ring-inset hover:ring-primary-800">
                        <h4 class="text-h4 text-primary-950 mb-3">{{ $item['title'] }}</h4>
                        <p class="text-body text-neutral-600">{{ $item['testimonial'] }}</p>
                        <hr class="border-neutral-300 my-6">
                        <div class="flex justify-between items-end">
                            <div class="flex items-center gap-3">
                                <img src="/assets/image/image-placeholder.webp" alt="Timotius Lubech - Owner dari Toko Brow" class="size-[56px] rounded-full border border-neutral-300">
                                <div class="space-y-0.5">
                                    <h5 class="text-h5 text-primary-950">{{ $item['name'] }}</h5>
                                    <p class="text-body text-neutral-600">{{ $item['role'] }}</p>
                                </div>
                            </div>
                            <div class="bg-primary-800 py-1.5 pl-2.5 pr-3 rounded-full text-badge flex items-center gap-2 text-primary-50">
                                <img src="/assets/svg/star-icon.svg" alt="Star Icon" class="size-4">
                                <span>{{ number_format($item['rating'], 1) }}</span>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="flex justify-end gap-8 animate-marquee-right hover:[animation-play-state:paused]">
                @for ($i = 0; $i < 6; $i++)
                    @php $item = $rowBottom[$i % 3];@endphp

                    <div class="max-w-[558px] bg-primary-50 rounded-2xl p-5 shrink-0 transition-shadow duration-300 cursor-pointer hover:ring-2 hover:ring-inset hover:ring-primary-800">
                        <h4 class="text-h4 text-primary-950 mb-3">{{ $item['title'] }}</h4>
                        <p class="text-body text-neutral-600">{{ $item['testimonial'] }}</p>
                        <hr class="border-neutral-300 my-6">
                        <div class="flex justify-between items-end">
                            <div class="flex items-center gap-3">
                                <img src="/assets/image/image-placeholder.webp" alt="Timotius Lubech - Owner dari Toko Brow" class="size-[56px] rounded-full border border-neutral-300">
                                <div class="space-y-0.5">
                                    <h5 class="text-h5 text-primary-950">{{ $item['name'] }}</h5>
                                    <p class="text-body text-neutral-600">{{ $item['role'] }}</p>
                                </div>
                            </div>
                            <div class="bg-primary-800 py-1.5 pl-2.5 pr-3 rounded-full text-badge flex items-center gap-2 text-primary-50">
                                <img src="/assets/svg/star-icon.svg" alt="Star Icon" class="size-4">
                                <span>{{ number_format($item['rating'], 1) }}</span>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

    </section>

    {{-- Footer --}}
    <footer class="w-full bg-primary-950 p-12 space-y-8 rounded-t-[64px]">

        {{-- Footer Header --}}
        <header class="flex justify-between items-end">

            {{-- Logo & Brand Overview --}}
            <div class="flex items-center gap-6">
                <img src="/assets/svg/logo.svg" alt="Toko Brow Logo" class="h-[132px]">
                <div class="space-y-1">
                    <h3 class="text-h3 text-primary-50">Toko Brow</h3>
                    <p class="text-body text-primary-200">
                        Ruang tenang di tengah padatnya rutinitas kota. Tempat terbaik untuk <br> menikmati kehangatan suasana dan kelembutan rasa brownies
                    </p>
                </div>
            </div>

            {{-- CTA Button --}}
            <a href="https://maps.app.goo.gl/KYKnx3eswVZzjV2J8" target="_blank" class="w-fit bg-primary-800 text-white rounded-xl text-btn-lg py-4 pl-6 pr-4 flex items-center gap-2">
                <span>Kunjungi Toko Brow Sekarang</span>
                <img src="/assets/svg/arrow-right-up-icon.svg" alt="Arrow Right Up Icon">
            </a>

        </header>

        {{-- Breakline --}}
        <hr class="border-primary-200">

        {{-- Footer Content --}}
        <div class="flex gap-24">
            <div>
                {{-- Operational Time --}}
                <h3 class="text-h3 text-primary-50 mb-4">Waktu Operasional</h3>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-center gap-1.5">
                        <img src="/assets/svg/clock-icon.svg" alt="Clock Icon">
                        <p class="text-body text-primary-200">Hari Senin - Jumat, Jam 8 Pagi s/d 10 Malam</p>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <img src="/assets/svg/clock-icon.svg" alt="Clock Icon">
                        <p class="text-body text-primary-200">Hari Sabtu & Minggu, Jam 10 Pagi s/d 10 Malam</p>
                    </li>
                </ul>
    
                {{-- Social Media --}}
                <h3 class="text-h3 text-primary-50 mb-1">Social Media</h3>
                <p class="text-body text-primary-200 mb-4">Mari terhubung dengan kami melalui sosial media!</p>
                <div class="flex gap-2 mb-12">
                    <a href="#" class="size-12 grid place-content-center bg-primary-800 rounded-full">
                        <img src="/assets/svg/tiktok-icon.svg" alt="Tiktok Toko Brow">
                    </a>
                    <a href="#" class="size-12 grid place-content-center bg-primary-800 rounded-full">
                        <img src="/assets/svg/instagram-icon.svg" alt="Instagram Toko Brow">
                    </a>
                    <a href="#" class="size-12 grid place-content-center bg-primary-800 rounded-full">
                        <img src="/assets/svg/whatsapp-icon.svg" alt="Whatsapp Toko Brow">
                    </a>
                </div>
    
                {{-- Copyright --}}
                <p class="text-body text-primary-200">Copyright © 2026 Toko Brow. All rights reserved.</p>
            </div>

            {{-- Toko Brow Location --}}
            <div class="flex-1 flex flex-col">
                <h3 class="text-h3 text-primary-50 mb-1">Lokasi Toko Brow</h3>
                <p class="text-body text-primary-200 mb-6">Vorvo, Jl. Kedondong No. 17, Gn. Kelua, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75123</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.683809472745!2d117.14574599999999!3d-0.47047979999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f0012381fe9%3A0xdf6e393887da0372!2sToko%20brow!5e0!3m2!1sid!2sid!4v1782353418686!5m2!1sid!2sid" 
                    allowfullscreen="true" 
                    loading="lazy" 
                    referrerpolicy="strict-origin-when-cross-origin"
                    class="rounded-[32px] flex-1">
                </iframe>
            </div>
        </div>
    </footer>
</body>
</html>