<button id="mobile-menu-trigger" class="size-12 bg-white border border-neutral-300 rounded-full grid place-content-center fixed bottom-6 right-6 z-50 shadow-[0px_0px_24px_0px_rgba(0,_0,_0,_0.3)] lg:hidden transition-transform active:scale-95 cursor-pointer">
    <img src="/assets/svg/menu-icon.svg" alt="Menu Icon" class="size-6">
</button>

<div id="mobile-drawer" class="fixed inset-0 z-[100] invisible pointer-events-none transition-all duration-300">
    <div id="mobile-drawer-backdrop" class="absolute inset-0 bg-primary-950/40 backdrop-blur-sm opacity-0 transition-opacity duration-300"></div>
    
    <div id="mobile-drawer-content" class="absolute right-0 top-0 bottom-0 w-full max-w-[320px] bg-[#F9F6F0] p-8 flex flex-col justify-between shadow-2xl translate-x-full transition-transform duration-300">
        
        <div>
            <div class="flex justify-between items-start mb-8">
                <img src="/assets/svg/logo.svg" alt="Toko Brow Logo" class="h-16">
                <button id="mobile-menu-close" class="size-10 text-primary-950 hover:bg-primary-900/10 rounded-full grid place-content-center transition-colors cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <nav class="flex flex-col gap-5 text-left">
                <a href="{{ url('/') }}" class="mobile-nav-link text-xl font-heading text-primary-950 border-b border-neutral-300 pb-2">Beranda</a>
                <a href="{{ url('/#tentang-kami') }}" class="mobile-nav-link text-xl font-heading text-primary-950 border-b border-neutral-300 pb-2">Tentang Kami</a>
                <a href="{{ url('/#merchandise') }}" class="mobile-nav-link text-xl font-heading text-primary-950 border-b border-neutral-300 pb-2">Merchandise</a>
                <a href="{{ url('/#tim-kami') }}" class="mobile-nav-link text-xl font-heading text-primary-950 border-b border-neutral-300 pb-2">Tim Kami</a>
                <a href="{{ url('/#testimoni-pelanggan') }}" class="mobile-nav-link text-xl font-heading text-primary-950 border-b border-neutral-300 pb-2">Testimoni Pelanggan</a>
                <a href="{{ url('/e-book') }}" class="mobile-nav-link text-xl font-heading text-primary-950 border-b border-neutral-300 pb-2">E-Book</a>
            </nav>
        </div>

        <div class="space-y-4">
            <div class="flex gap-2 justify-center">
                <a href="#" class="size-10 grid place-content-center bg-primary-800 rounded-full text-white hover:scale-105 transition-transform">
                    <img src="/assets/svg/tiktok-icon.svg" alt="Tiktok" class="size-5">
                </a>
                <a href="#" class="size-10 grid place-content-center bg-primary-800 rounded-full text-white hover:scale-105 transition-transform">
                    <img src="/assets/svg/instagram-icon.svg" alt="Instagram" class="size-5">
                </a>
                <a href="#" class="size-10 grid place-content-center bg-primary-800 rounded-full text-white hover:scale-105 transition-transform">
                    <img src="/assets/svg/whatsapp-icon.svg" alt="Whatsapp" class="size-5">
                </a>
            </div>
            <p class="text-sm font-body text-neutral-600 text-center">&copy; Copyright {{ date('Y') }} Toko Brow. <br> All rights reserved.</p>
        </div>

    </div>
</div>

<header class="w-full mt-6 px-8 max-lg:hidden">
    <div class="w-full max-w-7xl mx-auto flex items-center gap-6">

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
                <a href="{{ url('/#tentang-kami') }}" class="text-body text-primary-900">Tentang Kami</a>
                <a href="{{ url('/#merchandise') }}" class="text-body text-primary-900">Merchandise</a>
                <a href="{{ url('/#tim-kami') }}" class="text-body text-primary-900">Tim Kami</a>
                <a href="{{ url('/#testimoni-pelanggan') }}" class="text-body text-primary-900">Testimoni Pelanggan</a>
                <a href="{{ url('/e-book') }}" class="text-body text-primary-900">E-Book</a>
            </nav>
        </div>

    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const triggerBtn = document.getElementById('mobile-menu-trigger');
        const closeBtn = document.getElementById('mobile-menu-close');
        const drawer = document.getElementById('mobile-drawer');
        const backdrop = document.getElementById('mobile-drawer-backdrop');
        const content = document.getElementById('mobile-drawer-content');
        const navLinks = document.querySelectorAll('.mobile-nav-link');

        function openDrawer() {
            drawer.classList.remove('invisible', 'pointer-events-none');

            backdrop.classList.remove('opacity-0');
            backdrop.classList.add('opacity-100');

            content.classList.remove('translate-x-full');
            content.classList.add('translate-x-0');

            document.body.classList.add('overflow-hidden');
        }

        function closeDrawer() {
            backdrop.classList.remove('opacity-100');
            backdrop.classList.add('opacity-0');
            
            content.classList.remove('translate-x-0');
            content.classList.add('translate-x-full');
    
            document.body.classList.remove('overflow-hidden');

            setTimeout(() => drawer.classList.add('invisible', 'pointer-events-none'), 300);
        }

        // Event Listeners
        triggerBtn.addEventListener('click', openDrawer);
        closeBtn.addEventListener('click', closeDrawer);
        backdrop.addEventListener('click', closeDrawer);
        navLinks.forEach(link => link.addEventListener('click', closeDrawer));
    });
</script>