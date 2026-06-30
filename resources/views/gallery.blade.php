@php
    /*
        
        Load semua file gambar yang ada didalam folder /assets/gallery/
        
        Nama file memiliki format : 
        - "Judul Foto__Deskripsi Foto"
        - "Judul Foto" (Tanpa Deskripsi)

        Semua informasi seperti judul dan deskripsi foto akan diekstrak secara otomatis berdasarkan nama file

    */

    $dirPath = public_path('assets/gallery');
    $galleries = [];

    if (file_exists($dirPath)) {
        $files = glob($dirPath . '/*.{webp,jpg,jpeg,png}', GLOB_BRACE);

        foreach ($files as $file) {
            $filename = basename($file);
            
            $cleanName = pathinfo($filename, PATHINFO_FILENAME); 

            $parts = explode('__', $cleanName);

            if (count($parts) >= 2) {
                $title = ucwords($parts[0]);
                $description = $parts[1];
            } else {
                $title = ucwords($cleanName);
                $description = "Koleksi Galeri Toko Brow";
            }

            $galleries[] = [
                'path' => '/assets/gallery/' . $filename,
                'alt' => $title,
                'title' => $title,
                'description' => $description
            ];
        }
    }
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
    <x-navbar/>

    <main class="px-8 py-16 max-sm:px-4">
        <div class="w-full max-w-7xl mx-auto text-center">
            
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
                
                @foreach ($galleries as $item)
                    <div 
                        class="gallery-card break-inside-avoid relative overflow-hidden rounded-2xl group cursor-pointer shadow-sm bg-primary-50 text-start"
                        data-path="{{ $item['path'] }}" 
                        data-desc="{{ $item['description'] }}"
                    >
                        <div class="skeleton-loader w-full aspect-[4/3] bg-neutral-300 animate-pulse rounded-2xl"></div>

                        <img 
                            src="{{ $item['path'] }}" 
                            alt="{{ $item['description'] }}" 
                            class="gallery-img w-full h-auto object-cover block transition-all duration-500 group-hover:scale-105 opacity-0" 
                            loading="lazy" 
                            decoding="async"
                            onload="imageLoaded(this)"
                        >
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-950/90 via-primary-950/40 to-transparent flex flex-col justify-end p-6 opacity-0 translate-y-2 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                            <h3 class="text-h4 text-primary-50 mb-1 font-bold">{{ $item['title'] }}</h3>
                            <p class="text-body text-neutral-300 text-sm leading-relaxed">{{ $item['description'] }}</p>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </main>

    {{-- Image Details Modal --}}
    <div id="gallery-modal" class="hidden fixed inset-0 z-50 items-center justify-center bg-neutral-950/40 backdrop-blur-md p-4 md:p-8 transition-opacity duration-300 opacity-0">
        <button id="modal-close-btn" class="absolute top-6 right-6 text-primary-50 hover:text-neutral-300 transition-colors size-12 grid place-content-center bg-neutral-900/40 hover:bg-neutral-900/80 rounded-full cursor-pointer z-50">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div id="modal-overlay" class="absolute inset-0 cursor-zoom-out"></div>

        <div class="relative max-w-5xl max-h-[85vh] flex flex-col items-center justify-center transition-transform duration-300 scale-95">
            <img id="modal-target-img" src="" alt="" class="max-w-full max-h-[80vh] object-contain rounded-xl">
            <p id="modal-target-desc" class="text-neutral-200 text-center text-sm mt-4 tracking-wide max-w-xl bg-neutral-950/70 backdrop-blur-sm px-5 py-2 rounded-full shadow-lg"></p>
        </div>
    </div>

    {{-- Footer --}}
    <x-footer/>

    <script>
        function imageLoaded(imgElement) {
            const card = imgElement.closest('.gallery-card');
            const skeleton = card.querySelector('.skeleton-loader');
            
            if (skeleton) skeleton.remove(); 
            
            imgElement.classList.remove('opacity-0');
        }

        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('gallery-modal');
            const modalImg = document.getElementById('modal-target-img');
            const modalDesc = document.getElementById('modal-target-desc');
            const modalFrame = modal.querySelector('.relative');
            const cards = document.querySelectorAll('.gallery-card');
            
            const openModal = (path, desc) => {
                modalImg.src = path;
                modalImg.alt = desc;
                modalDesc.textContent = desc;
                
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                setTimeout(() => {
                    modal.classList.remove('opacity-0');
                    modalFrame.classList.remove('scale-95');
                }, 10);
            };

            const closeModal = () => {
                modal.classList.add('opacity-0');
                modalFrame.classList.add('scale-95');
                setTimeout(() => {
                    modal.classList.remove('flex');
                    modal.classList.add('hidden');
                    modalImg.src = '';
                }, 300);
            };

            cards.forEach(card => {
                card.addEventListener('click', () => {
                    const path = card.getAttribute('data-path');
                    const desc = card.getAttribute('data-desc');
                    openModal(path, desc);
                });
            });

            document.getElementById('modal-close-btn').addEventListener('click', closeModal);
            document.getElementById('modal-overlay').addEventListener('click', closeModal);
            window.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
            });
        });
    </script>
</body>
</html>