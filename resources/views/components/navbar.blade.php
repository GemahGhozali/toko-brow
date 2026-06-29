{{-- Floating Hamburger Menu --}}
<button id="mobile-menu-trigger" class="size-12 bg-white border border-neutral-300 rounded-full grid place-content-center fixed bottom-6 right-6 z-50 shadow-[0px_0px_24px_0px_rgba(0,_0,_0,_0.3)] lg:hidden transition-transform active:scale-95 cursor-pointer">
    <img src="/assets/svg/menu-icon.svg" alt="Menu Icon" class="size-6">
</button>

{{-- Mobile Navbar (Collapsed) --}}
<div id="mobile-drawer" class="fixed inset-0 z-[100] invisible pointer-events-none transition-all duration-300">

    {{-- Backdrop --}}
    <div id="mobile-drawer-backdrop" class="absolute inset-0 bg-primary-950/40 backdrop-blur-sm opacity-0 transition-opacity duration-300"></div>
    
    <div id="mobile-drawer-content" class="absolute right-0 top-0 bottom-0 w-full max-w-[320px] bg-[#F9F6F0] p-8 flex flex-col justify-between shadow-2xl translate-x-full transition-transform duration-300">
        <div>
            {{-- Toko Brow Logo & Close Button --}}
            <div class="flex justify-between items-start mb-8">
                <img src="/assets/svg/logo.svg" alt="Toko Brow Logo" class="h-16">
                <button id="mobile-menu-close" class="size-10 text-primary-950 hover:bg-primary-900/10 rounded-full grid place-content-center transition-colors cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{-- Navlinks --}}
            <nav class="flex flex-col gap-5 text-left">
                <a href="{{ url('/') }}" class="mobile-nav-link text-xl font-heading text-primary-950 border-b border-neutral-300 pb-2">Beranda</a>
                <a href="{{ url('/gallery') }}" class="mobile-nav-link text-xl font-heading text-primary-950 border-b border-neutral-300 pb-2">Gallery</a>
                <a href="{{ url('/e-book') }}" class="mobile-nav-link text-xl font-heading text-primary-950 border-b border-neutral-300 pb-2">E-Book</a>
            </nav>
        </div>

        {{-- Login & Register Button --}}
        <div class="space-y-6">
            <div class="flex flex-col gap-3 w-full">
                <a href="{{ url('/register') }}" class="w-full py-3 text-center rounded-lg bg-primary-800 text-white font-medium text-btn transition-colors active:bg-primary-900 shadow-sm">
                    Register
                </a>
                <a href="{{ url('/login') }}" class="w-full py-3 text-center rounded-lg border border-primary-800 text-primary-800 text-btn transition-colors active:bg-primary-800/5">
                    Login
                </a>
            </div>

            {{-- Breakline --}}
            <div class="w-full border-b border-neutral-300"></div>

            <div class="space-y-4">

                {{-- Social Media --}}
                <div class="flex gap-2 justify-center">
                    <a href="https://share.google/IrjZ87WYlHWj9ZWxj" target="_blank" class="size-12 grid place-content-center bg-primary-800 rounded-full transition-transform active:scale-95">
                        <img src="/assets/svg/google-icon.svg" alt="Google Toko Brow">
                    </a>
                    <a href="https://www.instagram.com/toko.brow/" target="_blank" class="size-12 grid place-content-center bg-primary-800 rounded-full transition-transform active:scale-95">
                        <img src="/assets/svg/instagram-icon.svg" alt="Instagram Toko Brow">
                    </a>
                    <a href="https://wa.me/628128328317" target="_blank" class="size-12 grid place-content-center bg-primary-800 rounded-full transition-transform active:scale-95">
                        <img src="/assets/svg/whatsapp-icon.svg" alt="Whatsapp Toko Brow">
                    </a>
                </div>

                {{-- Copyright --}}
                <p class="text-sm font-body text-neutral-600 text-center">&copy; Copyright {{ date('Y') }} Toko Brow. <br> All rights reserved.</p>
            </div>
        </div>
    </div>
</div>

{{-- Desktop Navbar --}}
<header class="w-full mt-6 px-8 max-lg:hidden">
    <div class="w-full max-w-7xl mx-auto flex items-center gap-6">

        {{-- Toko Brow Logo --}}
        <img src="/assets/svg/logo.svg" alt="Toko Brow Logo" class="h-[128px]">
    
        <div class="grow space-y-3">

            <div class="flex justify-between items-end gap-4">

                {{-- Brand Name --}}
                <h3 class="text-h3 text-primary-950">Toko Brow</h3>

                {{-- Login & Register Button --}}
                <div class="flex gap-2 items-center">
                    <a href="{{ url('/login') }}" class="text-primary-900 font-medium text-btn transition-colors duration-300 px-5 py-3 border border-primary-800 text-primary-800 rounded-full">
                        Login
                    </a>
                    <a href="{{ url('/register') }}" class="bg-primary-800 hover:bg-primary-900 text-white text-btn px-5 py-3 rounded-full">
                        Register
                    </a>
                </div>

            </div>
    
            {{-- Breakline --}}
            <div class="w-full border-t border-primary-900 rounded-full"></div>
            
            {{-- Navlinks --}}
            <nav class="flex gap-6">
                <a href="{{ url('/') }}" class="text-body {{ Request::is('/') ? 'text-primary-600 font-bold' : 'text-primary-900' }}">Beranda</a>
                <a href="{{ url('/gallery') }}" class="text-body {{ Request::is('gallery') ? 'text-primary-600 font-bold' : 'text-primary-900' }}">Gallery</a>
                <a href="{{ url('/e-book') }}" class="text-body {{ Request::is('e-book') ? 'text-primary-600 font-bold' : 'text-primary-900' }}">E-Book</a>
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
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');

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

        triggerBtn.addEventListener('click', openDrawer);
        closeBtn.addEventListener('click', closeDrawer);
        backdrop.addEventListener('click', closeDrawer);
        mobileLinks.forEach(link => link.addEventListener('click', closeDrawer));
    });
</script>