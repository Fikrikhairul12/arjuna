<header class="navbar-transparent w-full top-0 left-0">
    <div class="container">
        <div class="max-w-7xl mx-auto px-7 py-3 flex items-center justify-between gap-4">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <img src="{{ asset('storage/image/main-logo.png') }}" alt="brand" class="w-20 h-13">
                {{-- <div class="w-9 h-9 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold">
                MB
            </div> --}}
                <span class="font-semibold text-lg text-gray-800">
                    Keripik Tempe Arjuna
                </span>
                <!-- Location -->
                <div class="hidden md:flex items-center text-sm text-gray-600 mx-7">
                    Lokasi:&nbsp;
                    <span class="font-medium text-gray-800">Downtown, NYC</span>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <nav id="nav-menu"
                    class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-62.5 w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/"
                                class="text-base text-dark py-2 mx-8 flex group-hover:text-blue-500">Beranda</a>
                        </li>
                        {{-- <li class="group">
                        <a href="#menu"
                            class="text-base text-dark py-2 mx-8 flex group-hover:text-blue-500">Produk</a>
                    </li> --}}
                        <li class="group">
                            <a href="/tentang"
                                class="text-base text-dark py-2 mx-8 flex group-hover:text-blue-500">Tentang Kami</a>
                        </li>
                        <li class="group">
                            <a href="/kontak"
                                class="text-base text-dark py-2 mx-8 flex group-hover:text-blue-500">Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Actions -->
            <div class="flex items-center gap-4">
                @guest
                    <button onclick="openLogin()"
                        class="px-4 py-1 hover:bg-blue-500 hover:text-white rounded-2xl">Login</button>
                    <button onclick="openRegister()"
                        class="px-4 py-1 hover:bg-blue-500 hover:text-white rounded-2xl">Daftar</button>

                    <!-- LOGIN MODAL -->
                    <div id="loginModal"
                        class="hidden fixed inset-0 z-[9999] bg-black/40 backdrop-blur-sm items-center justify-center">

                        <div class="bg-white p-6 rounded-xl w-[400px]">

                            <h2 class="text-xl font-bold mb-4">Login</h2>

                            <form method="POST" action="/login">
                                @csrf

                                <input type="email" name="email" placeholder="Email"
                                    class="w-full mb-3 border p-2 rounded">

                                <input type="password" name="password" placeholder="Password"
                                    class="w-full mb-4 border p-2 rounded">

                                <button class="w-full bg-blue-500 text-white py-2 rounded">
                                    Login
                                </button>
                            </form>

                        </div>
                    </div>

                    <!-- REGISTER MODAL -->
                    <div id="registerModal"
                        class="hidden fixed inset-0 z-[9999] bg-black/40 backdrop-blur-sm items-center justify-center">
                        <div class="bg-white rounded-xl p-6 w-[450px] animate-fadeIn">
                            <h2 class="text-xl font-semibold mb-4">Daftar</h2>
                            <form method="POST" action="/register">
                                @csrf

                                <table class="w-full text-sm">
                                    <tbody class="space-y-2">
                                        {{-- <tr>
                                            <td class="py-2 pr-4 font-medium">Username</td>
                                            <td>
                                                <input name="username" placeholder="John12"
                                                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                            </td>
                                        </tr> --}}

                                        <tr>
                                            <td class="py-2 pr-4 font-medium">Nama Lengkap</td>
                                            <td>
                                                <input name="name" placeholder="Hal Reilly"
                                                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-2 pr-4 font-medium">Email</td>
                                            <td>
                                                <input name="email" type="email" placeholder="aiueo@gmail.com"
                                                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-2 pr-4 font-medium">Nomor Telepon</td>
                                            <td>
                                                <input name="no_tlpn" placeholder="081234567898"
                                                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-2 pr-4 font-medium">Password</td>
                                            <td>
                                                <input name="password" type="password"
                                                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-2 pr-4 font-medium align-top">Alamat</td>
                                            <td>
                                                <textarea name="address" rows="3" placeholder="Blaisefurt"
                                                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- RECAPTCHA -->
                                <div class="g-recaptcha mb-3" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>

                                <button class="w-full bg-blue-500 text-white py-2 rounded">
                                    Daftar
                                </button>
                            </form>

                        </div>
                    </div>
                @endguest

                @auth
                    <!-- CART -->
                    <a href="#" class="flex items-center gap-1 text-gray-700 hover:text-blue-500 text-sm px-1">
                        <i class="fas fa-shopping-cart fill-current" style="font-size: 25px"></i>
                    </a>
                    <!-- HAMBURGER -->
                    <button id="hamburger"
                        class="relative w-8 h-8 flex flex-col justify-center items-center gap-1 cursor-pointer">
                        <span class="hamburger-line transition-all duration-300"></span>
                        <span class="hamburger-line transition-all duration-300"></span>
                        <span class="hamburger-line transition-all duration-300"></span>
                    </button>

                    <!-- DROPDOWN -->
                    <div id="dropdownMenu"
                        class="hidden absolute right-6 top-16 w-48 bg-white rounded-lg shadow-lg py-3 transition-all duration-300 cursor-pointer">

                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Riwayat Pesanan</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Setting</a>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="text-red-500 w-full text-left px-4 py-2 hover:bg-gray-100">
                                Logout
                            </button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</header>
