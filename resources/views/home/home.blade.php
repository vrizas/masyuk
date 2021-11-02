<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masyuk</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <header class="px-4 py-2 flex shadow sticky top-0 items-center justify-between">
        <a href="#" class="flex items-center gap-2">
            <img src="{{ asset('logo.svg') }}" alt="Logo" class="w-7"> 
            <h1 class="text-xl font-bold">Masyuk</h1>
        </a>
        <nav class="flex gap-3 h-1/2">
            <button class="btn-signup bg-gray-400 px-4 py-2 text-sm rounded hover:bg-gray-500">Signup</button>
            <button class="btn-login bg-gray-400 px-4 py-2 text-sm rounded hover:bg-gray-500">Login</button>
        </nav>
    </header>
    <main class="px-12 py-4">
        <article>
            <section>
                <h2 class="text-3xl font-bold">Selamat Datang!</h2>
                <p class="text-gray-700">Mau masak apa kita hari ini?</p>
            </section>
            <section class="login-form-container fixed inset-0 flex items-center justify-center hidden">
                <div class="login-form-wrapper bg-white rounded py-6 px-8 w-1/2 relative">
                    <button class="btn-close"><i class='bx bx-x absolute top-3 right-3 text-2xl'></i></button>
                    <h3 class="text-2xl font-bold text-center mb-4">Login</h3>
                    <!-- FORM LOGIN -->
                    <form class="flex flex-col" action="" method="POST">
                        <label for="loginEmail" class="text-sm">Email / Username</label>
                        <input type="text" name="email" id="loginEmail" class="px-3 py-2 outline-none text-sm focus:border-blue-500 mb-4 mt-1" placeholder="Masukkan email / username">
                        <label for="loginPassword" class="text-sm">Password</label>
                        <input type="text" name="password" id="loginPassword" class="px-3 py-2 outline-none text-sm focus:border-blue-500 mb-4 mt-1" placeholder="Masukkan password">
                        <div class="action flex flex-col items-center gap-3">
                            <a href="#" class="text-xs">Lupa password?</a>
                            <button type="submit" class="bg-gray-400 px-10 py-2 text-sm rounded hover:bg-gray-500 mb-2">Login</button>
                            <button class="text-xs btn-signup">Belum terdaftar? Daftar sekarang!</button>
                        </div>
                    </form>
                </div>
            </section>
            <section class="signup-form-container fixed inset-0 flex items-center justify-center hidden">
                <div class="signup-form-wrapper bg-white rounded py-6 px-8 w-1/2 relative">
                    <button class="btn-close"><i class='bx bx-x absolute top-3 right-3 text-2xl'></i></button>
                    <h3 class="text-2xl font-bold text-center mb-4">Signup</h3>
                    <!-- FORM SIGNUP -->
                    <form class="flex flex-col" action="" method="POST">
                        <label for="username" class="text-sm">Username</label>
                        <input type="text" name="username" id="username" class="px-3 py-2 outline-none text-sm focus:border-blue-500 mb-4 mt-1" placeholder="Masukkan username">
                        <label for="signupEmail" class="text-sm">Email</label>
                        <input type="email" name="email" id="signupEmail" class="px-3 py-2 outline-none text-sm focus:border-blue-500 mb-4 mt-1" placeholder="Masukkan email">
                        <label for="signupPassword" class="text-sm">Password</label>
                        <input type="password" name="password" id="signupPassword" class="px-3 py-2 outline-none text-sm focus:border-blue-500 mb-4 mt-1" placeholder="Masukkan password">
                        <label for="confirmPassword" class="text-sm">Confirm Password</label>
                        <input type="password" name="confirmPassword" id="confirmPassword" class="px-3 py-2 outline-none text-sm focus:border-blue-500 mb-4 mt-1" placeholder="Masukkan konfirmasi password">
                        <div class="action flex flex-col items-center gap-3">
                            <div>
                                <input type="checkbox" name="syarat" id="syarat">
                                <label class="text-xs" for="syarat">Saya setuju dengan persyaratan pengguna aplikasi Masyuk</label>
                            </div>
                            <button type="submit" class="bg-gray-400 px-10 py-2 text-sm rounded hover:bg-gray-500">Signup</button>
                        </div>
                    </form>
                </div>
            </section>
        </article>
        <article>
            <input type="search">
        </article>
    </main>
    <script src="{{ asset('js/home.js') }}"></script> 
</body>
</html>