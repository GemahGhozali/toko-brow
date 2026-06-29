<footer class="w-full bg-primary-950 p-12 space-y-8 rounded-t-[64px] max-md:p-6 max-md:space-y-6 max-md:rounded-t-[32px] max-md:pt-8 max-lg:p-8">

    {{-- Footer Header --}}
    <header class="flex justify-between gap-6 sm:items-end max-lg:flex-col max-lg:gap-6">

        {{-- Logo & Brand Overview --}}
        <div class="flex items-center gap-6 max-md:flex-col">
            <img src="/assets/svg/logo.svg" alt="Toko Brow Logo" class="h-[132px]">
            <div class="space-y-1 max-md:text-center">
                <h3 class="text-h3 text-primary-50">Toko Brow</h3>
                <p class="text-body text-primary-200">
                    Ruang tenang di tengah padatnya rutinitas kota. Tempat terbaik untuk <br class="max-xl:hidden"> menikmati kehangatan suasana dan kelembutan rasa brownies
                </p>
            </div>
        </div>

        {{-- CTA Button --}}
        <a href="https://maps.app.goo.gl/KYKnx3eswVZzjV2J8" target="_blank" class="w-fit shrink-0 bg-primary-800 text-white rounded-xl text-btn-lg py-4 pl-6 pr-4 flex justify-center items-center gap-2 max-lg:w-full">
            <span>Berkunjung Sekarang</span>
            <img src="/assets/svg/arrow-right-up-icon.svg" alt="Arrow Right Up Icon">
        </a>

    </header>

    {{-- Breakline --}}
    <hr class="border-primary-200">

    {{-- Footer Content --}}
    <div class="flex gap-24 max-lg:flex-col max-lg:gap-8 max-xl:gap-16">

        {{-- Toko Brow General Information --}}
        <div class="flex gap-8 flex-col max-md:flex-col max-lg:flex-row">

            {{-- Operational Time --}}
            <div>
                <h3 class="text-h3 text-primary-50 mb-4">Waktu Operasional</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-1.5">
                        <img src="/assets/svg/clock-icon.svg" alt="Clock Icon">
                        <p class="text-body text-primary-200">Hari Senin - Jumat, Jam 8 Pagi s/d 10 Malam</p>
                    </li>
                    <li class="flex items-start gap-1.5">
                        <img src="/assets/svg/clock-icon.svg" alt="Clock Icon">
                        <p class="text-body text-primary-200">Hari Sabtu & Minggu, Jam 10 Pagi s/d 10 Malam</p>
                    </li>
                </ul>
            </div>

            {{-- Social Media --}}
            <div>
                <h3 class="text-h3 text-primary-50 mb-6">Social Media</h3>
                <div class="flex gap-2">
                    <a href="https://share.google/IrjZ87WYlHWj9ZWxj" target="_blank" class="size-12 grid place-content-center bg-primary-800 rounded-full">
                        <img src="/assets/svg/google-icon.svg" alt="Google Toko Brow">
                    </a>
                    <a href="https://www.instagram.com/toko.brow/" target="_blank" class="size-12 grid place-content-center bg-primary-800 rounded-full">
                        <img src="/assets/svg/instagram-icon.svg" alt="Instagram Toko Brow">
                    </a>
                    <a href="https://wa.me/628128328317" target="_blank" class="size-12 grid place-content-center bg-primary-800 rounded-full">
                        <img src="/assets/svg/whatsapp-icon.svg" alt="Whatsapp Toko Brow">
                    </a>
                </div>
            </div>

            {{-- Copyright (Desktop) --}}
            <p class="text-body text-primary-200 max-lg:hidden">&copy; Copyright {{ date('Y') }} Toko Brow. All rights reserved.</p>
        </div>

        {{-- Toko Brow Location --}}
        <div class="flex-1 flex flex-col">
            <h3 class="text-h3 text-primary-50 mb-6">Lokasi Toko Brow</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.683809472745!2d117.14574599999999!3d-0.47047979999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f0012381fe9%3A0xdf6e393887da0372!2sToko%20brow!5e0!3m2!1sid!2sid!4v1782353418686!5m2!1sid!2sid" 
                allowfullscreen="true" 
                loading="lazy" 
                referrerpolicy="strict-origin-when-cross-origin"
                class="rounded-[32px] flex-1 max-lg:rounded-2xl">
            </iframe>
        </div>

        {{-- Copyright (Mobile) --}}
        <p class="text-body text-primary-200 border-t border-primary-200 text-center max-md:pt-6 max-lg:pt-8 lg:hidden">&copy; Copyright {{ date('Y') }} Toko Brow. All rights reserved.</p>
    </div>
    
</footer>