<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Toko Brow</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#F9F6F0] min-h-screen flex items-center justify-center px-4 select-none">

    <div class="w-full max-w-[520px] flex flex-col items-center text-center">
        
        {{-- Logo Toko Brow --}}
        <a href="{{ url('/') }}" class="mb-8 block transition-transform active:scale-95">
            <img src="/assets/svg/logo.svg" alt="Toko Brow Logo" class="h-24 mx-auto">
        </a>

        <h2 class="text-h2 text-primary-950 mb-0.5">Selamat Datang Kembali</h2>
        <p class="text-body text-neutral-600 mb-8">Silakan masukkan email dan password akun anda</p>

        {{-- Form Login --}}
        <form method="POST" class="w-full space-y-5 text-left">

            {{-- Input Email --}}
            <div class="flex flex-col">
                <label for="email" class="text-base font-heading font-bold text-primary-950 mb-2">Alamat Email</label>
                <input type="email" id="email" name="email" required placeholder="Masukkan alamat email disini..."
                    class="w-full px-4 py-3 bg-white border border-neutral-300 rounded-lg text-body text-primary-950 placeholder-neutral-400 focus:outline-none focus:border-primary-800 focus:ring-1 focus:ring-primary-800 transition-all">
            </div>

            {{-- Input Password --}}
            <div class="flex flex-col">
                <label for="password" class="text-base font-heading font-bold text-primary-950 mb-2">Password</label>
                <input type="password" id="password" name="password" required placeholder="Masukkan password disini..."
                    class="w-full px-4 py-3 bg-white border border-neutral-300 rounded-lg text-body text-primary-950 placeholder-neutral-400 focus:outline-none focus:border-primary-800 focus:ring-1 focus:ring-primary-800 transition-all">
            </div>

            {{-- Button Submit --}}
            <button type="submit" 
                class="w-full bg-primary-800 hover:bg-primary-900 text-white rounded-lg py-3.5 mt-2 font-medium transition-all duration-300 active:scale-[0.98] cursor-pointer shadow-sm text-btn">
                Masuk Sekarang
            </button>
        </form>

        {{-- Register Link --}}
        <p class="font-body text-base text-neutral-600 mt-8">
            Belum punya akun? 
            <a href="{{ url('/register') }}" class="font-semibold text-primary-800 hover:underline">Daftar di sini</a>
        </p>

    </div>

</body>
</html>