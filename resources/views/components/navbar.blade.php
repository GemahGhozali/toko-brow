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
            <a href="{{ url('/') }}" class="text-body text-primary-900">Beranda</a>
            <a href="#tentang-kami" class="text-body text-primary-900">Tentang Kami</a>
            <a href="#merchandise" class="text-body text-primary-900">Merchandise</a>
            <a href="#tim-kami" class="text-body text-primary-900">Tim Kami</a>
            <a href="#testimoni-pelanggan" class="text-body text-primary-900">Testimoni Pelanggan</a>
            <a href="{{ url('/e-book') }}" class="text-body text-primary-900">E-Book</a>
        </nav>

    </div>
</header>